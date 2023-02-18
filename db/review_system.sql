-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 02:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `url` varchar(256) NOT NULL,
  `description` varchar(256) DEFAULT NULL,
  `rating` float NOT NULL DEFAULT 5,
  `platform` varchar(10) NOT NULL DEFAULT 'web'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `name`, `url`, `description`, `rating`, `platform`) VALUES
(1, 'WhatApp', 'https://play.google.com/store/search?q=whatsapp&c=apps', 'Social media', 0, 'mobile'),
(2, 'Discord', 'https://play.google.com/store/apps/details?id=com.discord', 'For networking', 0, 'mobile'),
(3, 'Youtube', 'https://play.google.com/store/apps/details?id=com.google.android.youtube', 'Stream free video', 0, 'mobile'),
(4, 'Instagram', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'Social media application', 0, 'mobile'),
(5, 'Pinterest', 'https://play.google.com/store/apps/details?id=com.pinterest', 'For creativity', 0, 'mobile'),
(6, 'Facebook', 'https://play.google.com/store/apps/details?id=com.facebook.katana', 'Social media app', 5, 'mobile'),
(7, 'Twitter', 'https://play.google.com/store/apps/details?id=com.twitter.android', 'Social media platform', 5, 'mobile'),
(8, 'LinkedIn', 'https://play.google.com/store/apps/details?id=com.linkedin.android', 'Business-oriented social media app', 5, 'mobile'),
(9, 'Snapchat', 'https://play.google.com/store/apps/details?id=com.snapchat.android', 'Multimedia messaging app', 5, 'mobile'),
(10, 'TikTok', 'https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically', 'Short-form video app', 5, 'mobile'),
(11, 'Netflix', 'https://play.google.com/store/apps/details?id=com.netflix.mediaclient', 'Streaming service for movies and TV shows', 5, 'mobile'),
(12, 'Spotify', 'https://play.google.com/store/apps/details?id=com.spotify.music', 'Music streaming platform', 5, 'mobile'),
(13, 'Uber', 'https://play.google.com/store/apps/details?id=com.ubercab', 'Ride-hailing service', 5, 'mobile'),
(14, 'DoorDash', 'https://play.google.com/store/apps/details?id=com.dd.doordash', 'Food delivery app', 5, 'mobile'),
(15, 'Grubhub', 'https://play.google.com/store/apps/details?id=com.grubhub.android', 'Online food ordering and delivery platform', 5, 'mobile'),
(16, 'Google Maps', 'https://play.google.com/store/apps/details?id=com.google.android.apps.maps', 'Maps and navigation app', 5, 'mobile'),
(17, 'Waze', 'https://play.google.com/store/apps/details?id=com.waze', 'Community-based navigation app', 5, 'mobile'),
(18, 'Amazon', 'https://play.google.com/store/apps/details?id=com.amazon.mShop.android.shopping', 'Online shopping app', 5, 'mobile'),
(19, 'Etsy', 'https://play.google.com/store/apps/details?id=com.etsy.android', 'Online marketplace for handmade and vintage items', 5, 'mobile'),
(20, 'Duolingo', 'https://play.google.com/store/apps/details?id=com.duolingo', 'Language learning app', 5, 'mobile'),
(21, 'Headspace', 'https://play.google.com/store/apps/details?id=com.getsomeheadspace.android', 'Meditation and mindfulness app', 5, 'mobile'),
(22, 'Fitbit', 'https://play.google.com/store/apps/details?id=com.fitbit.FitbitMobile', 'Fitness tracking app', 5, 'mobile'),
(23, 'Adobe Photoshop Express', 'https://play.google.com/store/apps/details?id=com.adobe.psmobile', 'Photo editing app', 5, 'mobile'),
(24, 'Microsoft Office', 'https://play.google.com/store/apps/details?id=com.microsoft.office.officehubrow', 'Productivity suite including Word, Excel, and PowerPoint', 5, 'mobile'),
(25, 'Trello', 'https://play.google.com/store/apps/details?id=com.trello', 'Project management and collaboration tool', 5, 'mobile'),
(26, 'Google Search', 'https://www.google.com/', 'Search engine for the web', 5, 'web'),
(27, 'Wikipedia', 'https://www.wikipedia.org/', 'Online encyclopedia', 5, 'web'),
(28, 'GitHub', 'https://github.com/', 'Web-based version control system for software development', 5, 'web'),
(29, 'Stack Overflow', 'https://stackoverflow.com/', 'Question and answer site for programmers', 5, 'web'),
(30, 'Trello', 'https://trello.com/', 'Project management and collaboration tool', 5, 'web'),
(31, 'Asana', 'https://asana.com/', 'Project management and workflow tool', 5, 'web'),
(32, 'Canva', 'https://www.canva.com/', 'Graphic design and publishing tool', 5, 'web'),
(33, 'Grammarly', 'https://www.grammarly.com/', 'Online writing assistant and grammar checker', 5, 'web'),
(34, 'Zoom', 'https://zoom.us/', 'Video conferencing and web conferencing service', 5, 'web'),
(35, 'LinkedIn', 'https://www.linkedin.com/', 'Professional social networking site', 5, 'web'),
(36, 'Airbnb', 'https://www.airbnb.com/', 'Online marketplace for lodging', 5, 'web'),
(37, 'Udemy', 'https://www.udemy.com/', 'Online education platform', 5, 'web'),
(38, 'Shopify', 'https://www.shopify.com/', 'E-commerce platform', 5, 'web'),
(39, 'Stripe', 'https://stripe.com/', 'Payment processing platform for web businesses', 5, 'web'),
(40, 'Salesforce', 'https://www.salesforce.com/', 'Customer relationship management (CRM) system', 5, 'web'),
(41, 'Slack', 'https://slack.com/', 'Team communication and collaboration platform', 5, 'web'),
(42, 'Google Analytics', 'https://analytics.google.com/', 'Web analytics service', 5, 'web'),
(43, 'Typeform', 'https://www.typeform.com/', 'Online form builder and survey tool', 5, 'web'),
(44, 'Coursera', 'https://www.coursera.org/', 'Online education platform', 5, 'web'),
(45, 'Figma', 'https://www.figma.com/', 'Collaborative interface design tool', 5, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `applicationcat`
--

CREATE TABLE `applicationcat` (
  `id` int(5) NOT NULL,
  `appid` int(5) NOT NULL,
  `catid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationcat`
--

INSERT INTO `applicationcat` (`id`, `appid`, `catid`) VALUES
(1, 0, 0),
(2, 1, 1),
(3, 2, 3),
(4, 3, 2),
(5, 4, 1),
(6, 5, 4),
(7, 6, 1),
(8, 7, 1),
(9, 8, 3),
(10, 9, 4),
(11, 10, 4),
(12, 11, 4),
(13, 12, 2),
(14, 13, 3),
(15, 14, 1),
(16, 15, 1),
(17, 16, 3),
(18, 17, 3),
(19, 18, 4),
(20, 19, 4),
(21, 20, 3),
(22, 21, 3),
(23, 22, 1),
(24, 23, 2),
(25, 24, 3),
(26, 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(30) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'sports'),
(2, 'music'),
(3, 'art'),
(4, 'food'),
(5, 'travel'),
(6, 'education'),
(7, 'entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `tempcat`
--

CREATE TABLE `tempcat` (
  `id` int(11) NOT NULL,
  `usercatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempcat`
--

INSERT INTO `tempcat` (`id`, `usercatid`) VALUES
(113, 1),
(114, 1),
(115, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usercat`
--

CREATE TABLE `usercat` (
  `id` int(5) NOT NULL,
  `catid` int(5) NOT NULL,
  `userid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercat`
--

INSERT INTO `usercat` (`id`, `catid`, `userid`) VALUES
(13, 2, 1),
(14, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `password`, `dob`) VALUES
(1, 'amalkrishna@ug.cusat.ac.in', 'amalkrishna@ug.cusat.ac.in', 'Sinister003.', '2001-06-22'),
(2, 'Akshay jayan', 'akshyjayan@gmail.com', 'Sinister003.', '2023-02-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `applicationcat`
--
ALTER TABLE `applicationcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tempcat`
--
ALTER TABLE `tempcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercat`
--
ALTER TABLE `usercat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `applicationcat`
--
ALTER TABLE `applicationcat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tempcat`
--
ALTER TABLE `tempcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `usercat`
--
ALTER TABLE `usercat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
