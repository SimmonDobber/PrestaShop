import random
import re
import time

import pandas as pd
from requests_html import HTMLSession

print('initialize session')

s = HTMLSession()
items = []

print('finished!')


def request(url):
    r = s.get(url)
    r.html.render(sleep=1)
    return r.html.xpath('//*[@id="listing-container"]', first=True)


def parse(products, categoryName):
    for productLink in products.absolute_links:
        if "#Opinie" in productLink or "apple" in productLink:
            continue
        print(productLink)
        r = s.get(productLink)
        # r2 = request.get(productLink)
        # print(r.status_code)
        try:
            name = r.html.find('h1.sc-1bker4h-4', first=True).text
        except:
            name = 'Dobry produkt'
        try:
            price = r.html.find('div.sc-n4n86h-4', first=True).text
        except:
            price = '2 199,37 zł'
        price = price.replace("zł", "").replace(" ", "").replace(",", ".")
        priceNetto = str(round(float(price) / 1.23, 2))
        try:
            rating = r.html.find('span.sc-1cbpuwv-1', first=True).text
        except:
            rating = '1,0'
        try:
            desc = r.html.find('div.col-md-10', first=True).text
        except:
            desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit, risus et accumsan convallis, enim dolor pharetra risus, sed laoreet ex erat ut mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse non enim vitae ex sollicitudin auctor. Integer vulputate nec odio ac molestie. Nunc venenatis accumsan ex, nec molestie metus. Nullam dapibus accumsan justo, eu hendrerit augue bibendum in. Suspendisse iaculis a eros.'
        try:
            r.html.find('span.sc-fvs7b3-1', first=True).text
            stock = '1'
            amount = str(random.randint(2, 12))
        except:
            stock = '0'
            amount = '0'
        try:
            attributes = (r.html.find('span.sc-p7lf0n-2'), r.html.find('span.sc-p7lf0n-3'))
            attributesList = [(attributes[0][i].text, attributes[1][i].text) for i in
                              range(min(len(attributes[0]), len(attributes[1])))]
            try:
                processor = getSelectedAttribute(attributesList, 'Procesor')
            except:
                processor = 'Intel Core i5-1135G7'
            try:
                memory = getSelectedAttribute(attributesList, 'Pamięć')
            except:
                memory = '8 BG'
        except:
            processor = 'Intel Core i5-1135G7'
            memory = "8 GB"
        try:
            img = re.findall("https://cdn\.x-kom\.pl/i/setup/images/prod/big/.{0,100}jpg", r.text)[0]
            try:
                img_data = s.get(img).content
                pat = name + '.jpg'
                pat = pat.replace(' ', '_').replace('/', '_').replace('+', '_').replace('?', '_')
                with open('images\\' + pat, 'wb') as handler:
                    handler.write(img_data)
            except:
                img_data = None
                pat = 'none'
        except:
            img = 'none'
            pat = 'none'
        print(img)

        item = {
            'Nazwa': name,
            'Opis': '\"'+desc+'\"',
            'Cena bez podatku.': priceNetto,
            'Cena zawiera podatek.': price,
            'Dostępne do zamówienia': stock,
            'Ilość': amount,
            'Kategorie': categoryName,
            'Cecha': 'Procesor:'+processor+':1:0;Pamięć:'+memory+':2:0',
            'Adresy URL zdjęcia': 'http://localhost/import/'+pat
        }
        items.append(item)
        time.sleep(0.1)


def getSelectedAttribute(list, name):
    for item in list:
        if name in item[0]:
            return item[1]


def output(categoryName):
    df = pd.DataFrame(items)
    df.to_csv(categoryName + '.csv', index=False)
    print('Saved to CSV file.')


def extract_data_from_category(url, categoryName):
    global items
    items = []
    x = 1
    print('scrapping of ' + categoryName + ' started! ')
    while True:
        try:
            products = request(url + f'?page={x}')
            print(f'Getting items from page {x} in category' + categoryName)
            parse(products, categoryName)
            print('Total Items: ', len(items))
            x = x + 1
            time.sleep(2)
            if len(items) > 150:
                break
        except:
            print('No more items!')
            break
    output(categoryName)


print('beginning of scrapping process')
extract_data_from_category('https://www.x-kom.pl/g-2/c/159-laptopy-notebooki-ultrabooki.html',
                           'laptopy-notebooki-ultrabooki')
extract_data_from_category('https://www.x-kom.pl/g-4/c/1590-smartfony-i-telefony.html', 'smartfony-i-telefony')