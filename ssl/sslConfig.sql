USE prestashop;
UPDATE `ps_shop_url` SET `domain` = 'localhost:8001', `domain_ssl` = 'localhost:8002' WHERE `ps_shop_url`.`id_shop_url` = 1;
UPDATE `ps_configuration` SET `value` = 1 WHERE `ps_configuration`.`name` = 'PS_SSL_ENABLED';
UPDATE `ps_configuration` SET `value` = 1 WHERE `ps_configuration`.`name` = 'PS_SSL_ENABLED_EVERYWHERE';
