-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 03, 2023 at 01:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recordplayerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `givenName` varchar(50) DEFAULT NULL,
  `familyName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobileNumber` varchar(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `givenName`, `familyName`, `email`, `mobileNumber`, `password`) VALUES
(0, 'Joao Luca', 'Carneiro Souza', 'japak@hotmail.com', NULL, '$2y$10$KlP4rvW5UWyUUjGMMHTgve7C1T35fqdgH4LIk2egjI3Eye30OgbTe');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `total_amount` decimal(6,2) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `email`, `total_amount`, `status`) VALUES
('025592276339695275883170149325', 'Mariap@hotmasil.com', 142.00, 'paid'),
('073377388388339929771170156228', 'joaocs1998@gmail.com', 121.00, 'paid'),
('073853173083515792639170149126', 'joao@gmail.com', 69.00, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `order_id` varchar(30) NOT NULL,
  `recordID` int(11) NOT NULL,
  `qty` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`order_id`, `recordID`, `qty`) VALUES
('076332492122973835737170149123', 1, 69),
('073853173083515792639170149126', 1, 69),
('025592276339695275883170149325', 2, 52),
('025592276339695275883170149325', 3, 65),
('025592276339695275883170149325', 4, 25),
('073377388388339929771170156228', 1, 69),
('073377388388339929771170156228', 2, 52);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `recordID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `artist` varchar(30) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `releaseYear` int(11) DEFAULT NULL,
  `secondHand` tinyint(1) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `recordCover` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`recordID`, `title`, `artist`, `genre`, `releaseYear`, `secondHand`, `price`, `quantity`, `description`, `recordCover`) VALUES
(1, 'Birds In The Trap Sing McKnight', 'Travis Scott', 'Rap', 2016, 0, 69.00, 3, 'Named after Quavo\'s line in the 2016 hit with Travis Scott and Young Thug, this delayed follow-up arrived in the third quarter. \"Pick Up the Phone\" serves as the lead single. Birds in the Trap doesn\'t deviate much from Rodeo, but it features notable guest appearances, including André 3000 on \"The Ends.\" The album is characterized by heavy beats, catchy hooks, and occasional surprises like \"Guidance.\" Kendrick Lamar, Kid Cudi, 21 Savage, and Cassie also make appearances.', './images/travis.png'),
(2, 'The Best Studio & Live Recordings (2xLP)', 'Nina Simone', 'Jazz', NULL, 0, 52.00, 2, 'Nina Simone is regarded as one of the most influential recording artists of the 20th century. She was a pioneering musician whose career was characterized by \"fits of outrage and improvisational genius\". In naming Simone the 29th greatest singer of all time, Rolling Stone wrote that \"her honey-coated, slightly adenoidal cry was one of the most affecting voices of the civil rights movement\", while making note of her ability to \"belt barroom blues, croon cabaret and explore jazz.\" The first LP in this set presents a selection of Simone\'s finest studio recordings; LP two features songs from some of the passionate live performances for which Nina Simone was rightly famous.', './images/nina.png'),
(3, 'Abbey Road (50th Anniversary Edition - US)', 'The Beatles', 'Pop & Rock', 2019, 0, 65.00, 1, 'The 50th anniversary of the Beatles\' \"Abbey Road\" album is celebrated with special editions. \"Abbey Road,\" originally released in 1969, features iconic tracks like \"Come Together\" and \"Here Comes The Sun.\" New stereo mixes from the original tapes have been created for these editions.\r\n\r\nThe releases include standard CDs and LPs, a limited Picture Disc LP, and deluxe editions. The double CD digipak includes the new mix and additional session and demo recordings, along with a 40-page booklet. \r\n\r\nThe Super Deluxe Edition is even more extensive, featuring two extra CDs with unreleased recordings and a Blu-ray Audio with various formats. It includes a 100-page hardcover book filled with insights, photos, and lyrics.\r\n\r\nFor vinyl fans, there\'s a Deluxe 3 LP box set with all 40 tracks. These editions offer a comprehensive celebration of \"Abbey Road,\" making it a must-have for music enthusiasts. Reviews commend the anniversary edition for its stunning sound quality, elevating this masterpiece.', './images/beatles.png'),
(4, 'Nevermind', 'Nirvana', 'Pop & Rock', 1991, 1, 25.00, 4, 'Nevermind\" was released in September 1991, quickly became a classic and rewrote the rules of pop music for the decade just begun. Within a few months the album climbed to number 1 in the U.S. Billboard charts and also reached the top of the charts worldwide. Young fans all over the world identified with the band and made \"Smells Like Teen Spirit\" their anthem with a groundbreaking video. Since then, more than 30 million copies of the album have been sold.', './images/nirvana.png'),
(5, 'The Jimi Hendrix Experience - Axis: Bold As Love (Stereo)', 'Jimi Hendrix', 'Pop & Rock', 1967, 0, 65.00, 3, 'Jimi Hendrix was probably the most innovative guitarist rock music has ever produced. Rooted in soul, blues and rock \'n\' roll, he improvised like a jazz player using an arsenal of effects. His second album with The Jimi Hendrix Experience, consisting of bassist Noel Redding, drummer Mitch Mitchell and Hendrix himself, was a resounding success. Hendrix, who before his time in England had appeared neither as a songwriter nor as a singer, draws on Axis: Bold As Love in dazzling songs cosmic worlds in which he combined his passion for fantasy with gripping melodies.', './images/jimi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`recordID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
