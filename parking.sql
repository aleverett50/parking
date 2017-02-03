-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 03:17 PM
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
(6, 'Airport Parking', 'airport-parking', '<p>Airport parking in the UK is an integral part of booking a holiday now. All airports offer services for people wishing to park their car for the duration of their holiday. The kind of service you go for&nbsp;and how much you would like to spend is up to you. There are different options for you to consider, these being On Site Parking, Off Site Parking and a Meet&nbsp;&amp; Greet service. What do we mean by that?</p>\r\n<h2>On Site Parking</h2>\r\n<p>On Site Parking is a service whereby you drive to the airport and park your car at the airport, with just a short bus ride to and from the car park. You would take your keys with you when you travel</p>\r\n<h2>Off Site Parking</h2>\r\n<p>Off Site Parking is situated away from the airport, usually a couple of miles away. Customers park their car and jump on a shuttle bus which takes them to and from the airport. Buses run frequently, usually every 15 minutes. This is gernally the cheapest form of airport parking.</p>\r\n<h2>Meet &amp; Greet</h2>\r\n<p>Meet&nbsp;&amp; Greet or Valet Parking as it is also known is the most convenient way to park your car. You just drive to the terminal where you are met by a representitive, hand them your keys and away you go. You are then met on your return at the terminal where you can drive off, no hassle.</p>', 'We offer airport parking at over 25 airports in the UK. Book online now and save money!', 'Airport Parking, Meet and Greet, Cheap Car Parking UK', '2017-01-10 16:12:12', '2017-02-03 13:57:21', NULL),
(8, 'Airport Hotels', 'airport-hotels', '<p>this is text</p>\r\n<p>another paragraph</p>', 'This is a meta desc for airport hotels', 'title for ap hotels', '2017-01-26 14:48:36', '2017-02-03 10:28:19', NULL);

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
  `filename` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `alt`, `ext`, `filename`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'alt tag', 'jpg', 'gatwick-airport-parking', '2017-02-03 10:33:10', '2017-02-03 10:33:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_url` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `seo_url`, `meta_title`, `meta_description`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 6, 'manchester airport parking', 'manchester', 'Manchester Airport parking, meet and greet', 'We offer great deals for airport parking at Manchester. Valet parking is also available.', '<p>You can save massive amounts of money by pre-booking. We have excellent rates for parking at Manchester Airport, instant quote available on right. Cheap rates also for meet and greet parking at all terminals at Manchester.</p>\r\n<p>Not sure what kind of parking you are looking for? On site, off site, valet parking? submit your quote request and read details of all our 9 parking locations. Then you can decide which site would be best for you.</p>', '2017-01-10 15:12:10', '2017-02-03 10:29:36', NULL),
(3, 6, 'airport parking gatwick', 'gatwick', 'Airport Parking at Gatwick, North Terminal, South Terminal', 'We offer great deals for airport parking at Gatwick terminals.', '<p>Airport parking at Gatwick South terminal and North Terminal. We offer a wide range of parking options for your travel requirements that are affordable and convenient. All our car parks are secure with a shuttle service to transport you to the terminal.</p>\r\n<p>To see all available parking, please complete the box on the left of this page, make your selection, then if you wish to proceed, book securely online.</p>', '2017-01-10 15:41:23', '2017-01-29 11:17:27', NULL),
(4, 6, 'p', 'p', '10.00', '<p>s</p>', '', '2017-01-26 10:56:46', '2017-01-26 11:01:28', '2017-01-26 11:01:28'),
(5, 6, 'asdasd', 'asd', '0.00', '<p>asd</p>', '', '2017-01-26 10:58:31', '2017-01-26 11:00:37', '2017-01-26 11:00:37'),
(6, 6, 'heathrow airport parking', 'heathrow', 'airport parking at heathrow, valet parking terminal 5', 'Find airport parking at Heathrow. We offer cheap rates on many car parks and valet car parking at Heathrow.', '<p style="color: #000;">Are you look for a Meet &amp; Greet or on site parking and Heathrow Airport this year. We have many meet and greet car parks to choose from. If you enter your dates and times in the search box to the left you''ll receive an instant quote on all our car parks at Heathrow.</p>\r\n<p style="color: #000;">Meet and greet, valet parking, on and off site parking available. Book now before our car parks fill up.</p>', '2017-01-29 11:31:38', '2017-01-29 11:32:08', NULL),
(7, 6, 'airport parking stansted', 'stansted', 'stansted airport parking, cheap parking, meet and greet at stansted', 'Looking for airport parking at Stansted? We have options for on and off site parking along with meet and greet.', '<p>Stansted airport is becoming more and more popular, with lots of need for parking your car when you go abroad. Find lots of cheap deals here for meet and greet and off site parking here at Stansted.</p>', '2017-01-29 11:37:04', '2017-01-29 11:37:30', NULL);

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

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `alt`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '', 'jpg', '2017-01-28 15:18:11', '2017-01-29 11:23:38', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
