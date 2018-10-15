-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2018 at 11:24 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danielta_jinderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `resume` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(99) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file_path` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `title` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desc_` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `qual` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `close_date` date NOT NULL,
  `date_listed` date NOT NULL,
  `wage` double DEFAULT NULL,
  `sal_min` int(11) DEFAULT NULL,
  `sal_max` int(11) DEFAULT NULL,
  `type` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `title`, `company`, `desc_`, `location`, `qual`, `user_id`, `close_date`, `date_listed`, `wage`, `sal_min`, `sal_max`, `type`, `lat`, `lng`) VALUES
(6, 'Senior Software Developer', 'TradeMe', 'Great place', 'Auckland', 'Bachelor of Science', 1, '3918-00-10', '0000-00-00', 52, NULL, NULL, 'IT', NULL, NULL),
(7, 'Graduate Hairdesser', 'Hair Salon', 'Great', 'Lower Hutt', 'Diploma of Hairdressing', 10, '2018-06-14', '2018-06-07', NULL, 50, 80, 'Hairdressing', NULL, NULL),
(10, 'Kitchen Hand', 'Cafe', 'dzdzdf', 'Hamilton', 'No Qualifications', 1, '3918-00-21', '0000-00-00', 55, NULL, NULL, 'Automotive', NULL, NULL),
(9, 'Senior Stylist', 'Hair Palace', 'Come work for us', 'Palmerston North', 'No Qualifications', 1, '3918-00-17', '2018-12-07', 66, NULL, NULL, 'Hair Dressing', NULL, NULL),
(11, 'Network Engineer', 'NetLabs', 'we need a networking legend now. please call us if this is you. ', 'Wellington', 'Bachelor of Engineering', 1, '3918-00-17', '0000-00-00', 58, NULL, NULL, 'IT', NULL, NULL),
(13, 'Junior civil engineer', 'CivilAid', 'Texas is the proudest state in the proudest country on the proudest planet of the proudest galaxy of what I assume is the proudest universe.', 'Palmerston North', 'Bachelor of Engineering', 1, '3918-00-24', '2018-05-10', NULL, 49, 59, 'Engineering', NULL, NULL),
(14, 'Associate accountant', 'Accounting plus', 'flash accounting job', 'Dunedin', 'Bachelor of Commerce', 1, '3918-00-24', '0000-00-00', 78, NULL, NULL, 'Accounting', NULL, NULL),
(15, 'Graduate architect', 'Design LTD ', 'Texas is the proudest state in the proudest country on the proudest planet of the proudest galaxy of what I assume is the proudest universe.', 'Dunedin', 'Bachelor of Engineering', 1, '3918-00-23', '0000-00-00', 44, NULL, NULL, 'Architecture', NULL, NULL),
(16, 'dhdhdjdjd', 'djdndndbddh', 'xndbdbdbd', 'New Plymouth', 'No Qualifications', 1, '3918-00-22', '0000-00-00', 38, NULL, NULL, 'Accounting', NULL, NULL),
(17, 'System Admin', 'SysAd', 'shshshshshs', 'Palmerston North', 'Diploma of Computer Servicing', 1, '3918-00-17', '0000-00-00', 83, NULL, NULL, 'IT', NULL, NULL),
(18, 'doctor', 'hospital', 'wanna be a doctor?', 'Dunedin', 'Bachelor of Nursing', 1, '3918-00-25', '0000-00-00', 21, NULL, NULL, 'Automotive', NULL, NULL),
(19, 'dbdbdbdbd', 'dgdbdbdbdb', 'sbsbshshs', 'Dunedin', 'Bachelor of Nursing', 1, '3918-00-22', '2018-06-10', 72, NULL, NULL, 'Automotive', NULL, NULL),
(20, 'xbshsjsjsb', 'sbshsjsjsjs', 'sgshshshshs', 'Dunedin', 'Bachelor of Nursing', 1, '3918-00-22', '2018-12-10', 80, NULL, NULL, 'Automotive', NULL, NULL),
(21, 'gjkkbvgj', 'vbjkhvcf', 'hhkkbggh', 'Wellington', 'No Qualifications', 1, '3918-00-20', '0000-00-00', 76, NULL, NULL, 'Hair Dressing', NULL, NULL),
(22, 'shshshshsdjshs', 'xhshdhdhdhd', 'shshsjsjdjdud', 'Wellington', 'No Qualifications', 1, '3918-00-22', '0000-00-00', 83, NULL, NULL, 'Hair Dressing', NULL, NULL),
(23, 'shsh', 'djdhdh', 'zhshdbs', 'Wellington', 'No Qualifications', 1, '3918-00-16', '0000-00-00', 51, NULL, NULL, 'Hair Dressing', NULL, NULL),
(24, 'shsbsb', 'djdjdh', 'shshs', 'Wellington', 'No Qualifications', 1, '3918-00-23', '0000-00-00', 33, NULL, NULL, 'Hair Dressing', NULL, NULL),
(25, 'sjsjsjsj', 'xjdjdhsjsjd', 'xjxhxbxbdjd', 'Wellington', 'No Qualifications', 1, '3918-00-30', '0000-00-00', 56, NULL, NULL, 'Hair Dressing', NULL, NULL),
(26, 'shshsbdbs', 'dhdhdhdhddhd', 'dbdbdbdd', 'Wellington', 'No Qualifications', 1, '3918-00-30', '0000-00-00', 34, NULL, NULL, 'Hair Dressing', NULL, NULL),
(27, 'gghhh', 'gggggg', 'gfgggg', 'Wellington', 'No Qualifications', 1, '3918-00-22', '0000-00-00', 70, NULL, NULL, 'Hair Dressing', NULL, NULL),
(28, 'dhdhdh', 'djdjdhdjdj', 'xhdhdhdhd', 'Wellington', 'Bachelor of Engineering', 1, '3918-00-23', '2018-00-10', 35, NULL, NULL, 'Hair Dressing', NULL, NULL),
(29, 'hbbh', 'hhhhh', 'hhhhhhhhh', 'New Plymouth', 'Bachelor of Engineering', 1, '3918-00-30', '2018-03-10', 41, NULL, NULL, 'Hair Dressing', NULL, NULL),
(33, 'vbnm', 'vvhhjj', 'vvbbbj', 'Wellington', 'No Qualifications', 1, '3918-00-30', '0000-00-00', 62, NULL, NULL, 'Hair Dressing', -40.9641383, 175.6402938),
(31, 'rhdhdhd', 'fhfhdhf', 'dhdhdbd', 'Wellington', 'No Qualifications', 1, '3918-00-30', '2018-10-10', 39, NULL, NULL, 'Hair Dressing', -40.9641383, 175.6402938),
(32, 'gggg', 'hhhhh', 'zhsbsbbsbs', 'Wellington', 'No Qualifications', 1, '3918-00-30', '2018-11-10', 78, NULL, NULL, 'Hair Dressing', -40.9641383, 175.6402938),
(34, 'ghjknbhj', 'ghjnbhuj', 'newest\n', 'Wellington', 'No Qualifications', 1, '3918-00-30', '0000-00-00', 73, NULL, NULL, 'Hair Dressing', -40.9641383, 175.6402938),
(35, 'bjiijk', 'ghyuuhg', 'gghbgyuj', 'Wellington', 'No Qualifications', 1, '3918-00-30', '0000-00-00', 69, NULL, NULL, 'Hair Dressing', -40.9641383, 175.6402938),
(36, 'title', 'Company', 'Desc', 'Location', 'qualification', 1, '2018-01-01', '2018-01-01', 12.5, NULL, NULL, 'type', NULL, NULL),
(37, 'hi', 'hi', 'sdfsdf', 'Wellington', 'No Qualifications', 9, '3918-00-31', '0000-00-00', 55, NULL, NULL, 'Hair Dressing', 37.4219983, -122.084),
(38, 'Graduate Java Developer', 'Ironclad Technology Solutions', 'This Junior Developer position will join the Product Development team, focusing on new features; new add ons and also improvements to existing products. You will be learning from industry leading professionals and the training and accreditations will be covered by the business in order to position you as an expert in this field.', 'Wellington', 'Bachelor of Science', 9, '3918-00-31', '0000-00-00', 57, NULL, NULL, 'IT', 37.4219983, -122.084);

