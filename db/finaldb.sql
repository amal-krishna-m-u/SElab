-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 07:59 PM
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
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(2) DEFAULT 0,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`id`, `name`, `email`, `status`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, 'Sinister003.'),
(2, 'admin1@gmail.com', 'admin1@gmail.com', NULL, 'Sinister003.');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(26, 25, 3),
(27, 26, 1),
(28, 27, 2),
(29, 28, 3),
(30, 29, 4),
(31, 30, 5),
(32, 31, 5),
(33, 32, 6),
(34, 33, 7),
(35, 34, 8),
(36, 35, 9),
(37, 36, 10),
(38, 37, 11),
(39, 38, 12),
(40, 39, 13),
(41, 40, 14),
(42, 41, 15),
(43, 42, 16),
(44, 43, 17),
(45, 44, 11),
(46, 45, 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(30) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(7, 'entertainment'),
(8, 'reels'),
(9, 'Books'),
(10, 'Movies');

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

-- --------------------------------------------------------

--
-- Table structure for table `tempcat`
--

CREATE TABLE `tempcat` (
  `id` int(11) NOT NULL,
  `usercatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tempcat`
--

INSERT INTO `tempcat` (`id`, `usercatid`) VALUES
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8),
(0, 1),
(0, 4),
(0, 2),
(0, 3),
(0, 5),
(0, 6),
(0, 7),
(0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `usercat`
--

CREATE TABLE `usercat` (
  `id` int(5) NOT NULL,
  `catid` int(5) NOT NULL,
  `userid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usercat`
--

INSERT INTO `usercat` (`id`, `catid`, `userid`) VALUES
(13, 2, 1),
(14, 1, 2),
(0, 1, 3),
(0, 2, 3),
(0, 3, 3),
(0, 4, 2),
(0, 2, 2),
(0, 3, 2),
(0, 5, 2),
(0, 6, 2),
(0, 7, 2),
(0, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `dob`, `password`) VALUES
(2, 'Amal', 'rmal@gmial.com', '2023-02-16', 'Amalkrishna');

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `description` varchar(256) NOT NULL,
  `rating` float DEFAULT 0,
  `platform` varchar(10) NOT NULL DEFAULT 'mobile',
  `catid` int(5) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `applicationcat`
--
ALTER TABLE `applicationcat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
