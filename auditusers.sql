/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - simm1638_audit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`audit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `simm1638_audit`;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`pass`,`status_password`,`remember_token`,`username`,`akses`,`id_auditee`,`id_auditor`,`lokasi`,`created_at`,`updated_at`) values 
(53,'name','test@gmail.com',NULL,'$2y$10$3pIfPJHb5Jeqbqb32ot.4eAO3Zd/acH/kY8Ya71W9OiHZ8IB7NyFa','aaaaaaaa',NULL,'qmJzIKzI2qeTj5dYLW5n6qm0c481HHyF9991dvYW47ecKEoAVTNPJkrr8iPZ','admin','ADMIN',NULL,NULL,NULL,'2019-07-17 11:16:52','2019-07-17 11:16:52'),
(85,'name','test@gmail.com',NULL,'$2y$10$Z17U2SoQYpGG3Uh8SwzHpu0FCF0jDNipzOtADPC2Zhr3jFcETjtHO','aaaaaaaa',NULL,'qpjbNixFbA5ReI15G0c6xLav4adYD6Q7jzxpsR32IIm9tPoEMQtmcyh61cWR','kepala','KEPALA',NULL,NULL,NULL,'2019-08-21 23:50:09','2019-08-21 23:50:09'),
(93,'name','test@gmail.com',NULL,'$2y$10$nqHZwo5xUG4I3NZ1CASoaeMICOWmzlOC0kN5gXtgiuEd4VUkNJYE2','aaaaaa',NULL,'0R6FUwiE6rBLDo1e9oQYHcbmNVOUTskDuDXQ1PEyi8THrAIJGokKSmRVgldd','joko','AUDITOR',NULL,8,'Sub Bag Tata Usaha','2020-11-01 20:30:08','2020-11-01 20:31:17'),
(94,'name','test@gmail.com',NULL,'$2y$10$9a6WLBzgdcMXMjCBY7YwR.csT6DFogqypjCj69izavvPAzhG4IbxO','aaaaaa',NULL,NULL,'hendro','AUDITOR',NULL,9,'Sub Bag Tata Usaha','2020-11-01 20:30:23','2020-11-01 21:19:46'),
(95,'name','test@gmail.com',NULL,'$2y$10$xPrdnJ4jxKmZtuUZslUA.uz6VgYugix19S2aKezrOHCF..dLpBTzC','ssssss','changed','lMnLlt1KgL1n8sFcM8xDeQIT1peaTuYss7UcuoIbwaH1Q0STQ9Dd2HnWl1ol','anissa','AUDITOR',NULL,12,'Seksi Standarisasi Dan Sertifikasi / Operasional','2020-11-01 20:30:40','2020-11-01 20:33:25'),
(96,'name','test@gmail.com',NULL,'$2y$10$owquWNE7yYbROpHM5ejL0uxr6QCWcvg3GQkxHHpJJstOQI7zP6r7y','aaaaaa',NULL,NULL,'hesty','AUDITOR',NULL,13,NULL,'2020-11-01 20:31:07','2020-11-01 20:31:07'),
(97,'name','test@gmail.com',NULL,'$2y$10$96ZDip18gI46Kvz6cFbe/uVbKldrlSI2Uk181CQ6zKjBhR1M4KMwq','aaaaaa',NULL,NULL,'bayu','AUDITOR',NULL,14,'Seksi Standarisasi Dan Sertifikasi / Mutu','2020-11-01 20:31:40','2020-11-01 20:31:47'),
(98,'name','test@gmail.com',NULL,'$2y$10$xHBLqliBLQRhuvROBxYHoetn7xBBl3GKndk0yo7z72c8L1PZt8VaO','aaaaaa',NULL,'1V7zLP4CtPuD8a115N9s6QV6Mk7Ht5SStPxeJqGIsuhsrFKYE7TXwr7WowrA','nina','AUDITEE',8,NULL,'Sub Bag Tata Usaha','2020-11-01 20:38:12','2020-11-01 20:41:39'),
(99,'name','test@gmail.com',NULL,'$2y$10$Ga/ydyLnVItw2GzHqhJ3l.LRQ6PliyOr2aTfiUBTiMjCVHgq.Xkk6','aaaaaa',NULL,NULL,'leny','AUDITEE',9,NULL,'Sub Bag Tata Usaha','2020-11-01 20:38:38','2020-11-01 20:41:35'),
(100,'name','test@gmail.com',NULL,'$2y$10$SYkOIdvcR/.U4gxMI9MiUeDcACKjNMHwyoCsl17lhE0sk0ySRry8y','aaaaaa',NULL,NULL,'fatimah','AUDITEE',10,NULL,NULL,'2020-11-01 20:40:43','2020-11-01 20:40:43'),
(101,'name','test@gmail.com',NULL,'$2y$10$MlokmrMjtZhcHoQnk.dqyOQMvLc5ARG5leXNW5DyRw0MNp7ZoTOMy','aaaaaa',NULL,NULL,'putri','AUDITEE',12,NULL,NULL,'2020-11-01 20:41:28','2020-11-01 20:41:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
