CREATE TABLE `home` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '标题',
  `lat` decimal(10,4) NOT NULL DEFAULT '0.0000' COMMENT '纬度',
  `lon` decimal(10,4) NOT NULL DEFAULT '0.0000' COMMENT '经度',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
