-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 04:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_addstudent`
--

CREATE TABLE `admin_addstudent` (
  `aas_id` int(11) NOT NULL,
  `aas_session` int(11) NOT NULL,
  `aas_matric` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_addstudent`
--

INSERT INTO `admin_addstudent` (`aas_id`, `aas_session`, `aas_matric`) VALUES
(1, 1, 'WIG160039'),
(2, 1, 'WIG160038'),
(3, 1, 'WIG160037'),
(4, 2, 'atu57892');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `ad_username` varchar(50) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_password` varchar(50) NOT NULL,
  `ad_repassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `ad_username`, `ad_email`, `ad_password`, `ad_repassword`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `ap_id` int(11) NOT NULL,
  `ap_name` varchar(100) NOT NULL,
  `ap_gender` int(5) NOT NULL,
  `ap_phone` varchar(50) NOT NULL,
  `ap_ic` varchar(50) NOT NULL,
  `ap_address` varchar(100) NOT NULL,
  `ap_state` int(5) NOT NULL,
  `ap_dob` varchar(50) NOT NULL,
  `ap_nation` int(5) NOT NULL,
  `ap_religion` int(5) NOT NULL,
  `ap_status` int(5) NOT NULL,
  `ap_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`ap_id`, `ap_name`, `ap_gender`, `ap_phone`, `ap_ic`, `ap_address`, `ap_state`, `ap_dob`, `ap_nation`, `ap_religion`, `ap_status`, `ap_admin_id`) VALUES
(6, 'NUR JUHAIDA MUHAMMAD NA\'IM', 2, '194060994', '951124036042', 'Kolej Kediaman Ketujuh (Za\'ba), Universiti Malaya, Lembah Pantai', 2, '24 NOVEMBER 1995', 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ref_block`
--

