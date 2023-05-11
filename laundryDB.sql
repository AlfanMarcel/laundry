-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221207.ce5ce76a8d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 04:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(22) NOT NULL,
  `Adm_Name` text NOT NULL,
  `Adm_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Adm_Name`, `Adm_Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(22) NOT NULL,
  `User_ID` int(22) NOT NULL,
  `Order_Code` int(20) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Total_Item` int(22) NOT NULL,
  `Total_Price` int(22) NOT NULL,
  `Pick_up_date` date NOT NULL,
  `Delivery_date` date NOT NULL,
  `Phone_No` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pick_Up_status` text NOT NULL,
  `Delivery_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID`, `User_ID`, `Order_Code`, `User_Name`, `Total_Item`, `Total_Price`, `Pick_up_date`, `Delivery_date`, `Phone_No`, `Address`, `Pick_Up_status`, `Delivery_status`) VALUES
(29, 13, 300795, 'Rio', 3, 105000, '2022-05-24', '2022-05-30', 12345, 'Kediri', 'No', 'Deliver'),
(30, 15, 212640, 'Hilmi', 1, 35000, '2022-06-17', '2022-06-19', 12345, 'Kediri', 'No', 'Deliver'),
(31, 12, 637345, 'Agung Rio', 1, 80000, '2022-06-20', '2022-06-25', 1234, 'Kediri', 'No', 'Deliver'),
(32, 16, 727194, 'budiman', 6, 480000, '2023-02-09', '2023-02-01', 123456, 'wonoayu', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `order_temp`
--

CREATE TABLE `order_temp` (
  `ID` int(22) NOT NULL,
  `User_ID` int(22) NOT NULL,
  `Services_Name` text NOT NULL,
  `Services_Type` text NOT NULL,
  `Laundry_Price` int(100) NOT NULL,
  `Dry_Price` int(100) NOT NULL,
  `Total_Item` int(100) NOT NULL,
  `Pick_Delivery_Status` text NOT NULL,
  `Order_Status` text NOT NULL,
  `Order_code` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_temp`
--

INSERT INTO `order_temp` (`ID`, `User_ID`, `Services_Name`, `Services_Type`, `Laundry_Price`, `Dry_Price`, `Total_Item`, `Pick_Delivery_Status`, `Order_Status`, `Order_code`) VALUES
(48, 13, 'Cuci Karpet Masjid', 'Cuci Karpet', 20000, 15000, 3, '2', 'active', '300795'),
(49, 15, 'Cuci Karpet Masjid', 'Cuci Karpet', 20000, 15000, 1, '2', 'active', '212640'),
(50, 12, 'Cuci Gorden', 'Cuci Gorden', 30000, 50000, 1, '2', 'active', '637345'),
(52, 16, 'Cuci Gorden', 'Cuci Gorden', 30000, 50000, 1, '2', 'active', '727194'),
(54, 16, 'Cuci Gorden', 'Cuci Gorden', 30000, 50000, 5, '2', 'active', '727194');

-- --------------------------------------------------------

--
-- Table structure for table `services_type`
--

CREATE TABLE `services_type` (
  `ID` int(22) NOT NULL,
  `Services_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_uploade`
--

CREATE TABLE `services_uploade` (
  `ID` int(22) NOT NULL,
  `Services_Name` varchar(100) NOT NULL,
  `Services_Type` varchar(100) NOT NULL,
  `Dry_Price` int(120) NOT NULL,
  `Laundry_Price` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_uploade`
--

INSERT INTO `services_uploade` (`ID`, `Services_Name`, `Services_Type`, `Dry_Price`, `Laundry_Price`) VALUES
(15, 'Cuci Karpet Masjid', 'Cuci Karpet', 15000, 20000),
(16, 'Cuci Gorden', 'Cuci Gorden', 50000, 30000),
(17, 'Cuci Gorden', 'Cuci Gorden', 50000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `ID` int(22) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`ID`, `User_Name`, `Password`) VALUES
(12, 'Agung Rio', '1234'),
(13, 'Rio', '12345'),
(14, 'Hilmi syauqi', '12345'),
(15, 'Hilmi', '12345'),
(16, 'budiman', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `ID` int(22) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Nick_Name` varchar(255) NOT NULL,
  `Password` int(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`ID`, `User_Name`, `Nick_Name`, `Password`, `Address`, `Contact_No`) VALUES
(19, 'Agung Rio', 'Agung', 1234, 'Kediri', '1234'),
(20, 'Rio', 'Rio', 12345, 'Kediri', '12345'),
(21, 'Hilmi syauqi', 'Hlmi', 12345, 'Kediri', '12345'),
(22, 'Hilmi', 'Hilmi', 12345, 'Kediri', '12345'),
(23, 'budiman', 'budi', 123456, 'wonoayu', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_temp`
--
ALTER TABLE `order_temp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services_type`
--
ALTER TABLE `services_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services_uploade`
--
ALTER TABLE `services_uploade`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_temp`
--
ALTER TABLE `order_temp`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `services_type`
--
ALTER TABLE `services_type`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services_uploade`
--
ALTER TABLE `services_uploade`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
