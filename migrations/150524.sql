CREATE TABLE `airports` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `iata` varchar(3) DEFAULT NULL,
  `lon` float DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  `continent` varchar(5) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;