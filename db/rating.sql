-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 08:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `appid` int(5) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingid`, `userid`, `appid`, `rating`, `review`) VALUES
(1, 1, 1, 4, 'I love using WhatsApp to keep in touch with my friends and family.'),
(2, 2, 1, 5, 'WhatsApp is an essential communication tool for me, I use it daily.'),
(3, 3, 1, 3, 'WhatsApp is great, but it has some issues with privacy.'),
(4, 4, 2, 5, 'Discord is my favorite app for online gaming and chatting with friends.'),
(5, 5, 2, 4, 'Discord is a great way to stay connected with my gaming community.'),
(6, 6, 2, 3, 'Discord can be a bit overwhelming for new users.'),
(7, 7, 3, 5, 'YouTube is the best way to discover and watch new videos.'),
(8, 8, 3, 4, 'I use YouTube every day to listen to music and watch videos.'),
(9, 9, 3, 5, 'YouTube is amazing for learning new things and watching tutorials.'),
(10, 10, 4, 5, 'I love using Instagram to share my photos and connect with friends.'),
(11, 11, 4, 4, 'Instagram has great photo editing tools and filters.'),
(12, 12, 4, 3, 'I find the Instagram algorithm to be frustrating at times.'),
(13, 13, 5, 5, 'Pinterest is my go-to app for inspiration and ideas.'),
(14, 14, 5, 4, 'Pinterest has an incredible variety of creative content.'),
(15, 15, 5, 5, 'I always find amazing DIY projects and recipes on Pinterest.'),
(16, 16, 6, 5, 'Facebook is a great way to stay connected with friends and family.'),
(17, 17, 6, 4, 'I use Facebook to keep up with news and events in my community.'),
(18, 18, 6, 5, 'Facebook is a great platform for promoting my business.'),
(19, 19, 7, 5, 'Twitter is my favorite social media platform for news and entertainment.'),
(20, 20, 7, 4, 'I use Twitter to follow my favorite celebrities and influencers.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
