/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.20 : Database - klp18_itesega
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`klp18_itesega` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `klp18_itesega`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(30) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  `sie` enum('sekre','lomba','ketua') NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`id_admin`,`nama_admin`,`username_admin`,`password_admin`,`sie`,`last_login`) values (1,'I Made Sartika','sartika','sartika','sekre','2017-05-16 04:18:11'),(2,'Nurul','nurul','nurul','sekre','0000-00-00 00:00:00');

UNLOCK TABLES;

/*Table structure for table `det_match` */

DROP TABLE IF EXISTS `det_match`;

CREATE TABLE `det_match` (
  `id_det_match` int(12) NOT NULL,
  `id_match` int(12) NOT NULL,
  `radiant` int(12) NOT NULL,
  `dire` int(12) NOT NULL,
  PRIMARY KEY (`id_det_match`),
  KEY `id_match` (`id_match`),
  KEY `radiyant` (`radiant`),
  KEY `dire` (`dire`),
  CONSTRAINT `det_match_ibfk_1` FOREIGN KEY (`id_match`) REFERENCES `match` (`id_match`),
  CONSTRAINT `det_match_ibfk_2` FOREIGN KEY (`radiant`) REFERENCES `team` (`id_team`),
  CONSTRAINT `det_match_ibfk_3` FOREIGN KEY (`dire`) REFERENCES `team` (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `det_match` */

LOCK TABLES `det_match` WRITE;

UNLOCK TABLES;

/*Table structure for table `log_verifikasi` */

DROP TABLE IF EXISTS `log_verifikasi`;

CREATE TABLE `log_verifikasi` (
  `id_verifikasi` int(12) NOT NULL AUTO_INCREMENT,
  `id_req` int(12) NOT NULL,
  `tgl_verifikasi` datetime NOT NULL,
  `verifikasi_by` int(12) NOT NULL,
  PRIMARY KEY (`id_verifikasi`),
  KEY `verifikasi_by` (`verifikasi_by`),
  KEY `id_req` (`id_req`),
  CONSTRAINT `log_verifikasi_ibfk_3` FOREIGN KEY (`verifikasi_by`) REFERENCES `admin` (`id_admin`),
  CONSTRAINT `log_verifikasi_ibfk_4` FOREIGN KEY (`id_req`) REFERENCES `permintaan_verifikasi` (`id_permintaan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `log_verifikasi` */

LOCK TABLES `log_verifikasi` WRITE;

insert  into `log_verifikasi`(`id_verifikasi`,`id_req`,`tgl_verifikasi`,`verifikasi_by`) values (4,3,'2017-05-11 00:30:52',1),(5,4,'2017-05-11 00:37:33',2),(6,5,'2017-05-11 00:39:18',2),(7,6,'2017-05-13 10:11:04',1),(8,7,'2017-05-14 15:15:36',1);

UNLOCK TABLES;

/*Table structure for table `match` */

DROP TABLE IF EXISTS `match`;

CREATE TABLE `match` (
  `id_match` int(12) NOT NULL AUTO_INCREMENT,
  `id_team1` int(12) NOT NULL,
  `id_team2` int(12) NOT NULL,
  `id_round` int(12) NOT NULL,
  `score` varchar(40) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_match` date NOT NULL,
  PRIMARY KEY (`id_match`),
  KEY `id_team` (`id_team1`),
  KEY `id_team2` (`id_team2`),
  KEY `id_round` (`id_round`),
  CONSTRAINT `match_ibfk_1` FOREIGN KEY (`id_team1`) REFERENCES `team` (`id_team`),
  CONSTRAINT `match_ibfk_3` FOREIGN KEY (`id_team2`) REFERENCES `team` (`id_team`),
  CONSTRAINT `match_ibfk_4` FOREIGN KEY (`id_round`) REFERENCES `round` (`id_round`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=latin1;

/*Data for the table `match` */

LOCK TABLES `match` WRITE;

insert  into `match`(`id_match`,`id_team1`,`id_team2`,`id_round`,`score`,`tempat`,`tgl_match`) values (225,69,80,1,'','Go-Cool','2017-05-26'),(226,81,83,1,'','Go-Cool','2017-05-26'),(227,64,82,1,'','Go-Cool','2017-05-26'),(228,77,74,1,'','Go-Cool','2017-05-26'),(229,78,66,1,'','Go-Cool','2017-05-26'),(230,68,65,1,'','Go-Cool','2017-05-26'),(231,70,71,1,'','Go-Cool','2017-05-26'),(232,72,79,1,'','Go-Cool','2017-05-26'),(233,75,76,1,'','Go-Cool','2017-05-26'),(234,73,67,1,'','Go-Cool','2017-05-26');

UNLOCK TABLES;

/*Table structure for table `permintaan_verifikasi` */

DROP TABLE IF EXISTS `permintaan_verifikasi`;

CREATE TABLE `permintaan_verifikasi` (
  `id_permintaan` int(12) NOT NULL AUTO_INCREMENT,
  `id_team` int(12) NOT NULL,
  `file` varchar(200) NOT NULL,
  `req_at` datetime NOT NULL,
  `status` enum('sudah','diproses') NOT NULL,
  PRIMARY KEY (`id_permintaan`),
  KEY `id_team` (`id_team`),
  CONSTRAINT `permintaan_verifikasi_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `permintaan_verifikasi` */

LOCK TABLES `permintaan_verifikasi` WRITE;

insert  into `permintaan_verifikasi`(`id_permintaan`,`id_team`,`file`,`req_at`,`status`) values (3,64,'sugeng_war.jpg','2017-05-09 01:40:22','sudah'),(4,69,'bidiman_team.jpg','2017-05-09 11:34:58','sudah'),(5,65,'anjing_war.jpg','2017-05-11 00:38:44','sudah'),(6,81,'jogja_DOTA_fondation.PNG','2017-05-13 10:07:38','sudah'),(7,82,'faded.jpg','2017-05-14 15:13:05','sudah');

UNLOCK TABLES;

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `id_peserta` int(12) NOT NULL AUTO_INCREMENT,
  `id_team` int(12) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `id_card` varchar(200) NOT NULL,
  `status` enum('ketua','anggota','cadangan') NOT NULL,
  PRIMARY KEY (`id_peserta`),
  KEY `id_team` (`id_team`),
  CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

/*Data for the table `peserta` */

LOCK TABLES `peserta` WRITE;

insert  into `peserta`(`id_peserta`,`id_team`,`nama_peserta`,`tgl_lahir`,`email`,`no_hp`,`id_card`,`status`) values (16,65,'ketua','2222-12-22','saretik65@gmail.com','0899988887888','ketua.jpg','anggota'),(17,71,'erer','1998-12-23','saretik65@gmail.com','445553','erer.jpg','anggota'),(18,71,'cadangan 1','2222-12-31','sareti65@gmail.com','08998899','cadangan_1.jpg','cadangan'),(20,72,'sartika 2','1998-12-03','sasa@mail.com','089998877887','sartika_2.jpg','anggota'),(21,72,'sasasasa','1998-12-03','sareti65@gmail.com','089998876','sasasasa.jpg','ketua'),(22,72,'sartika imade','1996-12-30','saretik65@gmail.com','0998888877','sartika_imade.jpg','cadangan'),(23,72,'anggota 2','1998-12-03','sareti65@gmail.com','0899889988','anggota_2.jpg','anggota'),(24,72,'anggota 2','1998-12-03','sareti65@gmail.com','0899889988','anggota_2.jpg','anggota'),(25,72,'anggota 2','1998-12-03','sareti65@gmail.com','0899889988','anggota_2.jpg','anggota'),(26,72,'anggota 2','1998-12-03','sareti65@gmail.com','0899889988','anggota_2.jpg','anggota'),(27,72,'sartika 2','1998-12-03','sareti65@gmail.com','09988878777','sartika_2.jpg','ketua'),(28,75,'dada','1998-12-23','sareti65@gmail.com','08998888877','dada.jpg','anggota'),(29,75,'budiman','1998-12-23','sasa@mail.com','0899880998','budiman.jpg','anggota'),(30,75,'ketua hexa','1998-12-03','sasa@mail.com','08999888888','ketua_hexa.jpg','ketua'),(31,75,'ketua hexa','1998-12-03','sasa@mail.com','08999888888','ketua_hexa.jpg','ketua'),(32,75,'made sartika`','1889-12-23','sasa@mail.com','089988887877','made_sartika`.jpg','cadangan'),(33,76,'ketua budiman','1998-12-03','saretik65@gmail.com','0899988888','ketua_budiman.jpg','anggota'),(34,77,'ketua budiman 4','1998-12-23','sasa@mail.com','089887799887','ketua_budiman_4.jpg','ketua'),(35,78,'ketua 1','1998-12-03','sareti65@gmail.com','08987765655','ketua_1.jpg','ketua'),(36,78,'angggota 1','1998-12-03','saretik65@gmail.com','08987765655','angggota_1.jpg','anggota'),(37,78,'angggota 1','1998-12-03','saretik65@gmail.com','08987765655','angggota_1.jpg','anggota'),(38,78,'angggota 1','1998-12-03','saretik65@gmail.com','08987765655','angggota_1.jpg','anggota'),(48,79,'Gusti Putu Ngurah tenaya','1997-12-03','Tenaya@gmail.com','098887766776','Gusti_Putu_Ngurah_tenaya.jpg','ketua'),(51,79,'Putu Ngurah Adidnaya','1997-12-04','ngurah@mail.com','08980988776','Putu_Ngurah_Adidnaya.jpg','cadangan'),(53,79,'wijaya adi candra','1998-12-05','wijaya@mail.com','08980988776','wijaya_adi_candra.jpg','anggota'),(54,79,'Nak Pang KWale milu','1998-01-04','sareti65@gmail.com','08987765655','Nak_Pang_KWale_milu.jpg','cadangan'),(55,80,'Nugroho Putro','1998-12-03','sasa@mail.com','08987765655','Nugroho_Putro.jpg','ketua'),(56,80,'Aryo Kusnandar DIputra','1998-12-03','sasa@mail.com','08980988776','Aryo_Kusnandar.jpg','anggota'),(57,80,'Hendra Kusno Dwijoyo','1997-09-05','Hendra@mail.com','0998800998','Hendra_Kusno_Dwijoyo.jpg','cadangan'),(58,80,'dedi mulyadi','1998-12-04','wresta@gmail.com','098887766776','dedi_mulyadi.jpg','anggota'),(60,81,'Arik JR','1998-12-03','arik@mail.com','08987765655','Arik_JR.PNG','ketua'),(61,81,'DW Made Sunia','1997-02-03','Sunia@mail.com','0088998877','DW_Made_Sunia.JPG','anggota'),(62,81,'Aryo Kusnandar','1998-12-07','aryo@mail.com','08987765655','Aryo_Kusnandar.png','anggota'),(63,81,'Budi Gunawan','1997-01-09','budiman@mail.com','08987765655','Budi_Gunawan.JPG','anggota'),(64,81,'Babay Sibabay','1998-08-12','babay12@mail.com','08987765655','Babay_Sibabay.PNG','anggota'),(66,81,'Mimi peri','1998-12-02','mimi@cocol.com','0898887788877','Mimi_peri.PNG','cadangan'),(67,82,'diaaaaaaaaaaaaaaah','2017-05-06','diah@hhhh.com','08745672867767','diaaaaaaaaaaaaaaah.png','ketua'),(68,82,'nengah','2017-05-13','ngurah@mail.com','09866574567','nengah.png','anggota'),(69,82,'asas','2017-05-13','arta.anjirr@gmail.co','98459840840540','asas.PNG','cadangan'),(70,83,'dodi','1998-12-03','sasa@mail.com','089988777','dodi.JPG','ketua'),(71,83,'turah','1998-12-31','turah@mail.com','08987765655','turah.png','anggota'),(72,83,'turah 3','1998-02-03','turah@mail.com','08987765655','turah_3.png','anggota'),(73,83,'emoni','1998-12-05','emoni@mail.com','08987765655','emoni.PNG','anggota'),(75,83,'nengah','1875-12-04','ngurah@mail.com','08987765655','nengah.png','anggota'),(76,83,'wresta putra','1998-12-04','wresta@gmail.com','08987765655','wresta_putra.JPG','cadangan'),(77,83,'wijaya adi candra 2','1998-12-08','wijaya@mail.com','08987765655','wijaya_adi_candra_2.PNG','cadangan');

UNLOCK TABLES;

/*Table structure for table `round` */

DROP TABLE IF EXISTS `round`;

CREATE TABLE `round` (
  `id_round` int(12) NOT NULL AUTO_INCREMENT,
  `round` varchar(20) NOT NULL,
  PRIMARY KEY (`id_round`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `round` */

LOCK TABLES `round` WRITE;

insert  into `round`(`id_round`,`round`) values (1,'Penyisihan');

UNLOCK TABLES;

/*Table structure for table `team` */

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `id_team` int(12) NOT NULL AUTO_INCREMENT,
  `nama_team` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `verifikasi` enum('Y','N') NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

/*Data for the table `team` */

LOCK TABLES `team` WRITE;

insert  into `team`(`id_team`,`nama_team`,`logo`,`email`,`password`,`verifikasi`,`last_login`) values (64,'sugeng war','sugeng_war_logo.jpg','sugeng@mail.com','sarinem','N','0000-00-00 00:00:00'),(65,'anjing war','anjing_war_logo.jpg','anjing@mail.com','anjinglo','N','0000-00-00 00:00:00'),(66,'Domino war','test_1__logo.jpg','test1','test','N','0000-00-00 00:00:00'),(67,'A7X','test_1__logo.jpg','test2','test','N','0000-00-00 00:00:00'),(68,'CHIBI','r_logo.jpg','r','r','N','0000-00-00 00:00:00'),(69,'mother of dakrnes','r_logo.jpg','e','r','N','0000-00-00 00:00:00'),(70,'Big Bro','r_logo.jpg','h','r','N','0000-00-00 00:00:00'),(71,'HEXAGON ','dd_logo.jpg','sasc','sasa','N','0000-00-00 00:00:00'),(72,'GOEM','dd_logo.jpg','sasc4','sasa','N','0000-00-00 00:00:00'),(73,'Deep Soul','Hex4Gon_logo.jpg','','sretik','N','0000-00-00 00:00:00'),(74,'Revange','hexagon_war_logo.jpg','hexa@mail.com','madeprind','N','0000-00-00 00:00:00'),(75,'budiman','budiman_logo.jpg','test4','tets','N','0000-00-00 00:00:00'),(76,'budiman 1','budiman_3_logo.jpg','testg','tets','N','0000-00-00 00:00:00'),(77,'budiman 2','budiman_4_logo.jpg','test 7','tets','N','0000-00-00 00:00:00'),(78,'Hex4Gon','Hex4Gon_logo.jpg','test 8','madeprind','N','0000-00-00 00:00:00'),(79,'Pangkwale team','Pangkwale_team_logo.jpg','pangkwale@mail.com','pangkwale','N','0000-00-00 00:00:00'),(80,'jogja DOTA fondation','jogja_DOTA_fondation_logo.jpg','Jogjadota@mail.com','jogja aja','N','0000-00-00 00:00:00'),(81,'AHY','jogja_DOTA_fondation_logo.png','Sekarepmu@mail.com','sekarep','N','0000-00-00 00:00:00'),(82,'faded','faded_logo.jpg','apalah@gmail.com','123456','N','2017-05-14 09:11:41'),(83,'Rahayu team','Rahayu_team_logo.png','rahayu@mail.com','rahayu','N','2017-05-14 17:26:36');

UNLOCK TABLES;

/* Trigger structure for table `log_verifikasi` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_status_req` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_status_req` AFTER INSERT ON `log_verifikasi` FOR EACH ROW BEGIN
	UPDATE permintaan_verifikasi SET `status` = 'sudah'
	WHERE id_permintaan = new.id_req;
    END */$$


DELIMITER ;

/* Procedure structure for procedure `select_match` */

/*!50003 DROP PROCEDURE IF EXISTS  `select_match` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `select_match`(IN nama_round VARCHAR(50))
BEGIN
	SELECT 	team.`nama_team` AS team_1, 
		tb_temp.nama_2 AS team_2,
		round.`round` AS `round`,
		tgl_match,
		score,
		tempat,
		id_match
		
	FROM 	 team,
		`match`,
		`round`,
		(SELECT id_team2, team.`nama_team` AS nama_2 FROM `match` JOIN team ON team.`id_team`=`match`.`id_team2`) tb_temp
		
	WHERE  `match`.`id_team1`=team.`id_team` AND
		tb_temp.id_team2=`match`.`id_team2` AND
		`round`.`id_round` = round.`id_round` AND
		`round`.`round`= nama_round;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
