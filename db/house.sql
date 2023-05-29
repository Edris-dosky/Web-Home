-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2023 at 08:05 PM
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
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `rule`) VALUES
(1, 'edris', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', 'edris.dosky@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fav_posts`
--

CREATE TABLE `fav_posts` (
  `fav_post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav_posts`
--

INSERT INTO `fav_posts` (`fav_post_id`, `user_id`, `post_id`) VALUES
(18, 1, 50),
(20, 1, 1),
(24, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `profile` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `post_id`, `fileName`, `profile`) VALUES
(1, 1, '1.jpg', 'y'),
(2, 2, '12.jpg', 'y'),
(3, 3, '123.jpg', 'y'),
(4, 51, '123.jpg', 'y'),
(5, 51, 'FXejWiFXkAEBQRP.jpg', 'n'),
(6, 51, 'IMG_20221120_182347_545-01.jpeg', 'n'),
(7, 51, 'FXejWiFXkAEBQRP.jpg', 'n'),
(8, 51, 'IMG_20221120_182347_545-01.jpeg', 'n'),
(9, 51, '3997521.png', 'n'),
(10, 51, '13208355128512892975482912823997521.png', 'n'),
(11, 51, '7862629174519867641804395811FXejWiFXkAEBQRP.jpg', 'n'),
(12, 51, '1530009210876168155012237IMG_20221120_182347_545-01.jpeg', 'n'),
(13, 51, '75380419210894628931967046270327262439_864140764867323_1152629326468652475_n.jpg', 'y'),
(14, 51, '19148473321654553535520567823IMG_20221120_182347_545-01.jpeg', 'n'),
(15, 51, '1348944030723834078680634847327262439_864140764867323_1152629326468652475_n.jpg', 'y'),
(16, 51, '12065709111335963297283827076IMG_20221120_182347_545-01.jpeg', 'n'),
(17, 51, '279580109680763156426813424EPU_logo.png', 'y'),
(18, 51, '2038435463159854186584230878FXejWiFXkAEBQRP.jpg', 'y'),
(19, 52, '88793273215382313361072890613map-65.svg', 'y'),
(20, 52, '12393750581965298055217998535map-65.svg', 'y'),
(21, 52, '6181126927611252931403553415map-65.svg', 'n'),
(22, 52, '47238962313620022961908815188FXejWiFXkAEBQRP.jpg', 'y'),
(23, 52, '17631897751695070553834178056FXejWiFXkAEBQRP.jpg', 'y'),
(24, 52, '18082523401430322662751114955EPU_logo.png', 'n'),
(25, 52, '11166430651608751531707135672IMG_20221120_182347_545-01.jpeg', 'y'),
(26, 52, '7576005691577604742642569187FXejWiFXkAEBQRP.jpg', 'n'),
(27, 52, '571809200205021375547358098EPU_logo.png', 'y'),
(28, 52, '2458814771809399148379652619EPU_logo.png', 'n'),
(29, 53, '12604003906565745821678565635123.jpg', 'y'),
(30, 53, '62733320816810732566361871.jpg', 'n'),
(31, 53, '2133991889792191197133816326312.jpg', 'n'),
(32, 53, '366768208860821604763457591house.jpg', 'n'),
(33, 54, '9120961524610709998343673221684749426204.jpg', 'y'),
(34, 54, '42517381528332051210975139821684749426204.jpg', 'n'),
(35, 54, '1764133991516292649784064286product-1642709354-61e9c16ad03ae.png', 'n'),
(36, 54, '362720091117985337515644546woman-shampoo-1.png', 'n'),
(37, 54, '7513193492107078621903183798FB_IMG_1684000023271.jpg', 'n'),
(38, 54, '990503980265773035529358935web_first_images_release.png', 'n'),
(39, 54, '267890745205733438927130018212WEBB-HP2A-square640.jpg', 'n'),
(40, 54, '92848463536437466118652984021684749426204.jpg', 'y'),
(41, 54, '177390657115180212666982446031684749426204.jpg', 'n'),
(42, 54, '1149426215934947596102886399product-1642709354-61e9c16ad03ae.png', 'n'),
(43, 54, '14506186971712972734878664322woman-shampoo-1.png', 'n'),
(44, 54, '80551613632353347664387473FB_IMG_1684000023271.jpg', 'n'),
(45, 54, '12506653255025218332106322355web_first_images_release.png', 'n'),
(46, 54, '862230754697019879118348519612WEBB-HP2A-square640.jpg', 'n'),
(47, 55, '11797308911321489435408520447IMG_20230527_170940.jpg', 'y'),
(48, 55, '46842977517157809996975353451684749426204.jpg', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pre_type` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rooms` int(255) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `recaptionroom` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text NOT NULL,
  `cadastral` int(255) NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `balacony` int(11) NOT NULL,
  `tree` int(11) NOT NULL,
  `ready` int(11) NOT NULL,
  `electricity` int(11) NOT NULL,
  `clothesroom` int(11) NOT NULL,
  `Swimming` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `security` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `park` int(11) NOT NULL,
  `gym` int(11) NOT NULL,
  `market` int(11) NOT NULL,
  `angles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `name`, `tell`, `email`, `area`, `city`, `location`, `price`, `pre_type`, `type`, `rooms`, `bedroom`, `bathroom`, `recaptionroom`, `time`, `details`, `cadastral`, `verify`, `balacony`, `tree`, `ready`, `electricity`, `clothesroom`, `Swimming`, `camera`, `security`, `garage`, `park`, `gym`, `market`, `angles`) VALUES
