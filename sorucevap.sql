/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : sorucevap

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-11-04 16:34:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `aktivasyon`
-- ----------------------------
DROP TABLE IF EXISTS `aktivasyon`;
CREATE TABLE `aktivasyon` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aktivasyon
-- ----------------------------

-- ----------------------------
-- Table structure for `arkadaslik`
-- ----------------------------
DROP TABLE IF EXISTS `arkadaslik`;
CREATE TABLE `arkadaslik` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `hesap` varchar(255) DEFAULT NULL,
  `kisi` varchar(255) DEFAULT NULL,
  `durum` tinyint(1) DEFAULT '0' COMMENT '0 = beklemede - 1 = kabul edilmis = 2 red edilmis',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of arkadaslik
-- ----------------------------

-- ----------------------------
-- Table structure for `bildiri`
-- ----------------------------
DROP TABLE IF EXISTS `bildiri`;
CREATE TABLE `bildiri` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `hesap` varchar(255) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bildiri
-- ----------------------------

-- ----------------------------
-- Table structure for `hesap`
-- ----------------------------
DROP TABLE IF EXISTS `hesap`;
CREATE TABLE `hesap` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `isimsoyisim` varchar(255) DEFAULT NULL,
  `acces` tinyint(1) DEFAULT NULL,
  `uniq` varchar(255) DEFAULT NULL,
  `arkadas` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hesap
-- ----------------------------

-- ----------------------------
-- Table structure for `hesap_ayar`
-- ----------------------------
DROP TABLE IF EXISTS `hesap_ayar`;
CREATE TABLE `hesap_ayar` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `hesap` varchar(255) DEFAULT NULL,
  `profil_gorunur` tinyint(1) DEFAULT '1' COMMENT '0 = herkeze acik 1 = sadece arkadaslar 2 = kimse goremez , sadece sen',
  `kimler_sorar` tinyint(1) DEFAULT '0' COMMENT '0 = herkeze acik 1 = sadece arkadaslar 2 = kimse',
  `ozel_mesaj` tinyint(1) DEFAULT '0' COMMENT '0 = herkeze acik 1 = sadece arkadaslar 2 = kimse gonderemez',
  `arkadaslik_teklifi` tinyint(1) DEFAULT '0' COMMENT '0 = acik, 1 = kapali',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hesap_ayar
-- ----------------------------

-- ----------------------------
-- Table structure for `sorular`
-- ----------------------------
DROP TABLE IF EXISTS `sorular`;
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

-- ----------------------------
-- Records of sorular
-- ----------------------------
