/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - audit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`audit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `audit`;

/*Table structure for table `arsip_lks` */

DROP TABLE IF EXISTS `arsip_lks`;

CREATE TABLE `arsip_lks` (
  `id` int(10) NOT NULL,
  `nolks` int(10) DEFAULT NULL,
  `id_pertanyaan` int(10) DEFAULT NULL,
  `acuan` longtext,
  `deskripsi` longtext,
  `iec_2012` varchar(220) DEFAULT NULL,
  `iec_2015` varchar(220) DEFAULT NULL,
  `iec_2017` varchar(220) DEFAULT NULL,
  `smm` varchar(220) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `nama_pengirim` varchar(120) DEFAULT NULL,
  `tahun_audit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pertanyaan` (`id_pertanyaan`),
  CONSTRAINT `arsip_lks_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `arsip_pertanyaan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `arsip_lks` */

insert  into `arsip_lks`(`id`,`nolks`,`id_pertanyaan`,`acuan`,`deskripsi`,`iec_2012`,`iec_2015`,`iec_2017`,`smm`,`status`,`lokasi`,`nama_pengirim`,`tahun_audit`) values 
(20211,1,20212,'mpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos si',', consectetur adipisicing elit. Lorem ipsum dolor sit ametLaudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','5.1 Struktur organisai dan manajemen puncak','5 Persyaratan umum','5.3 Konteks organisasi','sdasdav hehe rgergw','Telah Ditindak','Sub Bag Tata Usaha','Joko Winarno','2021'),
(20212,2,20217,'mnis praempore fugit. Mompore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus','mpore fugit. Mollitia, omnis praempore fugit. Mompore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sisentium, soluta exercitationem temporibus atque dignissimos si','6 Persyaratan Sumberdaya','5.1.1 Tanggung jawab hukum','5.2 Konsep dasar dan kualitas prinsip manajemen','dsvsdvs sddsvdvsd','Telah Ditindak','Sub Bag Tata Usaha','Joko Winarno','2021'),
(20213,3,20216,'mnis praemnis praempore fugit. Mompore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibusmpore fugit. Mompore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus','mpore fugit. Mompore fugit. Mollitia, omnmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siis praesentium, soluta exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siem temporibus atque dignissimos si','5 Persyaratan Struktur','4.8 Pendekatan berbasis risiko','6.2 Kompetensi personel yang meninjau laporan audit dan membuat keputusan sertifikasi','vsdvsd sdcvsdvs s','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2021'),
(20221,1,20221,'asdasd','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','6 Persyaratan Sumberdaya','5.1 Masalah hukum dan kontrak','5 Persyaratan kompetensi untuk auditor dan tim audit SMM','asdasd','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2022'),
(20222,2,20223,'sdasdfasf','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','7 Persyaratan proses','5 Persyaratan umum','5 Persyaratan kompetensi untuk auditor dan tim audit SMM','asfasfas','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2022'),
(20223,3,20226,'asdasda','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','6.2 Sumber daya untuk evaluasi','5.1.1 Tanggung jawab hukum','5.4 Produk, layanan, proses, dan organisasi klien','asfbetnbrt','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2022'),
(20224,4,20225,'Lorem ipsum dolor te cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','6.2 Sumber daya untuk evaluasi','5.1 Masalah hukum dan kontrak','6 Persyaratan kompetensi untuk personel lain','efsgen','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2022'),
(20225,1,20228,'fvbdff fffffffffffttttttt tttttttttttttttttt tttttttttttnbbbbbbbb bbbbbbbbbbbbbbbbbb','ffffffffffffffffff fffffffff fffffffffffttttttt tttttttttttttttttt tttttttttttnbbbbbbbb bbbbbbbbbbbbbbbbbb','4.4 Kondisi non-dikriminasi','5.1.3 Tanggung jawab untuk keputusan sertifikasi','5.4 Produk, layanan, proses, dan organisasi klien','fssdf','Ter-Verifikasi','Seksi Standarisasi Dan Sertifikasi / Operasional','Bayu Wicaksono','2022'),
(20226,NULL,20227,'dbfb','dfgdfgnbd  fghdfgfgn dfgndfgbdfg fsgdfghfdhtym fgbcvbvcb vccv bcv bvcb cvb srgr gn    dfghdrnbtntdnyt teyntenertn','7.3 Tinjauan permohonan','5.3 Pertanggungjawaban dan pembiayaan','6.1 Umum','fgbfbg',NULL,'Seksi Standarisasi Dan Sertifikasi / Operasional',NULL,'2022'),
(20227,5,20229,'sequi nobis voluptatibus!','sapiente cupiditate q excepturi iusto corporisuae sequi nobis voluptatibus!','7 Persyaratan proses','5.1.2 Perjanjian sertifikasi','5.4 Produk, layanan, proses, dan organisasi klien','sapiente cupiditate','Ter-Verifikasi','Sub Bag Tata Usaha','Joko Winarno','2022');

/*Table structure for table `arsip_pertanyaan` */

DROP TABLE IF EXISTS `arsip_pertanyaan`;

CREATE TABLE `arsip_pertanyaan` (
  `id` int(10) NOT NULL,
  `pertanyaan` longtext,
  `catatan` longtext,
  `kategori` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `penulis` varchar(120) DEFAULT NULL,
  `tahun_audit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `arsip_pertanyaan` */

