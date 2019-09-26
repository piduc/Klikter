-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 02:39 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salar`
--

-- --------------------------------------------------------

--
-- Table structure for table `isplate`
--

CREATE TABLE `isplate` (
  `id` int(11) NOT NULL,
  `nagrada` text NOT NULL,
  `cena` int(11) NOT NULL,
  `ip_address` int(11) NOT NULL,
  `id_korisnika` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `verifikacija` int(11) NOT NULL,
  `napomena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isplate`
--

INSERT INTO `isplate` (`id`, `nagrada`, `cena`, `ip_address`, `id_korisnika`, `username`, `email`, `verifikacija`, `napomena`) VALUES
(3, '$10 Steam Wallet Code', 1800, 0, 6, 'Ivke', 'proivke@gmail.com', 1, ''),
(4, '1 Random Steam Igru', 200, 0, 1, 'Ivke', 'proivke@gmail.com', 1, ''),
(5, '5 Random Steam Igri', 700, 0, 1, 'Ivke', 'proivke@gmail.com', 2, 'Mars'),
(6, '2 Random Steam Igre', 350, 0, 1, 'Ivke', 'proivke@gmail.com', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nalog`
--

CREATE TABLE `nalog` (
  `id` int(11) NOT NULL,
  `nalog` text NOT NULL,
  `id_korisnika` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `id_platforme` int(11) NOT NULL,
  `verifikacija` int(11) NOT NULL,
  `napomena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nalog`
--

INSERT INTO `nalog` (`id`, `nalog`, `id_korisnika`, `ip_address`, `id_platforme`, `verifikacija`, `napomena`) VALUES
(31, 'https://www.instagram.com/ducic.i', 1, '188.255.147.15', 1, 1, ''),
(32, 'https://www.instagram.com/milovanovicc_j', 3, '82.208.244.75', 1, 1, ''),
(33, 'https://www.facebook.com/mikicastojadinovic', 2, '109.122.114.197\r\n', 1, 1, ''),
(34, 'https://www.instagram.com/dugackomijeime', 1, '::1', 1, 1, ''),
(35, 'https://www.instagram.com/rus___617', 1, '::1', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `bodovi` int(11) NOT NULL,
  `zaradjeno` int(11) NOT NULL,
  `ucinak` int(11) NOT NULL,
  `uradjeno` int(11) NOT NULL,
  `prihvaceno` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `ref_id`, `ip`, `bodovi`, `zaradjeno`, `ucinak`, `uradjeno`, `prihvaceno`, `admin`) VALUES
(1, 'Ivke', '$2y$10$I8TZxtmErcmas9H37Z5L.usycndovw7mUFrtdjLKiMCtbRJ/Zei/6', 'proivke@gmail.com', 3, '188.255.147.15', 1581801, 2076, 87, 61, 53, 1),
(3, 'Gohlub', '$2y$10$51GbOOjy6Q5UaAdSzzIUretiOCHCepuCmOIgKzKkuxynO/obSN4BK', 'jovan7492@gmail.com', 1, '82.208.244.75', 5000, 0, 0, 0, 0, 0),
(4, 'D1n0', '$2y$10$JlokxmpCwdH1qiegkZ.mBeV8he31GEXEQk2k1xUZfKyWTkjmII.Ee', 'dinofazlic3@gmail.com', 1, '109.245.32.139', 0, 0, 0, 0, 0, 0),
(21, 'dwadwad', '$2y$10$7CWx1dtwF86xKdxaEKIlFOnDdOvMJZki7eS72o2g5D9evfYwmXZSe', 'dawdaa@gmail.com', 0, '::1', 0, 0, 0, 0, 0, 0),
(22, '123123', '$2y$10$YXMEevQ01Bh74HoiZ1ei4u.dLiHpH25KTRTYjckcXIUYMkADq3ZOi', '123123123@gmail.com', 1, '::1', 0, 0, 0, 0, 0, 1),
(23, 'noviacc', '$2y$10$uV9/nBtHFYjKIbsXvHUObe7BNZb7izI5Zw8Ipu5GXTbcs.XTWmwTu', 'nemaje@gmail.com', 1, '::1', 1, 1, 100, 1, 1, 0),
(24, 'idemo123', '$2y$10$rLTtzFmBNDvM/18IlkayQO/XrenKNGnU8qXp.Kv4C8.6GrigTGvN.', 'idemo123@gmail.com', 0, '::1', 0, 0, 0, 0, 0, 0),
(25, '12321', '$2y$10$EaQuiYKgEz4VIInmNCaXS.5T96FVLDTPybQQG6pwy2vLkDCStEOYu', '123123123@gagaw123.com', 1, '::1', 0, 0, 0, 0, 0, 0),
(2, 'Mikica', '$2y$10$gFHZYYI0hWa4U673apfSV.wk0y8yF8zkpaMiTUvPQC4hmdjUiG/QO', 'gejmeriprijepoljski@gmail.com', 0, '109.122.114.197', 485545, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zadaci`
--

CREATE TABLE `zadaci` (
  `id` int(11) NOT NULL,
  `id_korisnika` int(11) NOT NULL,
  `username` text NOT NULL,
  `zavrsen` int(11) NOT NULL,
  `vrsta` int(11) NOT NULL,
  `link` text NOT NULL,
  `slika` text NOT NULL,
  `bodovi` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `platforma` int(11) NOT NULL,
  `prijave` int(11) NOT NULL,
  `napomena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zadaci`
--

INSERT INTO `zadaci` (`id`, `id_korisnika`, `username`, `zavrsen`, `vrsta`, `link`, `slika`, `bodovi`, `max`, `platforma`, `prijave`, `napomena`) VALUES
(16, 1, 'Ivke', 0, 1, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 'https://scontent-sof1-1.cdninstagram.com/vp/b59e2fc29f499d9924575ec628c14a57/5DB1558F/t51.2885-15/e35/65200600_483070862452778_4554724697970942522_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com', 50, 39, 1, 0, ''),
(17, 1, 'Ivke', 0, 1, 'https://www.instagram.com/p/BzqnZoeoTB_bnuJES44RI-PvNplpfPfdmCJpxY0/', 'https://scontent-sof1-1.cdninstagram.com/vp/4d023cccc2bd4e1986ba1feaba4080e1/5DA147F2/t51.2885-15/e35/65396770_2857077457652314_6443260371375591645_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com', 50, 38, 1, 0, ''),
(18, 1, 'Ivke', 0, 2, 'https://www.instagram.com/perverzija__tips/', 'https://scontent-sof1-1.cdninstagram.com/vp/91b033fad58efeb08c5c59e1178a39fc/5DB7ADA8/t51.2885-15/e35/60775567_326620864940963_3517493511830645680_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com', 100, 80, 1, 0, ''),
(20, 1, 'Ivke', 1, 1, 'dadwada', 'https://scontent-sof1-1.cdninstagram.com/vp/6f8d12ef22f36b4440c330df0c3e0ff8/5DE53D98/t51.2885-15/e35/67565462_461828777734473_8753718265446834561_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com', 50, 0, 1, 0, ''),
(21, 1, 'Ivke', 0, 1, 'https://www.instagram.com/p/B1ZPoGJgZzh/', 'https://instagram.fbeg10-1.fna.fbcdn.net/vp/ec42c41b3f6368f41c366c549bc040f6/5DF952A1/t51.2885-15/e35/p1080x1080/67501833_2409561735993482_7147227961350314970_n.jpg?_nc_ht=instagram.fbeg10-1.fna.fbcdn.net&_nc_cat=102', 50, 40, 1, 0, ''),
(23, 1, 'Ivke', 2, 3, 'https://www.instagram.com/p/B2CqxuVgB2P/', '', 100, 80, 1, 0, ''),
(24, 1, 'Ivke', 2, 3, 'https://www.instagram.com/p/B14PdrQAuk9/', '', 50, 6, 1, 0, ''),
(25, 1, 'Ivke', 2, 1, 'https://www.instagram.com/p/B2bX638oBMB/', '', 50, 32, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `zarada`
--

CREATE TABLE `zarada` (
  `id` int(11) NOT NULL,
  `id_zadatka` int(11) NOT NULL,
  `link` text NOT NULL,
  `ip_address` int(11) NOT NULL,
  `vrsta` int(11) NOT NULL,
  `id_korisnika` int(11) NOT NULL,
  `korisnik` text NOT NULL,
  `nalog` text NOT NULL,
  `verifikacija` int(11) NOT NULL,
  `napomena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zarada`
--

INSERT INTO `zarada` (`id`, `id_zadatka`, `link`, `ip_address`, `vrsta`, `id_korisnika`, `korisnik`, `nalog`, `verifikacija`, `napomena`) VALUES
(10, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 1, 'Ivke', 'ducic.i', 2, ''),
(11, 17, 'https://www.instagram.com/p/BzqnZoeoTB_bnuJES44RI-PvNplpfPfdmCJpxY0/', 0, 1, 1, 'Ivke', 'ducic.i', 1, ''),
(12, 17, 'https://www.instagram.com/p/BzqnZoeoTB_bnuJES44RI-PvNplpfPfdmCJpxY0/', 0, 1, 23, 'noviacc', '', 1, ''),
(13, 20, 'dadwada', 0, 1, 1, 'Ivke', 'dugackomijeime', 1, ''),
(14, 20, 'dadwada', 0, 1, 1, 'Ivke', 'ducic.i', 1, ''),
(15, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 22, '123123', '', 2, ''),
(16, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 1, 'Ivke', 'ducic.i', 1, ''),
(17, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 22, '123123', '', 2, ''),
(18, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 22, '123123', '', 2, ''),
(19, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 22, '123123', '', 2, ''),
(20, 18, 'https://www.instagram.com/perverzija__tips/', 0, 2, 1, 'Ivke', 'ducic.i', 2, ''),
(21, 21, 'https://www.instagram.com/p/B1ZPoGJgZzh/', 0, 1, 1, 'Ivke', 'ducic.i', 2, ''),
(22, 18, 'https://www.instagram.com/perverzija__tips/', 0, 2, 1, 'Ivke', 'ducic.i', 0, ''),
(23, 18, 'https://www.instagram.com/perverzija__tips/', 0, 2, 1, 'Ivke', 'dugackomijeime', 0, ''),
(24, 21, 'https://www.instagram.com/p/B1ZPoGJgZzh/', 0, 1, 1, 'Ivke', 'dugackomijeime', 0, ''),
(25, 18, 'https://www.instagram.com/perverzija__tips/', 0, 2, 1, 'Ivke', 'dugackomijeime', 0, ''),
(26, 18, 'https://www.instagram.com/perverzija__tips/', 0, 2, 1, 'Ivke', 'ducic.i', 0, ''),
(27, 16, 'https://www.instagram.com/p/BzpmpqdiUPx/?utm_source=ig_web_copy_link', 0, 1, 24, 'idemo123', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isplate`
--
ALTER TABLE `isplate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nalog`
--
ALTER TABLE `nalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zadaci`
--
ALTER TABLE `zadaci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zarada`
--
ALTER TABLE `zarada`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isplate`
--
ALTER TABLE `isplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nalog`
--
ALTER TABLE `nalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `zadaci`
--
ALTER TABLE `zadaci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `zarada`
--
ALTER TABLE `zarada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