CREATE TABLE `ref_block` (
  `rb_id` int(11) NOT NULL,
  `rb_block_name` varchar(50) NOT NULL,
  `rb_block_category` int(50) NOT NULL,
  `rb_block_name_alias` varchar(3) NOT NULL,
  `rb_status_value` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_block`
--

INSERT INTO `ref_block` (`rb_id`, `rb_block_name`, `rb_block_category`, `rb_block_name_alias`, `rb_status_value`) VALUES
(1, 'Angsana', 1, 'A', 1),
(2, 'Berlian', 2, 'B', 1),
(3, 'Cemara', 2, 'C', 1),
(4, 'Dilema', 2, 'D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_course`
--

CREATE TABLE `ref_course` (
  `rc_id` int(5) NOT NULL,
  `rc_course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_course`
--

INSERT INTO `ref_course` (`rc_id`, `rc_course`) VALUES
(1, 'SARJANA MUDA SAINS SENI BINA'),
(2, 'SARJANA MUDA UKUR BANGUNAN'),
(3, 'SARJANA MUDA UKUR BAHAN'),
(4, 'SARJANA MUDA PENGURUSAN HARTANAH'),
(5, 'SARJANA MUDA KEJURUTERAAN (AWAM)'),
(6, 'SARJANA MUDA KEJURUTERAAN (KOMPUTER)'),
(7, 'SARJANA MUDA KEJURUTERAAN (KIMIA)'),
(8, 'SARJANA MUDA KEJURUTERAAN (ALAM SEKITAR)'),
(9, 'SARJANA MUDA KEJURUTERAAN (TELEKOMUNIKASI)'),
(10, 'SARJANA MUDA KEJURUTERAAN (BAHAN)'),
(11, 'SARJANA MUDA KEJURUTERAAN (PEMBUATAN)'),
(12, 'SARJANA MUDA KEJURUTERAAN (ELEKTRIK)'),
(13, 'SARJANA MUDA FARMASI (KEPUJIAN)'),
(14, 'SARJANA MUDA TEKNOLOGI MAKLUMAT (MULTIMEDIA)'),
(15, 'SARJANA MUDA SAINS KOMPUTER (KEJURUTERAAN PERISIAN)'),
(16, 'SARJANA MUDA SAINS KOMPUTER (KEPINTARAN BUATAN)'),
(17, 'SARJANA MUDA SAINS KOMPUTER (SISTEM & PENGURUSAN MAKLUMAT)'),
(18, 'SARJANA MUDA SAINS KOMPUTER (SISTEM DAN RANGKAIAN KOMPUTER)'),
(19, 'SARJANA MUDA BAHASA DAN LINGUISTIK (BAHASA ARAB)'),
(20, 'SARJANA MUDA BAHASA DAN LINGUISTIK (BAHASA PERANCIS)');

-- --------------------------------------------------------

--
-- Table structure for table `ref_electrical`
--

CREATE TABLE `ref_electrical` (
  `re_id` int(11) NOT NULL,
  `re_electrical_name` varchar(50) NOT NULL,
  `re_status_value` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_electrical`
--

INSERT INTO `ref_electrical` (`re_id`, `re_electrical_name`, `re_status_value`) VALUES
(1, 'Computer/Laptop', 1),
(2, 'Printer/Scanner', 0),
(3, 'Radio', 1),
(4, 'Hair dryer', 1),
(5, 'Fan', 1),
(6, 'Not applicable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_faculty`
--

CREATE TABLE `ref_faculty` (
  `rf_id` int(5) NOT NULL,
  `rf_faculty` varchar(100) NOT NULL,
  `rf_status_value` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_faculty`
--

INSERT INTO `ref_faculty` (`rf_id`, `rf_faculty`, `rf_status_value`) VALUES
(1, 'AKADEMI PENGAJIAN ISLAM', 1),
(2, 'AKADEMI PENGAJIAN MELAYU', 1),
(3, 'FAKULTI ALAM BINA', 1),
(4, 'FAKULTI BAHASA DAN LINGUISTIK', 1),
(5, 'FAKULTI EKONOMI DAN PENTADBIRAN', 1),
(6, 'FAKULTI KEJURUTERAAN', 1),
(7, 'FAKULTI PENDIDIKAN', 1),
(8, 'PUSAT KEBUDAYAAN', 1),
(9, 'PUSAT SUKAN', 1),
(10, 'FAKULTI PERGIGIAN', 1),
(11, 'FAKULTI PERNIAGAAN DAN PERAKAUNAN', 1),
(12, 'FAKULTI SAINS', 1),
(15, 'FAKULTI SASTERA DAN SAINS SOSIAL', 1),
(16, 'FAKULTI SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT', 1),
(17, 'FAKULTI UNDANG-UNDANG', 1),
(18, 'FAKULTI PERUBATAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_fyos`
--

CREATE TABLE `ref_fyos` (
  `rf_id` int(11) NOT NULL,
  `rf_final_year_of_study` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_fyos`
--

INSERT INTO `ref_fyos` (`rf_id`, `rf_final_year_of_study`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023),
(5, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `ref_gender`
--

CREATE TABLE `ref_gender` (
  `rg_id` int(1) NOT NULL,
  `rg_gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_gender`
--

INSERT INTO `ref_gender` (`rg_id`, `rg_gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `ref_income`
--

CREATE TABLE `ref_income` (
  `ri_id` int(11) NOT NULL,
  `ri_income` varchar(50) NOT NULL,
  `ri_status_value` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_income`
--

INSERT INTO `ref_income` (`ri_id`, `ri_income`, `ri_status_value`) VALUES
(1, 'RM3,860 dan ke bawah', 1),
(2, 'RM3,860 - RM8,319', 1),
(3, 'RM8,319 dan ke atas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_nation`
--

CREATE TABLE `ref_nation` (
  `rn_id` int(11) NOT NULL,
  `rn_nation_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_nation`
--

INSERT INTO `ref_nation` (`rn_id`, `rn_nation_name`) VALUES
(1, 'Melayu'),
(2, 'Cina'),
(3, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `ref_religion`
--

CREATE TABLE `ref_religion` (
  `rr_id` int(11) NOT NULL,
  `rr_religion_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_religion`
--

INSERT INTO `ref_religion` (`rr_id`, `rr_religion_name`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Budha'),
(4, 'Kristian');

-- --------------------------------------------------------

--
-- Table structure for table `ref_room`
--

CREATE TABLE `ref_room` (
  `rr_id` int(11) NOT NULL,
  `rr_room_name` varchar(5) NOT NULL,
  `rr_block` varchar(5) NOT NULL,
  `rr_oku` int(2) NOT NULL,
  `rr_status_value` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_room`
--

INSERT INTO `ref_room` (`rr_id`, `rr_room_name`, `rr_block`, `rr_oku`, `rr_status_value`) VALUES
(1, '101', '1', 0, 1),
(2, '102', '1', 0, 0),
(3, '103', '1', 0, 0),
(4, '104', '1', 1, 1),
(5, '105', '1', 0, 1),
(6, '106', '1', 0, 1),
(7, '107', '1', 0, 1),
(8, '108', '1', 0, 1),
(9, '109', '1', 0, 1),
(10, '110', '1', 0, 1),
(11, '111', '1', 0, 1),
(12, '112', '1', 0, 1),
(13, '113', '1', 0, 1),
(14, '114', '1', 0, 1),
(15, '115', '1', 0, 1),
(16, '116', '1', 0, 1),
(17, '201', '1', 0, 1),
(18, '202', '1', 0, 1),
(19, '203', '1', 0, 1),
(20, '204', '1', 0, 1),
(21, '205', '1', 0, 1),
(22, '206', '1', 0, 1),
(23, '207', '1', 0, 1),
(24, '208', '1', 0, 1),
(25, '209', '1', 0, 1),
(26, '210', '1', 0, 1),
(27, '211', '1', 0, 1),
(28, '212', '1', 0, 1),
(29, '213', '1', 0, 1),
(30, '214', '1', 0, 1),
(31, '215', '1', 0, 1),
(32, '216', '1', 0, 1),
(33, '101', '2', 1, 0),
(34, '102', '2', 0, 0),
(35, '103', '2', 0, 1),
(36, '104', '2', 1, 0),
(37, '105', '2', 0, 0),
(38, '106', '2', 0, 1),
(39, '107', '2', 0, 1),
(40, '108', '2', 0, 1),
(41, '109', '2', 0, 1),
(42, '110', '2', 0, 1),
(43, '101', '3', 0, 1),
(44, '102', '3', 0, 1),
(45, '103', '3', 0, 1),
(46, '104', '3', 0, 1),
(47, '105', '3', 0, 1),
(48, '106', '3', 0, 0),
(49, '107', '3', 0, 1),
(50, '108', '3', 0, 1),
(51, '109', '3', 0, 1),
(52, '110', '3', 0, 1),
(53, '101', '4', 0, 0),
(54, '102', '4', 0, 1),
(55, '103', '4', 0, 0),
(56, '104', '4', 0, 0),
(57, '105', '4', 0, 1),
(58, '106', '4', 0, 1),
(59, '107', '4', 0, 1),
(60, '108', '4', 0, 1),
(61, '109', '4', 0, 0),
(62, '110', '4', 0, 1),
(491, '217', '1', 0, 1),
(492, '101', '1', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_semester`
--

CREATE TABLE `ref_semester` (
  `rs_id` int(11) NOT NULL,
  `rs_session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_semester`
--

INSERT INTO `ref_semester` (`rs_id`, `rs_session`) VALUES
(1, 'I 2020/2021'),
(2, 'II 2020/2021'),
(3, 'I 2021/2022'),
(4, 'II 2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `ref_state`
--

CREATE TABLE `ref_state` (
  `rs_id` int(3) NOT NULL,
  `rs_statename` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_state`
--

INSERT INTO `ref_state` (`rs_id`, `rs_statename`) VALUES
(1, 'Perak'),
(2, 'Kuala Lumpur'),
(3, 'Selangor'),
(4, 'Kedah'),
(5, 'Pahang'),
(6, 'Perlis'),
(7, 'Pulau Pinang'),
(8, 'Johor'),
(9, 'Sabah'),
(10, 'Sarawak'),
(11, 'Negeri Sembilan'),
(12, 'Melaka'),
(13, 'Kelantan'),
(14, 'Terengganu');

-- --------------------------------------------------------

--
-- Table structure for table `ref_status`
--

CREATE TABLE `ref_status` (
  `rs_id` int(11) NOT NULL,
  `rs_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_status`
--

INSERT INTO `ref_status` (`rs_id`, `rs_status`) VALUES
(1, 'Single'),
(2, 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `ref_statusoku`
--

CREATE TABLE `ref_statusoku` (
  `rs_id` int(11) NOT NULL,
  `rs_oku` int(10) NOT NULL,
  `rs_statusname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_statusoku`
--

INSERT INTO `ref_statusoku` (`rs_id`, `rs_oku`, `rs_statusname`) VALUES
(1, 0, 'No'),
(2, 1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `name` char(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`name`, `gender`, `phone`, `ic`, `matric`, `email`, `address`, `dob`, `faculty`, `nation`, `religion`, `status`, `fyos`, `nog`, `income`, `gphone`, `gaddress`, `room`, `electric`) VALUES
(NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B416', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_electric`
--

CREATE TABLE `user_electric` (
  `ue_id` int(11) NOT NULL,
  `ue_electrical` varchar(20) NOT NULL,
  `ue_session` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_guardian`
--

CREATE TABLE `user_guardian` (
  `ug_id` int(11) NOT NULL,
  `ug_name` varchar(50) NOT NULL,
  `ug_income` int(2) NOT NULL,
  `ug_phonenumber` varchar(15) NOT NULL,
  `ug_address` varchar(100) NOT NULL,
  `ug_state` int(2) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_guardian`
--

INSERT INTO `user_guardian` (`ug_id`, `ug_name`, `ug_income`, `ug_phonenumber`, `ug_address`, `ug_state`, `user_id`) VALUES
(11, 'MUHAMMAD NA', 2, '0125392362', 'TAMAN DAHLIA', 1, 20),
(12, 'NORSULIZAH  A/P LOMAT', 2, '0179003122', 'NO 30, JALAN DELFINA 1/4, LAMAN DELFINA, NILAI IMPIAN', 11, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_matric` varchar(9) NOT NULL,
  `user_psw` varchar(50) NOT NULL,
  `user_repsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_matric`, `user_psw`, `user_repsw`) VALUES
(18, 'WIG160039', 'admin', 'admin'),
(20, 'WIG160038', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `up_id` int(11) NOT NULL,
  `up_fullname` varchar(100) DEFAULT NULL,
  `up_gender` int(11) DEFAULT NULL,
  `up_statusoku` int(5) DEFAULT NULL,
  `up_phonenumber` varchar(15) DEFAULT NULL,
  `up_ic` varchar(15) DEFAULT NULL,
  `up_email` varchar(50) DEFAULT NULL,
  `up_address` varchar(100) DEFAULT NULL,
  `up_state` int(5) DEFAULT NULL,
  `up_dob` varchar(50) DEFAULT NULL,
  `up_faculty` int(5) DEFAULT NULL,
  `up_nation` int(5) DEFAULT NULL,
  `up_religion` int(5) DEFAULT NULL,
  `up_status` int(5) DEFAULT NULL,
  `up_fyos` int(5) DEFAULT NULL,
  `up_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`up_id`, `up_fullname`, `up_gender`, `up_statusoku`, `up_phonenumber`, `up_ic`, `up_email`, `up_address`, `up_state`, `up_dob`, `up_faculty`, `up_nation`, `up_religion`, `up_status`, `up_fyos`, `up_user_id`) VALUES
(12, 'NUR JUHAIDA MUHAMMAD NA', 1, 1, '194060994', '951124036042', 'juhaida37@gmail.com', 'gelung pepuyu', 2, '24 NOVEMBER 1995', 1, 1, 1, 1, 1, 20),
(13, 'NATRA HJ MAT SIDI', 2, 1, '172277340', '1234567890', 'natra@gmail.com', 'NO.7 JALAN SEMARAK 3, SEKSYEN BB7, BANDAR BUKIT BERUNTUNG,', 1, '1 january 1998', 2, 1, 1, 1, 2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_receipt`
--

CREATE TABLE `user_receipt` (
  `ur_id` int(11) NOT NULL,
  `ur_session` int(5) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_room`
--

CREATE TABLE `user_room` (
  `ur_id` int(11) NOT NULL,
  `ur_room_number` int(50) NOT NULL,
  `ur_session` int(5) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_addstudent`
--
ALTER TABLE `admin_addstudent`
  ADD PRIMARY KEY (`aas_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `ref_block`
--
ALTER TABLE `ref_block`
  ADD PRIMARY KEY (`rb_id`);

--
-- Indexes for table `ref_course`
--
ALTER TABLE `ref_course`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `ref_electrical`
--
ALTER TABLE `ref_electrical`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `ref_faculty`
--
ALTER TABLE `ref_faculty`
  ADD PRIMARY KEY (`rf_id`);

--
-- Indexes for table `ref_fyos`
--
ALTER TABLE `ref_fyos`
  ADD PRIMARY KEY (`rf_id`);

--
-- Indexes for table `ref_gender`
--
ALTER TABLE `ref_gender`
  ADD PRIMARY KEY (`rg_id`);

--
-- Indexes for table `ref_income`
--
ALTER TABLE `ref_income`
  ADD PRIMARY KEY (`ri_id`);

--
-- Indexes for table `ref_nation`
--
ALTER TABLE `ref_nation`
  ADD PRIMARY KEY (`rn_id`);

--
-- Indexes for table `ref_religion`
--
ALTER TABLE `ref_religion`
  ADD PRIMARY KEY (`rr_id`);

--
-- Indexes for table `ref_room`
--
ALTER TABLE `ref_room`
  ADD PRIMARY KEY (`rr_id`);

--
-- Indexes for table `ref_semester`
--
ALTER TABLE `ref_semester`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `ref_state`
--
ALTER TABLE `ref_state`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `ref_status`
--
ALTER TABLE `ref_status`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `ref_statusoku`
--
ALTER TABLE `ref_statusoku`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `user_electric`
--
ALTER TABLE `user_electric`
  ADD PRIMARY KEY (`ue_id`);

--
-- Indexes for table `user_guardian`
--
ALTER TABLE `user_guardian`
  ADD PRIMARY KEY (`ug_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`up_id`);

--
-- Indexes for table `user_receipt`
--
ALTER TABLE `user_receipt`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `user_room`
--
ALTER TABLE `user_room`
  ADD PRIMARY KEY (`ur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_addstudent`
--
ALTER TABLE `admin_addstudent`
  MODIFY `aas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_block`
--
ALTER TABLE `ref_block`
  MODIFY `rb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ref_course`
--
ALTER TABLE `ref_course`
  MODIFY `rc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ref_electrical`
--
ALTER TABLE `ref_electrical`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_faculty`
--
ALTER TABLE `ref_faculty`
  MODIFY `rf_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ref_fyos`
--
ALTER TABLE `ref_fyos`
  MODIFY `rf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_gender`
--
ALTER TABLE `ref_gender`
  MODIFY `rg_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ref_income`
--
ALTER TABLE `ref_income`
  MODIFY `ri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_nation`
--
ALTER TABLE `ref_nation`
  MODIFY `rn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_religion`
--
ALTER TABLE `ref_religion`
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ref_room`
--
ALTER TABLE `ref_room`
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `ref_semester`
--
ALTER TABLE `ref_semester`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ref_state`
--
ALTER TABLE `ref_state`
  MODIFY `rs_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ref_status`
--
ALTER TABLE `ref_status`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_statusoku`
--
ALTER TABLE `ref_statusoku`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_electric`
--
ALTER TABLE `user_electric`
  MODIFY `ue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_guardian`
--
ALTER TABLE `user_guardian`
  MODIFY `ug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_receipt`
--
ALTER TABLE `user_receipt`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_room`
--
ALTER TABLE `user_room`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
