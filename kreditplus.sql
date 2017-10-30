-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kreditplus
CREATE DATABASE IF NOT EXISTS `kreditplus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kreditplus`;

-- Dumping structure for table kreditplus.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_system` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT '1',
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.admins: ~3 rows (approximately)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `username`, `password`, `email`, `is_system`, `is_active`, `create_on`, `last_update`) VALUES
	(1, 'superadmin', '$2y$10$ZvMMvYxMWHNnG0i7knC4Pe7H2y8H9T9tNaI4Of.6Zm4mocH0GpmN.', 'su@webmail.com', '1', '1', '2016-12-21 10:00:00', NULL),
	(2, 'administrator', '$2y$10$IWX4vPAZky9TSkzWLxyusuToQs59m9OHgzSTQNlwTdJGlJr1TPCAm', 'ad@webmail.com', '1', '1', '2016-12-21 10:00:00', NULL),
	(3, 'support', '$2y$10$dm9XD3S5tYvtyHA7lxCAZ.2mdBU7etgzmcQSm22uJ/cCWbHp1J8ae', 'sr@webmail.com', '1', '1', '2016-12-21 10:00:00', NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table kreditplus.admin_password_resets
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration` datetime NOT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.admin_password_resets: ~0 rows (approximately)
DELETE FROM `admin_password_resets`;
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;

-- Dumping structure for table kreditplus.admin_roles
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned DEFAULT NULL,
  `role_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_id-role_id` (`admin_id`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.admin_roles: ~3 rows (approximately)
DELETE FROM `admin_roles`;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` (`id`, `admin_id`, `role_id`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(3, 3, 3);
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- Dumping structure for table kreditplus.area
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.area: ~0 rows (approximately)
DELETE FROM `area`;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`id`, `title`) VALUES
	(1, 'Tes Area 1');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Dumping structure for table kreditplus.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` varchar(200) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table kreditplus.banner: ~19 rows (approximately)
DELETE FROM `banner`;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`id`, `section_id`, `path`) VALUES
	(1, '2.25', 'site/uploads/banners/59eff506915b1-banner-about.jpg'),
	(2, '3.28', 'site/uploads/banners/59eff8b339fe7-banner-about.jpg'),
	(3, '4.29', 'site/uploads/banners/59effa0b1c10f-banner-pinjaman.jpg'),
	(4, '5.31', 'site/uploads/banners/59effc8461e88-banner-career.jpg'),
	(5, '6.33', 'site/uploads/banners/59effec44701f-banner-career.jpg'),
	(6, '7.38', 'site/uploads/banners/59f00d8ca9fc3-banner-produk.jpg'),
	(7, '8.40', 'site/uploads/banners/59f012a87b048-banner-mobil.jpg'),
	(8, '9.44', 'site/uploads/banners/59f013a5618f4-banner-motor.jpg'),
	(9, '10.46', 'site/uploads/banners/59f014c7ced50-banner-produk.jpg'),
	(10, '11.50', 'site/uploads/banners/59f0334df24ef-banner-promo.jpg'),
	(11, '12.52', 'site/uploads/banners/59f0368d1ba89-banner-produk.jpg'),
	(12, '13.55', 'site/uploads/banners/59f0472913e2e-banner-simulasi.jpg'),
	(13, '16.58', 'site/uploads/banners/59f2b5ebc878b-banner-pinjaman.jpg'),
	(14, '17.59', 'site/uploads/banners/59f2df1f0f0dd-banner-career.jpg'),
	(15, '20.66', 'site/uploads/banners/59f2efc0e19fc-banner-career.jpg'),
	(16, '21.72', 'site/uploads/banners/59f2f9567732d-banner-promo.jpg'),
	(17, '12.50', 'site/uploads/banners/59f30729983e2-banner-promo.jpg'),
	(18, '22.74', 'site/uploads/banners/59f3076dda455-banner-promo.jpg'),
	(19, '23.79', 'site/uploads/banners/59f30bef785ee-banner-career.jpg');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;

-- Dumping structure for table kreditplus.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.brand: ~4 rows (approximately)
DELETE FROM `brand`;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`id`, `produk_id`, `title`) VALUES
	(1, 2, 'tes'),
	(2, 2, 'mobil'),
	(3, 3, 'motor'),
	(4, 4, 'modal usaha');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Dumping structure for table kreditplus.configurations
CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `module-key` (`module`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.configurations: ~3 rows (approximately)
DELETE FROM `configurations`;
/*!40000 ALTER TABLE `configurations` DISABLE KEYS */;
INSERT INTO `configurations` (`id`, `module`, `key`, `setting`, `create_on`, `last_update`) VALUES
	(1, 'system', '48d35125f4a3c2c005d5b0697463c4651704b427', 'eyJpdiI6IlwvWWJZYzU0MG0zR1V0RW9ZTFwvTHM2dz09IiwidmFsdWUiOiJOR01zRnM4cXFmTGJBZGdjdVhXS0FSNWNlM3BiNHdqV0xHenRQWk1LR1VRUk1pc2x6SVlTNDl6emF4SDNId0Z1NUVUd2JJM3hYbjNXK3MzTGtnaHdSZXZLRU5jQXFldGNPUTVERFdIMFkzc3hLZitFMGd4NTRObDZZRHduakg3SzZrNVRrdXJNcDZwNFlRK2d2MDR1WlQ5UkJxXC9UMmwraDM2QlNsK0IrREF6eTZGanRrQWdlT1hjXC9rZEFiUlh3QSszWG8yWGVLaG9VVGZZZzZyQUxHVDdjOFQ2RHhwUEFQNjhrcGp5TE9MNHZ0RDJxV3NGUDN0R05uODZjNmZ1ZW8iLCJtYWMiOiJiNTMzNTdiMzJkYjg1NmQyMzQ1ZTU5Yzg0ZjY2ZDUyYjI0YmMxZjg4MmI5ZTkxODQzMmEzNjgwMmMzMmQ5N2JjIn0=', '2017-10-20 15:47:53', NULL),
	(2, 'system', 'siteLogo', 'site/uploads/logo/58d4ed26b9a8c-logo.png', '2016-12-21 10:00:00', NULL),
	(3, 'system', 'favicon', 'favicon.ico', '2016-12-21 10:00:00', NULL);
/*!40000 ALTER TABLE `configurations` ENABLE KEYS */;

-- Dumping structure for table kreditplus.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.contact: ~0 rows (approximately)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `section_id`, `alamat`, `telp`, `fax`, `email`, `description`, `title`) VALUES
	(1, '14.56', 'Office 8, lantai 15, SCBD Lot 28\r\nJl. Jendral Sudirman Kav. 52-53\r\nJakarta 12190', '021-2933 3646', '021-2933 3648', 'cs@kreditplus.com', '<h3>Apa yang Bisa Kami Bantu?</h3>\r\n\r\n<p>Isi Form dibawah untuk mengajukan pertanyaan atau anda dapat datang ke&nbsp;<a href="http://localhost/kreditplus__/contact.php">cabang terdekat kami</a></p>\r\n', 'KANTOR CABANG');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table kreditplus.content
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.content: ~2 rows (approximately)
DELETE FROM `content`;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` (`id`, `section_id`, `title`, `image1`, `image2`, `intro`, `description`) VALUES
	(1, '2.26', 'PROFILE PERUSAHAAN', 'site/uploads/banners/59eff6c96e415-office-01.jpg', 'site/uploads/banners/59eff6c96e615-office-02.jpg', 'PT.Finansia Multi Finance (Kreditplus), merupakan perusahaan yang bergerak di bidang pembiayaan di Indonesia yang didirikan pada tanggal 9 Juni 1994 di Indonesia ternama di Indonesia', '<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>\r\n\r\n<p>Dalam menjalankan usahanya, Kreditplus senantiasa beradaptasi dengan perkembangan jaman. Selain pembiayaan untuk produk sepeda motor, mobil, dan elektronik yang sudah berjalan selama ini, Kreditplus juga mengembangkan penetrasi pembiayaan baru dengan menjalin kerjasama dengan e-commerce channel melalui sistem yang terintegrasi untuk melakukan transaksi online diluar transaksi tunai dan kartu kredit. Sebagai perusahaan pembiayaan, Kreditplus memberikan limit pembiayaan yang maksimal untuk beragam kategori produk dengan jangka waktu pembiayaan yang bervariatif.</p>\r\n\r\n<p>Kreditplus juga memberikan kemudahan dan kenyamanan untuk konsumen Kreditplus melalui kerjasama dengan lebih dari 9.000 jaringan ATM berbagai Bank (BRI, BNI, BCA dan Permata) serta Non-Bank (Kantor Pos, gerai Indomaret dan Alfamart).<br />\r\nKreditplus terus memantapkan langkah dalam bisnis pembiayaan dengan selalu mengikuti perkembangan pasar dan kondisi masyarakat dimana hal ini semakin mematangkan dan mendewasakan Perusahaan. Hal ini dapat terlihat dari pertumbuhan kinerja dan keuangan Perusahaan, serta penghargaan yang diberikan oleh publik, diantaranya dengan mendapatkan predikat dengan kinerja &quot;Sangat Bagus&quot; untuk Kategori Perusahaan Pembiayaan Beraset 1 Triliun ke atas versi Majalah Info Bank.</p>\r\n\r\n<p>Kecepatan pelayanan dalam pengajuan aplikasi, kemudahan syarat dan pembayaran yang dipertahankan oleh Perusahaan sampai dengan saat ini telah menjadi unggulan dari Kreditplus untuk bersaing dengan perusahaan pembiayan lainnya.</p>\r\n'),
	(2, '16.57', 'FORM PENGAJUAN KREDIT', NULL, NULL, 'Saya dengan ini mengajukan pembiayaan (kredit) untuk pembelian produk :', NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;

-- Dumping structure for table kreditplus.content-kreditplus
CREATE TABLE IF NOT EXISTS `content-kreditplus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.content-kreditplus: ~3 rows (approximately)
DELETE FROM `content-kreditplus`;
/*!40000 ALTER TABLE `content-kreditplus` DISABLE KEYS */;
INSERT INTO `content-kreditplus` (`id`, `section_id`, `title`, `image`, `intro`, `description`) VALUES
	(2, '11.49', 'FITUR KREDITPLUS MOBILE', 'site/uploads/banners/59f034dde724b-promo-img2.jpg', '<h3>Kreditplus Mobile adalah aplikasi jasa pembiayaan konsumen dari Kreditplus yang menawarkan berbagai kemudahan dan manfaat bagi seluruh pengguna (member maupun non-member Kreditplus) dalam satu genggaman.</h3>\r\n\r\n<p>Sesuai dengan motto kami yaitu cepat, mudah, dan aman, nikmati kecepatan informasi dan kemudahan pengajuan kredit sampai dengan pembayaran langsung dari smartphone anda.</p>\r\n', '<p>Anda dapat mulai mengembangkan usaha impian anda dengan layanan modal usaha maupun multiguna motor dan mobil dari Kreditplus serta penuhi semua kebutuhan elektronik anda dengan layanan multiguna barang.</p>\r\n\r\n<p>Sementara tersedia untuk wilayah Jabodetabek.<br />\r\nInformasi lebih lanjut hubungi&nbsp;<a href="http://localhost/kreditplus__/information_promo_detail2.php"><strong>Contact Center KreditPlus 1500 605.</strong></a></p>\r\n'),
	(3, '12.51', 'FITUR KREDITMU', 'site/uploads/banners/59f036bfb5058-promo-img3.jpg', '<h3>Kreditmu adalah metode pembayaran &quot;CICILAN TANPA KARTU KREDIT&quot; dari Kreditplus (PT.Finansia Multifinance). Dengan kreditmu, Anda bisa membeli barang dengan cara dicicil dengan periode dari 3, 6, sampai 12 bulan.</h3>\r\n\r\n<p>Dengan mendafat di Kreditmu, Anda akan diberikan fasilitas limit cicialan dengan cepat yang bisa digunakan untuk berbelanja secara online (elevenia, jd.id, pasarwarga, livaza) &quot;TANPA KARTU KREDIT TANPA RIBET&quot;.</p>\r\n', '<p>Kreditmu adalah metode pembayaran &quot;CICILAN TANPA KARTU KREDIT&quot; dari Kreditplus (PT.Finansia Multifinance). Dengan kreditmu, Anda bisa membeli barang dengan cara dicicil dengan periode dari 3, 6, sampai 12 bulan.<br />\r\nDengan mendafat di Kreditmu, Anda akan diberikan fasilitas limit cicialan dengan cepat yang bisa digunakan untuk berbelanja secara online (elevenia, jd.id, pasarwarga, livaza) &quot;TANPA KARTU KREDIT TANPA RIBET&quot;.</p>\r\n'),
	(4, '11.51', 'FITUR KREDITPLUS MOBILE', 'site/uploads/banners/59f5e37a3ff1f-promo-img2.jpg', '<h3>Kreditplus Mobile adalah aplikasi jasa pembiayaan konsumen dari Kreditplus yang menawarkan berbagai kemudahan dan manfaat bagi seluruh pengguna (member maupun non-member Kreditplus) dalam satu genggaman.</h3>\r\n\r\n<p>Sesuai dengan motto kami yaitu cepat, mudah, dan aman, nikmati kecepatan informasi dan kemudahan pengajuan kredit sampai dengan pembayaran langsung dari smartphone anda.</p>\r\n', '<p>Anda dapat mulai mengembangkan usaha impian anda dengan layanan modal usaha maupun multiguna motor dan mobil dari Kreditplus serta penuhi semua kebutuhan elektronik anda dengan layanan multiguna barang.</p>\r\n\r\n<p>Sementara tersedia untuk wilayah Jabodetabek.<br />\r\nInformasi lebih lanjut hubungi&nbsp;<a href="http://localhost/kreditplus__/information_promo_detail2.php"><strong>Contact Center KreditPlus 1500 605.</strong></a></p>\r\n\r\n<p>&nbsp;</p>\r\n');
