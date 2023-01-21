-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2023 at 10:32 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18229689_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualstock`
--

CREATE TABLE `actualstock` (
  `aid` int(11) NOT NULL,
  `pack` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `updateDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actualstock`
--

INSERT INTO `actualstock` (`aid`, `pack`, `brand`, `item`, `amount`, `updateDate`, `area`) VALUES
(1, '200ml', 'Pepsi', NULL, 5, '2023-01-20', 'kandy'),
(2, 'PMX', 'Aquafina', NULL, 5, '2023-01-20', 'kandy'),
(3, '1000ml', '7 Up', NULL, 100, '2023-01-24', 'kandy'),
(4, '1500ml', '7 Up', NULL, 100, '2023-01-24', 'kandy');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `holiday` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kandy` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `month`, `date`, `holiday`, `status`, `kandy`) VALUES
(1, 'January', '1', '1', '', ''),
(2, 'January', '2', '', '', ''),
(3, 'January', '3', '', '', ''),
(4, 'January', '4', '', '', ''),
(5, 'January', '5', '', '', ''),
(6, 'January', '6', '', '', ''),
(7, 'January', '7', '', '', ''),
(8, 'January', '8', '1', '', ''),
(9, 'January', '9', '', '', ''),
(10, 'January', '10', '', '', ''),
(11, 'January', '11', '', '', ''),
(12, 'January', '12', '', '', ''),
(13, 'January', '13', '', '', ''),
(14, 'January', '14', '', '', ''),
(15, 'January', '15', '1', '', ''),
(16, 'January', '16', '', '', ''),
(17, 'January', '17', '', '', ''),
(18, 'January', '18', '', '', ''),
(19, 'January', '19', '', '', ''),
(20, 'January', '20', '', '', ''),
(21, 'January', '21', '', '', ''),
(22, 'January', '22', '1', '', ''),
(23, 'January', '23', '', '', ''),
(24, 'January', '24', '', '', ''),
(25, 'January', '25', '', '', ''),
(26, 'January', '26', '', '', ''),
(27, 'January', '27', '', '', ''),
(28, 'January', '28', '', '', ''),
(29, 'January', '29', '1', '', ''),
(30, 'January', '30', '', '', ''),
(31, 'January', '31', '', '', ''),
(32, 'February', '1', '', '', ''),
(33, 'February', '1', '', '', ''),
(34, 'February', '2', '', '', ''),
(35, 'February', '3', '', '', ''),
(36, 'February', '4', '', '', ''),
(37, 'February', '5', '1', '', ''),
(38, 'February', '6', '', '', ''),
(39, 'February', '7', '', '', ''),
(40, 'February', '8', '', '', ''),
(41, 'February', '9', '', '', ''),
(42, 'February', '10', '', '', ''),
(43, 'February', '11', '', '', ''),
(44, 'February', '12', '1', '', ''),
(45, 'February', '13', '', '', ''),
(46, 'February', '14', '', '', ''),
(47, 'February', '15', '', '', ''),
(48, 'February', '16', '', '', ''),
(49, 'February', '17', '', '', ''),
(50, 'February', '18', '', '', ''),
(51, 'February', '19', '1', '', ''),
(52, 'February', '20', '', '', ''),
(53, 'February', '21', '', '', ''),
(54, 'February', '22', '', '', ''),
(55, 'February', '23', '', '', ''),
(56, 'February', '24', '', '', ''),
(57, 'February', '25', '', '', ''),
(58, 'February', '26', '1', '', ''),
(59, 'February', '27', '', '', ''),
(60, 'February', '28', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dateTable`
--

CREATE TABLE `dateTable` (
  `id` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `holidays` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(3) DEFAULT NULL,
  `item` varchar(300) DEFAULT NULL,
  `pack` varchar(300) DEFAULT NULL,
  `brand` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item`, `pack`, `brand`) VALUES
