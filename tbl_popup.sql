/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.10-MariaDB : Database - db_admin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_popup` */

DROP TABLE IF EXISTS `tbl_popup`;

CREATE TABLE `tbl_popup` (
  `id_popup` int(2) NOT NULL,
  `situacao` int(2) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  PRIMARY KEY (`id_popup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_popup` */

insert  into `tbl_popup`(`id_popup`,`situacao`,`imagem`) values (1,1,'0c850a80fdde26d59bd59f5ce8633dd2.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
