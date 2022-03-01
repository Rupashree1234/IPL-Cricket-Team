-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 09:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `addplayer`
--

CREATE TABLE `addplayer` (
  `id` int(11) NOT NULL,
  `playername` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `isplaying` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplayer`
--

INSERT INTO `addplayer` (`id`, `playername`, `fromm`, `price`, `isplaying`, `description`, `image`) VALUES
(1, 'Dinesh Kartik', 'Kolkata Knight Riders', '22Crore', 'true', 'Batsman', 'assets/images/dineshkartik.jfif'),
(2, 'Mahindra Singh Dhoni', 'Chennai Super Kings', '23Crore', 'true', 'All Rounder', 'assets/images/msdhoni.jpg'),
(3, 'Subman Gill', 'Kolkata Knight Riders', '22Crore', 'true', 'Batsman', 'assets/images/submangill.jfif'),
(4, 'Rahul Tripathy', 'Kolkata Knight Riders', '23Crore', 'true', 'Batsman', 'assets/images/rahultripathy.jpg'),
(5, 'Nitish Rana', 'Kolkata Knight Riders', '22Crore', 'true', 'Bowler', 'assets/images/nitishrana.jfif'),
(6, 'Eoin Morgan', 'Kolkata Knight Riders', '23Crore', 'true', 'All Rounder', 'assets/images/eoinmorgan.jfif'),
(7, 'Andre Russel', 'Kolkata Knight Riders', '22Crore', 'true', 'All Rounder', 'assets/images/andrerussell.jpg'),
(8, 'David Warner', 'Delhi Capitals', '23Crore', 'true', 'Batsman', 'assets/images/davidwarner.jfif'),
(9, 'Mitchel Marsh', 'Delhi Capitals', '22Crore', 'true', 'Bowler', 'assets/images/mitchelmarsh.jpg'),
(10, 'Shardul Thakur', 'Delhi Capitals', '23Crore', 'true', 'All Rounder', 'assets/images/shardulthakur.jpg'),
(11, 'Mustafizur Rehman', 'Delhi Capitals', '22Crore', 'true', 'Batsman', 'assets/images/mustafizur rehman.jpg'),
(12, 'Rishabh Pant', 'Delhi Capitals', '23Crore', 'true', 'Bowler', 'assets/images/rishabh pant.jfif'),
(13, 'Ravindra Jadeja', 'Chennai Super Kings', '22Crore', 'true', 'Batsman', 'assets/images/Ravindra-Jadeja.jpg'),
(14, 'R Ashwin', 'Chennai Super Kings', '23Crore', 'true', 'Bowler', 'assets/images/rashwin.jpg'),
(15, 'Moeen Ali', 'Chennai Super Kings', '23Crore', 'true', 'All Rounder', 'assets/images/moeenali.jpg'),
(16, 'Ruturaj Gaikwad', 'Chennai Super Kings', '22Crore', 'true', 'Batsman', 'assets/images/ruturajgaikwad.jpg'),
(17, 'Rohit Sharma', 'Mumbai Indians', '22Crore', 'true', 'Batsman', 'assets/images/Rohit-Sharma.jpg'),
(18, 'Ishan Kishan', 'Mumbai Indians', '23Crore', 'true', 'Bowler', 'assets/images/ishankishan.jpg'),
(19, 'Jasprit Bumrah', 'Mumbai Indians', '23Crore', 'true', 'Bowler', 'assets/images/jaspritbumrah.jpg'),
(20, 'Suryakumar Yadav', 'Mumbai Indians', '22Crore', 'true', 'All Rounder', 'assets/images/suryakumaryadav.jpg'),
(21, 'Kieron Pollard', 'Mumbai Indians', '23Crore', 'true', 'Batsman', 'assets/images/kieron pollard.jfif'),
(22, 'Sanju Samson', 'Rajasthan Royals', '22Crore', 'true', 'All Rounder', 'assets/images/sanjusamson.jpg'),
(23, 'Jos Buttler', 'Rajasthan Royals', '23Crore', 'true', 'Batsman', 'assets/images/josbuttler.jpg'),
(24, 'Trent Boult', 'Rajasthan Royals', '22Crore', 'true', 'Bowler', 'assets/images/trentboult.jpg'),
(25, 'Karun Nair', 'Rajasthan Royals', '22Crore', 'true', 'Batsman', 'assets/images/karun-nair.jpg'),
(26, 'James Neesham', 'Rajasthan Royals', '23Crore', 'true', 'All Rounder', 'assets/images/James-Neesham.jpg'),
(27, 'Mohd. Siraj', 'Royal Challengers Bangalore', '22Crore', 'true', 'All Rounder', 'assets/images/mohd-siraj.jpg'),
(28, 'Harshal Patel', 'Royal Challengers Bangalore', '23Crore', 'true', 'Bowler', 'assets/images/harshalpatel.jfif'),
(29, 'Glenn Maxwell', 'Royal Challengers Bangalore', '23Crore', 'true', 'Batsman', 'assets/images/glennmaxwell.jfif'),
(30, 'Shahbaz Ahmed', 'Royal Challengers Bangalore', '22Crore', 'true', 'All Rounder', 'assets/images/shahbazahmed.jfif'),
(31, 'josh Hazlewood', 'Royal Challengers Bangalore', '22Crore', 'true', 'Batsman', 'assets/images/joshhazlewood.jpg'),
(32, 'Washington Sundar', 'Sunrisers Hydrabad', '22Crore', 'true', 'All Rounder', 'assets/images/washingtonsundar.jfif'),
(33, 'Kane Williamson', 'Sunrisers Hydrabad', '23Crore', 'true', 'All Rounder', 'assets/images/kanewilliamson.jpg'),
(34, 'Bhuvneshwar Kumar', 'Sunrisers Hydrabad', '23Crore', 'true', 'Bowler', 'assets/images/bhuvneshwarkumar.jpg'),
(35, 'Umran Malik', 'Sunrisers Hydrabad', '22Crore', 'true', 'Batsman', 'assets/images/umranmalik.jpg'),
(36, 'Abdul Samad', 'Sunrisers Hydrabad', '22Crore', 'true', 'Bowler', 'assets/images/abdul-samad.jpg'),
(37, 'Mayank Agarwal', 'Kings XI Punjab', '22Crore', 'true', 'Batsman', 'assets/images/mayankagarwal.jfif'),
(38, 'Kagiso Rabada', 'Kings XI Punjab', '23Crore', 'true', 'Bowler', 'assets/images/kagiso-rabada.jpg'),
(39, 'Arshdeep Singh', 'Kings XI Punjab', '22Crore', 'true', 'Batsman', 'assets/images/arshdeep-singh.jpg'),
(40, 'Jonny Bairstow', 'Kings XI Punjab', '23Crore', 'true', 'All Rounder', 'assets/images/jonnyBairstow.jpg'),
(41, 'Rahul Chahar', 'Kings XI Punjab', '23Crore', 'true', 'All Rounder', 'assets/images/rahul-chahar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addteam`
--

CREATE TABLE `addteam` (
  `id` int(11) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `playerno` int(255) NOT NULL,
  `won` int(255) NOT NULL,
  `batsman` varchar(255) NOT NULL,
  `bowler` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addteam`
--

INSERT INTO `addteam` (`id`, `teamname`, `playerno`, `won`, `batsman`, `bowler`, `image`) VALUES
(1, 'Kolkata Knight Riders', 5, 3, 'Virat Kohli', 'Jadeja', 'assets/images/kkr.jpg'),
(2, 'Delhi Capitals', 5, 4, 'Virat Kohli', 'Jadeja', 'assets/images/delhicap.jpg'),
(3, 'Chennai Super Kings', 5, 3, 'Virat Kohli', 'Jadeja', 'assets/images/csk.jfif'),
(4, 'Mumbai Indians', 5, 4, 'Virat Kohli', 'Jadeja', 'assets/images/mumbai.jfif'),
(5, 'Rajasthan Royals', 5, 4, 'Virat Kohli', 'Jadeja', 'assets/images/royal.jpg'),
(6, 'Royal Challengers Bangalore', 5, 3, 'Virat Kohli', 'Jadeja', 'assets/images/royalbang.jfif'),
(7, 'Sunrisers Hydrabad', 5, 4, 'Virat Kohli', 'Jadeja', 'assets/images/sunhydrabad.jfif'),
(8, 'Kings XI Punjab', 5, 3, 'Virat Kohli', 'Jadeja', 'assets/images/kingspunjab.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addplayer`
--
ALTER TABLE `addplayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addteam`
--
ALTER TABLE `addteam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplayer`
--
ALTER TABLE `addplayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `addteam`
--
ALTER TABLE `addteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
