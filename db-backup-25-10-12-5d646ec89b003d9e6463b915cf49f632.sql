DROP TABLE aktivasyon;

CREATE TABLE `aktivasyon` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO aktivasyon VALUES("23","c4ca4238a0b923820dcc509a6f75849b");
INSERT INTO aktivasyon VALUES("24","3c59dc048e8850243be8079a5c74d079");



DROP TABLE hesap;

CREATE TABLE `hesap` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `isimsoyisim` varchar(255) DEFAULT NULL,
  `acces` tinyint(1) DEFAULT NULL,
  `uniq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO hesap VALUES("15","yasin35kucuk@gmail.com","202cb962ac59075b964b07152d234b70","king.achiles","1","yk_50843a7d7b916");
INSERT INTO hesap VALUES("16","dededede dede","202cb962ac59075b964b07152d234b70","deneme","1","yk_50843a7d7b915");
INSERT INTO hesap VALUES("17","dededeeded324124","202cb962ac59075b964b07152d234b70","ddene beni","1","yk_50843a7d7b917");
INSERT INTO hesap VALUES("18","yasin_kucuk@live.nl","202cb962ac59075b964b07152d234b70","Yasin Kucuk","1","yk_5086fdeed6566");



DROP TABLE sorular;

CREATE TABLE `sorular` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `soru` varchar(255) DEFAULT NULL,
  `soran` varchar(255) DEFAULT NULL,
  `cevaplayan` varchar(255) DEFAULT NULL,
  `cevap` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `durum` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO sorular VALUES("1","Ne zamandan beri PHP ile ugrasiyorsunuz ?","yk_5086fdeed6566","yk_50843a7d7b916","","1351202294","0");
INSERT INTO sorular VALUES("2","Su ana kadar kac projede calistiniz ?","yk_50843a7d7b917","yk_50843a7d7b916","","1351202294","0");
INSERT INTO sorular VALUES("3","PHP ogrenme amaciniz neydi ?","yk_50843a7d7b915","yk_50843a7d7b916","","1351202294","0");
INSERT INTO sorular VALUES("4","Jquery sizce ogrenmelimiyim ?","yk_50843a7d7b915","yk_50843a7d7b916","","1351202294","0");
INSERT INTO sorular VALUES("5","ASP ve PHP arasindaki faklari anlatan bi makale biliyormusun ?","yk_5086fdeed6566","yk_50843a7d7b916","","1351202294","0");
INSERT INTO sorular VALUES("6","Sen kimsin ?","yk_50843a7d7b915","yk_50843a7d7b916","","1351202294","0");



