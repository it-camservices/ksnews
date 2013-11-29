/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50612
Source Host           : 127.0.0.1:3306
Source Database       : ksnews_db

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2013-11-28 10:33:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_article
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `published` int(1) DEFAULT NULL,
  `frontpage` int(1) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `published_by` int(11) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `front_picture` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_article
-- ----------------------------
INSERT INTO `tbl_article` VALUES ('1', 'ពលរដ្ឋថា សមត្ថកិច្ចស្រុកអន្លង់វែង​ចាប់​ឈើ​ក្រញូង​រូចដោះលែង​', '1', null, null, null, null, '\r\n\r\nសកម្មភាព​បង្រ្កាប​ឈើ​ក្រញូង​​ស្តុក​ក្នុង​ផ្ទះ​មួយ​កន្លែង​ ស្ថិត​ក្នុង​ភូមិ​ថ្នល់​កែង (៩៨០) ឃុំ​អន្លង់​វែង​ ស្រុក​អន្លង់​វែង នៅ​វេលា​ម៉ោង​ជាង​៩​ព្រឹក ​ថ្ងៃទី១៧ ខែ​វិច្ឆកា ឆ្នាំ២០១៣ ដែល​ដឹក​នាំ​ដោយ​លោក កូយកាន់យ៉ា ព្រះរាជ​អាជ្ញា​សាលាដំ​ដូងខេត្តឧត្តរមាន​ជ័យ និង​មន្រ្តីសង្កាត់​រដ្ឋ​បាល​ព្រៃ​ឈើ​អន្លង់​វែង ត្រូវ​បាន​ពល​រដ្ឋ​លួច​ខ្សឹប​ប្រាប់​ថា ម្ចាស់​ឈើ​ចចារសុំ​យក​ឈើ​ទៅ​វិញស្ងាត់ៗអស់​ហើយ​ ជា​ថ្នូរ​ជា​មួយ​និង​ប្រាក់ដុល្លារ។\r\n\r\nតាម​ប្រ​ភព​ព័ត៌មាន​ច្បាស់​ការ​បាន​រាយ​ការណ៍​ពី​ស្រុក​អន្លង់​វែង​មក​ថា ព្រះ​រាជ​អាជ្ញា និង​មេ​ព្រៃ បាន​ចុះ​ចាប់​ឈើ​ក្រញូង​ចំ​នួន​៦៩​ដុំ​ក្នុង​អាស័យ​ដ្ឋាន​ខាង​លើ ​រួច​ធ្វើ​ការ​ដឹក​ជញ្ជូន​មក​កាន់​សង្កាត់​រដ្ឋ​បាល​ព្រៃ​ឈើ​អន្លង់​វែង បន្ទាប់​មក​ស្រាប់​តែ​​​លេច​លឺ​ព័ត៌មាន​អា​ស្រូវ​ថា មេ​ព្រៃ​បាន​ដោះ​លែង​ឈើ​នោះ​ទៅ​វិញអស់​ហើយ។ ប្រ​ភព​បន្តថា ម្ចាស់​ឈើ​ឈ្មោះលោក​ហោះ ភេទ​ប្រុស​ អាយុ​ប្រ​ហែល​ជាង​៤០​ឆ្នាំ ដែល​ជា​អ្នក​ប្រ​មូល​ទិច​ឈើ​ក្រញូង​ដ៏​ធំ​ អោយ​ថៅ​កែ​យិន។\r\n\r\nលោក ឃនខែម នាយ​សង្កាត់​រដ្ឋ​បាល​ព្រៃ​ឈើ​អន្លង់​វែង​បាន​បដិសេធ​តាម​ទូរ​ស័ព្ទ​នៅ​រសៀ​ល​ថ្ងៃទី​១៨​ថា លោក​ពុំ​បាន​ចូល​រូម​ចាប់​ឈើ​ខាង​លើ​នោះ​ទេ តែ​លោក​ថា លោក​ជា​អ្នក​ធ្វើ​របាយ​ការណ៍​ផ្ទាល់​អំ​ពី​ចំ​នួន​ឈើ​ខាងលើ​នេះ​ ហើយ​ខាង​រដ្ឋ​បាល​ព្រៃឈើ​ពុំ​បាន​ដោះ​លែង​ឈើ​ដែល​ចាប់​ដូច​ការ​ចោទ​ប្រ​កាន់​នោះ​ទេ។\r\n\r\nនៅ​ថ្ងៃ​ទី​១៨ដដែល​នេះ លោក​ ស៊ី​ណា​ ដែល​ជា​មនុស្ស​ជំ​និត​របស់​លោក​ កូយកាន់យ៉ា បាន​ប្រាប់​អ្នក​យក​ព័ត៌មាន​យើង​ថា រឿង​បង្ក្រាប​ឈើ​ក្រ​ញូង​ខាង​លើ​កុំ​ទាន់​អាល​ចុះ​ផ្សាយអី ខ្លាច​បែក​រឿង​ ព្រោះ​ម្ចាស់​ឈើ​គេ​ចចារ​អោយ​លុយ​អ្នក​ដឹង​រឿង​ម្នាក់​១សន្លឹក (១រយដុល្លារអាមេរីក)។\r\n\r\nអ្នក​យក​ព័ត៌មាន​យើង​បាន​ទៅ​សង្កាត់រដ្ឋ​បាល​ព្រៃ​ឈើ​អន្លង់​ជា​ច្រើន​ដង​ក្នុង​គោល​បំ​ណង់​សុំ​មើល​ឈើ​ដែល​ចាប់​ខាង​លើ​ថា វា​ពិត​ជា​នៅ​ ឬ​លែង​បាត់​ដូច​ការ​រាយ​ការណ៍​របស់​ពល​រដ្ឋ តែ​មន្រ្តី​រដ្ឋ​បាល​ព្រៃ​ឈើ​នៅ​ទី​នោះ​មិន​អោយ​មើល ហើយ​និយាយ​ត្រ​ឡប់​ត្រ​ឡិន​បាយ​បិណ្ឌ​ជា​បាយ​បាត ហាក់​មាន​ការ​លាក់​លៀម​មិន​ចង់​អោយ​គេ​មើល​ឈើ​នោះ​ទេ៕', null);
INSERT INTO `tbl_article` VALUES ('2', 'ឃាត់​រថយន្ត​២គ្រឿង​របស់​ក្រុមហ៊ុន​ហួតម៉េងរីតា​ដឹក​ឈើលើស​ទម្ងន់​ប៉ះខ្សែ​អ្នកធំ​ថ្លឹង​ពីកន្លែងទើប​ម្ចាស់ឈប់​ប្រតិកម្ម\r\n', '1', null, null, null, null, '\r\n\r\nលោក ជួតច័ន្ទតារា អនុ​ប្រ​ធាន​មន្ទីរ​សាធារ​ណការ និង​ដឹក​ជញ្ជូន​ខេត្ត​សៀម​រាប​និង​ជា​ប្រ​ធាន​ក្រុម​ចល័ត​ពិ​សេស​បាន​ឃាត់​រថយន្ត​ដឹក​ឈើ​២​គ្រឿង​របស់​ក្រុម​ហ៊ុន​ហួត​ម៉េង​រី​តា​បន្ទាប់​មាន​ការ​សង្ស័យ​ថា​ផ្ទុក​លើស​ទម្ងន់ តែ​ទី​បំ​ផុត​រថ​យន្ត​ទាំង​២​គ្រឿង​នេះ​ក្នុង​១គ្រឿងៗ​បាន​ដឹក​លើស​ទម្ងន់​រហូត​ជិត​២០​តោន។\r\n\r\nប្របត្តិ​ការ​នេះ​ធ្វើ​ឡើង​កាល​ពីថ្ងៃទី១៧ ខែវិឆ្ឆិកា ឆ្នាំ២០១៣ នៅផ្លូវ​៦៧​ចំ​ណុច​ភូមិ​គោក​ត្រាច​ស្រុក​ប្រា​សាទ​បា​គង​ខេត្ត​សៀម​រាប​ជា​មួយ​និង​ការ​ដឹក​លើស​ទម្ងន់​ក្នុង​១​រថ​យន្តៗ​រហូត​ជិត​២០​តោន​នេះ​ម្ចាស់​ឈើ​បាន​សម្ដែង​នូវ​ការ​ប្រ​តិ​កម្ម​យ៉ាង​ខ្លាំង​ដោយ​ចោទ​ប្រ​កាន់​ថា​ជញ្ជីង​ចល័ត​របស់​មន្ទីរ​សាធារណ​ការ​មិន​ត្រឹមត្រូវ។\r\n\r\nក្នុង​នោះ​ដែរ​ប្រ​ធាន​ក្រុម​ចល័ត​បាន​បញ្ជាក់​ថា ខ្លាច​ក្រែង​ជញ្ជីង​នេះ​មិន​ត្រឹម​ត្រូវ​ចាំ​បាច់​ត្រូវ​យក​ទៅ​ថ្លឹង​នៅ​ស្ថានីយ៍​ធំ​ឯស្រុក​ពួក។ លោក​បាន​បញ្ជាក់​ទៀត​ថា​ជំ​នាញ​របស់​លោក​ត្រួត​ពិ​និត្យ​ការ​ដឹកលើស​ទម្ងន់​ពុំ​មែន​ជំ​នាញ​ខាង​ស៊ី​រ៉េ​ជញ្ជីង​នោះ​ទេ។\r\n\r\nក្រោយ​មាន​ការ​ប្រ​តិកម្ម​ពី​ម្ចាស់​ឈើ​និង​ការ​បក​ស្រាយ​របស់​ជំ​នាញ​សាធារ​ណ​ការរ​ថយន្ត​ទាំង​២​គ្រឿង​បាន​អូស​យក​ទៅ​ថ្លឹង​នៅ​ស្រុក​ពួក​ហើយ​រថយន្ត​ទាំង​២​គ្រឿង​នេះ​ដឹក​លើ​សទម្ងន់​ក្នុង​១គ្រឿង​គឺ​ដឹក​លើស​ចំ​ណុះ​ជិត​២០​តោន​មែន។\r\n\r\nលោក​ប្រធាន​ក្រុម​បាន​ឲ្យ​ដឹង​ថារ​ថយន្ត​ដែល​ពាក់​ស្លាក​លេខ​ភ្នំពេញ ៣អា៩២៨០ម៉ាក​ហ៊ីយុន​ដាយ​ទម្ងន់​សរុប​រួម​៥៥.២២០​តោន​និង​១​គ្រឿង​ទៀត​ពាក់​ស្លាក​លេខ​ ភ្នំពេញ៣អា៦៥៧៥​ម៉ាក​ហ៊ីយុន​ដាយ​ទម្ងន់​សរុបរួម​៥៤.៣៦០តោន។​លោក​បាន​បញ្ជាក់​រថ​យន្ត​ទី​១​លើស​ទម្ងន់​១៥.២២០​តោននិង​១គ្រឿងទៀត​១៤.៣៦០​តោន។\r\n\r\nលោក​បាន​បន្ត​ថា​ចំ​ពោះ​រថ​យន្ត​នេះ​គឺ​មាន​លក្ខណះ​ខុស​បច្ចេក​ទេសត្រង់​ថា​គេ​ឆ្នៃ​រហូត​ដល់​ផ្លៅ​៦​ឯណោះ​ដែល​ច្បាប់​នៅ​ប្រ​ទេស​កម្ពុជា​មិន​ទាន់​អនុញាត្តិ​ឲ្យការប្រើប្រាស់​នៅឡើយ​ហើយ​ចំ​ពោះ​រថ​យន្ត​នេះ​គឺអនុញាត្តិ​ឲ្យដឹក​តែ​៤០​តោន​តែ​ប៉ុណ្ណោះ។\r\n\r\nមន្រ្តី​សាធារ​ណ​ការ​បន្ថែម​ថា​រថ​យន្ត​ដែល​ដឹក​លើស​ទម្ងន់​នេះ​ត្រូវ​បាន​ធ្វើ​ការ​ផាក​ពិ​ន័យ​ទៅ​តាម​ផ្លូវ​ច្បាប់​ហើយ​តម្រូវ​ឲ្យ​ម្ចាស់​រថ​យន្ត​ទម្លាក់​ឈើ​ចុះ​ដើម្បី​ឲ្យ​យក​រថ​យន្ត​ផ្សេង​មួយ​ទៀត​មក​សាង​បន្ត។\r\n\r\nគួបញ្ជាក់​ថាក្រុមហ៊ុន​នេះមាន​ទីតាំង​នៅស្រុក​អន្លង់​វែង​ខេត្ត​ឧត្តរ​មាន​ជ័យ​បាន​ទទួល​ដី​សម្បទាន​ពី​ប្រ​មុខ​រាជ​រដ្ឋាភិ​បាល​លើ​ផ្ទៃ​ដី​៣​ពាន់​ហិក​តាដើម្បី​វិនិ​យោគ​ដំ​ណាំ​ឧហ្សា.ហកម្ម​កៅ​ស៊ូតែក្រុម​ហ៊ុន​នេះ​មិន​បាន​បំ​ពេញ​តាម​កិច្ច​សន្យា​ជាមួយ​រដ្ឋ​នោះ​ឡើយ​គឺ​ក្រោយ​ពី​បាន​សិទ្ធ​រួច​មក​បាន​សម្រុក​កាប់​ឈើ​លក់​និង​ប្រ​មូល​ទិញ​ឈើ​ពី​តំ​បន់​អនាធិ​តេយ្យ​ដោយ​មិន​បាន​ធ្វើ​ការ​ដាំ​កៅ​ស៊ូឡើយ។​ជាមួយ​គ្នា​នេះ​ក្រុម​ហ៊ុន​ឯក​ជន​ហ៊ួត​ម៉េង​រី​តា​ជា​យូ​ណាស់​មក​ហើយ​ដែល​បាន​ដឹក​ឈើ​លើស​ទម្ងន់​និង​បន្លំ​ប៉េសេ​ទៀត​ផង តែ​គ្មាន​អ្នក​ធ្វើ​ដឹង​ធ្វើ​លឺនោះទេ មិន​ដឹង​ជា​ហេតុ​អ្វី​ទើប​តែ​ថ្ងៃនេះ​ខាង​សាធារណនារ​ទើប​តែ​ក្រោក​ពី​ដេក​ទាំង​មមី​មើ​ចាប់​បាន​ឡាន​ឈើ​លើស​ទម្ងន់ទេ​២គ្រឿងនេះ៕', null);

