-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 09:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authenticate`
--

CREATE TABLE `authenticate` (
  `person_id` int(11) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authenticate`
--


-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `book_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_author`
--



-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `book_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(250) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_sem` int(11) DEFAULT NULL,
  `reference_number` int(11) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `book_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart_books`
--

CREATE TABLE `cart_books` (
  `person_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_books`
--


-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `person_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `for_semester` int(11) DEFAULT NULL,
  `due_date` int(11) DEFAULT NULL,
  `date_return` date DEFAULT NULL,
  `date_withdrawn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_books`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `person_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `entry_number` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `total_fine` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `authenticate`
--
ALTER TABLE `authenticate`
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart_books`
--
ALTER TABLE `cart_books`
  ADD KEY `person_id` (`person_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD KEY `person_id` (`person_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `category_info`
--
ALTER TABLE `category_info`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authenticate`
--
ALTER TABLE `authenticate`
  ADD CONSTRAINT `authenticate_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `user_info` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE;

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category_info` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_books`
--
ALTER TABLE `cart_books`
  ADD CONSTRAINT `cart_books_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `user_info` (`person_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_books`
--
ALTER TABLE `user_books`
  ADD CONSTRAINT `user_books_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `user_info` (`person_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
