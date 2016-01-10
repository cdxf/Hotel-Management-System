-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `sort` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `category` (`sort`, `id`, `name`, `target`, `parent_id`) VALUES
(0,	10,	'Giày',	'giay',	0),
(0,	11,	'Phụ kiện',	'phu-kien',	0);

DROP TABLE IF EXISTS `category_post`;
CREATE TABLE `category_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `detail_event`;
CREATE TABLE `detail_event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `fk_detail_event_2_idx` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `fromdate` timestamp NULL DEFAULT NULL,
  `todate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL COMMENT '	',
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_feedback_1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `like_product`;
CREATE TABLE `like_product` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_Like_product_2_idx` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Order_1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `viewed` int(11) NOT NULL DEFAULT '1',
  `category_post` int(11) NOT NULL,
  `content` text NOT NULL,
  `content_short` text NOT NULL,
  `active` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Post_1_idx` (`category_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `listtag` text,
  `viewed` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `sale` int(11) NOT NULL,
  `id_supplied` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_short` text NOT NULL,
  `sold` int(11) NOT NULL,
  `images` text NOT NULL,
  `active` varchar(45) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Product_1_idx` (`category`),
  KEY `fk_Product_2_idx` (`id_supplied`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `product_comment`;
CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `comment` text,
  `id_product` int(11) NOT NULL DEFAULT '0',
  `reply_to` int(11) NOT NULL DEFAULT '0',
  `status` varchar(30) NOT NULL DEFAULT 'Pending',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Product_comment_1_idx` (`id_user`),
  KEY `fk_Product_comment_2_idx` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE `product_tag` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_tag`) USING BTREE,
  KEY `fk_Product_tag_2_idx` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `gg` varchar(100) NOT NULL,
  `gganalytic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `size`;
CREATE TABLE `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT 'abc',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'khongcopass',
  `permission` varchar(50) NOT NULL DEFAULT 'admin',
  `active` int(11) NOT NULL DEFAULT '1',
  `follow` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_Vote_1_idx` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2015-12-23 02:56:03