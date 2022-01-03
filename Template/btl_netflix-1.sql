-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 05:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_netflix`
--
CREATE DATABASE IF NOT EXISTS `btl_netflix` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `btl_netflix`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Narration'),
(2, 'Comendy'),
(3, 'War'),
(4, 'Music'),
(5, 'Childrens'),
(6, 'Cartoon'),
(7, 'Mythological'),
(8, 'TV Show'),
(9, 'Action'),
(10, 'Adventure'),
(11, 'Fiction'),
(12, 'Movie Secrets'),
(13, 'Martial Arts Film'),
(14, 'Horror Movie'),
(15, 'Vietnamese Comedy'),
(16, 'Psychological'),
(17, 'Criminal'),
(18, 'Documentary');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `episode` int(10) NOT NULL,
  `episode_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `category_id` int(2) NOT NULL,
  `type_movie` int(20) NOT NULL,
  `nation_id` int(100) NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `duration` int(5) NOT NULL,
  `link` varchar(150) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `status`, `director`, `actor`, `category_id`, `type_movie`, `nation_id`, `year`, `image`, `description`, `duration`, `link`, `author`) VALUES
(124, 'f', 'v', 'b', 'a', 1, 1, 1, 2015, 'image/OIP.jfif', 'f', 24, '0', 'd'),
(125, 'f', 'v', 'b', 'a', 1, 1, 1, 2015, 'image/OIP.jfif', 'đá', 213, '0', 'ád');

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE `nation` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`id`, `name`) VALUES
(1, 'America'),
(2, 'Vietnam'),
(3, 'France'),
(4, 'Japan'),
(5, 'Korea'),
(6, 'England'),
(7, 'China'),
(8, 'India'),
(9, 'Hong Kong '),
(10, 'Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `nav-menu`
--

CREATE TABLE `nav-menu` (
  `id` int(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `handle` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav-menu`
--

INSERT INTO `nav-menu` (`id`, `name`, `handle`) VALUES
(1, 'category', 'category'),
(2, 'nation', 'nation'),
(3, 'single-movie', 'single-movie'),
(4, 'series-movie', 'series-movie'),
(5, 'theater-movie', 'theater-movie');

-- --------------------------------------------------------

--
-- Table structure for table `series-movie`
--

CREATE TABLE `series-movie` (
  `id` int(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series-movie`
--

INSERT INTO `series-movie` (`id`, `name`, `year`) VALUES
(1, 'series-movie 2018', 2018),
(2, 'series-movie 2017', 2017),
(3, 'series-movie 2016', 2016),
(4, 'series-movie 2015', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `single-movie`
--

CREATE TABLE `single-movie` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single-movie`
--

INSERT INTO `single-movie` (`id`, `name`, `year`) VALUES
(1, 'single-movie 2018', 2018),
(2, 'single-movie 2017', 2017),
(3, 'single-movie 2016', 2016),
(4, 'single-movie 2015', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `theater-movie`
--

CREATE TABLE `theater-movie` (
  `id` int(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `year` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater-movie`
--

INSERT INTO `theater-movie` (`id`, `name`, `year`) VALUES
(1, 'theater-movie 2018', 2018),
(2, 'theater-movie 2017', 2017),
(3, 'theater-movie 2016', 2016),
(4, 'theater-movie 2015', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `type-movie`
--

CREATE TABLE `type-movie` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type-movie`
--

INSERT INTO `type-movie` (`id`, `name`, `handle`) VALUES
(1, 'single-movie', 'single-movie'),
(2, 'series-movie', 'series-movie'),
(3, 'theater-movie', 'theater-movie');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `usertype` int(2) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `fullname`, `email`, `password`, `phone`, `sex`, `usertype`, `image`) VALUES
(11, 'khatu17', 'Nguyen kha tu', 'khatu@gmail.com', '', '0965815052', 'male', 99, 'Khatu_avata.jpg'),
(12, 'khatu', 'nguyen kha tu', 'khatu123@gmail.com', '', '0965815052', 'male', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `type` int(2) NOT NULL,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`type`, `typename`) VALUES
(10, 'Guest'),
(20, 'Member'),
(99, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`,`film_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nation_id` (`nation_id`),
  ADD KEY `category` (`category_id`);

--
-- Indexes for table `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav-menu`
--
ALTER TABLE `nav-menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series-movie`
--
ALTER TABLE `series-movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single-movie`
--
ALTER TABLE `single-movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater-movie`
--
ALTER TABLE `theater-movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type-movie`
--
ALTER TABLE `type-movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ibfk_1` (`usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `nation`
--
ALTER TABLE `nation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nav-menu`
--
ALTER TABLE `nav-menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `series-movie`
--
ALTER TABLE `series-movie`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `single-movie`
--
ALTER TABLE `single-movie`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theater-movie`
--
ALTER TABLE `theater-movie`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type-movie`
--
ALTER TABLE `type-movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`nation_id`) REFERENCES `nation` (`id`),
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
