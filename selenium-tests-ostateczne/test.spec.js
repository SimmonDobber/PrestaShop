const { step } = require('mocha-steps');
const assert = require('assert');
const { Chance } = require('chance');
const firefox = require('selenium-webdriver/firefox');
const { By, Builder, Key } = require('selenium-webdriver');
const { suite } = require('selenium-webdriver/testing');
require('geckodriver');

suite(function(env) {
    describe('xkom - pkp', async function () {
      const chance = new Chance();
      let driver;
      const config = {
        categoriesNames: ['laptopy-notebooki-ultrabooki', 'smartfony-i-telefony'],
        productsInCategory: 6,
        minQuantity: 1,
        maxQuantity: 4,
        productsToDelete: 1,
        userGender: '1',
        userFirstname: chance.first({gender: 'male'}),
        userLastname: chance.last(),
        userEmail: chance.email({domain: 'test.com'}),
        userPassword: 'test2137',
        orderAddress: 'Grunwaldzka 138',
        orderPostcode: '80-200',
        orderCity: 'Gdańsk'
      };

      this.timeout(60000);

      before(async function () {
        driver = await new Builder()
          .withCapabilities({"acceptInsecureCerts": true})
          .forBrowser('firefox')
          .build();
      });

      after(async () => await driver.quit());

      step('Szukanie i dodawanie produktów do koszyka', async function() {
      await driver.get('https://localhost:8002/');
      assert.equal(await driver.getTitle(), "x-kom pkp");

      await driver.manage().setTimeouts({implicit: 500});

      const category = await driver.findElement(By.className('dropdown-item'));
      assert.equal(await category.getText(), "LAPTOPY-NOTEBOOKI-ULTRABOOKI");
      let category_link = await category.getAttribute('href');

      await driver.get(category_link);
      assert.equal(await driver.getTitle(), "laptopy-notebooki-ultrabooki");

      const submenu = await driver.findElements(By.className('dropdown-item'));

      let categories_links = {};
      for (let subcat of submenu) {
        let subcattext = await subcat.getText();

        for (let cat of config.categoriesNames) {
          if (subcattext.toLowerCase() === cat) {
            categories_links[cat] = await subcat.getAttribute('href');
            break;
          }
        }
        if (Object.keys(categories_links).length == config.categoriesNames.length) {
          break;
        }
      }
      assert.equal(Object.keys(categories_links).length, config.categoriesNames.length);

      let product_links = [];
      for (let key in categories_links) {
        await driver.get(categories_links[key]);
        assert.equal(await driver.getTitle(), key);

        let products = await driver.findElements(By.css('#js-product-list .product'));
        products = await products.slice(0, config.productsInCategory);

        for (let product of products) {
          let link = await product.findElement(By.tagName('a'));
          product_links.push(await link.getAttribute('href'));
        }
      }
      assert.equal(product_links.length, config.categoriesNames.length * config.productsInCategory);
      for (let product_link of product_links) {
        await driver.get(product_link);
        await new Promise(r => setTimeout(r, 1000));
        let amount = Math.floor(Math.random() * (config.maxQuantity - 1)) + config.minQuantity;
        let quantity = await driver.findElement(By.id('quantity_wanted'));
        await quantity.sendKeys(Key.CONTROL + "a");
        await quantity.sendKeys(Key.DELETE);
        await quantity.sendKeys(amount.toString());

        await driver.findElement(By.className('add-to-cart')).click();
        await new Promise(r => setTimeout(r, 1000));
      }
       });

     step('Usuwanie elementów z koszyka', async function () {
        const cart = await driver.findElement(By.css('#_desktop_cart a'));
        await driver.get(await cart.getAttribute('href'));
        assert.equal(await driver.getTitle(), 'Koszyk');

        let cart_items = await driver.findElements(By.className('cart-item'));
        assert.equal(cart_items.length, config.categoriesNames.length * config.productsInCategory);
        let remove_links = await driver.findElements(By.className('remove-from-cart'));
        remove_links = remove_links.slice(0, config.productsToDelete);

        for (let remove_link of remove_links) {
          await remove_link.click();
        }
        driver.navigate().refresh();
        assert.equal(await driver.getTitle(), 'Koszyk');
        cart_items = await driver.findElements(By.className('cart-item'));
        assert.equal(cart_items.length, config.categoriesNames.length * config.productsInCategory - config.productsToDelete);
     });

      step('Rejestracja nowego użytkownika', async function () {
        const login = await driver.findElement(By.css('#_desktop_user_info a'));
        await driver.get(await login.getAttribute('href'));

        const register = await driver.findElement(By.css('.no-account a'));
        await driver.get(await register.getAttribute('href'));

        await driver.findElement(By.id('field-id_gender-' + config.userGender)).click();
        await driver.findElement(By.id('field-firstname')).sendKeys(config.userFirstname, Key.ENTER);
        await driver.findElement(By.id('field-lastname')).sendKeys(config.userLastname, Key.ENTER);
        await driver.findElement(By.id('field-email')).sendKeys(config.userEmail, Key.ENTER);
        await driver.findElement(By.id('field-password')).sendKeys(config.userPassword, Key.ENTER);
        await driver.findElement(By.id('field-password')).sendKeys(config.userPassword, Key.ENTER);
        await driver.findElement(By.name('customer_privacy')).click();

        await driver.findElement(By.className('form-control-submit')).click();

        const logout = await driver.findElement(By.css('#_desktop_user_info a'));
        assert(await logout.getText(), 'Wyloguj się');
      });
     step('Wypełnianie adresu', async function () {
        const cart1 = await driver.findElement(By.css('#_desktop_cart a'));
        await driver.get(await cart1.getAttribute('href'));
        assert.equal(await driver.getTitle(), 'Koszyk');

        const submit_order = await driver.findElement(By.css('.checkout a'));
        await driver.get(await submit_order.getAttribute('href'));
        await new Promise(r => setTimeout(r, 10000));
        await driver.findElement(By.id('field-address1')).sendKeys(config.orderAddress);
        await driver.findElement(By.id('field-postcode')).sendKeys(config.orderPostcode);
        await driver.findElement(By.id('field-city')).sendKeys(config.orderCity, Key.ENTER);
     });
      step('Wybór metody dostawy', async function () {
        await new Promise(r => setTimeout(r, 4000));
        const deliveries = await driver.findElements(By.className('delivery-options'));
        for (let delivery of deliveries) {
          const delivery_name = await delivery.findElement(By.className('carrier-name'));
          if (await delivery_name.getText() === 'DHL') {
            await delivery.findElement(By.tagName('input')).click();
            break;
          }
        }
        await new Promise(r => setTimeout(r, 4000));
        await driver.findElement(By.name('confirmDeliveryOption')).click();
      });

      step('Wybór metody płatności', async function () {
        const payments = await driver.findElements(By.className('payment-option'));
        for (let payment of payments) {
          const payment_name = await payment.findElement(By.tagName('label'));
          if (await payment_name.getText() === 'Zapłać gotówką przy odbiorze') {
            await payment.findElement(By.tagName('input')).click();
            break;
          }
        }
        await driver.findElement(By.id('conditions_to_approve[terms-and-conditions]')).click();
        await driver.findElement(By.css('#payment-confirmation button')).click();
        while (await driver.getTitle() !== 'Potwierdzenie zamówienia') {
          await new Promise(r => setTimeout(r, 2000));
        }
        assert.equal(await driver.getTitle(), 'Potwierdzenie zamówienia');
      });
      step('Sprawdzenie statusu zamówienia', async function () {
        const footer = await driver.findElements(By.css('#footer_account_list a'));
        for (let link of footer) {
          if (await link.getText() === 'Zamówienia') {
            await driver.get(await link.getAttribute('href'));
            break;
          }
        }

        assert.equal(await driver.getTitle(), 'Historia zamówień');
        const details = await driver.findElement(By.className('view-order-details-link'));
        await driver.get(await details.getAttribute('href'));
        const order_history = await driver.findElement(By.id('order-history'));
        assert.equal(await order_history.findElement(By.tagName('h3')).getText(), 'SZCZEGÓŁY ZAMÓWIENIA');
        const status = await order_history.findElement(By.className('label'));
        assert.equal(await status.getText(), 'Oczekiwanie na płatność przy odbiorze');
      });
   });
});
