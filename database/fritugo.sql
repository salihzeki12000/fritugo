/*
SQLyog Community v12.15 (64 bit)
MySQL - 5.6.17 : Database - fritugo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fritugo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci */;

USE `fritugo`;

/*Table structure for table `frtg_about` */

DROP TABLE IF EXISTS `frtg_about`;

CREATE TABLE `frtg_about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updated` int(11) NOT NULL,
  `updated_by` int(11) unsigned NOT NULL,
  `post_meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1028) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_about` */

insert  into `frtg_about`(`id`,`updated`,`updated_by`,`post_meta`,`description`) values 
(1,1444049090,0,'Who We Are?','Vivamus a mauris vel nunc tristique volutpat. Aenean eu faucibus enim. Aenean blandit arcu lectus, in cursus elit porttitor non. Curabitur risus eros, mattis vitae nisl consequat, tincidunt commodo purus. Maecenas eu risus ac risus tempus iaculis. Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper. Donec luctus blandit metus, sed ultrices ipsum facilisis sit amet. Morbi congue ligula sit amet urna tincidunt.'),
(2,1444049132,0,'What We Do?','Vivamus a mauris vel nunc tristique volutpat. Aenean eu faucibus enim. Aenean blandit arcu lectus, in cursus elit porttitor non. Curabitur risus eros, mattis vitae nisl consequat, tincidunt commodo purus. Maecenas eu risus ac risus tempus iaculis. Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper. Donec luctus blandit metus, sed ultrices ipsum facilisis sit amet. Morbi congue ligula sit amet urna tincidunt.'),
(3,1444049164,0,'How Travelo Work?','Vivamus a mauris vel nunc tristique volutpat. Aenean eu faucibus enim. Aenean blandit arcu lectus, in cursus elit porttitor non. Curabitur risus eros, mattis vitae nisl consequat, tincidunt commodo purus. Maecenas eu risus ac risus tempus iaculis. Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper. Donec luctus blandit metus, sed ultrices ipsum facilisis sit amet. Morbi congue ligula sit amet urna tincidunt.'),
(4,1444055234,0,'We are truely dedicated to make your travel experience as much simple and fun as possible!','Bringing you a modern, comfortable, and connected travel experience is one of our highest priorities and that\'s why we continuously try to improve your experience when you create your personalized trip plan anything with us.<br/><br/>\r\n\r\nWe really appreciate and welcome any of suggstions you might have for us, so feel free drop us line anytime.');

/*Table structure for table `frtg_about_image` */

DROP TABLE IF EXISTS `frtg_about_image`;

CREATE TABLE `frtg_about_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `about_id` int(11) unsigned NOT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci NOT NULL,
  `updated` int(11) NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `about_id` (`about_id`),
  CONSTRAINT `about_id` FOREIGN KEY (`about_id`) REFERENCES `frtg_about` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_about_image` */