(1, '7 up 1.0 Ltrs', '1000ml', '7 Up'),
(2, '7UP 1.5ml Wrap 12 Pack', '1500ml', '7 Up'),
(3, '7 up 2.0 Ltrs', '2000ml', '7 Up'),
(4, '7 UP 200ml (CHAMP)', '200ml', '7 Up'),
(5, '7UP 207ml (CHAMP)', '207ml', '7 Up'),
(6, '7 up 2.25 Ltrs x 6', '2250ml', '7 Up'),
(7, '7 up 2.25 Ltrs x 8', '2250ml', '7 Up'),
(8, '7 UP 250 ML CANS', '250ml - CANS', '7 Up'),
(9, '7UP 300ml', '300ml', '7 Up'),
(10, '7 UP 330 ML CANS', '330ml', '7 Up'),
(11, '7UP 330ml x 24', '330ml - CANS', '7 Up'),
(12, '7 UP 345ml x 24', '345ml', '7 Up'),
(13, '7UP 500ml Wrapper Pack', '500ml', '7 Up'),
(14, '7UP 750ml 24x', '750ml', '7 Up'),
(15, 'POSTMIX 7Up 05 ltr', 'BIB - 05', '7 Up'),
(16, 'POSTMIX 7Up 10ltr', 'BIB - 10', '7 Up'),
(17, 'POSTMIX 7Up 20Ltr', 'BIB - 20', '7 Up'),
(18, 'POSTMIX 7Up 19Lt', 'PMX', '7 Up'),
(19, '7UP Lite 1500ml PET x 12', '1500ml', '7UP Lite'),
(20, '7UP Lite 200ml PET x 24', '200ml', '7UP Lite'),
(21, '7UP Lite 207ml PET x 24', '207ml', '7UP Lite'),
(22, '7UP Lite 300ml RGB x24', '300ml', '7UP Lite'),
(23, '7UP Lite 500ml PET x 24', '500ml', '7UP Lite'),
(24, 'AQUAFINA PET 1.0', '1000ml', 'Aquafina'),
(25, 'AQUAFINA PET 1.0 x 12', '1000ml', 'Aquafina'),
(26, 'AQUAFINA PET 1.0 x 15', '1000ml', 'Aquafina'),
(27, 'AQUAFINA PET 1.5', '1500ml', 'Aquafina'),
(28, 'AQUAFINA BULK 20L JAR', '20000ml', 'Aquafina'),
(29, 'AQUAFINA PET 2.0 x 9', '2000ml', 'Aquafina'),
(30, 'AQUAFINA PET 500ML', '500ml', 'Aquafina'),
(31, 'AQUAFINA PET 500ML x 24', '500ml', 'Aquafina'),
(32, 'AQUAFINA PET 500ML x 20', '500ml', 'Aquafina'),
(33, 'CREAM SODA 1.0 Ltr', '1000ml', 'Cream Soda'),
(34, 'C/ Soda 1.5ml Wrap 12 Pack', '1500ml', 'Cream Soda'),
(35, 'CREAM SODA 2.0 Ltr', '2000ml', 'Cream Soda'),
(36, 'CREAM SODA 200ML', '200ml', 'Cream Soda'),
(37, 'Cream Soda 2.25 Ltrs x 8', '2250ml', 'Cream Soda'),
(38, 'CREAM SODA  330ml PET', '330ml', 'Cream Soda'),
(39, 'Cream Soda 345ml x 24', '345ml', 'Cream Soda'),
(40, 'CREAM SODA 400ML', '400ml', 'Cream Soda'),
(41, 'Cream Soda 500ML Wrapper Pack', '500ml', 'Cream Soda'),
(42, 'Cream Soda 750ml x 24', '750ml', 'Cream Soda'),
(43, 'POSTMIX Ole Cream Soda 05Ltr', 'BIB - 05', 'Cream Soda'),
(44, 'Cream Soda Pmix BIB 10 Ltr', 'BIB - 10', 'Cream Soda'),
(45, 'Cream Soda Pmix BIB 20 Ltr', 'BIB - 20', 'Cream Soda'),
(46, 'CREAMSODA POSTMIX', 'PMX', 'Cream Soda'),
(47, 'DUKE\'S SODA 400ML', '400ml', 'Duke Soda'),
(48, 'Evervess Soda 1000ml x 12', '1000ml', 'Evervess Soda'),
(49, 'Evervess Soda 1500ml x 12', '1500ml', 'Evervess Soda'),
(50, 'Evervess Soda Cans 250ml x 24', '250ml - CANS', 'Evervess Soda'),
(51, 'Evervess Soda 300ml x 24', '300ml', 'Evervess Soda'),
(52, 'Evervess Soda 345ml x 24', '345ml', 'Evervess Soda'),
(53, 'Evervess Soda 500ml x 24', '500ml', 'Evervess Soda'),
(54, 'Ginger Beer 1000ml x 12', '1000ml', 'Ginger Beer'),
(55, 'Ginger Beer 1500ml Wrapper Pac', '1500ml', 'Ginger Beer'),
(56, 'GINGER  BEER 2.0 Ltr', '2000ml', 'Ginger Beer'),
(57, 'GINGER  BEER    200ml', '200ml', 'Ginger Beer'),
(58, 'GINGER  BEER  330ml PET', '330ml', 'Ginger Beer'),
(59, 'Ginger Beer 345ml x 24', '345ml', 'Ginger Beer'),
(60, 'GINGER BEER 400ml', '400ml', 'Ginger Beer'),
(61, 'Ginger Beer - 500ml -PET- x24', '500ml', 'Ginger Beer'),
(62, 'Ginger Beer 750ml x 24', '750ml', 'Ginger Beer'),
(63, 'POSTMIX Ginger Beer 05 ltr', 'BIB - 05', 'Ginger Beer'),
(64, 'Ginger Beer Pmix BIB 10 Ltr', 'BIB - 10', 'Ginger Beer'),
(65, 'Ginger Beer Pmix BIB 20 Ltr', 'BIB - 20', 'Ginger Beer'),
(66, 'POSTMIX GINGER BEER 19Lt', 'PMX', 'Ginger Beer'),
(67, 'Mirinda 1.0 Ltrs', '1000ml', 'Mirinda Orange '),
(68, 'MIR 1.5ML Wrap 12 Pack', '1500ml', 'Mirinda Orange '),
(69, 'Mirinda 2.0 Ltrs', '2000ml', 'Mirinda Orange '),
(70, 'MIRINDA 200ml (CHAMP)', '200ml', 'Mirinda Orange '),
(71, 'MIRINDA 207ML (CHAMP)', '207ml', 'Mirinda Orange '),
(72, 'Mirinda 2.25 Ltrs x 6', '2250ml', 'Mirinda Orange '),
(73, 'Mirinda 2.25 Ltrs x 8', '2250ml', 'Mirinda Orange '),
(74, 'MIRINDA 250 ML CANS-ORANGE', '250ml - CANS', 'Mirinda Orange '),
(75, 'MIRINDA 300ml', '300ml', 'Mirinda Orange '),
(76, 'MIRINDA 330 ML CANS-ORANGE', '330ml', 'Mirinda Orange '),
(77, 'Mirinda 330ml x 24', '330ml - CANS', 'Mirinda Orange '),
(78, 'Mirinda 345ml x 24', '345ml', 'Mirinda Orange '),
(79, 'Mir.  500ml  Wrap 24 Pack', '500ml', 'Mirinda Orange '),
(80, 'Mirinda 750ml 24x', '750ml', 'Mirinda Orange '),
(81, 'POSTMIX MIRINDA 05Ltr', 'BIB - 05', 'Mirinda Orange '),
(82, 'POSTMIX MIRINDA 10Ltr', 'BIB - 10', 'Mirinda Orange '),
(83, 'POSTMIX MIRINDA 20ltr', 'BIB - 20', 'Mirinda Orange '),
(84, 'POSTMIX MIRINDA 19Lt', 'PMX', 'Mirinda Orange '),
(85, 'Mountain Dew - 1000ml x 12', '1000ml', 'Mountain Dew'),
(86, 'Mountain Dew - 1500ml x 12', '1500ml', 'Mountain Dew'),
(87, 'MOUNTAIN DEW 2000ml x 8', '2000ml', 'Mountain Dew'),
(88, 'MOUNTAIN DEW 200ml', '200ml', 'Mountain Dew'),
(89, 'Mountain Dew 2.25 Ltrs x 8', '2250ml', 'Mountain Dew'),
(90, 'MOUNTAIN DEW CANS 250ML', '250ml - CANS', 'Mountain Dew'),
(91, 'MOUNTAIN DEW 300ml x 24', '300ml', 'Mountain Dew'),
(92, 'Mountain Dew 345ml x 24', '345ml', 'Mountain Dew'),
(93, 'Mountain Dew 345ml x 24', '345ml', 'Mountain Dew'),
(94, 'MOUNTAIN DEW 500ml', '500ml', 'Mountain Dew'),
(95, 'Mountain Dew - 750ml 24x', '750ml', 'Mountain Dew'),
(96, 'MOUNTAIN DEW 10 L BIB', 'BIB - 10', 'Mountain Dew'),
(97, 'MOUNTAIN DEW 20 L BIB', 'BIB - 20', 'Mountain Dew'),
(98, 'Ole Soda 1500ml Wrapper Pack', '1500ml', 'Ole Soda'),
(99, 'Ole Soda 330ml Pet', '330ml', 'Ole Soda'),
(100, 'OLE SODA 400ML', '400ml', 'Ole Soda'),
(101, 'Ole Soda 500ml Wrapper Pack', '500ml', 'Ole Soda'),
(102, 'Pepsi 1.0 Ltrs', '1000ml', 'Pepsi'),
(103, 'PEPSI 1.5ml Wrap 12 Pack', '1500ml', 'Pepsi'),
(104, 'Pepsi 2.0 Ltrs', '2000ml', 'Pepsi'),
(105, 'PEPSI 200ml (CHAMP)', '200ml', 'Pepsi'),
(106, 'PEPSI 207ml (CHAMP)', '207ml', 'Pepsi'),
(107, 'Pepsi 2.25 Ltrs x 6', '2250ml', 'Pepsi'),
(108, 'Pepsi 2.25 Ltrs x 8', '2250ml', 'Pepsi'),
(109, 'PEPSI 250 ML CANS', '250ml - CANS', 'Pepsi'),
(110, 'DIET PEPSI 250 ML CANS', '250ml - CANS', 'Pepsi'),
(111, 'PEPSI 300ml', '300ml', 'Pepsi'),
(112, 'Pepsi 330ml x 24', '330ml', 'Pepsi'),
(113, 'PEPSI 330 ML CANS', '330ml', 'Pepsi'),
(114, 'DIET PEPSI 330 ML CANS', '330ml - CANS', 'Pepsi'),
(115, 'Pepsi 345ml x 24', '345ml', 'Pepsi'),
(116, 'Pepsi 500ml wrapper pack', '500ml', 'Pepsi'),
(117, 'Pepsi 750ml 24x', '750ml', 'Pepsi'),
(118, 'POSTMIX PEPSI 10 ltr', 'BIB - 10', 'Pepsi'),
(119, 'POSTMIX PEPSI 20ltf', 'BIB - 20', 'Pepsi'),
(120, 'Pepsi Black - 1500ml x 12', '1500ml', 'Pepsi Black'),
(121, 'Pepsi Black 200ml RGB x 24', '200ml', 'Pepsi Black'),
(122, 'Pepsi Black 250ml CAN x 24', '250ml - CANS', 'Pepsi Black'),
(123, 'Pepsi Black 345ml PET x 24', '345ml', 'Pepsi Black'),
(124, 'Pepsi Black 500ml PET x 24', '500ml', 'Pepsi Black'),
(125, 'Pepsi Black 10 BIB', 'BIB - 10', 'Pepsi Black'),
(126, 'POSTMIX PEPSI 19Lt', 'PMX', 'Pepsi'),
(127, 'STING? 200ML GRB x24', '200ml', 'STING'),
(128, 'STING? 250ML PET x24', '250ml', 'STING'),
(129, 'STING? 250ML CAN x24', '250ml - CANS', 'STING'),
(130, 'TROP MANGO PET 1.0L', '1000ml', 'TROP MANGO'),
(131, 'TROP MANGO PET 200ML', '200ml', 'TROP MANGO'),
(132, 'TROP MANGO PET 500ML', '500ml', 'TROP MANGO'),
(133, 'TROP MIX FRUIT PET 1.0L', '1000ml', 'TROP MIX FRUIT'),
(134, 'TROP MIX FRUIT PET 200ML', '200ml', 'TROP MIX FRUIT'),
(135, 'TROP MIX FRUIT PET 500ML', '500ml', 'TROP MIX FRUIT'),
(136, 'TROP ORANGE PET 1.0L', '1000ml', 'TROP ORANGE'),
(137, 'TROP ORANGE PET 200ML', '200ml', 'TROP ORANGE'),
(138, 'TROP ORANGE PET 500ML', '500ml', 'TROP ORANGE'),
(139, 'ZINGO  1.0 Ltr', '1000ml', 'Zingo'),
(140, 'Zingo  1500ml Wrapper Pack', '1500ml', 'Zingo'),
(141, 'ZINGO  2.0 Ltr', '2000ml', 'Zingo'),
(142, 'ZINGO  200ML', '200ml', 'Zingo'),
(143, 'ZINGO  330ml PET', '330ml', 'Zingo'),
(144, 'Zingo 345ml x 24', '345ml', 'Zingo'),
(145, 'ZINGO 400ml', '400ml', 'Zingo'),
(146, 'Zingo - 500ml -PET- x24', '500ml', 'Zingo'),
(147, 'Zingo 750ml x 24', '750ml', 'Zingo');

