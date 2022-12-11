import time
from selenium import webdriver
from selenium.webdriver.firefox.service import Service

driver = webdriver.Firefox(service=Service(r'./drivers/geckodriver'))

driver.get("http://localhost:8001")

def verify_configuration(cfg):
    for property in cfg:
        if (cfg[property] == 'undefined'):
            throw Error('Property cfg.' + property + ' is undefined')
        elif (cfg[property] == 'string' and cfg[property].length == 0):
            throw Error('Property cfg.' + property + '" is empty')

    if (cfg.categories_names.length < 1):
        throw Error('cfg.categories_names requires atleast one category'); }
    if (cfg.products_per_category < 1) { throw new Error('cfg.products_per_category needs to be bigger than 0'); }
    if (cfg.min_quantity < 1) { throw new Error('cfg.min_quantity needs to be bigger than 0'); }
    if (cfg.max_quantity < cfg.min_quantity) { throw new Error('cfg.min_quantity needs to be bigger than cfg.max_quantity'); }
    if (cfg.products_to_remove >= cfg.categories_names.length * cfg.products_per_category):
        throw Error('cfg.products_to_remove cant be bigger than amount of products to add')

driver.close()
