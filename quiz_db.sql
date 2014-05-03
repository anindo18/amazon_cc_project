-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2014 at 12:25 PM
-- Server version: 5.1.73-community
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_db`
--
CREATE DATABASE `quiz_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `occupation` varchar(200) NOT NULL,
  `masterusn` varchar(200) DEFAULT NULL,
  `masterpass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `fname`, `lname`, `email`, `contact`, `occupation`, `masterusn`, `masterpass`) VALUES
('abc', 'hello', 'abc', 'def', 'abc@gmail.com', 9831123211, 'officer', 'anindo', 'abcd'),
('anindo', 'abcd', 'anindo', 'choudhury', 'anindochoudhury18@gmail.com', 8050715506, 'student', 'abc', 'abc'),
('lalu', 'lalu', 'lalu', 'yadav', 'lalu@gmail.com', 8048922122, 'politician', 'anindo', 'abcd'),
('vijay18', 'vijay', 'vijay', 'katti', 'vijaykatti@gmail.com', 9998881232, 'student', 'abc', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE IF NOT EXISTS `comment_table` (
  `username` varchar(200) NOT NULL,
  `comment` varchar(8000) NOT NULL,
  `entry_date` date DEFAULT NULL,
  `entry_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`username`, `comment`, `entry_date`, `entry_time`) VALUES
('vijay07', '', '2013-05-12', '05:53:06'),
('vijay07', '', '2013-05-12', '05:53:28'),
('vijay07', '', '2013-05-12', '05:57:05'),
('vijay07', '', '2013-05-12', '06:11:56'),
('vijay07', '', '2013-05-12', '06:14:32'),
('vijay07', '', '2013-05-12', '06:17:06'),
('vijay07', '', '2013-05-12', '06:17:32'),
('vijay07', '', '2013-05-12', '13:57:06'),
('vijay07', '', '2013-05-12', '13:58:29'),
('akash', '', '2013-05-19', '14:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `quiz1`
--

CREATE TABLE IF NOT EXISTS `quiz1` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `quiz1`
--

INSERT INTO `quiz1` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Which of the following statements does not represent ohm''s law?', 'current / potential difference = constant', 'potential difference / current = constant', 'potential difference = current x resistance', 'current = resistance x potential difference', 'current = resistance x potential difference'),
(2, ' The unit of current is ', 'ampere', 'watt', 'volt', 'coulomb', 'ampere'),
(3, 'The potential difference required to pass a current 0.2 A in a wire of resistance 20W is', '100 V', '4 V', '.01 V', '40 V', '4 V'),
(4, 'Question: The resistance of an electric bulb drawing 1.2 A current at 6.0 V is ', '0 .5 W', '5 W', '0.2 W', '2 W', '5 W'),
(5, 'The unit of resistivity is', 'ohm', 'ohm / m', 'ohm-m', 'mho', 'ohm-m'),
(6, 'Two resistances of 100 W and zero ohm are connected in parallel. The overall resistance will be', '100 W', '50 W', '25 W', 'zero ohm', '100 W'),
(7, 'Three resistors 2 W , 3 W and 4 W are connected so that the equivalent resistance is 9 W . The resistors are connected ', 'all in series', 'all in parallel', '2 W and 3 W in parallel and the combination in series with 4 W', '2 W and 3 W in series and the combination in parallel to 4 W', 'all in series'),
(8, 'When a current ''I'' flows through a resistance ''R'' for time ''t'' the electrical energy spent is given by', 'I R t', 'I2 R t', 'I R2 t', 'I 2 R / t', 'I2 R t'),
(9, 'how many bones are there in human body', '206', '210', '205', '203', '206');

-- --------------------------------------------------------

--
-- Table structure for table `quiz5`
--

CREATE TABLE IF NOT EXISTS `quiz5` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_biology`
--

CREATE TABLE IF NOT EXISTS `quiz_biology` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz_biology`
--

INSERT INTO `quiz_biology` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'how many bones are there in human body?', '206', '203', '205', '210', '206');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_chemisrty`
--

CREATE TABLE IF NOT EXISTS `quiz_chemisrty` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz_chemisrty`
--

INSERT INTO `quiz_chemisrty` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Oxygen is represented as:', 'O', 'O2', 'OO', 'Ox', 'O2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_math`
--

CREATE TABLE IF NOT EXISTS `quiz_math` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_physics`
--

CREATE TABLE IF NOT EXISTS `quiz_physics` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `question` varchar(8192) NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `quiz_physics`
--

