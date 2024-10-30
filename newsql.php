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
alter table studentdata add email varchar(100) not null;
alter table studentdata add unique index(email);
show create table studentdata ;
alter table studentdata add stateofdomicile varchar(100) not null;
alter table studentdata add Address varchar(100) default null;
alter table studentdata add ladlinenumber varchar(100) not null;
alter table studentdata add mobie_number varchar(100) not null;
alter table studentdata add alternative_number varchar(100) not null;
select * from studentdata;
alter table studentdata change mobie_number mobile_number varchar(30) default null;
alter table studentdata change landlinenumber landline_number varchar(30) default null;



create database state;
use state;
create table dist(id int auto_increment ,`name` varchar(60)default null,created_at datetime,primary key(id));
select * from dist;