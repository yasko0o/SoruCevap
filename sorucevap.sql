/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : sorucevap

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-10-20 17:31:33
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hesap
-- ----------------------------
INSERT INTO `hesap` VALUES ('8', 'yasin35kucuk@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'yk_5082ba5e85fd5');
