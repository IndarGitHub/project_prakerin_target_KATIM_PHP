-- phpMyAdmin SQL Dump
-- version 5.0.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmargin`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_done`
--

CREATE TABLE `app_done` (
  `id_app` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kw1` int(11) NOT NULL,
  `kw2` int(11) NOT NULL,
  `kw3` int(11) NOT NULL,
  `kw4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jml_staff`
--

CREATE TABLE `jml_staff` (
  `id_jml` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kw1` int(11) NOT NULL,
  `kw2` int(11) NOT NULL,
  `kw3` int(11) NOT NULL,
  `kw4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `net_margin`
--

CREATE TABLE `net_margin` (
  `id_net` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kw1` double NOT NULL,
  `kw2` varchar(191) NOT NULL,
  `kw3` double NOT NULL,
  `kw4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_account`
--

CREATE TABLE `new_account` (
  `id_new` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kw1` int(11) NOT NULL,
  `kw2` int(11) NOT NULL,
  `kw3` int(11) NOT NULL,
  `kw4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `top_up`
--

CREATE TABLE `top_up` (
  `id_top` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kw1` double NOT NULL,
  `kw2` double NOT NULL,
  `kw3` double NOT NULL,
  `kw4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Admin', '8113170016', 'sulviindar@gmail.com', '$2y$10$nE7w3//7pXgnVdGx55NPr.QHalDT2aeUTTqpVVzlzi9wQ3jWoX.dO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_done`
--
ALTER TABLE `app_done`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `jml_staff`
--
ALTER TABLE `jml_staff`
  ADD PRIMARY KEY (`id_jml`);

--
-- Indexes for table `net_margin`
--
ALTER TABLE `net_margin`
  ADD PRIMARY KEY (`id_net`);

--
-- Indexes for table `new_account`
--
ALTER TABLE `new_account`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `top_up`
--
ALTER TABLE `top_up`
  ADD PRIMARY KEY (`id_top`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_done`
--
ALTER TABLE `app_done`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jml_staff`
--
ALTER TABLE `jml_staff`
  MODIFY `id_jml` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `net_margin`
--
ALTER TABLE `net_margin`
  MODIFY `id_net` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_account`
--
ALTER TABLE `new_account`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `top_up`
--
ALTER TABLE `top_up`
  MODIFY `id_top` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

