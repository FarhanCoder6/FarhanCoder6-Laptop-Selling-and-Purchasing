-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 12:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classified`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `email`, `pass`) VALUES
(1, '374727.jpg', 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `image`) VALUES
(11, 'Samsung', 'samsung.jpg'),
(12, 'Apple', 'apple.png'),
(13, 'Acer', 'acer.png'),
(14, 'Hp', 'hp.jpg'),
(15, 'sony', 'sony.jpg'),
(16, 'Lenovo', 'Lenovo.png'),
(17, 'Toshiba', 'toshiba.jpg'),
(18, 'Dell', 'dell.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Zeshan', 'admin@gmail.com', 'complain', 'I HAVE SOME ISSUES IN MY ACCOUNT'),
(2, 'RAshid', 'skt@gmail.com', 'help', 'i need help!'),
(3, 'Amir NawaZ', 'admin@gmail.com', 'rtyui', 'fghjyklu;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
`id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `product_id`, `photo`, `date`) VALUES
(14, '15', '5bc0ecca5f429_product6.png', '2018-10-12 18:49:46'),
(15, '17', '5bc0f339e7db3_product2.png', '2018-10-12 19:17:13'),
(16, '18', '5bc0f3cb1f1c0_service2.png', '2018-10-12 19:19:39'),
(17, '19', '5bc0f5654276b_download.jpg', '2018-10-12 19:26:29'),
(18, '20', '5bc0f5c7c0a6a_images (1).jpg', '2018-10-12 19:28:07'),
(19, '21', '5bc0f62846266_download (1).jpg', '2018-10-12 19:29:44'),
(20, '22', '5bc0f68dc18b4_download (2).jpg', '2018-10-12 19:31:25'),
(21, '23', '5bc0f72ebf35d_download (3).jpg', '2018-10-12 19:34:06'),
(22, '24', '5bf41dfc2366c_pic1.jpg', '2018-11-20 14:45:16'),
(23, '25', '5bf4212ab9f7a_pic3.jpg', '2018-11-20 14:58:50'),
(24, '26', '5bf421bbd8cca_pic1.jpg', '2018-11-20 15:01:15'),
(25, '27', '5bf4222978df3_11.jpg', '2018-11-20 15:03:05'),
(26, '28', '5bf422974caf0_pic1.jpg', '2018-11-20 15:04:55'),
(27, '29', '5bf422fd437d1_pic1.jpg', '2018-11-20 15:06:37'),
(28, '30', '5bf4250869e04_pic.jpg', '2018-11-20 15:15:20'),
(29, '31', '5bf4255ecd3fa_pic2.jpg', '2018-11-20 15:16:46'),
(30, '32', '5bf425cc48e6a_pic3.jpg', '2018-11-20 15:18:36'),
(31, '33', '5bf426d822d1e_pic4.jpg', '2018-11-20 15:23:04'),
(32, '34', '5bf4301af2891_pic3.jpg', '2018-11-20 16:02:34'),
(33, '35', '5bf431a312a92_pic4.jpg', '2018-11-20 16:09:07'),
(34, '36', '5bf432804f375_pic5.jpg', '2018-11-20 16:12:48'),
(35, '37', '5bf43352af12f_pic3.jpg', '2018-11-20 16:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
`id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `brand_condition` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `warrenty` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `category`, `title`, `brand_condition`, `company`, `color`, `warrenty`, `price`, `description`, `name`, `location`, `email`, `phone`) VALUES
(24, '11', 'Samsung', 'new', 'Samsung Lattitude', 'Selver', 'no', '21500', 'RAM: 4gb\r\nHardisk: 500', 'Rashid Iqbal', 'Bahawalpur', 'Rashid123@gmail.com', 2147483647),
(25, '12', 'Apple', 'new', 'Apple ABC', 'Dark grey', '6 month', '22000', 'RAM: 4rgb \r\nSSD:260gb', 'Amir NawaZ', 'Bahawalpur', 'amirn0241@gmail.com', 2147483647),
(26, '13', 'Acer', 'new', 'Acer ABC', 'black', 'no', '20000', 'Helloow', 'ali', 'Bahawalpur', 'admin@gmail.com', 2147483647),
(27, '15', 'sony', 'second hand', 'Sony abc', 'white', 'no', '18000', 'hello', 'shakir', 'Bahawalpur', 'amirn0241@gmail.com', 2147483647),
(28, '18', 'Dell', 'new', 'Dell lattitude', 'grey', '6 month', '22000', 'hello', 'Amir NawaZ', 'Bahawalpur', 'admin@gmail.com', 2147483647),
(29, '14', 'Hp', 'new', 'Hp wyz', 'black', 'no', '21500', 'hello', 'Amir NawaZ', 'Bahawalpur', 'admin@gmail.com', 2147483647),
(30, '16', 'Lenovo', 'new', 'Lenovo', 'Selver', 'no', '21500', 'Hello', 'ali', 'Bahawalpur', 'admin@gmail.com', 2147483647),
(31, '18', 'Dell', 'new', 'Dell lattitude', 'black', 'no', '21000', 'Hello', 'Faizan', 'Bahawalpur', 'amirn0241@gmail.com', 2147483647),
(32, '13', 'Acer', 'new', 'Acer ABC', 'black', 'no', '21500', 'hello', 'Hasseeb', 'Bahawalpur', 'Rashid123@gmail.com', 2147483647),
(33, '17', 'Toshiba', 'new', 'Toshiba', 'black', 'no', '21500', 'hello', 'Amir NawaZ', 'Bahawalpur', 'admin@gmail.com', 2147483647),
(34, '11', 'Samsung', 'new', 'Samsung Lattitude', 'black', 'no', '22000', 'Soon', 'ahmad akbar', 'Bahawalpur', 'Rashid123@gmail.com', 2147483647),
(35, '18', 'Dell', 'new', 'Dell lattitude', 'Dark grey', 'no', '21500', 'Soon', 'Amir NawaZ', 'Bahawalpur', 'adlfj2@sgj', 2147483647),
(36, '15', 'sony', 'new', 'Sony abc', 'black', '6 month', '22000', 'soon', 'Amir NawaZ', 'Bahawalpur', 'amirn0241@gmail.com', 2147483647),
(37, '14', 'Hp', 'new', 'Hp wyz', 'grey', 'no', '21500', 'soon\r\n', 'ali', 'Bahawalpur', 'admin@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Zeshan', 23456789, 'admin@gmail.com', '123'),
(10, 'imran', 2147483647, 'skt@gmail.com', '123'),
(16, 'imran', 2147483647, 'iqbalrashid691@yahoo.com', '123'),
(17, 'RAshid', 2147483647, 'skt@gmail.com', '4gb'),
(18, 'Zeshan', 4567890, 'ra@gmail.com', '123'),
(19, 'RAshid', 23456789, 'skt@gmail.com', '3467890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
