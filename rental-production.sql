/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : rental-production

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-04-21 12:00:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_barang
-- ----------------------------
DROP TABLE IF EXISTS `m_barang`;
CREATE TABLE `m_barang` (
  `id_barang` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `harga` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_barang
-- ----------------------------
INSERT INTO `m_barang` VALUES ('1', 'P2200L', 'Proyektor 2200 Lumens', '250000.00');
INSERT INTO `m_barang` VALUES ('2', 'P4000L', 'Proyektor 4000 Lumens', '400000.00');
INSERT INTO `m_barang` VALUES ('3', 'S3X4', 'Screen 3 x 4 Meter', '100000.00');

-- ----------------------------
-- Table structure for m_paket_detail
-- ----------------------------
DROP TABLE IF EXISTS `m_paket_detail`;
CREATE TABLE `m_paket_detail` (
  `id_paket_detail` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_paket` int(2) unsigned DEFAULT NULL,
  `id_barang` int(3) unsigned DEFAULT NULL,
  `jumlah` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_paket_detail`),
  KEY `id_paket` (`id_paket`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `m_paket_detail_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `m_paket_header` (`id_paket`),
  CONSTRAINT `m_paket_detail_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_paket_detail
-- ----------------------------
INSERT INTO `m_paket_detail` VALUES ('1', '1', '1', '1');
INSERT INTO `m_paket_detail` VALUES ('2', '1', '2', '2');
INSERT INTO `m_paket_detail` VALUES ('3', '2', '2', '1');
INSERT INTO `m_paket_detail` VALUES ('4', '2', '1', '2');
INSERT INTO `m_paket_detail` VALUES ('5', '2', '3', '3');
INSERT INTO `m_paket_detail` VALUES ('6', '3', '1', '1');
INSERT INTO `m_paket_detail` VALUES ('7', '3', '3', '1');
INSERT INTO `m_paket_detail` VALUES ('8', '4', '1', '1');
INSERT INTO `m_paket_detail` VALUES ('9', '4', '2', '2');
INSERT INTO `m_paket_detail` VALUES ('10', '5', '1', '2');
INSERT INTO `m_paket_detail` VALUES ('11', '5', '3', '3');
INSERT INTO `m_paket_detail` VALUES ('12', '6', '1', '1');
INSERT INTO `m_paket_detail` VALUES ('13', '6', '3', '1');

-- ----------------------------
-- Table structure for m_paket_header
-- ----------------------------
DROP TABLE IF EXISTS `m_paket_header`;
CREATE TABLE `m_paket_header` (
  `id_paket` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(30) NOT NULL,
  `harga` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_paket_header
-- ----------------------------
INSERT INTO `m_paket_header` VALUES ('1', 'Paket A', '500000.00');
INSERT INTO `m_paket_header` VALUES ('2', 'Paket B', '100000.00');
INSERT INTO `m_paket_header` VALUES ('3', 'Paket C', '150000.00');
INSERT INTO `m_paket_header` VALUES ('4', 'Paket D', '500000.00');
INSERT INTO `m_paket_header` VALUES ('5', 'Paket E', '100000.00');
INSERT INTO `m_paket_header` VALUES ('6', 'Paket F', '150000.00');

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id_admin` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'su', 'su', 'FB_IMG_1457011912369.jpg', 'Super User');

-- ----------------------------
-- Table structure for tb_front_about
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_about`;
CREATE TABLE `tb_front_about` (
  `id_about` int(20) NOT NULL,
  `about` text NOT NULL,
  `img_about` varchar(100) NOT NULL,
  `sub_about1` varchar(100) NOT NULL,
  `sub_about2` varchar(100) NOT NULL,
  `sub_about3` varchar(100) NOT NULL,
  `subject_about` varchar(100) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_about
-- ----------------------------
INSERT INTO `tb_front_about` VALUES ('1', '<span style=\"font-family: \'Open Sans\', sans-serif; font-size: 13px; font-weight: bold; line-height: 22px; color: rgb(136, 136, 136);\">Rental Multimedia </span><span style=\"color: rgb(136, 136, 136); font-family: \'Open Sans\', sans-serif; font-size: 13px; line-height: 22px;\"> adalah perusahaan yang bergerak dibidang penyediaan alat-alat event organizer, seperti : Projector, Screen, Sound System, Led Video Display, Lighting, Partisi dan alat-alat lainnya. </span><br><div><br></div><div><span style=\"font-family: \'Open Sans\', sans-serif; font-size: 13px; font-weight: bold; line-height: 22px; color: rgb(136, 136, 136);\">Rental Multimedia </span><span style=\"color: rgb(136, 136, 136); font-family: \'Open Sans\', sans-serif; font-size: 13px; line-height: 22px;\">berdiri pada tahun 2013 dalam hal penyediaan alat atau perlengkapan yang mendukung acara oleh pihak Event Organnizer, baik perlengkapan acara kecil maupun acara besar.</span><span style=\"font-weight: bold;\"><br></span></div>', 'home_cover.jpg', 'Persewaan Alat', 'Instalasi Dan Operator', 'Troubleshoot', 'RENTAL MULTIMEDIA');

-- ----------------------------
-- Table structure for tb_front_blog
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_blog`;
CREATE TABLE `tb_front_blog` (
  `id_blog` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `id_kategori_blog` int(20) NOT NULL,
  `gambar` varchar(400) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `harga` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_blog
-- ----------------------------
INSERT INTO `tb_front_blog` VALUES ('9', 'Proyektor 2200 Lumens', 'Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 2.200 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 2.200 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m', '1', 'sewa_lcd_projector_2200.jpg', 'Deny Setiawan', '2016-04-21', '1', '250000.00');
INSERT INTO `tb_front_blog` VALUES ('10', 'Proyektor 3000 Lumens', 'Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 3.200 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 3.200 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m', '1', 'sewa_lcd_projector_3000.jpg', 'Arif Maruf', '2015-10-11', '1', '300000.00');
INSERT INTO `tb_front_blog` VALUES ('11', 'Proyektor 5000 Lumens', 'Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 5.000 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 5.000 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m', '1', 'sewa_lcd_projector_5000.jpg', 'Tion Mulyadi', '2015-10-11', '1', '500000.00');
INSERT INTO `tb_front_blog` VALUES ('12', 'Proyektor 10000 Lumens', 'Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 10.000 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m Sewa Infocus (Sewa Infokus) dengan tingkat resolusi dan kecerahan sebesar 10.000 ansi lumens, yang biasanya dipakai pada acara meeting (conference) untuk jumlah peserta (audience) antara 50 sampai dengan 100 orang. Sewa LCD jenis ini cocoknya dipadu dengan sewa Layar Projector berukuran 2x3m', '1', 'sewa_lcd_projector_10000.jpg', 'M Febrian', '2015-10-11', '1', '1000000.00');
INSERT INTO `tb_front_blog` VALUES ('13', 'Screen Tripod 70\"', 'Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\" Screen Tripod 70\"', '2', 'screen_tripod_70-84.jpg', 'Tion Mulyadi', '2015-10-12', '1', '100000.00');

-- ----------------------------
-- Table structure for tb_front_footer
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_footer`;
CREATE TABLE `tb_front_footer` (
  `id_footer` int(10) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `telp` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_footer
-- ----------------------------
INSERT INTO `tb_front_footer` VALUES ('1', 'Krukah Timur VII / 1 Surabaya', '08883229752', 'rentalmultimedia.sby@gmail.com', 'JERAPAH DEVELOPER');

-- ----------------------------
-- Table structure for tb_front_logo
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_logo`;
CREATE TABLE `tb_front_logo` (
  `id_logo` int(10) NOT NULL,
  `logo` varchar(400) NOT NULL,
  PRIMARY KEY (`id_logo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_logo
-- ----------------------------
INSERT INTO `tb_front_logo` VALUES ('1', 'rm_logo_50-42.png');

-- ----------------------------
-- Table structure for tb_front_portofolio
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_portofolio`;
CREATE TABLE `tb_front_portofolio` (
  `id_portofolio` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `id_kategori_portofolio` int(10) NOT NULL,
  `client` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `img_portofolio` varchar(300) NOT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_portofolio
-- ----------------------------
INSERT INTO `tb_front_portofolio` VALUES ('2', 'Margarets Secret', '1', 'Disney Corp', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Di program aplikasi Microsoft Office Excel, Jika Anda memasukkan teks yang panjang di sebuah sel (cell), teks akan ditampilkan merentang melewati beberapa kolom. Apabila Anda kembali memasukkan teks yang panjang di sel yang terletak disebelah kanannya, teks pertama akan tertutupi. Teks akan tampil tidak lengkap dan mengaburkan arti dari teks itu sendiri.</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Sebenarnya Anda dapat menampilkan teks yang panjang di dalam sebuah sel Excel dengan menggunakan fitur Wrap teks. Teks akan dikemas atau ditampilkan menjadi beberapa baris secara otomatis di dalam sebuah sel Excel. Berikut ini adalah langkah-langkah untuk mengemas teks yang panjang agar diletakkan ke dalam sebuah sel Microsoft Office Excel 2010:</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Jalankan aplikasi Microsoft Office Excel 2010 dan ketikkan teks yang panjang ke dalam sebuah sel (cell) Excel. Aktifkan sel yang berisi teks tersebut dengan cara mengkliknya.</p>', 'portofolio7.jpg');
INSERT INTO `tb_front_portofolio` VALUES ('3', 'Kalbe', '1', 'Kalbe', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Di program aplikasi Microsoft Office Excel, Jika Anda memasukkan teks yang panjang di sebuah sel (cell), teks akan ditampilkan merentang melewati beberapa kolom. Apabila Anda kembali memasukkan teks yang panjang di sel yang terletak disebelah kanannya, teks pertama akan tertutupi. Teks akan tampil tidak lengkap dan mengaburkan arti dari teks itu sendiri.</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Sebenarnya Anda dapat menampilkan teks yang panjang di dalam sebuah sel Excel dengan menggunakan fitur Wrap teks. Teks akan dikemas atau ditampilkan menjadi beberapa baris secara otomatis di dalam sebuah sel Excel. Berikut ini adalah langkah-langkah untuk mengemas teks yang panjang agar diletakkan ke dalam sebuah sel Microsoft Office Excel 2010:</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Jalankan aplikasi Microsoft Office Excel 2010 dan ketikkan teks yang panjang ke dalam sebuah sel (cell) Excel. Aktifkan sel yang berisi teks tersebut dengan cara mengkliknya.</p>', 'portofolio8.jpg');
INSERT INTO `tb_front_portofolio` VALUES ('4', 'Bank Mandiri', '1', 'Mandiri', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Di program aplikasi Microsoft Office Excel, Jika Anda memasukkan teks yang panjang di sebuah sel (cell), teks akan ditampilkan merentang melewati beberapa kolom. Apabila Anda kembali memasukkan teks yang panjang di sel yang terletak disebelah kanannya, teks pertama akan tertutupi. Teks akan tampil tidak lengkap dan mengaburkan arti dari teks itu sendiri.</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Sebenarnya Anda dapat menampilkan teks yang panjang di dalam sebuah sel Excel dengan menggunakan fitur Wrap teks. Teks akan dikemas atau ditampilkan menjadi beberapa baris secara otomatis di dalam sebuah sel Excel. Berikut ini adalah langkah-langkah untuk mengemas teks yang panjang agar diletakkan ke dalam sebuah sel Microsoft Office Excel 2010:</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Jalankan aplikasi Microsoft Office Excel 2010 dan ketikkan teks yang panjang ke dalam sebuah sel (cell) Excel. Aktifkan sel yang berisi teks tersebut dengan cara mengkliknya.</p>', 'portofolio41.jpg');
INSERT INTO `tb_front_portofolio` VALUES ('5', 'Konser Dewa 19', '2', 'BWI EO', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Di program aplikasi Microsoft Office Excel, Jika Anda memasukkan teks yang panjang di sebuah sel (cell), teks akan ditampilkan merentang melewati beberapa kolom. Apabila Anda kembali memasukkan teks yang panjang di sel yang terletak disebelah kanannya, teks pertama akan tertutupi. Teks akan tampil tidak lengkap dan mengaburkan arti dari teks itu sendiri.</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Sebenarnya Anda dapat menampilkan teks yang panjang di dalam sebuah sel Excel dengan menggunakan fitur Wrap teks. Teks akan dikemas atau ditampilkan menjadi beberapa baris secara otomatis di dalam sebuah sel Excel. Berikut ini adalah langkah-langkah untuk mengemas teks yang panjang agar diletakkan ke dalam sebuah sel Microsoft Office Excel 2010:</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; border: 0px; color: rgb(85, 101, 111); font-family: Helvetica, Arial, sans-serif; font-size: 13.4px; line-height: 20.1px;\">Jalankan aplikasi Microsoft Office Excel 2010 dan ketikkan teks yang panjang ke dalam sebuah sel (cell) Excel. Aktifkan sel yang berisi teks tersebut dengan cara mengkliknya.</p>', 'portofolio.jpg');

-- ----------------------------
-- Table structure for tb_front_slider
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_slider`;
CREATE TABLE `tb_front_slider` (
  `id_slider` int(10) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `sub_subject` text NOT NULL,
  `slider` varchar(200) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_slider
-- ----------------------------
INSERT INTO `tb_front_slider` VALUES ('1', 'WE ARE ULTRAVIOLET DEVELOPER', 'Best Developer Ever! ', 'shelf-object.png');

-- ----------------------------
-- Table structure for tb_front_team
-- ----------------------------
DROP TABLE IF EXISTS `tb_front_team`;
CREATE TABLE `tb_front_team` (
  `id_team` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `link_fb` varchar(100) NOT NULL,
  `img_team` varchar(100) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_front_team
-- ----------------------------
INSERT INTO `tb_front_team` VALUES ('1', 'Verly Ananda', 'CEO Ultraviolet Developer', 'www.facebook.com/v.attacx', 'team-6.jpg');

-- ----------------------------
-- Table structure for tb_kategori_blog
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori_blog`;
CREATE TABLE `tb_kategori_blog` (
  `id_kategori_blog` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kategori_blog
-- ----------------------------
INSERT INTO `tb_kategori_blog` VALUES ('1', 'Proyektor');
INSERT INTO `tb_kategori_blog` VALUES ('2', 'Screen');
INSERT INTO `tb_kategori_blog` VALUES ('3', 'LED / Plasma');
INSERT INTO `tb_kategori_blog` VALUES ('4', 'Sound System');

-- ----------------------------
-- Table structure for tb_kategori_portofolio
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori_portofolio`;
CREATE TABLE `tb_kategori_portofolio` (
  `id_kategori_portofolio` int(10) NOT NULL AUTO_INCREMENT,
  `kategori_portofolio` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori_portofolio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kategori_portofolio
-- ----------------------------
INSERT INTO `tb_kategori_portofolio` VALUES ('1', 'Seminar');
INSERT INTO `tb_kategori_portofolio` VALUES ('2', 'Konser');
