-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 05:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` enum('breakfast','lunch','dinner') NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `name`, `category`, `description`, `image`) VALUES
(1, 'cornsilog', 'breakfast', 'Corned beef with fried rice and egg.', 'cornsilog.jpg'),
(2, 'hotsilog', 'breakfast', 'Hotdog with fried rice and egg.', 'hotsilog.jpg'),
(3, 'tapsilog', 'breakfast', 'Cured beef tapa with fried rice and egg.', 'tapsilog.jpg'),
(4, 'tosilog', 'breakfast', 'Cured pork tocino with fried rice and egg.', 'tosilog.jpg'),
(5, 'adobo', 'lunch', 'Marinated chicken or pork cooked in soy sauce and vinegar.', 'adobo.jpg'),
(6, 'bola-bola', 'lunch', 'Meatballs served with sauce.', 'bola-bola.jpg'),
(7, 'giniling', 'lunch', 'Ground meat with vegetables.', 'giniling.jpg'),
(8, 'kare-kare', 'dinner', 'Oxtail stew in peanut sauce.', 'kare-kare.jpg'),
(9, 'bistek', 'dinner', 'Beef steak marinated in soy sauce and calamansi.', 'bistek.jpg'),
(10, 'kawali', 'dinner', 'Deep-fried pork belly.', 'kawali.jpg'),
(11, 'sinigang', 'dinner', 'Tamarind-based sour soup with meat and vegetables.', 'sinigang.jpg'),
(12, 'tinola', 'dinner', 'Chicken soup with green papaya and chili leaves.', 'tinola.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
(4, 'Admin', 'admin@example.com', 'admin123'),
(8, 'Neil', 'neil.alferez109@example.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
