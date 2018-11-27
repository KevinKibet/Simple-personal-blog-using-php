-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 11:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(30, 'May-30-2018   22:17:06', 'Ferrari italia', 'Sports', '', 'lalarri (3).jpg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(31, 'May-30-2018   22:25:59', 'Ferrari Spyder', 'Sports', '', 'lalarri (2).jpg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(32, 'May-30-2018   22:30:00', 'Ferari ', 'Sports', '', 'lalarri (7).jpg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(33, 'May-30-2018   22:30:37', 'grafitti', 'Graphics', '', 'images-2.jpeg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(34, 'May-30-2018   22:32:52', 'grafitti', 'Graphics', '', 'images-5.jpeg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(35, 'May-30-2018   22:35:28', 'grafitti', 'Graphics', '', 'images-3(1).jpeg', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(36, 'May-30-2018   22:40:40', 'metasploit', 'Hacking and Cyber Security', '', 'Screenshot (4).png', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(37, 'May-30-2018   22:43:12', 'The art of exploitation', 'Hacking and Cyber Security', '', 'Screenshot (3).png', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(38, 'May-30-2018   22:44:29', 'black hat python', 'Hacking and Cyber Security', '', 'Screenshot (2).png', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(39, 'May-30-2018   22:45:30', 'Certified Ethical Hacking', 'Hacking and Cyber Security', '', 'Screenshot (5).png', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(40, 'May-30-2018   22:46:20', 'Israeli Soldiers', 'Army', '', 'Screenshot (6).png', 'Nowadays, there are online car reservations which give much benefit to user. A rental service is a service in which customers arrive to request the hire of a rental unit. It is more convenient thancarrying the cost of owning and maintaining the unit. A car rental or car hire agency is a company that rents automobiles for short period of time for a fee whether in a few hours or a few days or week. It is an extended form of a rental shop, often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily \'located near airports or busy city areas and often complemented by a website allowing online reservations. Car rental agencies primarily serve people who have a car that is temporarily out Of reach or out of service, for example travelers who are out of town or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Because of the variety of sizes of their vehicles, car rental agencies may also serve the self-moving industry needs, by renting vans or trucks, and in certain markets other types of vehicles such as motorcycles or scooters may also be offered. In short, It is a system design specially for large, premium and small car rental business. The car rental system provides complete functionality of listing and booking car'),
(41, 'August-03-2018   18:16:03', 'dubai', 'cities', '', 'Screenshot (16).png', 'qwerty qwerty qwerty v qwerty qwerty qwerty qwerty v v qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `creatorname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `name`, `creatorname`) VALUES
(7, 'May-30-2018   22:03:26', 'Army', ''),
(8, 'May-30-2018   22:04:14', 'Sports Cars', ''),
(9, 'May-30-2018   22:04:37', 'Computer Networking', ''),
(10, 'May-30-2018   22:06:14', 'Hacking and Cyber Security', ''),
(11, 'May-30-2018   22:06:56', 'Graphics', ''),
(12, 'May-30-2018   22:09:59', 'Sports', ''),
(13, 'May-31-2018   16:44:50', 'tec', ''),
(14, 'August-03-2018   18:14:09', 'cities', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetime`, `username`, `password`, `addedby`) VALUES
(4, 'May-29-2018   06:22:40', 'kevin', '1234', 'Kevin Kibet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