insert  into `arsip_pertanyaan`(`id`,`pertanyaan`,`catatan`,`kategori`,`status`,`lokasi`,`penulis`,`tahun_audit`) values 
(20211,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','Lorem ipsum dolorLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint! sit amet, consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!\r\n1. kjhfekvhekjkerhf\r\n2. jkerglejrglej\r\n3. dfgvdfkjvbndkfjv','OK',NULL,'Sub Bag Tata Usaha','joko','2021'),
(20212,', consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!',', consectetur adipisicing elit. Lorem ipsum dolor sit ametLaudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2021'),
(20213,'LorLorLorem iLorLorem ipsum dolor sit ametem ipsum dolor sit ametpsum dolor sit ametem ipsum dolor sit ametem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','OK',NULL,'Sub Bag Tata Usaha','joko','2021'),
(20214,'ur adipisicimnis praesentium, soluta exeng elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','m dolmnis praesentium, soluta exeor sit amet, consectetur adipisicing elit. Laudantium nostrum assumenda asperiores veniam tempore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sint!','OK',NULL,'Sub Bag Tata Usaha','joko','2021'),
(20215,'mnimnis praesentium, soluta exes pmnis praesentium, soluta exeraesmnis praesentium, soluta exeentium, soluta exe','mvmnis praesentium, soluta exenis prmnis praesentmnis praesentium, soluta exeium, soluta exeamnis praesentium, soluta exeesentium, soluta exe','NOK',NULL,'Sub Bag Tata Usaha','joko','2021'),
(20216,'mpore fugit. Mollimpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sitia, omnis praesentium, soluta exercitatmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siionem temporibus atque dignissimos si','mpore fugit. Mompore fugit. Mollitia, omnmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siis praesentium, soluta exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siem temporibus atque dignissimos si','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2021'),
(20217,'mpore fugit. Mollitiampore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos si, omnis praesentium, soluta exercitationem temporibus atque dignissimos si','mpore fugit. Mollitia, omnis praempore fugit. Mompore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos sisentium, soluta exercitationem temporibus atque dignissimos si','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2021'),
(20219,'csdcsa','advad','OK',NULL,'Sub Bag Tata Usaha','joko','2021'),
(20221,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2022'),
(20223,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2022'),
(20225,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2022'),
(20226,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2022'),
(20227,'fdvdfvdsfb sdfbsfbsdbsd  sfsf gbsbs  dfgbdfgbdb   fgfdgnfgn','dfgdfgnbd  fghdfgfgn dfgndfgbdfg fsgdfghfdhtym fgbcvbvcb vccv bcv bvcb cvb srgr gn    dfghdrnbtntdnyt teyntenertn','NOK','LKS Telah Dibuat','Seksi Standarisasi Dan Sertifikasi / Operasional','bayu','2022'),
(20228,'gvrbtttttttttttvvvvvvv vvvvvvvvvvvvvvv vvvvvvvvv vvvvvvvvvvvvv fg','ffffffffffffffffff fffffffff fffffffffffttttttt tttttttttttttttttt tttttttttttnbbbbbbbb bbbbbbbbbbbbbbbbbb','NOK','LKS Telah Dibuat','Seksi Standarisasi Dan Sertifikasi / Operasional','bayu','2022'),
(20229,'excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','sapiente cupiditate q excepturi iusto corporisuae sequi nobis voluptatibus!','NOK','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2022'),
(202210,'adadasd','asdasd','OK',NULL,'Sub Bag Tata Usaha','joko','2022');

/*Table structure for table `arsip_tindakan` */

DROP TABLE IF EXISTS `arsip_tindakan`;

CREATE TABLE `arsip_tindakan` (
  `id` int(10) NOT NULL,
  `id_lks` int(10) DEFAULT NULL,
  `akar` longtext,
  `dilakukan` longtext,
  `pencegahan` longtext,
  `title` varchar(350) DEFAULT NULL,
  `path` varchar(350) DEFAULT NULL,
  `status_tindakan` varchar(50) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `pengirim_tindakan` varchar(200) DEFAULT NULL,
  `catatan_verifikasi` longtext,
  `nama_verifikator` varchar(120) DEFAULT NULL,
  `tahun_audit` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lks` (`id_lks`),
  CONSTRAINT `arsip_tindakan_ibfk_1` FOREIGN KEY (`id_lks`) REFERENCES `arsip_lks` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `arsip_tindakan` */

insert  into `arsip_tindakan`(`id`,`id_lks`,`akar`,`dilakukan`,`pencegahan`,`title`,`path`,`status_tindakan`,`lokasi`,`pengirim_tindakan`,`catatan_verifikasi`,`nama_verifikator`,`tahun_audit`) values 
(20211,20211,'dengan ini kami menyatakan untuk selalu berbahagia wahai anggota dpr yang terhirmat','dengan ini kami menyatakan untuk selalu berbahagia wahai anggota dpr ya  dffd ng terhirmat','dengan ini kami menyatakan untuk selalu berbahagia wahai anggota dpr yang terhirmat','count blade.png','public/storage/xzNYgPP7kMFUOrDplxN6MWjEDe2AoKJShJD9HZVN.png','dikembalikan','Sub Bag Tata Usaha','Nina Kusumiartono','fwewefwef ergwrgerg',NULL,'2021'),
(20212,20212,'orde yang paling bari adaaa di siniiii pdi perkontooooolan membawa komunisme rasa orba','orde yang paling bari adaaa di siniiii pdi perkontooooolan membawa komunisme rasa orba','orde yang paling bari adaaa di siniiii pdi perkontooooolan membawa komunisme rasa orba',NULL,NULL,'Terkirim','Sub Bag Tata Usaha','Nina Kusumiartono',NULL,NULL,'2021'),
(20213,20213,'exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siem temporibus atque dignissimos si','exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siem temporibus atque dignissimos si','exercitationem temporibus atque dignissimos sillitia, omnis praesentium, soluta exercitationmpore fugit. Mollitia, omnis praesentium, soluta exercitationem temporibus atque dignissimos siem temporibus atque dignissimos si','KRS - Ahmad Miftahul Khoiri (1).pdf','public/storage/NBOOH8Bf7QEOHgaQ7JqZVoLsffv7dZ91W8IsGlSV.pdf','Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono',NULL,'Joko Winarno','2021'),
(20221,20221,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sielit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia quas reiciendis. Consectetur, exce','587-Article Text-1775-1-10-20180513.pdf','public/storage/0x6kMs1hbygGu43el2oj9w3jBMPoQUpuUAR6Mtk4.pdf','Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono','Lorem ipsum dolor sielit. Illum adipisci a quia quas reiciendis. Consectetur, excepturi ius','Joko Winarno','2022'),
(20222,20223,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia q editttt','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia q editttt','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a quia qeditttt','game-of-thrones-wallpaper-hd-1920x1080-383419.jpg','public/storage/THFagh5daQA3vGKhTimbidioItdtAWZQSpu9goNJ.jpeg','Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono','xzczxvLorem ipsum dolor sit amet, consectetur adipisicing elit. Illum adipisci a qu','Joko Winarno','2022'),
(20223,20224,'Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!','Consectetur, excepturi iusto corporis sapiente cupiditate quae sequi nobis voluptatibus!',NULL,NULL,'Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono',NULL,'Joko Winarno','2022'),
(20224,20225,'ccccccccccccc cccc ccc cc    dfbdfb   dfbggdfbzbzdfb   zdf dfbdfbfdf  fhbdfgggggggggggh sdghsdfg','ccccccccccccc cccc ccc cc    dfbdfb   dfbggdfbzbzdfb   zdf dfbdfbfdf  fhbdfgggggggggggh sdghsdfg','ccccccccccccc cccc ccc cc    dfbdfb   dfbggdfbzbzdfb   zdf dfbdfbfdf  fhbdfgggggggggggh sdghsdfg','template-ejournal-unesa.pdf','public/storage/S5lLiZje4fvyx3gcSV2Ojm2CJwU9cHpxuVX4ZiQ3.pdf','Ter-Verifikasi','Seksi Standarisasi Dan Sertifikasi / Operasional','Gunawan Sukaca',NULL,'Bayu Wicaksono','2022'),
(20225,20227,'corporisuae sequiq excepturi iusto  nobis voluptatibus! sapiente cupiditate','q excepturi iusto corporisuae sequi nobis voluptatibus! sapiente cupiditate','q excepturi iusto corporisuae sequi nobis voluptatibus! sapiente cupiditate','template-ejournal-unesa.pdf','public/storage/7JYYE8VlNZSfbvhmgGvrZ56ut29K2c6zc4DEoRF7.pdf','Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono',NULL,'Joko Winarno','2022'),
(20226,20222,'dasssssssssssssssss','sss','s',NULL,NULL,'Ter-Verifikasi','Sub Bag Tata Usaha','Nina Kusumiartono',NULL,'Joko Winarno','2022');

/*Table structure for table `auditee` */

DROP TABLE IF EXISTS `auditee`;

CREATE TABLE `auditee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) DEFAULT NULL,
  `lokasi_auditee` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `auditee` */

insert  into `auditee`(`id`,`nama`,`lokasi_auditee`,`created_at`,`updated_at`) values 
(8,'Nina Kusumiartono','Sub Bag Tata Usaha','2020-11-01 20:25:12','2020-11-01 20:25:12'),
(9,'Leny Normayanti','Sub Bag Tata Usaha','2020-11-01 20:25:20','2020-11-01 20:25:20'),
(10,'Fatimah','Seksi Pengembangan jasa Teknis','2020-11-01 20:25:26','2020-11-01 20:25:26'),
(11,'Purnomo Yogi Dewantara','Seksi Pengembangan jasa Teknis','2020-11-01 20:26:30','2020-11-01 20:26:30'),
(12,'Putri Mirawati','Seksi Standarisasi Dan Sertifikasi / Operasional','2020-11-01 20:26:37','2020-11-01 20:26:37'),
(13,'Nurul Samsu Bahari','Seksi Standarisasi Dan Sertifikasi / Operasional','2020-11-01 20:26:43','2020-11-01 20:26:43'),
(14,'Anissa','Seksi Standarisasi Dan Sertifikasi / Mutu','2020-11-01 20:26:49','2020-11-01 20:26:49');

/*Table structure for table `auditor` */

DROP TABLE IF EXISTS `auditor`;

CREATE TABLE `auditor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) DEFAULT NULL,
  `lokasi_audit` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `auditor` */

insert  into `auditor`(`id`,`nama`,`lokasi_audit`,`created_at`,`updated_at`) values 
(8,'Joko Winarno','Sub Bag Tata Usaha','2020-11-01 20:21:15','2020-11-01 20:21:15'),
(9,'Hendro Ferdiyanto','Sub Bag Tata Usaha','2020-11-01 20:22:22','2020-11-01 20:22:22'),
(10,'Dewi Retno Anggraeni','Seksi Pengembangan jasa Teknis','2020-11-01 20:23:03','2020-11-01 20:23:03'),
(11,'Agung Yanuar Wirapraja','Seksi Pengembangan jasa Teknis','2020-11-01 20:23:15','2020-11-01 20:23:15'),
(12,'Anissa','Seksi Standarisasi Dan Sertifikasi / Operasional','2020-11-01 20:23:24','2020-11-01 20:23:24'),
(13,'Hesty Eka Mayasari','Seksi Standarisasi Dan Sertifikasi / Operasional','2020-11-01 20:27:06','2020-11-01 20:27:06'),
(14,'Bayu Wicaksono','Seksi Standarisasi Dan Sertifikasi / Mutu','2020-11-01 20:27:25','2020-11-01 20:27:25'),
(15,'Nurul Mahmida Ariani','Top Manajemen','2020-11-01 20:27:35','2020-11-01 20:27:35');

/*Table structure for table `catatan` */

DROP TABLE IF EXISTS `catatan`;

CREATE TABLE `catatan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_tindakan` int(10) DEFAULT NULL,
  `catatan_tindakan` longtext,
  `status` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_catatan` (`id_tindakan`),
  CONSTRAINT `FK_catatan` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `catatan` */

insert  into `catatan`(`id`,`id_tindakan`,`catatan_tindakan`,`status`,`created_at`,`updated_at`) values 
(1,1,'melengkapi dokumen dokumen yang terkait dengan FM -6.2.06','selesai','2020-11-02 10:03:38','2020-11-02 10:04:38'),
(2,1,'menentukan spesifik poin mana yang berkaitan langsung dengan permasalahan','new','2020-11-02 10:22:13','2020-11-02 10:25:58'),
(6,2,'coba untuk diamati sesuai dengan permasalahan yang disebutkan','Terkirim','2020-11-02 10:34:21','2020-11-02 10:35:33'),
(7,4,'sdfsdfsv sfsd sdfsdf sdfs','new','2020-11-07 19:43:27','2020-11-07 19:43:27');

/*Table structure for table `klausul` */

DROP TABLE IF EXISTS `klausul`;

CREATE TABLE `klausul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klausul` varchar(300) DEFAULT NULL,
  `dokumen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=477 DEFAULT CHARSET=latin1;

/*Data for the table `klausul` */

insert  into `klausul`(`id`,`klausul`,`dokumen`) values 
(1,'4 Persyaratan Umum','SNI ISO/IEC 17065:2012'),
(2,'4.1 Masalah hukum dan kontrak','SNI ISO/IEC 17065:2012'),
(3,'4.2 Manajemen ketidakberpihakan','SNI ISO/IEC 17065:2012'),
(4,'4.3 Tanggung gugat dan keuangan','SNI ISO/IEC 17065:2012'),
(5,'4.4 Kondisi non-dikriminasi','SNI ISO/IEC 17065:2012'),
(6,'4.5 Kerahasiaan','SNI ISO/IEC 17065:2012'),
(7,'4.6 Ketersediaan informasi publik','SNI ISO/IEC 17065:2012'),
(8,'5 Persyaratan Struktur','SNI ISO/IEC 17065:2012'),
(9,'5.1 Struktur organisai dan manajemen puncak','SNI ISO/IEC 17065:2012'),
(10,'5.2 Mekanisme untuk menjaga ketidakberpihakan','SNI ISO/IEC 17065:2012'),
(11,'6 Persyaratan Sumberdaya','SNI ISO/IEC 17065:2012'),
(12,'6.1 Personil lembaga sertifikasi','SNI ISO/IEC 17065:2012'),
(13,'6.2 Sumber daya untuk evaluasi','SNI ISO/IEC 17065:2012'),
(14,'7 Persyaratan proses','SNI ISO/IEC 17065:2012'),
(15,'7.1 Umum','SNI ISO/IEC 17065:2012'),
(16,'7.2 Permohonan','SNI ISO/IEC 17065:2012'),
(17,'7.3 Tinjauan permohonan','SNI ISO/IEC 17065:2012'),
(18,'7.4 Evaluasi','SNI ISO/IEC 17065:2012'),
(19,'7.5 Tinjauan','SNI ISO/IEC 17065:2012'),
(20,'7.6 Keputusan sertifikasi','SNI ISO/IEC 17065:2012'),
(21,'7.7 Dokumentasi sertifikasi','SNI ISO/IEC 17065:2012'),
(22,'7.8 Direktori produk yang disertifikasi','SNI ISO/IEC 17065:2012'),
(23,'7.9 Survailen','SNI ISO/IEC 17065:2012'),
(24,'7.10 Perubahan yang mempengaruhi sertifikasi','SNI ISO/IEC 17065:2012'),
(25,'7.11 Penghentian, pengurangan, pembekuan, atau pencabutan sertifikasi','SNI ISO/IEC 17065:2012'),
(26,'7.12 Rekaman','SNI ISO/IEC 17065:2012'),
(27,'7.13 Keluhan dan banding','SNI ISO/IEC 17065:2012'),
(28,'8 Persyaratan sistem manajemen','SNI ISO/IEC 17065:2012'),
(29,'8.1 Opsi','SNI ISO/IEC 17065:2012'),
(30,'8.1.1 Umum','SNI ISO/IEC 17065:2012'),
(31,'8.2 Dokumentasi sistem manajemen umum (Opsi A)','SNI ISO/IEC 17065:2012'),
(32,'8.3 Pengendalian dokumen (Opsi A)','SNI ISO/IEC 17065:2012'),
(33,'8.4 Pengendalian rekaman (Opsi A)','SNI ISO/IEC 17065:2012'),
(34,'8.5 Tinjauan manajemen (Opsi A)','SNI ISO/IEC 17065:2012'),
(35,'8.6 Audit internal(Opsi A)','SNI ISO/IEC 17065:2012'),
(36,'8.7 Tindakan korektif (Opsi A)','SNI ISO/IEC 17065:2012'),
(37,'8.8 Tindakan pencegahan (Opsi A)','SNI ISO/IEC 17065:2012'),
(38,'Lampiran A (informatif) Prinsip untuk lembaga sertifikasi produk dan kegiatan sertifikasi','SNI ISO/IEC 17065:2012'),
(39,'Lampiran B (informatif) Informasi tentang penerapan standar untuk proses dan jasa','SNI ISO/IEC 17065:2012'),
(40,'4 Prinsip','SNI ISO/IEC 17021-1:2015'),
(41,'4.1 Umum','SNI ISO/IEC 17021-1:2015'),
(42,'4.2 Ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(43,'4.3 Kompetensi','SNI ISO/IEC 17021-1:2015'),
(44,'4.4 Tanggung jawab','SNI ISO/IEC 17021-1:2015'),
(45,'4.5 Keterbukaan','SNI ISO/IEC 17021-1:2015'),
(46,'4.6 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(47,'4.7 Daya tanggap terhadap keluhan','SNI ISO/IEC 17021-1:2015'),
(48,'4.8 Pendekatan berbasis risiko','SNI ISO/IEC 17021-1:2015'),
(49,'5 Persyaratan umum ','SNI ISO/IEC 17021-1:2015'),
(50,'5.1 Masalah hukum dan kontrak','SNI ISO/IEC 17021-1:2015'),
(51,'5.1.1 Tanggung jawab hukum','SNI ISO/IEC 17021-1:2015'),
(52,'5.1.2 Perjanjian sertifikasi','SNI ISO/IEC 17021-1:2015'),
(53,'5.1.3 Tanggung jawab untuk keputusan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(54,'5.2 Pengelolaan ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(55,'5.3 Pertanggungjawaban dan pembiayaan','SNI ISO/IEC 17021-1:2015'),
(56,'6 Persyaratan struktural','SNI ISO/IEC 17021-1:2015'),
(57,'6.1 Struktur organisasi dan manajemen puncak','SNI ISO/IEC 17021-1:2015'),
(58,'6.2 Kontrol operasional','SNI ISO/IEC 17021-1:2015'),
(59,'7 Persyaratan sumber daya','SNI ISO/IEC 17021-1:2015'),
(60,'7.1 Kompetensi personel','SNI ISO/IEC 17021-1:2015'),
(61,'7.1.1 Pertimbangan umum','SNI ISO/IEC 17021-1:2015'),
(62,'7.1.2 Penentuan kriteria kompetensi','SNI ISO/IEC 17021-1:2015'),
(63,'7.1.3 Proses evaluasi','SNI ISO/IEC 17021-1:2015'),
(64,'7.1.4 Pertimbangan lain','SNI ISO/IEC 17021-1:2015'),
(65,'7.2 Personel yang terlibat dalam kegiatan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(66,'7.3 Penggunaan auditor eksternal individu dan pakar teknis eksternal','SNI ISO/IEC 17021-1:2015'),
(67,'7.4 Catatan Personil','SNI ISO/IEC 17021-1:2015'),
(68,'7.5 Outsourcing','SNI ISO/IEC 17021-1:2015'),
(69,'8 Persyaratan informasi','SNI ISO/IEC 17021-1:2015'),
(70,'8.1 Informasi publik','SNI ISO/IEC 17021-1:2015'),
(71,'8.2 Dokumen Sertifikasi','SNI ISO/IEC 17021-1:2015'),
(72,'8.3 Rujukan ke sertifikasi dan penggunaan merek','SNI ISO/IEC 17021-1:2015'),
(73,'8.4 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(74,'8.5 Pertukaran informasi antara lembaga sertifikasi dan kliennya','SNI ISO/IEC 17021-1:2015'),
(75,'8.5.1 Informasi tentang aktivitas dan persyaratan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(76,'8.5.2 Pemberitahuan perubahan oleh lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(77,'8.5.3 Pemberitahuan perubahan oleh klien tersertifikasi','SNI ISO/IEC 17021-1:2015'),
(78,'9 Persyaratan proses','SNI ISO/IEC 17021-1:2015'),
(79,'9.1 Kegiatan pra-sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(80,'9.1.1 Aplikasi ','SNI ISO/IEC 17021-1:2015'),
(81,'9.1.2 Peninjauan aplikasi ','SNI ISO/IEC 17021-1:2015'),
(82,'9.1.3 Program audit ','SNI ISO/IEC 17021-1:2015'),
(83,'9.1.4 Menentukan waktu audit ','SNI ISO/IEC 17021-1:2015'),
(84,'9.1.5 Pengambilan sampel multi-situs ','SNI ISO/IEC 17021-1:2015'),
(85,'9.1.6 Standar sistem manajemen berganda ','SNI ISO/IEC 17021-1:2015'),
(86,'9.2 Perencanaan audit ','SNI ISO/IEC 17021-1:2015'),
(87,'9.2.1 Menentukan tujuan, ruang lingkup, dan kriteria ','SNI ISO/IEC 17021-1:2015'),
(88,'9.2.2 Pemilihan tim audit dan penugasan','SNI ISO/IEC 17021-1:2015'),
(89,'9.2.3 Rencana audit ','SNI ISO/IEC 17021-1:2015'),
(90,'9.3 Sertifikasi awal ','SNI ISO/IEC 17021-1:2015'),
(91,'9.3.1 Audit sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(92,'9.4 Melakukan audit ','SNI ISO/IEC 17021-1:2015'),
(93,'9.4.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(94,'9.4.2 Melakukan rapat pembukaan ','SNI ISO/IEC 17021-1:2015'),
(95,'9.4.3 Komunikasi selama audit ','SNI ISO/IEC 17021-1:2015'),
(96,'9.4.4 Memperoleh dan memverifikasi informasi ','SNI ISO/IEC 17021-1:2015'),
(97,'9.4.5 Mengidentifikasi dan mencatat temuan audit ','SNI ISO/IEC 17021-1:2015'),
(98,'9.4.6 Mempersiapkan kesimpulan audit ','SNI ISO/IEC 17021-1:2015'),
(99,'9.4.7 Melakukan rapat penutupan ','SNI ISO/IEC 17021-1:2015'),
(100,'9.4.8 Laporan audit ','SNI ISO/IEC 17021-1:2015'),
(101,'9.4.9 Menyebabkan analisis ketidaksesuaian ','SNI ISO/IEC 17021-1:2015'),
(102,'9.4.10 Efektivitas koreksi dan tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(103,'9.5 Pengesahan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(104,'9.5.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(105,'9.5.2 Tindakan sebelum mengambil keputusan ','SNI ISO/IEC 17021-1:2015'),
(106,'9.5.3 Informasi untuk pemberian sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(107,'9.5.4 Informasi untuk pemberian sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(108,'9.6 Mempertahankan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(109,'9.6.1 Umum','SNI ISO/IEC 17021-1:2015'),
(110,'9.6.2 Kegiatan pengawasan','SNI ISO/IEC 17021-1:2015'),
(111,'9.6.3 Sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(112,'9.6.4 Audit khusus','SNI ISO/IEC 17021-1:2015'),
(113,'9.6.5 Menangguhkan, dengan menarik atau mengurangi ruang lingkup sertifikasi','SNI ISO/IEC 17021-1:2015'),
(114,'9.7 Banding','SNI ISO/IEC 17021-1:2015'),
(115,'9.8 Keluhan','SNI ISO/IEC 17021-1:2015'),
(116,'9.9 Catatan klien','SNI ISO/IEC 17021-1:2015'),
(117,'10 Opsi','SNI ISO/IEC 17021-1:2015'),
(118,'10.1 Persyaratan sistem manajemen untuk lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(119,'10.2 Opsi A: Persyaratan sistem manajemen ','SNI ISO/IEC 17021-1:2015'),
(120,'10.2.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(121,'10.2.2 Sistem manual manajemen','SNI ISO/IEC 17021-1:2015'),
(122,'10.2.3 Pengendalian dokumen','SNI ISO/IEC 17021-1:2015'),
(123,'10.2.4 Pengendalian catatan','SNI ISO/IEC 17021-1:2015'),
(124,'10.2.5 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(125,'10.2.6 Audit internal','SNI ISO/IEC 17021-1:2015'),
(126,'10.2.7 Tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(127,'10.3 Opsi B: Persyaratan sistem manajemen sesuai dengan ISO 9001','SNI ISO/IEC 17021-1:2015'),
(128,'10.3.1 Umum','SNI ISO/IEC 17021-1:2015'),
(129,'10.3.2 Lingkup','SNI ISO/IEC 17021-1:2015'),
(130,'10.3.3 Fokus pelanggan','SNI ISO/IEC 17021-1:2015'),
(131,'10.3.4 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(132,'Lampiran A (normatif) Diperlukan pengetahuan dan keterampilan','SNI ISO/IEC 17021-1:2015'),
(133,'Lampiran B (informatif) Metode evaluasi yang memungkinkan','SNI ISO/IEC 17021-1:2015'),
(134,'Lampiran C (informatif) Contoh aliran proses untuk menentukan dan mempertahankan kompetensi','SNI ISO/IEC 17021-1:2015'),
(135,'Lampiran D (informatif) Perilaku pribadi yang diinginkan','SNI ISO/IEC 17021-1:2015'),
(136,'Lampiran E (informatif) Proses audit dan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(137,'5 Persyaratan kompetensi untuk auditor dan tim audit SMM','SNI ISO/IEC 17021-3:2017'),
(138,'5.1 Umum','SNI ISO/IEC 17021-3:2017'),
(139,'5.2 Konsep dasar dan kualitas prinsip manajemen','SNI ISO/IEC 17021-3:2017'),
(140,'5.3 Konteks organisasi','SNI ISO/IEC 17021-3:2017'),
(141,'5.4 Produk, layanan, proses, dan organisasi klien','SNI ISO/IEC 17021-3:2017'),
(142,'6 Persyaratan kompetensi untuk personel lain','SNI ISO/IEC 17021-3:2017'),
(143,'6.1 Umum','SNI ISO/IEC 17021-3:2017'),
(144,'6.2 Kompetensi personel yang meninjau laporan audit dan membuat keputusan sertifikasi','SNI ISO/IEC 17021-3:2017'),
(145,'5.1.1 Tanggung jawab hukum','SNI ISO/IEC 17021-1:2015'),
(146,'5.1.2 Perjanjian sertifikasi','SNI ISO/IEC 17021-1:2015'),
(147,'5.1.3 Tanggung jawab untuk keputusan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(148,'5.2 Pengelolaan ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(149,'5.3 Pertanggungjawaban dan pembiayaan','SNI ISO/IEC 17021-1:2015'),
(150,'6 Persyaratan struktural','SNI ISO/IEC 17021-1:2015'),
(151,'6.1 Struktur organisasi dan manajemen puncak','SNI ISO/IEC 17021-1:2015'),
(152,'6.2 Kontrol operasional','SNI ISO/IEC 17021-1:2015'),
(153,'7 Persyaratan sumber daya','SNI ISO/IEC 17021-1:2015'),
(154,'7.1 Kompetensi personel','SNI ISO/IEC 17021-1:2015'),
(155,'7.1.1 Pertimbangan umum','SNI ISO/IEC 17021-1:2015'),
(156,'7.1.2 Penentuan kriteria kompetensi','SNI ISO/IEC 17021-1:2015'),
(157,'7.1.3 Proses evaluasi','SNI ISO/IEC 17021-1:2015'),
(158,'7.1.4 Pertimbangan lain','SNI ISO/IEC 17021-1:2015'),
(159,'7.2 Personel yang terlibat dalam kegiatan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(160,'7.3 Penggunaan auditor eksternal individu dan pakar teknis eksternal','SNI ISO/IEC 17021-1:2015'),
(161,'7.4 Catatan Personil','SNI ISO/IEC 17021-1:2015'),
(162,'7.5 Outsourcing','SNI ISO/IEC 17021-1:2015'),
(163,'8 Persyaratan informasi','SNI ISO/IEC 17021-1:2015'),
(164,'8.1 Informasi publik','SNI ISO/IEC 17021-1:2015'),
(165,'8.2 Dokumen Sertifikasi','SNI ISO/IEC 17021-1:2015'),
(166,'8.3 Rujukan ke sertifikasi dan penggunaan merek','SNI ISO/IEC 17021-1:2015'),
(167,'8.4 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(168,'8.5 Pertukaran informasi antara lembaga sertifikasi dan kliennya','SNI ISO/IEC 17021-1:2015'),
(169,'8.5.1 Informasi tentang aktivitas dan persyaratan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(170,'8.5.2 Pemberitahuan perubahan oleh lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(171,'8.5.3 Pemberitahuan perubahan oleh klien tersertifikasi','SNI ISO/IEC 17021-1:2015'),
(172,'9 Persyaratan proses','SNI ISO/IEC 17021-1:2015'),
(173,'9.1 Kegiatan pra-sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(174,'9.1.1 Aplikasi ','SNI ISO/IEC 17021-1:2015'),
(175,'9.1.2 Peninjauan aplikasi ','SNI ISO/IEC 17021-1:2015'),
(176,'9.1.3 Program audit ','SNI ISO/IEC 17021-1:2015'),
(177,'9.1.4 Menentukan waktu audit ','SNI ISO/IEC 17021-1:2015'),
(178,'9.1.5 Pengambilan sampel multi-situs ','SNI ISO/IEC 17021-1:2015'),
(179,'9.1.6 Standar sistem manajemen berganda ','SNI ISO/IEC 17021-1:2015'),
(180,'9.2 Perencanaan audit ','SNI ISO/IEC 17021-1:2015'),
(181,'9.2.1 Menentukan tujuan, ruang lingkup, dan kriteria ','SNI ISO/IEC 17021-1:2015'),
(182,'9.2.2 Pemilihan tim audit dan penugasan','SNI ISO/IEC 17021-1:2015'),
(183,'9.2.3 Rencana audit ','SNI ISO/IEC 17021-1:2015'),
(184,'9.3 Sertifikasi awal ','SNI ISO/IEC 17021-1:2015'),
(185,'9.3.1 Audit sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(186,'9.4 Melakukan audit ','SNI ISO/IEC 17021-1:2015'),
(187,'9.4.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(188,'9.4.2 Melakukan rapat pembukaan ','SNI ISO/IEC 17021-1:2015'),
(189,'9.4.3 Komunikasi selama audit ','SNI ISO/IEC 17021-1:2015'),
(190,'9.4.4 Memperoleh dan memverifikasi informasi ','SNI ISO/IEC 17021-1:2015'),
(191,'9.4.5 Mengidentifikasi dan mencatat temuan audit ','SNI ISO/IEC 17021-1:2015'),
(192,'9.4.6 Mempersiapkan kesimpulan audit ','SNI ISO/IEC 17021-1:2015'),
(193,'9.4.7 Melakukan rapat penutupan ','SNI ISO/IEC 17021-1:2015'),
(194,'9.4.8 Laporan audit ','SNI ISO/IEC 17021-1:2015'),
(195,'9.4.9 Menyebabkan analisis ketidaksesuaian ','SNI ISO/IEC 17021-1:2015'),
(196,'9.4.10 Efektivitas koreksi dan tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(197,'9.5 Pengesahan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(198,'9.5.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(199,'9.5.2 Tindakan sebelum mengambil keputusan ','SNI ISO/IEC 17021-1:2015'),
(200,'9.5.3 Informasi untuk pemberian sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(201,'9.5.4 Informasi untuk pemberian sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(202,'9.6 Mempertahankan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(203,'9.6.1 Umum','SNI ISO/IEC 17021-1:2015'),
(204,'9.6.2 Kegiatan pengawasan','SNI ISO/IEC 17021-1:2015'),
(205,'9.6.3 Sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(206,'9.6.4 Audit khusus','SNI ISO/IEC 17021-1:2015'),
(207,'9.6.5 Menangguhkan, dengan menarik atau mengurangi ruang lingkup sertifikasi','SNI ISO/IEC 17021-1:2015'),
(208,'9.7 Banding','SNI ISO/IEC 17021-1:2015'),
(209,'9.8 Keluhan','SNI ISO/IEC 17021-1:2015'),
(210,'9.9 Catatan klien','SNI ISO/IEC 17021-1:2015'),
(211,'10 Opsi','SNI ISO/IEC 17021-1:2015'),
(212,'10.1 Persyaratan sistem manajemen untuk lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(213,'10.2 Opsi A: Persyaratan sistem manajemen ','SNI ISO/IEC 17021-1:2015'),
(214,'10.2.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(215,'10.2.2 Sistem manual manajemen','SNI ISO/IEC 17021-1:2015'),
(216,'10.2.3 Pengendalian dokumen','SNI ISO/IEC 17021-1:2015'),
(217,'10.2.4 Pengendalian catatan','SNI ISO/IEC 17021-1:2015'),
(218,'10.2.5 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(219,'10.2.6 Audit internal','SNI ISO/IEC 17021-1:2015'),
(220,'10.2.7 Tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(221,'10.3 Opsi B: Persyaratan sistem manajemen sesuai dengan ISO 9001','SNI ISO/IEC 17021-1:2015'),
(222,'10.3.1 Umum','SNI ISO/IEC 17021-1:2015'),
(223,'10.3.2 Lingkup','SNI ISO/IEC 17021-1:2015'),
(224,'10.3.3 Fokus pelanggan','SNI ISO/IEC 17021-1:2015'),
(225,'10.3.4 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(226,'Lampiran A (normatif) Diperlukan pengetahuan dan keterampilan','SNI ISO/IEC 17021-1:2015'),
(227,'Lampiran B (informatif) Metode evaluasi yang memungkinkan','SNI ISO/IEC 17021-1:2015'),
(228,'Lampiran C (informatif) Contoh aliran proses untuk menentukan dan mempertahankan kompetensi','SNI ISO/IEC 17021-1:2015'),
(229,'Lampiran D (informatif) Perilaku pribadi yang diinginkan','SNI ISO/IEC 17021-1:2015'),
(230,'Lampiran E (informatif) Proses audit dan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(231,'5 Persyaratan kompetensi untuk auditor dan tim audit SMM','SNI ISO/IEC 17021-3:2017'),
(232,'5.1 Umum','SNI ISO/IEC 17021-3:2017'),
(233,'5.2 Konsep dasar dan kualitas prinsip manajemen','SNI ISO/IEC 17021-3:2017'),
(234,'5.3 Konteks organisasi','SNI ISO/IEC 17021-3:2017'),
(235,'5.4 Produk, layanan, proses, dan organisasi klien','SNI ISO/IEC 17021-3:2017'),
(236,'6 Persyaratan kompetensi untuk personel lain','SNI ISO/IEC 17021-3:2017'),
(237,'6.1 Umum','SNI ISO/IEC 17021-3:2017'),
(238,'6.2 Kompetensi personel yang meninjau laporan audit dan membuat keputusan sertifikasi','SNI ISO/IEC 17021-3:2017'),
(239,'5.1.1 Tanggung jawab hukum','SNI ISO/IEC 17021-1:2015'),
(240,'5.1.2 Perjanjian sertifikasi','SNI ISO/IEC 17021-1:2015'),
(241,'5.1.3 Tanggung jawab untuk keputusan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(242,'5.2 Pengelolaan ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(243,'5.3 Pertanggungjawaban dan pembiayaan','SNI ISO/IEC 17021-1:2015'),
(244,'6 Persyaratan struktural','SNI ISO/IEC 17021-1:2015'),
(245,'6.1 Struktur organisasi dan manajemen puncak','SNI ISO/IEC 17021-1:2015'),
(246,'6.2 Kontrol operasional','SNI ISO/IEC 17021-1:2015'),
(247,'7 Persyaratan sumber daya','SNI ISO/IEC 17021-1:2015'),
(248,'7.1 Kompetensi personel','SNI ISO/IEC 17021-1:2015'),
(249,'7.1.1 Pertimbangan umum','SNI ISO/IEC 17021-1:2015'),
(250,'7.1.2 Penentuan kriteria kompetensi','SNI ISO/IEC 17021-1:2015'),
(251,'7.1.3 Proses evaluasi','SNI ISO/IEC 17021-1:2015'),
(252,'7.1.4 Pertimbangan lain','SNI ISO/IEC 17021-1:2015'),
(253,'7.2 Personel yang terlibat dalam kegiatan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(254,'7.3 Penggunaan auditor eksternal individu dan pakar teknis eksternal','SNI ISO/IEC 17021-1:2015'),
(255,'7.4 Catatan Personil','SNI ISO/IEC 17021-1:2015'),
(256,'7.5 Outsourcing','SNI ISO/IEC 17021-1:2015'),
(257,'8 Persyaratan informasi','SNI ISO/IEC 17021-1:2015'),
(258,'8.1 Informasi publik','SNI ISO/IEC 17021-1:2015'),
(259,'8.2 Dokumen Sertifikasi','SNI ISO/IEC 17021-1:2015'),
(260,'8.3 Rujukan ke sertifikasi dan penggunaan merek','SNI ISO/IEC 17021-1:2015'),
(261,'8.4 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(262,'8.5 Pertukaran informasi antara lembaga sertifikasi dan kliennya','SNI ISO/IEC 17021-1:2015'),
(263,'8.5.1 Informasi tentang aktivitas dan persyaratan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(264,'8.5.2 Pemberitahuan perubahan oleh lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(265,'8.5.3 Pemberitahuan perubahan oleh klien tersertifikasi','SNI ISO/IEC 17021-1:2015'),
(266,'9 Persyaratan proses','SNI ISO/IEC 17021-1:2015'),
(267,'9.1 Kegiatan pra-sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(268,'9.1.1 Aplikasi ','SNI ISO/IEC 17021-1:2015'),
(269,'9.1.2 Peninjauan aplikasi ','SNI ISO/IEC 17021-1:2015'),
(270,'9.1.3 Program audit ','SNI ISO/IEC 17021-1:2015'),
(271,'9.1.4 Menentukan waktu audit ','SNI ISO/IEC 17021-1:2015'),
(272,'9.1.5 Pengambilan sampel multi-situs ','SNI ISO/IEC 17021-1:2015'),
(273,'9.1.6 Standar sistem manajemen berganda ','SNI ISO/IEC 17021-1:2015'),
(274,'9.2 Perencanaan audit ','SNI ISO/IEC 17021-1:2015'),
(275,'9.2.1 Menentukan tujuan, ruang lingkup, dan kriteria ','SNI ISO/IEC 17021-1:2015'),
(276,'9.2.2 Pemilihan tim audit dan penugasan','SNI ISO/IEC 17021-1:2015'),
(277,'9.2.3 Rencana audit ','SNI ISO/IEC 17021-1:2015'),
(278,'9.3 Sertifikasi awal ','SNI ISO/IEC 17021-1:2015'),
(279,'9.3.1 Audit sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(280,'9.4 Melakukan audit ','SNI ISO/IEC 17021-1:2015'),
(281,'9.4.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(282,'9.4.2 Melakukan rapat pembukaan ','SNI ISO/IEC 17021-1:2015'),
(283,'9.4.3 Komunikasi selama audit ','SNI ISO/IEC 17021-1:2015'),
(284,'9.4.4 Memperoleh dan memverifikasi informasi ','SNI ISO/IEC 17021-1:2015'),
(285,'9.4.5 Mengidentifikasi dan mencatat temuan audit ','SNI ISO/IEC 17021-1:2015'),
(286,'9.4.6 Mempersiapkan kesimpulan audit ','SNI ISO/IEC 17021-1:2015'),
(287,'9.4.7 Melakukan rapat penutupan ','SNI ISO/IEC 17021-1:2015'),
(288,'9.4.8 Laporan audit ','SNI ISO/IEC 17021-1:2015'),
(289,'9.4.9 Menyebabkan analisis ketidaksesuaian ','SNI ISO/IEC 17021-1:2015'),
(290,'9.4.10 Efektivitas koreksi dan tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(291,'9.5 Pengesahan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(292,'9.5.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(293,'9.5.2 Tindakan sebelum mengambil keputusan ','SNI ISO/IEC 17021-1:2015'),
(294,'9.5.3 Informasi untuk pemberian sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(295,'9.5.4 Informasi untuk pemberian sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(296,'9.6 Mempertahankan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(297,'9.6.1 Umum','SNI ISO/IEC 17021-1:2015'),
(298,'9.6.2 Kegiatan pengawasan','SNI ISO/IEC 17021-1:2015'),
(299,'9.6.3 Sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(300,'9.6.4 Audit khusus','SNI ISO/IEC 17021-1:2015'),
(301,'9.6.5 Menangguhkan, dengan menarik atau mengurangi ruang lingkup sertifikasi','SNI ISO/IEC 17021-1:2015'),
(302,'9.7 Banding','SNI ISO/IEC 17021-1:2015'),
(303,'9.8 Keluhan','SNI ISO/IEC 17021-1:2015'),
(304,'9.9 Catatan klien','SNI ISO/IEC 17021-1:2015'),
(305,'10 Opsi','SNI ISO/IEC 17021-1:2015'),
(306,'10.1 Persyaratan sistem manajemen untuk lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(307,'10.2 Opsi A: Persyaratan sistem manajemen ','SNI ISO/IEC 17021-1:2015'),
(308,'10.2.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(309,'10.2.2 Sistem manual manajemen','SNI ISO/IEC 17021-1:2015'),
(310,'10.2.3 Pengendalian dokumen','SNI ISO/IEC 17021-1:2015'),
(311,'10.2.4 Pengendalian catatan','SNI ISO/IEC 17021-1:2015'),
(312,'10.2.5 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(313,'10.2.6 Audit internal','SNI ISO/IEC 17021-1:2015'),
(314,'10.2.7 Tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(315,'10.3 Opsi B: Persyaratan sistem manajemen sesuai dengan ISO 9001','SNI ISO/IEC 17021-1:2015'),
(316,'10.3.1 Umum','SNI ISO/IEC 17021-1:2015'),
(317,'10.3.2 Lingkup','SNI ISO/IEC 17021-1:2015'),
(318,'10.3.3 Fokus pelanggan','SNI ISO/IEC 17021-1:2015'),
(319,'10.3.4 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(320,'Lampiran A (normatif) Diperlukan pengetahuan dan keterampilan','SNI ISO/IEC 17021-1:2015'),
(321,'Lampiran B (informatif) Metode evaluasi yang memungkinkan','SNI ISO/IEC 17021-1:2015'),
(322,'Lampiran C (informatif) Contoh aliran proses untuk menentukan dan mempertahankan kompetensi','SNI ISO/IEC 17021-1:2015'),
(323,'Lampiran D (informatif) Perilaku pribadi yang diinginkan','SNI ISO/IEC 17021-1:2015'),
(324,'Lampiran E (informatif) Proses audit dan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(325,'5 Persyaratan kompetensi untuk auditor dan tim audit SMM','SNI ISO/IEC 17021-3:2017'),
(326,'5.1 Umum','SNI ISO/IEC 17021-3:2017'),
(327,'5.2 Konsep dasar dan kualitas prinsip manajemen','SNI ISO/IEC 17021-3:2017'),
(328,'5.3 Konteks organisasi','SNI ISO/IEC 17021-3:2017'),
(329,'5.4 Produk, layanan, proses, dan organisasi klien','SNI ISO/IEC 17021-3:2017'),
(330,'6 Persyaratan kompetensi untuk personel lain','SNI ISO/IEC 17021-3:2017'),
(331,'6.1 Umum','SNI ISO/IEC 17021-3:2017'),
(332,'6.2 Kompetensi personel yang meninjau laporan audit dan membuat keputusan sertifikasi','SNI ISO/IEC 17021-3:2017'),
(333,'4 Persyaratan Umum','SNI ISO/IEC 17065:2012'),
(334,'4.1 Masalah hukum dan kontrak','SNI ISO/IEC 17065:2012'),
(335,'4.2 Manajemen ketidakberpihakan','SNI ISO/IEC 17065:2012'),
(336,'4.3 Tanggung gugat dan keuangan','SNI ISO/IEC 17065:2012'),
(337,'4.4 Kondisi non-dikriminasi','SNI ISO/IEC 17065:2012'),
(338,'4.5 Kerahasiaan','SNI ISO/IEC 17065:2012'),
(339,'4.6 Ketersediaan informasi publik','SNI ISO/IEC 17065:2012'),
(340,'5 Persyaratan Struktur','SNI ISO/IEC 17065:2012'),
(341,'5.1 Struktur organisai dan manajemen puncak','SNI ISO/IEC 17065:2012'),
(342,'5.2 Mekanisme untuk menjaga ketidakberpihakan','SNI ISO/IEC 17065:2012'),
(343,'6 Persyaratan Sumberdaya','SNI ISO/IEC 17065:2012'),
(344,'6.1 Personil lembaga sertifikasi','SNI ISO/IEC 17065:2012'),
(345,'6.2 Sumber daya untuk evaluasi','SNI ISO/IEC 17065:2012'),
(346,'7 Persyaratan proses','SNI ISO/IEC 17065:2012'),
(347,'7.1 Umum','SNI ISO/IEC 17065:2012'),
(348,'7.2 Permohonan','SNI ISO/IEC 17065:2012'),
(349,'7.3 Tinjauan permohonan','SNI ISO/IEC 17065:2012'),
(350,'7.4 Evaluasi','SNI ISO/IEC 17065:2012'),
(351,'7.5 Tinjauan','SNI ISO/IEC 17065:2012'),
(352,'7.6 Keputusan sertifikasi','SNI ISO/IEC 17065:2012'),
(353,'7.7 Dokumentasi sertifikasi','SNI ISO/IEC 17065:2012'),
(354,'7.8 Direktori produk yang disertifikasi','SNI ISO/IEC 17065:2012'),
(355,'7.9 Survailen','SNI ISO/IEC 17065:2012'),
(356,'7.10 Perubahan yang mempengaruhi sertifikasi','SNI ISO/IEC 17065:2012'),
(357,'7.11 Penghentian, pengurangan, pembekuan, atau pencabutan sertifikasi','SNI ISO/IEC 17065:2012'),
(358,'7.12 Rekaman','SNI ISO/IEC 17065:2012'),
(359,'7.13 Keluhan dan banding','SNI ISO/IEC 17065:2012'),
(360,'8 Persyaratan sistem manajemen','SNI ISO/IEC 17065:2012'),
(361,'8.1 Opsi','SNI ISO/IEC 17065:2012'),
(362,'8.1.1 Umum','SNI ISO/IEC 17065:2012'),
(363,'8.2 Dokumentasi sistem manajemen umum (Opsi A)','SNI ISO/IEC 17065:2012'),
(364,'8.3 Pengendalian dokumen (Opsi A)','SNI ISO/IEC 17065:2012'),
(365,'8.4 Pengendalian rekaman (Opsi A)','SNI ISO/IEC 17065:2012'),
(366,'8.5 Tinjauan manajemen (Opsi A)','SNI ISO/IEC 17065:2012'),
(367,'8.6 Audit internal(Opsi A)','SNI ISO/IEC 17065:2012'),
(368,'8.7 Tindakan korektif (Opsi A)','SNI ISO/IEC 17065:2012'),
(369,'8.8 Tindakan pencegahan (Opsi A)','SNI ISO/IEC 17065:2012'),
(370,'Lampiran A (informatif) Prinsip untuk lembaga sertifikasi produk dan kegiatan sertifikasi','SNI ISO/IEC 17065:2012'),
(371,'Lampiran B (informatif) Informasi tentang penerapan standar untuk proses dan jasa','SNI ISO/IEC 17065:2012'),
(372,'4 Prinsip','SNI ISO/IEC 17021-1:2015'),
(373,'4.1 Umum','SNI ISO/IEC 17021-1:2015'),
(374,'4.2 Ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(375,'4.3 Kompetensi','SNI ISO/IEC 17021-1:2015'),
(376,'4.4 Tanggung jawab','SNI ISO/IEC 17021-1:2015'),
(377,'4.5 Keterbukaan','SNI ISO/IEC 17021-1:2015'),
(378,'4.6 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(379,'4.7 Daya tanggap terhadap keluhan','SNI ISO/IEC 17021-1:2015'),
(380,'4.8 Pendekatan berbasis risiko','SNI ISO/IEC 17021-1:2015'),
(381,'5 Persyaratan umum ','SNI ISO/IEC 17021-1:2015'),
(382,'5.1 Masalah hukum dan kontrak','SNI ISO/IEC 17021-1:2015'),
(383,'5.1.1 Tanggung jawab hukum','SNI ISO/IEC 17021-1:2015'),
(384,'5.1.2 Perjanjian sertifikasi','SNI ISO/IEC 17021-1:2015'),
(385,'5.1.3 Tanggung jawab untuk keputusan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(386,'5.2 Pengelolaan ketidakberpihakan','SNI ISO/IEC 17021-1:2015'),
(387,'5.3 Pertanggungjawaban dan pembiayaan','SNI ISO/IEC 17021-1:2015'),
(388,'6 Persyaratan struktural','SNI ISO/IEC 17021-1:2015'),
(389,'6.1 Struktur organisasi dan manajemen puncak','SNI ISO/IEC 17021-1:2015'),
(390,'6.2 Kontrol operasional','SNI ISO/IEC 17021-1:2015'),
(391,'7 Persyaratan sumber daya','SNI ISO/IEC 17021-1:2015'),
(392,'7.1 Kompetensi personel','SNI ISO/IEC 17021-1:2015'),
(393,'7.1.1 Pertimbangan umum','SNI ISO/IEC 17021-1:2015'),
(394,'7.1.2 Penentuan kriteria kompetensi','SNI ISO/IEC 17021-1:2015'),
(395,'7.1.3 Proses evaluasi','SNI ISO/IEC 17021-1:2015'),
(396,'7.1.4 Pertimbangan lain','SNI ISO/IEC 17021-1:2015'),
(397,'7.2 Personel yang terlibat dalam kegiatan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(398,'7.3 Penggunaan auditor eksternal individu dan pakar teknis eksternal','SNI ISO/IEC 17021-1:2015'),
(399,'7.4 Catatan Personil','SNI ISO/IEC 17021-1:2015'),
(400,'7.5 Outsourcing','SNI ISO/IEC 17021-1:2015'),
(401,'8 Persyaratan informasi','SNI ISO/IEC 17021-1:2015'),
(402,'8.1 Informasi publik','SNI ISO/IEC 17021-1:2015'),
(403,'8.2 Dokumen Sertifikasi','SNI ISO/IEC 17021-1:2015'),
(404,'8.3 Rujukan ke sertifikasi dan penggunaan merek','SNI ISO/IEC 17021-1:2015'),
(405,'8.4 Kerahasiaan','SNI ISO/IEC 17021-1:2015'),
(406,'8.5 Pertukaran informasi antara lembaga sertifikasi dan kliennya','SNI ISO/IEC 17021-1:2015'),
(407,'8.5.1 Informasi tentang aktivitas dan persyaratan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(408,'8.5.2 Pemberitahuan perubahan oleh lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(409,'8.5.3 Pemberitahuan perubahan oleh klien tersertifikasi','SNI ISO/IEC 17021-1:2015'),
(410,'9 Persyaratan proses','SNI ISO/IEC 17021-1:2015'),
(411,'9.1 Kegiatan pra-sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(412,'9.1.1 Aplikasi ','SNI ISO/IEC 17021-1:2015'),
(413,'9.1.2 Peninjauan aplikasi ','SNI ISO/IEC 17021-1:2015'),
(414,'9.1.3 Program audit ','SNI ISO/IEC 17021-1:2015'),
(415,'9.1.4 Menentukan waktu audit ','SNI ISO/IEC 17021-1:2015'),
(416,'9.1.5 Pengambilan sampel multi-situs ','SNI ISO/IEC 17021-1:2015'),
(417,'9.1.6 Standar sistem manajemen berganda ','SNI ISO/IEC 17021-1:2015'),
(418,'9.2 Perencanaan audit ','SNI ISO/IEC 17021-1:2015'),
(419,'9.2.1 Menentukan tujuan, ruang lingkup, dan kriteria ','SNI ISO/IEC 17021-1:2015'),
(420,'9.2.2 Pemilihan tim audit dan penugasan','SNI ISO/IEC 17021-1:2015'),
(421,'9.2.3 Rencana audit ','SNI ISO/IEC 17021-1:2015'),
(422,'9.3 Sertifikasi awal ','SNI ISO/IEC 17021-1:2015'),
(423,'9.3.1 Audit sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(424,'9.4 Melakukan audit ','SNI ISO/IEC 17021-1:2015'),
(425,'9.4.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(426,'9.4.2 Melakukan rapat pembukaan ','SNI ISO/IEC 17021-1:2015'),
(427,'9.4.3 Komunikasi selama audit ','SNI ISO/IEC 17021-1:2015'),
(428,'9.4.4 Memperoleh dan memverifikasi informasi ','SNI ISO/IEC 17021-1:2015'),
(429,'9.4.5 Mengidentifikasi dan mencatat temuan audit ','SNI ISO/IEC 17021-1:2015'),
(430,'9.4.6 Mempersiapkan kesimpulan audit ','SNI ISO/IEC 17021-1:2015'),
(431,'9.4.7 Melakukan rapat penutupan ','SNI ISO/IEC 17021-1:2015'),
(432,'9.4.8 Laporan audit ','SNI ISO/IEC 17021-1:2015'),
(433,'9.4.9 Menyebabkan analisis ketidaksesuaian ','SNI ISO/IEC 17021-1:2015'),
(434,'9.4.10 Efektivitas koreksi dan tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(435,'9.5 Pengesahan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(436,'9.5.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(437,'9.5.2 Tindakan sebelum mengambil keputusan ','SNI ISO/IEC 17021-1:2015'),
(438,'9.5.3 Informasi untuk pemberian sertifikasi awal','SNI ISO/IEC 17021-1:2015'),
(439,'9.5.4 Informasi untuk pemberian sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(440,'9.6 Mempertahankan sertifikasi','SNI ISO/IEC 17021-1:2015'),
(441,'9.6.1 Umum','SNI ISO/IEC 17021-1:2015'),
(442,'9.6.2 Kegiatan pengawasan','SNI ISO/IEC 17021-1:2015'),
(443,'9.6.3 Sertifikasi ulang','SNI ISO/IEC 17021-1:2015'),
(444,'9.6.4 Audit khusus','SNI ISO/IEC 17021-1:2015'),
(445,'9.6.5 Menangguhkan, dengan menarik atau mengurangi ruang lingkup sertifikasi','SNI ISO/IEC 17021-1:2015'),
(446,'9.7 Banding','SNI ISO/IEC 17021-1:2015'),
(447,'9.8 Keluhan','SNI ISO/IEC 17021-1:2015'),
(448,'9.9 Catatan klien','SNI ISO/IEC 17021-1:2015'),
(449,'10 Opsi','SNI ISO/IEC 17021-1:2015'),
(450,'10.1 Persyaratan sistem manajemen untuk lembaga sertifikasi','SNI ISO/IEC 17021-1:2015'),
(451,'10.2 Opsi A: Persyaratan sistem manajemen ','SNI ISO/IEC 17021-1:2015'),
(452,'10.2.1 Umum ','SNI ISO/IEC 17021-1:2015'),
(453,'10.2.2 Sistem manual manajemen','SNI ISO/IEC 17021-1:2015'),
(454,'10.2.3 Pengendalian dokumen','SNI ISO/IEC 17021-1:2015'),
(455,'10.2.4 Pengendalian catatan','SNI ISO/IEC 17021-1:2015'),
(456,'10.2.5 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(457,'10.2.6 Audit internal','SNI ISO/IEC 17021-1:2015'),
(458,'10.2.7 Tindakan korektif','SNI ISO/IEC 17021-1:2015'),
(459,'10.3 Opsi B: Persyaratan sistem manajemen sesuai dengan ISO 9001','SNI ISO/IEC 17021-1:2015'),
(460,'10.3.1 Umum','SNI ISO/IEC 17021-1:2015'),
(461,'10.3.2 Lingkup','SNI ISO/IEC 17021-1:2015'),
(462,'10.3.3 Fokus pelanggan','SNI ISO/IEC 17021-1:2015'),
(463,'10.3.4 Tinjauan manajemen','SNI ISO/IEC 17021-1:2015'),
(464,'Lampiran A (normatif) Diperlukan pengetahuan dan keterampilan','SNI ISO/IEC 17021-1:2015'),
(465,'Lampiran B (informatif) Metode evaluasi yang memungkinkan','SNI ISO/IEC 17021-1:2015'),
(466,'Lampiran C (informatif) Contoh aliran proses untuk menentukan dan mempertahankan kompetensi','SNI ISO/IEC 17021-1:2015'),
(467,'Lampiran D (informatif) Perilaku pribadi yang diinginkan','SNI ISO/IEC 17021-1:2015'),
(468,'Lampiran E (informatif) Proses audit dan sertifikasi ','SNI ISO/IEC 17021-1:2015'),
(469,'5 Persyaratan kompetensi untuk auditor dan tim audit SMM','SNI ISO/IEC 17021-3:2017'),
(470,'5.1 Umum','SNI ISO/IEC 17021-3:2017'),
(471,'5.2 Konsep dasar dan kualitas prinsip manajemen','SNI ISO/IEC 17021-3:2017'),
(472,'5.3 Konteks organisasi','SNI ISO/IEC 17021-3:2017'),
(473,'5.4 Produk, layanan, proses, dan organisasi klien','SNI ISO/IEC 17021-3:2017'),
(474,'6 Persyaratan kompetensi untuk personel lain','SNI ISO/IEC 17021-3:2017'),
(475,'6.1 Umum','SNI ISO/IEC 17021-3:2017'),
(476,'6.2 Kompetensi personel yang meninjau laporan audit dan membuat keputusan sertifikasi','SNI ISO/IEC 17021-3:2017');

/*Table structure for table `lks` */

DROP TABLE IF EXISTS `lks`;

CREATE TABLE `lks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(20) DEFAULT NULL,
  `nolks` int(10) DEFAULT NULL,
  `acuan` longtext,
  `deskripsi` longtext,
  `iec_2012` varchar(220) DEFAULT NULL,
  `iec_2015` varchar(220) DEFAULT NULL,
  `iec_2017` varchar(220) DEFAULT NULL,
  `smm` longtext,
  `status` varchar(30) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `nama_penulis` varchar(120) DEFAULT NULL,
  `nama_pengirim` varchar(120) DEFAULT NULL,
  `tgl_terkirim` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lks` (`id_pertanyaan`),
  CONSTRAINT `FK_lks` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `lks` */

insert  into `lks`(`id`,`id_pertanyaan`,`nolks`,`acuan`,`deskripsi`,`iec_2012`,`iec_2015`,`iec_2017`,`smm`,`status`,`lokasi`,`nama_penulis`,`nama_pengirim`,`tgl_terkirim`,`created_at`,`updated_at`) values 
(8,11,1,'4.4 Kondisi non-dikriminasi','pelanggan LSpro yang masih aktif telah terupdate, adapun data pembekuan juga telah terupdate yangdapat dikatakan menu utama / atas-pelanggan pelanggan jasa sertifikasi produk dan jasa  adapun data pembekuan juga telah terupdate yangdapat dikatakan menu utama / atas-pelanggan pelanggan jasa sertifikasi','7.1 Umum','5.1.3 Tanggung jawab untuk keputusan sertifikasi','5.2 Konsep dasar dan kualitas prinsip manajemen','ISO/IEC 17021-3:2017 4.4 Kondisi non-dikriminasi','Ter-Verifikasi','Sub Bag Tata Usaha','joko','Hendro Ferdiyanto','2020-11-01 21:26:12','2020-11-01 21:16:42','2020-11-02 18:34:36'),
(9,13,3,'4.3 Tanggung gugat dan keuangan','data pembekuan dan pencabutan juga telah dipublikasikan pada website dengan keadaan data yang telah tervalidasi pembekuan dan pencabutan juga telah dipublikasikan pada website dengan keadaan data pembekuan dan pencabutan juga telah dipublikasikan pada website dengan keadaan data','7.1 Umum','6 Persyaratan struktural','5 Persyaratan kompetensi untuk auditor dan tim audit SMM','4.3 Tanggung gugat dan keuangan','Telah Ditindak','Sub Bag Tata Usaha','hendro','Joko Winarno','2020-11-02 07:55:04','2020-11-01 21:24:04','2020-11-02 10:00:20'),
(10,14,3,'SNI ISO/IEC 17065:2012','Penghentian, pengurangan, pembekuan, atau pencabutan sertifikasi,\r\nPersyaratan sistem manajemen, dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI, sertifikat serta informasi sertifikat berlaku','6.2 Sumber daya untuk evaluasi','5.1 Masalah hukum dan kontrak','5 Persyaratan kompetensi untuk auditor dan tim audit SMM',NULL,'Ter-Verifikasi','Sub Bag Tata Usaha','hendro','Hendro Ferdiyanto','2020-11-01 21:40:17','2020-11-01 21:25:48','2020-11-02 10:59:50'),
(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,17,4,'zxvzwgwg dfgdgd new','Accusamus eius dignissimos molestias aliquam autem, odio, quidem magnam dolorum asperiores aut, tempora rem voluptate eum ipsam explicabo voluptatibus ab voluptas nihil! Eos officiis maxime, deleniti, expedita dignissimos fuga. Deleniti consectetur, expedita perspiciatis optio possimus, ipsa esse enim, new','4.3 Tanggung gugat dan keuangan','4.3 Kompetensi','6.1 Umum','zczczxv  new','Telah Ditindak','Sub Bag Tata Usaha','joko','Joko Winarno','2020-11-07 19:21:55','2020-11-07 18:05:33','2020-11-07 19:36:38'),
(13,12,NULL,'dfsdfsdfsdf','dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI, sertifikat serta informasi sertifikat berlaku sampai 4 tahun untuk pelanggan dengan sertifikat terbit dari tahun 2016','5.2 Mekanisme untuk menjaga ketidakberpihakan','4.3 Kompetensi','5.4 Produk, layanan, proses, dan organisasi klien','cxvxcvxcv',NULL,'Sub Bag Tata Usaha','joko',NULL,NULL,'2020-11-07 20:59:06','2020-11-07 20:59:32'),
(14,15,NULL,'sdcsdcs','dicta magni quaerat voluptatem, doloremque? numquam dolores iusto et consequuntur Molestias corporis rerum, minus deleniti debitis, doloribus,  enim numquam dolores iusto et consequuntur beatae neque autem qui nihil inventore voluptas.','4.1 Masalah hukum dan kontrak','6.1 Struktur organisasi dan manajemen puncak',NULL,'sdvsdvsdv',NULL,'Sub Bag Tata Usaha','joko',NULL,NULL,'2020-11-07 21:00:02','2020-11-07 21:00:02');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) DEFAULT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(60) DEFAULT NULL,
  `sie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id`,`nama`,`nip`,`jabatan`,`sie`) values 
(18,'Yossy Okta Angga Ryananta','090022242',NULL,'Seksi Teknologi Industri'),
(19,'Ika Prawesty Wulandari','091099637',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(20,'Muhammad Nur Akhsan','919960626',NULL,'Seksi Pengembangan jasa Teknis'),
(21,'Nurul Mahmida Ariani','090021330',NULL,'Seksi Program Dan Pengembangan Kompetensi'),
(22,'Rachmad Prayogo','119841222',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(23,'Harini Rizki Putri Rahardjo','919971002',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(24,'M. Angsori Baehaki','919881119',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(25,'Masrukin','090011141',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(26,'Joko Winarno','090023101',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(27,'Abdul Hamid Fahmi','919990709',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(28,'Dewi Retno Anggraeni','090022041',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(29,'Anissa','092001175',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(30,'Agung Yanuar Wirapraja','119880122',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(31,'Hesty Eka Mayasari','119920323',NULL,'Seksi Teknologi Industri'),
(32,'Handaru Bowo Cahyono','090022004',NULL,'Seksi Teknologi Industri'),
(33,'Hendro Ferdiyanto','119891002',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(34,'Desilya Nindy Kunari','919931204',NULL,'Seksi Pengembangan jasa Teknis'),
(35,'Bayu Wicaksono','091099295',NULL,'Sub Bag Tata Usaha'),
(36,'Agus Prasetiyo','090023134',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(37,'Suwati','090010943',NULL,'Sub Bag Tata Usaha'),
(38,'Lukman Hanafi','091099638',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(39,'Gunawan Sukaca','090022689',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(40,'Ramdhan Reza','919940221',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(41,'Putri Mirawati','919970505',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(42,'Hadi Pramono','092001333',NULL,'Sub Bag Tata Usaha'),
(43,'Indra Wahyu Diantoro','090022734',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(44,'Nurul Samsu Bahari','119920325',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(45,'Dwi Heri Santoso','092001186',NULL,'Seksi Teknologi Industri'),
(46,'Alifah Jessika Andharini','9199920514',NULL,'Sub Bag Tata Usaha'),
(47,'Rangga Nizar','9199908809',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(48,'Agus Riawan','919900802',NULL,'Sub Bag Tata Usaha'),
(49,'Riza Anggriani','919950226',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(50,'Hadid Tunas Bangsawan','091099636',NULL,'Seksi Teknologi Industri'),
(51,'Muhammad Azhar Noer Arifin','919930120',NULL,'Seksi Pengembangan jasa Teknis'),
(52,'Mana Hilul Irfan','119890510',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(53,'Leny Normayanti','919880701',NULL,'Sub Bag Tata Usaha'),
(54,'Nina Kusumiartono','919910824',NULL,'Sub Bag Tata Usaha'),
(55,'Purnomo Yogi Dewantara','091099926',NULL,'Seksi Pengembangan jasa Teknis'),
(56,'Sri Rohmawanto','091099922',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(57,'Zaenal Panutup Aju','091099303',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(58,'Anugrah Noviana Dwiningtyas','091099921',NULL,'Sub Bag Tata Usaha'),
(59,'Istyo Fajar Rianto','090021141',NULL,'Sub Bag Tata Usaha'),
(60,'Virsilina Astuti','919820904',NULL,'Seksi Pengembangan jasa Teknis'),
(62,'Farida Indry Rachmawati','091099749',NULL,'Seksi Program Dan Pengembangan Kompetensi'),
(63,'Ahmad Angger Kusuma','919960522',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(64,'Fenty Ayu Nurhaini','119910924',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(65,'M. Marhaendra Alim','090021844',NULL,'Seksi Teknologi Industri'),
(66,'Aan Anto Suhartono','090022680',NULL,'Seksi Teknologi Industri'),
(67,'Andy Dwi Pramono','092001153',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(68,'Aneke Rintiasti','091099301',NULL,'Seksi Teknologi Industri'),
(69,'Ardhaningtyas Riza Utami','090022349',NULL,'Seksi Teknologi Industri'),
(70,'Arif Indro Sultoni','090021841',NULL,'Seksi Teknologi Industri'),
(71,'Catur Wulandari','090022520',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(72,'Deny Suryana','090022352',NULL,'Seksi Teknologi Industri'),
(73,'Dyah Anggraini','119856222',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(74,'Ekasari Nur Khanifah','090022348',NULL,'Sub Bag Tata Usaha'),
(75,'Fany Aditama','090021842',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(76,'Fatimah','090020592',NULL,'Seksi Pengembangan jasa Teknis'),
(77,'Hananto Prabowo Hardi Putra','119870513',NULL,'Seksi Pengembangan jasa Teknis'),
(78,'Hari Darmawan','119720402',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(79,'Kitrisia Wahyu Dianti','090022687',NULL,'Sub Bag Tata Usaha'),
(80,'Kurnia Rahmayati Rifai','090022112',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(81,'Liayati Mahmudah','091099564',NULL,'Seksi Teknologi Industri'),
(82,'Lutfi Amanati','090022113',NULL,'Seksi Teknologi Industri'),
(83,'Masbagus Arian Sumamburat','091099639',NULL,'Sub Bag Tata Usaha'),
(84,'Muchammad Firdaus Nuzulan','091099134',NULL,'Seksi Pengembangan jasa Teknis'),
(85,'Musthofa Sunaryo','090023100',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(86,'Mya Sukmawati','090022353',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(87,'Nanik Sri Hartati','090018128',NULL,'Sub Bag Tata Usaha'),
(88,'Natanael Yolanda','119911001',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(89,'Nining Dyah Winantji','090021140',NULL,'Sub Bag Tata Usaha'),
(90,'Novany Imaniar','091099704',NULL,'Sub Bag Tata Usaha'),
(91,'Nurzaitun Purwasih','119870616',NULL,'Seksi Pengembangan jasa Teknis'),
(92,'Pangestu Widodo','090022795',NULL,'Sub Bag Tata Usaha'),
(93,'Raflim Fauzi','119880619',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(94,'Rahayati Dahniar','140237776',NULL,'Sub Bag Tata Usaha'),
(95,'Rieke Yuliastuti','090023146',NULL,'Seksi Teknologi Industri'),
(96,'Rurry Handayani','091099302',NULL,'Sub Bag Tata Usaha'),
(97,'Sigit Purwanto','092001264',NULL,'Sub Bag Tata Usaha'),
(98,'Sukmawati','090022400',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(99,'Tera Prasetyaning Yofa','091099923',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(100,'Yohanes Wimba Agung Prasetya','090022733',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(101,'Yurniar Supanggi Rica','091099925',NULL,'Seksi Standarisasi Dan Sertifikasi'),
(103,'wasis purnomo (test)','3242342','Kepala Seksi','Seksi Standarisasi Dan Sertifikasi');

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pengumuman` longtext,
  `penulis` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id`,`pengumuman`,`penulis`,`status`,`created_at`,`updated_at`) values 
(1,'hello haiii',NULL,NULL,'2020-10-31 19:32:08','2020-10-31 19:32:08');

/*Table structure for table `periode` */

DROP TABLE IF EXISTS `periode`;

CREATE TABLE `periode` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tahun_audit` varchar(30) DEFAULT NULL,
  `status_audit` varchar(40) DEFAULT NULL,
  `status_data` varchar(40) DEFAULT NULL,
  `status_pelaksana` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `periode` */

insert  into `periode`(`id`,`tahun_audit`,`status_audit`,`status_data`,`status_pelaksana`,`created_at`,`updated_at`) values 
(7,'2021','selesai','diarsipkan',NULL,'2020-10-05 10:09:33','2020-10-11 20:28:49'),
(13,'2022','selesai','diarsipkan',NULL,'2020-10-11 20:49:24','2020-11-01 20:14:14'),
(14,'2023','aktif',NULL,NULL,'2020-11-01 20:17:33','2020-11-01 20:17:33');

/*Table structure for table `pertanyaan` */

DROP TABLE IF EXISTS `pertanyaan`;

CREATE TABLE `pertanyaan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pertanyaan` longtext,
  `kategori` varchar(20) DEFAULT NULL,
  `catatan` longtext,
  `status` varchar(20) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `penulis` varchar(120) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `pertanyaan` */

insert  into `pertanyaan`(`id`,`pertanyaan`,`kategori`,`catatan`,`status`,`lokasi`,`penulis`,`created_at`,`updated_at`) values 
(11,'klausul 7.8 lembaga sertifikasi harus memelihara informasi produk yang disertifikasi berisi sekurang-kurangnya adalah seperti pada poin sebelumnya','NOK','pelanggan LSpro yang masih aktif telah terupdate, adapun data pembekuan juga telah terupdate yangdapat dikatakan menu utama / atas-pelanggan pelanggan jasa sertifikasi produk dan jasa','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2020-11-01 21:00:21','2020-11-01 21:16:42'),
(12,'5.3 Pertanggungjawaban dan pembiayaan\r\n5.2 Mekanisme untuk menjaga ketidakberpihakan','NOK','dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI, sertifikat serta informasi sertifikat berlaku sampai 4 tahun untuk pelanggan dengan sertifikat terbit dari tahun 2016','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2020-11-01 21:04:36','2020-11-07 20:59:06'),
(13,'6.2 Sumber daya untuk evaluasi\r\n6.1 Personil lembaga sertifikasi','NOK','data pembekuan dan pencabutan juga telah dipublikasikan pada website dengan keadaan data yang telah tervalidasi','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2020-11-01 21:09:04','2020-11-01 21:24:04'),
(14,'7.10 Perubahan yang mempengaruhi sertifikasi','NOK','Penghentian, pengurangan, pembekuan, atau pencabutan sertifikasi,\r\nPersyaratan sistem manajemen, dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI, sertifikat serta informasi sertifikat berlaku','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2020-11-01 21:10:21','2020-11-01 21:25:48'),
(15,'consectetur adipisicing elit. Voluptates nostrum, excepturi, ipsa expedita suscipit ad harum voluptatum alias odio mollitia, nulla veritatis error.nulla veritatis error.','NOK','dicta magni quaerat voluptatem, doloremque? numquam dolores iusto et consequuntur Molestias corporis rerum, minus deleniti debitis, doloribus,  enim numquam dolores iusto et consequuntur beatae neque autem qui nihil inventore voluptas.','LKS Telah Dibuat','Sub Bag Tata Usaha','hendro','2020-11-01 21:12:35','2020-11-07 21:00:02'),
(16,'voluptatem, doloremque? numquam dolores iusto et consequuntur Molestias corporis rerum, minus deleniti debitis, doloribus, enim numquam dolores iusto et','OK','? numquam untur Molestias corporis rerum, minus deleniti debitisdolores iusto et consequ, doloribusdolores iusto et consequ enim numquam dolores iusto etvoluptatem, doloremque',NULL,'Sub Bag Tata Usaha','joko','2020-11-01 21:13:18','2020-11-01 21:13:18'),
(17,'4.6 Ketersediaan informasi publik\r\n4.4 Kondisi non-dikriminasi','NOK','Accusamus eius dignissimos molestias aliquam autem, odio, quidem magnam dolorum asperiores aut, tempora rem voluptate eum ipsam explicabo voluptatibus ab voluptas nihil! Eos officiis maxime, deleniti, expedita dignissimos fuga. Deleniti consectetur, expedita perspiciatis optio possimus, ipsa esse enim,','LKS Telah Dibuat','Sub Bag Tata Usaha','joko','2020-11-01 21:14:42','2020-11-07 18:05:33'),
(18,'sertifikasi harus sertifikasi harus memelihara informasi produk yang disertifikasi berisi sekurang-kurangnya adalah seperti pada poin sebelumnya memelihara informasi produk yang disertifikasi berisi sekurang-kurangnya adalah seperti pada poin sebelumnya','OK','memelihara informasi produk yang disertifikasi berisi sekurang-kurangnya adalah seperti pada poin sebelumnya',NULL,'Sub Bag Tata Usaha','hendro','2020-11-01 21:20:59','2020-11-01 21:20:59');

/*Table structure for table `tindakan` */

DROP TABLE IF EXISTS `tindakan`;

CREATE TABLE `tindakan` (
  `id_tindakan` int(10) NOT NULL AUTO_INCREMENT,
  `id_lks` int(10) DEFAULT NULL,
  `akar` longtext,
  `dilakukan` longtext,
  `pencegahan` longtext,
  `bukti` varchar(30) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `path` varchar(250) DEFAULT NULL,
  `status_tindakan` varchar(50) DEFAULT NULL,
  `lokasi` varchar(120) DEFAULT NULL,
  `created_at_lks` datetime DEFAULT NULL,
  `pengirim_tindakan` varchar(120) DEFAULT NULL,
  `catatan_verifikasi` longtext,
  `waktu_kirim` datetime DEFAULT NULL,
  `nama_verifikator` varchar(120) DEFAULT NULL,
  `nolks` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tindakan`),
  KEY `FK_tindakan` (`id_lks`),
  CONSTRAINT `FK_tindakan` FOREIGN KEY (`id_lks`) REFERENCES `lks` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tindakan` */

insert  into `tindakan`(`id_tindakan`,`id_lks`,`akar`,`dilakukan`,`pencegahan`,`bukti`,`title`,`path`,`status_tindakan`,`lokasi`,`created_at_lks`,`pengirim_tindakan`,`catatan_verifikasi`,`waktu_kirim`,`nama_verifikator`,`nolks`,`created_at`,`updated_at`) values 
(1,8,'pernyataan kerahasiaan dan bebas konflik kepentingan sebagaimana yang  tertulis di FM -6.2.06  tidak diimplementasikan dengan baik  oke!','diimplementasikan pernyataan kerahasiaan dan bebas konflik kepentingan sebagaimana yang tertulis di FM -6.2.06  pada personil yang bersangkutan','mengadakan sosialisasi kepada personil mengenai  klausul yang  tertulis di FM -6.2.06',NULL,'dokumen bukti (9979-19861-1-SM).pdf','public/storage/MB4i5c3pess8oi0jJ2GI3dpP5cl4RR4GVNLjIB07.pdf','Ter-Verifikasi','Sub Bag Tata Usaha','2020-11-01 21:26:12','Nina Kusumiartono','sdfsdfsdf','2020-11-02 10:25:58','Joko Winarno',1,'2020-11-02 09:53:32','2020-11-02 18:34:36'),
(2,9,'ketiadaan data untuk mengisi kebutuhan konten pada website. keadaan data pembekuan dan pencabutan juga','menyediakan data untuk mengisi kebutuhan konten pada website. keadaan data pembekuan dan pencabutan juga akan ditangani','menyediakan data untuk mengisi kebutuhan konten pada website. keadaan data pembekuan dan pencabutan',NULL,'REKAPITULASI KEGIATAN -.docx','public/storage/NUIGdihm4aUcMDx3DuK0Uo6eApKXJj0m1FUSKbN5.docx','dikembalikan','Sub Bag Tata Usaha','2020-11-02 07:55:04','Nina Kusumiartono','coba untuk diamatai lagi sesuaikan dengan poin permasalahan yang telah disebutkan','2020-11-02 10:00:50',NULL,3,'2020-11-02 10:00:20','2020-11-02 10:35:33'),
(3,10,'Persyaratan sistem manajemen, dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI,','Persyaratan sistem manajemen, dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI,','Persyaratan sistem manajemen, dengan data pelanggan berupa informasi = nama perusahaan, komoditi, merk, SNI,',NULL,'20536-54247-1-SP.docx','public/storage/xDobnpXCx52ENDNtxFMeWyxOZWaxtPihOpbVUiEr.docx','Ter-Verifikasi','Sub Bag Tata Usaha','2020-11-01 21:40:17','Nina Kusumiartono',NULL,'2020-11-02 10:02:21','Joko Winarno',3,'2020-11-02 10:01:50','2020-11-02 12:00:00'),
(4,12,'sadasdasdasda asdasvasaadas sdfsf adfasdfs sdfgsd','dfgsdfg dfgds dsfgdsf dfgsa sDFA ASFSA','cvbbcvbcvbcvbcvb',NULL,'221-Article Text-520-2-10-20170518.pdf','public/storage/LxjGb7KeJ8dEh3sA0NQJQM34xjg93b6DZo0kzDhq.pdf','Terkirim','Sub Bag Tata Usaha','2020-11-07 19:21:55','Nina Kusumiartono','sdfsdfsv sfsd sdfsdf sdfs','2020-11-07 19:38:37',NULL,4,'2020-11-07 19:36:38','2020-11-07 19:43:27');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akses` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_auditee` int(10) DEFAULT NULL,
  `id_auditor` int(10) DEFAULT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users3` (`id_auditor`),
  KEY `FK_users4` (`id_auditee`),
  CONSTRAINT `FK_users3` FOREIGN KEY (`id_auditor`) REFERENCES `auditor` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_users4` FOREIGN KEY (`id_auditee`) REFERENCES `auditee` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
