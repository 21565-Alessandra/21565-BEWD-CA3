-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 02:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'user1', 'user1@user.com', '$2y$10$kkWvBXPZ5jVDkje4PAWj7.w5dxpg4jbVGxbxQMhuKzLj9WTZEmxPG'),
(2, 'admin', 'admin', '$2y$10$/aRQzZVnDRdIvnal4IvAmu2xyzslB0izllq26ud05H9u82hoaRtki'),
(3, 'admin1', 'admin1', '$2y$10$ygKEGACemDGugZc9AY3c2uBSKcnRmrk42IxrL0p0OafBkyXLIamNi'),
(4, 'user2', 'user2', '$2y$10$9nsNYnJZvlV6GJXJeIXyielKPDBpa5M9ZBjs2alwoz6IM4izUeZ/i');

-- --------------------------------------------------------

--
-- Table structure for table `ycollection`
--

CREATE TABLE `ycollection` (
  `id` int(11) NOT NULL,
  `album` varchar(255) NOT NULL,
  `band` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ycollection`
--

INSERT INTO `ycollection` (`id`, `album`, `band`, `year`, `label`, `description`, `price`, `image`) VALUES
(4, 'White Album', 'The Beatles', '1968', 'Apple Records', 'The Beatles, also known colloquially as the White Album, is the ninth studio album and only double album by the English rock band the Beatles, released on 22 November 1968.', 15, 'White-Album.png'),
(5, 'DARK SIDE OF THE MOON', 'Pink Floyd', '1973', 'Harvest Records', 'The Dark Side of the Moon is the eighth studio album by the English rock band Pink Floyd, released on 1 March 1973 by Harvest Records. An early version was premiered before recording began.', 10, 'Dark_Side_of_the_Moon.png'),
(6, 'Black Album', 'Metallica ', '1991', 'Elektra Records', 'Metallica is fifth studio album by American heavy metal band Metallica. Released 1991, it is commonly referred to as The Black Album because of its packaging design.', 13, 'black-album.jpg'),
(8, 'Back in Black', 'AC/DC', '1980', 'Atlantic Records', 'Back in Black is the seventh studio album by Australian rock band AC/DC. It was released on 25 July 1980. It is the band\'s first album to feature lead singer Brian Johnson, following the death of previous lead singer Bon Scott.', 11, 'Back_in_Black.png'),
(9, 'Get a Grip', 'Aerosmith', '1993', 'Geffen Records', 'Get a Grip is the eleventh studio album by American rock band Aerosmith, released in April 1993 by Geffen Records. Get a Grip was the band\'s last studio album to be released by Geffen before they returned to Columbia Records.', 13, 'GetAGrip.jpg'),
(10, 'Fruto Proibido', 'Rita Lee', '1975', 'Som Livre', 'Fruto Proibido is the fourth studio album by Brazilian rock singer Rita Lee - and the second with the band Tutti Frutti - released in 1975. Work that dialogued with the situations of the mid-1970s - a time of great socio-cultural changes.', 15, 'RitaLee_Fruto_Proibido.jpg'),
(11, 'Back to Black', 'Amy Winehouse', '2006', 'Island Records', 'Back to Black is the second and final studio album by the English singer and song writer Amy Winehouse, released on 27 October 2006 by Island Records.', 22, 'Back_to_Black.png'),
(12, 'Lazaretto', 'Jack White', '2014', 'Third Man Records', 'Lazaretto is the second studio album by Jack White. It was released on June 10, 2014, through White\'s own label Third Man Records.', 13, 'lazaretto.webp'),
(13, 'Road to Ruin', 'Ramones', '1978', 'Sire Records', 'Road to Ruin is the fourth studio album by American punk rock band the Ramones, released on September 21, 1978, through Sire Records as LP record.', 11, 'Road_to_Ruin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ycollection`
--
ALTER TABLE `ycollection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ycollection`
--
ALTER TABLE `ycollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
