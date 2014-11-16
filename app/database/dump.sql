# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.14.04.1)
# Database: foodblog
# Generation Time: 2014-11-16 23:04:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Nutella','nutella','2014-09-20 23:12:42','2014-09-20 23:12:42'),
	(2,'Chocolat','chocolat','2014-09-20 23:12:54','2014-09-20 23:12:54');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category_post`;

CREATE TABLE `category_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `category_post_category_id_index` (`category_id`),
  KEY `category_post_post_id_index` (`post_id`),
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;

INSERT INTO `category_post` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`)
VALUES
	(1,2,3,'2014-09-20 23:14:47','2014-09-20 23:14:47'),
	(2,1,10,'2014-09-20 23:15:01','2014-09-20 23:15:01'),
	(3,2,1,'2014-09-20 23:15:15','2014-09-20 23:15:15'),
	(4,2,2,'2014-09-20 23:15:41','2014-09-20 23:15:41'),
	(5,1,4,'2014-09-20 23:15:57','2014-09-20 23:15:57'),
	(6,1,5,'2014-09-20 23:16:32','2014-09-20 23:16:32'),
	(7,2,6,'2014-09-20 23:16:45','2014-09-20 23:16:45'),
	(8,2,7,'2014-09-20 23:16:56','2014-09-20 23:16:56'),
	(9,2,8,'2014-09-20 23:17:06','2014-09-20 23:17:06'),
	(10,1,9,'2014-09-20 23:17:18','2014-09-20 23:17:18');

/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table file_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `file_post`;

CREATE TABLE `file_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `file_post_file_id_index` (`file_id`),
  KEY `file_post_post_id_index` (`post_id`),
  CONSTRAINT `file_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `file_post_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_09_15_213502_create_posts_table',1),
	('2014_09_15_213627_create_users_table',1),
	('2014_09_15_213731_create_files_table',1),
	('2014_09_15_213814_create_categories_table',1),
	('2014_09_15_214227_create_file_post_table',1),
	('2014_09_15_214234_create_category_post_table',1),
	('2014_09_20_204044_add_remember_token_to_users_table',1),
	('2014_11_13_220314_add_unique_index_to_username_email_user_table',2),
	('2014_11_16_221324_add_slug_to_posts_table',2),
	('2014_11_16_221526_add_slug_to_categories_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `user_id`, `published_at`, `created_at`, `updated_at`)
VALUES
	(1,'Impedit et fuga sint magni perspiciatis suscipit.','illo-velit-quibusdam-ullam-sit-esse-ut-consequuntur','Est aut sed enim et molestias. Enim praesentium omnis fuga dignissimos at delectus suscipit. Omnis non ab aut cum.',2,'2014-11-09 23:43:50','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(2,'Natus sit culpa quam unde saepe eum.','itaque-voluptatem-dolorem-voluptas-minus-voluptatem-placeat','Saepe enim odit et dignissimos. Consequatur deserunt voluptatem error neque libero.',2,'2014-11-13 07:18:47','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(3,'Eligendi molestias voluptatem itaque voluptas neque.','quia-molestiae-aut-non-illo-non-atque','Eius dolor iusto culpa eos inventore magnam. Quod aut rerum quia qui temporibus tempore. Quo autem est maxime voluptas dolorem.',2,'2014-11-16 07:44:07','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(4,'Molestiae et deserunt libero error et maxime dolorem.','et-dolore-sed-quos-accusamus-quia-adipisci-veniam','Quas tenetur rerum illum voluptas in. Perspiciatis voluptate perferendis tempora eos harum. Commodi distinctio natus accusamus et.',1,'2014-11-12 02:50:17','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(5,'Labore est explicabo et maxime autem et molestiae.','necessitatibus-asperiores-a-pariatur-in','Harum ut quam quaerat et. Est voluptatem recusandae modi voluptatem. Vel quis vitae unde labore.',1,'2014-11-14 20:37:12','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(6,'Consequuntur ea animi quisquam ex sint.','quam-nisi-aut-tenetur-ipsa-non-quod-rerum','Quis aut dolores consequatur eos quidem rerum. Labore aut libero nihil dolorem dolor voluptatem.',2,'2014-11-14 21:23:13','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(7,'Delectus voluptatem quos sit quidem esse blanditiis voluptate.','minima-cum-cupiditate-sapiente-a-molestiae-deleniti-ducimus-consequatur','Exercitationem ducimus quis facilis. Non et sint dolorum qui.',1,'2014-11-10 05:09:59','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(8,'Qui magnam soluta consectetur ea.','modi-totam-qui-corporis-nostrum','Consectetur in rerum fuga quia vero at. Error autem consectetur molestiae nam. Sunt deleniti earum et corrupti modi.',1,'2014-11-14 19:48:06','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(9,'Cum labore voluptates sit est iure labore.','recusandae-sed-quidem-velit-autem-vero-nam-quia-est','Minima necessitatibus doloribus voluptas soluta fuga. Ut natus sed enim consequuntur.',2,'2014-11-13 18:54:02','2014-11-16 23:03:29','2014-11-16 23:03:29'),
	(10,'Incidunt minima non rerum qui.','et-a-quia-sunt-asperiores-illum-consequatur-a-pariatur','Facilis neque sed necessitatibus. Tempora ratione esse error sunt quasi.',2,'2014-11-15 21:16:05','2014-11-16 23:03:29','2014-11-16 23:03:29');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`, `remember_token`)
VALUES
	(1,'Pierre Ferré','pierre@pierreferre.com','$2y$10$gIcG3rQIlbL7vyy3Ucd5/.TNkiMmKVDlJ1Jd4i80RNNBmb9rI9LWC','administrator','2014-11-16 23:03:29','2014-11-16 23:03:29',NULL),
	(2,'Jane Ferré','ladyjanemcgill@yahoo.co.uk','$2y$10$fXL.9aY9xWcl4loprLLbkOzIvxmLTPpUqVy/phWVEPEu4ZgWKor8O','administrator','2014-11-16 23:03:29','2014-11-16 23:03:29',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
