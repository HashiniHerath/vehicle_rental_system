-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 10:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Andrew', '1234@@');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `driver_name` varchar(25) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `anticipate_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `driver_name`, `telephone`, `address`, `anticipate_amount`) VALUES
(2, 'chathuranga priyadarshana', '0765906262', 'No24,Udumaththa,Eheliyagoda', '3000.00'),
(4, 'chathuranga priyadarshana', '0765906262', 'No24,Udumaththa,Eheliyagoda', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(2, 'Ranasinghe Pedige Chathuranga Priyadarshana Ranasinghe', 'chathurangapriyadarshana29@gmail.com', '20'),
(3, 'chathuranga priyadarshana', 'chathurangapriyadarshana29@gmail.com', '20');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` varchar(20) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `name`, `email`, `address`, `city`, `vehicle_type`, `state`, `zip_code`, `card_name`, `card_number`, `exp_month`, `exp_year`, `cvv`) VALUES
(1, 300, 'Ranasinghe Pedige Chathuranga Priyadarshana Ranasinghe', 'chathurangapriyadarshana29@gmail.com', 'No24,Udumaththa,Eheliyagoda', 'Eheliyagoda', '', 'india', 70600, 'indigooo', '2222333366665555', 'januray', '2022', 630),
(2, 900, 'kamal', 'chathurangapriyadarshana29@gmail.com', 'ranasinha', 'Eheliyagoda', '', '', 0, '', '', '', '', 0),
(3, 0, 'chathuranga priyadarshana', 'chathurangapriyadarshana29@gmail.com', 'No24,Udumaththa,Eheliyagoda', 'Eheliyagoda', '', 'india', 70600, 'werr', '1111222233334444', 'gs', '2022', 1234),
(4, 0, 'chathuranga priyadarshana', 'chathurangapriyadarshana29@gmail.com', 'No24,Udumaththa,Eheliyagoda', 'Eheliyagoda', '', 'india', 70600, 'ffvfvf', '1111222233334444', 'janurgb', '26', 123),
(5, 200, 'chathuranga priyadarshana', 'chathurangapriyadarshana29@gmail.com', 'No24,Udumaththa,Eheliyagoda', 'Eheliyagoda', '', 'india', 70600, 'jorn', '1111222233334444', 'gfggg', '2022', 1234),
(11, 20000, 'anju', 'chathurangapriyadarshana29@gmail.com', 'No24,Udumaththa,Eheliyagoda', 'Eheliyagoda', 'Toyota', 'india', 70600, 'boom', '1111222233334444', 'may', '2023', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `phone`, `password`) VALUES
(1, 4292, 'chathuu', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(2, 5073700692, 'anju', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(4, 1534408141965486, 'admin', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@'),
(6, 26914228978831, 'chathuu', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(7, 474767887590315470, 'andrew', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'sgsg'),
(8, 19980152439770976, 'hiru', 'hiru@gmail.com', '0765906262', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehi_number` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicle_name`, `vehi_number`, `model`, `transmission`, `fuel_type`, `image`, `amount`) VALUES
(7, 'vs', 'eerg', '12', '12', '12', 'image/945-9457840_forland-dump-truck-6-tons-forland-trucks.png', 3000),
(8, 'kdh', '078122334', '2', 'manual', 'disal', 'image/toyota-grand-cabin-12-1-passenger-multi-ac-exterior-sri-lanka.jpg', 20000),
(9, 'lorry', '078908789', '34', 'manual', 'disal', 'image/Eicher.png', 20000),
(10, 'lorry', '0765899663', '1', 'manual', 'disal', 'image/Yellow-Truck.png', 50000),
(11, 'lorry', '011455698', 'we223rt', 'manual', 'disal', 'image/lorry.png', 50000),
(15, 'audi', '09078787878', '2334qw', 'auto', 'disal', 'image/car-4.png', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
