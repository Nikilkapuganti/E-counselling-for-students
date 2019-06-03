-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 07:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `email`, `message`) VALUES
('', '', ''),
('', '', ''),
('Neethu', 'neethus7722@gmail.com', 'Good Project'),
('Sravanthi', 'sravanthi@gmail.com', 'Excellent'),
('Diamond', 'diamond@gmail.com', 'Project is awesome'),
('', '', ''),
('', '', ''),
('', '', ''),
('315177111018', '', ''),
('315177111018', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `counsellors_table`
--

CREATE TABLE `counsellors_table` (
  `faculty_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellors_table`
--

INSERT INTO `counsellors_table` (`faculty_id`) VALUES
(1111),
(1212),
(1234),
(1113),
(1114),
(1112),
(1116),
(1309);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE `faculty_profile` (
  `userid` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `qual` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_profile`
--

INSERT INTO `faculty_profile` (`userid`, `fname`, `lname`, `qual`, `dob`, `email`, `phno`, `address`, `gender`, `image`) VALUES
(1116, 'Yallamanda ', 'Challa', 'M.Tech', '1989-05-04', 'yallamandachalla@gmail.com', 9876543232, 'SIR CRREDDY COLLEGE OF ENGINEERING', 'male', 0x75706c6f61642f342e6a706567),
(1309, 'Vijaya Lakshmi', 'kathari', 'M.Tech', '1987-07-03', 'vijayakathari@gmail.com', 9492228790, 'SIR CRREDDY COLLEGE OF ENGINEERING', 'female', 0x75706c6f61642f494d475f32303138313030395f3039313332382e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_reg`
--

CREATE TABLE `faculty_reg` (
  `username` varchar(50) NOT NULL,
  `userid` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_reg`
--

INSERT INTO `faculty_reg` (`username`, `userid`, `password`, `cpassword`) VALUES
('Ramaiah Chowdary', 1112, 'ramaiah', 'ramaiah'),
('Krishnaveni', 1113, 'krishna', 'krishna'),
('Satya Nagamani', 1114, 'satya', '1114'),
('Kanna babu', 1115, 'kanna', 'kanna'),
('Yallamanda Challa', 1116, 'challa', 'challa'),
('Gopinath', 1117, 'gopinath', 'gopinath'),
('Lakshmaji', 1118, 'lakshmaji', 'lakshmaji'),
('Vijaya Lakshmi', 1309, 'vijaya', 'vijaya'),
('nikhil', 3121, 'nikhil', 'nikhil');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_report`
--

CREATE TABLE `faculty_report` (
  `sname` varchar(50) NOT NULL,
  `sid` bigint(20) NOT NULL,
  `csem` int(10) NOT NULL,
  `mtc` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `poccu` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `phno` bigint(15) NOT NULL,
  `atten` double NOT NULL,
  `regularity` varchar(20) NOT NULL,
  `ntls` varchar(50) NOT NULL,
  `iep` varchar(50) NOT NULL,
  `any_sugg` varchar(50) NOT NULL,
  `wfm` varchar(20) NOT NULL,
  `wfp` varchar(20) NOT NULL,
  `disci` varchar(20) NOT NULL,
  `xa` varchar(100) NOT NULL,
  `ach` varchar(100) NOT NULL,
  `sa1` float NOT NULL,
  `sa2` float NOT NULL,
  `sa3` float NOT NULL,
  `sa4` float NOT NULL,
  `sa5` float NOT NULL,
  `sa6` float NOT NULL,
  `sa7` float NOT NULL,
  `sa8` float NOT NULL,
  `intern1` float NOT NULL,
  `intern2` float NOT NULL,
  `intern3` float NOT NULL,
  `intern4` float NOT NULL,
  `intern5` float NOT NULL,
  `intern6` float NOT NULL,
  `intern21` float NOT NULL,
  `intern22` float NOT NULL,
  `intern23` float NOT NULL,
  `intern24` float NOT NULL,
  `intern25` float NOT NULL,
  `intern26` float NOT NULL,
  `csa1` float NOT NULL,
  `csa2` float NOT NULL,
  `csa3` float NOT NULL,
  `csa4` float NOT NULL,
  `csa5` float NOT NULL,
  `csa6` float NOT NULL,
  `ssem1` float NOT NULL,
  `ssem2` float NOT NULL,
  `ssem3` float NOT NULL,
  `ssem4` float NOT NULL,
  `ssem5` float NOT NULL,
  `ssem6` float NOT NULL,
  `ssem7` float NOT NULL,
  `ssem8` float NOT NULL,
  `bsem1` int(15) NOT NULL,
  `bsem2` int(15) NOT NULL,
  `bsem3` int(15) NOT NULL,
  `bsem4` int(15) NOT NULL,
  `bsem5` int(15) NOT NULL,
  `bsem6` int(15) NOT NULL,
  `bsem7` int(15) NOT NULL,
  `bsem8` int(15) NOT NULL,
  `csem1` float NOT NULL,
  `csem2` float NOT NULL,
  `csem3` float NOT NULL,
  `csem4` float NOT NULL,
  `csem5` float NOT NULL,
  `csem6` float NOT NULL,
  `csem7` float NOT NULL,
  `csem8` float NOT NULL,
  `date` date NOT NULL,
  `faculty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_report`
--

INSERT INTO `faculty_report` (`sname`, `sid`, `csem`, `mtc`, `pname`, `poccu`, `place`, `phno`, `atten`, `regularity`, `ntls`, `iep`, `any_sugg`, `wfm`, `wfp`, `disci`, `xa`, `ach`, `sa1`, `sa2`, `sa3`, `sa4`, `sa5`, `sa6`, `sa7`, `sa8`, `intern1`, `intern2`, `intern3`, `intern4`, `intern5`, `intern6`, `intern21`, `intern22`, `intern23`, `intern24`, `intern25`, `intern26`, `csa1`, `csa2`, `csa3`, `csa4`, `csa5`, `csa6`, `ssem1`, `ssem2`, `ssem3`, `ssem4`, `ssem5`, `ssem6`, `ssem7`, `ssem8`, `bsem1`, `bsem2`, `bsem3`, `bsem4`, `bsem5`, `bsem6`, `bsem7`, `bsem8`, `csem1`, `csem2`, `csem3`, `csem4`, `csem5`, `csem6`, `csem7`, `csem8`, `date`, `faculty`) VALUES
('Sai Harsha', 315177111008, 6, 'Dayscholar', 'Srinivasa rao', 'Business', 'Eluru', 8987654321, 30, '', 'no', 'No internals', 'Need to be Regular', 'fair', 'good', 'fair', 'Participated in Techfest', 'no', 70, 60, 75, 0, 60, 75, 75, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 5, 6, 0, 5, 5, 0, 0, 1, 0, 0, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, '2019-03-14', 1309),
('Neethu Sravanthi', 315177111018, 5, 'Hosteler', 'Venkata krishna Rao', '', 'ELURU', 9247149288, 90, '', 'Python and R Programming Language', 'Good', 'All the best', 'good', 'good', 'good', 'Participated in Tech Fest, Organized Film Fest event', 'Secured Job', 70, 90, 90, 0, 75, 80, 80, 50, 10, 20, 15, 18, 21, 22, 25, 29, 23, 18, 20, 19, 20, 25, 23, 18, 20, 21, 8, 7.8, 8.5, 8.5, 8.2, 8.3, 8.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 7.9, 8.1, 8.2, 8.3, 8.41, 8.48, 0, '2019-03-14', 1309);

-- --------------------------------------------------------

--
-- Table structure for table `overall_report`
--

CREATE TABLE `overall_report` (
  `faculty_id` int(5) NOT NULL,
  `mps` varchar(50) NOT NULL,
  `rs` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overall_report`
--

INSERT INTO `overall_report` (`faculty_id`, `mps`, `rs`, `date`) VALUES
(1309, 'Students are facing problems with the timings', 'Major request of students is to repair the fans', '2019-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(50) NOT NULL,
  `userid` bigint(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `userid`, `password`) VALUES
('Admin', 12345, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student_assign`
--

CREATE TABLE `student_assign` (
  `faculty_id` int(5) NOT NULL,
  `student_id` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assign`
--

INSERT INTO `student_assign` (`faculty_id`, `student_id`) VALUES
(1309, 315177111008),
(1309, 315177111009),
(1309, 315177111010),
(1309, 315177111011),
(1309, 315177111012),
(1309, 315177111013),
(1309, 315177111014),
(1309, 315177111015),
(1309, 315177111016),
(1309, 315177111017),
(1309, 315177111018),
(1116, 315177111040),
(1116, 315177111041),
(1116, 315177111042),
(1116, 315177111043),
(1116, 315177111044),
(1116, 315177111045),
(1112, 315177111050),
(1112, 315177111051),
(1112, 315177111052),
(1112, 315177111053),
(1112, 315177111054),
(1112, 315177111055),
(1112, 315177111056);

-- --------------------------------------------------------

--
-- Table structure for table `student_counselling`
--

CREATE TABLE `student_counselling` (
  `name` varchar(50) NOT NULL,
  `student_id` bigint(30) NOT NULL,
  `csem` varchar(20) NOT NULL,
  `attendence` int(30) NOT NULL,
  `problems` longtext NOT NULL,
  `intern1` int(20) NOT NULL,
  `intern2` int(20) NOT NULL,
  `intern3` int(20) NOT NULL,
  `intern4` int(20) NOT NULL,
  `intern5` int(20) NOT NULL,
  `intern6` int(20) NOT NULL,
  `intern21` int(20) NOT NULL,
  `intern22` int(20) NOT NULL,
  `intern23` int(20) NOT NULL,
  `intern24` int(20) NOT NULL,
  `intern25` int(20) NOT NULL,
  `intern26` int(20) NOT NULL,
  `ssem1` float NOT NULL,
  `ssem2` float NOT NULL,
  `ssem3` float NOT NULL,
  `ssem4` float NOT NULL,
  `ssem5` float NOT NULL,
  `ssem6` float NOT NULL,
  `ssem7` float NOT NULL,
  `ssem8` float NOT NULL,
  `bsem1` int(10) NOT NULL,
  `bsem2` int(10) NOT NULL,
  `bsem3` int(10) NOT NULL,
  `bsem4` int(10) NOT NULL,
  `bsem5` int(10) NOT NULL,
  `bsem6` int(10) NOT NULL,
  `bsem7` int(10) NOT NULL,
  `bsem8` int(10) NOT NULL,
  `csem1` float NOT NULL,
  `csem2` float NOT NULL,
  `csem3` float NOT NULL,
  `csem4` float NOT NULL,
  `csem5` float NOT NULL,
  `csem6` float NOT NULL,
  `csem7` float NOT NULL,
  `csem8` float NOT NULL,
  `csa1` float NOT NULL,
  `csa2` float NOT NULL,
  `csa3` float NOT NULL,
  `csa4` float NOT NULL,
  `csa5` float NOT NULL,
  `csa6` float NOT NULL,
  `date` date NOT NULL,
  `activities` varchar(100) NOT NULL,
  `mtc` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `occu` varchar(40) NOT NULL,
  `ntls` varchar(100) NOT NULL,
  `ach` varchar(100) NOT NULL,
  `as1` float NOT NULL,
  `as2` float NOT NULL,
  `as3` float NOT NULL,
  `as4` float NOT NULL,
  `as5` float NOT NULL,
  `as6` float NOT NULL,
  `as7` float NOT NULL,
  `as8` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_counselling`
--

INSERT INTO `student_counselling` (`name`, `student_id`, `csem`, `attendence`, `problems`, `intern1`, `intern2`, `intern3`, `intern4`, `intern5`, `intern6`, `intern21`, `intern22`, `intern23`, `intern24`, `intern25`, `intern26`, `ssem1`, `ssem2`, `ssem3`, `ssem4`, `ssem5`, `ssem6`, `ssem7`, `ssem8`, `bsem1`, `bsem2`, `bsem3`, `bsem4`, `bsem5`, `bsem6`, `bsem7`, `bsem8`, `csem1`, `csem2`, `csem3`, `csem4`, `csem5`, `csem6`, `csem7`, `csem8`, `csa1`, `csa2`, `csa3`, `csa4`, `csa5`, `csa6`, `date`, `activities`, `mtc`, `place`, `pname`, `occu`, `ntls`, `ach`, `as1`, `as2`, `as3`, `as4`, `as5`, `as6`, `as7`, `as8`) VALUES
('Dharani Anumolu', 315177111003, '5th Sem', 95, 'no problems', 20, 20, 20, 20, 20, 20, 30, 30, 30, 30, 30, 30, 8, 8.1, 8.2, 8.3, 8.2, 8.4, 9.8, 10, 0, 0, 0, 0, 0, 0, 0, 0, 8.1, 8.3, 8.6, 8.5, 9.4, 7.8, 7.9, 7.9, 25, 25, 25, 25, 25, 25, '2019-03-08', 'Participated ', 'hosteler', 'Bandhamcherla', 'Madhu', '', 'Python', 'Job', 0, 0, 0, 0, 0, 0, 0, 0),
('Neethu Sravanthi', 315177111018, '5th Sem', 56, 'fcgvhbjn', 10, 20, 15, 18, 21, 22, 25, 29, 23, 18, 20, 19, 7.9, 6.7, 8.9, 3.9, 4.2, 5.6, 6.7, 7.8, 0, 0, 0, 0, 0, 0, 0, 0, 8.1, 8.3, 8.6, 4.7, 9.4, 7.8, 7.9, 7.9, 20, 25, 23, 18, 20, 21, '2019-03-08', 'Shuttle', 'Hosteler', 'ELURU', 'Venkata krishna Rao', '', 'python,R', 'xdrctfvygbhnj', 80, 90, 90, 90, 100, 80, 80, 50),
('Neethu Sravanthi', 315177111018, '5th Sem', 56, 'No Problems', 10, 20, 15, 18, 21, 22, 25, 29, 23, 18, 20, 19, 7.9, 6.7, 8.9, 3.9, 4.2, 5.6, 6.7, 7.8, 0, 0, 0, 0, 0, 0, 0, 0, 8.1, 8.3, 8.6, 4.7, 9.4, 7.8, 7.9, 7.9, 20, 25, 23, 18, 20, 21, '2019-03-10', 'tfcgvyhbjn', 'Hosteler', 'ELURU', 'Venkata krishna Rao', '', 'c#', 'Participated', 80, 90, 90, 90, 75, 80, 80, 50),
('Neethu Sravanthi', 315177111018, '5th Sem', 90, 'No Problems', 10, 20, 15, 18, 21, 22, 25, 29, 23, 18, 20, 19, 8, 7.8, 8.5, 8.5, 8.2, 8.3, 8.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 7.9, 8.1, 8.2, 8.3, 8.41, 8.48, 0, 20, 25, 23, 18, 20, 21, '2019-03-14', 'Participated in Tech Fest, Organized Film Fest event', 'Hosteler', 'ELURU', 'Venkata krishna Rao', '', 'Python and R Programming Language', 'Secured Job', 70, 90, 90, 90, 75, 80, 80, 50),
('Sai Harsha', 315177111008, '6th sem', 30, 'No problems', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 5, 6, 0, 5, 5, 0, 0, 1, 0, 0, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-03-14', 'Participated in Techfest', 'Dayscholar', 'Eluru', 'Srinivasa rao', 'Business', 'no', 'no', 70, 60, 75, 65, 60, 75, 75, 30),
('Neethu Sravanthi', 315177111018, '7th Sem', 80, 'No problems', 10, 20, 15, 18, 21, 22, 25, 29, 23, 18, 20, 19, 8, 7.8, 8.5, 8.5, 8.2, 8.3, 8.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 7.9, 8.1, 8.2, 8.3, 8.41, 8.48, 0, 20, 25, 23, 18, 20, 21, '2019-03-15', 'tech fest', 'Hosteler', 'ELURU', 'Venkata krishna Rao', 'Farmer', 'R Programming', 'Job ', 70, 90, 90, 90, 75, 80, 80, 50);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `student_name` varchar(50) NOT NULL,
  `student_id` bigint(15) NOT NULL,
  `phno` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `presaddr` varchar(100) NOT NULL,
  `permaddr` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fphno` bigint(15) NOT NULL,
  `foccu` varchar(30) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mphno` bigint(15) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `mtc` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`student_name`, `student_id`, `phno`, `email`, `dob`, `gender`, `presaddr`, `permaddr`, `image`, `fname`, `fphno`, `foccu`, `femail`, `mname`, `mphno`, `moccu`, `memail`, `mtc`, `place`) VALUES
('Dharani', 315177111003, 9603242051, 'dharanianumolu@gmail.com', '1999-01-16', 'female', '1-80,Gantavari Street, Bandhamcherla', '1-80,Gantavari Street, Bandhamcherla', 0x75706c6f61642f494d475f32303139303330315f3232343835375f3939312e6a7067, 'Madhu', 7702938966, 'Farmer', '', 'Lakshmi', 9866097079, 'house-wife', '', '', ''),
('Sai Harsha', 315177111008, 9876543211, 'harshabalusu@gmail.com', '1998-07-03', 'male', 'SIR CRREDDY COLLEGE OF ENGINEERING', 'SIR CRREDDY COLLEGE OF ENGINEERING', 0x75706c6f61642f6861727368612e6a7067, 'Srinivasa rao', 8987654321, 'Business', '', 'Lakshmi', 9876789976, 'house-wife', '', 'Dayscholar', 'ELURU'),
('Neethu Sravanthi', 315177111018, 9666995958, 'neethus7722@gmail.com', '1998-05-22', 'female', 'SIR CRREDDY COLLEGE OF ENGINEERING', 'SIR CRREDDY COLLEGE OF ENGINEERING', 0x75706c6f61642f6e65657468755f70726f66696c652e706e67, 'Venkata krishna Rao', 9247149288, 'Farmer', '', 'Vijaya Lakshmi', 9666994959, 'house-wife', '', 'Hosteler', 'ELURU'),
('Latha Anusha Telu', 315177111099, 7095614149, 'lathaanushatelu9@gmail.com', '1998-01-06', 'female', 'dr.no:-23-22-1,Sitaramnagar,B.C.Road,Gajuwaka,Visakhapatnam,Andhra Pradesh.', 'dr.no:-23-22-1,Sitaramnagar,B.C.Road,Gajuwaka,Visakhapatnam,Andhra Pradesh.', 0x75706c6f61642f494d472d32303139303230392d5741303034332e6a7067, 'T.Satyanarayana', 9492234505, 'Business', 'satyanarayanatelu@hotmail.com', 'T.Kanaka Lakshmi', 8912516772, 'Home Maker', 'kankalakshmi@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `username` varchar(50) NOT NULL,
  `userid` bigint(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`username`, `userid`, `password`, `cpassword`) VALUES
('Dharani', 315177111003, 'dharani', 'dharani'),
('harsha', 315177111008, '12345', '12345'),
('Neethu', 315177111018, 'neethu', 'neethu'),
('Nikhil', 315177111041, 'nikhil', 'nikhil'),
('Anil', 315177111052, 'anil', 'anil'),
('Haritha', 315177111056, 'haritha', 'haritha'),
('Anusha', 315177111099, 'anusha', 'anusha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `faculty_reg`
--
ALTER TABLE `faculty_reg`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student_assign`
--
ALTER TABLE `student_assign`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
