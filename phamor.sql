/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.26 : Database - db_phamor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_phamor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_phamor`;

/*Table structure for table `coba` */

DROP TABLE IF EXISTS `coba`;

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `status_b` tinyint(1) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `coba` */

insert  into `coba`(`id`,`status_b`,`tgl`) values (1,0,'2016-10-27 06:11:57'),(2,0,'2016-10-23 17:12:07'),(3,0,'2016-10-29 17:12:11'),(4,0,'2016-10-20 16:19:52');

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_bengkel` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `image_location` varchar(100) DEFAULT NULL,
  `status_barang` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id_barang`),
  KEY `id_bengkel` (`id_bengkel`),
  CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_bengkel`) REFERENCES `tb_bengkel` (`id_bengkel`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`id_barang`,`id_bengkel`,`nama_barang`,`harga`,`stok`,`image_location`,`status_barang`) values (6,2,'alu',10000,23,'6.jpg','N'),(7,2,'kkk',1200,11,'7.jpg','N'),(8,2,'adsjkasd',23000,21,'8.jpg','N'),(9,3,'Aku Sayang Kamu',12000,10000,'9.jpg','N'),(10,2,'aku',21312,212312,'10.jpg','N'),(11,3,'wkwkwk',10000,19,'11.jpg','N'),(12,2,'kleng ci we',10000,12,'12.jpg','N'),(13,2,'kasdjs',100,123,'13.jpg','N'),(14,2,'aksjd',13289,91238,'14.jpg','N'),(15,3,'Kamu Sayang Dia',12,10,'15.jpg','N'),(16,4,'Ban Motor',120000,12,'16.jpg','N'),(17,4,'Ban Motor',120000,12,'17.jpg','Y'),(18,4,'Shock Terapy',200000,12,'18.jpg','Y'),(19,4,'Oli',32000,12,'19.jpg','Y'),(20,3,'Oli Top1',25000,20,'20.jpg','Y'),(21,3,'Handle Rem',30000,34,'21.jpg','Y'),(22,2,'Handle Ninja',100000,17,'22.jpg','Y'),(23,2,'Oli Bekas',1000,15,'23.jpg','Y'),(24,3,'Ban supra',132000,100,'24.png','Y'),(25,2,'Lemon',1234,12334,'1479689219.png','N'),(26,10,'huhu',1000,23,'1479709996.png','N'),(27,10,'qk``',10,1081,'1479710230.png','N'),(28,10,'qk``',10,1081,'1479710604duit.png','N'),(29,2,'Gear Set RCA',24000,1,'1479952552images.jpg','Y'),(30,2,'Bussi Super',100000,9,'1479952627BUSSI2.jpg','Y'),(31,4,'Bussi B Aja',1000,12,'1479952729busihighperformanceSPLITFIRE-Arseen.jpg','Y'),(32,2,'dskah',123,123,'148029669312.jpg','N'),(33,14,'Oli',10000,32,'1480563583Norwich-City-complain-referee.jpg','Y'),(34,17,'askjd',11010,123,'1480957815_DSC1790.jpg','Y');

/*Table structure for table `tb_bengkel` */

DROP TABLE IF EXISTS `tb_bengkel`;