/*!40000 ALTER TABLE `content-kreditplus` ENABLE KEYS */;

-- Dumping structure for table kreditplus.content-produk
CREATE TABLE IF NOT EXISTS `content-produk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.content-produk: ~4 rows (approximately)
DELETE FROM `content-produk`;
/*!40000 ALTER TABLE `content-produk` DISABLE KEYS */;
INSERT INTO `content-produk` (`id`, `section_id`, `title`, `intro`, `description`) VALUES
	(1, '7.37', 'PINJAMAN USAHA', 'Kreditplus memberikan solusi kebutuhan pengadaan barang modal dan bahan baku dengan proses yang mudah, cepat dan aman.', '<p>Berbagai kemudahan yang ditawarkan Kreditplus yaitu :</p>\r\n\r\n<ol>\r\n	<li>3 jam sudah bisa transaksi</li>\r\n	<li>Cukup dengan melampirkan invoice/bon/kwitansi dari penyedia barang modal dan atau bahan baku</li>\r\n	<li>Jangka waktu pembiayaan mulai dari 9 hingga 47 bulan</li>\r\n	<li>Jaminan BPKB &ldquo;Mobil &amp; Motor&rdquo;</li>\r\n	<li>Pembayaran angsuran yang mudah melalui berbagai payment point</li>\r\n</ol>\r\n\r\n<p>Berikut adalah persyaratan aplikasi pengajuan pinjaman usaha:&nbsp;</p>\r\n'),
	(2, '8.41', 'PEMBELIAN MOBIL', 'Kreditplus membantu konsumen mewujudkan impian untuk memiliki mobil impian dengan harga yang terjangkau.', '<p>Solusi pembiayaan kendaraan mobil &amp; motor anda dengan proses yang mudah, cepat dan aman. Berbagai kemudahan yang ditawarkan Kreditplus yaitu :</p>\r\n\r\n<ol>\r\n	<li>3 jam sudah bisa transaksi</li>\r\n	<li>Membiayai kendaraan Jepang ataupun non jepang</li>\r\n	<li>Asuransi atas mobil &amp; motor yang dibiayai sepanjang masa pembiayaan</li>\r\n	<li>Asuransi jiwa atas konsumen yang mengajukan pembiayaan</li>\r\n	<li>Dapat membiayai kendaraan hingga 10 tahun termasuk tenor</li>\r\n	<li>Jangka waktu pembiayaan mulai dari 9 hingga 47 bulan</li>\r\n	<li>Pembayaran angsuran yang mudah melalui berbagai payment point</li>\r\n</ol>\r\n\r\n<p>Berikut adalah persyaratan aplikasi pengajuan kredit mobil:</p>\r\n'),
	(3, '9.43', 'PEMBELIAN MOTOR', 'Kredit Plus memberikan solusi pembiayaan motor anda dengan proses yang mudah, cepat dan aman.', '<p>Berbagai kemudahan yang ditawarkan Kreditplus yaitu :</p>\r\n\r\n<ol>\r\n	<li>3 jam sudah bisa transaksi</li>\r\n	<li>Membiayai kendaraan Jepang ataupun non jepang</li>\r\n	<li>Asuransi atas mobil &amp; motor yang dibiayai sepanjang masa pembiayaan</li>\r\n	<li>Asuransi jiwa atas konsumen yang mengajukan pembiayaan</li>\r\n	<li>Dapat membiayai kendaraan hingga 10 tahun termasuk tenor</li>\r\n	<li>Jangka waktu pembiayaan mulai dari 9 hingga 47 bulan</li>\r\n	<li>Pembayaran angsuran yang mudah melalui berbagai payment point</li>\r\n</ol>\r\n\r\n<p>Berikut adalah persyaratan aplikasi pengajuan kredit motor:&nbsp;</p>\r\n'),
	(4, '10.47', 'PINJAMAN USAHA', 'Kreditplus memberikan solusi kebutuhan pengadaan barang modal dan bahan baku dengan proses yang mudah, cepat dan aman.', '<p>Berbagai kemudahan yang ditawarkan Kreditplus yaitu :</p>\r\n\r\n<ol>\r\n	<li>3 jam sudah bisa transaksi</li>\r\n	<li>Cukup dengan melampirkan invoice/bon/kwitansi dari penyedia barang modal dan atau bahan baku</li>\r\n	<li>Jangka waktu pembiayaan mulai dari 9 hingga 47 bulan</li>\r\n	<li>Jaminan BPKB &ldquo;Mobil &amp; Motor&rdquo;</li>\r\n	<li>Pembayaran angsuran yang mudah melalui berbagai payment point</li>\r\n</ol>\r\n\r\n<p>Berikut adalah persyaratan aplikasi pengajuan pinjaman usaha:</p>\r\n');
/*!40000 ALTER TABLE `content-produk` ENABLE KEYS */;

-- Dumping structure for table kreditplus.content_i18n
CREATE TABLE IF NOT EXISTS `content_i18n` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `content_id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.content_i18n: ~0 rows (approximately)
DELETE FROM `content_i18n`;
/*!40000 ALTER TABLE `content_i18n` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_i18n` ENABLE KEYS */;

-- Dumping structure for table kreditplus.desc_prestasi
CREATE TABLE IF NOT EXISTS `desc_prestasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.desc_prestasi: ~0 rows (approximately)
DELETE FROM `desc_prestasi`;
/*!40000 ALTER TABLE `desc_prestasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `desc_prestasi` ENABLE KEYS */;

-- Dumping structure for table kreditplus.goodcorporategov
CREATE TABLE IF NOT EXISTS `goodcorporategov` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.goodcorporategov: ~0 rows (approximately)
DELETE FROM `goodcorporategov`;
/*!40000 ALTER TABLE `goodcorporategov` DISABLE KEYS */;
INSERT INTO `goodcorporategov` (`id`, `section_id`, `title`, `image`, `intro`, `description`) VALUES
	(1, '6.34', 'PENERAPAN GOOD CORPORATE GOVERNANCE', 'site/uploads/banners/59effeaad55d4-gcg-img.jpg', '<h3>The practice of Good Corporate Governance (GCG) becomes essential in the management of the Company</h3>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>\r\n', '<h4>This is Lorem Ipsum</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>\r\n\r\n<h4>This is Lorem Ipsum</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>\r\n');
