-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 08:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovinray`
--

-- --------------------------------------------------------

--
-- Table structure for table `deluxroom`
--

CREATE TABLE `deluxroom` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deluxroom`
--

INSERT INTO `deluxroom` (`id`, `title`, `name`, `email`, `phone`, `checkin`, `checkout`) VALUES
(2, 'Mr', 'as', 'vishwaspinnawala@gmail.com', '0774463612', '2023-07-05', '2023-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `diving`
--

CREATE TABLE `diving` (
  `id` int(11) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `para` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diving`
--

INSERT INTO `diving` (`id`, `topic`, `para`) VALUES
(1, 'Discover a Diverse Underwater Wonderland:                                                                                                                ', 'Diving in Madiha offers an unparalleled experience, catering to both beginners and seasoned divers alike. The pristine turquoise waters are teeming with a rich variety of marine species, making every dive a mesmerizing encounter. From vibrant coral reefs to mysterious shipwrecks, the underwater landscape is a canvas of natural wonders waiting to be explored.                                                          '),
(2, 'A Haven for Marine Enthusiasts:                                                         ', 'Our website serves as your go-to resource for all things diving in Madiha, Matara. Whether you seek information on the best dive sites, scuba equipment rentals, or certified diving courses, we ve got you covered. We take pride in connecting you with reputable dive operators who prioritize safety and environmental conservation, ensuring you have a memorable and responsible diving experience.                                    '),
(3, 'Unforgettable Encounters:                                                        ', 'Immerse yourself in the world of colorful tropical fish, graceful sea turtles, and majestic manta rays. If you re lucky, you might even catch a glimpse of playful dolphins or the gentle giants of the sea – the magnificent whales that pass through these waters during their migratory journeys.                                                    '),
(4, 'Beyond Diving:                                                      ', 'While diving takes center stage, Madiha has so much more to offer. Our website provides insights into the local culture, mouthwatering cuisine, and nearby attractions, making your visit to Matara an enriching and holistic experience.                                                         '),
(5, 'Join us in Madiha, Matara:                                                         ', 'Whether you re an avid diver or simply seeking an extraordinary getaway, Madiha invites you to dive into an enchanting underwater realm. Let us be your guide to a world of wonder and adventure. Come, explore, and experience the magic of underwater diving in Madiha, Matara!                                ');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `roomtype`, `title`, `name`, `email`, `phone`, `checkin`, `checkout`) VALUES
(9, 'delux', 'Mr', 'as', 'vishwaspinnawala@gmail.com', '0774463612', '2023-07-05', '2023-07-06'),
(10, 'delux', 'Mr', 'as', 'vishwaspinnawala@gmail.com', '0774463612', '2023-07-05', '2023-07-06'),
(11, 'delux', 'Mr', 'as', 'vishwaspinnawala@gmail.com', '0774463612', '2023-07-05', '2023-07-06'),
(13, 'normal', 'Mr', 'Vishwa Pinnawala', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-02', '2023-08-31'),
(15, 'delux', 'Mr', 'Vishwa Pinnawala', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-02', '2023-08-18'),
(16, 'standard', 'Mr', 'Vishwa Pinnawala', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-01', '2023-08-25'),
(17, 'normal', 'Mr', 'Vishwa Pinnawala', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-02', '2023-08-23'),
(18, 'standard', 'Mr', 'Vishwa Pinnawala', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-01', '2023-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`) VALUES
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `normalroomm`
--

CREATE TABLE `normalroomm` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `normalroomm`
--

INSERT INTO `normalroomm` (`id`, `title`, `name`, `email`, `phone`, `checkin`, `checkout`) VALUES
(2, 'Mr', 'Vishwa', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-02', '2023-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `standardroom`
--

CREATE TABLE `standardroom` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `standardroom`
--

INSERT INTO `standardroom` (`id`, `title`, `name`, `email`, `phone`, `checkin`, `checkout`) VALUES
(1, 'Mr', 'Vishwa', 'vishwaspinnawala@gmail.com', '0774463612', '2023-08-02', '2023-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deluxroom`
--
ALTER TABLE `deluxroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diving`
--
ALTER TABLE `diving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalroomm`
--
ALTER TABLE `normalroomm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standardroom`
--
ALTER TABLE `standardroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deluxroom`
--
ALTER TABLE `deluxroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `diving`
--
ALTER TABLE `diving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `normalroomm`
--
ALTER TABLE `normalroomm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `standardroom`
--
ALTER TABLE `standardroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
