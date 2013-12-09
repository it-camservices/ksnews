/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50612
Source Host           : 127.0.0.1:3306
Source Database       : ksnews_db

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2013-12-09 18:03:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_article
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `published` int(1) DEFAULT NULL,
  `frontpage` int(1) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `author` text COLLATE utf8_unicode_ci,
  `published_by` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `modify_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `front_picture` blob,
  `category_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_article
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `last_modify` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', 'ព៌តមានជាតិ', 'ព៌តមានជាតិ', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('2', 'ព៌តមានអន្តរជាតិ', 'ព៌តមានអន្តរជាតិ', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('3', 'សិល្បះ និងកំសាន្ត', 'សិល្បះ និងកំសាន្ត', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('4', 'សុខភាព និងកីឡា', 'សុខភាព និងកីឡា', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('5', 'អំពីយើង', 'អំពីយើង', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('7', 'តារា', 'តារា', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('8', 'កំណាព្យ', 'កំណាព្យ', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('9', 'ចំរៀង', 'ចំរៀង', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('10', 'រូបភាពប្លែកៗ', 'រូបភាពប្លែកៗ', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('11', 'វីដេអូប្លែកៗ', 'វីដេអូប្លែកៗ', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('12', 'រឿងកំប្លែង', 'រឿងកំប្លែង', null, '2013-12-03 19:00:23');
INSERT INTO `tbl_category` VALUES ('13', 'ម៉ូដទាន់សម័យ', 'ម៉ូដទាន់សម័យ', null, '2013-12-03 19:00:23');

-- ----------------------------
-- Table structure for tbl_font_awesome
-- ----------------------------
DROP TABLE IF EXISTS `tbl_font_awesome`;
CREATE TABLE `tbl_font_awesome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_picture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_font_awesome
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_menu
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `indexs` int(11) DEFAULT NULL,
  `p_menu` int(11) DEFAULT NULL,
  `icon_pic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_animation` int(1) DEFAULT NULL,
  `icon_border` int(1) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `auth_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category_id`),
  KEY `auth_user` (`auth_user`),
  CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_menu_ibfk_2` FOREIGN KEY (`auth_user`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES ('1', 'ព៌តមានជាតិ', 'ព៌តមានជាតិ', '1', '1', null, 'fa fa-flag-checkered', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('2', 'ព៌តមានអន្តរជាតិ', 'ព៌តមានអន្តរជាតិ', '2', '2', null, 'fa fa-globe fa-spin', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('3', 'សិល្បះ និងកំសាន្ត', 'សិល្បះ និងកំសាន្ត', '3', '3', null, 'fa fa-puzzle-piece', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('4', 'សុខភាព និងកីឡា', 'សុខភាព និងកីឡា', '4', '4', null, 'fa fa-heart', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('5', 'អំពីយើង', 'អំពីយើង', '5', '5', null, 'fa fa-user', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('6', 'តារា', 'តារា', '7', '1', '3', 'fa fa-star', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('7', 'កំណាព្យ', 'កំណាព្យ', '8', '2', '3', 'fa fa-comments', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('8', 'ចំរៀង', 'ចំរៀង', '9', '3', '3', 'fa fa-music', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('9', 'រូបភាពប្លែកៗ', 'រូបភាពប្លែកៗ', '10', '4', '3', 'fa fa-picture-o', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('10', 'វីដេអូប្លែកៗ', 'វីដេអូប្លែកៗ', '11', '5', '3', 'fa fa-film', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('11', 'រឿងកំប្លែង', 'រឿងកំប្លែង', '12', '6', '3', 'fa fa-eye', null, null, null, null, null);
INSERT INTO `tbl_menu` VALUES ('12', 'ម៉ូដទាន់សម័យ', 'ម៉ូដទាន់សម័យ', '13', '7', '3', 'fa fa-thumbs-up', null, null, null, null, null);

-- ----------------------------
-- Table structure for tbl_photo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_photo`;
CREATE TABLE `tbl_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` blob,
  `date_inserted` datetime DEFAULT NULL,
  `article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article` (`article`),
  CONSTRAINT `tbl_photo_ibfk_1` FOREIGN KEY (`article`) REFERENCES `tbl_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_photo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `is_manager` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- ----------------------------
-- Table structure for tbl_video
-- ----------------------------
DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inserted_date` datetime DEFAULT NULL,
  `auto_play` int(1) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article` (`article`),
  CONSTRAINT `tbl_video_ibfk_1` FOREIGN KEY (`article`) REFERENCES `tbl_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_video
-- ----------------------------
