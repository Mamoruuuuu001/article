-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 16, 2023 at 03:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realmadriddaily`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` mediumint(8) UNSIGNED NOT NULL COMMENT 'content_id',
  `title` varchar(400) NOT NULL COMMENT 'title',
  `info` varchar(400) NOT NULL COMMENT 'article_info',
  `date` date NOT NULL COMMENT 'date',
  `counter` smallint(5) UNSIGNED NOT NULL COMMENT 'viewcount',
  `content` text NOT NULL COMMENT 'article_content',
  `cate_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'category_id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `info`, `date`, `counter`, `content`, `cate_id`) VALUES
(45, 'How Real Madrid beat Liverpool to win the 2022 Champions League final', 'David Hytner at the Stade de France', '2022-05-28', 6, 'Jurgen Klopp\'s side were hoping to avenge their 2018 Champions League final defeat to the Spanish giants in Kyiv but they could not find a leveller after going down 1-0 when Vinicius ghosted in at the far post to convert Federico Valverde\'s low cross (59).\r\n\r\nThe game\'s kick-off time had earlier been delayed by more than half an hour as organisational problems outside the Stade de France caused long delays and dangerous overcrowding for Liverpool supporters attempting to enter the ground.\r\n\r\nLiverpool lost none of their focus despite the chaotic circumstances, creating a succession of chances and having 24 shots to Madrid\'s four, but they could not find a way past the outstanding Thibaut Courtois, who tipped a Sadio Mane effort onto the inside of the post in the first half and made a string of other excellent saves.\r\n\r\nLiverpool were bidding to win the competition for the seventh time but the defeat ensures they miss out on a treble having won the Carabao Cup and FA Cup earlier this season, while Madrid, their run to the final characterised by a series of extraordinary comebacks, celebrate yet another European triumph.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'content_id', AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
