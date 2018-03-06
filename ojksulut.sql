-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2016 at 11:45 AM
-- Server version: 5.7.10
-- PHP Version: 5.5.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkip`
--
use ojksulut;
-- --------------------------------------------------------

--
-- Table structure for table `DTLMPKPS`
--

CREATE TABLE `DTLMPKPS` (
  `ID_HDRMPKPS` int(11) NOT NULL,
  `IDDOC` int(11) NOT NULL,
  `VDESC` text NOT NULL,
  `VPATH` varchar(100) NOT NULL,
  `VCREA` varchar(100) NOT NULL,
  `DCREA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VMODI` varchar(100) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DTLMPKPS`
--

INSERT INTO `DTLMPKPS` (`ID_HDRMPKPS`, `IDDOC`, `VDESC`, `VPATH`, `VCREA`, `DCREA`, `VMODI`, `DMODI`) VALUES
(1, 1, 'icon-unlimited-challenge.png', 'upload/1_icon-unlimited-challenge.png', 'leo.naga@ojk.go.id', '2016-10-18 23:37:32', NULL, NULL),
(1, 2, 'DMADV-Checklist-Template.ppt', 'upload/1_DMADV-Checklist-Template.ppt', 'leo.naga@ojk.go.id', '2016-10-18 23:37:32', NULL, NULL),
(2, 1, 'DMADV-Review-Template-LSSA-rev-3.pptx', 'upload/2_DMADV-Review-Template-LSSA-rev-3.pptx', 'leo.naga@ojk.go.id', '2016-10-19 07:09:56', NULL, NULL),
(2, 2, 'icon-unlimited-challenge.png', 'upload/2_icon-unlimited-challenge.png', 'leo.naga@ojk.go.id', '2016-10-19 07:09:56', NULL, NULL),
(3, 1, 'Screen Shot 2016-09-09 at 11.39.45 AM.png', 'upload/3_Screen Shot 2016-09-09 at 11.39.45 AM.png', 'leo.naga@ojk.go.id', '2016-10-19 09:10:56', NULL, NULL),
(3, 2, 'Screen Shot 2016-09-09 at 8.11.55 AM.png', 'upload/3_Screen Shot 2016-09-09 at 8.11.55 AM.png', 'leo.naga@ojk.go.id', '2016-10-19 09:10:56', NULL, NULL),
(4, 1, 'Screen Shot 2016-09-09 at 11.39.45 AM.png', 'upload/4_Screen Shot 2016-09-09 at 11.39.45 AM.png', 'leo.naga@ojk.go.id', '2016-10-19 09:27:10', NULL, NULL),
(5, 1, 'Screen Shot 2016-09-09 at 11.39.45 AM.png', 'upload/5_Screen Shot 2016-09-09 at 11.39.45 AM.png', 'leo.naga@ojk.go.id', '2016-10-19 09:39:19', NULL, NULL),
(6, 1, 'pivot.xlsx', 'upload/6_pivot.xlsx', 'silviana@ojk.go.id', '2016-10-19 21:35:02', NULL, NULL),
(6, 2, 'simple.html', 'upload/6_simple.html', 'silviana@ojk.go.id', '2016-10-19 21:35:02', NULL, NULL),
(7, 1, 'pivot.xlsx', 'upload/7_pivot.xlsx', 'silviana@ojk.go.id', '2016-10-20 07:36:12', NULL, NULL),
(8, 1, 'Jogja Expense (30 Sept - 2 Oct).xlsx', 'upload/8_Jogja Expense (30 Sept - 2 Oct).xlsx', 'silviana@ojk.go.id', '2016-10-20 08:27:54', NULL, NULL),
(0, 1, 'template.xls', 'upload/0_template.xls', 'silviana@ojk.go.id', '2016-10-20 09:27:35', NULL, NULL),
(0, 2, 'template.xlsx', 'upload/0_template.xlsx', 'silviana@ojk.go.id', '2016-10-20 09:28:58', NULL, NULL),
(0, 3, 'template_edit.xls', 'upload/0_template_edit.xls', 'silviana@ojk.go.id', '2016-10-20 09:28:58', NULL, NULL),
(0, 4, 'pivot.xlsx', 'upload/0_pivot.xlsx', 'silviana@ojk.go.id', '2016-10-20 09:28:58', NULL, NULL),
(8, 2, 'template_edit.xls', 'upload/8_template_edit.xls', 'silviana@ojk.go.id', '2016-10-20 09:31:07', NULL, NULL),
(8, 3, 'template.xlsx', 'upload/8_template.xlsx', 'silviana@ojk.go.id', '2016-10-20 09:31:07', NULL, NULL),
(4, 2, '1472694817_H02346.jpg', 'upload/4_1472694817_H02346.jpg', 'silviana@ojk.go.id', '2016-10-20 12:29:01', NULL, NULL),
(9, 1, '1472694817_H02346.jpg', 'upload/9_1472694817_H02346.jpg', 'addina@ojk.go.id', '2016-10-20 13:37:33', NULL, NULL),
(9, 2, 'pivot.xlsx', 'upload/9_pivot.xlsx', 'addina@ojk.go.id', '2016-10-20 13:37:33', NULL, NULL),
(9, 3, 'template_edit.xls', 'upload/9_template_edit.xls', 'addina@ojk.go.id', '2016-10-20 13:37:33', NULL, NULL),
(10, 1, 'pivot.xlsx', 'upload/10_pivot.xlsx', 'addina@ojk.go.id', '2016-10-20 13:41:03', NULL, NULL),
(10, 2, 'Jogja Expense (30 Sept - 2 Oct).xlsx', 'upload/10_Jogja Expense (30 Sept - 2 Oct).xlsx', 'addina@ojk.go.id', '2016-10-20 13:41:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `HDRMPKPS`
--

CREATE TABLE `HDRMPKPS` (
  `ID` int(11) NOT NULL,
  `VNOTADINAS` varchar(100) NOT NULL,
  `VKASPOS` text NOT NULL,
  `VLANGGAR` text NOT NULL,
  `VKET` text NOT NULL,
  `VSTAT` varchar(1) NOT NULL DEFAULT 'F',
  `VDISPOS` varchar(100) DEFAULT NULL,
  `VCREA` varchar(100) NOT NULL,
  `DCREA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VMODI` varchar(100) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HDRMPKPS`
--

INSERT INTO `HDRMPKPS` (`ID`, `VNOTADINAS`, `VKASPOS`, `VLANGGAR`, `VKET`, `VSTAT`, `VDISPOS`, `VCREA`, `DCREA`, `VMODI`, `DMODI`) VALUES
(1, '123123', '&lt;p&gt;FSFSDFSDF&lt;/p&gt;\r\n', '&lt;p&gt;SDFSDFS&lt;/p&gt;\r\n', '&lt;p&gt;SDFSDFSD&lt;/p&gt;\r\n', 'T', 'catatan catat', 'leo.naga@ojk.go.id', '2016-10-18 23:37:32', NULL, NULL),
(2, '123123/123/AD/2015', '&lt;p&gt;jaklsdjflka aksdjflka sdklfjas; fla;&lt;strong&gt; jsdlkfjalsdjfa; fsalkjdkfjskjdflsj dfsl dfkjslkd fjlsdfsdf&lt;/strong&gt;&lt;/p&gt;\r\n', '&lt;p [removed] center;&quot;&gt;kdfjlks dflksd fjlks fls &lt;strong&gt;dkfjsldfjksdjf&lt;/strong&gt; lsdf lsjd flksjdklf sklf jlsk fsd&lt;/p&gt;\r\n', '&lt;p&gt;kasjdlkfj sldkfjsl &lt;strong&gt;&lt;u&gt;&lt;em&gt;djfklsjdlkfj&lt;/em&gt;&lt;/u&gt;&lt;/strong&gt; slkdjflks flksjldkf skldj fkljslkdjflksj fsd&lt;/p&gt;\r\n', 'T', 'catatatatatatatan', 'leo.naga@ojk.go.id', '2016-10-19 07:09:56', NULL, NULL),
(3, '123/123/123/123/2016', '&lt;p&gt;Cobain bikin MPKP&lt;/p&gt;\r\n\r\n&lt;p&gt;kayaknya bisa sih bikin MPKP disini&lt;/p&gt;\r\n\r\n&lt;p&gt;tapi jadi nya gimana ya?&lt;/p&gt;\r\n\r\n&lt;p&gt;coba dulu ah&lt;/p&gt;\r\n', '&lt;p&gt;Pasal yang dilanggar&lt;/p&gt;\r\n\r\n&lt;p&gt;Pasal-pasal yang sekiranya dilanggar&lt;/p&gt;\r\n', '&lt;p&gt;Warbyasak&lt;/p&gt;\r\n', 'F', NULL, 'leo.naga@ojk.go.id', '2016-10-19 09:10:56', NULL, NULL),
(4, '001/KR3/000001/2016', '&lt;p&gt;Coba buat &lt;strong&gt;&lt;em&gt;MPKP&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Dokumen Pendukung MPKP&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Upload&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;Upload&lt;/em&gt;&lt;/p&gt;\r\n', '&lt;p&gt;Pasal &lt;em&gt;yang&lt;/em&gt; dilanggar&lt;/p&gt;\r\n\r\n&lt;p&gt;Pasal pasal yang sekiranya &lt;strong&gt;melanggar&lt;/strong&gt;&lt;/p&gt;\r\n', '&lt;p&gt;&lt;strong&gt;&lt;em&gt;Penyimpangan123&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;\r\n', 'F', NULL, 'silviana@ojk.go.id', '2016-10-19 09:27:10', NULL, NULL),
(5, '101/KR1/200002/2016', '&lt;p&gt;Kasus Posisi&lt;/p&gt;\r\n\r\n&lt;p&gt;Kasus posisinya apa.&lt;/p&gt;\r\n\r\n&lt;p&gt;5W + 1H&lt;/p&gt;\r\n\r\n&lt;p&gt;SIADI DEMAN BABI&lt;/p&gt;\r\n', '&lt;p&gt;Pelanggaran&lt;/p&gt;\r\n', '&lt;p&gt;Terang&lt;/p&gt;\r\n', 'F', NULL, 'leo.naga@ojk.go.id', '2016-10-19 09:39:19', NULL, NULL),
(6, '101/KOJKSolo/10/2016', '&lt;p&gt;Kasus posisi&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n &lt;li&gt;hal penting &lt;strong&gt;nomor&lt;/strong&gt; 1&lt;/li&gt;\r\n &lt;li&gt;kasus nomor 2 tentang ABC&lt;/li&gt;\r\n &lt;li&gt;segala hal terkait dll&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '&lt;p&gt;Ketentuan yang dilanggar adalah sebagai berikut:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n &lt;li&gt;ketentuan 1&lt;/li&gt;\r\n &lt;li&gt;ketentuan 2&lt;/li&gt;\r\n &lt;li&gt;ketentuan 3&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '&lt;p&gt;keterangan keterangan keterangan&lt;/p&gt;\r\n', 'T', 'akan diteruskan ke investigator Atwinariska dan Adrian', 'silviana@ojk.go.id', '2016-10-19 21:35:02', NULL, NULL),
(8, '111/222/10/2016/solo', 'deskripsi mengenai status kejadian perkara di BPR XXXYYY\n1. mengenai status karyawan\n2. pidana perbankan dan lain lain\n3. menambahkan data', '1. ketentuan satu\n2. ketentuan dua\n3. ketentuan tiga', 'keterangan hal hal yang keterangan', 'F', NULL, 'silviana@ojk.go.id', '2016-10-20 08:27:54', 'silviana@ojk.go.id', NULL),
(9, '111/222/333/444', '&lt;p&gt;kasus posisi pencurian&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n &lt;li&gt;pencurian uang&lt;/li&gt;\r\n &lt;li&gt;pencurian orang&lt;/li&gt;\r\n &lt;li&gt;nyuri kambing&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '&lt;p&gt;&lt;strong&gt;ketentuan&lt;/strong&gt; yang dilanggar&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n &lt;li&gt;ketentuan 1&lt;/li&gt;\r\n &lt;li&gt;ketentuan 2&lt;/li&gt;\r\n &lt;li&gt;ketentuan 3&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '', 'T', 'akan diteruskan ke investigator ardian', 'addina@ojk.go.id', '2016-10-20 13:37:33', NULL, NULL),
(10, '222/222/333/444', 'testeste', '123123123', 'fffffff', 'F', NULL, 'addina@ojk.go.id', '2016-10-20 13:41:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MSTMENUS`
--

CREATE TABLE `MSTMENUS` (
  `VMENUS` varchar(100) NOT NULL,
  `VPATH` varchar(100) DEFAULT NULL,
  `VCREA` varchar(30) DEFAULT NULL,
  `DCREA` datetime DEFAULT NULL,
  `VMODI` varchar(30) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL,
  `VDESC` varchar(100) DEFAULT NULL,
  `VBACKEND` varchar(100) DEFAULT NULL,
  `IORDER` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSTMENUS`
--

INSERT INTO `MSTMENUS` (`VMENUS`, `VPATH`, `VCREA`, `DCREA`, `VMODI`, `DMODI`, `VDESC`, `VBACKEND`, `IORDER`) VALUES
('IMP', 'index.php/backend/input_mpkp', NULL, NULL, NULL, NULL, 'INPUT MPKP', 'input_mpkp.php', 1),
('MON', 'index.php/backend/monitoring_mpkp', NULL, NULL, NULL, NULL, 'MONITORING MPKP', 'monitoring_mpkp.php', 3),
('UPL', 'index.php/backend/upload_mpkp', 'ADMIN', NULL, NULL, NULL, 'UPLOAD MPKP', 'upload_mpkp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `MSTROLEMENUS`
--

CREATE TABLE `MSTROLEMENUS` (
  `VMENUS` varchar(100) NOT NULL,
  `VCREA` varchar(30) DEFAULT NULL,
  `DCREA` datetime DEFAULT NULL,
  `VMODI` varchar(30) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL,
  `VROLE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSTROLEMENUS`
--

INSERT INTO `MSTROLEMENUS` (`VMENUS`, `VCREA`, `DCREA`, `VMODI`, `DMODI`, `VROLE`) VALUES
('IMP', NULL, NULL, NULL, NULL, 'ADM'),
('IMP', NULL, NULL, NULL, NULL, 'PNG'),
('MON', NULL, NULL, NULL, NULL, 'ADM'),
('MON', NULL, NULL, NULL, NULL, 'APR'),
('MON', NULL, NULL, NULL, NULL, 'INV'),
('MON', NULL, NULL, NULL, NULL, 'PNG'),
('UPL', NULL, NULL, NULL, NULL, 'ADM'),
('UPL', NULL, NULL, NULL, NULL, 'PNG');

-- --------------------------------------------------------

--
-- Table structure for table `MSTROLES`
--

CREATE TABLE `MSTROLES` (
  `VROLE` varchar(100) NOT NULL,
  `VDESC` varchar(100) DEFAULT NULL,
  `VCREA` varchar(30) DEFAULT NULL,
  `DCREA` datetime DEFAULT NULL,
  `VMODI` varchar(30) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSTROLES`
--

INSERT INTO `MSTROLES` (`VROLE`, `VDESC`, `VCREA`, `DCREA`, `VMODI`, `DMODI`) VALUES
('ADM', 'ADMIN', NULL, NULL, NULL, NULL),
('APR', 'APPROVAL DISPOSISI', NULL, NULL, NULL, NULL),
('INV', 'INVESTIGATOR', NULL, NULL, NULL, NULL),
('PNG', 'PENGAWAS', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MSTSETTINGS`
--

CREATE TABLE `MSTSETTINGS` (
  `VIDSETTING` varchar(10) NOT NULL,
  `VITEMID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MSTUSERROLES`
--

CREATE TABLE `MSTUSERROLES` (
  `VROLE` varchar(100) NOT NULL,
  `VEMAILS` varchar(30) NOT NULL,
  `VCREA` varchar(30) DEFAULT NULL,
  `DCREA` datetime DEFAULT NULL,
  `VMODI` varchar(30) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSTUSERROLES`
--

INSERT INTO `MSTUSERROLES` (`VROLE`, `VEMAILS`, `VCREA`, `DCREA`, `VMODI`, `DMODI`) VALUES
('ADM', 'leo.naga@ojk.go.id', NULL, NULL, NULL, NULL),
('APR', 'willy.willy@ojk.go.id', NULL, NULL, NULL, NULL),
('INV', 'ardian@ojk.go.id', NULL, NULL, NULL, NULL),
('INV', 'atwinariska@ojk.go.id', NULL, NULL, NULL, NULL),
('PNG', 'addina@ojk.go.id', NULL, NULL, NULL, NULL),
('PNG', 'silviana@ojk.go.id', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MSTUSERS`
--

CREATE TABLE `MSTUSERS` (
  `VEMAILS` varchar(30) NOT NULL,
  `VPASS` varchar(100) DEFAULT NULL,
  `VNAME` varchar(100) DEFAULT NULL,
  `VDEP` varchar(100) DEFAULT NULL,
  `VDIR` varchar(100) DEFAULT NULL,
  `VCREA` varchar(30) DEFAULT NULL,
  `DCREA` datetime DEFAULT NULL,
  `VMODI` varchar(30) DEFAULT NULL,
  `DMODI` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSTUSERS`
--

INSERT INTO `MSTUSERS` (`VEMAILS`, `VPASS`, `VNAME`, `VDEP`, `VDIR`, `VCREA`, `DCREA`, `VMODI`, `DMODI`) VALUES
('addina@ojk.go.id', '12345', 'ADDINA', 'DPB2', NULL, NULL, NULL, NULL, NULL),
('ardian@ojk.go.id', '12345', 'ARDIAN', 'DKIP', NULL, NULL, NULL, NULL, NULL),
('atwinariska@ojk.go.id', '12345', 'ATWINARISKA', 'DKIP', NULL, NULL, NULL, NULL, NULL),
('kadkip@ojk.go.id', '12345', 'KADEP DKIP', 'DKIP', NULL, NULL, NULL, NULL, NULL),
('leo.naga@ojk.go.id', '12345', 'LEO NAGA PUTRA', 'DPSI', NULL, NULL, NULL, NULL, NULL),
('silviana@ojk.go.id', '12345', 'SILVIANA', 'DPB1', NULL, NULL, NULL, NULL, NULL),
('willy.willy@ojk.go.id', '12345', 'WILLY', 'DKIP', '1111', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DTLMPKPS`
--
ALTER TABLE `DTLMPKPS`
  ADD PRIMARY KEY (`ID_HDRMPKPS`,`IDDOC`);

--
-- Indexes for table `HDRMPKPS`
--
ALTER TABLE `HDRMPKPS`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `VNOTADINAS` (`VNOTADINAS`);

--
-- Indexes for table `MSTMENUS`
--
ALTER TABLE `MSTMENUS`
  ADD PRIMARY KEY (`VMENUS`),
  ADD UNIQUE KEY `VMENUS` (`VMENUS`);

--
-- Indexes for table `MSTROLEMENUS`
--
ALTER TABLE `MSTROLEMENUS`
  ADD PRIMARY KEY (`VMENUS`,`VROLE`);

--
-- Indexes for table `MSTROLES`
--
ALTER TABLE `MSTROLES`
  ADD PRIMARY KEY (`VROLE`);

--
-- Indexes for table `MSTSETTINGS`
--
ALTER TABLE `MSTSETTINGS`
  ADD PRIMARY KEY (`VIDSETTING`,`VITEMID`);

--
-- Indexes for table `MSTUSERROLES`
--
ALTER TABLE `MSTUSERROLES`
  ADD PRIMARY KEY (`VROLE`,`VEMAILS`);

--
-- Indexes for table `MSTUSERS`
--
ALTER TABLE `MSTUSERS`
  ADD PRIMARY KEY (`VEMAILS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DTLMPKPS`
--
ALTER TABLE `DTLMPKPS`
  MODIFY `IDDOC` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `HDRMPKPS`
--
ALTER TABLE `HDRMPKPS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
