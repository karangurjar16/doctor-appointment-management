-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2022 at 05:21 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paperless`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123123'),
('admin', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_detail`
--

DROP TABLE IF EXISTS `appointment_detail`;
CREATE TABLE IF NOT EXISTS `appointment_detail` (
  `appointment_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `a_date` date NOT NULL,
  `attainded_at` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `timeslot` varchar(10) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

DROP TABLE IF EXISTS `clinic`;
CREATE TABLE IF NOT EXISTS `clinic` (
  `clinic_id` int NOT NULL AUTO_INCREMENT,
  `clinic_name` varchar(50) NOT NULL,
  `clinic_address` varchar(100) NOT NULL,
  `registration_no` varchar(10) NOT NULL,
  `facilities` text NOT NULL,
  `clinic_contact` bigint NOT NULL,
  `email` varchar(50) NOT NULL,
  `timestmp` datetime NOT NULL,
  PRIMARY KEY (`clinic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`clinic_id`, `clinic_name`, `clinic_address`, `registration_no`, `facilities`, `clinic_contact`, `email`, `timestmp`) VALUES
(2, 'Radhe clinic', 'A1,Yogiraj', 'SRUGAJ2112', 'Emergency Room', 7721121201, 'srgajera21@gmail.com', '2022-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` int NOT NULL AUTO_INCREMENT,
  `clinic_id` int NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctor_contact` bigint NOT NULL,
  `address` varchar(200) NOT NULL,
  `license_no` varchar(15) NOT NULL,
  `speciality` text NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `clinic_id`, `doctor_name`, `username`, `password`, `doctor_contact`, `address`, `license_no`, `speciality`, `email`) VALUES
(1, 5, 'ramu patel', 'ramu12', '123123', 8754251211, 'near ramu circle', 'RAMU21', 'BHMS', 'ramu@gmail.com'),
(2, 4, 'riti patel', 'riti123', '123123', 1234567890, 'surat', 'ritib1', 'abc', 'riti@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `generic_medicine`
--

DROP TABLE IF EXISTS `generic_medicine`;
CREATE TABLE IF NOT EXISTS `generic_medicine` (
  `gid` int NOT NULL AUTO_INCREMENT,
  `mid` int NOT NULL,
  `mname` varchar(20) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gprice` smallint NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generic_medicine`
--

INSERT INTO `generic_medicine` (`gid`, `mid`, `mname`, `gname`, `gprice`) VALUES
(1, 1, 'DOLO-360', 'Paracetamol', 2),
(2, 1, 'DOLO-360', 'Crocin', 3),
(4, 3, 'Actos', 'octos', 20);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

DROP TABLE IF EXISTS `medical`;
CREATE TABLE IF NOT EXISTS `medical` (
  `medical_id` int NOT NULL AUTO_INCREMENT,
  `medical_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `license_no` varchar(15) NOT NULL,
  `contact` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`medical_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medical_id`, `medical_name`, `address`, `license_no`, `contact`, `email`, `password`) VALUES
(1, 'radhe medical', 'surat', 'radhe567', 1234321234, 'radhemedical@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `medicine_id` int NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `medicine_type` varchar(50) NOT NULL,
  `potency` text NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `company_name`, `medicine_type`, `potency`, `price`) VALUES