-- --------------------------------------------------------

--
-- Table structure for table `temporystock`
--

CREATE TABLE `temporystock` (
  `tid` int(11) NOT NULL,
  `pack` varchar(300) DEFAULT NULL,
  `brand` varchar(300) DEFAULT NULL,
  `item` varchar(300) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `updateDate` varchar(500) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temporystock`
--

INSERT INTO `temporystock` (`tid`, `pack`, `brand`, `item`, `amount`, `updateDate`, `area`) VALUES
(1, '200ml', 'Pepsi', NULL, 5, '2023-01-20', 'kandy'),
(2, 'PMX', 'Aquafina', NULL, 5, '2023-01-20', 'kandy'),
(3, '1000ml', NULL, '7 up 1.0 Ltrs', NULL, NULL, NULL),
(4, '1500ml', NULL, '7UP 1.5ml Wrap 12 Pack', NULL, NULL, NULL),
(5, '1000ml', '7 Up', '7 up 1.0 Ltrs', 100, NULL, NULL),
(6, '1500ml', '7 Up', '7UP 1.5ml Wrap 12 Pack', 100, NULL, NULL),
(7, '1000ml', '7 Up', '7 up 1.0 Ltrs', 100, '2023-01-23', 'kandy'),
(8, '1500ml', '7 Up', '7UP 1.5ml Wrap 12 Pack', 100, '2023-01-23', 'kandy'),
(9, '1000ml', '7 Up', '7 up 1.0 Ltrs', 100, '2023-01-24', 'kandy'),
(10, '1500ml', '7 Up', '7UP 1.5ml Wrap 12 Pack', 100, '2023-01-24', 'kandy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'do',
  `ustatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upassword`, `utype`, `ustatus`) VALUES
(1, 'kaduwela', 'kaduwela', 'do', ''),
(2, 'kandy', 'kandy', 'do', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualstock`
--
ALTER TABLE `actualstock`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporystock`
--
ALTER TABLE `temporystock`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualstock`
--
ALTER TABLE `actualstock`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `temporystock`
--
ALTER TABLE `temporystock`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
