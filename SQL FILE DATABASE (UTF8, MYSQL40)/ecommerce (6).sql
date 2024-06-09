-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_tbl`
--

CREATE TABLE `access_tbl` (
  `Password` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `access_tbl`
--

INSERT INTO `access_tbl` (`Password`, `EmailAddress`) VALUES
('admin1234', 'admin_access@gmail.com'),
('cris1234', 'carcamo_ccs@uspf.edu.ph'),
('admin', 'admin2_access@gmail.com'),
('tracert', 'kaloyzki.macho@gmail.com'),
('Hazel1234', 'admin3_hazel@gmail.com'),
('Wyn1234', 'admin_wyn@gmail.com'),
('1234', 'guess@gmail.com'),
('1234', 'admin_kaloy@gmail.com'),
('1234', 'admin_kaloy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `Cart_id` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Subtotal` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`Cart_id`, `ProductName`, `Quantity`, `Subtotal`, `EmailAddress`) VALUES
(23, 'Ryzen 3 3200g', '2', '14300', 'carcamo_ccs@uspf.edu.ph'),
(52, 'ITX CPU CASE', '3', '8700', 'admin_access@gmail.com'),
(53, 'GIGABYTE AORUS B550 Elite', '1', '10000', 'admin_access@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments_tbl`
--

CREATE TABLE `comments_tbl` (
  `commentID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `EmailAddress` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `comments_tbl`
--

INSERT INTO `comments_tbl` (`commentID`, `ProductName`, `Comment`, `EmailAddress`) VALUES
(1, 'ITX CPU CASE', 'This is a good case', 'admin_access@gmail.com'),
(2, 'Hyper X DDR4 Ram 8gb', 'Nice! fast RAM..', 'admin_access@gmail.com'),
(3, 'Hyper X DDR4 Ram 8gb', 'I agree!!.. ', 'carcamo_ccs@uspf.edu.ph'),
(4, 'Hyper X DDR4 Ram 8gb', 'Not Bad!!.. I prefer 64gb or something..', 'kaloyzki.macho@gmail.com'),
(5, 'ITX CPU CASE', 'I agree!!..', 'kaloyzki.macho@gmail.com'),
(6, 'Ryzen 3 3200g', 'I like this processor!!..', 'kaloyzki.macho@gmail.com'),
(7, 'Ryzen 3 3200g', 'I like this processor!!..', 'kaloyzki.macho@gmail.com'),
(8, 'Hyper X DDR4 Ram 8gb', 'I change my mind.. this is not bad!..', 'kaloyzki.macho@gmail.com'),
(9, 'Hyper X DDR4 Ram 8gb', 'Hi! mr/ms. admin.. where is your shop?', 'kaloyzki.macho@gmail.com'),
(10, 'Hyper X DDR4 Ram 8gb', 'Hi! mr/ms. admin.. where is your shop?', 'kaloyzki.macho@gmail.com'),
(11, 'Hyper X DDR4 Ram 8gb', 'hello?', 'kaloyzki.macho@gmail.com'),
(12, 'ITX CPU CASE', 'Hi Everyone..', 'kaloyzki.macho@gmail.com'),
(13, 'ITX CPU CASE', 'nice!', 'kaloyzki.macho@gmail.com'),
(14, 'ITX CPU CASE', 'Nice!', 'kaloyzki.macho@gmail.com'),
(15, 'GIGABYTE AORUS B550 Elite', 'So expensive!..', 'kaloyzki.macho@gmail.com'),
(16, 'GIGABYTE AORUS B550 Elite', 'So expensive!..', 'kaloyzki.macho@gmail.com'),
(17, 'Ryzen 3 3200g', 'nice!1..', 'kaloyzki.macho@gmail.com'),
(18, 'Logitech Wired Zone', 'I like this\r\n', 'kaloyzki.macho@gmail.com'),
(19, 'CORSAIR VS650', 'hello', 'kaloyzki.macho@gmail.com'),
(20, 'CORSAIR VS650', 'hello', 'kaloyzki.macho@gmail.com'),
(21, 'A4 Tech Keyboard Mouse Combo', 'nice keyboard', 'kaloyzki.macho@gmail.com'),
(22, 'GIGABYTE AORUS B550 Elite', 'I guess I need more part time jobs..', 'kaloyzki.macho@gmail.com'),
(23, 'Ryzen 3 3200g', 'hi!.. mr.kaloyzki...', 'admin_access@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cust_info`
--

CREATE TABLE `cust_info` (
  `EmailAddress` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Residence_Address` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `cust_info`
--

INSERT INTO `cust_info` (`EmailAddress`, `FirstName`, `LastName`, `ContactNumber`, `Residence_Address`) VALUES
('admin2_access@gmail.com', 'Marlon', 'Gacrama', '+639998901910', ''),
('admin3_hazel@gmail.com', 'Hazel', 'Dolorito', '09980478015', ''),
('admin_access@gmail.com', 'Karl', 'Lopez', '09980478015', ''),
('admin_wyn@gmail.com', 'Wyn', 'Gamolo', '+639998901910', ''),
('carcamo_ccs@uspf.edu.ph', 'Christine', 'Arcamo', '0968599402', ''),
('guess@gmail.com', 'Guest', 'customer', '1234', ''),
('kaloyzki.macho@gmail.com', 'Kaloyzki', 'Manayan', '09980478015', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `prodname` varchar(255) NOT NULL,
  `Specification` text NOT NULL,
  `available_stocks` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Prod_Img` text NOT NULL
) ;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`prodname`, `Specification`, `available_stocks`, `Price`, `Prod_Img`) VALUES
('A4 Tech Keyboard Mouse Combo', 'Type: Keyboard and Mouse\r\nCategory: A-Shape Keyboard\r\nPorts: USB Ports\r\nCompatible with desktop and laptop', '18', 580, 'img/6.jpg'),
('ASUS VZ249HEG1R Gaming Monitor', '@ 23.8-inch Full HD (1920 x 1080) IPS gaming monitor with 75Hz refresh rate designed for gamers and immersive gameplay.\r\n@ ASUS Extreme Low Motion Blur (ELMB ™) technology enables a 1ms response time (MPRT) together with Adaptive-sync, eliminating ghosting and tearing for sharp gaming visuals with high frame rates.\r\n@ FreeSync technology providing variable refresh rates for low latency, stuttering-free and tearing-free while gaming.\r\n@ Exclusive GamePlus function delicately designed for every gaming needs.\r\n@ TUV Rheinland Certification for Flicker-free and Low Blue Light technology to ensure a comfortable viewing experience.', '18', 49450, 'img/monitor.png'),
('CORSAIR VS650', 'Full power at 41°C\r\nAffordable\r\nEfficient 5VSB rail\r\nAccurate Power Ok signal\r\n80 PLUS and Cybenetics ratings', '16', 4668, 'img/5'),
('GIGABYTE AORUS B550 Elite', '@Supports AMD Ryzen™ 5000 Series/ 3rd Gen Ryzen™ and 3rd Gen Ryzen™ with Radeon™ Graphics Processors.\r\n@Dual Channel ECC/ Non-ECC Unbuffered DDR4, 4 DIMMs.\r\n@True 12+2 Phases Digital VRM Solution with 50A DrMOS.\r\n@Advanced Thermal Design with Enlarged Surface Heatsinks.\r\n@Ultra Durable™ PCIe 4.0 x16 Slot.\r\n@Dual Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with One Thermal Guard.\r\n@AMP-UP Audio with ALC1200 and WIMA Capacitors.\r\n@Blazing Fast 2.5GbE LAN with Bandwidth Management.\r\n@Rear DisplayPort & HDMI Support.\r\n@RGB FUSION 2.0 Supports Addressable. @LED & RGB LED Strips.\r\n@Smart Fan 5 Features Multiple Temperature Sensors, Hybrid Fan Headers with FAN STOP.\r\n@Q-Flash Plus Update BIOS without Installing the CPU, Memory and Graphics Card.\r\n@Pre-installed IO Shield for Easy and Quick Installation.', '10', 10000, 'img/1.png'),
('Hyper X DDR4 Ram 8gb', '@Total Capacity: 8GB (2x4GB)\r\n@Memory Profile: 2666MHz, 16-18-18, 1.2V\r\n@Part Number: HX426C16FB3K2/8', '18', 3999, 'img/2.png'),
('ITX CPU CASE', 'Built for minimalist and streamlined setups, this mini-ITX gaming case with built-in cable management makes no compromise on performance—supporting full-size graphics cards and liquid cooling.', '20', 2900, 'img/4.png'),
('Logitech Wired Zone', 'Type\r\nMain Mic: Uni-directional\r\nSecondary Mic: Omni-directional\r\nFrequency response: 100-16 kHz\r\nSensitivity\r\nMain Mic: -48 dBV/Pa\r\nSecondary Mic: -40 dBV/Pa', '16', 8558, 'img/7.png'),
('Ryzen 3 3200g', '\r\n(# of CPU Cores\r\n4)\r\n(# of Threads\r\n4)\r\n(# of GPU Cores\r\n8)\r\n(Base Clock\r\n3.6GHz)\r\n(Max Boost Clock \r\nUp to 4.0GHz)\r\n(Total L1 Cache\r\n384KB)\r\n(Total L2 Cache\r\n2MB)\r\n(Total L3 Cache\r\n4MB)\r\n(Unlocked \r\nYes)\r\n(CMOS\r\n12nm FinFET)\r\n(Package\r\nAM4)\r\n(PCI Express® Version\r\nPCIe® 3.0 x8)\r\n(Thermal Solution (PIB))\r\n@Wraith Stealth\r\n(Thermal Solution (MPK))\r\n@Wraith Stealth\r\n(Default TDP / TDP\r\n65W)\r\n(cTDP\r\n45-65W)\r\n(Max Temps\r\n95°C)\r\n(*OS Support\r\nWindows 10 - 64-Bit Edition\r\nRHEL x86 64-Bit\r\nUbuntu x86 64-Bit\r\n*Operating System (OS) support will vary by manufacturer.)', '15', 7150, 'img/3.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `signin_details`
-- (See below for the actual view)
--
CREATE TABLE `signin_details` (
`EmailAddress` varchar(255)
,`FirstName` varchar(255)
,`LastName` varchar(255)
,`ContactNumber` varchar(255)
,`Password` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `signup_details`
-- (See below for the actual view)
--
CREATE TABLE `signup_details` (
`FirstName` varchar(255)
,`LastName` varchar(255)
,`ContactNumber` varchar(255)
,`EmailAddress` varchar(255)
,`Password` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `Transaction_id` int(255) NOT NULL,
  `GrandTotal` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`Transaction_id`, `GrandTotal`, `emailAddress`, `ProductName`, `Status`) VALUES
(21, '18700', 'admin_access@gmail.com', 'ITX CPU CASE', 'Pending'),
(22, '18700', 'admin_access@gmail.com', 'GIGABYTE AORUS B550 Elite', 'Pending');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_cart`
-- (See below for the actual view)
--
CREATE TABLE `view_cart` (
`Prod_Img` text
,`ProductName` varchar(255)
,`Price` int(11)
,`Quantity` varchar(255)
,`Subtotal` varchar(255)
,`EmailAddress` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_comments`
-- (See below for the actual view)
--
CREATE TABLE `view_comments` (
`prodname` varchar(255)
,`Comment` text
,`EmailAddress` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transactions`
-- (See below for the actual view)
--
CREATE TABLE `view_transactions` (
`Prod_Img` text
,`ProductName` varchar(255)
,`Price` int(11)
,`Subtotal` varchar(255)
,`GrandTotal` varchar(255)
,`EmailAddress` varchar(255)
,`Status` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `signin_details`
--
DROP TABLE IF EXISTS `signin_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `signin_details`  AS SELECT `cust_info`.`EmailAddress` AS `EmailAddress`, `cust_info`.`FirstName` AS `FirstName`, `cust_info`.`LastName` AS `LastName`, `cust_info`.`ContactNumber` AS `ContactNumber`, `access_tbl`.`Password` AS `Password` FROM (`cust_info` join `access_tbl` on(`cust_info`.`EmailAddress` = `access_tbl`.`EmailAddress`)) ;

-- --------------------------------------------------------

--
-- Structure for view `signup_details`
--
DROP TABLE IF EXISTS `signup_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `signup_details`  AS SELECT `cust_info`.`FirstName` AS `FirstName`, `cust_info`.`LastName` AS `LastName`, `cust_info`.`ContactNumber` AS `ContactNumber`, `cust_info`.`EmailAddress` AS `EmailAddress`, `access_tbl`.`Password` AS `Password` FROM (`cust_info` join `access_tbl`) WHERE `cust_info`.`EmailAddress` = `access_tbl`.`EmailAddress` ;

-- --------------------------------------------------------

--
-- Structure for view `view_cart`
--
DROP TABLE IF EXISTS `view_cart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cart`  AS SELECT `product_tbl`.`Prod_Img` AS `Prod_Img`, `cart_tbl`.`ProductName` AS `ProductName`, `product_tbl`.`Price` AS `Price`, `cart_tbl`.`Quantity` AS `Quantity`, `cart_tbl`.`Subtotal` AS `Subtotal`, `cart_tbl`.`EmailAddress` AS `EmailAddress` FROM (`cart_tbl` join `product_tbl` on(`product_tbl`.`prodname` = `cart_tbl`.`ProductName`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_comments`
--
DROP TABLE IF EXISTS `view_comments`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_comments`  AS SELECT `product_tbl`.`prodname` AS `prodname`, `comments_tbl`.`Comment` AS `Comment`, `comments_tbl`.`EmailAddress` AS `EmailAddress` FROM (`comments_tbl` join `product_tbl` on(`product_tbl`.`prodname` = `comments_tbl`.`ProductName`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_transactions`
--
DROP TABLE IF EXISTS `view_transactions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transactions`  AS SELECT `view_cart`.`Prod_Img` AS `Prod_Img`, `transaction_tbl`.`ProductName` AS `ProductName`, `view_cart`.`Price` AS `Price`, `view_cart`.`Subtotal` AS `Subtotal`, `transaction_tbl`.`GrandTotal` AS `GrandTotal`, `view_cart`.`EmailAddress` AS `EmailAddress`, `transaction_tbl`.`Status` AS `Status` FROM (`transaction_tbl` join `view_cart` on(`transaction_tbl`.`ProductName` = `view_cart`.`ProductName`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `comments_tbl`
--
ALTER TABLE `comments_tbl`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `cust_info`
--
ALTER TABLE `cust_info`
  ADD PRIMARY KEY (`EmailAddress`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`prodname`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`Transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `Cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments_tbl`
--
ALTER TABLE `comments_tbl`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `Transaction_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
