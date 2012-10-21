/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : sorucevap

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-10-21 21:20:37
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aktivasyon
-- ----------------------------
INSERT INTO `aktivasyon` VALUES ('23', 'c4ca4238a0b923820dcc509a6f75849b');

-- ----------------------------
-- Table structure for `hesap`
-- ----------------------------
DROP TABLE IF EXISTS `hesap`;
CREATE TABLE `hesap` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `acces` tinyint(1) DEFAULT NULL,
  `uniq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hesap
-- ----------------------------
INSERT INTO `hesap` VALUES ('15', 'yasin35kucuk@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'yk_50843a7d7b916');
