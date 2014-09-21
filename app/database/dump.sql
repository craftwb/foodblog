-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: foodblog
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Nutella','2014-09-20 23:12:42','2014-09-20 23:12:42'),(2,'Chocolat','2014-09-20 23:12:54','2014-09-20 23:12:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (1,2,3,'2014-09-20 23:14:47','2014-09-20 23:14:47'),(2,1,10,'2014-09-20 23:15:01','2014-09-20 23:15:01'),(3,2,1,'2014-09-20 23:15:15','2014-09-20 23:15:15'),(4,2,2,'2014-09-20 23:15:41','2014-09-20 23:15:41'),(5,1,4,'2014-09-20 23:15:57','2014-09-20 23:15:57'),(6,1,5,'2014-09-20 23:16:32','2014-09-20 23:16:32'),(7,2,6,'2014-09-20 23:16:45','2014-09-20 23:16:45'),(8,2,7,'2014-09-20 23:16:56','2014-09-20 23:16:56'),(9,2,8,'2014-09-20 23:17:06','2014-09-20 23:17:06'),(10,1,9,'2014-09-20 23:17:18','2014-09-20 23:17:18');
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_post`
--

DROP TABLE IF EXISTS `file_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_post`
--

LOCK TABLES `file_post` WRITE;
/*!40000 ALTER TABLE `file_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_09_15_213502_create_posts_table',1),('2014_09_15_213627_create_users_table',1),('2014_09_15_213731_create_files_table',1),('2014_09_15_213814_create_categories_table',1),('2014_09_15_214227_create_file_post_table',1),('2014_09_15_214234_create_category_post_table',1),('2014_09_20_204044_add_remember_token_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Quos id iure nesciunt est modi et ut.','Corrupti aut quisquam in commodi. Animi accusantium cum ut molestias quis hic voluptas.',1,'2014-09-17 21:45:09','2014-09-20 23:08:32','2014-09-20 23:08:32'),(2,'Cum ut cumque dolorem voluptas quod rerum.','Molestiae incidunt sint voluptas nemo. Labore sint sit soluta. Corrupti et blanditiis et.',2,'2014-09-15 08:53:44','2014-09-20 23:08:32','2014-09-20 23:08:32'),(3,'Eius ut cum aut vitae.','Eligendi eum provident quibusdam non veniam mollitia quos cupiditate. Reprehenderit sunt in nobis enim. Fuga provident exercitationem ex numquam reprehenderit omnis enim.',2,'2014-09-15 08:59:09','2014-09-20 23:08:32','2014-09-20 23:08:32'),(4,'Temporibus nisi ea voluptas ut voluptatem id amet.','Eos asperiores omnis eum placeat impedit maxime impedit dolorum. Odit necessitatibus odit odio modi consequatur numquam minima error. Quibusdam numquam qui et voluptas aperiam rerum unde.',2,'2014-09-16 04:45:13','2014-09-20 23:08:32','2014-09-20 23:08:32'),(5,'Ut dolorum corporis aut quo dolorum.','Occaecati excepturi molestias excepturi est voluptatem distinctio accusamus sit. Ratione qui repudiandae sunt excepturi qui. Ipsa et quam nihil odio nulla.',2,'2014-09-16 07:52:53','2014-09-20 23:08:32','2014-09-20 23:08:32'),(6,'Cupiditate amet suscipit aut omnis.','Delectus expedita nostrum est velit quas nesciunt voluptatum cupiditate. Dolores id velit omnis laborum veritatis debitis.',1,'2014-09-14 14:44:27','2014-09-20 23:08:32','2014-09-20 23:08:32'),(7,'Amet iste repudiandae ullam corporis libero.','Est eum reprehenderit velit ducimus quo voluptate. Id tempore consequuntur laborum est ex libero possimus.',2,'2014-09-19 02:36:57','2014-09-20 23:08:32','2014-09-20 23:08:32'),(8,'Ad saepe quod voluptates accusamus fugiat unde.','Qui et architecto cupiditate et. Nesciunt voluptatibus neque occaecati hic quis et tempore. Molestiae possimus voluptas veniam quae optio.',1,'2014-09-18 22:37:17','2014-09-20 23:08:32','2014-09-20 23:08:32'),(9,'Maxime aspernatur et consequuntur alias esse.','Numquam cum minus beatae corporis veniam vel et. Distinctio perferendis aliquid autem.',1,'2014-09-15 16:21:02','2014-09-20 23:08:32','2014-09-20 23:08:32'),(10,'Sed ea dolor est maiores ut.','Numquam autem voluptatem a perspiciatis. Consequuntur sed iste modi odit rerum ut sit dignissimos.',1,'2014-09-14 06:04:12','2014-09-20 23:08:32','2014-09-20 23:08:32');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pierre Ferré','pierre@pierreferre.com','$2y$10$K9jO9rsDy.U..ddaa2qfruc8Nhf.Pc2h1Yuqo/n1sZD6hPl267tsW','administrator','2014-09-20 23:08:32','2014-09-20 23:11:57','UlyDdM9SQUAnNLoriTVzocfjFGthu5HBWCZuJDJOnhfckexmqwIr8o7Bu9Du'),(2,'Jane Ferré','ladyjanemcgill@yahoo.co.uk','$2y$10$h24QkSDEgyxQpDa//Ztq3.KPZLa5xR5onl.pb4k7Zw2w7wTYrW8.O','administrator','2014-09-20 23:08:32','2014-09-20 23:13:39','MPOSUCJ1Au7krrIcEQ7qeJDM4M4YYOuyr630fkWa31ZTUPTiwPZPrRogEP9K');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-20 23:18:56
