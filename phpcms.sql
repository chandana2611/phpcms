-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 25, 2022 at 01:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `coulogin`
--

CREATE TABLE `coulogin` (
  `couid` varchar(200) NOT NULL,
  `passcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coulogin`
--

INSERT INTO `coulogin` (`couid`, `passcode`) VALUES
('1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `counsillar`
--

CREATE TABLE `counsillar` (
  `cousid` varchar(200) NOT NULL,
  `Couname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Deptid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counsillar`
--

INSERT INTO `counsillar` (`cousid`, `Couname`, `email`, `Deptid`) VALUES
('1', 'ABCD', '1@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `usn` varchar(200) DEFAULT NULL,
  `couid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Deptid` int(20) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `hod` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Deptid`, `dname`, `hod`) VALUES
(1, 'Aerospace Engineering', ''),
(2, 'Bio Technology', ''),
(3, 'Chemical Engineering', ''),
(4, 'Civil Engineering', ''),
(5, 'Computer Science And Engineering', ''),
(6, 'Electronics And Communication Engineering', ''),
(7, 'Information Science And Engineering', ''),
(8, 'Mechanical Engineering', '');

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `usn` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`usn`, `dname`, `relation`, `rname`, `gender`, `phno`) VALUES
('1', 'Shivaneetha', 'Mother', 'Pupil Tree PU College', 'Female', '6363494966');

-- --------------------------------------------------------

--
-- Table structure for table `engmarks`
--

CREATE TABLE `engmarks` (
  `usn` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `cgpa` varchar(200) NOT NULL,
  `sgpa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `passcode`) VALUES
(1, 'hod@gmail.com', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `usn` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `spac` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cpuc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`usn`, `sname`, `spac`, `cname`, `cpuc`) VALUES
('1', 'qwert', '98', 'wert', '98');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(200) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Mname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `deptid` int(20) DEFAULT NULL,
  `cousid` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentcocuri`
--

CREATE TABLE `studentcocuri` (
  `usn` varchar(200) NOT NULL,
  `cluborg` varchar(200) NOT NULL,
  `points` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `usn` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Mname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Dob` varchar(255) DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `deptid` varchar(255) DEFAULT NULL,
  `cousid` varchar(255) DEFAULT NULL,
  `phno` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`usn`, `Fname`, `Mname`, `Lname`, `Email`, `Dob`, `Age`, `deptid`, `cousid`, `phno`, `password`) VALUES
('1', 'Shivaneetha', 'PU', 'G', 'shivaneethag.cs19@rvce.edu.in', '2001-11-26', '20', '6', '1', '9538144666', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `usn` varchar(200) NOT NULL,
  `passcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`usn`, `passcode`) VALUES
('1', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `studentphno`
--

CREATE TABLE `studentphno` (
  `usn` varchar(200) DEFAULT NULL,
  `phno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `courseCode` int(20) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `courseTitle` varchar(200) NOT NULL,
  `regft` varchar(200) NOT NULL,
  `credits` varchar(200) NOT NULL,
  `dept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`courseCode`, `sem`, `courseTitle`, `regft`, `credits`, `dept`) VALUES
(2, '5', 'java', '', '3', 6),
(3, '5', 'java', '', '3', 6),
(4, '5', 'java', '', '3', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coulogin`
--
ALTER TABLE `coulogin`
  ADD PRIMARY KEY (`couid`);

--
-- Indexes for table `counsillar`
--
ALTER TABLE `counsillar`
  ADD PRIMARY KEY (`cousid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD KEY `courses_ibfk_1` (`usn`),
  ADD KEY `couid` (`couid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Deptid`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`usn`,`dname`),
  ADD KEY `dependents_ibfk_1` (`usn`);

--
-- Indexes for table `engmarks`
--
ALTER TABLE `engmarks`
  ADD PRIMARY KEY (`usn`,`sem`),
  ADD KEY `engmarks_ibfk_1` (`usn`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`usn`,`sname`),
  ADD KEY `marks_ibfk_1` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `student_ibfk_1` (`cousid`),
  ADD KEY `student_ibfk_2` (`deptid`);

--
-- Indexes for table `studentcocuri`
--
ALTER TABLE `studentcocuri`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `studentcocuri_ibfk_1` (`usn`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `studentphno`
--
ALTER TABLE `studentphno`
  ADD KEY `studentphno_ibfk_1` (`usn`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`courseCode`),
  ADD KEY `subjects_ibfk_1` (`dept`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Deptid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `courseCode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coulogin`
--
ALTER TABLE `coulogin`
  ADD CONSTRAINT `coulogin_ibfk_1` FOREIGN KEY (`couid`) REFERENCES `counsillar` (`cousid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`couid`) REFERENCES `subjects` (`courseCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dependents`
--
ALTER TABLE `dependents`
  ADD CONSTRAINT `dependents_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdetails` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `engmarks`
--
ALTER TABLE `engmarks`
  ADD CONSTRAINT `engmarks_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdetails` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdetails` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`cousid`) REFERENCES `counsillar` (`cousid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`deptid`) REFERENCES `department` (`Deptid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentcocuri`
--
ALTER TABLE `studentcocuri`
  ADD CONSTRAINT `studentcocuri_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdetails` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD CONSTRAINT `studentlogin_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdetails` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentphno`
--
ALTER TABLE `studentphno`
  ADD CONSTRAINT `studentphno_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `department` (`Deptid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
