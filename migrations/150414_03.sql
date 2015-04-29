CREATE TABLE cities (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(50) DEFAULT NULL,
  countryid varchar(5) DEFAULT NULL,
  created datetime DEFAULT NULL,
  updated datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;