insert  into `frtg_about_image`(`id`,`about_id`,`image`,`updated`,`updated_by`) values 
(1,1,'images/about/476x318.png',1444055338,'westlytanbri'),
(2,2,'images/about/476x318.png',1444055338,'westlytanbri'),
(5,3,'images/about/476x318.png',1444055338,'westlytanbri'),
(6,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(7,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(8,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(9,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(10,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(11,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(12,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(13,4,'images/about/80x80.png',1444055338,'westlytanbri'),
(14,4,'images/about/80x80.png',1444055338,'westlytanbri');

/*Table structure for table `frtg_city` */

DROP TABLE IF EXISTS `frtg_city`;

CREATE TABLE `frtg_city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` int(11) unsigned NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_api` int(11) DEFAULT NULL,
  `tripadvisor_api` int(11) DEFAULT NULL,
  `expedia_api` int(11) DEFAULT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `popularity` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_city` */

insert  into `frtg_city`(`id`,`province_id`,`city_name`,`google_api`,`tripadvisor_api`,`expedia_api`,`image`,`popularity`) values 
(1,1,'Banda Aceh',NULL,NULL,NULL,NULL,0),
(2,1,'Langsa',NULL,NULL,NULL,NULL,0),
(3,1,'Lhokseumawe',NULL,NULL,NULL,NULL,0),
(4,1,'Meulaboh',NULL,NULL,NULL,NULL,0),
(5,1,'Sabang',NULL,NULL,NULL,NULL,0),
(6,1,'Subulussalam',NULL,NULL,NULL,NULL,0),
(7,2,'Denpasar',NULL,NULL,NULL,NULL,0),
(8,3,'Pangkalpinang',NULL,NULL,NULL,NULL,0),
(9,4,'Cilegon',NULL,NULL,NULL,NULL,0),
(10,4,'Serang',NULL,NULL,NULL,NULL,0),
(11,4,'Tangerang Selatan',NULL,NULL,NULL,NULL,0),
(12,4,'Tangerang',NULL,NULL,NULL,NULL,0),
(13,5,'Bengkulu',NULL,NULL,NULL,NULL,0),
(14,12,'Gorontalo',NULL,NULL,NULL,NULL,0),
(15,13,'Jakarta',NULL,NULL,NULL,NULL,0),
(16,14,'Sungai Penuh',NULL,NULL,NULL,NULL,0),
(17,14,'Jambi',NULL,NULL,NULL,NULL,0),
(18,28,'Bandung',NULL,NULL,NULL,NULL,0),
(19,28,'Bekasi',NULL,NULL,NULL,NULL,0),
(20,28,'Bogor',NULL,NULL,NULL,NULL,0),
(21,28,'Cimahi',NULL,NULL,NULL,NULL,0),
(22,28,'Cirebon',NULL,NULL,NULL,NULL,0),
(23,28,'Depok',NULL,NULL,NULL,NULL,0),
(24,28,'Sukabumi',NULL,NULL,NULL,NULL,0),
(25,28,'Tasikmalaya',NULL,NULL,NULL,NULL,0),
(26,28,'Banjar',NULL,NULL,NULL,NULL,0),
(27,6,'Magelang',NULL,NULL,NULL,NULL,0),
(28,6,'Pekalongan',NULL,NULL,NULL,NULL,0),
(29,6,'Purwokerto',NULL,NULL,NULL,NULL,0),
(30,6,'Salatiga',NULL,NULL,NULL,NULL,0),
(31,6,'Semarang',NULL,NULL,NULL,NULL,0),
(32,6,'Surakata',NULL,NULL,NULL,NULL,0),
(33,6,'Tegal',NULL,NULL,NULL,NULL,0),
(34,9,'Batu',NULL,NULL,NULL,NULL,0),
(35,9,'Blitar',NULL,NULL,NULL,NULL,0),
(36,9,'Kediri',NULL,NULL,NULL,NULL,0),
(37,9,'Madiun',NULL,NULL,NULL,NULL,0),
(38,9,'Malang',NULL,NULL,NULL,NULL,0),
(39,9,'Mojokerto',NULL,NULL,NULL,NULL,0),
(40,9,'Pasuruan',NULL,NULL,NULL,NULL,0),
(41,9,'Probolinggo',NULL,NULL,NULL,NULL,0),
(42,9,'Surabaya',NULL,NULL,NULL,NULL,0),
(43,29,'Pontianak',NULL,NULL,NULL,NULL,0),
(44,29,'Singkawang',NULL,NULL,NULL,NULL,0),
(45,25,'Banjarbaru',NULL,NULL,NULL,NULL,0),
(46,25,'Banjarmasin',NULL,NULL,NULL,NULL,0),
(47,7,'Palangkaraya',NULL,NULL,NULL,NULL,0),
(48,10,'Balikpapan',NULL,NULL,NULL,NULL,0),
(49,10,'Bontang',NULL,NULL,NULL,NULL,0),
(50,10,'Samarinda',NULL,NULL,NULL,NULL,0),
(51,17,'Tarakan',NULL,NULL,NULL,NULL,0),
(52,23,'Batam',NULL,NULL,NULL,NULL,0),
(53,23,'Tanjungpinang',NULL,NULL,NULL,NULL,0),
(54,15,'Bandar Lampung',NULL,NULL,NULL,NULL,0),
(55,15,'Kotabumi',NULL,NULL,NULL,NULL,0),
(56,15,'Liwa',NULL,NULL,NULL,NULL,0),
(57,15,'Metro',NULL,NULL,NULL,NULL,0),
(58,18,'Ternate',NULL,NULL,NULL,NULL,0),
(59,18,'Tidore Island',NULL,NULL,NULL,NULL,0),
(60,16,'Ambon',NULL,NULL,NULL,NULL,0),
(61,16,'Tual',NULL,NULL,NULL,NULL,0),
(62,30,'Bima',NULL,NULL,NULL,NULL,0),
(63,30,'Mataram',NULL,NULL,NULL,NULL,0),
(64,30,'Kupang',NULL,NULL,NULL,NULL,0),
(65,31,'Sorong',NULL,NULL,NULL,NULL,0),
(66,21,'Jayapura',NULL,NULL,NULL,NULL,0),
(67,22,'Dumai',NULL,NULL,NULL,NULL,0),
(68,22,'Pekanbaru',NULL,NULL,NULL,NULL,0),
(69,26,'Makassar',NULL,NULL,NULL,NULL,0),
(70,26,'Palopo',NULL,NULL,NULL,NULL,0),
(71,26,'Parepare',NULL,NULL,NULL,NULL,0),
(72,8,'Palu',NULL,NULL,NULL,NULL,0),
(73,24,'Bau-bau',NULL,NULL,NULL,NULL,0),
(74,24,'Kendari',NULL,NULL,NULL,NULL,0),
(75,19,'Bitung',NULL,NULL,NULL,NULL,0),
(76,19,'Kotamobagu',NULL,NULL,NULL,NULL,0),
(77,19,'Manado',NULL,NULL,NULL,NULL,0),
(78,10,'Tomohon',NULL,NULL,NULL,NULL,0),
(79,34,'Bukit Tinggi',NULL,NULL,NULL,NULL,0),
(80,34,'Padang',NULL,NULL,NULL,NULL,0),
(81,34,'Padang Panjang',NULL,NULL,NULL,NULL,0),
(82,34,'Pariaman',NULL,NULL,NULL,NULL,0),
(83,34,'Payakumbuh',NULL,NULL,NULL,NULL,0),
(84,34,'Sawahlunto',NULL,NULL,NULL,NULL,0),
(85,34,'Solok',NULL,NULL,NULL,NULL,0),
(86,27,'Lubuklinggau',NULL,NULL,NULL,NULL,0),
(87,27,'Pagaralam',NULL,NULL,NULL,NULL,0),
(88,27,'Palembang',NULL,NULL,NULL,NULL,0),
(89,27,'Prabumulih',NULL,NULL,NULL,NULL,0),
(90,20,'Binjai',NULL,NULL,NULL,NULL,0),
(91,20,'Medan',NULL,NULL,NULL,NULL,0),
(92,20,'Padang Sidempuan',NULL,NULL,NULL,NULL,0),
(93,20,'Pematangsiantar',NULL,NULL,NULL,NULL,0),
(94,20,'Sibolga',NULL,NULL,NULL,NULL,0),
(95,20,'Tanjungbalai',NULL,NULL,NULL,NULL,0),
(96,20,'Tebing Tinggi',NULL,NULL,NULL,NULL,0),
(97,33,'Yogyakarta',NULL,NULL,NULL,NULL,0);

/*Table structure for table `frtg_country` */

DROP TABLE IF EXISTS `frtg_country`;

CREATE TABLE `frtg_country` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `popularity` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_country` */

insert  into `frtg_country`(`id`,`name`,`popularity`) values 
(1,'Indonesia',0);

/*Table structure for table `frtg_faq` */

DROP TABLE IF EXISTS `frtg_faq`;

CREATE TABLE `frtg_faq` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `updated_by` int(11) unsigned NOT NULL,
  `question` varchar(1028) COLLATE utf8_unicode_ci NOT NULL,
  `answer` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `faq_updated_user` (`updated_by`),
  CONSTRAINT `faq_updated_user` FOREIGN KEY (`updated_by`) REFERENCES `frtg_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_faq` */

/*Table structure for table `frtg_faq_feedback` */

DROP TABLE IF EXISTS `frtg_faq_feedback`;

CREATE TABLE `frtg_faq_feedback` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `faq_id` int(11) unsigned NOT NULL,
  `helpful` int(1) NOT NULL DEFAULT '3' COMMENT '1=Yes; 2=No; 3=No Answer',
  `feedback` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feedback_faq_id` (`faq_id`),
  CONSTRAINT `feedback_faq_id` FOREIGN KEY (`faq_id`) REFERENCES `frtg_faq` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_faq_feedback` */

/*Table structure for table `frtg_powered` */

DROP TABLE IF EXISTS `frtg_powered`;

CREATE TABLE `frtg_powered` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_powered` */

insert  into `frtg_powered`(`id`,`created`,`name`,`image`) values 
(1,1444497312,'TripAdvisor','images/TripAdvisor-logo.png'),
(2,1444497312,'Zomato','images/zomato-logo.png'),
(3,1444497312,'Expedia','images/expedia-logo.png'),
(4,1444497312,'Google','images/google-logo.png');

/*Table structure for table `frtg_province` */

DROP TABLE IF EXISTS `frtg_province`;

CREATE TABLE `frtg_province` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) unsigned NOT NULL,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `popularity` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_province` */

insert  into `frtg_province`(`id`,`country_id`,`province_name`,`image`,`popularity`) values 
(1,1,'Special Region of Aceh','images/destinations/denpasar.jpg',0),
(2,1,'Bali','images/destinations/denpasar.jpg',100),
(3,1,'Bangka Belitung','images/destinations/denpasar.jpg',0),
(4,1,'Banten','images/destinations/denpasar.jpg',0),
(5,1,'Bengkulu','images/destinations/denpasar.jpg',0),
(6,1,'Central Java','images/destinations/denpasar.jpg',0),
(7,1,'Central Kalimantan','images/destinations/denpasar.jpg',0),
(8,1,'Central Sulawesi','images/destinations/denpasar.jpg',0),
(9,1,'East Java','images/destinations/denpasar.jpg',0),
(10,1,'East Kalimantan','images/destinations/denpasar.jpg',0),
(11,1,'East Nusa Tenggara','images/destinations/denpasar.jpg',0),
(12,1,'Gorontalo','images/destinations/denpasar.jpg',0),
(13,1,'Special Capital Region of Jakarta','images/destinations/denpasar.jpg',0),
(14,1,'Jambi','images/destinations/denpasar.jpg',0),
(15,1,'Lampung','images/destinations/denpasar.jpg',0),
(16,1,'Maluku','images/destinations/denpasar.jpg',0),
(17,1,'North Kalimantan','images/destinations/denpasar.jpg',0),
(18,1,'North Maluku','images/destinations/denpasar.jpg',0),
(19,1,'North Sulawesi','images/destinations/denpasar.jpg',0),
(20,1,'North Sumatra','images/destinations/denpasar.jpg',0),
(21,1,'Special Region of Papua','images/destinations/denpasar.jpg',0),
(22,1,'Riau','images/destinations/denpasar.jpg',0),
(23,1,'Riau Island','images/destinations/denpasar.jpg',0),
(24,1,'Southeast Sulawesi','images/destinations/denpasar.jpg',0),
(25,1,'South Kalimantan','images/destinations/denpasar.jpg',0),
(26,1,'South Sulawesi','images/destinations/denpasar.jpg',0),
(27,1,'South Sumatra','images/destinations/denpasar.jpg',0),
(28,1,'West Java','images/destinations/denpasar.jpg',0),
(29,1,'West Kalimantan','images/destinations/denpasar.jpg',0),
(30,1,'West Nusa Tenggara','images/destinations/denpasar.jpg',0),
(31,1,'Special Region of West Papua','images/destinations/denpasar.jpg',0),
(32,1,'West Sulawesi','images/destinations/denpasar.jpg',0),
(33,1,'Special Region of Yogyakarta','images/destinations/denpasar.jpg',0),
(34,1,'West Sumatra','images/destinations/denpasar.jpg',0);

/*Table structure for table `frtg_tags` */

DROP TABLE IF EXISTS `frtg_tags`;

CREATE TABLE `frtg_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_tags` */

insert  into `frtg_tags`(`id`,`tags`,`created`) values 
(1,'Adventure',1444514949),
(2,'Beach',1444514949),
(3,'Family',1444514949),
(4,'Friends',1444514949),
(5,'Island',1444514949),
(6,'Parks',1444514949),
(7,'Romantic',1444514949),
(8,'Wildlife',1444514949);

/*Table structure for table `frtg_team` */

DROP TABLE IF EXISTS `frtg_team`;

CREATE TABLE `frtg_team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(2083) NOT NULL,
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `frtg_team` */

insert  into `frtg_team`(`id`,`created`,`updated`,`name`,`image`,`position`) values 
(1,1444057013,1444057013,'Bryan Wangsa','images/about/270x263.png','Marketing'),
(2,1444057013,1444057013,'Westly Tanbri','images/about/270x263.png','Lead Developer'),
(3,1444057013,1444057013,'Albert Irawan','images/about/270x263.png','Developer'),
(4,1444057013,1444057013,'Giovandy Dharmaputra','images/about/270x263.png','Developer');

/*Table structure for table `frtg_team_social_media` */

DROP TABLE IF EXISTS `frtg_team_social_media`;

CREATE TABLE `frtg_team_social_media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(2083) COLLATE utf8_unicode_ci NOT NULL,
  `updated` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id` (`team_id`),
  CONSTRAINT `team_id` FOREIGN KEY (`team_id`) REFERENCES `frtg_team` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_team_social_media` */

insert  into `frtg_team_social_media`(`id`,`team_id`,`name`,`link`,`icon`,`updated`,`created`) values 
(1,1,'facebook','https://www.facebook.com/','soap-icon-facebook',1444058454,1444058454),
(2,1,'twitter','https://www.twitter.com/','soap-icon-twitter',1444058454,1444058454),
(3,1,'instagram','https://www.instagram.com/','soap-icon-instagram',1444058454,1444058454),
(4,1,'linkedin','https://www.linkedin.com/','soap-icon-linkedin',1444058454,1444058454),
(5,2,'facebook','https://www.facebook.com/','soap-icon-facebook',1444058454,1444058454),
(6,2,'twitter','https://www.twitter.com/','soap-icon-twitter',1444058454,1444058454),
(7,2,'instagram','https://www.instagram.com/','soap-icon-instagram',1444058454,1444058454),
(8,2,'linkedin','https://www.linkedin.com/','soap-icon-linkedin',1444058454,1444058454),
(9,3,'facebook','https://www.facebook.com/','soap-icon-facebook',1444058454,1444058454),
(10,3,'twitter','https://www.twitter.com/','soap-icon-twitter',1444058454,1444058454),
(11,3,'instagram','https://www.instagram.com/','soap-icon-instagram',1444058454,1444058454),
(12,3,'linkedin','https://www.linkedin.com/','soap-icon-linkedin',1444058454,1444058454),
(13,4,'facebook','https://www.facebook.com/','soap-icon-facebook',1444058454,1444058454),
(14,4,'twitter','https://www.twitter.com/','soap-icon-twitter',1444058454,1444058454),
(15,4,'instagram','https://www.instagram.com/','soap-icon-instagram',1444058454,1444058454),
(16,4,'linkedin','https://www.linkedin.com/','soap-icon-linkedin',1444058454,1444058454);

/*Table structure for table `frtg_tips` */

DROP TABLE IF EXISTS `frtg_tips`;

CREATE TABLE `frtg_tips` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tags` varchar(1028) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `post_type` int(2) NOT NULL DEFAULT '1',
  `flag` int(1) DEFAULT '1' COMMENT '1=Pending; 2=Approved',
  PRIMARY KEY (`id`),
  KEY `tips_category_id` (`category_id`),
  KEY `tips_user_id` (`user_id`),
  CONSTRAINT `tips_category_id` FOREIGN KEY (`category_id`) REFERENCES `frtg_tips_category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `tips_user_id` FOREIGN KEY (`user_id`) REFERENCES `frtg_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_tips` */

insert  into `frtg_tips`(`id`,`created`,`updated`,`category_id`,`user_id`,`tags`,`title`,`content`,`likes`,`views`,`post_type`,`flag`) values 
(8,1445415773,1445415773,15,3,NULL,'Test Post Type 1','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur eleifend  tempor magna, in scelerisque urna placerat vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur eleifend tempor magna, in scelerisque urna placerat vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.</p>\r\n<div class=\"border-box\">\r\n	<blockquote class=\"style2\"><p>Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit Massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet egeat. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit sodales volutpat sapien varius vel. </p></blockquote>\r\n</div>\r\n<p>Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit. Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>\r\n<p>Massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>',122,432,1,2);

/*Table structure for table `frtg_tips_category` */

DROP TABLE IF EXISTS `frtg_tips_category`;

CREATE TABLE `frtg_tips_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) unsigned NOT NULL,
  `updated` int(11) unsigned NOT NULL,
  `updated_by` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tips_category_updated_user` (`updated_by`),
  CONSTRAINT `tips_category_updated_user` FOREIGN KEY (`updated_by`) REFERENCES `frtg_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_tips_category` */

insert  into `frtg_tips_category`(`id`,`created`,`updated`,`updated_by`,`name`,`image`,`views`) values 
(15,1445415366,1445415366,3,'Baggage Information','images/travel_tips/baggage-information.jpg',1),
(16,1445415366,1445415366,3,'Airport Check-in','images/travel_tips/airport-check-in.jpg',3),
(17,1445415366,1445415366,3,'Traveling with kids','images/travel_tips/travelling-with-kids.jpg',76),
(19,1445415366,1445415366,3,'Special Assistance','images/travel_tips/special-assistance.jpg',67);

/*Table structure for table `frtg_tips_image` */

DROP TABLE IF EXISTS `frtg_tips_image`;

CREATE TABLE `frtg_tips_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updated` int(11) unsigned NOT NULL,
  `tips_id` int(11) unsigned NOT NULL,
  `images` varbinary(2083) NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_tips_id` (`tips_id`),
  CONSTRAINT `image_tips_id` FOREIGN KEY (`tips_id`) REFERENCES `frtg_tips` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_tips_image` */

insert  into `frtg_tips_image`(`id`,`updated`,`tips_id`,`images`,`alt`,`title`) values 
(22,1445416103,8,'images/travel_tips/870x342.png','Post Type 1','Post Type 1');

/*Table structure for table `frtg_travel_quotes` */

DROP TABLE IF EXISTS `frtg_travel_quotes`;

CREATE TABLE `frtg_travel_quotes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `created` int(11) unsigned NOT NULL,
  `updated` int(11) unsigned NOT NULL,
  `quotes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `liked` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_travel_quotes` */

/*Table structure for table `frtg_trip` */

DROP TABLE IF EXISTS `frtg_trip`;

CREATE TABLE `frtg_trip` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `created` int(11) unsigned NOT NULL,
  `updated` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` int(11) unsigned DEFAULT NULL,
  `end_date` int(11) unsigned DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `destination` int(11) unsigned NOT NULL,
  `budget` decimal(16,2) DEFAULT NULL,
  `hotel` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurant` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tourist_attraction` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sport` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entertainment` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `like` int(11) unsigned NOT NULL DEFAULT '0',
  `view` int(11) unsigned NOT NULL DEFAULT '0',
  `cover_image` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(3072) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trip_user_id` (`user_id`),
  CONSTRAINT `trip_user_id` FOREIGN KEY (`user_id`) REFERENCES `frtg_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_trip` */

insert  into `frtg_trip`(`id`,`user_id`,`created`,`updated`,`name`,`start_date`,`end_date`,`duration`,`destination`,`budget`,`hotel`,`restaurant`,`tourist_attraction`,`sport`,`entertainment`,`like`,`view`,`cover_image`,`tags`) values 
(1,3,1445489957,1445489957,NULL,1445583600,1445756400,3,1,'3000000.00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL);

/*Table structure for table `frtg_user` */

DROP TABLE IF EXISTS `frtg_user`;

CREATE TABLE `frtg_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) unsigned NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `role` smallint(1) NOT NULL COMMENT '1=User; 2=Admin',
  `last_login` int(11) unsigned NOT NULL,
  `newsletter` int(1) DEFAULT NULL COMMENT '1=No; 2=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_user` */

insert  into `frtg_user`(`id`,`created`,`username`,`password`,`email`,`role`,`last_login`,`newsletter`) values 
(3,1445168781,'westlytanbri','$2y$09$DUajUmvDG/x1TUHb0h34aOlof.2XJAs3Mhr4DzJMx8U5VH3PZ6JCy','westly.tanbri@gmail.com',1,1445224638,1);

/*Table structure for table `frtg_user_profile` */

DROP TABLE IF EXISTS `frtg_user_profile`;

CREATE TABLE `frtg_user_profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` smallint(1) DEFAULT NULL COMMENT '1=Male; 2=Female;',
  `birth_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` int(11) unsigned DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(11) unsigned DEFAULT NULL,
  `city_id` int(11) unsigned DEFAULT NULL,
  `postcode` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travel_interest` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(2058) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travel_quote_id` int(11) unsigned DEFAULT NULL,
  `updated` int(11) unsigned NOT NULL,
  `trip_like` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `profile_user_id` (`user_id`),
  CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `frtg_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_user_profile` */

insert  into `frtg_user_profile`(`id`,`user_id`,`firstname`,`lastname`,`picture`,`gender`,`birth_place`,`birth_date`,`telephone`,`address`,`country_id`,`city_id`,`postcode`,`travel_interest`,`about`,`travel_quote_id`,`updated`,`trip_like`) values 
(2,3,'Westly','Tanbri','images/user/default_male_avatar.png',1,'Jakarta',672476400,'08194152379','Taman Ratu Indah block AA3/19',NULL,NULL,'11510',NULL,'About Westly Tanbri',NULL,1445416609,NULL);

/*Table structure for table `frtg_user_temp` */

DROP TABLE IF EXISTS `frtg_user_temp`;

CREATE TABLE `frtg_user_temp` (
  `created` int(11) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(1) NOT NULL,
  `last_login` int(11) unsigned NOT NULL,
  `newsletter` int(1) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `frtg_user_temp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
