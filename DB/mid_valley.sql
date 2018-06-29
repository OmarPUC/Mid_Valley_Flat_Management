-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 07:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mid_valley`
--

-- --------------------------------------------------------

--
-- Table structure for table `mid_info`
--

CREATE TABLE `mid_info` (
  `id` int(11) NOT NULL,
  `serial_num` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `flat_num` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `owner` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `from_m` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `previous` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `to_m` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `current` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `consumed` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `ebi` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `ebc` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `fuel` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `security` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `operating` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `repair` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `imam` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `rent` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `other` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `payment` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `tka` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `pay_confirm` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `is_trashed` varchar(100) COLLATE utf32_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `mid_info`
--

INSERT INTO `mid_info` (`id`, `serial_num`, `date`, `flat_num`, `owner`, `contact`, `from_m`, `previous`, `to_m`, `current`, `consumed`, `ebi`, `ebc`, `fuel`, `security`, `operating`, `repair`, `imam`, `rent`, `other`, `payment`, `tka`, `pay_confirm`, `is_trashed`) VALUES
(1, '', '2018-02-08', 'A1', 'Abid khan', '0129107994', 'January', '120', 'January', '125', '5', '12', '13', '14', '15', '16', '17', '18', '19', '20', 'Cash', '123', 'Paid', 'No'),
(2, '5', '2018-01-18', 'A2', 'Mizan', '012046570', 'January', 'tata', 'January', 'sata', 'tatat', 'satsa', 'tsatsat', 'tata', 'tata', 'tatat', 'satat', 'atat', 'att', 'at', 'Cash', 'awtt', 'Due', 'No'),
(3, '3', '2018-02-02', 'A3', 'Mabrura Jannat', '01521223634', 'January', '321', 'January', '123', '258', '125', '254', '524', '356', '785', '425', '412', '843', '458', 'Cash', 'Two Hundreds Only ', 'Paid', 'No'),
(4, '', '2018-02-07', 'A4', 'Karim', '0124526585', 'January', '124', 'January', '123', '125', '111', '222', '333', '444', '555', '666', '777', '888', '999', 'Cash', 'Two Hundreds Only ', 'Paid', 'No'),
(5, '2', '2018-02-21', 'A4', 'ripa', '0188347374', 'January', '797', 'January', 'uouo', 'ououo', 'uouo', 'uou', 'ouo', 'uou', 'ouou', 'ouou', 'uouo', 'uouo', 'uou', 'Cash', 'uouo', 'Paid', 'No'),
(6, '54848', '2018-05-03', 'A2', 'Ripon', '1840723299', 'January', 'ghghg', 'January', 'ghghgh', 'ghghg', 'hghg', 'ghgh', 'ghghg', 'hgh', 'ghghgh', 'ghgh', 'ghgh', 'ghfgh', 'ghghgh', 'Cash', 'ghgh', 'Due', 'No'),
(7, '2', '2018-02-06', 'A3', 'gg', 'gg', 'January', 'fdhd', 'January', 'fgdh', 'ggdg', 'dhg', 'fhdf', 'gdg', 'gfhfgh', 'gfgh', 'gfh', 'fdg', 'gdfgh', 'dff', 'Cash', 'fghfddf', 'Paid', 'No'),
(8, '1', '2018-02-01', 'A10', 'wqe', 'qwe', 'January', 'qweq', 'January', 'qwe', 'qwe', 'qwe', 'qew', 'qwe', 'qew', 'qwe', 'qe', 'qew', 'qew', 'qewq', 'Cash', 'qweqwe', 'Due', 'No'),
(9, '123', '2018-05-19', 'A4', 'kamal', '0125485485', 'January', '4512', 'January', '4852', '250', '5642', '4764', '1200', '500', '453', '400', '354', '435', '354', 'Cash', 'two thousand taka only', 'Paid', 'No'),
(10, '1231', '2018-05-09', 'A4', 'muskan', '1840723299', 'January', '4512', 'June', '4852', '150', '1452', '34554', '54334', '500', '453', '400', '4000', '435', '354', 'Cash', 'Twenty Thousand Taka only', 'Due', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `email_verified` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`, `email_verified`) VALUES
(1, 'nazmin@gmail.com', '5a1057a8b2675ea9c43213fb16a212f9', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `flat` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `address` varchar(333) NOT NULL,
  `email_verified` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `flat`, `email`, `password`, `phone`, `address`, `email_verified`) VALUES
(17, 'Test', 'User', 'tushar.chowdhury@gmail.com', '202cb962ac59075b964b07152d234b70', '01711111111', 'Chittagong', 'Yes'),
(18, 'sdjf', 'lksdjf', 'tusharbd@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '5235', 'dfgdg', 'Yes'),
(19, 'asfds', 'sdfgs', 'x@y.z', '202cb962ac59075b964b07152d234b70', '4545', 'sfsj', '4ae15d1c46f25be8db9d07061463c5f0'),
(21, 'hfasdhfh', 'dfhfgh', 'cse12k17@gmail.com', '4297f44b13955235245b2497399d7a93', '435345', 'gdfgdg', 'Yes'),
(22, 'asdas', 'adasda', 'mohibranga@gmail.com', 'c870967513ca7b66789bb10b8fff5c88', 'rwerwer', 'wrewrwer', '8c351ed83eb6077228d2d434b4826694'),
(23, 'omar', 'sharif', 'sjdfjsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01521XXXXXX', 'sd gdfgseff hshfdhdsh', 'ee41e60967d4f3e8b18c2973090d77a1'),
(24, 'omar', 'sharif', 'abc@gmail.com', 'f290942751fb27e28094e542e4c36d4c', 'asdasdasdasdasd', 'dasdasdasd', '30a4c23f236802127855fd2a0dac4042'),
(28, 'w5rw', 'rwerwer', 'Omar Sharif Ansary', 'e0352476a711447756f285771d8cd380', 'werwerewr', 'werwerwer', '06cb844400e9d3805f3f234c68bb7a10'),
(29, 'ahfa', 'A5', 'abcjad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '155164355452', 'jdo iasfojso fh sdhf sdihf oiahsf', '0de17645ec3e94cd66acab12a6f641b6'),
(30, 'Omar Sharif', 'A5', 'teamspartanb59@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '41584858585', 'yes', 'Yes'),
(31, 'Omar Sharif Ansary', 'A4', 'omarsharif439@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01521223634', 'sadasfaE EWATWET WET WET SREGDHFHDFHDFH', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mid_info`
--
ALTER TABLE `mid_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mid_info`
--
ALTER TABLE `mid_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