INSERT INTO `quiz_physics` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'A child pulls a toy car weighing 0.20 kg across a smooth floor by means of a string attached to it. If the string makes an angle of 60Â° to the floor and the child pulls with a force of 2.0 N, then the amount of work he does in pulling the car a distance of 5.0 m is...', '5.0 J', '10.0 J', '12.7 J', '17.3 j', '10.0 J'),
(2, 'The note middle C played on a piano always differs from middle C played on a violin because of a difference in... ', 'frequency', 'wavelength', 'fundamentals', 'harmonic', 'fundamentals'),
(3, 'When a fuse is rated 8 A, it means', 'it will not work if current is less than 8 A', 'it has a resistance of 8 W', 'it will work only if current is 8 A', 'it will melt if current exceeds 8 A', 'it will melt if current exceeds 8 A'),
(4, 'The device used for measuring potential difference is known as', 'potentiometer', 'ammeter', 'galvanometer', 'voltmeter', 'voltmeter'),
(5, 'Oxygen is represented as:', 'O', 'O2', 'OO', 'Ox', 'O2'),
(6, 'Oxygen is represented as:', 'O', 'O2', 'OO', 'Ox', 'O2'),
(7, 'this is what?', 'physics', 'chemitry', 'biology', 'maths', 'physics'),
(8, 'what is the unit of power?', 'watt', 'joule', 'second', 'meter', 'watt'),
(9, '1.56 Â´ 105 J of heat is conducted through a 2 m2 wall of 12 cm thick in one hour. Temperature difference between the two sides of the wall is 20Â°C. The thermal conductivity of the material of the wall is\r\n(in W mâ€“1 Kâ€“1)', '0.11', '0.13', '0.15', '1.2', '0.13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `occupation` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `email`, `contact`, `occupation`) VALUES
('ABCD', '123456', 'abcd', 'efgh', 'abcd.@gmail.com', 8899889988, 'student'),
('akash', 'abcd', 'akash', 'anand', 'akashanand0607@gmail.com', 2344452311, 'student'),
('anil', 'anil', 'anil', 'kumar', 'anilkumar@gmail.com', 8541122477, 'engineer'),
('anindo', 'abcd', 'anindo', 'choudhury', 'anindo.choudhury@yahoo.in', 8050715506, 'student'),
('aviral_sep', 'avilamsal', 'aviral', 'lamsal', 'aviral92hot@yahoo.co.in', 8493423324, 'student'),
('david', 'david', 'david', 'peter', 'david@gmail.com', 9032423113, 'engineer'),
('manik99', 'abcd', 'manik', 'walia', 'manikwalia@gmail.com', 8048922122, 'student'),
('naveen', 'nkoti', 'naveen', 'koti', 'naveen@gmail.com', 3843943213, 'student'),
('poonam', 'poon', 'poonam', 'b', 'poonam@gmail.com', 8048922122, 'student'),
('saket', 'saket', 'saket', 'anand', 'saket@gmail.com', 8050715506, 'student'),
('vijay07', 'vijju', 'vijay', 'katti', 'vijaykatti@gmail.com', 9998881232, 'student'),
('xyz', 'bvbcet', 'x', 'y', 'x@gmail.com', 9998881232, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_bio_score`
--

CREATE TABLE IF NOT EXISTS `user_bio_score` (
  `username` varchar(200) DEFAULT NULL,
  `quiz_date` date DEFAULT NULL,
  `bio_score` int(11) DEFAULT NULL,
  `ques_attempt` int(11) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_bio_score`
--

INSERT INTO `user_bio_score` (`username`, `quiz_date`, `bio_score`, `ques_attempt`) VALUES
('akash', '2013-05-19', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_chem_score`
--

CREATE TABLE IF NOT EXISTS `user_chem_score` (
  `username` varchar(200) DEFAULT NULL,
  `quiz_date` date DEFAULT NULL,
  `chem_score` int(11) DEFAULT NULL,
  `ques_attempt` int(11) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_phy_score`
--

CREATE TABLE IF NOT EXISTS `user_phy_score` (
  `username` varchar(200) DEFAULT NULL,
  `quiz_date` date DEFAULT NULL,
  `phy_score` int(11) DEFAULT NULL,
  `ques_attempt` int(11) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_phy_score`
--

INSERT INTO `user_phy_score` (`username`, `quiz_date`, `phy_score`, `ques_attempt`) VALUES
('akash', '2013-05-19', 5, 8),
('akash', '2013-05-19', 5, 8),
('akash', '2013-05-20', 5, 8),
('akash', '2013-05-20', 2, 3),
('akash', '2013-05-20', 1, 3),
('akash', '2013-05-20', 3, 5),
('anindo', '2013-05-20', 1, 3),
('anindo', '2013-05-20', 2, 3),
('akash', '2013-05-20', 1, 4),
('akash', '2013-05-21', 1, 2),
('akash', '2013-05-31', 1, 2),
('akash', '2013-06-10', 2, 3),
('akash', '2013-10-07', 2, 6);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_bio_score`
--
ALTER TABLE `user_bio_score`
  ADD CONSTRAINT `user_bio_score_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `user_chem_score`
--
ALTER TABLE `user_chem_score`
  ADD CONSTRAINT `user_chem_score_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `user_phy_score`
--
ALTER TABLE `user_phy_score`
  ADD CONSTRAINT `user_phy_score_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
