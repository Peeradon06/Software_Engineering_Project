-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2020 at 08:58 PM
-- Server version: 5.5.62
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20s2_g3`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `PID` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PNAME` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `PTYPE` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `SPEC` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `LOC` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `BDATE` varchar(10) NOT NULL,
  `RDATE` varchar(10) NOT NULL,
  `STAFF` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`PID`, `PNAME`, `PTYPE`, `SPEC`, `LOC`, `PSTATUS`, `BDATE`, `RDATE`, `STAFF`) VALUES
('560000007', 'ครุภัณฑ์สำนักงาน', 'ครุภัณฑ์คอมพิวเตอร์', 'ความจุ 16 Gb', 'นายปรเมศวร์ โสภาคำ', 'Overdue', '03/03/2020', '08/03/2020', 'พี่นิ้ว'),
('5602100000397', 'ระบบเครือข่ายคอมพิวเตอร์', 'ครุภัณฑ์คอมพิวเตอร์', '-', '-', 'Unavailable', '', '', 'Thanapol'),
('5602100000436', 'คอมพิวเตอร์สมรรถนะสูงสำหรับทำงานด้านวิจัยในวิชาโครงงานศึกษา', 'ครุภัณฑ์คอมพิวเตอร์', '-', '-', 'Available', '', '', 'Thanapol'),
('56021300000007', 'เครื่องทำลายเอกสาร', 'ครุภัณฑ์สำนักงาน', 'IDEAL 3104', 'SC6301', 'Unavailable', '', '', 'Thanapon'),
('56021300000116', 'ชุดคอมพิวเตอร์สำหรับโครงงานนักศึกษา 1 ชุด (19 เครื่อง)', 'ครุภัณฑ์คอมพิวเตอร์', 'Dell Optiplex 7010 DT', '-', 'Available', '', '', 'Thanapon'),
('56021300000207', 'ระบบเชื่อมสัญญาณเครือข่าย(Switching) 1 ชุด', 'ครุภัณฑ์คอมพิวเตอร์', 'Cisco', '-', 'Available', '', '', 'Thanapon'),
('56021300000255', 'คอมพิวเตอร์สมรรถนะสูงสำหรับงานวิจัยด้าน IT', 'ครุภัณฑ์คอมพิวเตอร์', '-', '-', 'Unavailable', '', '', '-'),
('5602130000087', 'ชุดคอมพิวเตอร์ประมวลผลระดับสูง 1 ชุด (28 เครื่อง)', 'ครุภัณฑ์คอมพิวเตอร์', 'Dell Optiplex 7010 DT', '-', 'Available', '', '', 'Thanapon'),
('5602130000399', 'ชุดอุปกรณ์สำหรับทำงานด้านวิจัยในวิชาโครงานศึกษา', 'ครุภัณฑ์คอมพิวเตอร์', '-', '-', 'Available', '', '', 'Thanapol'),
('5802130000006', 'เครือข่ายคอมพิวเตอร์แม่ข่าย', 'ครุภัณฑ์คอมพิวเตอร์', '-', 'SC6324', 'Unavailable', '', '', 'Thanapol'),
('5802130000015', 'ระบบคอมพิวเตอร์', 'ครุภัณฑ์คอมพิวเตอร์', '-', 'SC6324', 'Unavailable', '', '', 'Thanapol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
