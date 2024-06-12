-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation time: 12/06/2024 às 03:06
-- Server version: 10.4.32-MariaDB
-- PHP version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colleges`
--

-- --------------------------------------------------------

--
-- Table Structure `students_detailed`
--

CREATE TABLE `students_detailed` (
  `name` varchar(30) NOT NULL,
  `id` int(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `grade` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Placing data in the table `students_detailed`
--

INSERT INTO `students_detailed` (`name`, `id`, `course`, `grade`) VALUES
('ewaop', 123, 'ddad', 1233),
('ewaop', 123, 'ddad', 1233),
('ewaop', 123, 'ddad', 1233),
('ewaop', 123, 'ddad', 1233),
('andre', 123, 'cmpg', 50),
('Andre', 500002, 'CMPG', 5),
('Lucas', 84526, 'Art', 50),
('Tiago', 1005, 'Geography', 120),
('Dan', 46666999, 'Art', 15),
('Mike', 475965, 'Oceanography', 12),
('Matheus', 40005, 'Portuguese', 87),
('Andre', 515151, 'I.T', 20),
('Paula', 200684, 'Math', 64);
('Vitor', 10009, 'English', 41);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
