# PHP Örnek Çalışmaları

## Parent - Child ilişkili tabloda veri çekme


### Örnek Veritabanı:
```SQL
-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `category` (`category_id`, `name`, `parent`) VALUES
(1,	'Elektronik',	0),
(2,	'Taşınabilir Müzik',	0),
(3,	'Televizyonlar',	1),
(4,	'LCD',	3),
(5,	'Plazma',	3),
(6,	'Tüplü',	3),
(7,	'MP3 Çalar',	2),
(8,	'CD Çalar',	2),
(9,	'Hoparlörler',	2),
(10,	'Ev Sineması',	9),
(11,	'2+1 Sistemler',	9),
(12,	'5+1 Sistemler',	9);

-- 2015-10-12 20:32:09
```

### Örnek SQL Komutu
```SQL
SELECT
	t1.name AS seviye1, 
	t2.name as seviye2, 
	t3.name as seviye3, 
	t4.name as seviye4
FROM category AS t1
	LEFT JOIN category AS t2 ON t2.parent = t1.category_id
	LEFT JOIN category AS t3 ON t3.parent = t2.category_id
	LEFT JOIN category AS t4 ON t4.parent = t3.category_id
WHERE 
	t1.parent = '0' or t1.parent is null ;

```

### Komutun Çıktısı:
|seviye1|seviye2|seviye3|seviye4|
|----|----|----|----|
|Elektronik|Televizyonlar|LCD|NULL|
|Elektronik|Televizyonlar|Plazma|NULL|
|Elektronik|Televizyonlar|Tüplü|NULL|
|Taşınabilir Müzik|Hoparlörler|Ev Sineması|NULL|
|Taşınabilir Müzik|Hoparlörler|2+1 Sistemler|NULL|
|Taşınabilir Müzik|Hoparlörler|5+1 Sistemler|NULL|
|Taşınabilir Müzik|MP3 Çalar|NULL|NULL|
|Taşınabilir Müzik|CD Çalar|NULL|NULL|