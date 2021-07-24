/*
SQLyog Ultimate v9.63 
MySQL - 5.6.42-log : Database - phplogin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`phplogin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `phplogin`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categoria`,`nombre_categoria`,`date_added`) values (5,'Accesorios','2016-12-19 21:06:39');

/*Table structure for table `historial` */

DROP TABLE IF EXISTS `historial`;

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nota` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `referencia` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `products` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `historial` */

insert  into `historial`(`id_historial`,`id_producto`,`Id`,`fecha`,`nota`,`referencia`,`cantidad`) values (1,1,1,'2019-01-04 13:48:00','Obed agregó 30 producto(s) al inventario','023',30),(2,1,1,'2019-01-04 13:50:27','Obed eliminó 10 producto(s) del inventario','venta',10),(3,1,10,'2019-01-04 18:18:06','guido eliminó 10 producto(s) del inventario','venta',10),(4,1,10,'2019-01-04 19:54:26','guido agregó 500 producto(s) al inventario','deposito',500),(5,1,10,'2019-01-05 00:52:54','guido eliminó 200 producto(s) del inventario','extraccion',200);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `stock` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id` (`Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id_producto`,`nombre_producto`,`date_added`,`stock`,`Id`) values (1,'caja','2019-01-04 13:48:00',310,0),(5,'caja','2019-02-22 23:55:22',13,5),(6,'caja','2019-01-11 00:01:46',-29,6),(8,'caja','2019-02-23 20:41:09',499,8),(9,'ahorro','2019-02-24 18:09:08',567,9),(10,'caja de ahorro','2019-07-23 01:08:44',19213,10);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(64) DEFAULT NULL,
  `apellido` varchar(64) NOT NULL,
  `dni` varchar(64) NOT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Password` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `dni` (`dni`),
  KEY `dni_2` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`Id`,`Name`,`apellido`,`dni`,`Email`,`Password`) values (1,'guidopo','','0','guidomrauber@gmail.com','$2y$10$yBH2UU5CSXgsUdTQhuXBd.6U6l2bosJg/NYMWAHjIWfCLIhm81fAK'),(2,'teresa','','0','terepacifico@hotmail.com.ar','$2y$10$Wk30JBUse7LbNpKtq7B/VuC5OmfxiY5Xnj4YoCIOgqqWaQFu7ng5S'),(3,'ggggg','','0','guido@hotmail.com','$2y$10$HrAXmq7XiAv88w1XbKIaS.EfPAXsdenihX8hK85jSvDqSVCY6CF22'),(4,'pepe onguito','','0','pepito@gmail.com','$2y$10$Rwvgh2b/wbSEg9NEwofKrOr6e9VVO/0KnTii29Wrx3p7nqag42RKm'),(5,'pepito','onguito','18447820','pepeonguito@gmail.com','pepito'),(6,'juancito','andreozzi','184478200','antoniandreozzi@hotmail.com','123456'),(7,'pedro','apellido','dni','pedroalfonso@hotmail.com','$2y$10$lJUQ/2a9CSfUA6uVmixQ/u1GexlpXWkJ2uEDxhDS5FOvw86qZn91S'),(8,'PEPE','rauber','2014999456','antoniandreozzi@gmail.com','$2y$10$XkgTwsfKVam8juclmjNemupB7ZMQzsFG.ttAD7TW8cQgR1CfTCcd.'),(9,'MARCELA','BOTARO','23000567','marcelabotaro@gmail.com','$2y$10$rK2CfFSVTo69GiDp7zaQheei5MmWGhU2Rix/KxLHVFSkFUh6y6dtS'),(10,'viviana','galvez','222222','vgalvez@uncu.edu.ar','$2y$10$pF4ITW69BE1eWDyxhfYx/OwKx3lga2ciXhIzvHzrRMAbzNGLxki4.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
