-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2013 at 08:41 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exodia`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `BARANG_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `KATEGORI_ID` bigint(20) NOT NULL,
  `MEMBER_ID` bigint(20) NOT NULL,
  `BARANG_NAMA` varchar(40) DEFAULT NULL,
  `BARANG_DESC` text,
  `BARANG_HIT` bigint(20) DEFAULT NULL,
  `BARANG_ADD` datetime DEFAULT NULL,
  `BARANG_LIKE` bigint(20) DEFAULT NULL,
  `BARANG_UNLIKE` bigint(20) DEFAULT NULL,
  `BARANG_HARGA` bigint(20) DEFAULT NULL,
  `BARANG_STOCK` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`BARANG_ID`),
  KEY `FK_RELATIONSHIP_1` (`KATEGORI_ID`),
  KEY `FK_RELATIONSHIP_5` (`MEMBER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`BARANG_ID`, `KATEGORI_ID`, `MEMBER_ID`, `BARANG_NAMA`, `BARANG_DESC`, `BARANG_HIT`, `BARANG_ADD`, `BARANG_LIKE`, `BARANG_UNLIKE`, `BARANG_HARGA`, `BARANG_STOCK`) VALUES
(1, 1, 1, 'sa', 'sa', 0, '2010-08-29 22:49:18', 0, 0, 1, 1),
(2, 1, 1, 'sa', 'sa', 0, '2010-08-29 23:04:01', 2, 0, 1, 1),
(3, 1, 1, 'baju1', 'buat cewek loh...', 0, '2010-08-29 23:24:44', 0, 0, 5000, 1),
(4, 1, 1, 'baju1', 'buat cewek loh...', 0, '2010-08-29 23:26:21', 0, 0, 5000, 1),
(5, 1, 1, 'baju1', 'buat cewek loh...', 0, '2010-08-29 23:26:38', 0, 0, 5000, 1),
(6, 1, 1, 'baju1', 'buat cewek loh...', 0, '2010-08-29 23:26:54', 1, 0, 5000, 1),
(7, 2, 61121, 'LG 21FU1RL', 'SPESIFIKASI - 21" Ultra Slim - Nicam Stereo - XD Engine - Black Glossy - Audio Output: 7W x 2 - Multi system - Turbo Sound - Turbo Search - Auto Volume Leveler - Hyperband cable tuner - DVD Component Input - WxHxD: 600 x 455 x 329mm - Warranty: 1 year', 0, '2010-09-05 21:05:57', 0, 0, 1000000, 10),
(8, 2, 61121, 'LG 29FU1RL', ' * 29" Ultra Slim * Nicam Stereo * XD Engine * Black Glossy * Audio Output: 10W x 2 * Multi system * Turbo Sound * Turbo Search * Auto Volume Leveler * Hyperband cable tuner * DVD Component Input * WxHxD: 796 x 591 x 399.5mm * Warranty: 1 year', 0, '2010-09-05 21:07:02', 0, 0, 2375000, 10),
(9, 2, 61121, 'Iphone 4G 32GB', 'Spesifikasi Iphone 4G 32GB :  Namd : - GSM 850 / 900 / 1800 / 1900 - HSDPA 850 / 900 / 1900 / 2100 Dimensions : 115.2 x 58.6 x 9.3 mm Weight : 137 g Display : TFT capacitive touchscreen, 16M colors Size : - 640 x 960 pixels, 3.5 inches - Scratch-resistant surface - Multi-touch input method - Accelerometer sensor for auto-rotate - Three-axis gyro sensor - Proximity sensor for auto turn-off  Alert types : Vibration, MP3 ringtones Speakerphone : Yes, 3.5 mm headset jack Phonebook : Practically unlimited entries and fields, Photocall Call records : - 100 received, dialed and missed calls Internal : 32 GB storage, 512 MB RAM Card slot : No GPRS : Class 10 (4+1/3+2 slots), 32 - 48 kbps EDGE : Class 10, 236.8 kbps 3G : HSDPA, 7.2 Mbps; HSUPA, 5.76 Mbps WLAN : Wi-Fi 802.11 b/g/n Bluetooth : Yes, v2.1 with A2DP Infrared port : No USB : Yes, v2.0 Camera : Primary 5 MP, 2592 x 1944 pixels, autofocus, LED flash Features : Touch focus, geo-tagging Video Yes, 720p@30fps, LED video light, geo-tagging Secondary : Yes, videocalling over Wi-Fi only Features : - OS 4 - 1 GHz Apple A4 processor - SMS (threaded view), MMS, Email, Push Email - HTML (Safari) - Games - GPS with A-GPS support - MicroSIM card support only - Scratch-resistant glass back panel - Active noise cancellation with dedicated mic - Digital compass - Google Maps - Audio/video player and editor - Voice command/dial - TV-out  Battery : Standard battery, Li-Po 1420mAh Stand-by : Up to 300 h (2G) / Up to 300 h (3G) Talk time : Up to 14 h (2G) / Up to 7 h (3G) Music play : Up to 40 h ', 0, '2010-09-05 21:10:00', 3, 0, 10750000, 5),
(10, 2, 61121, 'Ipad 64GB 3G', 'Wifi + 3G Garansi Apple International', 0, '2010-09-05 21:11:10', 1, 0, 9800000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `barang_foto`
--

CREATE TABLE IF NOT EXISTS `barang_foto` (
  `BF_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BARANG_ID` bigint(20) DEFAULT NULL,
  `BF_ALAMAT` text,
  PRIMARY KEY (`BF_ID`),
  KEY `FK_RELATIONSHIP_3` (`BARANG_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `barang_foto`
--

INSERT INTO `barang_foto` (`BF_ID`, `BARANG_ID`, `BF_ALAMAT`) VALUES
(1, 2, '/upload/kop1.jpg'),
(2, 3, '/upload/kop1.jpg'),
(3, 4, '/upload/kop2.jpg'),
(4, 5, '/upload/kop3.jpg'),
(5, 6, '/upload/kop4.jpg'),
(6, 7, '/upload/kop5.jpg'),
(7, 8, '/upload/kop6.jpg'),
(8, 9, '/upload/kop7.jpg'),
(9, 10, '/upload/kop8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f9b2cdf3495b2b2757023f460f2f5180', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53', 1372867754, 'a:2:{s:2:"id";s:1:"1";s:4:"type";s:6:"member";}'),
('444ec55c2a3c979df1a2ee30b46e9898', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53', 1372867544, 'a:4:{s:2:"id";s:1:"1";s:4:"type";s:6:"member";s:13:"cart_contents";a:3:{s:32:"c81e728d9d4c2f636f067f89cc14862c";a:6:{s:5:"rowid";s:32:"c81e728d9d4c2f636f067f89cc14862c";s:2:"id";s:1:"2";s:3:"qty";s:1:"1";s:5:"price";s:1:"1";s:4:"name";s:2:"sa";s:8:"subtotal";i:1;}s:11:"total_items";s:1:"1";s:10:"cart_total";s:1:"1";}s:4:"like";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE IF NOT EXISTS `detail_pembelian` (
  `DK_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BARANG_ID` bigint(20) NOT NULL,
  `PEMBELIAN_ID` bigint(20) NOT NULL,
  `DK_JUMLAH` bigint(20) DEFAULT NULL,
  `DK_HARGA` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`DK_ID`),
  KEY `FK_RELATIONSHIP_2` (`BARANG_ID`),
  KEY `FK_RELATIONSHIP_4` (`PEMBELIAN_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`DK_ID`, `BARANG_ID`, `PEMBELIAN_ID`, `DK_JUMLAH`, `DK_HARGA`) VALUES
(1, 6, 1, 10, 5000),
(2, 6, 2, 2, 5000),
(3, 9, 3, 3, 10750000),
(4, 9, 4, 1, 10750000),
(5, 10, 5, 3, 9800000),
(6, 9, 8, 1, 10750000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `KATEGORI_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `KATEGORI_NAMA` varchar(40) DEFAULT NULL,
  `KATEGORI_DESC` text,
  `KATEGORI_ALAMAT` text NOT NULL,
  PRIMARY KEY (`KATEGORI_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`KATEGORI_ID`, `KATEGORI_NAMA`, `KATEGORI_DESC`, `KATEGORI_ALAMAT`) VALUES
(1, 'fashion', 'berisi beranekam macam pakaian, accessoris dan barang-barang yang diapakai lainnya', '/media/image/kategori/fashion.png'),
(2, 'barang elektronik', 'bisa nyetrum', '/media/image/kategori/elektronik.jpg'),
(3, 'kerajinan', 'bukan keranjingan', '/media/image/kategori/keranjang.jpg'),
(4, 'jasa', 'wuiihh...', '/media/image/kategori/jasa.jpg'),
(5, 'furniture', NULL, '/media/image/kategori/furniture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `MEMBER_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MEMBER_NAMA` varchar(40) DEFAULT NULL,
  `MEMBER_PASS` text,
  `MEMBER_ALAMAT` varchar(50) DEFAULT NULL,
  `MEMBER_SEX` varchar(10) DEFAULT NULL,
  `MEMBER_EMAIL` varchar(40) DEFAULT NULL,
  `MEMBER_FOTO` text,
  `MEMBER_PHONE` varchar(15) DEFAULT NULL,
  `MEMBER_DESC` text,
  `MEMBER_JOIN` datetime DEFAULT NULL,
  `MEMBER_ACTIVE` tinyint(1) DEFAULT NULL,
  `MEMBER_PAYPAL` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`MEMBER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1109301724 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MEMBER_ID`, `MEMBER_NAMA`, `MEMBER_PASS`, `MEMBER_ALAMAT`, `MEMBER_SEX`, `MEMBER_EMAIL`, `MEMBER_FOTO`, `MEMBER_PHONE`, `MEMBER_DESC`, `MEMBER_JOIN`, `MEMBER_ACTIVE`, `MEMBER_PAYPAL`) VALUES
(61121, 'Tegar R Putra', '3uV/7zGPVs/8W8inbQ3KhChrue7PT/L47eoATvyPepxEUb00RieBHT+S/ePiNHgKg+VN5Z8zyrPVXAEebdSS+g==', 'Surabaya', 'laki-laki', 'tegarriyonopura@yahoo.com', '/foto/61121.jpg', '0', 'mahasiswa its', '2010-08-28 21:16:11', 1, NULL),
(1, 'tes', '6/WB2V8+28RZA1ljb0+IsqacbLaoniz8XLxb2Q3p3UDR1NobyoZcz8NsZ7OdZpQDI1LHjhFv8HXyel3Vjdy9lQ==', 'tes', 'perempuan', 'tes@tes.com', '/foto/1.jpg', '0', 'tes', '2010-08-29 22:21:04', 1, NULL),
(1109301723, 'AnGs', 'j4iNehCkemSwsXe5N2hxHFUamQSP70jPisY5ue/8zEK0iOhj1bfi+GBHLhcOmwq72xkbb4BUp3Mog2ZVGZ0XLg==', 'Sukaraja', 'laki-laki', 'AnGs@fisikakoe.co.cc', NULL, '1109301723', 'Mee', '2010-08-30 00:42:57', 1, NULL),
(61122, 'tegar', 'fKDmBExpV/jEbs0kfbWc4T9/mJV5zTA1tY0sjc1Db6VjCQiPQZxwlhOF+QqgesY6fo4gUt7wq7i38k8+gV47nQ==', 'surabaya', 'laki-laki', 'tegar@a.com', NULL, '61122', 'male', '2010-08-30 06:40:05', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `PEMBELIAN_ID` bigint(20) NOT NULL,
  `PEMBELIAN_PIN` text,
  `PEMBELIAN_TANGGAL` datetime DEFAULT NULL,
  `PEMBELIAN_HARGA` bigint(20) DEFAULT NULL,
  `PEMBELIAN_STATUS` varchar(30) NOT NULL,
  `PEMBELIAN_REKENING` varchar(30) NOT NULL,
  PRIMARY KEY (`PEMBELIAN_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`PEMBELIAN_ID`, `PEMBELIAN_PIN`, `PEMBELIAN_TANGGAL`, `PEMBELIAN_HARGA`, `PEMBELIAN_STATUS`, `PEMBELIAN_REKENING`) VALUES
(1, '1', '2010-09-04 18:18:27', 50000, 'Belum Dibayar', ''),
(2, '2', '2010-09-05 01:17:41', 10000, 'Belum Dibayar', ''),
(3, '3', '2010-09-06 01:06:08', 32250000, 'Belum Dibayar', '14157'),
(4, '4', '2010-09-06 14:50:29', 10750000, 'Belum Dibayar', ''),
(5, '5', '2010-09-06 14:54:03', 29400000, 'Belum Dibayar', '123'),
(6, '6', '2010-09-06 14:57:08', 29400000, 'Belum Dibayar', '123'),
(7, '7', '2010-09-06 14:58:32', 29400000, 'Belum Dibayar', '123'),
(8, '8', '2013-07-03 22:33:48', 10750000, 'Belum Dibayar', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
