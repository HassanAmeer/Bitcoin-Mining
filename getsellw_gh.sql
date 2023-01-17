-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2023 at 11:22 PM
-- Server version: 8.0.31-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getsellw_gh`
--

-- --------------------------------------------------------

--
-- Table structure for table `activepkg`
--

CREATE TABLE `activepkg` (
  `pkgid` int NOT NULL,
  `by_orderid` varchar(150) DEFAULT NULL,
  `byuser` varchar(150) DEFAULT NULL,
  `starttime` int DEFAULT NULL,
  `endtime` int DEFAULT NULL,
  `pkgname` varchar(100) DEFAULT NULL,
  `plansno` int DEFAULT NULL,
  `investbtc` float NOT NULL DEFAULT '0',
  `investinusd` float NOT NULL DEFAULT '0',
  `dailyprofitusd` float NOT NULL DEFAULT '0',
  `howdays` int NOT NULL DEFAULT '60'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `activepkg`
--

INSERT INTO `activepkg` (`pkgid`, `by_orderid`, `byuser`, `starttime`, `endtime`, `pkgname`, `plansno`, `investbtc`, `investinusd`, `dailyprofitusd`, `howdays`) VALUES
(21, '628eea15ca3d9', 'test@gmail.com', 1653749870, 1663685263, 'presale', 1, 0.00141067, 42, 6.20426, 120);

-- --------------------------------------------------------

--
-- Table structure for table `bonuschart`
--

CREATE TABLE `bonuschart` (
  `id` int NOT NULL,
  `byuser` varchar(150) DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bonuschart`
--