(1, 'Belladonna', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(2, 'Natrum Carbonicum', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 90),
(3, 'Natrum Muriaticum', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(4, 'Cantharis', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(5, 'Sulphur', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(6, 'Agaricus', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 88),
(7, 'Agaricus Muscarius', 'Bjain', 'Globules', '12 CH', 85),
(8, 'Acetic Acid', 'Bjain', 'Liquid Dilution', '30 CH', 87),
(9, 'Agnus Castus', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 84),
(10, 'Agnus Castus', 'SBL PVT.LTD.', 'Mother Tincture(Q)', '30 ml', 117),
(11, 'Allium Cepa', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(12, 'Allium Cepa', 'Bjain', 'Globules', '6 gm', 85),
(13, 'Phytolaca', 'Schwabe India', 'Tablet', '20 gm', 135),
(14, 'Baptisia Tinctoria', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 90),
(15, 'Baptisia Tinctoria', 'Bjain', 'Globules', '6 gm', 85),
(16, 'Glonoine', 'Haslab HC', 'Tablet', '20 gm', 70),
(17, 'Alumina', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 84),
(18, 'Berberis Aquefolium', 'Bjain', 'Mother Tincture(Q)', '30 ml', 215),
(19, 'Hypericum Perforatum', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 90),
(20, 'Digitalis', 'Bjain', 'Liquid Dilution', '30 CH', 55),
(21, 'Conium Mac.', 'SBL PVT.LTD.', 'Liquid Dilution', '30 CH', 85),
(22, 'Conium Mac.', 'Bjain', 'Liquid Dilution', '30 CH', 55),
(23, 'DOLO-360', 'SBL PVT.LTD.', 'Tablet', '6 gm', 10);

-- --------------------------------------------------------

--
-- Table structure for table `patient_medicine`
--

DROP TABLE IF EXISTS `patient_medicine`;
CREATE TABLE IF NOT EXISTS `patient_medicine` (
  `pmid` int NOT NULL AUTO_INCREMENT,
  `aid` int NOT NULL,
  `mid` int NOT NULL,
  PRIMARY KEY (`pmid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_prescription`
--

DROP TABLE IF EXISTS `patient_prescription`;
CREATE TABLE IF NOT EXISTS `patient_prescription` (
  `presc_id` int NOT NULL AUTO_INCREMENT,
  `appointment_id` int NOT NULL,
  `medical_id` int NOT NULL,
  `advise` text NOT NULL,
  `pdate` date NOT NULL,
  PRIMARY KEY (`presc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `reception_id` int NOT NULL AUTO_INCREMENT,
  `reception_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`reception_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`reception_id`, `reception_name`, `password`, `email`, `address`, `contact`, `gender`) VALUES
(1, 'abc', '123123', 'abc@gmail.com', '1,abc', 1245786390, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `sch`
--

DROP TABLE IF EXISTS `sch`;
CREATE TABLE IF NOT EXISTS `sch` (
  `aid` int NOT NULL,
  `morning` varchar(100) NOT NULL,
  `afternoon` varchar(100) NOT NULL,
  `night` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` int NOT NULL,
  `sec_que` varchar(50) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `username`, `password`, `email`, `address`, `contact`, `sec_que`, `answer`, `gender`, `user_type`) VALUES
('sahil', 'sahil', '123123', 'sahilgolakiya34@gmail.com', '33,sarita', 992415835, 'What is your hobby?', 'play cricket', 'Male', 'patient'),
('sudhir', 'sudhir', '123123', 'sudhir@gmail.com', '35,adrees', 777803968, 'What is your hobby?', 'play cricket', 'Male', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
CREATE TABLE IF NOT EXISTS `symptoms` (
  `symptoms_id` int NOT NULL AUTO_INCREMENT,
  `medicine_id` int NOT NULL,
  `symptoms_name` varchar(100) NOT NULL,
  PRIMARY KEY (`symptoms_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptoms_id`, `medicine_id`, `symptoms_name`) VALUES
(1, 1, 'Throbbing Headache'),
(2, 2, 'Throbbing Headache'),
(3, 3, 'Throbbing Headache'),
(4, 4, 'Burning Micturition'),
(5, 5, 'Burning Micturition'),
(6, 6, 'Herpes on lips'),
(7, 8, 'Nervous Headache'),
(8, 9, 'Sterility in Female'),
(9, 11, 'Coryza'),
(10, 13, 'Tonsilitis'),
(11, 14, 'Typhoid Fever'),
(12, 16, 'Sun Headache'),
(13, 17, 'Chronic Constipation'),
(14, 18, 'Acne rosacea'),
(15, 19, 'Nerve injury'),
(16, 20, 'Cardiogenic Shock'),
(17, 21, 'Glandular Affection'),
(18, 1, 'Congestion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
