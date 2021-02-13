-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 09:42 AM
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
(8, 1, 'WIG160038'),
(9, 1, 'WIG160037'),
(10, 1, 'WIG160036'),
(15, 1, 'WIG160039'),
(16, 1, 'WIG160035');

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
(15, 'admin', 'juenaimcomel95@gmail.com', 'admin', 'admin');

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
(13, 'NUR JUHAIDA MUHAMMAD NA\'IM', 2, '194060994', '1234567890', 'Kolej Kediaman Ketujuh (Za\'ba), Universiti Malaya, Lembah Pantai', 2, '24 NOVEMBER 1995', 1, 1, 1, 15);

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
(2, 'Printer/Scanner', 1),
(3, 'Radio', 1),
(4, 'Hair dryer', 1),
(5, 'Fan', 1),
(6, 'Not applicable', 1),
(11, 'Rice cooker', 0),
(12, 'Heater', 0);

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
  `rr_status_value` int(11) NOT NULL DEFAULT 1,
  `rr_status_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_room`
--

INSERT INTO `ref_room` (`rr_id`, `rr_room_name`, `rr_block`, `rr_oku`, `rr_status_value`, `rr_status_room`) VALUES
(1, '101', '1', 0, 1, 1),
(2, '102', '1', 0, 1, 0),
(3, '103', '1', 0, 1, 0),
(4, '104', '1', 0, 1, 0),
(5, '105', '1', 0, 1, 0),
(6, '106', '1', 1, 1, 0),
(7, '107', '1', 1, 1, 1),
(8, '108', '1', 1, 1, 0),
(9, '109', '1', 1, 1, 0),
(10, '110', '1', 0, 1, 0),
(11, '111', '1', 0, 1, 0),
(12, '112', '1', 0, 1, 0),
(13, '113', '1', 0, 1, 0),
(14, '114', '1', 0, 1, 0),
(15, '115', '1', 0, 1, 0),
(16, '116', '1', 0, 1, 0),
(17, '201', '1', 0, 1, 0),
(18, '202', '1', 0, 1, 0),
(19, '203', '1', 0, 1, 0),
(20, '204', '1', 0, 1, 0),
(21, '205', '1', 0, 1, 0),
(22, '206', '1', 0, 1, 0),
(23, '207', '1', 0, 1, 0),
(24, '208', '1', 0, 1, 0),
(25, '209', '1', 0, 1, 0),
(26, '210', '1', 0, 1, 0),
(27, '211', '1', 0, 1, 0),
(28, '212', '1', 0, 1, 0),
(29, '213', '1', 0, 1, 0),
(30, '214', '1', 0, 1, 0),
(31, '215', '1', 0, 1, 0),
(32, '216', '1', 0, 1, 0),
(33, '101', '2', 0, 1, 0),
(34, '102', '2', 0, 0, 0),
(35, '103', '2', 0, 1, 0),
(36, '104', '2', 0, 1, 0),
(37, '105', '2', 0, 1, 0),
(38, '106', '2', 0, 1, 0),
(39, '107', '2', 0, 1, 0),
(40, '108', '2', 0, 1, 0),
(41, '109', '2', 0, 1, 0),
(42, '110', '2', 0, 1, 0),
(43, '101', '3', 0, 1, 0),
(44, '102', '3', 0, 1, 0),
(45, '103', '3', 0, 0, 0),
(46, '104', '3', 0, 1, 0),
(47, '105', '3', 0, 1, 0),
(48, '106', '3', 0, 1, 0),
(49, '107', '3', 0, 1, 0),
(50, '108', '3', 0, 1, 0),
(51, '109', '3', 0, 1, 0),
(52, '110', '3', 0, 1, 0),
(53, '101', '4', 1, 1, 0),
(54, '102', '4', 1, 1, 1),
(55, '103', '4', 1, 1, 0),
(56, '104', '4', 1, 1, 0),
(57, '105', '4', 1, 1, 0),
(58, '106', '4', 1, 1, 0),
(59, '107', '4', 0, 1, 0),
(60, '108', '4', 0, 1, 0),
(61, '109', '4', 0, 1, 0),
(62, '110', '4', 0, 1, 0),
(491, '217', '1', 0, 1, 0),
(492, '101', '1', 0, 1, 0),
(493, '123', '3', 0, 1, 0),
(494, '101', '2', 0, 1, 1),
(495, '101', '2', 0, 1, 0),
(496, '102', '2', 0, 1, 0),
(497, '102', '2', 0, 1, 0),
(498, '101', '1', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ref_semester`
--

CREATE TABLE `ref_semester` (
  `rs_id` int(11) NOT NULL,
  `rs_session` varchar(50) NOT NULL,
  `rs_activesess` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_semester`
--

INSERT INTO `ref_semester` (`rs_id`, `rs_session`, `rs_activesess`) VALUES
(1, 'I 2020/2021', 1),
(2, 'II 2020/2021', 0),
(3, 'I 2021/2022', 0),
(4, 'II 2021/2022', 0),
(5, 'I 2022/2023', 0),
(6, 'II 2022/2023', 0),
(7, 'I 2023/2024', 0),
(8, 'II 2023/2024', 0);

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
-- Table structure for table `user_electric`
--

CREATE TABLE `user_electric` (
  `ue_id` int(11) NOT NULL,
  `ue_electrical` varchar(20) NOT NULL,
  `ue_session` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_electric`
--

INSERT INTO `user_electric` (`ue_id`, `ue_electrical`, `ue_session`, `user_id`) VALUES
(92, '3', 2, 42),
(93, '4', 2, 42),
(94, '1', 1, 43),
(95, '2', 1, 43),
(96, '6', 1, 39),
(97, '5', 1, 40),
(98, '5', 1, 41);

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
  `user_id` int(50) NOT NULL,
  `ug_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_guardian`
--

INSERT INTO `user_guardian` (`ug_id`, `ug_name`, `ug_income`, `ug_phonenumber`, `ug_address`, `ug_state`, `user_id`, `ug_session`) VALUES
(43, 'NUR ATIQAH BINTI SHAHRUDIN', 2, '0179003122', 'TP11 TEBUK PANCUR , SIMPANG EMPAT', 1, 39, 1),
(44, 'Siti Adawiiyah Binti Md Yusof', 2, '0149077270', 'Blok G1-4-2 Perumahan Angkatan Tentera, 10 Ramd Kem Majidee Km8, Jalan Tanjung Labuh', 8, 40, 1),
(45, 'NORSULIZAH  A/P LOMAT', 1, '0179003122', 'NO 30, JALAN DELFINA 1/4, LAMAN DELFINA, NILAI IMPIAN', 11, 41, 1),
(46, 'NATRA HJ MAT SIDI', 3, '0172277340', 'NO.7 JALAN SEMARAK 3, SEKSYEN BB7, BANDAR BUKIT BERUNTUNG,', 3, 42, 2),
(47, 'MUHAMMAD NAIM DAUD', 2, '0194060994', 'Kolej Kediaman Ketujuh (Za\'ba), Universiti Malaya, Lembah Pantai', 2, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_matric` varchar(9) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_psw` varchar(50) NOT NULL,
  `user_repsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_matric`, `user_email`, `user_psw`, `user_repsw`) VALUES
(39, 'WIG160038', '', 'admin', 'admin'),
(40, 'WIG160037', '', 'admin', 'admin'),
(41, 'WIG160036', '', 'admin', 'admin'),
(42, 'WIG160035', '', 'admin', 'admin'),
(43, 'WIG160039', '', 'admin', 'admin');

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
  `up_user_id` int(11) NOT NULL,
  `up_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`up_id`, `up_fullname`, `up_gender`, `up_statusoku`, `up_phonenumber`, `up_ic`, `up_email`, `up_address`, `up_state`, `up_dob`, `up_faculty`, `up_nation`, `up_religion`, `up_status`, `up_fyos`, `up_user_id`, `up_session`) VALUES
(44, 'SHAMIMIE SHAHIRAH AYOB', 2, 2, '125379884', '1234567890', 'shamimi@gmail.com', 'NO.12 JALAN HARMONI, PUSAT BANDAR', 1, '24 OKTOBER 2000', 1, 1, 1, 1, 2, 39, 1),
(45, 'MUHAMMAD EZRIN B FAZRUL LIM', 1, 1, '107649277', '2345678654', 'juenaimcomel95@gmail.com', 'INTERPANEL SDN BHD (PERI FORMWORK WH3), LOT 177 JALAN ENAM, KOMPLEKS PERABOT OLAK REMPIT', 3, '1 january 1998', 5, 1, 1, 1, 2, 40, 1),
(46, 'ali bin abu', 1, 2, '107649277', '5467567567658', 'ali@gmail.com', 'INTERPANEL SDN BHD (PERI FORMWORK WH3), LOT 177 JALAN ENAM, KOMPLEKS PERABOT OLAK REMPIT', 3, '24 NOVEMBER 2001', 17, 1, 1, 1, 3, 41, 1),
(47, 'ELEYSIAH PETRUS', 2, 1, '125379884', '35345346346', 'elly@gmail.com', 'BECON ENT SDN BHD (PUCHONG) LOT 46&48, JLN PUTERI 5/1', 3, '15 january 1998', 16, 2, 4, 1, 3, 42, 2),
(48, 'NUR JUHAIDA MUHAMMAD NA\'IM', 2, 1, '194060994', '123456789', 'juenaimcomel95@gmail.com', 'Kolej Kediaman Ketujuh (Za\'ba), Universiti Malaya, Lembah Pantai', 2, '24 NOVEMBER 1995', 16, 1, 1, 1, 1, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_room`
--

CREATE TABLE `user_room` (
  `ur_id` int(11) NOT NULL,
  `ur_room_number` int(50) NOT NULL,
  `ur_session` int(5) NOT NULL,
  `user_id` int(50) NOT NULL,
  `ur_checkin_date` int(11) NOT NULL,
  `ur_checkin_time` int(11) NOT NULL,
  `ur_checkout` int(11) NOT NULL,
  `ur_date` int(11) NOT NULL,
  `ur_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_room`
--

INSERT INTO `user_room` (`ur_id`, `ur_room_number`, `ur_session`, `user_id`, `ur_checkin_date`, `ur_checkin_time`, `ur_checkout`, `ur_date`, `ur_time`) VALUES
(49, 495, 2, 42, 20200508, 145915, 1, 20200508, 154020),
(50, 494, 1, 43, 20200508, 153447, 0, 0, 0),
(51, 54, 1, 39, 20200508, 153735, 0, 0, 0),
(52, 1, 1, 40, 20200508, 153818, 0, 0, 0),
(53, 7, 1, 41, 20200508, 153900, 0, 0, 0);

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
  MODIFY `aas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;

--
-- AUTO_INCREMENT for table `ref_semester`
--
ALTER TABLE `ref_semester`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `ue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `user_guardian`
--
ALTER TABLE `user_guardian`
  MODIFY `ug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_room`
--
ALTER TABLE `user_room`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
