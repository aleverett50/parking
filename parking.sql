-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 10:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `seo_url`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'll', 'll', '<p>ll</p>', '2017-01-26 10:33:19', '2017-01-26 10:33:57', '2017-01-26 10:33:57'),
(2, 'sdf', 'sdf', '<p>sdf</p>', '2017-01-26 10:36:20', '2017-01-26 10:36:22', '2017-01-26 10:36:22'),
(5, 'sdfsdf', 'sdf', '<p>sdf</p>', '2017-01-26 10:44:14', '2017-01-26 10:44:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `alt`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'll', 'jpg', '2017-01-26 10:33:19', '2017-01-26 10:33:19', NULL),
(2, 1, 'aaa', 'jpg', '2017-01-26 10:33:19', '2017-01-26 10:33:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_url` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `seo_url`, `text`, `meta_description`, `meta_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Airport Parking', 'airport-parking', '<p>This is parking text</p>\r\n<p>another para</p>', 'This is a meta desc for airport parking', 'title for parking', '2017-01-10 16:12:12', '2017-01-26 21:02:28', NULL),
(8, 'Airport Hotels', 'airport-hotels', '<p>this is text</p>\r\n<p>another paragraph</p>', 'This is a meta desc for airport hotels', 'title for ap hotels', '2017-01-26 14:48:36', '2017-01-26 21:47:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_images`
--

CREATE TABLE `category_images` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_images`
--

INSERT INTO `category_images` (`id`, `category_id`, `alt`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 'alt-1', 'jpg', '2017-01-26 21:47:12', '2017-01-26 21:47:12', NULL),
(2, 8, 'alt-2', 'jpg', '2017-01-26 21:47:12', '2017-01-26 21:47:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `alt`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'aasxx', 'jpg', '2017-01-26 11:59:13', '2017-01-26 12:11:21', '2017-01-26 12:11:21'),
(7, 'First Gallery Image', 'jpg', '2017-01-26 12:10:35', '2017-01-26 13:01:40', NULL),
(8, 'Second Gallery Image', 'jpg', '2017-01-26 12:10:49', '2017-01-26 13:01:40', NULL),
(9, '', 'jpg', '2017-01-26 12:11:14', '2017-01-26 12:11:18', '2017-01-26 12:11:18'),
(10, 'Third Gallery Image', 'jpg', '2017-01-26 12:21:51', '2017-01-26 13:01:40', NULL),
(11, 'fourth', 'jpg', '2017-01-26 12:28:17', '2017-01-26 13:01:40', NULL),
(12, 'five', 'jpg', '2017-01-26 12:28:25', '2017-01-26 13:01:40', NULL),
(13, 'aaa x', 'jpg', '2017-01-26 12:34:05', '2017-01-26 13:01:40', NULL),
(14, 'aa', 'jpg', '2017-01-26 13:01:40', '2017-01-26 13:01:43', '2017-01-26 13:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_url` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `seo_url`, `price`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 6, 'Product Title', 'product-title', '10.00', '<p>desc</p>', '2017-01-10 15:12:10', '2017-01-26 17:03:47', NULL),
(3, 2, 'Second Product', 'second-product', '0.00', 'xxs', '2017-01-10 15:41:23', '2017-01-10 16:19:50', NULL),
(4, 6, 'p', 'p', '10.00', '<p>s</p>', '2017-01-26 10:56:46', '2017-01-26 11:01:28', '2017-01-26 11:01:28'),
(5, 6, 'asdasd', 'asd', '0.00', '<p>asd</p>', '2017-01-26 10:58:31', '2017-01-26 11:00:37', '2017-01-26 11:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_role_id`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'User', 2, 'admin', '89940686f74db0188100ef15f57ae28b8e2e5671294856b5b562e155b6a4ad25', '2017-01-10 10:00:00', '2017-01-10 10:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`) VALUES
(1, 'customer'),
(2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_url` (`seo_url`);

--
-- Indexes for table `category_images`
--
ALTER TABLE `category_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_images`
--
ALTER TABLE `category_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
