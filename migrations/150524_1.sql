CREATE TABLE `airport_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `airport_types` (`id`, `name`)
VALUES
  (1, 'airport'),
  (2, 'closed'),
  (3, 'heliport'),
  (4, 'seaplanes');


CREATE TABLE `airport_sizes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `airport_sizes` (`id`, `name`)
VALUES
  (1, 'large'),
  (2, 'medium'),
  (3, 'small');

UPDATE airports a,`airport_sizes` airs
SET a.`size` = airs.id
WHERE a.size = airs.`name`;

UPDATE airports a,`airport_types` airt
SET a.`type` = airt.id
WHERE a.type = airt.`name`;
