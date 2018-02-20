###################
RPM Developer Test
###################

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(8) DEFAULT NULL,
  `user_cfm_password` varchar(8) DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_rg` varchar(15) DEFAULT NULL,
  `user_zip` varchar(9) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_neighborhood` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_status` enum('publish','draft') NOT NULL,
  `user_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

