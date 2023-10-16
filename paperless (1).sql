-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 08:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '123123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_detail`
--

CREATE TABLE `appointment_detail` (
  `appointment_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `a_date` date NOT NULL,
  `attainded_at` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `timeslot` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `clinic_name` varchar(50) NOT NULL,
  `clinic_address` varchar(100) NOT NULL,
  `registration_no` varchar(10) NOT NULL,
  `facilities` text NOT NULL,
  `clinic_contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `timestmp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`clinic_id`, `clinic_name`, `clinic_address`, `registration_no`, `facilities`, `clinic_contact`, `email`, `timestmp`) VALUES
(2, 'Radhe clinic', 'A1,Yogiraj', 'SRUGAJ2112', 'Emergency Room', 7721121201, 'srgajera21@gmail.com', '2022-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctor_contact` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `license_no` varchar(15) NOT NULL,
  `speciality` text NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `generic_medicine` (
  `gid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gprice` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `medical` (
  `medical_id` int(11) NOT NULL,
  `medical_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `license_no` varchar(15) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medical_id`, `medical_name`, `address`, `license_no`, `contact`, `email`, `password`) VALUES
(1, 'radhe medical', 'surat', 'radhe567', 1234321234, 'radhemedical@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `medicine_type` varchar(50) NOT NULL,
  `potency` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `patient_medicine` (
  `pmid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_medicine`
--

INSERT INTO `patient_medicine` (`pmid`, `aid`, `mid`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 5),
(5, 1, 8),
(6, 2, 10),
(7, 2, 4),
(8, 2, 13),
(9, 2, 2),
(19, 3, 5),
(20, 3, 5),
(21, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `patient_prescription`
--

CREATE TABLE `patient_prescription` (
  `presc_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `medical_id` int(11) NOT NULL,
  `advise` text NOT NULL,
  `pdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_prescription`
--

INSERT INTO `patient_prescription` (`presc_id`, `user_id`, `appointment_id`, `medical_id`, `advise`, `pdate`) VALUES
(9, 'rehgrth', 2, 1, 'test', '2023-04-26'),
(10, 'rehgrth', 3, 1, 'users', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE `reception` (
  `reception_id` int(11) NOT NULL,
  `reception_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`reception_id`, `reception_name`, `password`, `email`, `address`, `contact`, `gender`) VALUES
(1, 'abc', '123123', 'abc@gmail.com', '1,abc', 1245786390, 'Female'),
(2, 'demo', '123', 'demo@gmail.com', 'demo@gmail.com', 2147483647, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `sch`
--

CREATE TABLE `sch` (
  `aid` int(11) NOT NULL,
  `morning` varchar(100) NOT NULL,
  `afternoon` varchar(100) NOT NULL,
  `night` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `sec_que` varchar(50) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `username`, `password`, `email`, `address`, `contact`, `sec_que`, `answer`, `gender`, `user_type`) VALUES
(1, 'sahil', 'sahil', '123123', 'sahilgolakiya34@gmail.com', '33,sarita', 992415835, 'What is your hobby?', 'play cricket', 'Male', 'patient'),
(2, 'sudhir', 'sudhir', '123123', 'sudhir@gmail.com', '35,adrees', 777803968, 'What is your hobby?', 'play cricket', 'Male', 'patient'),
(3, 'eger', 'rehgrth', '123123', 'ergre@gmail.com', 'ewrgfregreg', 2147483647, 'What is your fathername?', 'ewrgfregtrregrg', 'Male', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptoms_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `symptoms_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(18, 1, 'Congestion'),
(19, 1, 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `generic_medicine`
--
ALTER TABLE `generic_medicine`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medical_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patient_medicine`
--
ALTER TABLE `patient_medicine`
  ADD PRIMARY KEY (`pmid`);

--
-- Indexes for table `patient_prescription`
--
ALTER TABLE `patient_prescription`
  ADD PRIMARY KEY (`presc_id`);

--
-- Indexes for table `reception`
--
ALTER TABLE `reception`
  ADD PRIMARY KEY (`reception_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptoms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generic_medicine`
--
ALTER TABLE `generic_medicine`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medical_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `patient_medicine`
--
ALTER TABLE `patient_medicine`
  MODIFY `pmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patient_prescription`
--
ALTER TABLE `patient_prescription`
  MODIFY `presc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reception`
--
ALTER TABLE `reception`
  MODIFY `reception_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptoms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