INSERT INTO `bonuschart` (`id`, `byuser`, `bonus`, `time`) VALUES
(57, 'test@gmail.com', 4.5, '2022-05-26 03:00:51'),
(58, 'test@gmail.com', 5, '2022-05-26 05:18:08'),
(59, 'test@gmail.com', 6, '2022-05-26 05:18:26'),
(61, 'test@gmail.com', 6, '2022-05-26 05:23:15'),
(62, 'test@gmail.com', 6, '2022-05-28 07:56:50'),
(64, 'test@gmail.com', 6.2, '2022-05-28 12:39:13'),
(65, 'test@gmail.com', 0.595754, '2022-05-28 14:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `ghstng`
--

CREATE TABLE `ghstng` (
  `stngid` int NOT NULL,
  `btc_usd` float NOT NULL,
  `withdrawoff` int NOT NULL DEFAULT '0',
  `setbtcrate_usd` int DEFAULT '30000',
  `instalink` varchar(150) DEFAULT NULL,
  `tglink` varchar(150) DEFAULT NULL,
  `fblink` varchar(150) DEFAULT NULL,
  `twlink` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `admin` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ghstng`
--

INSERT INTO `ghstng` (`stngid`, `btc_usd`, `withdrawoff`, `setbtcrate_usd`, `instalink`, `tglink`, `fblink`, `twlink`, `email`, `admin`, `pass`) VALUES
(1, 1, 0, 29000, '', '@hello', '', '', '', 'admin', '0c7540eb7e65b553ec1ba6b20de79608');

-- --------------------------------------------------------

--
-- Table structure for table `orderhis`
--

CREATE TABLE `orderhis` (
  `id` int NOT NULL,
  `orderid` varchar(150) DEFAULT NULL,
  `byuser` varchar(200) DEFAULT NULL,
  `days` int DEFAULT NULL,
  `pkgname` varchar(50) DEFAULT NULL,
  `plansno` int NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '0',
  `wallet` varchar(200) DEFAULT NULL,
  `btcpay` float NOT NULL,
  `btcinusd` float NOT NULL,
  `dailyprofit` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orderhis`
--

INSERT INTO `orderhis` (`id`, `orderid`, `byuser`, `days`, `pkgname`, `plansno`, `time`, `status`, `wallet`, `btcpay`, `btcinusd`, `dailyprofit`) VALUES
(12, '628eea15ca3d9', 'test@gmail.com', 120, 'presale', 1, '2022-05-26 02:46:50', 1, '7hTXyyRTpXSC8qcobmf8wC9ya9k5iSp6Wo', 0.00141067, 42, 0.74),
(11, '628e37bb56b70', 'test@gmail.com', 60, '2m', 1, '2022-05-25 14:05:55', 0, '7hTXyyRTpXSC8qcobmf8wC9ya9k5iSp6Wo', 0.000337098, 10, 0.3),
(10, '628e36b203417', 'test@gmail.com', 240, '8m', 8, '2022-05-25 14:01:33', 1, '7hTXyyRTpXSC8qcobmf8wC9ya9k5iSp6Wo', 1.26749, 37600, 285.88);

-- --------------------------------------------------------

--
-- Table structure for table `pre_sale`
--

CREATE TABLE `pre_sale` (
  `id` int NOT NULL,
  `for_days` int DEFAULT NULL,
  `sale1` int DEFAULT NULL,
  `sale2` int DEFAULT NULL,
  `sale3` int DEFAULT NULL,
  `sale4` int DEFAULT NULL,
  `sale5` int DEFAULT NULL,
  `sale6` int DEFAULT NULL,
  `sale7` int DEFAULT NULL,
  `sale8` int DEFAULT NULL,
  `strike1` int DEFAULT NULL,
  `strike2` int DEFAULT NULL,
  `strike3` int DEFAULT NULL,
  `strike4` int DEFAULT NULL,
  `strike5` int DEFAULT NULL,
  `strike6` int DEFAULT NULL,
  `strike7` int DEFAULT NULL,
  `strike8` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pre_sale`
--

INSERT INTO `pre_sale` (`id`, `for_days`, `sale1`, `sale2`, `sale3`, `sale4`, `sale5`, `sale6`, `sale7`, `sale8`, `strike1`, `strike2`, `strike3`, `strike4`, `strike5`, `strike6`, `strike7`, `strike8`) VALUES
(1, 14, 21, 80, 375, 700, 1625, 3000, 5500, 12500, 25, 100, 500, 1000, 2500, 5000, 10000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `req_withdrawl`
--

CREATE TABLE `req_withdrawl` (
  `id` int NOT NULL,
  `from_user` varchar(150) DEFAULT NULL,
  `req_withdraw` float NOT NULL,
  `wallet` varchar(250) DEFAULT NULL,
  `mainbal` float NOT NULL,
  `total_out` float NOT NULL,
  `total_ref` int DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL,
  `status_paid` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `req_withdrawl`
--

INSERT INTO `req_withdrawl` (`id`, `from_user`, `req_withdraw`, `wallet`, `mainbal`, `total_out`, `total_ref`, `time`, `status`, `status_paid`) VALUES
(12, 'test@gmail.com', 0.0000278679, 'last3', 0.928949, 0, 7, '2022-05-24 15:25:55', 0, 'fa fa-history text-muted');

-- --------------------------------------------------------

--
-- Table structure for table `userslog`
--

CREATE TABLE `userslog` (
  `uid` int NOT NULL,
  `uemail` varchar(100) DEFAULT NULL,
  `upass` varchar(150) DEFAULT NULL,
  `ip` varchar(100) NOT NULL DEFAULT '0',
  `buy_pkg` varchar(150) DEFAULT '0',
  `totalsum` float DEFAULT '0',
  `sum` float NOT NULL,
  `totalsumout` float NOT NULL,
  `sumout` float NOT NULL,
  `refby` int DEFAULT '0',
  `totalref` int DEFAULT '0',
  `reflevel` int DEFAULT '0',
  `refbonus` float DEFAULT '0',
  `user_ban` int NOT NULL DEFAULT '0',
  `bantxt` varchar(50) DEFAULT 'fas fa-user-tie text-success'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `userslog`
--

INSERT INTO `userslog` (`uid`, `uemail`, `upass`, `ip`, `buy_pkg`, `totalsum`, `sum`, `totalsumout`, `sumout`, `refby`, `totalref`, `reflevel`, `refbonus`, `user_ban`, `bantxt`) VALUES
(1, 'test@gmail.com', '81d1a81b2cc325e32ba1983d73d85690', '119.160.57.155', 'any', 50, 50, 40, 34.66, 2, 1, 1, 10, 0, 'fas fa-user-tie  text-success'),
(6, 't@gmail.com', '81d1a81b2cc325e32ba1983d73d85690', '38.132.126.226', '0', NULL, 0, 0, 0, 0, NULL, NULL, 0, 0, 'fas fa-user-tie  text-success'),
(7, 'bigmoney5@as.com', '32c14147d57a06f4654715f9efba735e', '141.136.88.198', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'fas fa-user-tie text-success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activepkg`
--
ALTER TABLE `activepkg`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `bonuschart`
--
ALTER TABLE `bonuschart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghstng`
--
ALTER TABLE `ghstng`
  ADD PRIMARY KEY (`stngid`);

--
-- Indexes for table `orderhis`
--
ALTER TABLE `orderhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_sale`
--
ALTER TABLE `pre_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_withdrawl`
--
ALTER TABLE `req_withdrawl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userslog`
--
ALTER TABLE `userslog`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activepkg`
--
ALTER TABLE `activepkg`
  MODIFY `pkgid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bonuschart`
--
ALTER TABLE `bonuschart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `ghstng`
--
ALTER TABLE `ghstng`
  MODIFY `stngid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderhis`
--
ALTER TABLE `orderhis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pre_sale`
--
ALTER TABLE `pre_sale`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `req_withdrawl`
--
ALTER TABLE `req_withdrawl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userslog`
--
ALTER TABLE `userslog`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