CREATE TABLE `tb_bengkel` (
  `id_bengkel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bengkel` varchar(30) DEFAULT NULL,
  `alamat_bengkel` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `profile_picture` text,
  `lat` text,
  `lng` text,
  PRIMARY KEY (`id_bengkel`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bengkel` */

insert  into `tb_bengkel`(`id_bengkel`,`nama_bengkel`,`alamat_bengkel`,`no_telepon`,`email`,`password`,`profile_picture`,`lat`,`lng`) values (2,'Urip Motor','Karangasem','081338633816','uripyogantara@gmail.com','12345678','1480294464Profile_Picture_ITCC20162.jpg','-8.793947691828832','115.17311105402382'),(3,'Wahyu Motor','Jimbaran','085395038511','wahyu@gmail.com','12345678','1480294464Profile_Picture_ITCC20162.jpg','-8.793947691828832','115.17311105402382'),(4,'Wijaya Motor','Denpasar','081938138913','wijaya@gmail.com','12345678',NULL,'-8.793947691828832','115.17311105402382'),(10,'Mustika Motor','hehe','081','hehe@gmail.com','hehe',NULL,'-8.793947691828832','115.17311105402382'),(11,'Hehe Motor','Karangaseme','03631278491','uripbagus@gmail.com','hehe','14802944165097.jpg','-8.793947691828832','115.17311105402382'),(13,'wkkwk','wkwk','013','urwipyogantara@gmail.com','123','1480294464Profile_Picture_ITCC20162.jpg','-8.793947691828832','115.17311105402382'),(14,'Hehe Bengkel','jimbaran','081234294892348','wkwkwk@gmail.com','12345','1480563519Profile_Picture_ITCC20162.jpg','-8.793947691828832','115.17311105402382'),(15,'Bengkel Bengkelan','Jalan Aspal','08123452523','bengkelb@gmail.com','12345678','default.jpg','-8.793947691828832','115.17311105402382'),(16,'adksj','akjsd','ladjs','kajshd@jaldsk.com','1234','1480950135Profile_Picture_ITCC20162.jpg','-8.793947691828832','115.17311105402382'),(17,'TI Motor','jalan menuju surga','14048','ti@gmail.com','12345678','1480957755_DSC1790.jpg','-8.436911883134336','115.59178242357643');

/*Table structure for table `tb_det_pembelian` */

DROP TABLE IF EXISTS `tb_det_pembelian`;

CREATE TABLE `tb_det_pembelian` (
  `id_det_pembelian` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_pembelian` bigint(20) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `status` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_det_pembelian`),
  KEY `id_barang` (`id_barang`),
  KEY `id_pembelian` (`id_pembelian`),
  CONSTRAINT `tb_det_pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  CONSTRAINT `tb_det_pembelian_ibfk_2` FOREIGN KEY (`id_pembelian`) REFERENCES `tb_pembelian` (`id_pembelian`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

/*Data for the table `tb_det_pembelian` */

insert  into `tb_det_pembelian`(`id_det_pembelian`,`id_pembelian`,`id_barang`,`jumlah`,`status`) values (68,60,7,3,'Y'),(69,61,22,3,'Y'),(70,62,22,2,'Y'),(71,63,29,2,'Y'),(87,65,23,10,'N'),(88,65,22,5,'N'),(89,66,22,12,'N'),(90,66,23,18,'N'),(91,66,23,20,'N'),(92,66,22,20,'N'),(93,66,22,1,'N'),(94,66,23,1,'N'),(95,67,23,2,'N'),(96,67,23,3,'Y'),(97,68,22,1,'Y'),(98,69,23,2,'Y'),(99,70,23,-1,'N'),(100,70,22,0,'N'),(101,70,22,0,'N'),(102,70,22,2,'Y');

/*Table structure for table `tb_member` */

DROP TABLE IF EXISTS `tb_member`;

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `mobile_phone` varchar(15) DEFAULT NULL,
  `profile_picture` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

/*Data for the table `tb_member` */

insert  into `tb_member`(`id`,`first_name`,`last_name`,`email`,`password`,`gender`,`mobile_phone`,`profile_picture`) values (154,'adsjh','ksasdh','urip@gmail','daskjh','Male','082934023',NULL),(160,'fjdhk','dksfh','ksajh','kah','Male','293871',NULL),(161,'asdlk','sjsdaqkadkhs','ks','as','Female','187',NULL),(162,'adkh','akh','afkjh@a.com','si','Male','02349',NULL),(163,'Urip','Yogantara','uripyogantara@gmail.com','singinget123','Male','085739893931','1480563951Profile_Picture_ITCC2016-Recovered.jpg'),(164,'aasd','sd','aa@g.com','sdjk','Male','1',NULL),(165,'','','','','','',NULL),(166,'ksdjh','ksah','kjahd','123','Male','085738294810',NULL),(167,'Wahyu','Permadi','wahyupermadi@gmail.com','123','Male','0482309',NULL),(170,'Lintang','Anggitia','luhade@gmail.com2','12345678','Female','085739893931','1480265179Profile_Picture_ITCC2016.jpg'),(171,'Nana','Kumala','nanakumala@gmail.com','12345678','Female','081',NULL),(172,'Tuntun','Artawan','tun@a.com','12345678','Male','0482309',NULL),(173,'lasjdlk','lkjsl','lkjjsa','12345','Female','kshfka','1480918823Profile_Picture_ITCC20162.jpg'),(174,'skdzj','ksddj','kjsdhkas','1','Male','085739893931','1480919026Profile_Picture_ITCC20162.jpg');

/*Table structure for table `tb_pembelian` */

DROP TABLE IF EXISTS `tb_pembelian`;

CREATE TABLE `tb_pembelian` (
  `id_pembelian` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `id_bengkel` int(11) DEFAULT NULL,
  `tgl_pembelian` datetime DEFAULT NULL,
  `status` enum('Bayar','Belum Bayar','Batal','Verifikasi') DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pembelian` */

insert  into `tb_pembelian`(`id_pembelian`,`id_member`,`id_bengkel`,`tgl_pembelian`,`status`) values (59,163,2,'2016-12-01 11:42:05','Bayar'),(60,163,14,'2016-12-01 11:42:37','Bayar'),(61,163,2,'2016-12-02 23:44:29','Bayar'),(62,170,2,'2016-12-02 23:45:16','Bayar'),(63,170,2,'2016-12-02 23:49:06','Bayar'),(64,170,2,'2016-12-02 23:53:34','Batal'),(65,170,2,'2016-12-03 01:20:17','Batal'),(66,170,2,'2016-12-03 01:20:55','Batal'),(67,163,2,'2016-12-05 00:34:17','Bayar'),(68,163,2,'2016-12-05 00:37:36','Bayar'),(69,163,2,'2016-12-05 09:34:53','Verifikasi'),(70,163,2,'2016-12-06 02:56:04','Belum Bayar');

/* Trigger structure for table `tb_det_pembelian` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kurangstok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kurangstok` AFTER INSERT ON `tb_det_pembelian` FOR EACH ROW BEGIN
	update tb_barang set stok=stok-new.jumlah where id_barang= new.id_barang;
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_det_pembelian` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `updatestok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `updatestok` AFTER UPDATE ON `tb_det_pembelian` FOR EACH ROW BEGIN
	declare status_beli varchar(2);
	declare jumlah_lama int;
	declare jumlah_baru int;
	set status_beli = new.`status`;
	if status_beli='N' then
		update tb_barang set stok=stok+old.jumlah where id_barang=old.id_barang;
	else
		update tb_barang set stok=stok+old.jumlah-new.jumlah WHERE id_barang=old.id_barang;
	end if;
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_pembelian` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `batal` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `batal` AFTER UPDATE ON `tb_pembelian` FOR EACH ROW BEGIN
	if (new.status='Batal') then
		update tb_det_pembelian set status='N' where id_pembelian=old.id_pembelian and status='Y';
	end if;
    END */$$


DELIMITER ;

/*!50106 set global event_scheduler = 1*/;

/* Event structure for event `batal` */

/*!50106 DROP EVENT IF EXISTS `batal`*/;

DELIMITER $$

/*!50106 CREATE DEFINER=`root`@`localhost` EVENT `batal` ON SCHEDULE EVERY 1 SECOND STARTS '2016-10-28 17:17:58' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	    update coba set status_b=0 where status_b=1 and tgl < date_sub(now(),interval 24 hour) ;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `batal_beli` */

/*!50003 DROP PROCEDURE IF EXISTS  `batal_beli` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `batal_beli`(id_det int)
BEGIN
	update tb_det_pembelian set `status`='N' where id_det_pembelian=id_det;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `beli` */

/*!50003 DROP PROCEDURE IF EXISTS  `beli` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `beli`(id_m int,id_bg int, id_brg int, jml int)
BEGIN
	declare id_beli int;
	DECLARE id_beli_member INT;
	declare status_b varchar(30);
	declare olditem int;
	set id_beli=(SELECT MAX(id_pembelian) FROM tb_pembelian);
	SET id_beli_member=(SELECT MAX(id_pembelian) FROM tb_pembelian where id_member=id_m and id_bengkel=id_bg);
	set status_b = (select tb_pembelian.`status` from tb_pembelian where id_pembelian=id_beli_member);
	set olditem =(select count(*) from tb_det_pembelian where id_pembelian=id_beli_member and id_barang=id_brg and status='Y');
	if (status_b='Belum Bayar') then
		if olditem =0 then
			INSERT INTO tb_det_pembelian VALUES(NULL,id_beli_member,id_brg,jml,'Y');
		else
			update tb_det_pembelian set jumlah=jumlah+jml where id_barang=id_brg and id_pembelian=id_beli_member and status='Y';
		end if;
	else
		INSERT INTO tb_pembelian VALUEs(null,id_m,id_bg,NOW(),'Belum Bayar');
		insert into tb_det_pembelian values(null,id_beli+1,id_brg,jml,'Y');
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `detail_report_harian` */

/*!50003 DROP PROCEDURE IF EXISTS  `detail_report_harian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_report_harian`(id_bgkl int, tgl date)
BEGIN
	SELECT tb_barang.`nama_barang`,tb_barang.`harga`,sum(tb_det_pembelian.`jumlah`) as jumlah,tb_barang.`harga`*SUM(tb_det_pembelian.`jumlah`) AS sub_total
	FROM tb_det_pembelian 
	INNER JOIN tb_barang ON tb_det_pembelian.`id_barang`=tb_barang.`id_barang`
	INNER JOIN tb_pembelian ON tb_det_pembelian.`id_pembelian`=tb_pembelian.`id_pembelian`
	WHERE DATE(tb_pembelian.`tgl_pembelian`)=tgl AND tb_pembelian.`status`='Bayar' AND tb_det_pembelian.`status`='Y' AND tb_pembelian.`id_bengkel`=id_bgkl
	group by tb_barang.`id_barang`;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `report_harian` */

/*!50003 DROP PROCEDURE IF EXISTS  `report_harian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `report_harian`(id_bgkl int)
BEGIN
	SELECT DATE(tb_pembelian.`tgl_pembelian`) as tanggal, SUM(tb_barang.`harga`*tb_det_pembelian.`jumlah`) AS total
	FROM tb_det_pembelian
	INNER JOIN tb_barang ON tb_barang.`id_barang`=tb_det_pembelian.`id_barang`
	INNER JOIN tb_pembelian ON tb_det_pembelian.`id_pembelian`=tb_pembelian.`id_pembelian`
	WHERE tb_pembelian.`status`='Bayar' AND tb_det_pembelian.`status`='Y' AND tb_pembelian.`id_bengkel`=id_bgkl
	GROUP BY DATE(tb_pembelian.`tgl_pembelian`);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `transaksi_bengkel` */

/*!50003 DROP PROCEDURE IF EXISTS  `transaksi_bengkel` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `transaksi_bengkel`(id_bg int)
BEGIN
	SELECT tb_pembelian.`id_pembelian`,tb_member.`id`, tb_member.`first_name`, tb_member.`last_name`, tb_member.`mobile_phone`, SUM(tb_det_pembelian.`jumlah`*tb_barang.`harga`) AS total
	FROM tb_det_pembelian 
	
	INNER JOIN tb_barang ON tb_det_pembelian.`id_barang`=tb_barang.`id_barang`
	INNER JOIN tb_pembelian ON tb_pembelian.`id_pembelian`=tb_det_pembelian.`id_pembelian`
	INNER JOIN tb_member ON tb_member.`id`=tb_pembelian.`id_member`
	WHERE tb_barang.`id_bengkel`=id_bg AND tb_det_pembelian.`status`='Y' and tb_pembelian.`status`='Verifikasi'
	GROUP BY tb_pembelian.`id_pembelian`;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `transaksi_detail` */

/*!50003 DROP PROCEDURE IF EXISTS  `transaksi_detail` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `transaksi_detail`(id_beli int, id_bg int)
BEGIN
	SELECT tb_det_pembelian.`id_det_pembelian`, tb_barang.`nama_barang`,tb_barang.`harga`,tb_det_pembelian.`jumlah`,tb_barang.`harga`*tb_det_pembelian.`jumlah` AS sub_total
	FROM tb_det_pembelian 
	INNER JOIN tb_barang ON tb_det_pembelian.`id_barang`=tb_barang.`id_barang`
	INNER JOIN tb_pembelian ON tb_det_pembelian.`id_pembelian`=tb_pembelian.`id_pembelian`
	WHERE tb_pembelian.`id_pembelian`=id_beli and tb_det_pembelian.`status`='Y' and tb_barang.`id_bengkel`=id_bg;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `transaksi_member` */

/*!50003 DROP PROCEDURE IF EXISTS  `transaksi_member` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `transaksi_member`(in id_mem int)
BEGIN
	SELECT tb_det_pembelian.`id_det_pembelian`, tb_barang.`nama_barang`,tb_barang.`harga`,tb_det_pembelian.`jumlah`,tb_barang.`harga`*tb_det_pembelian.`jumlah` AS sub_total
	FROM tb_det_pembelian 
	INNER JOIN tb_barang ON tb_det_pembelian.`id_barang`=tb_barang.`id_barang`
	INNER JOIN tb_pembelian ON tb_det_pembelian.`id_pembelian`=tb_pembelian.`id_pembelian`
	WHERE tb_pembelian.`id_member`=id_mem AND tb_pembelian.`status`='Belum Bayar' AND tb_det_pembelian.`status`='Y'
	UNION
	SELECT null,NULL,NULL,NULL,SUM(tb_barang.`harga`*tb_det_pembelian.`jumlah`) as total
	FROM tb_det_pembelian 
	INNER JOIN tb_barang ON tb_det_pembelian.`id_barang`=tb_barang.`id_barang`
	INNER JOIN tb_pembelian ON tb_det_pembelian.`id_pembelian`=tb_pembelian.`id_pembelian`
	WHERE tb_pembelian.`id_member`=id_mem AND tb_pembelian.`status`='Belum Bayar' AND tb_det_pembelian.`status`='Y';
    END */$$
DELIMITER ;

/* Procedure structure for procedure `verifikasi_transaksi_member` */

/*!50003 DROP PROCEDURE IF EXISTS  `verifikasi_transaksi_member` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `verifikasi_transaksi_member`(id_mem int)
BEGIN
	update tb_pembelian set tb_pembelian.`status`='Verifikasi' where tb_pembelian.`id_member`=id_mem and tb_pembelian.`status`='Belum Bayar';
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
