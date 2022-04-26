-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: project_naker
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `peraturan` varchar(128) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (14,'Peraturan Menteri Nomor 2 Tahun 2022','tentang Tata Cara dan Persyaratan Pembayaran Manfaat Jaminan Hari Tua','bahwa manfaat jaminan hari tua diberikan dengan \ntujuan untuk menjamin agar peserta menerima uang \ntunai jika memasuki masa pensiun, mengalami cacat \ntotal tetap, atau meninggal dunia','2022-04-16 00:24:37'),(15,'Peraturan Menteri Nomor 1 Tahun 2022','tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis di Kementerian Ketenagakerjaan','bahwa untuk melaksanakan ketentuan Pasal 246 ayat\n(2) Peraturan Menteri Ketenagakerjaan Nomor 1 Tahun\n2021 tentang Organisasi dan Tata Kerja Kementerian\nKetenagakerjaan, perlu penataan organisasi dan tata\nkerja Unit Pelaksana Teknis di Kementerian\nKetenagakerjaan','2022-04-16 00:24:37'),(16,'Peraturan Menteri Nomor 26 Tahun 2021','tentang Penyelengaraan Kearsipan Dinamis Kementerian Ketenagakerjaan','bahwa untuk menjamin ketersediaan arsip yang utuh,\nautentik, dan tepercaya di Kementerian\nKetenagakerjaan serta untuk memberikan acuan\ndalam pengelolaan tertib arsip dinamis oleh pencipta\narsip sebagaimana diatur dalam Pasal 32 ayat (3)\nPeraturan Pemerintah Nomor 28 Tahun 2012 tentang\nPelaksanaan Undang-Undang Nomor 43 Tahun 2009\ntentang Kearsipan, perlu menciptakan sistem\npengelolaan arsip yang baik, terkoordinasi,\nterintegrasi, berdaya guna, dan berhasil guna','2022-04-16 00:24:37'),(17,'Peraturan Menteri Nomor 25 Tahun 2021','tentang Pedoman Penyaluran Bantuan Pemerintah di Kementerian Ketenagakerjaan Tahun Anggaran 2022','bahwa pengguna anggaran perlu menyusun pedoman\numum dan petunjuk teknis dalam rangka penyaluran\nbantuan pemerintah sebagaimana diatur dalam Pasal\n6 ayat (1) Peraturan Menteri Keuangan Nomor\n168/PMK.05/2015 tentang Mekanisme Pelaksanaan\nAnggaran Bantuan Pemerintah pada Kementerian\nNegara/Lembaga sebagaimana telah diubah dengan\nPeraturan Menteri Keuangan Nomor\n173/PMK.05/2016 tentang Perubahan atas Peraturan\nMenteri Keuangan Nomor 168/PMK.05/2015 tentang\nMekanisme Pelaksanaan Anggaran Bantuan\nPemerintah pada Kementerian Negara/Lembaga','2022-04-16 00:24:37'),(18,'Peraturan Menteri Nomor 3 Tahun 2022','tentang Tata Cara dan Persyaratan Pembayaran Manfaat Jaminan Hari Tua','bahwa untuk melaksanakan ketentuan Pasal 246 ayat\r\n(2) Peraturan Menteri Ketenagakerjaan Nomor 1 Tahun\r\n2021 tentang Organisasi dan Tata Kerja Kementerian\r\nKetenagakerjaan, perlu penataan organisasi dan tata\r\nkerja Unit Pelaksana Teknis di Kementerian\r\nKetenagakerjaan','2022-04-16 01:19:51'),(19,'Peraturan No 2 Tahun 2022','tentang Pelaksanaan Dekonsentrasi Kementerian Ketenagakerjaan Tahun Anggaran 2022','aku adlah orang yang bijak sana','2022-04-16 01:20:42'),(22,'Peraturan No 2 Tahun 2025','tentang Pelaksanaan Dekonsentrasi Kementerian Ketenagakerjaan Tahun Anggaran 2022','UU KUHP pasal ini menerangkan bahwa balal bala sabhsakk kasjdsa','2022-04-16 06:03:02'),(23,'Peraturan No 2 Tahun 2022','entah ga tau bodo amat','Maaf konten ini tidak tepat untuk anda','2022-04-16 07:07:49'),(26,'UU No 1 Tahun 1946','pemberitahuan bohong','UU No 1 Tahun 1946 mengatur tentang apa?\r\n(1) Barang siapa, dengan menyiarkan berita atau pemberitahuan bohong, dengan sengaja menerbitkan keonaran dikalangan rakyat, dihukum dengan hukuman penjara setinggitingginya sepuluh tahun','2022-04-24 10:26:04');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qa`
--

DROP TABLE IF EXISTS `qa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `qa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `ask` text,
  `answer` text,
  `user_id` int NOT NULL,
  `time_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_askwer_users` (`user_id`),
  CONSTRAINT `qa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qa`
--

LOCK TABLES `qa` WRITE;
/*!40000 ALTER TABLE `qa` DISABLE KEYS */;
INSERT INTO `qa` VALUES (1,'Cewek-Tik-Tok','Bang kenapa cewek di tiktok itu joget joget kayak cacing kepanasan?','Maklum lah bro akhir zaman awokawokawok',2,'2022-04-23 17:37:22'),(2,'Agama','agama adalah ajaran membawa ketenangan dan perdamaian','Agama adalah sistem yang mengatur kepercayaan serta peribadatan kepada Tuhan (atau sejenisnya) serta tata kaidah yang berhubungan dengan budaya, dan pandangan dunia yang menghubungkan manusia dengan tatanan kehidupan. Kata agama kadang-kadang digunakan bergantian dengan iman, sistem kepercayaan, atau kadang-kadang mengatur tugas.',2,'2022-04-23 17:38:13'),(3,'Rapat-UU-no-3-Tahun-2012','Indonesia kapan merdeka?',NULL,9,'2022-04-23 17:38:51'),(4,'Gaji-Pahlawan','Pahlawan pada zaman sekarang tuh ga di hargai bro','Menurut Wikepedia gaji pahlawan tuh tidak bisa di bayarkan saking besarnya pengorbanan mereka',9,'2022-04-23 17:39:21'),(5,'Perpu-UU-1-Tahun-1999','Jelaskan lebih detail tentang pertanyaan itu please supaya bisa ngerjakan pr rumah',NULL,2,'2022-04-24 10:12:38'),(6,'Manhaj-Salafiyah','Mohon penjelasannya suhu','Manhaj salaf merupakan ungkapan dari dua kata, &quot;manhaj&quot; dan &quot;salaf&quot;. Keduanya memiliki arti masing-masing. Manhaj diartikan sebagai jalan yang terang, sementara &quot;salaf&quot; bermakna orang-orang yang sudah mendahuluimu. Salaf juga bisa diartikan sebagai imam dan sahabat Rasulullah SAW.',2,'2022-04-24 10:15:51');
/*!40000 ALTER TABLE `qa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'admin'),(2,'member');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_token`
--

DROP TABLE IF EXISTS `user_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `user_token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `date_created` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_token`
--

