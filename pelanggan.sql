-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2015 at 03:15 PM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penawaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email`, `nama_perusahaan`, `nama_pemesan`) VALUES
(1, 'karoseri@gmail.com', 'PT Karoseris', 'Ahmad Juprianrod'),
(2, 'agitnaeta@gmail.com', 'PT Sumenep Jaya', 'Agit Suganteng'),
(3, 'rini@karoseri.com', 'PT Karoseri Permata', 'Rini Nurjaman'),
(4, 'karman@sinarjayateknik.com', 'PT Sinar Jaya Teknik', 'Karman'),
(6, 'supdaridi@bju.com', 'PT Sumenep Jaya', 'Ridwan Junaedi');

--
-- Triggers `pelanggan`
--
DELIMITER //
CREATE TRIGGER `tambah_nilai` AFTER INSERT ON `pelanggan`
 FOR EACH ROW BEGIN
  INSERT INTO nilai_pelanggan
        (
              id_pelanggan,
              nilai_penawaran
        )
  VALUES
        (       new.id_pelanggan,
                0
        );
END
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