-- ----------------------------
-- Table structure for tbl_article_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article_category`;
CREATE TABLE `tbl_article_category` (
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  KEY `category` (`category_id`),
  KEY `article` (`article_id`),
  CONSTRAINT `tbl_article_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_article_category_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `tbl_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_article_category
-- ----------------------------
INSERT INTO `tbl_article_category` VALUES ('1', '1');
INSERT INTO `tbl_article_category` VALUES ('1', '2');

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text COLLATE utf8_unicode_ci,
  `alias` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', 'ព៌តមានជាតិ', 'ព៌តមានជាតិ');
INSERT INTO `tbl_category` VALUES ('2', 'ព៌តមានអន្តរជាតិ', 'ព៌តមានអន្តរជាតិ');
INSERT INTO `tbl_category` VALUES ('3', 'សិល្បះ និងកំសាន្ត', 'សិល្បះ និងកំសាន្ត');
INSERT INTO `tbl_category` VALUES ('4', 'សុខភាព និងកីឡា', 'សុខភាព និងកីឡា');
INSERT INTO `tbl_category` VALUES ('5', 'អំពីយើង', 'អំពីយើង');
INSERT INTO `tbl_category` VALUES ('7', 'តារា', 'តារា');
INSERT INTO `tbl_category` VALUES ('8', 'កំណាព្យ', 'កំណាព្យ');
INSERT INTO `tbl_category` VALUES ('9', 'ចំរៀង', 'ចំរៀង');
INSERT INTO `tbl_category` VALUES ('10', 'រូបភាពប្លែកៗ', 'រូបភាពប្លែកៗ');
INSERT INTO `tbl_category` VALUES ('11', 'វីដេអូប្លែកៗ', 'វីដេអូប្លែកៗ');
INSERT INTO `tbl_category` VALUES ('12', 'រឿងកំប្លែង', 'រឿងកំប្លែង');
INSERT INTO `tbl_category` VALUES ('13', 'ម៉ូដទាន់សម័យ', 'ម៉ូដទាន់សម័យ');

-- ----------------------------
-- Table structure for tbl_font_awesome
-- ----------------------------
DROP TABLE IF EXISTS `tbl_font_awesome`;
CREATE TABLE `tbl_font_awesome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_picture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_animation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_border` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `menu` text COLLATE utf8_unicode_ci,
  `alias` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `indexs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category_id`),
  CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES ('1', 'ព៌តមានជាតិ', 'ព៌តមានជាតិ', '1', '1');
INSERT INTO `tbl_menu` VALUES ('2', 'ព៌តមានអន្តរជាតិ', 'ព៌តមានអន្តរជាតិ', '2', '2');
INSERT INTO `tbl_menu` VALUES ('3', 'សិល្បះ និងកំសាន្ត', 'សិល្បះ និងកំសាន្ត', '3', '3');
INSERT INTO `tbl_menu` VALUES ('4', 'សុខភាព និងកីឡា', 'សុខភាព និងកីឡា', '4', '4');
INSERT INTO `tbl_menu` VALUES ('5', 'អំពីយើង', 'អំពីយើង', '5', '5');

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
-- Table structure for tbl_submenu
-- ----------------------------
DROP TABLE IF EXISTS `tbl_submenu`;
CREATE TABLE `tbl_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `p_menu` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `indexs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category_id`),
  KEY `p_menu` (`p_menu`),
  CONSTRAINT `tbl_submenu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_submenu_ibfk_2` FOREIGN KEY (`p_menu`) REFERENCES `tbl_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_submenu
-- ----------------------------
INSERT INTO `tbl_submenu` VALUES ('1', 'តារា', 'តារា', '3', '7', null);
INSERT INTO `tbl_submenu` VALUES ('2', 'កំណាព្យ', 'កំណាព្យ', '3', '8', null);
INSERT INTO `tbl_submenu` VALUES ('3', 'ចំរៀង', 'ចំរៀង', '3', '9', null);
INSERT INTO `tbl_submenu` VALUES ('4', 'រូបភាពប្លែកៗ', 'រូបភាពប្លែកៗ', '3', '10', null);
INSERT INTO `tbl_submenu` VALUES ('5', 'វីដេអូប្លែកៗ', 'វីដេអូប្លែកៗ', '3', '11', null);
INSERT INTO `tbl_submenu` VALUES ('6', 'រឿងកំប្លែង', 'រឿងកំប្លែង', '3', '12', null);
INSERT INTO `tbl_submenu` VALUES ('7', 'ម៉ូដទាន់សម័យ', 'ម៉ូដទាន់សម័យ', '3', '13', null);

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
