DROP DATABASE IF EXISTS `mvp_project`;

CREATE DATABASE IF NOT EXISTS `mvp_project`;

USE `mvp_project`;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `product`;

CREATE TABLE IF NOT EXISTS `user` (
    `id`            tinyint(2)  unsigned NOT NULL AUTO_INCREMENT,
    `name`          varchar(100)         NOT NULL,
    `email`         varchar(100)         NOT NULL,
    `password`      varchar(256)         NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `product` (
    `id`            int(5)   unsigned NOT NULL AUTO_INCREMENT,
    `description`   varchar(100)      NOT NULL,
    `category`      varchar(100)      NOT NULL,
    `available`     tinyint(1)        NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- Insert data examples
INSERT INTO `product` (`id`, `description`, `category`, `available`) VALUES
(1, 'Teclado Quanta QTKTM20', 'Informática', 1),
(2, 'Mouse Sate A33 Optical', 'Informática', 0),
(3, 'Speaker Logitech Z150', 'Informática', 0),
(4, 'Samsung A22 5G', 'Celular', 1);