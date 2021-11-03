-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 02:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_table`
--

CREATE TABLE `admin_login_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  `photo` mediumtext NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login_table`
--

INSERT INTO `admin_login_table` (`id`, `name`, `password`, `email`, `mobile`, `level`, `photo`, `code`) VALUES
(1, 'admin', 'b59c67bf196a4758191e42f76670ceba', 'admin@gmail.com', '0.1775567493', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `class` mediumtext NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job_cat_table`
--

CREATE TABLE `job_cat_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `font_awesome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_cat_table`
--

INSERT INTO `job_cat_table` (`id`, `name`, `title`, `cat_icon`, `font_awesome`) VALUES
(1, 'Govt Job', '', '', ''),
(2, 'Nongovt Job', '', '', ''),
(3, 'Blog', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_comment_table`
--

CREATE TABLE `job_comment_table` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job_post_table`
--

CREATE TABLE `job_post_table` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_id` int(11) NOT NULL,
  `job_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dedline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_post_table`
--

INSERT INTO `job_post_table` (`id`, `date`, `admin_id`, `job_category_id`, `title`, `content`, `status`, `icon`, `file`, `location`, `dedline`) VALUES
(1, '2021-10-01 12:11:30', 1, 1, 'sssssssssssssssss', '<p>sssssssssssssssssssssssssssssssssssssssssssssssssss</p>\r\n', 0, '6435447022.png', '6435447022.pdf', '127.0.0.1', 'ssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `job_sub_comment_table`
--

CREATE TABLE `job_sub_comment_table` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `sub_comment` text NOT NULL,
  `sub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page_table`
--

CREATE TABLE `page_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_table`
--

CREATE TABLE `suggestion_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `year` varchar(255) NOT NULL,
  `semister` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_interface_table`
--

CREATE TABLE `user_interface_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `solocan` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `meta_tag` text NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `copy_right` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_login_table`
--

CREATE TABLE `user_login_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login_table`
--

INSERT INTO `user_login_table` (`id`, `name`, `email`, `mobile`, `password`, `image`, `code`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 1775567493, 'b59c67bf196a4758191e42f76670ceba', '9061cc89cf.png', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_cat_table`
--
ALTER TABLE `job_cat_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_comment_table`
--
ALTER TABLE `job_comment_table`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `job_post_table`
--
ALTER TABLE `job_post_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_sub_comment_table`
--
ALTER TABLE `job_sub_comment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_table`
--
ALTER TABLE `page_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_interface_table`
--
ALTER TABLE `user_interface_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login_table`
--
ALTER TABLE `user_login_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_cat_table`
--
ALTER TABLE `job_cat_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_comment_table`
--
ALTER TABLE `job_comment_table`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_post_table`
--
ALTER TABLE `job_post_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `job_sub_comment_table`
--
ALTER TABLE `job_sub_comment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_table`
--
ALTER TABLE `page_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_interface_table`
--
ALTER TABLE `user_interface_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login_table`
--
ALTER TABLE `user_login_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