/*!40000 ALTER TABLE `goodcorporategov` ENABLE KEYS */;

-- Dumping structure for table kreditplus.histories
CREATE TABLE IF NOT EXISTS `histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `role_level` smallint(5) unsigned NOT NULL,
  `action` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `actor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `properties` text COLLATE utf8_unicode_ci NOT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=412 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.histories: ~406 rows (approximately)
DELETE FROM `histories`;
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
INSERT INTO `histories` (`id`, `parent_id`, `role_level`, `action`, `actor`, `properties`, `create_on`) VALUES
	(1, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-20 16:30:27'),
	(2, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-20 16:34:26'),
	(3, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiVGVudGFuZyBLYW1pIjt9', '2017-10-20 16:38:30'),
	(4, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 16:39:44'),
	(5, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 16:42:24'),
	(6, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo3OiJEeW5hbWljIjt9', '2017-10-20 16:44:14'),
	(7, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo3OiJEeW5hbWljIjt9', '2017-10-20 16:44:56'),
	(8, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 16:45:47'),
	(9, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-20 16:46:46'),
	(10, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiVGVudGFuZyBLYW1pIjt9', '2017-10-20 16:47:26'),
	(11, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiVGVudGFuZyBLYW1pIjt9', '2017-10-20 16:47:45'),
	(12, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 16:49:54'),
	(13, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-20 16:51:47'),
	(14, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo1OiJQb2R1ayI7fQ==', '2017-10-20 17:03:13'),
	(15, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 17:04:32'),
	(16, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 17:04:47'),
	(17, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-20 17:05:17'),
	(18, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-20 17:07:46'),
	(19, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo2OiJQcm9kdWsiO30=', '2017-10-20 17:13:03'),
	(20, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 17:27:23'),
	(21, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-20 17:28:48'),
	(22, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-20 17:29:32'),
	(23, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-20 17:31:20'),
	(24, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-20 17:31:39'),
	(25, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-20 17:31:58'),
	(26, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiS3JlZGl0cGx1c2t1Ijt9', '2017-10-20 17:34:24'),
	(27, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-20 17:36:56'),
	(28, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-20 17:37:42'),
	(29, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMToiSW5mb3JtYXRpb24iO30=', '2017-10-20 17:42:11'),
	(30, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-20 17:42:54'),
	(31, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-20 17:47:05'),
	(32, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-20 17:49:15'),
	(33, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-20 17:50:15'),
	(34, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-20 17:51:21'),
	(35, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-20 17:52:33'),
	(36, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNToiSGkgS3JlZGl0cGx1c2t1Ijt9', '2017-10-20 17:59:44'),
	(37, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNToiSGkgS3JlZGl0cGx1c2t1Ijt9', '2017-10-21 12:51:57'),
	(38, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 12:52:29'),
	(39, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 12:52:47'),
	(40, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 12:53:12'),
	(41, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRhY3QiO30=', '2017-10-21 12:57:11'),
	(42, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiUGVuZ2FqdWFuIEtyZWRpdCI7fQ==', '2017-10-21 13:10:25'),
	(43, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 13:13:00'),
	(44, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:13:47'),
	(45, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJwZW5nYWp1YW5fa3JlZGl0Ijt9', '2017-10-21 13:16:34'),
	(46, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJwZW5nYWp1YW5fa3JlZGl0Ijt9', '2017-10-21 13:19:58'),
	(47, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJwZW5nYWp1YW5fa3JlZGl0Ijt9', '2017-10-21 13:25:11'),
	(48, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vdG9yIjt9', '2017-10-21 13:30:54'),
	(49, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:31:33'),
	(50, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:31:52'),
	(51, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:32:13'),
	(52, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:32:27'),
	(53, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:32:43'),
	(54, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:33:12'),
	(55, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 13:34:32'),
	(56, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:42:06'),
	(57, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:42:12'),
	(58, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:42:19'),
	(59, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:42:27'),
	(60, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:42:33'),
	(61, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:42:51'),
	(62, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 13:43:04'),
	(63, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vdG9yIjt9', '2017-10-21 13:43:19'),
	(64, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vdG9yIjt9', '2017-10-21 13:43:51'),
	(65, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:44:24'),
	(66, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:44:51'),
	(67, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:45:13'),
	(68, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:45:28'),
	(69, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:45:44'),
	(70, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:46:00'),
	(71, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 13:47:45'),
	(72, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vYmlsIjt9', '2017-10-21 13:48:49'),
	(73, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:49:18'),
	(74, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 13:50:57'),
	(75, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:51:23'),
	(76, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:51:40'),
	(77, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:51:56'),
	(78, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:52:11'),
	(79, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:52:36'),
	(80, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNzoiUHJvZHVrIEVsZWt0cm9uaWsiO30=', '2017-10-21 13:56:21'),
	(81, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 13:56:53'),
	(82, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 13:57:48'),
	(83, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:58:15'),
	(84, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:58:34'),
	(85, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:58:53'),
	(86, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:59:07'),
	(87, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 13:59:23'),
	(88, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNzoiS3JlZGl0cGx1cyBNb2JpbGUiO30=', '2017-10-21 14:02:50'),
	(89, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:03:19'),
	(90, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 14:04:53'),
	(91, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNDoiUGluamFtYW4gVXNhaGEiO30=', '2017-10-21 14:08:50'),
	(92, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:09:23'),
	(93, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 14:10:17'),
	(94, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 14:10:37'),
	(95, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 14:10:52'),
	(96, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 14:11:08'),
	(97, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 14:11:24'),
	(98, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InBlbmdhanVhbiI7fQ==', '2017-10-21 14:11:42'),
	(99, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-21 14:12:58'),
	(100, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJTaW11bGFzaSI7fQ==', '2017-10-21 14:16:23'),
	(101, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:17:31'),
	(102, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJLcmVkaXRtdSI7fQ==', '2017-10-21 14:27:17'),
	(103, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:27:41'),
	(104, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 14:28:48'),
	(105, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMToiQ2FyZWVyIExpc3QiO30=', '2017-10-21 14:34:57'),
	(106, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 14:36:44'),
	(107, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-21 14:37:49'),
	(108, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-21 14:38:40'),
	(109, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-21 14:39:26'),
	(110, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-21 14:39:58'),
	(111, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-21 14:40:26'),
	(112, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:42:02'),
	(113, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-21 14:44:22'),
	(114, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:45:05'),
	(115, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 14:46:51'),
	(116, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo5OiJWaXNpIE1pc2kiO30=', '2017-10-21 14:52:06'),
	(117, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo5OiJWaXNpIE1pc2kiO30=', '2017-10-21 14:52:43'),
	(118, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 14:53:08'),
	(119, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:53:27'),
	(120, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InZpc2ltaXNpIjt9', '2017-10-21 14:54:54'),
	(121, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMDoiTWFuYWdlbWVudCI7fQ==', '2017-10-21 14:56:59'),
	(122, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 14:57:23'),
	(123, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 15:00:02'),
	(124, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-21 15:02:18'),
	(125, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 15:02:46'),
	(126, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:06:37'),
	(127, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-21 15:10:39'),
	(128, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:10:49'),
	(129, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-21 15:11:29'),
	(130, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 15:11:52'),
	(131, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:16:27'),
	(132, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-21 15:29:00'),
	(133, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:29:11'),
	(134, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-21 15:35:15'),
	(135, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:35:42'),
	(136, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:35:59'),
	(137, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 15:36:17'),
	(138, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEzOiJkZXNjX3ByZXN0YXNpIjt9', '2017-10-21 15:36:53'),
	(139, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:41:01'),
	(140, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-21 15:41:16'),
	(141, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InByZXN0YXNpIjt9', '2017-10-21 15:43:43'),
	(142, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InByZXN0YXNpIjt9', '2017-10-21 15:45:32'),
	(143, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InByZXN0YXNpIjt9', '2017-10-21 15:45:54'),
	(144, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoyNjoiR29vZCBDb3Jwb3JhdGUgR292ZXJuYW5jZSAiO30=', '2017-10-21 15:48:28'),
	(145, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-21 15:49:04'),
	(146, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-21 15:50:16'),
	(147, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEwOiJzbGlkZV9ob21lIjt9', '2017-10-24 01:12:08'),
	(148, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEwOiJzbGlkZV9ob21lIjt9', '2017-10-24 01:12:12'),
	(149, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEyOiJzZXJ2aWNlX2hvbWUiO30=', '2017-10-24 01:12:18'),
	(150, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 01:12:36'),
	(151, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEwOiJzbGlkZV9ob21lIjt9', '2017-10-24 01:14:17'),
	(152, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEwOiJzbGlkZV9ob21lIjt9', '2017-10-24 01:14:53'),
	(153, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 01:15:14'),
	(154, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEyOiJzZXJ2aWNlX2hvbWUiO30=', '2017-10-24 01:16:24'),
	(155, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 01:17:01'),
	(156, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-24 02:08:38'),
	(157, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-24 07:57:49'),
	(158, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-24 07:58:28'),
	(159, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:01:53'),
	(160, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:01:58'),
	(161, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:02:01'),
	(162, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:04:41'),
	(163, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:09:56'),
	(164, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:10:24'),
	(165, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:18:57'),
	(166, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:19:00'),
	(167, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:30:31'),
	(168, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-24 08:35:21'),
	(169, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:35:39'),
	(170, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:41:21'),
	(171, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-24 08:41:32'),
	(172, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:43:39'),
	(173, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:44:01'),
	(174, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:44:38'),
	(175, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:44:56'),
	(176, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-24 08:45:32'),
	(177, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-25 01:36:47'),
	(178, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 01:36:58'),
	(179, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 01:37:01'),
	(180, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 01:37:03'),
	(181, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-25 01:37:56'),
	(182, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo0OiJIb21lIjt9', '2017-10-25 01:44:22'),
	(183, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 01:47:18'),
	(184, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6InNsaWRlIjt9', '2017-10-25 01:48:27'),
	(185, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6InNsaWRlIjt9', '2017-10-25 01:48:56'),
	(186, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 01:53:50'),
	(187, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImxheWFuYW4iO30=', '2017-10-25 01:54:41'),
	(188, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:08:14'),
	(189, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-25 02:13:10'),
	(190, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-25 02:13:31'),
	(191, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-25 02:13:49'),
	(192, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-25 02:14:30'),
	(193, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6InByb2R1ayI7fQ==', '2017-10-25 02:16:29'),
	(194, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiVGVudGFuZyBLYW1pIjt9', '2017-10-25 02:19:14'),
	(195, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:20:40'),
	(196, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 02:20:54'),
	(197, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:24:53'),
	(198, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-25 02:28:25'),
	(199, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo5OiJWaXNpIE1pc2kiO30=', '2017-10-25 02:34:48'),
	(200, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:35:03'),
	(201, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InZpc2ltaXNpIjt9', '2017-10-25 02:35:43'),
	(202, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:36:21'),
	(203, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 02:36:35'),
	(204, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMDoiTWFuYWdlbWVudCI7fQ==', '2017-10-25 02:41:30'),
	(205, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:41:48'),
	(206, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:42:05'),
	(207, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 02:42:19'),
	(208, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjEwOiJtYW5hZ2VtZW50Ijt9', '2017-10-25 02:45:04'),
	(209, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJQcmVzdGFzaSI7fQ==', '2017-10-25 02:48:15'),
	(210, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:48:37'),
	(211, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:48:54'),
	(212, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InByZXN0YXNpIjt9', '2017-10-25 02:52:25'),
	(213, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 02:52:52'),
	(214, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjg6InByZXN0YXNpIjt9', '2017-10-25 02:53:53'),
	(215, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoyNToiR09PRCBDT1JQT1JBVEUgR09WRVJOQU5DRSI7fQ==', '2017-10-25 02:59:05'),
	(216, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:59:28'),
	(217, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 02:59:51'),
	(218, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJnb29kY29ycG9yYXRlZ292Ijt9', '2017-10-25 03:02:02'),
	(219, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 03:02:28'),
	(220, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 03:47:17'),
	(221, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 03:48:53'),
	(222, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 03:58:12'),
	(223, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 03:58:30'),
	(224, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo2OiJQcm9kdWsiO30=', '2017-10-25 04:02:22'),
	(225, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:02:31'),
	(226, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:02:52'),
	(227, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE0OiJjb250ZW50LXByb2R1ayI7fQ==', '2017-10-25 04:04:48'),
	(228, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:05:15'),
	(229, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 04:05:32'),
	(230, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:20:22'),
	(231, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:20:41'),
	(232, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:21:17'),
	(233, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:21:27'),
	(234, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:21:38'),
	(235, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:21:47'),
	(236, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vYmlsIjt9', '2017-10-25 04:23:12'),
	(237, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:23:33'),
	(238, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 04:23:50'),
	(239, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:24:15'),
	(240, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE0OiJjb250ZW50LXByb2R1ayI7fQ==', '2017-10-25 04:26:24'),
	(241, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 04:27:20'),
	(242, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:27:56'),
	(243, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:28:15'),
	(244, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:28:26'),
	(245, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:28:35'),
	(246, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:28:46'),
	(247, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:28:56'),
	(248, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiUHJvZHVrIE1vdG9yIjt9', '2017-10-25 04:30:06'),
	(249, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:30:47'),
	(250, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:30:59'),
	(251, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:31:19'),
	(252, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 04:31:33'),
	(253, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE0OiJjb250ZW50LXByb2R1ayI7fQ==', '2017-10-25 04:32:13'),
	(254, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:32:26'),
	(255, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:32:36'),
	(256, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:32:45'),
	(257, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:32:56'),
	(258, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 04:33:06'),
	(259, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoyMToiUElOSkFNQU4gTU9EQUwgIFVTQUhBIjt9', '2017-10-25 04:34:34'),
	(260, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:35:30'),
	(261, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:35:49'),
	(262, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 04:36:04'),
	(263, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 04:36:23'),
	(264, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE0OiJjb250ZW50LXByb2R1ayI7fQ==', '2017-10-25 06:05:44'),
	(265, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 06:06:02'),
	(266, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 06:06:12'),
	(267, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 06:06:22'),
	(268, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 06:06:32'),
	(269, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJ0YWJlbF9wZW5nYWp1YW4iO30=', '2017-10-25 06:06:44'),
	(270, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMjoiS3JlZGl0cGx1c2t1Ijt9', '2017-10-25 06:45:00'),
	(271, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 06:45:30'),
	(272, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 06:46:06'),
	(273, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 06:46:38'),
	(274, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-25 06:50:17'),
	(275, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-25 06:50:43'),
	(276, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-25 06:53:17'),
	(277, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJLcmVkaXRtdSI7fQ==', '2017-10-25 06:58:50'),
	(278, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 06:59:27'),
	(279, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 07:00:08'),
	(280, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 07:00:29'),
	(281, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-25 07:01:19'),
	(282, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-25 07:57:45'),
	(283, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxMToiSW5mb3JtYXRpb24iO30=', '2017-10-25 08:08:55'),
	(284, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 08:09:35'),
	(285, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 08:10:00'),
	(286, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 08:10:41'),
	(287, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 08:11:03'),
	(288, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-25 08:11:21'),
	(289, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-25 08:12:31'),
	(290, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNDoiSEkhIEtSRURJVFBMVVMiO30=', '2017-10-25 08:51:02'),
	(291, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-25 08:51:26'),
	(292, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRhY3QiO30=', '2017-10-25 08:54:37'),
	(293, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo4OiJTaW11bGFzaSI7fQ==', '2017-10-25 09:57:04'),
	(294, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiUGVuZ2FqdWFuIEtyZWRpdCI7fQ==', '2017-10-27 02:38:26'),
	(295, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 02:38:44'),
	(296, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-27 02:40:51'),
	(297, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-27 02:41:08'),
	(298, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 02:44:58'),
	(299, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 02:45:19'),
	(300, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImJyYW5kIjt9', '2017-10-27 02:59:36'),
	(301, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImJyYW5kIjt9', '2017-10-27 03:00:20'),
	(302, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImJyYW5kIjt9', '2017-10-27 03:00:30'),
	(303, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImJyYW5kIjt9', '2017-10-27 03:00:40'),
	(304, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiUGVuZ2FqdWFuIEtyZWRpdCI7fQ==', '2017-10-27 03:09:32'),
	(305, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjQ6ImFyZWEiO30=', '2017-10-27 03:38:06'),
	(306, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 04:28:27'),
	(307, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo1OiJLYXJpciI7fQ==', '2017-10-27 07:23:42'),
	(308, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:24:02'),
	(309, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 07:24:15'),
	(310, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:25:49'),
	(311, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:28:17'),
	(312, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:28:30'),
	(313, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:30:13'),
	(314, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:31:14'),
	(315, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:31:43'),
	(316, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:32:07'),
	(317, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:32:33'),
	(318, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjU6ImthcmlyIjt9', '2017-10-27 07:32:56'),
	(319, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo1OiJLYXJpciI7fQ==', '2017-10-27 07:43:38'),
	(320, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:45:54'),
	(321, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:47:52'),
	(322, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:48:09'),
	(323, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 07:50:34'),
	(324, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:18:58'),
	(325, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czo1OiJLYXJpciI7fQ==', '2017-10-27 08:23:02'),
	(326, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 08:23:48'),
	(327, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:24:08'),
	(328, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:25:28'),
	(329, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 08:26:54'),
	(330, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 08:28:37'),
	(331, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 08:29:14'),
	(332, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:29:24'),
	(333, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:29:47'),
	(334, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:30:13'),
	(335, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:33:04'),
	(336, 0, 0, 'update', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 08:34:02'),
	(337, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:34:33'),
	(338, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:34:52'),
	(339, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 08:35:12'),
	(340, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:35:24'),
	(341, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:41:01'),
	(342, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:41:40'),
	(343, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:41:54'),
	(344, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:42:09'),
	(345, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:49:13'),
	(346, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:49:54'),
	(347, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:50:11'),
	(348, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:50:37'),
	(349, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:54:38'),
	(350, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:54:52'),
	(351, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 08:55:03'),
	(352, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 08:56:17'),
	(353, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-27 09:06:17'),
	(354, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 09:13:08'),
	(355, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 09:13:24'),
	(356, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 09:14:11'),
	(357, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 09:14:41'),
	(358, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 09:14:56'),
	(359, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 09:15:38'),
	(360, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 09:16:06'),
	(361, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 09:16:21'),
	(362, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 09:16:50'),
	(363, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 09:17:00'),
	(364, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:09:30'),
	(365, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:09:38'),
	(366, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:09:44'),
	(367, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 10:10:11'),
	(368, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNzoiS3JlZGl0cGx1cyBLYXJpci0iO30=', '2017-10-27 10:13:02'),
	(369, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:13:20'),
	(370, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:13:36'),
	(371, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:13:46'),
	(372, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:14:11'),
	(373, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:14:30'),
	(374, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 10:15:05'),
	(375, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 10:16:13'),
	(376, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:16:54'),
	(377, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:18:09'),
	(378, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:18:17'),
	(379, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:18:30'),
	(380, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE1OiJrcmVkaXRwbHVza2FyaXIiO30=', '2017-10-27 10:18:49'),
	(381, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNzoiS3JlZGl0cGx1cyBLYXJpci0iO30=', '2017-10-27 10:31:40'),
	(382, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czoxNjoiS3JlZGl0cGx1cyBLYXJpciI7fQ==', '2017-10-27 10:32:17'),
	(383, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:32:43'),
	(384, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:32:51'),
	(385, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:33:17'),
	(386, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJrcmVkaXRwbHVzX2thcmlyIjt9', '2017-10-27 10:33:36'),
	(387, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:34:43'),
	(388, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-27 10:35:15'),
	(389, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-27 10:35:27'),
	(390, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-29 12:02:07'),
	(391, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-29 12:02:40'),
	(392, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-29 12:03:14'),
	(393, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE2OiJrcmVkaXRwbHVzX2thcmlyIjt9', '2017-10-29 12:12:02'),
	(394, 0, 0, 'insert', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czozOiJ0ZXMiO30=', '2017-10-29 12:13:07'),
	(395, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-29 12:13:40'),
	(396, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-29 12:14:29'),
	(397, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-29 12:15:21'),
	(398, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-29 12:15:57'),
	(399, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-29 12:20:06'),
	(400, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6ImNvbnRlbnQiO30=', '2017-10-29 12:22:02'),
	(401, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjY6ImJhbm5lciI7fQ==', '2017-10-29 12:22:24'),
	(402, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-29 12:22:48'),
	(403, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjc6InNlY3Rpb24iO30=', '2017-10-29 12:23:08'),
	(404, 0, 0, 'delete', 'redAlderGreatDane', 'YToyOntzOjU6Imdyb3VwIjtzOjQ6Im1lbnUiO3M6NDoiaXRlbSI7czozOiJ0ZXMiO30=', '2017-10-29 12:23:28'),
	(405, 0, 0, 'insert', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-29 12:27:16'),
	(406, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6ImluZm9ybWFzaSI7fQ==', '2017-10-29 12:30:27'),
	(407, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InRlc3RpbW9uaSI7fQ==', '2017-10-29 14:14:10'),
	(408, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InRlc3RpbW9uaSI7fQ==', '2017-10-29 14:14:18'),
	(409, 0, 0, 'delete', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjk6InRlc3RpbW9uaSI7fQ==', '2017-10-29 14:14:25'),
	(410, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-29 14:16:09'),
	(411, 0, 0, 'update', 'redAlderGreatDane', 'YToxOntzOjU6Imdyb3VwIjtzOjE4OiJjb250ZW50LWtyZWRpdHBsdXMiO30=', '2017-10-29 14:19:38');
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;

-- Dumping structure for table kreditplus.informasi
CREATE TABLE IF NOT EXISTS `informasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.informasi: ~1 rows (approximately)
DELETE FROM `informasi`;
/*!40000 ALTER TABLE `informasi` DISABLE KEYS */;
INSERT INTO `informasi` (`id`, `section_id`, `title`, `image`, `type`, `intro`, `description`) VALUES
	(1, '13.53', 'Memilih Mobil Sesuai Dengan Kebutuhan Keluarga', 'site/uploads/banners/59f0476f24aeb-promo-01.jpg', 'promo', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', '<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>\r\n'),
	(2, '13.53', 'Ini Dia Tips Belanja Pintar Dengan Uang THR', 'site/uploads/banners/59f5c9e3a02c3-promo-02.jpg', 'berita', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', '<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>\r\n\r\n<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>\r\n');
/*!40000 ALTER TABLE `informasi` ENABLE KEYS */;

-- Dumping structure for table kreditplus.karir
CREATE TABLE IF NOT EXISTS `karir` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_job` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `penempatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.karir: ~6 rows (approximately)
DELETE FROM `karir`;
/*!40000 ALTER TABLE `karir` DISABLE KEYS */;
INSERT INTO `karir` (`id`, `section_id`, `title_job`, `penempatan`, `description`) VALUES
	(6, '17.61', 'Payroll Supervisor', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n'),
	(7, '17.61', 'Management Trainee', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n'),
	(8, '17.61', 'Credit Analyst', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n'),
	(9, '17.61', 'Payroll Supervisor', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n'),
	(10, '17.61', 'Management Trainee', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n'),
	(11, '17.61', 'Credit Analyst', 'DKI Jakarta', '<ol>\r\n	<li>Usia maksimal 30 tahun.</li>\r\n	<li>Pendidikan minimal S1</li>\r\n	<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>\r\n	<li>Memiliki komunikasi yang baik &amp; mampu menganalisa dengan baik</li>\r\n	<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>\r\n</ol>\r\n');
/*!40000 ALTER TABLE `karir` ENABLE KEYS */;

-- Dumping structure for table kreditplus.kreditplus_karir
CREATE TABLE IF NOT EXISTS `kreditplus_karir` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.kreditplus_karir: ~0 rows (approximately)
DELETE FROM `kreditplus_karir`;
/*!40000 ALTER TABLE `kreditplus_karir` DISABLE KEYS */;
INSERT INTO `kreditplus_karir` (`id`, `section_id`, `title`, `intro`, `description`) VALUES
	(1, '23.78', 'MENGAPA BERGABUNG DENGAN KREDITPLUS?', 'Kreditplus membuka peluang bagi professional muda/lulusan baru untuk pengalaman belajar sekaligus bekerja yang mengasah dan membangun kapabilitas diri. Bergabunglah bersama kami.', '<p>Mencari individu-individu berbakat dan berpotensi yang mampu mencerminkan tata nilai perusahaan untuk menjadi bagian dari tim yang mengakselerasi pencapaian visi. Kembangkanlah ide, kreativitas dan inovasi anda sebagai solusi dalam rangka peningkatan kualitas operasional sampai dengan pengembangan bisnis. Temukan berbagai pekerjaan dan tugas yang menantang dan berbagai pilihan tempat bekerja. Anda akan bekerja sama dengan rekan kerja dari berbagai latar belakang pendidikan, profesi dan budaya. Temukan pengalaman berharga dan rasakan bagaimana semua hal tersebut dapat mengembangkan kemampuan dan kompetensi anda.</p>\r\n\r\n<h3><span style="color:#1abc9c">APA YANG KAMI CARI?</span></h3>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>\r\n\r\n<h4>Individu Berbakat dan Potensial</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>\r\n\r\n<h4>Kreatif dan Inovatif</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>\r\n\r\n<h4>Individu Berbakat dan Potensial</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>\r\n\r\n<h4>Kreatif dan Inovatif</h4>\r\n\r\n<p>This is Photoshop&#39;s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. This is Photoshop&#39;s version of Lorem Ipsum. Proin gravid.</p>\r\n');
/*!40000 ALTER TABLE `kreditplus_karir` ENABLE KEYS */;

-- Dumping structure for table kreditplus.layanan
CREATE TABLE IF NOT EXISTS `layanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.layanan: ~0 rows (approximately)
DELETE FROM `layanan`;
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
INSERT INTO `layanan` (`id`, `section_id`, `title`, `image1`, `image2`, `intro`, `description`) VALUES
	(1, '1.23', 'LAYANAN KREDITPLUS', 'site/uploads/slides/59efeee16c45c-motorcycle-img.png', 'site/uploads/slides/59efeee16c849-car-img.png', 'Kreditplus merupakan perusahaan yang bergerak di bidang pembiayaan', '<p>Kreditplus didirikan pada 9 Juni 1994 dan memiliki lisensi pembiayaan modal kerja. Saat ini bisnis Kreditplus fokus pada pembiayaan mobil, motor, dan elektronik. berikut adalah fitur kreditplus yang mungkin membantu anda</p>\r\n');
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;

-- Dumping structure for table kreditplus.layanan_i18n
CREATE TABLE IF NOT EXISTS `layanan_i18n` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `service_home_id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.layanan_i18n: ~0 rows (approximately)
DELETE FROM `layanan_i18n`;
/*!40000 ALTER TABLE `layanan_i18n` DISABLE KEYS */;
/*!40000 ALTER TABLE `layanan_i18n` ENABLE KEYS */;

-- Dumping structure for table kreditplus.leads
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `landing_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lead_data` text COLLATE utf8_unicode_ci NOT NULL,
  `statuses` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.leads: ~0 rows (approximately)
DELETE FROM `leads`;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;

-- Dumping structure for table kreditplus.management
CREATE TABLE IF NOT EXISTS `management` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.management: ~0 rows (approximately)
DELETE FROM `management`;
/*!40000 ALTER TABLE `management` DISABLE KEYS */;
INSERT INTO `management` (`id`, `section_id`, `title`, `image`, `description`) VALUES
	(1, '4.30', 'MANAJEMEN', 'site/uploads/banners/59effab00ebcf-management.png', '<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>\r\n');
/*!40000 ALTER TABLE `management` ENABLE KEYS */;

-- Dumping structure for table kreditplus.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `lead` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `external_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_system` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `sequence` int(10) unsigned NOT NULL,
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permalink` (`permalink`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.menus: ~18 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `parent_id`, `lead`, `title`, `permalink`, `external_link`, `template`, `meta_title`, `meta_description`, `is_active`, `is_system`, `sequence`, `create_on`, `last_update`) VALUES
	(1, 0, 'Contact Us', 'Home', '/', NULL, 'base', 'Home', 'Home', '1', '0', 1, '2017-10-25 01:44:22', NULL),
	(2, 0, 'Contact Us', 'Tentang Kami', 'tentang-kami', NULL, 'tentang-kami', 'Tentang Kami', 'Tentang Kami', '1', '0', 1, '2017-10-25 02:19:14', NULL),
	(3, 2, 'Contact Us', 'Visi Misi', 'visimisi', NULL, 'visimisi', 'Visi Misi', 'Visi Misi', '1', '0', 1, '2017-10-25 02:34:48', NULL),
	(4, 2, 'Contact Us', 'Management', 'manajement', NULL, 'management', 'Management', 'Management', '1', '0', 1, '2017-10-25 02:41:30', NULL),
	(5, 2, 'Contact Us', 'Prestasi', 'prestasi', NULL, 'prestasi', 'Prestasi', 'Prestasi', '1', '0', 1, '2017-10-25 02:48:15', NULL),
	(6, 2, 'Contact Us', 'GOOD CORPORATE GOVERNANCE', 'gcg', NULL, 'goodcorporategov', 'GOOD CORPORATE GOVERNANCE', 'GOOD CORPORATE GOVERNANCE', '1', '0', 1, '2017-10-25 02:59:05', NULL),
	(7, 0, 'Contact Us', 'Produk', 'produk', NULL, 'produk', 'Produk', 'Produk', '1', '0', 1, '2017-10-25 04:02:22', NULL),
	(8, 7, 'Contact Us', 'Produk Mobil', 'produk-mobil', NULL, 'produk', 'Produk Mobil', 'Produk Mobil', '1', '0', 1, '2017-10-25 04:23:12', NULL),
	(9, 7, 'Contact Us', 'Produk Motor', 'produk-motor', NULL, 'produk', 'Produk Motor', 'Produk Motor', '1', '0', 1, '2017-10-25 04:30:06', NULL),
	(10, 7, 'Contact Us', 'PINJAMAN MODAL  USAHA', 'pinjaman-usaha', NULL, 'produk', 'PINJAMAN MODAL  USAHA', '', '1', '0', 1, '2017-10-25 04:34:34', NULL),
	(11, 0, 'Contact Us', 'Kreditplusku', 'kreditplus-mobile', NULL, 'kreditplus', 'Kreditplusku', 'Kreditplusku', '1', '0', 1, '2017-10-25 06:45:00', NULL),
	(12, 11, 'Contact Us', 'Kreditmu', 'kreditmu', NULL, 'kreditplus', 'Kreditmu', 'Kreditmu', '1', '0', 1, '2017-10-25 06:58:50', NULL),
	(13, 0, 'Contact Us', 'Information', 'informasi', NULL, 'informasi', 'Information', 'Information', '1', '0', 1, '2017-10-25 08:08:55', NULL),
	(14, 0, 'Contact Us', 'HI! KREDITPLUS', 'contact', NULL, 'contact', 'HI! KREDITPLUS', 'HI! KREDITPLUS', '1', '0', 2, '2017-10-25 08:51:02', NULL),
	(15, 0, 'Contact Us', 'Simulasi', 'simulasi', NULL, 'simulasi', 'Simulasi', 'Simulasi', '1', '0', 3, '2017-10-25 09:57:04', NULL),
	(16, 0, 'Contact Us', 'Pengajuan Kredit', 'pengajuan', NULL, 'pengajuan', 'Pengajuan Kredit', 'Pengajuan Kredit', '1', '0', 4, '2017-10-27 02:38:26', '2017-10-27 03:09:32'),
	(17, 0, 'Contact Us', 'Karir', 'karir', NULL, 'karir', 'Karir', 'Karir', '1', '0', 5, '2017-10-27 07:23:42', NULL),
	(23, 17, 'Contact Us', 'Kreditplus Karir', 'kreditplus-karir', NULL, 'kreditpluskarir', 'Kreditplus Karir', 'Kreditplus Karir', '1', '0', 1, '2017-10-27 10:32:17', NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table kreditplus.menus_i18n
CREATE TABLE IF NOT EXISTS `menus_i18n` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.menus_i18n: ~18 rows (approximately)
DELETE FROM `menus_i18n`;
/*!40000 ALTER TABLE `menus_i18n` DISABLE KEYS */;
INSERT INTO `menus_i18n` (`id`, `lang_code`, `menu_id`, `title`, `permalink`, `meta_title`, `meta_description`, `create_on`) VALUES
	(1, 'id', 1, 'Home', '/', 'Home', 'Home', '2017-10-25 01:44:22'),
	(2, 'id', 2, 'Tentang Kami', 'tentang-kami', 'Tentang Kami', 'Tentang Kami', '2017-10-25 02:19:14'),
	(3, 'id', 3, 'Visi Misi', 'visimisi', 'Visi Misi', 'Visi Misi', '2017-10-25 02:34:48'),
	(4, 'id', 4, 'Management', 'manajement', 'Management', 'Management', '2017-10-25 02:41:30'),
	(5, 'id', 5, 'Prestasi', 'prestasi', 'Prestasi', 'Prestasi', '2017-10-25 02:48:15'),
	(6, 'id', 6, 'GOOD CORPORATE GOVERNANCE', 'gcg', 'GOOD CORPORATE GOVERNANCE', 'GOOD CORPORATE GOVERNANCE', '2017-10-25 02:59:05'),
	(7, 'id', 7, 'Produk', 'produk', 'Produk', 'Produk', '2017-10-25 04:02:22'),
	(8, 'id', 8, 'Produk Mobil', 'produk-mobil', 'Produk Mobil', 'Produk Mobil', '2017-10-25 04:23:12'),
	(9, 'id', 9, 'Produk Motor', 'produk-motor', 'Produk Motor', 'Produk Motor', '2017-10-25 04:30:06'),
	(10, 'id', 10, 'PINJAMAN MODAL  USAHA', 'pinjaman-usaha', 'PINJAMAN MODAL  USAHA', 'PINJAMAN MODAL  USAHA', '2017-10-25 04:34:34'),
	(11, 'id', 11, 'Kreditplusku', 'kreditplus-mobile', 'Kreditplusku', 'Kreditplusku', '2017-10-25 06:45:00'),
	(12, 'id', 12, 'Kreditmu', 'kreditmu', 'Kreditmu', 'Kreditmu', '2017-10-25 06:58:50'),
	(13, 'id', 13, 'Information', 'informasi', 'Information', 'Information', '2017-10-25 08:08:55'),
	(14, 'id', 14, 'HI! KREDITPLUS', 'contact', 'HI! KREDITPLUS', 'HI! KREDITPLUS', '2017-10-25 08:51:02'),
	(15, 'id', 15, 'Simulasi', 'simulasi', 'Simulasi', 'Simulasi', '2017-10-25 09:57:04'),
	(16, 'id', 16, 'Pengajuan Kredit', 'pengajuan', 'Pengajuan Kredit', 'Pengajuan Kredit', '2017-10-27 02:38:26'),
	(17, 'id', 17, 'Karir', 'karir', 'Karir', 'Karir', '2017-10-27 07:23:42'),
	(23, 'id', 23, 'Kreditplus Karir', 'kreditplus-karir', 'Kreditplus Karir', 'Kreditplus Karir', '2017-10-27 10:32:17');
/*!40000 ALTER TABLE `menus_i18n` ENABLE KEYS */;

-- Dumping structure for table kreditplus.menu_positions
CREATE TABLE IF NOT EXISTS `menu_positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `position` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_id-position` (`menu_id`,`position`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.menu_positions: ~18 rows (approximately)
DELETE FROM `menu_positions`;
/*!40000 ALTER TABLE `menu_positions` DISABLE KEYS */;
INSERT INTO `menu_positions` (`id`, `menu_id`, `position`, `create_on`) VALUES
	(1, 1, 'footer', '2017-10-25 01:44:22'),
	(2, 2, 'main', '2017-10-25 02:19:14'),
	(3, 3, 'footer', '2017-10-25 02:34:48'),
	(4, 4, 'footer', '2017-10-25 02:41:30'),
	(5, 5, 'footer', '2017-10-25 02:48:15'),
	(6, 6, 'footer', '2017-10-25 02:59:05'),
	(7, 7, 'main', '2017-10-25 04:02:22'),
	(8, 8, 'footer', '2017-10-25 04:23:12'),
	(9, 9, 'footer', '2017-10-25 04:30:06'),
	(10, 10, 'footer', '2017-10-25 04:34:34'),
	(11, 11, 'main', '2017-10-25 06:45:00'),
	(12, 12, 'footer', '2017-10-25 06:58:50'),
	(13, 13, 'main', '2017-10-25 08:08:55'),
	(14, 14, 'main', '2017-10-25 08:51:02'),
	(15, 15, 'footer', '2017-10-25 09:57:04'),
	(16, 16, 'footer', '2017-10-27 02:38:26'),
	(17, 17, 'footer', '2017-10-27 07:23:42'),
	(23, 23, 'footer', '2017-10-27 10:32:17');
/*!40000 ALTER TABLE `menu_positions` ENABLE KEYS */;

-- Dumping structure for table kreditplus.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.migrations: ~48 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2017_10_13_034854_create_admin_password_resets_class', 1),
	(2, '2017_10_13_034854_create_admin_roles_class', 1),
	(3, '2017_10_13_034854_create_admins_class', 1),
	(4, '2017_10_13_034854_create_configurations_class', 1),
	(5, '2017_10_13_034854_create_histories_class', 1),
	(6, '2017_10_13_034854_create_leads_class', 1),
	(7, '2017_10_13_034854_create_menu_positions_class', 1),
	(8, '2017_10_13_034854_create_menus_class', 1),
	(9, '2017_10_13_034854_create_pages_class', 1),
	(10, '2017_10_13_034854_create_permissions_class', 1),
	(11, '2017_10_13_034854_create_roles_class', 1),
	(12, '2017_10_13_034854_create_sections_class', 1),
	(13, '2017_10_13_034854_create_slides_class', 1),
	(14, '2017_10_20_154754_create_content_class', 2),
	(15, '2017_10_20_154754_create_informasi_class', 2),
	(16, '2017_10_20_154754_create_karir_class', 2),
	(17, '2017_10_20_154754_create_kreditplus_karir_class', 2),
	(18, '2017_10_20_154754_create_pengajuan_class', 2),
	(19, '2017_10_20_154754_create_pengajuan_kredit_class', 2),
	(20, '2017_10_20_154754_create_prestasi_class', 2),
	(21, '2017_10_20_154754_create_submenu_class', 2),
	(22, '2017_10_20_154754_create_visimisi_class', 2),
	(23, '2017_10_24_062746_create_contact_class', 3),
	(24, '2017_10_24_062746_create_desc_prestasi_class', 4),
	(26, '2017_10_24_062746_create_service_home_class', 5),
	(27, '2017_10_24_062746_create_slide_home_class', 5),
	(28, '2017_10_24_063228_create_content_i18n_class', 5),
	(29, '2017_10_24_063228_create_menus_i18n_class', 5),
	(30, '2017_10_24_063228_create_pages_i18n_class', 5),
	(31, '2017_10_24_063228_create_service_home_i18n_class', 5),
	(32, '2017_10_24_063228_create_slides_i18n_class', 5),
	(33, '2017_10_24_074733_produk', 5),
	(34, '2017_10_25_014120_slides', 6),
	(35, '2017_10_25_015153_layanan', 7),
	(36, '2017_10_24_062746_create_produk_home_class', 8),
	(37, '2017_10_25_020410_produk', 8),
	(38, '2017_10_25_022211_content', 9),
	(39, '2017_10_25_023243_visimisi', 10),
	(40, '2017_10_25_024238_management', 11),
	(41, '2017_10_25_025426_goodcorporategov', 12),
	(42, '2017_10_25_035606_content-produk', 13),
	(43, '2017_10_25_040945_tabel_pengajuan', 14),
	(44, '2017_10_25_063707_content-kreditplus', 15),
	(45, '2017_10_27_025154_brand', 16),
	(46, '2017_10_27_033558_area', 17),
	(47, '2017_10_27_040734_pengajuan_user', 18),
	(48, '2017_10_27_081506_kreditpluskarir', 19),
	(49, '2017_10_29_132100_testimoni', 20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table kreditplus.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.pages: ~0 rows (approximately)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `section_id`, `title`, `intro`, `description`, `create_on`, `last_update`) VALUES
	(1, '1.1', 'Welcome', 'Inspire your self', 'Do not be anxious about tomorrow, for tomorrow will be anxious for itself.  Let the day\'s own trouble be sufficient for the day', '2016-12-21 10:00:00', NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table kreditplus.pages_i18n
CREATE TABLE IF NOT EXISTS `pages_i18n` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(10) unsigned NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `create_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.pages_i18n: ~0 rows (approximately)
DELETE FROM `pages_i18n`;
/*!40000 ALTER TABLE `pages_i18n` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages_i18n` ENABLE KEYS */;

-- Dumping structure for table kreditplus.pengajuan
CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `persyaratan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `karyawan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wiraswasta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profesional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.pengajuan: ~25 rows (approximately)
DELETE FROM `pengajuan`;
/*!40000 ALTER TABLE `pengajuan` DISABLE KEYS */;
INSERT INTO `pengajuan` (`id`, `section_id`, `persyaratan`, `karyawan`, `wiraswasta`, `profesional`) VALUES
	(1, '3.4', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(2, '3.4', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '1'),
	(3, '3.4', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '0', '0', '1'),
	(4, '3.4', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '1', '0'),
	(5, '3.4', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '0', '1'),
	(11, '9.4', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(12, '9.4', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '1'),
	(13, '9.4', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '0', '1', '1'),
	(14, '9.4', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '1', '1'),
	(15, '9.4', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '1', '1'),
	(16, '10.4', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(17, '10.4', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '1'),
	(18, '10.4', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '1', '0', '1'),
	(19, '10.4', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '1', '0'),
	(20, '10.4', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '0', '0'),
	(21, '11.4', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(22, '11.4', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '1'),
	(23, '11.4', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '0', '1', '1'),
	(24, '11.4', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '1', '0', '0'),
	(25, '11.4', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '1', '1'),
	(26, '13.4', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(27, '13.4', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '1'),
	(28, '13.4', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '0', '1', '1'),
	(29, '13.4', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '0', '1'),
	(30, '13.4', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '1', '1');
/*!40000 ALTER TABLE `pengajuan` ENABLE KEYS */;

-- Dumping structure for table kreditplus.pengajuan_kredit
CREATE TABLE IF NOT EXISTS `pengajuan_kredit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.pengajuan_kredit: ~0 rows (approximately)
DELETE FROM `pengajuan_kredit`;
/*!40000 ALTER TABLE `pengajuan_kredit` DISABLE KEYS */;
INSERT INTO `pengajuan_kredit` (`id`, `title1`, `title2`, `title3`, `title4`, `section_id`, `img1`, `img2`, `img3`, `img4`) VALUES
	(2, 'Pengajuan Elektronik', 'Pengajuan Mobil', 'Pengajuan Motor', 'Peminjaman Modal Usaha', '7.8', 'site/uploads/banners/59eb4ab78876b-prod-01.jpg', 'site/uploads/banners/59eb4ab78912f-prod-02.jpg', 'site/uploads/banners/59eb4ab789af3-prod-03.jpg', 'site/uploads/banners/59eb4ab78a4b7-prod-04.jpg');
/*!40000 ALTER TABLE `pengajuan_kredit` ENABLE KEYS */;

-- Dumping structure for table kreditplus.pengajuan_user
CREATE TABLE IF NOT EXISTS `pengajuan_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `brand` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.pengajuan_user: ~2 rows (approximately)
DELETE FROM `pengajuan_user`;
/*!40000 ALTER TABLE `pengajuan_user` DISABLE KEYS */;
INSERT INTO `pengajuan_user` (`id`, `nama`, `alamat`, `ktp`, `telp`, `email`, `rya`, `pesan`, `brand`, `area`) VALUES
	(1, 'sacsacas', 'sadxasdasd', '35345345343', '34343434', 'dgfsdd@dfgfd.gjfg', 'on', 'dfgdsfgdsf', 1, 1),
	(2, 'dewdwed', 'dwdewdwed', '3424234234', '43234234', 'sdfd@fdgfd.fg', 'on', 'fsdfsadffsd', 2, 1);
/*!40000 ALTER TABLE `pengajuan_user` ENABLE KEYS */;

-- Dumping structure for table kreditplus.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `role_id` int(10) unsigned DEFAULT NULL,
  `module` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `panel` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `create_on` datetime NOT NULL,
  UNIQUE KEY `role_id-module-panel-permission` (`role_id`,`module`,`panel`,`permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.permissions: ~17 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`role_id`, `module`, `panel`, `permission`, `create_on`) VALUES
	(1, 'system', 'configurations', 'edit', '2016-12-21 10:00:00'),
	(1, 'system', 'admins', 'create', '2016-12-21 10:00:00'),
	(1, 'system', 'admins', 'edit', '2016-12-21 10:00:00'),
	(1, 'system', 'admins', 'activeness', '2016-12-21 10:00:00'),
	(1, 'system', 'admins', 'delete', '2016-12-21 10:00:00'),
	(1, 'system', 'roles', 'create', '2016-12-21 10:00:00'),
	(1, 'system', 'roles', 'edit', '2016-12-21 10:00:00'),
	(1, 'system', 'roles', 'activeness', '2016-12-21 10:00:00'),
	(1, 'system', 'roles', 'permission', '2016-12-21 10:00:00'),
	(1, 'system', 'menus', 'create', '2016-12-21 10:00:00'),
	(1, 'system', 'menus', 'edit', '2016-12-21 10:00:00'),
	(1, 'system', 'menus', 'activeness', '2016-12-21 10:00:00'),
	(1, 'system', 'menus', 'delete', '2016-12-21 10:00:00'),
	(1, 'system', 'pages', 'create', '2016-12-21 10:00:00'),
	(1, 'system', 'pages', 'edit', '2016-12-21 10:00:00'),
	(1, 'system', 'pages', 'activeness', '2016-12-21 10:00:00'),
	(1, 'system', 'pages', 'delete', '2016-12-21 10:00:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table kreditplus.prestasi
CREATE TABLE IF NOT EXISTS `prestasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.prestasi: ~0 rows (approximately)
DELETE FROM `prestasi`;
/*!40000 ALTER TABLE `prestasi` DISABLE KEYS */;
INSERT INTO `prestasi` (`id`, `section_id`, `title`, `intro`, `image`) VALUES
	(1, '5.32', 'Perusahaan Pembiayaan Terbaik No 1', 'Ajang Infobank Multifinance Award 2011', 'site/uploads/banners/59effcc11ee1d-certificate.jpg');
/*!40000 ALTER TABLE `prestasi` ENABLE KEYS */;

-- Dumping structure for table kreditplus.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.produk: ~4 rows (approximately)
DELETE FROM `produk`;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id`, `section_id`, `title`, `image`, `intro`, `description`) VALUES
	(1, '1.24', 'Pembelian Elektronik', 'site/uploads/slidess/59eff3362275a-prod-01.jpg', 'This is Photoshop\'s version  of Lorem', NULL),
	(2, '1.24', 'Pembelian Mobil', 'site/uploads/slidess/59eff3fd1bc03-prod-02.jpg', 'This is Photoshop\'s version  of Lorem', NULL),
	(3, '1.24', 'Pembelian Motor', 'site/uploads/slidess/59eff35d5f6ba-prod-03.jpg', 'This is Photoshop\'s version  of Lorem', NULL),
	(4, '1.24', 'Peminjaman Modal Usaha', 'site/uploads/slidess/59eff38604c3d-prod-04.jpg', 'This is Photoshop\'s version  of Lorem', NULL);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table kreditplus.produk_home
CREATE TABLE IF NOT EXISTS `produk_home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.produk_home: ~0 rows (approximately)
DELETE FROM `produk_home`;
/*!40000 ALTER TABLE `produk_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk_home` ENABLE KEYS */;

-- Dumping structure for table kreditplus.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_level` smallint(5) unsigned NOT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_system` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT '1',
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.roles: ~4 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `role_level`, `title`, `is_admin`, `is_system`, `is_active`, `create_on`, `last_update`) VALUES
	(1, 10, 'superadmin', '1', '1', '1', '2016-12-21 10:00:00', NULL),
	(2, 20, 'administrator', '1', '0', '1', '2016-12-21 10:00:00', NULL),
	(3, 30, 'support', '1', '0', '1', '2016-12-21 10:00:00', NULL),
	(4, 999, 'visitor', '0', '0', '1', '2016-12-21 10:00:00', NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table kreditplus.sections
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `object` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(10) unsigned NOT NULL,
  `create_on` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.sections: ~38 rows (approximately)
DELETE FROM `sections`;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` (`id`, `template`, `object`, `title`, `sequence`, `create_on`, `last_update`) VALUES
	(22, 'base', 'slides', 'Home Slide', 1, '2017-10-25 01:47:18', NULL),
	(23, 'base', 'layanan', 'Layanan Home', 2, '2017-10-25 01:53:50', NULL),
	(24, 'base', 'produk', 'Produk Home', 3, '2017-10-25 02:08:14', NULL),
	(25, 'tentang-kami', 'banner', 'Banner Tentang Kami', 1, '2017-10-25 02:20:40', NULL),
	(26, 'tentang-kami', 'content', 'Content Tentang Kami', 2, '2017-10-25 02:24:53', NULL),
	(27, 'visimisi', 'visimisi', 'Visi Misi', 1, '2017-10-25 02:35:03', NULL),
	(28, 'visimisi', 'banner', 'Banner Visimisi', 2, '2017-10-25 02:36:21', NULL),
	(29, 'management', 'banner', 'Banner Management', 1, '2017-10-25 02:41:48', NULL),
	(30, 'management', 'management', 'Content Management', 2, '2017-10-25 02:42:05', NULL),
	(31, 'prestasi', 'banner', 'Banner Prestasi', 1, '2017-10-25 02:48:37', NULL),
	(32, 'prestasi', 'prestasi', 'Content Prestasi', 2, '2017-10-25 02:48:54', NULL),
	(33, 'goodcorporategov', 'banner', 'Banner Good Corporate', 1, '2017-10-25 02:59:28', NULL),
	(34, 'goodcorporategov', 'goodcorporategov', 'Content Good Corporate', 2, '2017-10-25 02:59:51', NULL),
	(37, 'produk', 'content-produk', 'Produk Content', 1, '2017-10-25 04:02:52', NULL),
	(38, 'produk', 'banner', 'Banner Produk', 2, '2017-10-25 04:05:15', NULL),
	(39, 'produk', 'tabel_pengajuan', 'Elektronik Pengajuan', 3, '2017-10-25 04:20:22', NULL),
	(40, 'produk', 'banner', 'Banner Mobil', 4, '2017-10-25 04:23:33', NULL),
	(41, 'produk', 'content-produk', 'Produk Mobil', 5, '2017-10-25 04:24:15', NULL),
	(42, 'produk', 'tabel_pengajuan', 'Pengajuan mobil', 6, '2017-10-25 04:27:56', NULL),
	(43, 'produk', 'content-produk', 'Produk Motor', 7, '2017-10-25 04:30:47', NULL),
	(44, 'produk', 'banner', 'Motor Banner', 8, '2017-10-25 04:30:59', NULL),
	(45, 'produk', 'tabel_pengajuan', 'Pengajuan Motor', 9, '2017-10-25 04:31:18', NULL),
	(46, 'produk', 'banner', 'Banner Pinjaman', 10, '2017-10-25 04:35:30', NULL),
	(47, 'produk', 'content-produk', 'Pinjaman Content', 11, '2017-10-25 04:35:49', NULL),
	(48, 'produk', 'tabel_pengajuan', 'Pengajuan Pinjaman', 12, '2017-10-25 04:36:04', NULL),
	(50, 'kreditplus', 'banner', 'Banner kreditplu', 1, '2017-10-25 06:46:06', NULL),
	(51, 'kreditplus', 'content-kreditplus', 'Content Kreditmu', 2, '2017-10-25 06:59:27', NULL),
	(52, 'kreditplus', 'banner', 'Banner Kreditmu', 3, '2017-10-25 07:00:08', NULL),
	(53, 'informasi', 'informasi', 'informasi & berita', 1, '2017-10-25 08:09:35', NULL),
	(55, 'informasi', 'banner', 'banner informasi', 2, '2017-10-25 08:11:03', NULL),
	(56, 'contact', 'contact', 'Contact Content', 1, '2017-10-25 08:51:26', NULL),
	(57, 'pengajuan', 'pengajuan', 'Pengajuan Kredit', 1, '2017-10-27 02:38:44', NULL),
	(58, 'pengajuan', 'banner', 'Banner Pengajuan', 2, '2017-10-27 02:44:58', NULL),
	(59, 'karir', 'banner', 'Banner Karir', 1, '2017-10-27 07:24:02', NULL),
	(61, 'karir', 'karir', 'Karir', 2, '2017-10-27 07:28:30', NULL),
	(78, 'kreditpluskarir', 'kreditplus_karir', 'Kreditplus Karirj', 1, '2017-10-27 10:33:16', NULL),
	(79, 'kreditpluskarir', 'banner', 'banners', 2, '2017-10-27 10:34:43', '2017-10-27 10:35:15'),
	(80, 'contact', 'banner', 'Banner Contact', 2, '2017-10-29 12:02:07', NULL);
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;

-- Dumping structure for table kreditplus.slides
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.slides: ~2 rows (approximately)
DELETE FROM `slides`;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `section_id`, `title`, `image`, `intro`) VALUES
	(1, '1.22', 'Pembiayan Kredit yang cepat, mudah dan aman', 'site/uploads/slides/59efed6b50c00-slidehome-02.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et'),
	(2, '1.22', 'Pembiayan Kredit yang cepat, mudah dan aman', 'site/uploads/slides/59efed8850bf4-slidehome-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Dumping structure for table kreditplus.slide_home
CREATE TABLE IF NOT EXISTS `slide_home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.slide_home: ~0 rows (approximately)
DELETE FROM `slide_home`;
/*!40000 ALTER TABLE `slide_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `slide_home` ENABLE KEYS */;

-- Dumping structure for table kreditplus.submenu
CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permalink` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.submenu: ~0 rows (approximately)
DELETE FROM `submenu`;
/*!40000 ALTER TABLE `submenu` DISABLE KEYS */;
/*!40000 ALTER TABLE `submenu` ENABLE KEYS */;

-- Dumping structure for table kreditplus.tabel_pengajuan
CREATE TABLE IF NOT EXISTS `tabel_pengajuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `persyaratan` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `wiraswasta` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `karyawan` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `profesional` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.tabel_pengajuan: ~20 rows (approximately)
DELETE FROM `tabel_pengajuan`;
/*!40000 ALTER TABLE `tabel_pengajuan` DISABLE KEYS */;
INSERT INTO `tabel_pengajuan` (`id`, `section_id`, `persyaratan`, `wiraswasta`, `karyawan`, `profesional`) VALUES
	(1, '7.39', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(2, '7.39', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '1', '0', '0'),
	(3, '7.39', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '1', '1', '0'),
	(4, '7.39', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '1', '0', '1'),
	(5, '7.39', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '0', '0'),
	(6, '8.42', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(7, '8.42', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '1', '1', '0'),
	(8, '8.42', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '1', '0', '1'),
	(9, '8.42', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '1', '1'),
	(10, '8.42', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '0', '1', '0'),
	(11, '9.45', 'Fotocopy KTP Pemohon', '0', '1', '0'),
	(12, '9.45', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '0'),
	(13, '9.45', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '1', '0', '0'),
	(14, '9.45', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '0', '1'),
	(15, '9.45', 'Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )', '1', '1', '1'),
	(16, '10.48', 'Fotocopy KTP Pemohon', '1', '1', '1'),
	(17, '10.48', 'Fotocopy Surat Ijin Usaha Perdagangan (SIUP)', '0', '1', '0'),
	(18, '10.48', 'Fotocopy Nomor Pokok Wajib Pajak (NPWP)', '1', '0', '0'),
	(19, '10.48', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '0', '1'),
	(20, '10.48', 'Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir', '0', '0', '0');
/*!40000 ALTER TABLE `tabel_pengajuan` ENABLE KEYS */;

-- Dumping structure for table kreditplus.testimoni
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.testimoni: ~3 rows (approximately)
DELETE FROM `testimoni`;
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` (`id`, `nama`, `telp`, `email`, `pesan`) VALUES
	(1, 'Jane Doe', '989898989', 'hlhluhlh@yuoo.iiho', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.'),
	(2, 'Felicia', '09989898', 'lhkhk@kjhjk.hukh', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.'),
	(3, 'Isyana', '9898989', 'jhjkhlkjh@hliuhk.fdr', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.'),
	(4, 'hulihiuhilu', '9898989', 'jlkjl@jl.hhl', 'jhkhlkjhk'),
	(5, 'jkklnkjl', '9898989', 'cs@kreditplus.com', 'jljlkjlk');
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;

-- Dumping structure for table kreditplus.visimisi
CREATE TABLE IF NOT EXISTS `visimisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visi` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `misi` text COLLATE utf8_unicode_ci NOT NULL,
  `nilai` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kreditplus.visimisi: ~0 rows (approximately)
DELETE FROM `visimisi`;
/*!40000 ALTER TABLE `visimisi` DISABLE KEYS */;
INSERT INTO `visimisi` (`id`, `section_id`, `visi`, `misi`, `nilai`) VALUES
	(1, '3.27', 'Menjadi Perusahaan Pembiayaan Yang Terbaik di Indonesia', '<ol>\r\n	<li>Menyediakan produk dan jasa pembiayaan multiguna yang terbaik untuk masyarakat</li>\r\n	<li>Membangun kerangka bagi setiap individu untuk belajar, berkembang, mewujudkan dan menciptakan nilai serta kesempatan</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Integritas</li>\r\n	<li>Kerjasama</li>\r\n	<li>Peduli dan bertanggung jawab</li>\r\n	<li>Lakukan dengan benar dan mengembangkan diri</li>\r\n	<li>Sikap &#39;Pasti Bisa&#39; (Can-do Attitude)</li>\r\n	<li>Kesederhanaan</li>\r\n	<li>Rajin</li>\r\n</ol>\r\n');
/*!40000 ALTER TABLE `visimisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