(1, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 200, 'هەولێر', 'برایەتی', '150', 'فرۆشتن', 'خانوو', 0, 2, 3, 1, '2023-05-07 14:59:28', 'دەرەجە یەکە', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 'ehmed', '07504946954', 'ahmed.deko@gmail.com', 366, 'سۆران', 'مێرگەسۆر', '2000', 'کرێ', 'خانوو', 0, 2, 1, 2, '2023-05-07 15:05:40', '...', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 'e', '', '', 250, 'دهۆک', 'حەوشکێ', '0', 'فرۆشتن', 'خانوو', 0, 2, 1, 0, '2023-05-07 14:59:58', '', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 1000, 'هەولێر', 'بەختیاری', '20000', 'فرۆشتن', 'خانوو', 3, 6, 4, 4, '2023-05-07 14:59:48', 'خانیویەکی تا بڵی جۆ/شە', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 4000, 'سۆران', 'بارزان', '40000', 'کرێ', 'خانوو', 1, 3, 3, 2, '2023-05-07 14:59:55', 'XANWAKE TA BLE JWANA', 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1),
(52, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 1000, 'دهۆک', 'بارزان', '50000', 'کرێ', 'ئەرز', 0, 0, 0, 0, '2023-05-12 20:42:40', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(53, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 1000, 'شەقڵاوە', 'بارزان', '5000', 'کرێ', 'خانوو', 5, 3, 3, 4, '2023-05-15 21:00:00', '', 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(54, 1, 'edris', '07503732421', 'edris.dosky@gmail.com', 4000, 'رانیە', 'Badawa', '1500', 'فرۆشتن', 'ئەرز', 0, 0, 0, 0, '2023-05-25 21:00:00', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(55, 21, 'Musa', '07504749401', 'musa@gmail.com', 2500, 'سۆران', 'قەندیل', '30000', 'فرۆشتن', 'مەزرەعە', 0, 0, 0, 0, '2023-05-26 21:00:00', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tell` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `tell`, `email`, `password`, `photo`) VALUES
(1, 'edris', '07503732421', 'edris.dosky@gmail.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', 'edris.jpg'),
(19, 'kaka', '07503652434', 'majid@gamil.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', ''),
(20, 'ali', '07704453567', 'edris.dosky@gmail.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', ''),
(21, 'Musa', '07504749401', 'musa@gmail.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav_posts`
--
ALTER TABLE `fav_posts`
  ADD PRIMARY KEY (`fav_post_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fav_posts`
--
ALTER TABLE `fav_posts`
  MODIFY `fav_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
