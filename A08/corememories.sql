-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 05:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'family1.jpg', 'This photo was taken in July 2022 during my Senior High School graduation day. It was a special moment because my whole family was there to witness me graduate.', '#FF7043'),
(2, 1, 'family2.png', 'This photo was taken on July 18, 2023, during my mother’s birthday celebration. We spent her special day, enjoying a meal together and doing other activities as a family.', '#FF7043'),
(3, 1, 'family3.png', 'As I recall, this photo was taken on December 31, 2023. It was our first picture together captured during New Year’s Eve. This moment holds a special place in my heart because it marked the start of a new year, shared with the people I care about most.', '#FF7043'),
(4, 1, 'family4.png', 'I am with my brother, and it was taken in 2022. As I remember, this was our first bonding experience where it was just the two of us. This moment became even more special because I got to share it with my brother.', '#FF7043'),
(5, 2, 'friend1.png', 'I’m with my childhood friends, and it was taken during New Year’s Eve in December 2023. Every Christmas and New Year’s Eve, aside from celebrating with my family, I spend these special occasions with them. It has become our tradition to welcome the new year together.', '#FF80AB'),
(6, 2, 'friend2.png', 'I’m with my high school friends and this photo was taken in November 2023. We used the opportunity to catch up, bond, and do other activities after a year of not seeing each other. Unfortunately, not everyone was able to join us because some were busy.', '#FF80AB'),
(7, 2, 'friend3.png', 'I’m with my Senior High School friends. It was taken last August 2024 to celebrate the birthday of one of our friends. After two years of not seeing each other due to our busy schedules, we were finally able to set a date to meet.', '#FF80AB'),
(9, 2, 'friend5.png', 'I’m with my college friends, the ones who have been with me through everything during my college journey. We’re using this time to unwind from academic stress and also to bond and create meaningful memories together, even if just for a little while.', '#FF80AB'),
(10, 3, 'acting1.png', 'This picture was taken in 2017 when I was in Grade 7. I remember we were filming a teaser for Ibong Adarna. I played one of the antagonist characters alongside a classmate who was also a villain in the story and it was my first time acting.', '#2196F3'),
(11, 3, 'acting2.png', 'This picture was taken in 2019 during our Grade 9 Recognition Day. Our entire class had the opportunity to showcase our acting skills in front of the guests, especially our parents and teachers. During the event, we performed El Filibusterismo in front of them.', '#2196F3'),
(12, 3, 'acting3.png', 'This picture was taken during my Grade 9 year, specifically during English Month. In this moment, we performed an English story for the elementary students as part of the celebration of English Month.', '#2196F3'),
(13, 3, 'acting4.png', 'This picture is memorable because it was the second time I played the lead role in a film. It was taken during the filming of a short film for our RPH subject. I was happy because I got to work with new people who guided us throughout the process.', '#2196F3'),
(14, 4, 'music1.png', 'I’m playing the first instrument I ever learned, which is the flute. In this moment, we played two Christmas songs. It was mandatory for all students to learn how to play the flute, as it was a requirement for the music class.', '#9C27B0'),
(15, 4, 'music2.png', 'Actually, I’ve been exploring other instruments, and since we have a keyboard, I decided to try learning it. It was really challenging because there are so many keys to press, and I needed to familiarize myself with all of them.', '#9C27B0'),
(16, 4, 'music3.png', 'This photo was taken in 2024, and I believe the song I’m playing here is Torete. The backstory behind me learning how to play the ukulele is actually because I was bored. I bought it back in 2019 because I wanted to learn how to play the ukulele.', '#9C27B0');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', NULL, NULL, '#FF7043', 'family island.png', ''),
(2, 'Friendship Island', NULL, NULL, '#FF80AB', 'friendship island.png', ''),
(3, 'Performance Island', NULL, NULL, '#2196F3', 'acting island.png', ''),
(4, 'Music Island', NULL, NULL, '#9C27B0', 'music island.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