-- --------------------------------------------------------

--
-- Table structure for table `rejected`
--

CREATE TABLE `rejected` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_file_path` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `qual` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `p_word` varchar(99) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `f_name`, `l_name`, `img_file_path`, `_desc`, `city`, `qual`, `u_name`, `lat`, `lng`, `token`, `p_word`) VALUES
(9, 'Camille', 'Camille', 'Camille', ' ', 'Camille', 'Wellington', 'No Qualifications', 'Camille', NULL, NULL, 'd2oGAnJ8XqQ:APA91bEUA5TbEloSGtxgGgCY-2L04oHbqamBbrkmzDY5aOnNjHTM4Ds5ZmLwnEHf7UJmNpPUWaLhXaiOv-A85j5lvHJZ7MSgYX79S19Q2rurmiRewrUGeLlOlZ1obvH2cirsgdVSZxjw', '$2y$10$Rxxd9ASaKBqiZi/V3zjvG.tQPqlTnGcVlvDspMy3I5QRAaQJlqola'),
(14, 'taplindaniel7@gmail.com', 'Daniel', 'Taplin', ' ', 'sdaasdasdasdasd', 'Wellington', 'Bachelor of Nursing', 'danielwtap', NULL, NULL, 'eXc-y1Z8fLA:APA91bHAlfYJ4cGZ3ZufaVzWqbcZAsWQfcFmscFIOKKL0M2aNOr5u-UVS9frVH81-ouxxBYUTH8ELzTSoHisnzv8B4sRt6ORISSO0jwTk_8V9ztlVMCN8yN32Ge82D3_NbIl3OUBd9fZ', '$2y$10$55bDgs.8piZv2GFU14Qt3OeAIV3VZuw97ls.fCTz7WvIsLIajRhL2'),
(13, 'danielwilliamt@outlook.co.nz', 'Daniel', 'Taplin', ' ', 'cool guy with tats, looks good in an apron', 'Palmerston North', 'Diploma of Computer Servicing', 'danielwilliamt', NULL, NULL, 'eXc-y1Z8fLA:APA91bHAlfYJ4cGZ3ZufaVzWqbcZAsWQfcFmscFIOKKL0M2aNOr5u-UVS9frVH81-ouxxBYUTH8ELzTSoHisnzv8B4sRt6ORISSO0jwTk_8V9ztlVMCN8yN32Ge82D3_NbIl3OUBd9fZ', '$2y$10$7Dw4RDPeSAK6yodSwzTL1.S76k6TzcMwK1/bmf7v3hNKuNzavA6by');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`id`, `listing_id`, `user_id`) VALUES
(3, 6, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected`
--
ALTER TABLE `rejected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `rejected`
--
ALTER TABLE `rejected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
