<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2017 Amasty (https://www.amasty.com)
 * @package Amasty_Feed
 */
$installer = $this;
$installer->startSetup();

$installer->run("
    ALTER TABLE `{$this->getTable('amfeed/template')}` 
    ADD COLUMN `cond_attribute_sets` TEXT DEFAULT NULL after cond_type;");

$installer->run("
INSERT INTO `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','0','test','test','0','0','0','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','','','',NULL,'a:12:{s:4:\"name\";a:4:{i:0;s:4:\"name\";i:1;s:11:\"description\";i:2;s:3:\"url\";i:3;s:6:\"newurl\";}s:6:\"before\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:4:\"type\";a:4:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";}s:4:\"attr\";a:4:{i:0;s:4:\"name\";i:1;s:11:\"description\";i:2;s:3:\"url\";i:3;s:15:\"configurableurl\";}s:3:\"txt\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:9:\"meta_tags\";a:5:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";}s:6:\"images\";a:5:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";}s:5:\"after\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:6:\"format\";a:5:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:5:\"as_is\";i:3;s:5:\"as_is\";i:4;s:5:\"as_is\";}s:12:\"image_format\";a:5:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";}s:6:\"length\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:6:\"parent\";a:5:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";}}','1','','34','44','','0','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','291','291','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','Google.com','Google.com','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<?xml version=\"1.0\"?> <rss version=\"2.0\" xmlns:g=\"http://base.google.com/ns/1.0\"> <channel>\r\n%now[Y:m:d]%\r\n%now[Y:m:d H:i:s]%\r\n%now[Y:m:d H:i:s]%\r\n%now[Y:m:d H:i:s]%','<g:id>{type=\"attribute\" value=\"sku\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</g:id>\r\n<title>{type=\"attribute\" value=\"name\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</title>\r\n<description>{type=\"attribute\" value=\"description\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</description> \r\n<g:product_type>{type=\"attribute\" value=\"category_name\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</g:product_type> \r\n<link>{type=\"attribute\" value=\"url\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</link> \r\n<g:image_link>{type=\"attribute\" value=\"image\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:image_link> \r\n<g:condition>{type=\"text\" value=\"new\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:condition>\r\n<g:availability>{type=\"attribute\" value=\"is_in_stock\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:availability> \r\n<g:price>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"} USD</g:price>\r\n<g:brand>{type=\"attribute\" value=\"manufacturer\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</g:brand>\r\n<g:google_product_category>{type=\"attribute\" value=\"category_name\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:google_product_category>\r\n<g:tax>\r\n <g:country>US</g:country>\r\n <g:rate>0</g:rate>\r\n <g:tax_ship>n</g:tax_ship>\r\n</g:tax>\r\n<g:shipping>\r\n <g:country>US</g:country>\r\n <g:price>0 USD</g:price>\r\n</g:shipping>\r\n<g:identifier_exists>FALSE</g:identifier_exists>\r\n<![CDATA[<sender>John Smith</sender>]]>\r\n<now>%now[Y:m:d H:i:s]%</now>','xuiau %now[Y:m:d H:i:s]%\r\n</channel> </rss>','item','a:0:{}','0','','34','44','y.m.d','2','.',',','0','0','1','0','0','0','0',NULL,'NULL','NULL','NULL','NULL','0','272','272','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','0','pricegrabber.com','pricegrabber','0','1','1','simple,configurable',NULL,'a:0:{}','','','',NULL,'a:12:{s:4:\"name\";a:21:{i:0;s:6:\"Retsku\";i:1;s:13:\"Parent Retsku\";i:2;s:13:\"Product Title\";i:3;s:20:\"Detailed Description\";i:4;s:14:\"Categorization\";i:5;s:23:\"Merchant Categorization\";i:6;s:11:\"Product URL\";i:7;s:17:\"Primary Image URL\";i:8;s:13:\"Selling Price\";i:9;s:9:\"Condition\";i:10;s:12:\"Availability\";i:11;s:17:\"Manufacturer Name\";i:12;s:24:\"Manufacturer Part Number\";i:13;s:23:\"GTIN (UPC / EAN / ISBN)\";i:14;s:5:\"Color\";i:15;s:4:\"Size\";i:16;s:6:\"Gender\";i:17;s:3:\"Age\";i:18;s:6:\"Mature\";i:19;s:10:\"Parent UPC\";i:20;s:6:\"Weight\";}s:6:\"before\";a:22:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";i:18;s:0:\"\";i:19;s:0:\"\";i:20;s:0:\"\";i:21;s:0:\"\";}s:4:\"type\";a:21:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";i:7;s:9:\"attribute\";i:8;s:9:\"attribute\";i:9;s:4:\"text\";i:10;s:4:\"text\";i:11;s:9:\"attribute\";i:12;s:9:\"attribute\";i:13;s:9:\"attribute\";i:14;s:4:\"text\";i:15;s:4:\"text\";i:16;s:4:\"text\";i:17;s:4:\"text\";i:18;s:4:\"text\";i:19;s:4:\"text\";i:20;s:9:\"attribute\";}s:4:\"attr\";a:21:{i:0;s:3:\"sku\";i:1;s:3:\"sku\";i:2;s:4:\"name\";i:3;s:11:\"description\";i:4;s:13:\"category_name\";i:5;s:13:\"category_name\";i:6;s:15:\"configurableurl\";i:7;s:5:\"image\";i:8;s:5:\"price\";i:9;s:16:\"accessories_size\";i:10;s:16:\"accessories_size\";i:11;s:12:\"manufacturer\";i:12;s:3:\"sku\";i:13;s:3:\"sku\";i:14;s:5:\"color\";i:15;s:4:\"size\";i:16;s:6:\"gender\";i:17;s:16:\"accessories_type\";i:18;s:16:\"accessories_size\";i:19;s:16:\"accessories_size\";i:20;s:6:\"weight\";}s:3:\"txt\";a:22:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:3:\"New\";i:10;s:3:\"Yes\";i:11;s:0:\"\";i:12;s:26:\"{Manufacturer Part Number}\";i:13;s:25:\"{GTIN (UPC / EAN / ISBN)}\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";i:18;s:0:\"\";i:19;s:0:\"\";i:20;s:0:\"\";i:21;s:0:\"\";}s:9:\"meta_tags\";a:22:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";i:10;s:10:\"meta_title\";i:11;s:10:\"meta_title\";i:12;s:10:\"meta_title\";i:13;s:10:\"meta_title\";i:14;s:10:\"meta_title\";i:15;s:10:\"meta_title\";i:16;s:10:\"meta_title\";i:17;s:10:\"meta_title\";i:18;s:10:\"meta_title\";i:19;s:10:\"meta_title\";i:20;s:10:\"meta_title\";i:21;s:10:\"meta_title\";}s:6:\"images\";a:22:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";i:10;s:7:\"image_1\";i:11;s:7:\"image_1\";i:12;s:7:\"image_1\";i:13;s:7:\"image_1\";i:14;s:7:\"image_1\";i:15;s:7:\"image_1\";i:16;s:7:\"image_1\";i:17;s:7:\"image_1\";i:18;s:7:\"image_1\";i:19;s:7:\"image_1\";i:20;s:7:\"image_1\";i:21;s:7:\"image_1\";}s:5:\"after\";a:22:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";i:18;s:0:\"\";i:19;s:0:\"\";i:20;s:0:\"\";i:21;s:0:\"\";}s:6:\"format\";a:22:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:10:\"strip_tags\";i:3;s:10:\"strip_tags\";i:4;s:5:\"as_is\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"price\";i:9;s:5:\"as_is\";i:10;s:5:\"as_is\";i:11;s:5:\"as_is\";i:12;s:5:\"as_is\";i:13;s:5:\"as_is\";i:14;s:5:\"as_is\";i:15;s:5:\"as_is\";i:16;s:5:\"as_is\";i:17;s:5:\"as_is\";i:18;s:5:\"as_is\";i:19;s:5:\"as_is\";i:20;s:5:\"as_is\";i:21;s:5:\"as_is\";}s:12:\"image_format\";a:22:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";i:10;s:4:\"base\";i:11;s:4:\"base\";i:12;s:4:\"base\";i:13;s:4:\"base\";i:14;s:4:\"base\";i:15;s:4:\"base\";i:16;s:4:\"base\";i:17;s:4:\"base\";i:18;s:4:\"base\";i:19;s:4:\"base\";i:20;s:4:\"base\";i:21;s:4:\"base\";}s:6:\"length\";a:22:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:4:\"1500\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";i:18;s:0:\"\";i:19;s:0:\"\";i:20;s:0:\"\";i:21;s:0:\"\";}s:6:\"parent\";a:22:{i:0;s:2:\"no\";i:1;s:3:\"yes\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";i:10;s:2:\"no\";i:11;s:2:\"no\";i:12;s:2:\"no\";i:13;s:2:\"no\";i:14;s:2:\"no\";i:15;s:2:\"no\";i:16;s:2:\"no\";i:17;s:2:\"no\";i:18;s:2:\"no\";i:19;s:2:\"no\";i:20;s:2:\"no\";i:21;s:2:\"no\";}}','1','','110','124','','2','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','255','255','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','0','shopzilla.com','shopzilla','0','1','1','simple',NULL,'a:0:{}','','','',NULL,'a:12:{s:4:\"name\";a:15:{i:0;s:11:\"Category ID\";i:1;s:12:\"Manufacturer\";i:2;s:5:\"Title\";i:3;s:11:\"Description\";i:4;s:11:\"Product URL\";i:5;s:9:\"Image URL\";i:6;s:3:\"SKU\";i:7;s:12:\"Availability\";i:8;s:9:\"Condition\";i:9;s:11:\"Ship Weight\";i:10;s:9:\"Ship Cost\";i:11;s:3:\"Bid\";i:12;s:16:\"Promotional Code\";i:13;s:3:\"UPC\";i:14;s:5:\"Price\";}s:6:\"before\";a:16:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";}s:4:\"type\";a:15:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";i:7;s:4:\"text\";i:8;s:4:\"text\";i:9;s:9:\"attribute\";i:10;s:4:\"text\";i:11;s:4:\"text\";i:12;s:4:\"text\";i:13;s:4:\"text\";i:14;s:9:\"attribute\";}s:4:\"attr\";a:15:{i:0;s:13:\"category_name\";i:1;s:12:\"manufacturer\";i:2;s:4:\"name\";i:3;s:11:\"description\";i:4;s:15:\"configurableurl\";i:5;s:5:\"image\";i:6;s:3:\"sku\";i:7;s:16:\"accessories_size\";i:8;s:16:\"accessories_size\";i:9;s:6:\"weight\";i:10;s:16:\"accessories_size\";i:11;s:16:\"accessories_size\";i:12;s:16:\"accessories_size\";i:13;s:16:\"accessories_size\";i:14;s:5:\"price\";}s:3:\"txt\";a:16:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:8:\"In Stock\";i:8;s:3:\"New\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";}s:9:\"meta_tags\";a:16:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";i:10;s:10:\"meta_title\";i:11;s:10:\"meta_title\";i:12;s:10:\"meta_title\";i:13;s:10:\"meta_title\";i:14;s:10:\"meta_title\";i:15;s:10:\"meta_title\";}s:6:\"images\";a:16:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";i:10;s:7:\"image_1\";i:11;s:7:\"image_1\";i:12;s:7:\"image_1\";i:13;s:7:\"image_1\";i:14;s:7:\"image_1\";i:15;s:7:\"image_1\";}s:5:\"after\";a:16:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";}s:6:\"format\";a:16:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:10:\"strip_tags\";i:3;s:10:\"strip_tags\";i:4;s:5:\"as_is\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"as_is\";i:9;s:5:\"as_is\";i:10;s:5:\"as_is\";i:11;s:5:\"as_is\";i:12;s:5:\"as_is\";i:13;s:5:\"as_is\";i:14;s:5:\"price\";i:15;s:5:\"as_is\";}s:12:\"image_format\";a:16:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";i:10;s:4:\"base\";i:11;s:4:\"base\";i:12;s:4:\"base\";i:13;s:4:\"base\";i:14;s:4:\"base\";i:15;s:4:\"base\";}s:6:\"length\";a:16:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:3:\"100\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";}s:6:\"parent\";a:16:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";i:10;s:2:\"no\";i:11;s:2:\"no\";i:12;s:2:\"no\";i:13;s:2:\"no\";i:14;s:2:\"no\";i:15;s:2:\"no\";}}','1','','110','9','','2','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','218','218','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','0','Amazon Ads','amazon.ads','0','1','1','simple',NULL,'a:0:{}','','','',NULL,'a:12:{s:4:\"name\";a:13:{i:0;s:8:\"Category\";i:1;s:5:\"Title\";i:2;s:4:\"Link\";i:3;s:3:\"SKU\";i:4;s:5:\"Price\";i:5;s:5:\"Brand\";i:6;s:10:\"Department\";i:7;s:3:\"UPC\";i:8;s:5:\"Image\";i:9;s:11:\"Description\";i:10;s:12:\"Manufacturer\";i:11;s:15:\"Mfr part number\";i:12;s:15:\"Shipping Weight\";}s:6:\"before\";a:14:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";}s:4:\"type\";a:13:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:4:\"text\";i:7;s:9:\"attribute\";i:8;s:9:\"attribute\";i:9;s:9:\"attribute\";i:10;s:9:\"attribute\";i:11;s:9:\"attribute\";i:12;s:9:\"attribute\";}s:4:\"attr\";a:13:{i:0;s:13:\"category_name\";i:1;s:4:\"name\";i:2;s:15:\"configurableurl\";i:3;s:3:\"sku\";i:4;s:5:\"price\";i:5;s:12:\"manufacturer\";i:6;s:16:\"accessories_size\";i:7;s:3:\"sku\";i:8;s:5:\"image\";i:9;s:11:\"description\";i:10;s:12:\"manufacturer\";i:11;s:3:\"sku\";i:12;s:6:\"weight\";}s:3:\"txt\";a:14:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:10:\"men, women\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";}s:9:\"meta_tags\";a:14:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";i:10;s:10:\"meta_title\";i:11;s:10:\"meta_title\";i:12;s:10:\"meta_title\";i:13;s:10:\"meta_title\";}s:6:\"images\";a:14:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";i:10;s:7:\"image_1\";i:11;s:7:\"image_1\";i:12;s:7:\"image_1\";i:13;s:7:\"image_1\";}s:5:\"after\";a:14:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";}s:6:\"format\";a:14:{i:0;s:5:\"as_is\";i:1;s:10:\"strip_tags\";i:2;s:5:\"as_is\";i:3;s:5:\"as_is\";i:4;s:5:\"price\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"as_is\";i:9;s:10:\"strip_tags\";i:10;s:5:\"as_is\";i:11;s:5:\"as_is\";i:12;s:5:\"as_is\";i:13;s:5:\"as_is\";}s:12:\"image_format\";a:14:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";i:10;s:4:\"base\";i:11;s:4:\"base\";i:12;s:4:\"base\";i:13;s:4:\"base\";}s:6:\"length\";a:14:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:3:\"100\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";}s:6:\"parent\";a:14:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";i:10;s:2:\"no\";i:11;s:2:\"no\";i:12;s:2:\"no\";i:13;s:2:\"no\";}}','1','','110','9','2','0','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','218','218','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','cj.com','cj','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<?xml version=\"1.0\"?>\r\n<!DOCTYPE product_catalog_data SYSTEM \"http://www.jdoqocy.com/content/dtd/product_catalog_data_1_1.dtd\">\r\n<product_catalog_data>\r\n<header>\r\n<cid></cid>\r\n<subid></subid>\r\n<datefmt>%now[Y:m:d H:i:s]%</datefmt>\r\n<processtype>OVERWRITE</processtype>\r\n<aid>1643253</aid>\r\n</header>','<name>{type=\"attribute\" value=\"name\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</name>\r\n<keywords>{type=\"attribute\" value=\"meta_keyword\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</keywords>\r\n<description>{type=\"attribute\" value=\"description\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</description>\r\n<sku>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</sku>\r\n<buyurl>{type=\"attribute\" value=\"url\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</buyurl>\r\n<available>Yes</available>\r\n<imageurl>{type=\"attribute\" value=\"image\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</imageurl>\r\n<price>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</price>\r\n<saleprice>{type=\"attribute\" value=\"special_price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</saleprice>\r\n<currency>USD</currency>\r\n<upc>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</upc>\r\n<promotionaltext>promotional text</promotionaltext>\r\n<advertisercategory>{type=\"attribute\" value=\"category\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</advertisercategory>\r\n<manufacturer>{type=\"attribute\" value=\"manufacturer\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</manufacturer>\r\n<offline>Yes</offline>\r\n<online>Yes</online>\r\n<instock>Yes</instock>\r\n<condition>New</condition>','</product_catalog_data>','product','a:0:{}','0','','34','44','','2','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','272','272','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','Sears.com Inventory','sears_inventory','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<store-inventory xmlns=\"http://seller.marketplace.sears.com/catalog/v2\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://seller.marketplace.sears.com/catalog/v2 http://seller.marketplace.sears.com/SellerPortal/s/schema/rest/inventory/import/v2/store-inventory.xsd\">','<item item-id=\"{type=\"attribute\" value=\"entity_id\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}\">\r\n  <locations>\r\n      <location location-id=\"##\">\r\n          <quantity>{type=\"attribute\" value=\"qty\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</quantity>\r\n          <pick-up-now-eligible>true</pick-up-now-eligible>\r\n      </location>\r\n  </locations>\r\n</item>\r\n','</store-inventory>',NULL,'a:0:{}','0','','34','44','','0','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','275','275','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','Sears.com Item','sears_item','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<catalog-feed xmlns=\"http://seller.marketplace.sears.com/catalog/v10\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://seller.marketplace.sears.com/catalog/v10 ../../../../../rest/catalog/import/v10/lmp-item.xsd\">\r\n	<fbm-catalog>\r\n		<items>','<item item-id=\"{type=\"attribute\" value=\"entity_id\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}\">\r\n    <title>{type=\"attribute\" value=\"name\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</title>\r\n    <short-desc>{type=\"attribute\" value=\"short_description\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</short-desc>\r\n    <mature-content>true</mature-content>\r\n    <upc>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</upc>\r\n    <item-class id=\"{type=\"attribute\" value=\"entity_id\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}\"></item-class>\r\n    <your-categorization>{type=\"attribute\" value=\"category\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</your-categorization>\r\n    <long-desc>{type=\"attribute\" value=\"description\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</long-desc>\r\n    <model-number>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</model-number>\r\n    <standard-price>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</standard-price>\r\n    <sale></sale>\r\n    <shipping-override></shipping-override>\r\n    <map-price-indicator>strict</map-price-indicator>\r\n    <brand>{type=\"attribute\" value=\"manufacturer\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</brand>\r\n    <shipping-length>1</shipping-length>\r\n    <shipping-width>1</shipping-width>\r\n    <shipping-height>1</shipping-height>\r\n    <shipping-weight>1</shipping-weight>\r\n    <local-marketplace-flags>\r\n        <is-restricted>false</is-restricted>\r\n        <perishable>false</perishable>\r\n        <requires-refrigeration>false</requires-refrigeration>\r\n        <requires-freezing>false</requires-freezing>\r\n        <contains-alcohol>false</contains-alcohol>\r\n        <contains-tobacco>false</contains-tobacco>\r\n    </local-marketplace-flags>\r\n    <image-url>\r\n        <url>{type=\"attribute\" value=\"image\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</url>\r\n    </image-url>\r\n    <attributes>\r\n        <attribute>\r\n          <attribute-id>5951</attribute-id>\r\n          <attribute-value-id>\r\n            <name>{type=\"attribute\" value=\"name\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</name>\r\n          </attribute-value-id>\r\n        </attribute>\r\n    </attributes>\r\n</item>','      </items>\r\n  </fbm-catalog>\r\n</catalog-feed>',NULL,'a:0:{}','0','','34','44','2','0','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','272','272','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','Sears.com Price','sears_price','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<pricing-feed xmlns=\"http://seller.marketplace.sears.com/pricing/v1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://seller.marketplace.sears.com/SellerPortal/s/schema/pricing pricing-xml-feed-v1.xsd\">\r\n	<fbm-pricing>','<item item-id=\"{type=\"attribute\" value=\"entity_id\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}\">\r\n  <standard-price>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</standard-price>\r\n  <handling-fee>0.00</handling-fee>\r\n  <map-price-indicator>strict</map-price-indicator>\r\n</item>\r\n','	</fbm-pricing>\r\n</pricing-feed>',NULL,'a:0:{}','0','','34','44','','2','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','272','272','0','0','','0','0',NULL,'0','a:0:{}');
insert into `{$this->getTable('amfeed/template')}` (`status`, `type`, `title`, `filename`, `mode`, `cond_stock`, `cond_disabled`, `cond_type`, `cond_attribute_sets`, `cond_advanced`, `xml_header`, `xml_body`, `xml_footer`, `xml_item`, `csv`, `csv_header`, `csv_header_static`, `csv_enclosure`, `csv_delimiter`, `frm_date`, `frm_price`, `frm_price_dec_point`, `frm_price_thousands_sep`, `frm_url`, `frm_image_url`, `frm_dont_use_category_in_url`, `frm_use_parent`, `default_image`, `delivery_type`, `delivered`, `send_email`, `ftp_host`, `ftp_user`, `ftp_pass`, `ftp_folder`, `ftp_is_passive`, `info_total`, `info_cnt`, `info_errors`, `freq`, `on_days`, `hour_from`, `hour_to`, `error_email`, `max_images`, `condition_serialized`) values('0','1','Newegg','newegg','0','1','1','simple,grouped,configurable,virtual,bundle,downloadable',NULL,'a:0:{}','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<NeweggEnvelope xsi:noNamespaceSchemaLocation=\"Itemfeed.xsd\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\r\n  <Header>\r\n    <DocumentVersion>1.0</DocumentVersion>\r\n  </Header>\r\n  <MessageType>BatchItemCreation</MessageType>\r\n  <Overwrite>Yes</Overwrite>\r\n  <Message>','<SummaryInfo>\r\n	<SubCategoryID>{type=\"attribute\" value=\"category_id\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</SubCategoryID>\r\n</SummaryInfo>\r\n<Action>Create Item</Action>\r\n<BasicInfo>\r\n    <SellerPartNumber>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</SellerPartNumber>\r\n    <Manufacturer>{type=\"attribute\" value=\"manufacturer\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</Manufacturer>\r\n    <ManufacturerPartNumberOrISBN>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</ManufacturerPartNumberOrISBN>\r\n    <UPC>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</UPC>\r\n    <WebsiteShortTitle>{type=\"attribute\" value=\"name\" format=\"strip_tags\" length=\"200\" optional=\"no\" parent=\"no\"}</WebsiteShortTitle>\r\n    <ProductDescription>{type=\"attribute\" value=\"description\" format=\"strip_tags\" length=\"\" optional=\"no\" parent=\"no\"}</ProductDescription>\r\n    <ItemDimension>\r\n        <ItemLength>2</ItemLength>\r\n        <ItemWidth>2</ItemWidth>\r\n        <ItemHeight>2</ItemHeight>\r\n    </ItemDimension>\r\n    <ItemWeight>{type=\"attribute\" value=\"weight\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</ItemWeight>\r\n    <ItemCondition>New</ItemCondition>\r\n    <ShippingRestriction>No</ShippingRestriction>\r\n    <SellingPrice>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</SellingPrice>\r\n    <MAP>False</MAP>\r\n    <CheckoutMAP>False</CheckoutMAP>\r\n    <Shipping>Default</Shipping>\r\n    <Inventory>{type=\"attribute\" value=\"qty\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</Inventory>\r\n    <ActivationMark>True</ActivationMark>\r\n    <ItemImages>\r\n      <Image>\r\n        <ImageUrl>{type=\"attribute\" value=\"image\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</ImageUrl>\r\n        <IsPrimary>1</IsPrimary>\r\n      </Image>\r\n    </ItemImages>\r\n</BasicInfo>\r\n<SubCategoryProperty>\r\n  <Skis>\r\n    <SkisBrand></SkisBrand>\r\n    <SkisModel></SkisModel>\r\n    <SkisSize></SkisSize>\r\n    <SkisType></SkisType>\r\n    <SkisColor></SkisColor>\r\n    <SkisColorMapping></SkisColorMapping>\r\n    <SkisAge></SkisAge>\r\n    <SkisGender></SkisGender>\r\n  </Skis>\r\n</SubCategoryProperty>','  </Message>\r\n</NeweggEnvelope>','Itemfeed','a:0:{}','0','','34','44','','2','.',',','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,'0','272','272','0','0','','0','0',NULL,'0','a:0:{}');");

$installer->run("
    UPDATE`{$this->getTable('amfeed/template')}`
    SET store_id = " . Mage::app()->getStore()->getId() . "
    ;
");
