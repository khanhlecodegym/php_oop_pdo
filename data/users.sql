delimiter $$

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `token_expire` timestamp DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) DEFAULT 0,
  `deleted` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

