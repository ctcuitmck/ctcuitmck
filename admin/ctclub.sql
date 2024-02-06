-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2024 at 01:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id21856652_cybertroopsclubuitmck`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_date` date NOT NULL,
  `club_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_date`, `club_id`) VALUES
(1, 'Program Solat Hajat', '2023-12-30', 1),
(2, 'CTC Team Buildings', '2023-12-12', 2),
(3, 'Editing class by John Doe', '2023-10-12', 3),
(4, 'Latihan Perbarisan', '2021-03-12', 4),
(5, 'Photography class ', '2022-02-01', 5),
(6, 'Program \"Cyber Troops is Us\"', '2021-03-12', 6),
(7, 'Club Between Club visit', '2024-02-08', 7),
(8, 'Annual Grand Meetings', '2024-01-25', 8),
(9, 'We Are We In Camp', '2024-02-12', 2),
(10, 'Team Buildings 2.0', '2025-03-12', 10),
(11, 'Media Artwork with Mr. Zurnurain', '2024-04-27', 11),
(12, 'Colour Run', '2024-04-26', 12),
(13, 'Cyber Security Charity Program', '2024-05-24', 13),
(14, 'Treasure Hunt', '2024-06-28', 14),
(15, 'Annual Grand Meeting', '2024-08-30', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_studid` int NOT NULL,
  `contact_desc` longtext NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `contact_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_studid`, `contact_desc`, `contact_email`, `contact_phone`) VALUES
(1, 'Mohd Zafian Bin Mohd Zawawi', 2021186322, 'This system is helpful bro!', 'zaffian@gmail.com', '0128088040'),
(2, 'Ahmad Bukhari', 2022345567, 'I like to visits this page.', 'bukharyyy@gmail.com', '0175700270'),
(3, 'Nur Sajaratul', 2021781001, 'This page is great!', 'fifyabdullah@gmail.com', '01118976542'),
(4, 'Alayka Tihanee', 2022931002, 'I love to scrolling this club page :)', 'laykanajwan@gmail.com', '0175700127'),
(5, 'Hazrina Alias', 2021678254, 'This page is very helpful for me.', 'thvreen@gmail.com', '0193737886'),
(6, 'Bella Razali', 2022456789, 'Everyone who confuse what club to join next semester please join this club. Best!', 'bell3razali@gmail.com', '0174093727'),
(7, 'Laila Majnun', 2022567892, 'good website', 'lailamajnun@gmail.com', '0176546543'),
(8, 'Nuril Bakar', 2021677223, 'Very responsive website, Goodjob guys!', 'nurilfahri@gmail.com', '0174532114'),
(9, 'Aqmar Rizal', 2022456788, ' Great system, I like it.', 'qmarrizal12@gmail.com', '01123456783'),
(10, 'AlFalah Romzi', 2021609224, 'I like to visits this page.', 'falahromzi@gmail.com', '0175700270'),
(11, 'Alya Iman', 2021456789, 'Very responsive website!', 'alyaiman@gmail.com', '0187654563'),
(12, 'Anas Adha', 2022456321, 'Looking foward for a great system. This website is very good:)', 'anasadhaaa@gmail.com', '0195678098'),
(13, 'Farith Luqman', 2021567423, 'I love the interface of this website. Aesthetic!', 'farithlookman@gmail.com', '0176543212'),
(14, 'Arraya Imani', 2022198662, 'I woul like to be a member of cyber troops. Notice me pls ;)', 'arraya23@gmail.com', '0197654345'),
(15, 'Sani Thaqif', 2021654335, 'Knowing about this websites from my contact. I would like to be a cyber troopers also.', 'thaqeef66@gmail.com', '0123478900');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) VALUES
(1, 'Mohd Zafian', 'Mohd Zawawi', 'zaffian@gmail.com', 'male', 'zaffian', '123'),
(2, 'Haziqah', 'Bakri', 'haziqahbakryyy@gmail.com', 'female', 'haziqah', '123'),
(3, 'Yusuf', 'Ahmad', 'whatswrongyusuf@gmail.com', 'male', 'ucop', '123'),
(4, 'Nur Shairah Atikah', 'Mohd Hamzar', 'shairah@gmail.com', 'female', 'shahirah', '123'),
(5, 'Mohamed Izlan', 'Mohamed Nor', 'izlan@gmail.com', 'male', 'Izlan', '123'),
(6, 'Nur', 'Shawanie', 'nshahwanie@gmail.com', 'female', 'wanie', '123'),
(7, 'Siti', 'Nur Zulaikha', 'ctikha@gmail.com', 'female', 'ikha', '123'),
(9, 'Bahiyyah', 'Husna', 'aisyahhusna29@gmail.com', 'female', 'husna', '123'),
(10, 'Siti', 'Nur Nabila', 'nabilarazali@gmail.com', 'female', 'bella', '123'),
(11, 'Ahmad', 'Zafri', 'ahmadzvfri@gmail.com', 'male', 'zafri', '123'),
(12, 'Aiman', 'Iskandar', 'Isqanderr@gmail.com', 'male', 'aiman', '123'),
(13, 'Nurul', 'Akma', 'akmarohizan14@gmail.com', 'female', 'akma', '123'),
(14, 'Syafa', 'Athira', 'syafaathira@gmail.com', 'female', 'syafa', '123'),
(15, 'Nur', 'Syaza', 'nursyazza@gmail.com', 'female', 'syaza', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
