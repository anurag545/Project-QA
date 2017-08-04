-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 07:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE IF NOT EXISTS `addcat` (
  `CatID` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) NOT NULL,
  `CategoryPic` varchar(100) NOT NULL,
  PRIMARY KEY (`CatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`CatID`, `CategoryName`, `CategoryPic`) VALUES
(100, 'Accesories', '1468380691slide1.jpg'),
(101, 'Books', '1468626419businesswoman.jpg'),
(102, 'Programming', '1468625676girlbusiness.jpg'),
(103, 'Others', '1468380795lap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addquestion`
--

CREATE TABLE IF NOT EXISTS `addquestion` (
  `QuestionID` int(10) NOT NULL AUTO_INCREMENT,
  `CatID` int(10) NOT NULL,
  `SubCatID` int(10) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `QuestionDate` datetime NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `addquestion`
--

INSERT INTO `addquestion` (`QuestionID`, `CatID`, `SubCatID`, `Question`, `QuestionDate`) VALUES
(1, 100, 1, 'Which is the best phone for gaming?', '0000-00-00 00:00:00'),
(2, 100, 2, ' DELL or hp Which is best  ?', '0000-00-00 00:00:00'),
(3, 102, 5, 'Which programming language is best to learn for future ?', '0000-00-00 00:00:00'),
(4, 102, 6, 'Why PHP is better than JAVA and .NET ?', '0000-00-00 00:00:00'),
(5, 101, 4, 'Which  is best book for JEE Advance ?', '0000-00-00 00:00:00'),
(7, 102, 5, 'Is Data Structure is important for CSE students in interviews ?', '0000-00-00 00:00:00'),
(8, 102, 5, 'How many years of experience and what competencies must you have/know to become a software engineer III at Google?', '0000-00-00 00:00:00'),
(9, 103, 9, 'Is there any substantial scientific evidence for the existence of ghosts, or any other extra-physical phenomena involving consciousness?', '0000-00-00 00:00:00'),
(10, 103, 9, 'My grandparents have no concept of germs. How are they living until 60-70+ years old?', '0000-00-00 00:00:00'),
(11, 103, 9, 'If triangle is 3 and square is 4, what is the circle?', '0000-00-00 00:00:00'),
(12, 103, 9, 'If a ray of light looped in to perfectly reflecting mirrors from two side facing each other, will light keep travelling in this loop forever?', '0000-00-00 00:00:00'),
(13, 103, 9, 'What are some interesting facts about the Harry Potter series?', '0000-00-00 00:00:00'),
(14, 103, 9, 'What are good ways to learn to become the best digital marketer?', '2016-07-16 18:26:55'),
(15, 102, 5, 'Which is Easiest Branch in Engineering  ??', '2016-07-18 02:39:27'),
(17, 102, 5, 'Which is better NIT Hamirpur or NIT Kurukshetra ?', '2016-07-18 08:21:18'),
(18, 102, 6, 'Which is Better Php aur java for web ?', '2016-07-18 08:27:43'),
(19, 101, 4, 'which is best institute in India ?', '2016-07-18 17:26:07'),
(23, 100, 1, 'which is best phone??', '2016-07-18 21:02:11'),
(24, 100, 1, 'whic hcbschhbsc', '2016-07-18 21:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `addsubcat`
--

CREATE TABLE IF NOT EXISTS `addsubcat` (
  `SubCatID` int(10) NOT NULL AUTO_INCREMENT,
  `CatID` int(10) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `SubCategoryPic` varchar(100) NOT NULL,
  PRIMARY KEY (`SubCatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `addsubcat`
--

INSERT INTO `addsubcat` (`SubCatID`, `CatID`, `SubCategoryName`, `SubCategoryPic`) VALUES
(1, 100, 'Mobiles', '1468381007businessman-working.jpg'),
(2, 100, 'Laptops', 'images.png'),
(3, 101, 'Novel and Fiction', '1468636876businesswoman.jpg'),
(4, 101, 'Competotion Books', 'images.png'),
(5, 102, 'Object Oriented', 'images.png'),
(6, 102, 'Web development', 'images.png'),
(9, 103, 'Other', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `AnswerID` int(10) NOT NULL AUTO_INCREMENT,
  `QuestionID` int(10) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ProfilePic` varchar(50) NOT NULL,
  `AnswerDate` datetime NOT NULL,
  PRIMARY KEY (`AnswerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`AnswerID`, `QuestionID`, `Answer`, `Name`, `Email`, `ProfilePic`, `AnswerDate`) VALUES
(1, 14, 'See Online Tuorials......\r\nLearn From some experts ', 'aaaaa', 'ranaanurag@gmail.com', '', '2016-07-18 02:35:40'),
(2, 16, 'I think Open Source is Better than Windows.Todaty every new software and projects are made on open source ...You can change open source according to yr requirements', 'Anurag', 'ran@gmail.com', '', '2016-07-18 02:45:40'),
(3, 16, 'Acc to me I think Windows is good in working..From starting we all work in window so i think windows is good than open source', 'Anurag', 'ran@gmail.com', '', '2016-07-18 02:46:40'),
(4, 16, 'Acc to me I think Windows is good in working..From starting we all work in window so i think windows is good than open source', 'Anurag', 'ran@gmail.com', '', '2016-07-18 03:20:40'),
(5, 16, 'I think Open Source is Better than Windows.Todaty every new software and projects are made on open source ...You can change open source according to yr requirements', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:29:07'),
(6, 16, 'I think Open Source is Better than Windows.Todaty every new software and projects are made on open source ...You can change open source according to yr requirements', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:37:09'),
(7, 15, 'I think CSE only bcz im first year sudent inCSE NIT Hamirpur ..in my college only cse students remain always free.', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:48:18'),
(8, 15, 'I think CSE only bcz im first year sudent inCSE NIT Hamirpur ..in my college only cse students remain always free.', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:49:41'),
(9, 15, ' i THINK cse ONLY..', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:50:01'),
(10, 15, 'I think CSE only bcz im first year sudent inCSE NIT Hamirpur ..in my college only cse students remain always free.', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 03:51:16'),
(14, 15, 'I think CSE', 'Anurag Thakur', 'ranaanurag67@gmail.c', '1468359233665373.jpg', '2016-07-18 04:31:55'),
(15, 15, 'I think CSE', '', '', '', '2016-07-18 04:33:31'),
(16, 15, 'cse', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 04:36:40'),
(17, 18, 'PHP is BESt Due to open source', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 08:28:53'),
(18, 18, 'PHP is better ', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 17:24:30'),
(19, 19, 'IIT  always', 'Anurag', 'ran@gmail.com', 'images.png', '2016-07-18 17:28:56'),
(21, 11, 'Circle is infinite', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 19:27:21'),
(22, 11, 'CIRCLE may bhi zero', 'aaaaa', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 19:29:31'),
(23, 19, 'IIM is best institute', 'Anurag', 'ran@gmail.com', 'images.png', '2016-07-18 19:32:59'),
(24, 19, 'yeah i agree IIM is best for Management', 'Anurag', 'ranaanurag@gmail.com', 'images.png', '2016-07-18 20:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `MsgDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Best` varchar(200) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `MsgDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(25) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `DateBirth` date NOT NULL,
  `Profile` varchar(100) NOT NULL,
  `Usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Phone`, `Address`, `City`, `State`, `Email`, `Password`, `Gender`, `Country`, `DateBirth`, `Profile`, `Usertype`) VALUES
('aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'arvind@gmail.com', '123', 'Male', 'USA', '0000-00-00', 'images.png', 'normal'),
('Kartik', '7678888', 'Jammu', 'Jammu', '', 'KAE@gmail.com', '123', 'Male', 'India', '0000-00-00', 'images.png', 'normal'),
('aaaaaaaaaaaa', '8777777777777', 'Jalandhar', 'Jalandhar', '', 'raaaa@gmail.com', '123', 'Male', 'India', '0000-00-00', 'images.png', 'normal'),
('Anurag', '7867888', '', 'Daulatpur', '', 'ran@gmail.com', '123', 'Male', 'India', '0000-00-00', 'images.png', 'normal'),
('Anurag Thakur', '8894138980', 'NIT Hamirpur', 'Hamirpur', 'HP', 'ranaanurag67@gmail.com', 'anuraggaggu', 'Male', 'India', '0000-00-00', '1468359233665373.jpg', 'admin'),
('Anurag', '67757887', '', '', '', 'ranaanurag@gmail.com', 'anurag', 'Male', 'India', '0000-00-00', 'images.png', 'normal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
