-- MySQL dump 10.13  Distrib 9.0.1, for macos15.1 (arm64)
--
-- Host: localhost    Database: library_stmik_palangkaraya
-- ------------------------------------------------------
-- Server version	9.0.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin1','$2y$10$.5c6RMeMBnTrgbSBroomkO2Kp5oLT4jJMjSf9PfekFvFtM4qbXhn6');
INSERT INTO `admin` VALUES (2,'admin2','$2y$10$.5c6RMeMBnTrgbSBroomkO2Kp5oLT4jJMjSf9PfekFvFtM4qbXhn6');
INSERT INTO `admin` VALUES (3,'admin3','$2y$10$.5c6RMeMBnTrgbSBroomkO2Kp5oLT4jJMjSf9PfekFvFtM4qbXhn6');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anggota`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anggota` (
  `id_anggota` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES (1,'Ahmad Fikri','Jl. Merdeka No. 1','081234567890','ahmad.fikri@example.com');
INSERT INTO `anggota` VALUES (2,'Budi Santoso','Jl. Sudirman No. 12','081298765432','budi.santoso@example.com');
INSERT INTO `anggota` VALUES (3,'Citra Dewi','Jl. Thamrin No. 45','081345678912','citra.dewi@example.com');
INSERT INTO `anggota` VALUES (4,'Dewi Lestari','Jl. Diponegoro No. 20','081256789123','dewi.lestari@example.com');
INSERT INTO `anggota` VALUES (5,'Eko Prasetyo','Jl. Ahmad Yani No. 10','081367891234','eko.prasetyo@example.com');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buku` (
  `kode_buku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` year NOT NULL,
  `jumlah_eksemplar` int NOT NULL,
  PRIMARY KEY (`kode_buku`),
  CONSTRAINT `buku_chk_1` CHECK ((`jumlah_eksemplar` >= 0))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES ('BK001','Pemrograman Pythons','John Doe','Tech Publisher',2021,6);
INSERT INTO `buku` VALUES ('BK002','Data Science Handbook','Jane Smith','Data Press',2022,3);
INSERT INTO `buku` VALUES ('BK003','Machine Learning Basics','Andrew Ng','AI World',2019,6);
INSERT INTO `buku` VALUES ('BK004','Database Essentials','Chris Brown','DB Publisher',2018,2);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `buku_dipinjam`
--

SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `buku_dipinjam` AS SELECT 
 1 AS `id_transaksi`,
 1 AS `kode_buku`,
 1 AS `judul`,
 1 AS `id_anggota`,
 1 AS `nama`,
 1 AS `tanggal_pinjam`,
 1 AS `tanggal_kembali_direncanakan`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `statistik_admin`
--

SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `statistik_admin` AS SELECT 
 1 AS `jumlah_buku`,
 1 AS `jumlah_anggota`,
 1 AS `transaksi_aktif`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `transaksi`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_anggota` int NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali_direncanakan` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `denda` int DEFAULT '0',
  PRIMARY KEY (`id_transaksi`),
  KEY `id_anggota` (`id_anggota`),
  KEY `kode_buku` (`kode_buku`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,1,'BK001','2025-01-01','2025-01-08','0000-00-00',100);
INSERT INTO `transaksi` VALUES (2,2,'BK002','2025-01-02','2025-01-09','2025-01-11',1000);
INSERT INTO `transaksi` VALUES (3,3,'BK003','2025-01-03','2025-01-10',NULL,500);
INSERT INTO `transaksi` VALUES (4,1,'BK001','2025-01-01','2025-01-08',NULL,0);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `kurangi_eksemplar` BEFORE INSERT ON `transaksi` FOR EACH ROW BEGIN
    DECLARE jumlah INT;
    SELECT jumlah_eksemplar INTO jumlah FROM buku WHERE kode_buku = NEW.kode_buku;
    IF jumlah > 0 THEN
        UPDATE buku SET jumlah_eksemplar = jumlah_eksemplar - 1 WHERE kode_buku = NEW.kode_buku;
    ELSE
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Buku tidak tersedia';
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tambah_eksemplar` AFTER UPDATE ON `transaksi` FOR EACH ROW BEGIN
    IF NEW.tanggal_kembali IS NOT NULL THEN
        UPDATE buku SET jumlah_eksemplar = jumlah_eksemplar + 1 WHERE kode_buku = NEW.kode_buku;
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping routines for database 'library_stmik_palangkaraya'
--

--
-- Final view structure for view `buku_dipinjam`
--

/*!50001 DROP VIEW IF EXISTS `buku_dipinjam`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `buku_dipinjam` AS select `t`.`id_transaksi` AS `id_transaksi`,`t`.`kode_buku` AS `kode_buku`,`b`.`judul` AS `judul`,`t`.`id_anggota` AS `id_anggota`,`a`.`nama` AS `nama`,`t`.`tanggal_pinjam` AS `tanggal_pinjam`,`t`.`tanggal_kembali_direncanakan` AS `tanggal_kembali_direncanakan` from ((`transaksi` `t` join `buku` `b` on((`t`.`kode_buku` = `b`.`kode_buku`))) join `anggota` `a` on((`t`.`id_anggota` = `a`.`id_anggota`))) where (`t`.`tanggal_kembali` is null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `statistik_admin`
--

/*!50001 DROP VIEW IF EXISTS `statistik_admin`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `statistik_admin` AS select (select count(0) from `buku`) AS `jumlah_buku`,(select count(0) from `anggota`) AS `jumlah_anggota`,(select count(0) from `transaksi` where (`transaksi`.`tanggal_kembali` is null)) AS `transaksi_aktif` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-01 23:33:32
