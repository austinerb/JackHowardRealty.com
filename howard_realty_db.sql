-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: howard_realty_db
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `rentals`
--

DROP TABLE IF EXISTS `rentals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rentals` (
  `id` text,
  `address` text,
  `vacancy` text,
  `county` text,
  `city` text,
  `price` text,
  `apartment` text,
  `beds` text,
  `full` text,
  `half` text,
  `heating` text,
  `cooling` text,
  `deposit` text,
  `school` text,
  `hardwood` text,
  `fence` text,
  `garage` text,
  `washer` text,
  `elem` text,
  `middle` text,
  `high` text,
  `area` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rentals`
--

LOCK TABLES `rentals` WRITE;
/*!40000 ALTER TABLE `rentals` DISABLE KEYS */;
INSERT INTO `rentals` VALUES ('0','502 Avalon Pl','no','','','625','no','3','1','0','electric','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('1','512 Avalon Pl','no','','','625','no','3','1','0','electric','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('2','206 Avery Ave','no','','','625','no','3','1','0','gas','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Andrews',NULL),('3','1223 Carolina St','no','','','650','no','3','1','0','electric','central','400','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('4','1227 Carolina St','no','','','625','no','3','1','0','electric','central','400','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('5','310 Charles Ave','no','','','525','no','2','1','0','','none','400','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('6','312 Charles Ave','no','','','525','no','2','1','0','electric','central','400','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('7','316 Charles Ave','no','','','525','no','2','1','0','electric','central','400','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('8','318 Charles Ave','no','','','525','no','2','1','0','electric','central','400','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('9','1404 E Commerce Ave','no','','','375','no','2','1','0','electric','central','300','','carpet','','','yes','Triangle Lake Montessori','Southwest Guilford','Southwest Guilford',NULL),('10','624 E. State St','no','','','850','no','3','2','0','electric','central','500','','hardwood','','','yes','Kirkman Park','Laurin Welborn','Andrews',NULL),('11','1227 Delk Dr','yes','','','795','no','3','2','0','electric','central','500','','hardwood','','','yes','Kirkman Park','Laurin Welborn','Andrews','1,025'),('12','1118 Denny St','no','','','625','no','3','1','0','electric','central','400','','hardwood','','','yes','Kirkman Park','Laurin Welborn','Andrews',NULL),('13','300 Earle Pl','no','','','550','no','2','2','0','electric','central','300','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('14','200 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('15','202 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('16','204 Edgeworth St','no','','','395','yes','1','1','','electric baseboard','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('17','206 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('18','208 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('19','210 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('20','212 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('21','214 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('22','216 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('23','218 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('24','220 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('25','222 Edgeworth St','no','','','395','yes','1','1','0','electric baseboard','none','300','','carpet','','','laundry room','Northwood','Ferndale','Central',NULL),('27','226 Edgeworth St','no','','','350','yes','eff','1','0','electric','none','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('28','228 Edgeworth St','no','','','350','yes','eff','1','0','electric','central','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('29','230 Edgeworth St','no','','','350','yes','eff','1','0','electric','central','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('30','232 Edgeworth St','no','','','375','yes','1','1','0','electric','central','300','','hardwood','','','laundry room','Northwood','Ferndale','Central',NULL),('31','908 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','no','Northwood','Ferndale','Central',NULL),('32','910 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','yes','Northwood','Ferndale','Central',NULL),('33','912 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','no','Northwood','Ferndale','Central',NULL),('34','914 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','yes','Northwood','Ferndale','Central',NULL),('35','916 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','yes','Northwood','Ferndale','Central',NULL),('36','918 Ferndale Blvd','no','','','495','yes','2','1','0','gas','central','300','','hardwood','','','no','Northwood','Ferndale','Central',NULL),('37','1103 Gordon St','no','','','525','no','2','1','','electric','central','300','','carpet','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('38','500 Grand St','no','','','525','no','2','1','','electric','central','300','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('39','502 Grand St','no','','','625','no','3','1','','electric','central','300','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('40','421 Habersham Rd','no','','','595','no','3','1','','electric','central','300','','tile','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('41','1425 Johnson St','no','','','595','no','3','1','','electric','central','300','','hardwood/carpet','','','yes','Johnson Street','Johnson Street','Central',NULL),('42','314 Kendall St','no','','','425','no','2','1','','electric baseboard','none','300','','carpet','','','yes','Oak View','Ferndale','Central',NULL),('43','302 Lawndale Ave','no','','','495','no','2','1','','electric','central','300','','hardwood/carpet','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('44','306 Lawndale Ave','no','','','495','no','2','1','0','electric','central','300','','hardwood','','','yes','Union Hill','Jamestown','Lucy Ragsdale',NULL),('45','901 Meredith St','yes','','','450','no','2','1','','electric','central','300','','hardwood','','','yes','Triangle Lake Montessori','Southwest Guilford','Southwest Guilford','727'),('46','1002 Mint Ave','no','','','435','no','2','1','','electric baseboard','none','300','','carpet','','','yes','Kirkman Park','Ferndale','Central',NULL),('47','220 Model Farm Rd','no','','','575','no','2','1','','electric','central','400','','hardwood/carpet','','','yes','Allen Jay','Allen Jay','Southwest Guilford',NULL),('48','216 Moffitt Dr','no','','','595','no','3','1','','electric','central','300','','hardwood/carpet','','','yes','Oak View','Laurin Welborn','Central',NULL),('49','224 Moffitt Dr','no','','','595','no','3','1','','gas','central','300','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('50','307 Oakview Rd','no','','','525','no','2','1','','electric','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Andrews',NULL),('51','309 Oakview Rd','no','','','595','no','3','1','','electric','central','300','','carpet','','','yes','Oak View','Laurin Welborn','Andrews',NULL),('52','902 Parkside Dr','no','','','525','no','2','1','','electric','central','300','','carpet','','','yes','Oak View','Laurin Welborn','Central',NULL),('53','1412 Parkside Dr','no','','','795','no','3','1','','electric','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('55','2401 Robbins St','no','','','625','no','3','1','','electric','central','300','','carpet','','','yes','Allen Jay','Allen Jay','Southwest Guilford',NULL),('56','3738 Rolling Rd','no','','','750','no','3','2','','gas','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Andrews',NULL),('57','501 N. Rotary Dr','no','','','750','no','3','2','','electric','central','400','','hardwood','','','yes','Northwood','Ferndale','Central',NULL),('58','408 Salem St','no','','','595','no','3','1','','gas','central','300','','hardwood/carpet','','','yes','Kirkman Park','Ferndale','Central',NULL),('59','1707 Stoneybrook Dr','no','','','850','no','4','1','1','gas','central','500','','carpet','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('60','1126 Tabor St','no','','','750','no','3','2','','gas','central','400','','hardwood','','','yes','Oak View','Laurin Welborn','Central',NULL),('61','1014 Terrell Dr','no','','','725','no','3','2','','electric','central','400','','hardwood','','','yes','Kirkman Park','Laurin Welborn','Andrews',NULL),('62','1206 Terrell Dr','no','','','650','no','2','2','','electric','central','300','','hardwood','','','yes','Kirkman Park','Laurin Welborn','Andrews',NULL),('63','1217 Waverly St','no','','','525','no','2','1','','gas','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('64','1301 Waverly St','no','','','525','no','2','1','','electric','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('65','1116 Wayside St','no','','','595','no','3','1','','electric','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('66','1118 Wayside St','no','','','595','no','3','1','0','electric','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('67','1120 Wayside St','no','','','595','no','3','1','0','electric','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('68','1124 Wayside St','no','','','595','no','3','1','','gas','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('69','2426 Williams Ave','no','','','695','no','3','2','','electric','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('70','2432 Williams Ave','no','','','625','no','3','1','','gas','central','300','','hardwood','','','yes','Montlieu Avenue','Laurin Welborn','Andrews',NULL),('71','302 Woodbury St','no','','','425','no','2','1','','gas','none','300','','hardwood/carpet','','','yes','Parkview Village','Southwest Guilford','Southwest Guilford',NULL),('72','304 Woodbury St','no','','','495','no','3','1','','gas','none','300','','hardwood','','','yes','Parkview Village','Southwest Guilford','Southwest Guilford',NULL),('73','306 Woodbury St','no','','','450','no','3','1','0','gas','none','300','','hardwood','','','yes','Parkview Village','Southwest Guilford','Southwest Guilford',NULL),('74','308 Woodbury St','yes','','','450','no','3','1','0','gas','none','300','','hardwood','','','yes','Parkview Village','Southwest Guilford','Southwest Guilford','896'),('75','310 Woodbury St','no','','','495','no','2','1','0','gas','none','300','','hardwood','','','yes','Parkview Village','Southwest Guilford','Southwest Guilford',NULL),('76','1305 Waverly St','no',NULL,NULL,'525','no','2','1','0','electric','central','300',NULL,'hardwood',NULL,NULL,'yes','','','',''),('77','2403 Woodruff Ave','no',NULL,NULL,'695','no','3','2','0','gas','central','300',NULL,'hardwood',NULL,NULL,'yes','','','','');
/*!40000 ALTER TABLE `rentals` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-25 18:44:33