-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 12:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualstock`
--

CREATE TABLE `actualstock` (
  `tid` int(11) NOT NULL,
  `pack` varchar(300) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `item` varchar(300) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `updateDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actualstock`
--

INSERT INTO `actualstock` (`tid`, `pack`, `brand`, `item`, `amount`, `updateDate`) VALUES
(1, '1000ml', '7 Up', '7 up 1.0 Ltrs', '100', '2023-01-11'),
(2, '1500ml', '7 Up', '7UP 1.5ml Wrap 12 Pack', '200', '2023-01-11'),
(3, '2000ml', '7 Up', '7 up 2.0 Ltrs', '300', '2023-01-11'),
(4, '200ml', '7 Up', '7 UP 200ml (CHAMP)', '400', '2023-01-11'),
(5, '207ml', '7 Up', '7UP 207ml (CHAMP)', '500', '2023-01-11'),
(6, '2250ml', '7 Up', '7 up 2.25 Ltrs x 6', '600', '2023-01-11'),
(7, '2250ml', '7 Up', '7 up 2.25 Ltrs x 8', '601', '2023-01-11'),
(8, '250ml - CANS', '7 Up', '7 UP 250 ML CANS', '602', '2023-01-11'),
(9, '300ml', '7 Up', '7UP 300ml', '603', '2023-01-11'),
(10, '330ml', '7 Up', '7 UP 330 ML CANS', '604', '2023-01-11'),
(11, '330ml - CANS', '7 Up', '7UP 330ml x 24', '605', '2023-01-11'),
(12, '345ml', '7 Up', '7 UP 345ml x 24', '606', '2023-01-11'),
(13, '500ml', '7 Up', '7UP 500ml Wrapper Pack', '607', '2023-01-11'),
(14, '750ml', '7 Up', '7UP 750ml 24x', '608', '2023-01-11'),
(15, 'BIB - 05', '7 Up', 'POSTMIX 7Up 05 ltr', '609', '2023-01-11'),
(16, 'BIB - 10', '7 Up', 'POSTMIX 7Up 10ltr', '610', '2023-01-11'),
(17, 'BIB - 20', '7 Up', 'POSTMIX 7Up 20Ltr', '611', '2023-01-11'),
(18, 'PMX', '7 Up', 'POSTMIX 7Up 19Lt', '612', '2023-01-11'),
(19, '1500ml', '7UP Lite', '7UP Lite 1500ml PET x 12', '613', '2023-01-11'),
(20, '200ml', '7UP Lite', '7UP Lite 200ml PET x 24', '614', '2023-01-11'),
(21, '207ml', '7UP Lite', '7UP Lite 207ml PET x 24', '615', '2023-01-11'),
(22, '300ml', '7UP Lite', '7UP Lite 300ml RGB x24', '616', '2023-01-11'),
(23, '500ml', '7UP Lite', '7UP Lite 500ml PET x 24', '617', '2023-01-11'),
(24, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0', '618', '2023-01-11'),
(25, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0 x 12', '619', '2023-01-11'),
(26, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0 x 15', '620', '2023-01-11'),
(27, '1500ml', 'Aquafina', 'AQUAFINA PET 1.5', '621', '2023-01-11'),
(28, '20000ml', 'Aquafina', 'AQUAFINA BULK 20L JAR', '622', '2023-01-11'),
(29, '2000ml', 'Aquafina', 'AQUAFINA PET 2.0 x 9', '623', '2023-01-11'),
(30, '500ml', 'Aquafina', 'AQUAFINA PET 500ML', '624', '2023-01-11'),
(31, '500ml', 'Aquafina', 'AQUAFINA PET 500ML x 24', '625', '2023-01-11'),
(32, '500ml', 'Aquafina', 'AQUAFINA PET 500ML x 20', '626', '2023-01-11'),
(33, '1000ml', 'Cream Soda', 'CREAM SODA 1.0 Ltr', '627', '2023-01-11'),
(34, '1500ml', 'Cream Soda', 'C/ Soda 1.5ml Wrap 12 Pack', '628', '2023-01-11'),
(35, '2000ml', 'Cream Soda', 'CREAM SODA 2.0 Ltr', '629', '2023-01-11'),
(36, '200ml', 'Cream Soda', 'CREAM SODA 200ML', '630', '2023-01-11'),
(37, '2250ml', 'Cream Soda', 'Cream Soda 2.25 Ltrs x 8', '631', '2023-01-11'),
(38, '330ml', 'Cream Soda', 'CREAM SODA  330ml PET', '632', '2023-01-11'),
(39, '345ml', 'Cream Soda', 'Cream Soda 345ml x 24', '633', '2023-01-11'),
(40, '400ml', 'Cream Soda', 'CREAM SODA 400ML', '634', '2023-01-11'),
(41, '500ml', 'Cream Soda', 'Cream Soda 500ML Wrapper Pack', '635', '2023-01-11'),
(42, '750ml', 'Cream Soda', 'Cream Soda 750ml x 24', '636', '2023-01-11'),
(43, 'BIB - 05', 'Cream Soda', 'POSTMIX Ole Cream Soda 05Ltr', '637', '2023-01-11'),
(44, 'BIB - 10', 'Cream Soda', 'Cream Soda Pmix BIB 10 Ltr', '638', '2023-01-11'),
(45, 'BIB - 20', 'Cream Soda', 'Cream Soda Pmix BIB 20 Ltr', '639', '2023-01-11'),
(46, 'PMX', 'Cream Soda', 'CREAMSODA POSTMIX', '640', '2023-01-11'),
(47, '1000ml', 'Evervess Soda', 'Evervess Soda 1000ml x 12', '642', '2023-01-11'),
(48, '1500ml', 'Evervess Soda', 'Evervess Soda 1500ml x 12', '643', '2023-01-11'),
(49, '250ml - CANS', 'Evervess Soda', 'Evervess Soda Cans 250ml x 24', '644', '2023-01-11'),
(50, '300ml', 'Evervess Soda', 'Evervess Soda 300ml x 24', '645', '2023-01-11'),
(51, '345ml', 'Evervess Soda', 'Evervess Soda 345ml x 24', '646', '2023-01-11'),
(52, '500ml', 'Evervess Soda', 'Evervess Soda 500ml x 24', '647', '2023-01-11'),
(53, '1000ml', 'Ginger Beer', 'Ginger Beer 1000ml x 12', '648', '2023-01-11'),
(54, '1500ml', 'Ginger Beer', 'Ginger Beer 1500ml Wrapper Pac', '649', '2023-01-11'),
(55, '2000ml', 'Ginger Beer', 'GINGER  BEER 2.0 Ltr', '650', '2023-01-11'),
(56, '200ml', 'Ginger Beer', 'GINGER  BEER    200ml', '651', '2023-01-11'),
(57, '330ml', 'Ginger Beer', 'GINGER  BEER  330ml PET', '652', '2023-01-11'),
(58, '345ml', 'Ginger Beer', 'Ginger Beer 345ml x 24', '653', '2023-01-11'),
(59, '400ml', 'Ginger Beer', 'GINGER BEER 400ml', '654', '2023-01-11'),
(60, '500ml', 'Ginger Beer', 'Ginger Beer - 500ml -PET- x24', '655', '2023-01-11'),
(61, '750ml', 'Ginger Beer', 'Ginger Beer 750ml x 24', '656', '2023-01-11'),
(62, 'BIB - 05', 'Ginger Beer', 'POSTMIX Ginger Beer 05 ltr', '657', '2023-01-11'),
(63, 'BIB - 10', 'Ginger Beer', 'Ginger Beer Pmix BIB 10 Ltr', '658', '2023-01-11'),
(64, 'BIB - 20', 'Ginger Beer', 'Ginger Beer Pmix BIB 20 Ltr', '659', '2023-01-11'),
(65, 'PMX', 'Ginger Beer', 'POSTMIX GINGER BEER 19Lt', '660', '2023-01-11'),
(66, '1000ml', 'Mirinda Orange ', 'Mirinda 1.0 Ltrs', '661', '2023-01-11'),
(67, '1500ml', 'Mirinda Orange ', 'MIR 1.5ML Wrap 12 Pack', '662', '2023-01-11'),
(68, '2000ml', 'Mirinda Orange ', 'Mirinda 2.0 Ltrs', '663', '2023-01-11'),
(69, '200ml', 'Mirinda Orange ', 'MIRINDA 200ml (CHAMP)', '664', '2023-01-11'),
(70, '207ml', 'Mirinda Orange ', 'MIRINDA 207ML (CHAMP)', '665', '2023-01-11'),
(71, '2250ml', 'Mirinda Orange ', 'Mirinda 2.25 Ltrs x 6', '666', '2023-01-11'),
(72, '2250ml', 'Mirinda Orange ', 'Mirinda 2.25 Ltrs x 8', '667', '2023-01-11'),
(73, '250ml - CANS', 'Mirinda Orange ', 'MIRINDA 250 ML CANS-ORANGE', '668', '2023-01-11'),
(74, '300ml', 'Mirinda Orange ', 'MIRINDA 300ml', '669', '2023-01-11'),
(75, '330ml', 'Mirinda Orange ', 'MIRINDA 330 ML CANS-ORANGE', '670', '2023-01-11'),
(76, '330ml - CANS', 'Mirinda Orange ', 'Mirinda 330ml x 24', '671', '2023-01-11'),
(77, '345ml', 'Mirinda Orange ', 'Mirinda 345ml x 24', '672', '2023-01-11'),
(78, '500ml', 'Mirinda Orange ', 'Mir.  500ml  Wrap 24 Pack', '673', '2023-01-11'),
(79, '750ml', 'Mirinda Orange ', 'Mirinda 750ml 24x', '674', '2023-01-11'),
(80, 'BIB - 05', 'Mirinda Orange ', 'POSTMIX MIRINDA 05Ltr', '675', '2023-01-11'),
(81, 'BIB - 10', 'Mirinda Orange ', 'POSTMIX MIRINDA 10Ltr', '676', '2023-01-11'),
(82, 'BIB - 20', 'Mirinda Orange ', 'POSTMIX MIRINDA 20ltr', '677', '2023-01-11'),
(83, 'PMX', 'Mirinda Orange ', 'POSTMIX MIRINDA 19Lt', '678', '2023-01-11'),
(84, '1000ml', 'Mountain Dew', 'Mountain Dew - 1000ml x 12', '679', '2023-01-11'),
(85, '1500ml', 'Mountain Dew', 'Mountain Dew - 1500ml x 12', '680', '2023-01-11'),
(86, '2000ml', 'Mountain Dew', 'MOUNTAIN DEW 2000ml x 8', '681', '2023-01-11'),
(87, '200ml', 'Mountain Dew', 'MOUNTAIN DEW 200ml', '682', '2023-01-11'),
(88, '2250ml', 'Mountain Dew', 'Mountain Dew 2.25 Ltrs x 8', '683', '2023-01-11'),
(89, '250ml - CANS', 'Mountain Dew', 'MOUNTAIN DEW CANS 250ML', '684', '2023-01-11'),
(90, '300ml', 'Mountain Dew', 'MOUNTAIN DEW 300ml x 24', '685', '2023-01-11'),
(91, '345ml', 'Mountain Dew', 'Mountain Dew 345ml x 24', '686', '2023-01-11'),
(92, '345ml', 'Mountain Dew', 'Mountain Dew 345ml x 24', '687', '2023-01-11'),
(93, '500ml', 'Mountain Dew', 'MOUNTAIN DEW 500ml', '688', '2023-01-11'),
(94, '750ml', 'Mountain Dew', 'Mountain Dew - 750ml 24x', '689', '2023-01-11'),
(95, 'BIB - 10', 'Mountain Dew', 'MOUNTAIN DEW 10 L BIB', '690', '2023-01-11'),
(96, 'BIB - 20', 'Mountain Dew', 'MOUNTAIN DEW 20 L BIB', '691', '2023-01-11'),
(97, '1500ml', 'Ole Soda', 'Ole Soda 1500ml Wrapper Pack', '692', '2023-01-11'),
(98, '330ml', 'Ole Soda', 'Ole Soda 330ml Pet', '693', '2023-01-11'),
(99, '400ml', 'Ole Soda', 'OLE SODA 400ML', '694', '2023-01-11'),
(100, '500ml', 'Ole Soda', 'Ole Soda 500ml Wrapper Pack', '695', '2023-01-11'),
(101, '1000ml', 'Pepsi', 'Pepsi 1.0 Ltrs', '696', '2023-01-11'),
(102, '1500ml', 'Pepsi', 'PEPSI 1.5ml Wrap 12 Pack', '697', '2023-01-11'),
(103, '2000ml', 'Pepsi', 'Pepsi 2.0 Ltrs', '698', '2023-01-11'),
(104, '200ml', 'Pepsi', 'PEPSI 200ml (CHAMP)', '699', '2023-01-11'),
(105, '207ml', 'Pepsi', 'PEPSI 207ml (CHAMP)', '700', '2023-01-11'),
(106, '2250ml', 'Pepsi', 'Pepsi 2.25 Ltrs x 6', '701', '2023-01-11'),
(107, '2250ml', 'Pepsi', 'Pepsi 2.25 Ltrs x 8', '702', '2023-01-11'),
(108, '250ml - CANS', 'Pepsi', 'PEPSI 250 ML CANS', '703', '2023-01-11'),
(109, '250ml - CANS', 'Pepsi', 'DIET PEPSI 250 ML CANS', '704', '2023-01-11'),
(110, '300ml', 'Pepsi', 'PEPSI 300ml', '705', '2023-01-11'),
(111, '330ml', 'Pepsi', 'Pepsi 330ml x 24', '706', '2023-01-11'),
(112, '330ml', 'Pepsi', 'PEPSI 330 ML CANS', '707', '2023-01-11'),
(113, '330ml - CANS', 'Pepsi', 'DIET PEPSI 330 ML CANS', '708', '2023-01-11'),
(114, '345ml', 'Pepsi', 'Pepsi 345ml x 24', '709', '2023-01-11'),
(115, '500ml', 'Pepsi', 'Pepsi 500ml wrapper pack', '710', '2023-01-11'),
(116, '750ml', 'Pepsi', 'Pepsi 750ml 24x', '711', '2023-01-11'),
(117, 'BIB - 10', 'Pepsi', 'POSTMIX PEPSI 10 ltr', '712', '2023-01-11'),
(118, 'BIB - 20', 'Pepsi', 'POSTMIX PEPSI 20ltf', '713', '2023-01-11'),
(119, '1500ml', 'Pepsi Black', 'Pepsi Black - 1500ml x 12', '714', '2023-01-11'),
(120, '200ml', 'Pepsi Black', 'Pepsi Black 200ml RGB x 24', '715', '2023-01-11'),
(121, '250ml - CANS', 'Pepsi Black', 'Pepsi Black 250ml CAN x 24', '716', '2023-01-11'),
(122, '345ml', 'Pepsi Black', 'Pepsi Black 345ml PET x 24', '717', '2023-01-11'),
(123, '500ml', 'Pepsi Black', 'Pepsi Black 500ml PET x 24', '718', '2023-01-11'),
(124, 'BIB - 10', 'Pepsi Black', 'Pepsi Black 10 BIB', '719', '2023-01-11'),
(125, 'PMX', 'Pepsi', 'POSTMIX PEPSI 19Lt', '720', '2023-01-11'),
(126, '200ml', 'STING', 'STING? 200ML GRB x24', '721', '2023-01-11'),
(127, '250ml', 'STING', 'STING? 250ML PET x24', '722', '2023-01-11'),
(128, '250ml - CANS', 'STING', 'STING? 250ML CAN x24', '723', '2023-01-11'),
(129, '1000ml', 'TROP MANGO', 'TROP MANGO PET 1.0L', '724', '2023-01-11'),
(130, '200ml', 'TROP MANGO', 'TROP MANGO PET 200ML', '725', '2023-01-11'),
(131, '500ml', 'TROP MANGO', 'TROP MANGO PET 500ML', '726', '2023-01-11'),
(132, '1000ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 1.0L', '727', '2023-01-11'),
(133, '200ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 200ML', '728', '2023-01-11'),
(134, '500ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 500ML', '729', '2023-01-11'),
(135, '1000ml', 'TROP ORANGE', 'TROP ORANGE PET 1.0L', '730', '2023-01-11'),
(136, '200ml', 'TROP ORANGE', 'TROP ORANGE PET 200ML', '731', '2023-01-11'),
(137, '500ml', 'TROP ORANGE', 'TROP ORANGE PET 500ML', '732', '2023-01-11'),
(138, '1000ml', 'Zingo', 'ZINGO  1.0 Ltr', '733', '2023-01-11'),
(139, '1500ml', 'Zingo', 'Zingo  1500ml Wrapper Pack', '734', '2023-01-11'),
(140, '2000ml', 'Zingo', 'ZINGO  2.0 Ltr', '735', '2023-01-11'),
(141, '200ml', 'Zingo', 'ZINGO  200ML', '736', '2023-01-11'),
(142, '330ml', 'Zingo', 'ZINGO  330ml PET', '737', '2023-01-11'),
(143, '345ml', 'Zingo', 'Zingo 345ml x 24', '738', '2023-01-11'),
(144, '400ml', 'Zingo', 'ZINGO 400ml', '739', '2023-01-11'),
(145, '500ml', 'Zingo', 'Zingo - 500ml -PET- x24', '740', '2023-01-11'),
(146, '750ml', 'Zingo', 'Zingo 750ml x 24', '741', '2023-01-11'),
(147, '', '', '', '', '2023-01-11');

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
  `pack` varchar(300) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `item` varchar(300) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `updateDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temporystock`
--

INSERT INTO `temporystock` (`tid`, `pack`, `brand`, `item`, `amount`, `updateDate`) VALUES
(1, '1000ml', '7 Up', '7 up 1.0 Ltrs', '100', '2023-01-11'),
(2, '1500ml', '7 Up', '7UP 1.5ml Wrap 12 Pack', '200', '2023-01-11'),
(3, '2000ml', '7 Up', '7 up 2.0 Ltrs', '300', '2023-01-11'),
(4, '200ml', '7 Up', '7 UP 200ml (CHAMP)', '400', '2023-01-11'),
(5, '207ml', '7 Up', '7UP 207ml (CHAMP)', '500', '2023-01-11'),
(6, '2250ml', '7 Up', '7 up 2.25 Ltrs x 6', '600', '2023-01-11'),
(7, '2250ml', '7 Up', '7 up 2.25 Ltrs x 8', '601', '2023-01-11'),
(8, '250ml - CANS', '7 Up', '7 UP 250 ML CANS', '602', '2023-01-11'),
(9, '300ml', '7 Up', '7UP 300ml', '603', '2023-01-11'),
(10, '330ml', '7 Up', '7 UP 330 ML CANS', '604', '2023-01-11'),
(11, '330ml - CANS', '7 Up', '7UP 330ml x 24', '605', '2023-01-11'),
(12, '345ml', '7 Up', '7 UP 345ml x 24', '606', '2023-01-11'),
(13, '500ml', '7 Up', '7UP 500ml Wrapper Pack', '607', '2023-01-11'),
(14, '750ml', '7 Up', '7UP 750ml 24x', '608', '2023-01-11'),
(15, 'BIB - 05', '7 Up', 'POSTMIX 7Up 05 ltr', '609', '2023-01-11'),
(16, 'BIB - 10', '7 Up', 'POSTMIX 7Up 10ltr', '610', '2023-01-11'),
(17, 'BIB - 20', '7 Up', 'POSTMIX 7Up 20Ltr', '611', '2023-01-11'),
(18, 'PMX', '7 Up', 'POSTMIX 7Up 19Lt', '612', '2023-01-11'),
(19, '1500ml', '7UP Lite', '7UP Lite 1500ml PET x 12', '613', '2023-01-11'),
(20, '200ml', '7UP Lite', '7UP Lite 200ml PET x 24', '614', '2023-01-11'),
(21, '207ml', '7UP Lite', '7UP Lite 207ml PET x 24', '615', '2023-01-11'),
(22, '300ml', '7UP Lite', '7UP Lite 300ml RGB x24', '616', '2023-01-11'),
(23, '500ml', '7UP Lite', '7UP Lite 500ml PET x 24', '617', '2023-01-11'),
(24, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0', '618', '2023-01-11'),
(25, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0 x 12', '619', '2023-01-11'),
(26, '1000ml', 'Aquafina', 'AQUAFINA PET 1.0 x 15', '620', '2023-01-11'),
(27, '1500ml', 'Aquafina', 'AQUAFINA PET 1.5', '621', '2023-01-11'),
(28, '20000ml', 'Aquafina', 'AQUAFINA BULK 20L JAR', '622', '2023-01-11'),
(29, '2000ml', 'Aquafina', 'AQUAFINA PET 2.0 x 9', '623', '2023-01-11'),
(30, '500ml', 'Aquafina', 'AQUAFINA PET 500ML', '624', '2023-01-11'),
(31, '500ml', 'Aquafina', 'AQUAFINA PET 500ML x 24', '625', '2023-01-11'),
(32, '500ml', 'Aquafina', 'AQUAFINA PET 500ML x 20', '626', '2023-01-11'),
(33, '1000ml', 'Cream Soda', 'CREAM SODA 1.0 Ltr', '627', '2023-01-11'),
(34, '1500ml', 'Cream Soda', 'C/ Soda 1.5ml Wrap 12 Pack', '628', '2023-01-11'),
(35, '2000ml', 'Cream Soda', 'CREAM SODA 2.0 Ltr', '629', '2023-01-11'),
(36, '200ml', 'Cream Soda', 'CREAM SODA 200ML', '630', '2023-01-11'),
(37, '2250ml', 'Cream Soda', 'Cream Soda 2.25 Ltrs x 8', '631', '2023-01-11'),
(38, '330ml', 'Cream Soda', 'CREAM SODA  330ml PET', '632', '2023-01-11'),
(39, '345ml', 'Cream Soda', 'Cream Soda 345ml x 24', '633', '2023-01-11'),
(40, '400ml', 'Cream Soda', 'CREAM SODA 400ML', '634', '2023-01-11'),
(41, '500ml', 'Cream Soda', 'Cream Soda 500ML Wrapper Pack', '635', '2023-01-11'),
(42, '750ml', 'Cream Soda', 'Cream Soda 750ml x 24', '636', '2023-01-11'),
(43, 'BIB - 05', 'Cream Soda', 'POSTMIX Ole Cream Soda 05Ltr', '637', '2023-01-11'),
(44, 'BIB - 10', 'Cream Soda', 'Cream Soda Pmix BIB 10 Ltr', '638', '2023-01-11'),
(45, 'BIB - 20', 'Cream Soda', 'Cream Soda Pmix BIB 20 Ltr', '639', '2023-01-11'),
(46, 'PMX', 'Cream Soda', 'CREAMSODA POSTMIX', '640', '2023-01-11'),
(47, '1000ml', 'Evervess Soda', 'Evervess Soda 1000ml x 12', '642', '2023-01-11'),
(48, '1500ml', 'Evervess Soda', 'Evervess Soda 1500ml x 12', '643', '2023-01-11'),
(49, '250ml - CANS', 'Evervess Soda', 'Evervess Soda Cans 250ml x 24', '644', '2023-01-11'),
(50, '300ml', 'Evervess Soda', 'Evervess Soda 300ml x 24', '645', '2023-01-11'),
(51, '345ml', 'Evervess Soda', 'Evervess Soda 345ml x 24', '646', '2023-01-11'),
(52, '500ml', 'Evervess Soda', 'Evervess Soda 500ml x 24', '647', '2023-01-11'),
(53, '1000ml', 'Ginger Beer', 'Ginger Beer 1000ml x 12', '648', '2023-01-11'),
(54, '1500ml', 'Ginger Beer', 'Ginger Beer 1500ml Wrapper Pac', '649', '2023-01-11'),
(55, '2000ml', 'Ginger Beer', 'GINGER  BEER 2.0 Ltr', '650', '2023-01-11'),
(56, '200ml', 'Ginger Beer', 'GINGER  BEER    200ml', '651', '2023-01-11'),
(57, '330ml', 'Ginger Beer', 'GINGER  BEER  330ml PET', '652', '2023-01-11'),
(58, '345ml', 'Ginger Beer', 'Ginger Beer 345ml x 24', '653', '2023-01-11'),
(59, '400ml', 'Ginger Beer', 'GINGER BEER 400ml', '654', '2023-01-11'),
(60, '500ml', 'Ginger Beer', 'Ginger Beer - 500ml -PET- x24', '655', '2023-01-11'),
(61, '750ml', 'Ginger Beer', 'Ginger Beer 750ml x 24', '656', '2023-01-11'),
(62, 'BIB - 05', 'Ginger Beer', 'POSTMIX Ginger Beer 05 ltr', '657', '2023-01-11'),
(63, 'BIB - 10', 'Ginger Beer', 'Ginger Beer Pmix BIB 10 Ltr', '658', '2023-01-11'),
(64, 'BIB - 20', 'Ginger Beer', 'Ginger Beer Pmix BIB 20 Ltr', '659', '2023-01-11'),
(65, 'PMX', 'Ginger Beer', 'POSTMIX GINGER BEER 19Lt', '660', '2023-01-11'),
(66, '1000ml', 'Mirinda Orange ', 'Mirinda 1.0 Ltrs', '661', '2023-01-11'),
(67, '1500ml', 'Mirinda Orange ', 'MIR 1.5ML Wrap 12 Pack', '662', '2023-01-11'),
(68, '2000ml', 'Mirinda Orange ', 'Mirinda 2.0 Ltrs', '663', '2023-01-11'),
(69, '200ml', 'Mirinda Orange ', 'MIRINDA 200ml (CHAMP)', '664', '2023-01-11'),
(70, '207ml', 'Mirinda Orange ', 'MIRINDA 207ML (CHAMP)', '665', '2023-01-11'),
(71, '2250ml', 'Mirinda Orange ', 'Mirinda 2.25 Ltrs x 6', '666', '2023-01-11'),
(72, '2250ml', 'Mirinda Orange ', 'Mirinda 2.25 Ltrs x 8', '667', '2023-01-11'),
(73, '250ml - CANS', 'Mirinda Orange ', 'MIRINDA 250 ML CANS-ORANGE', '668', '2023-01-11'),
(74, '300ml', 'Mirinda Orange ', 'MIRINDA 300ml', '669', '2023-01-11'),
(75, '330ml', 'Mirinda Orange ', 'MIRINDA 330 ML CANS-ORANGE', '670', '2023-01-11'),
(76, '330ml - CANS', 'Mirinda Orange ', 'Mirinda 330ml x 24', '671', '2023-01-11'),
(77, '345ml', 'Mirinda Orange ', 'Mirinda 345ml x 24', '672', '2023-01-11'),
(78, '500ml', 'Mirinda Orange ', 'Mir.  500ml  Wrap 24 Pack', '673', '2023-01-11'),
(79, '750ml', 'Mirinda Orange ', 'Mirinda 750ml 24x', '674', '2023-01-11'),
(80, 'BIB - 05', 'Mirinda Orange ', 'POSTMIX MIRINDA 05Ltr', '675', '2023-01-11'),
(81, 'BIB - 10', 'Mirinda Orange ', 'POSTMIX MIRINDA 10Ltr', '676', '2023-01-11'),
(82, 'BIB - 20', 'Mirinda Orange ', 'POSTMIX MIRINDA 20ltr', '677', '2023-01-11'),
(83, 'PMX', 'Mirinda Orange ', 'POSTMIX MIRINDA 19Lt', '678', '2023-01-11'),
(84, '1000ml', 'Mountain Dew', 'Mountain Dew - 1000ml x 12', '679', '2023-01-11'),
(85, '1500ml', 'Mountain Dew', 'Mountain Dew - 1500ml x 12', '680', '2023-01-11'),
(86, '2000ml', 'Mountain Dew', 'MOUNTAIN DEW 2000ml x 8', '681', '2023-01-11'),
(87, '200ml', 'Mountain Dew', 'MOUNTAIN DEW 200ml', '682', '2023-01-11'),
(88, '2250ml', 'Mountain Dew', 'Mountain Dew 2.25 Ltrs x 8', '683', '2023-01-11'),
(89, '250ml - CANS', 'Mountain Dew', 'MOUNTAIN DEW CANS 250ML', '684', '2023-01-11'),
(90, '300ml', 'Mountain Dew', 'MOUNTAIN DEW 300ml x 24', '685', '2023-01-11'),
(91, '345ml', 'Mountain Dew', 'Mountain Dew 345ml x 24', '686', '2023-01-11'),
(92, '345ml', 'Mountain Dew', 'Mountain Dew 345ml x 24', '687', '2023-01-11'),
(93, '500ml', 'Mountain Dew', 'MOUNTAIN DEW 500ml', '688', '2023-01-11'),
(94, '750ml', 'Mountain Dew', 'Mountain Dew - 750ml 24x', '689', '2023-01-11'),
(95, 'BIB - 10', 'Mountain Dew', 'MOUNTAIN DEW 10 L BIB', '690', '2023-01-11'),
(96, 'BIB - 20', 'Mountain Dew', 'MOUNTAIN DEW 20 L BIB', '691', '2023-01-11'),
(97, '1500ml', 'Ole Soda', 'Ole Soda 1500ml Wrapper Pack', '692', '2023-01-11'),
(98, '330ml', 'Ole Soda', 'Ole Soda 330ml Pet', '693', '2023-01-11'),
(99, '400ml', 'Ole Soda', 'OLE SODA 400ML', '694', '2023-01-11'),
(100, '500ml', 'Ole Soda', 'Ole Soda 500ml Wrapper Pack', '695', '2023-01-11'),
(101, '1000ml', 'Pepsi', 'Pepsi 1.0 Ltrs', '696', '2023-01-11'),
(102, '1500ml', 'Pepsi', 'PEPSI 1.5ml Wrap 12 Pack', '697', '2023-01-11'),
(103, '2000ml', 'Pepsi', 'Pepsi 2.0 Ltrs', '698', '2023-01-11'),
(104, '200ml', 'Pepsi', 'PEPSI 200ml (CHAMP)', '699', '2023-01-11'),
(105, '207ml', 'Pepsi', 'PEPSI 207ml (CHAMP)', '700', '2023-01-11'),
(106, '2250ml', 'Pepsi', 'Pepsi 2.25 Ltrs x 6', '701', '2023-01-11'),
(107, '2250ml', 'Pepsi', 'Pepsi 2.25 Ltrs x 8', '702', '2023-01-11'),
(108, '250ml - CANS', 'Pepsi', 'PEPSI 250 ML CANS', '703', '2023-01-11'),
(109, '250ml - CANS', 'Pepsi', 'DIET PEPSI 250 ML CANS', '704', '2023-01-11'),
(110, '300ml', 'Pepsi', 'PEPSI 300ml', '705', '2023-01-11'),
(111, '330ml', 'Pepsi', 'Pepsi 330ml x 24', '706', '2023-01-11'),
(112, '330ml', 'Pepsi', 'PEPSI 330 ML CANS', '707', '2023-01-11'),
(113, '330ml - CANS', 'Pepsi', 'DIET PEPSI 330 ML CANS', '708', '2023-01-11'),
(114, '345ml', 'Pepsi', 'Pepsi 345ml x 24', '709', '2023-01-11'),
(115, '500ml', 'Pepsi', 'Pepsi 500ml wrapper pack', '710', '2023-01-11'),
(116, '750ml', 'Pepsi', 'Pepsi 750ml 24x', '711', '2023-01-11'),
(117, 'BIB - 10', 'Pepsi', 'POSTMIX PEPSI 10 ltr', '712', '2023-01-11'),
(118, 'BIB - 20', 'Pepsi', 'POSTMIX PEPSI 20ltf', '713', '2023-01-11'),
(119, '1500ml', 'Pepsi Black', 'Pepsi Black - 1500ml x 12', '714', '2023-01-11'),
(120, '200ml', 'Pepsi Black', 'Pepsi Black 200ml RGB x 24', '715', '2023-01-11'),
(121, '250ml - CANS', 'Pepsi Black', 'Pepsi Black 250ml CAN x 24', '716', '2023-01-11'),
(122, '345ml', 'Pepsi Black', 'Pepsi Black 345ml PET x 24', '717', '2023-01-11'),
(123, '500ml', 'Pepsi Black', 'Pepsi Black 500ml PET x 24', '718', '2023-01-11'),
(124, 'BIB - 10', 'Pepsi Black', 'Pepsi Black 10 BIB', '719', '2023-01-11'),
(125, 'PMX', 'Pepsi', 'POSTMIX PEPSI 19Lt', '720', '2023-01-11'),
(126, '200ml', 'STING', 'STING? 200ML GRB x24', '721', '2023-01-11'),
(127, '250ml', 'STING', 'STING? 250ML PET x24', '722', '2023-01-11'),
(128, '250ml - CANS', 'STING', 'STING? 250ML CAN x24', '723', '2023-01-11'),
(129, '1000ml', 'TROP MANGO', 'TROP MANGO PET 1.0L', '724', '2023-01-11'),
(130, '200ml', 'TROP MANGO', 'TROP MANGO PET 200ML', '725', '2023-01-11'),
(131, '500ml', 'TROP MANGO', 'TROP MANGO PET 500ML', '726', '2023-01-11'),
(132, '1000ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 1.0L', '727', '2023-01-11'),
(133, '200ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 200ML', '728', '2023-01-11'),
(134, '500ml', 'TROP MIX FRUIT', 'TROP MIX FRUIT PET 500ML', '729', '2023-01-11'),
(135, '1000ml', 'TROP ORANGE', 'TROP ORANGE PET 1.0L', '730', '2023-01-11'),
(136, '200ml', 'TROP ORANGE', 'TROP ORANGE PET 200ML', '731', '2023-01-11'),
(137, '500ml', 'TROP ORANGE', 'TROP ORANGE PET 500ML', '732', '2023-01-11'),
(138, '1000ml', 'Zingo', 'ZINGO  1.0 Ltr', '733', '2023-01-11'),
(139, '1500ml', 'Zingo', 'Zingo  1500ml Wrapper Pack', '734', '2023-01-11'),
(140, '2000ml', 'Zingo', 'ZINGO  2.0 Ltr', '735', '2023-01-11'),
(141, '200ml', 'Zingo', 'ZINGO  200ML', '736', '2023-01-11'),
(142, '330ml', 'Zingo', 'ZINGO  330ml PET', '737', '2023-01-11'),
(143, '345ml', 'Zingo', 'Zingo 345ml x 24', '738', '2023-01-11'),
(144, '400ml', 'Zingo', 'ZINGO 400ml', '739', '2023-01-11'),
(145, '500ml', 'Zingo', 'Zingo - 500ml -PET- x24', '740', '2023-01-11'),
(146, '750ml', 'Zingo', 'Zingo 750ml x 24', '741', '2023-01-11');

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
(1, 'kaduwela', 'kaduwela', 'do', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualstock`
--
ALTER TABLE `actualstock`
  ADD PRIMARY KEY (`tid`);

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
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `temporystock`
--
ALTER TABLE `temporystock`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