LOCK TABLES `user_token` WRITE;
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
INSERT INTO `user_token` VALUES (4,'utomo9972@gmail.com','xRL648DFyIUsnNoSPALimPYainddI34c',1650555043),(6,'hoon9462@gmail.com','u20se7LcKsbk79bh8h6EOxdJbLwmtCsI',1650556738),(8,'hoonp9462@gmail.com','UlHmGKUTWzPXy2xUW7KzMeoh1UqoWX2S',1650557280);
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Laki-laki','Perempuan','Other') DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `role_id` int DEFAULT NULL,
  `is_active` tinyint DEFAULT NULL,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_user_userRole` (`role_id`),
  CONSTRAINT `fk_user_userRole` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ADMIN','devgaleh@gmail.com',NULL,'$2y$10$geGy9VpVniAZ.Up3qHuk7e08BK6ioEeE4E9LaONcEdEJejZlIIvee','Laki-laki','838333578866','Jawa timur Surabaya Indonesia',1,1,'2022-04-20 22:22:54'),(2,'GALEH','kigaleh321@gmail.com',NULL,'$2y$10$eVUJG.fSosqJqI1CNSVNnuvme2CAmT5k5.hxMQtdkqEQTrf2ayNhO','Laki-laki','83833357866',' Desa Penambangan Dsn Plumpang Rt. 18, Rw. 04 Balongbendo-Sidoarjo Indonesia',2,1,'2022-04-20 22:25:25'),(3,'Dimas satrio utomo','utomo9972@gmail.com',NULL,'$2y$10$u0UpA3t8y3U8vcA5sKQC0.WPVWZgenizfbqmCpF/Mz2Ee8/31EuCu',NULL,NULL,NULL,2,1,'2022-04-21 15:26:42'),(6,'nay','hoonp9462@gmail.com',NULL,'$2y$10$Hy5ZRepXx1o6XoLHPBUQuuPRC4UUnp/aPIzyJGj.S88gRDTtadaKa',NULL,NULL,NULL,2,1,'2022-04-21 16:00:23'),(9,'MAHASISWA GALEH','3130021003@student.unusa.ac.id',NULL,'$2y$10$mj8EWvIF/uDU2QwnL6h8DOQq7jg5lcdhvCPvefVRpdP4hmpLEW9ki','Laki-laki','123',' Surabaya Jemursari wonokromo',2,1,'2022-04-23 06:24:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-24 17:46:42
