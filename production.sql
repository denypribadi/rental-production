-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 12:19 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ultra_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `avatar`, `name`) VALUES
(1, 'verlyananda', 'verlyananda', 'ultra.png', 'VerlyAnanda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_about`
--

CREATE TABLE IF NOT EXISTS `tb_front_about` (
  `id_about` int(20) NOT NULL,
  `about` text NOT NULL,
  `img_about` varchar(100) NOT NULL,
  `sub_about1` varchar(100) NOT NULL,
  `sub_about2` varchar(100) NOT NULL,
  `sub_about3` varchar(100) NOT NULL,
  `subject_about` varchar(100) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_front_about`
--

INSERT INTO `tb_front_about` (`id_about`, `about`, `img_about`, `sub_about1`, `sub_about2`, `sub_about3`, `subject_about`) VALUES
(1, '<span style="font-weight: bold;">Ultraviolet Developer </span> adalah Startup dari cimahi yang di bentuk oleh sekelompok pemuda kreatif dan inovatif dibidang IT, <span style="font-weight: bold;">Ultraviolet Developer didirikan pada tahun 2014</span> oleh <span style="font-weight: bold;">VerlyAnanda</span> dan kawan-kawan, berawal dari hobbie menjadi Profesi dibidang <span style="font-weight: bold;">jasa pembuatan website</span>,<span style="font-weight: bold;">augmented reality apps,web design,web toko online,dsb.</span><div><span style="font-weight: bold;"><br></span></div>', 'custom-img-bg-1.jpg', 'Kami cepat seperti cheetah!', 'Made with Love stay with Coding ', 'Always Awesome!', 'ULTRAVIOLET DEVELOPER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_blog`
--

CREATE TABLE IF NOT EXISTS `tb_front_blog` (
  `id_blog` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `id_kategori_blog` int(20) NOT NULL,
  `gambar` varchar(400) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_front_blog`
--

INSERT INTO `tb_front_blog` (`id_blog`, `judul`, `desc`, `id_kategori_blog`, `gambar`, `pengirim`, `date`, `status`) VALUES
(9, 'Ultraviolet developer Bandung', '<p><span style="line-height: 1.42857; font-weight: bold;">Test bold, </span><span style="line-height: 1.42857; font-style: italic;">Test Italic</span><span style="line-height: 1.42857;"> </span><span style="line-height: 1.42857; text-decoration: underline;">test underline</span><span style="line-height: 1.42857;">  test table,</span><span style="line-height: 1.42857; font-family: ''Arial Black'';"> test font arial black,d</span></p><p></p><div style="text-align: center;"><span style="font-family: ''Arial Black''; line-height: 26.6666px;">dwadadawdada<span style="background-color: rgb(255, 255, 0);">dawdadada</span></span></div>Pusing kepala gan<table class="table table-bordered"><tbody><tr><td>senin</td><td>dsdwada</td><td>awdawdawdad</td><td>dawdadawdawdd</td></tr><tr><td>dwadaw</td><td><br></td><td><br></td><td>dwadadadadad</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p></p>', 1, 'blog-mas-img-1.jpg', 'VerlyAnanda', '2015-10-12', 1),
(10, 'Verly Test lagihgan', 'Verlytest', 2, 'blog-img-21.jpg', 'Verly ananda', '2015-10-11', 1),
(11, 'coba lagi gan', 'dwa', 2, 'blog-single-img.jpg', 'VerlyAnanda', '2015-10-11', 1),
(12, 'wakakaka', 'dwa', 2, 'blog-mas-img-2.jpg', 'VerlyAnanda', '2015-10-11', 1),
(13, 'Ultraviolet Developer', 'dawodwaokdoadoka', 2, 'custom-img-3.png', 'VerlyAnanda', '2015-10-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_footer`
--

CREATE TABLE IF NOT EXISTS `tb_front_footer` (
  `id_footer` int(10) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `telp` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_front_footer`
--

INSERT INTO `tb_front_footer` (`id_footer`, `alamat`, `telp`, `email`, `subject`) VALUES
(1, 'Kp.ciloa,No73,RT07/RW03,Kec.Ngamprah,Desa Cilame,Kab.bandung barat', '089672377544', 'verlyananda@gmail.com', 'ULTRAVIOLET DEVELOPER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_logo`
--

CREATE TABLE IF NOT EXISTS `tb_front_logo` (
  `id_logo` int(10) NOT NULL,
  `logo` varchar(400) NOT NULL,
  PRIMARY KEY (`id_logo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_front_logo`
--

INSERT INTO `tb_front_logo` (`id_logo`, `logo`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_portofolio`
--

CREATE TABLE IF NOT EXISTS `tb_front_portofolio` (
  `id_portofolio` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `id_kategori_portofolio` int(10) NOT NULL,
  `client` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `img_portofolio` varchar(300) NOT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_front_portofolio`
--

INSERT INTO `tb_front_portofolio` (`id_portofolio`, `judul`, `id_kategori_portofolio`, `client`, `desc`, `img_portofolio`) VALUES
(2, 'dowakdoadka', 3, 'Disney Corp', '<p>dokawodkawda</p>', 'counter.jpg'),
(3, 'Apa aja gan', 3, 'Google', '<p>dkwoakdoadokawdkwaodka</p>', 'macbook-img.png'),
(4, 'Web CV', 3, 'People', '<p>dwadadadawdadawdwada</p>', 'work-img-7.jpg'),
(5, 'Verly test gan', 1, 'Human', '<p>dkwaokdoakdadokadkkdoakdoadkaoda</p>', 'tag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_slider`
--

CREATE TABLE IF NOT EXISTS `tb_front_slider` (
  `id_slider` int(10) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `sub_subject` text NOT NULL,
  `slider` varchar(200) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_front_slider`
--

INSERT INTO `tb_front_slider` (`id_slider`, `subject`, `sub_subject`, `slider`) VALUES
(1, 'WE ARE ULTRAVIOLET DEVELOPER', 'Best Developer Ever! ', 'shelf-object.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_front_team`
--

CREATE TABLE IF NOT EXISTS `tb_front_team` (
  `id_team` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `link_fb` varchar(100) NOT NULL,
  `img_team` varchar(100) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_front_team`
--

INSERT INTO `tb_front_team` (`id_team`, `nama`, `jabatan`, `link_fb`, `img_team`) VALUES
(1, 'Verly Ananda', 'CEO Ultraviolet Developer', 'www.facebook.com/v.attacx', 'team-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_blog`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_blog` (
  `id_kategori_blog` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori_blog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_kategori_blog`
--

INSERT INTO `tb_kategori_blog` (`id_kategori_blog`, `kategori`) VALUES
(1, 'Web'),
(2, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_portofolio`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_portofolio` (
  `id_kategori_portofolio` int(10) NOT NULL AUTO_INCREMENT,
  `kategori_portofolio` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_kategori_portofolio`
--

INSERT INTO `tb_kategori_portofolio` (`id_kategori_portofolio`, `kategori_portofolio`) VALUES
(1, 'WebDesign'),
(2, 'WebDeveloper'),
(3, 'AndroidDeveloper');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
