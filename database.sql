/*
SQLyog Enterprise - MySQL GUI v6.06
Host - 5.5.16 : Database - kantor
*********************************************************************
Server version : 5.5.16
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `kantor`;

USE `kantor`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `kodepegawai` int(3) NOT NULL,
  `namapegawai` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kodepegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`kodepegawai`,`namapegawai`,`jeniskelamin`) values (1,'Untung Slamet','Pria'),(2,'Yanti Puspita','Wanita'),(3,'Dedi Yanuar Pribadi','Pria'),(4,'Nur Layla','Wanita'),(5,'Ahmad Rizal Afani','Pria');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
