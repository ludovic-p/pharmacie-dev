CREATE DATABASE IF NOT EXISTS `pharmacie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmacie`;

CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `fk_id_user_764` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id_order_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id_order_detail`),
  KEY `fk_id_order_353` (`id_order`),
  KEY `fk_id_product_937` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `unit_stock` int(11) NOT NULL,
  `ordonnance` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordonnance` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `orders`
  ADD CONSTRAINT `FK_E52FFDEE6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ED896F461BACD2A8` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `FK_ED896F46DD7ADDD` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
