CREATE TABLE `studentdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `roll_no` varchar(30) DEFAULT NULL,
  `neet_score` varchar(30) DEFAULT NULL,
  `registration_id` varchar(30) DEFAULT NULL,
  `father_name` varchar(30) DEFAULT NULL,
  `mother_name` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `gender` set('male','female') DEFAULT 'male',
  `church` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci



alter table studentdata add email varchar(100) not null;
alter table studentdata add unique index(email);
