-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2018 at 06:26 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `student_no` varchar(7) NOT NULL,
  `total` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_no`, `total`) VALUES
('1610001', 20),
('1610002', -30);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sub_question` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option_1` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option_2` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option_3` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option_4` varchar(200) CHARACTER SET latin1 NOT NULL,
  `correct_answer` varchar(200) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `category` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `sub_question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `category`) VALUES
(1, 'What does PHP stand for? ', 'this is an <br /> example of sub_question', ' Private Home Page', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'none of them', '2', '1'),
(2, 'How do you write "Hello World" in PHP?', NULL, '"Hello World";', 'echo "Hello World";', 'Document.Write("Hello World");', 'printf("%s",hello world);', '2', '1'),
(3, 'All variables in PHP start with which symbol?', NULL, '!', '&', '$', 'none of them', '3', '1'),
(7, 'The PHP syntax is most similar to:', NULL, 'VBScript', 'JavaScript', 'Perl and C', 'c++', '3', '1'),
(8, ' How do you get information from a form that is submitted using the "get" method?', NULL, 'Request.Form;', '$_GET[];', 'Request.QueryString;', 'none of them', '2', '1'),
(9, 'What does HTML stand for?', NULL, 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Text Markup Language', 'Hyperlinks Tool Markup Language', '3', '2'),
(10, 'What does CSS stand for?', NULL, 'Cascading Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Creative Style Sheets', '1', '2'),
(11, 'Where in an HTML document is the correct place to refer to an external style sheet?', NULL, 'In the <head> section ', 'At the top of the document ', 'At the end of the document ', 'In the <body> section ', '1', '2'),
(12, 'Which HTML attribute is used to define inline styles? ', NULL, 'class  ', 'styles', 'style', 'font', '3', '2'),
(13, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', NULL, 'title', 'src', 'longdesc', 'alt', '4', '2'),
(14, 'What is the size of boolean variable?', NULL, '8 bit', '16 bit', '32 bit', 'not precisely defined', '2', '3'),
(15, 'Which of the following is a thread safe?', NULL, 'StringBuilder', 'StringBuffer', 'Both of the above', 'none of the above', '2', '3'),
(16, 'Which package needs to be imported so that you can accept user input?', NULL, 'java.awt', 'java.io', 'java.awt.event', 'java.util', '2', '3'),
(17, 'Which of the following can be used to access the first element of an array named arrOne?', NULL, 'arrOne[2]', 'arrOne[1]', 'arrOne[3]', 'arrOne[0]', '4', '3'),
(18, 'What will be the output of this code?  String aString = "Crayons are great!"; System.out.print(aString.charAt(8))', NULL, 'a', 'n', 's', 'r', '1', '3'),
(19, 'Which of the following is not a correct variable type?', NULL, 'float', 'real', 'int', 'double', '2', '4'),
(20, 'Which of the following is the correct operator to compare two variables?', NULL, ':=', '=', 'equal', '==', '4', '4'),
(21, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', NULL, '49', '7C7', '5040', 'None of the above', '3', '5'),
(22, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', NULL, 'q', 'r', 's', 'u', '1', '5'),
(23, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', NULL, '15', '20', '22', '24', '4', '5'),
(24, 'When a die is rolled, the probability of landing with 2 is?', NULL, '3/6', '1/6', '2/6', '5/6', '2', '5'),
(25, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', NULL, '2,700', '8,100', '10,800', '13,500', '3', '5'),
(26, 'What is the only function all C programs must contain?', NULL, 'start() ', 'system()', 'main()', 'program()', '3', '4'),
(27, ' Which of the following is not a correct variable type?', NULL, 'float', 'real', 'int', 'double', '2', '4'),
(28, 'This can be algorithm question 1.<br>\nI hope everything happens smoothly.', 'this is the subpart', '', '', '', '', '', '6'),
(30, 'This algorithmic question 2. I can and I will.', 'It can be subpart.', '', '', '', '', '', '6'),
(41, 'how fingers are there in my hand', 'this line will be broken  <br />  great u see', '5', '4', '8', '4', '1', '1'),
(40, 'this is an example of question', 'print("hi") <br /> hello world', 'Rahul Gandhi', 'Narendra Modi', 'Sunder Pichai', 'Salman Khan', '0', '3');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `student_no` varchar(7) NOT NULL,
  `name` varchar(200) NOT NULL,
  `response_lock` varchar(2) NOT NULL DEFAULT '0',
  `time_start` time(2) DEFAULT NULL,
  `time_finish` time(2) DEFAULT NULL,
  `question_id_1` varchar(10) DEFAULT '0',
  `question_id_2` varchar(10) DEFAULT '0',
  `question_id_3` varchar(10) DEFAULT '0',
  `question_id_7` varchar(10) DEFAULT '0',
  `question_id_8` varchar(10) DEFAULT '0',
  `question_id_9` varchar(10) DEFAULT '0',
  `question_id_10` varchar(10) DEFAULT '0',
  `question_id_11` varchar(10) DEFAULT '0',
  `question_id_12` varchar(10) DEFAULT '0',
  `question_id_13` varchar(10) DEFAULT '0',
  `question_id_14` varchar(10) DEFAULT '0',
  `question_id_15` varchar(10) DEFAULT '0',
  `question_id_16` varchar(10) DEFAULT '0',
  `question_id_17` varchar(10) DEFAULT '0',
  `question_id_18` varchar(10) DEFAULT '0',
  `question_id_19` varchar(10) DEFAULT '0',
  `question_id_20` varchar(10) DEFAULT '0',
  `question_id_21` varchar(10) DEFAULT '0',
  `question_id_22` varchar(10) DEFAULT '0',
  `question_id_23` varchar(10) DEFAULT '0',
  `question_id_24` varchar(10) DEFAULT '0',
  `question_id_25` varchar(10) DEFAULT '0',
  `question_id_26` varchar(10) DEFAULT '0',
  `question_id_27` varchar(10) DEFAULT '0',
  `question_id_40` varchar(10) DEFAULT '0',
  `question_id_28` varchar(5000) DEFAULT '',
  `question_id_30` varchar(5000) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`student_no`, `name`, `response_lock`, `time_start`, `time_finish`, `question_id_1`, `question_id_2`, `question_id_3`, `question_id_7`, `question_id_8`, `question_id_9`, `question_id_10`, `question_id_11`, `question_id_12`, `question_id_13`, `question_id_14`, `question_id_15`, `question_id_16`, `question_id_17`, `question_id_18`, `question_id_19`, `question_id_20`, `question_id_21`, `question_id_22`, `question_id_23`, `question_id_24`, `question_id_25`, `question_id_26`, `question_id_27`, `question_id_40`, `question_id_28`, `question_id_30`) VALUES
('1610001', 'Sachin Yadav', '0', '18:03:46.00', '18:08:46.00', '1', '2', '1', '1', '2', '1', '1', '1', '2', '1', '2', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'I can write an algorithm here can you stop me.\nif no then do not disturb me\nI am very busy\n', 'Hi every one I am good as hell\ncan you set question for us \n'),
('1610002', 'sachin yadav', '0', '17:13:14.00', '17:18:14.00', '1', '4', '2', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'dhsj\nfhdskj\nfhskj\nfsdj\nsfd\nfsd\nsdf\nsdf\n', 'fsdk\nfsdal\nfsn\nfsd\nsdf\nsdf\nsdf'),
('1610004', 'new singh 2', '1', '01:10:04.00', '01:15:04.00', '1', '2', '1', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL DEFAULT 'male',
  `hostler` varchar(2) NOT NULL DEFAULT '0',
  `student_no` varchar(7) NOT NULL,
  `mb_no` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`name`, `branch`, `gender`, `hostler`, `student_no`, `mb_no`, `email`, `password`) VALUES
('Sachin Yadav', 'IT', 'male', '1', '1610001', '9205029145', 'sachin@gmail.com', '123456'),
('new singh 2', 'CSE', 'male', '0', '1610004', '1234567891', '123@gmail.com', '123456'),
('new singh 3', 'IT', 'male', '0', '1610005', '1234569870', 'dsfas@gmail.com', '123456'),
('meera kumari', 'IT', 'female', '1', '1610006', '1238524567', 'fs@gmail.com', '123456'),
('new singh 4', 'IT', 'male', '0', '1610007', '1239636540', 'ns@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`student_no`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`student_no`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`student_no`),
  ADD UNIQUE KEY `mb_no` (`mb_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
