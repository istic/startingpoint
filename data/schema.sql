
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pronoun` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `validated_stamp` datetime DEFAULT NULL,
  `validate_code` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_stamp` datetime DEFAULT NULL,
  `updated_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` tinyint(1) DEFAULT '0',
  `reset_code` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_stamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mass_id` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen` tinyint(4) DEFAULT '0',
  `type` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'msg',
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_index` (`user_id`),
  CONSTRAINT `user_name` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
