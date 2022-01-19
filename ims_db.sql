-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 19, 2022 at 04:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin321');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(3, 'Learn Economics Demand Supply', '                        supply and demand, in economics, relationship between the quantity of a commodity that producers wish to sell at various prices and the quantity that consumers wish to buy. It is the main model of price determination used in economic theory.                        ', 'Adam Smith', '../image/courseimg/ds.jpg', '45 days', 1500, 3500),
(4, 'HTML', 'HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning and structure of web content. HTML uses \"markup\" to annotate text, images and other content for display in a Web browser.', 'Tim Berners-Lee', '../image/courseimg/html.jpg', '22 days', 1500, 2500),
(5, 'CSS', 'CSS is the language we use to style an HTML document.\r\nCSS describes how HTML elements should be displayed.', 'Chris Coyier ', '../image/courseimg/css.png', '20 days', 1800, 2500),
(6, 'Java', 'Java is a programming language. Java is used to develop mobile apps, web apps, desktop apps, games and much more.        ', 'James Gosling', '../image/courseimg/java.png', '45 days', 3000, 3500),
(7, 'React', 'React. js is an open-source JavaScript library that is used for building user interfaces specially for single-page applications. React allows developers to create large web applications that can change data, without reloading the page. The main purpose of React is to be fast, scalable, and simple.', 'Jordan Walke', '../image/courseimg/reactjs.png', '45 days', 3500, 4500),
(8, 'C Language', 'C is a high-level and general-purpose programming language that is ideal for developing firmware or portable applications.    ', '‎Dennis Ritchie', '../image/courseimg/c.png', '25days', 2700, 3500),
(9, 'C++', 'C++ is a popular programming language. C++ is used to create computer programs. It is an advanced form of C language.     ', 'Bjarne Stroustrup', '../image/courseimg/c++.png', '40 days', 2400, 2800);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(1, 'I feel very lucky being a member of Online School.', 1),
(2, 'Thank you so much for such kind of learning platform.', 3),
(3, 'This school system made me a topper in University of UK', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(1, 'Intoduction to Demand  Supply', 'This Video is the introduction for demand and supply                ', '../lessonvid/Introduction to Supply and Demand.mkv', 3, 'Learn Economics Demand Supply'),
(3, 'Introduction to Angular', 'Angular is a platform and framework for building single-page client applications using HTML and TypeScript.  ', '../lessonvid/Angular Introduction.mkv', 1, ' Angular in Simple Way'),
(4, 'Angular Components', 'Components are the most basic UI building block of an Angular app. An Angular app contains a tree of Angular components. Angular components are a subset of directives, always associated with a template. Unlike other directives, only one component can be instantiated for a given element in a template.        ', '../lessonvid/Angular  Components.mkv', 1, ' Angular in Simple Way'),
(6, 'Intro HTML', 'HTML is the standard markup language for creating Web pages.\r\n\r\n  ', '../lessonvid/Introduction to HTML.mkv', 4, 'HTML'),
(7, 'Line break, commenting in html', '  This lesson is helpful to break the line, providing space and commenting during web page creation', '../lessonvid/Line breaks, spacing, and comments.mkv', 4, 'HTML'),
(8, 'Laws of Demand and Supply', 'This lesson provides the knowledge about the laws of demand and supply        ', '../lessonvid/Laws of demand and supply.mkv', 3, 'Learn Economics Demand Supply'),
(11, 'Intro to CSS', 'CSS is the language we use to style a Web page.       ', '../lessonvid/CSS Introduction.mkv', 5, 'CSS'),
(12, 'Font, Color in css', 'This lesson is about the properties of font and color in css        ', '../lessonvid/Changing font type, color, and size.mkv', 5, 'CSS'),
(13, 'Intro to java', 'This lesson is simply a introduction about Java programming ', '../lessonvid/Introduction to Java Programming.mkv', 6, 'Java'),
(14, 'Intro to React JS', ' How react js works      ', '../lessonvid/What Is ReactJS.mkv', 7, 'React'),
(15, 'Variable Naming Conventions', 'This lesson is about variable naming structures   ', '../lessonvid/Variable Naming Conventions - YouTube.mkv', 8, 'C Language'),
(16, 'C++ intro', 'Basic Knowledge about C++         ', '../lessonvid/C++ programming.mkv', 9, 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'B Narayan ', 'narayan1@gmail.com', 'narayan321', 'Web dev', '../image/stuimg/naran.jpg'),
(3, 'B Sundar', 'sundar1@gmail.com', 'sundar321', 'Software Developer', '../image/stuimg/sundar.jpg'),
(4, 'B Sandhya ', 'sandhya1@gmail.com', 'sandhya321', 'QA Engineer', '../image/stuimg/sandhya.jpg'),
(7, 'Narayan Dhakal', 'dnarayan@gmail.com', 'dnarayan321', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
