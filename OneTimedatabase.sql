-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for logintest
CREATE DATABASE IF NOT EXISTS `logintest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `logintest`;

-- Dumping structure for table logintest.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`user_id`, `username`, `password`, `firstname`) VALUES
	(1, 'jacob', '098f6bcd4621d373cade4e832627b4f6', 'jacob'),
	(2, 'brian', '05678f6bcd4621d373cade4e832627b4f6', 'brian'),
	(3, 'charity', '08f667bcd4621d373cade4e832627b4f6', 'maziki'),
	(4, 'test', 'testing', 'tested');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table logintest.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.articles: ~0 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table logintest.blog_members
CREATE TABLE IF NOT EXISTS `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.blog_members: ~8 rows (approximately)
/*!40000 ALTER TABLE `blog_members` DISABLE KEYS */;
INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
	(2, 'jacob', '$2y$10$YauE1BPsiko/LqLwD4NH8upmlYodW0LfQhCY178I6u.PxUiiv3WNO', 'jacobchisale@cct.com'),
	(3, 'test', '$2y$10$.eeV6BV2o6ZAgHOCYYaOkuQYzKj/5mrxCdRiYaiYqRt4WsPbp5Qr6', 'test@cct.com'),
	(4, 'jacob', '$2y$10$xYAqfpbICUR6V64hlg523OiuzP.ZpNRjoQtgl6voSeNaw4AW6vLli', 'j.chisale@yahoo.com'),
	(5, 'testing', '$2y$10$fc0RHwQrihKAJQ/vfRogqu.0Su9C92CQ0CbtmWkWFuu9GZtvQKnru', 'testing@project.com'),
	(6, 'mphatso', '$2y$10$8EhwzgcuWzrdDjlitHfZOuwjebkOjXnY3LxAyUInwi9ff9p2Ty/I.', 'mphatso@yahoo.com'),
	(7, 'bryan', '$2y$10$fbwGg0ya5sCMfTElSQDD0e3DYexO84AoliQPSYEzJax4bvwrTD41e', 'bryan@yahoo.com'),
	(8, 'admin', '$2y$10$u8ON/2rh9SH6seCC.wXwleMl1PcTWmk5IwR5xEQnLVgwl4mucq476', 'admin@cctcollege.com'),
	(9, 'tamara', '$2y$10$6u9V7wF9.CG7gyE54cKJz.N0A2cUlvB4r661FNbLAzg93SbBS7kUa', 't@2.com');
/*!40000 ALTER TABLE `blog_members` ENABLE KEYS */;

-- Dumping structure for table logintest.blog_posts
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` varchar(255) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.blog_posts: ~9 rows (approximately)
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
	(9, 'Bus diversion', '<p>Due to marathon held on 31 juyl 2018&nbsp;</p>', '<p><a title="Wether" href="https://www.accuweather.com/en/ie/dublin/207931/weather-forecast/207931" target="_blank">be ahead of the weather</a>&nbsp;service of buses will be interupted due to marathon that will take place in oconell street on 31 of july n', '2018-06-27 17:03:38'),
	(10, 'Back Door Policy', '<p>back to is for emergecy exit only</p>', '<p>This is very importatnt back door should be used only in emergency situations only anyone found using it not for emergency purpose will be discplined&nbsp;</p>\r\n<p>Thank you</p>', '2018-06-27 17:07:04'),
	(11, 'Staff Metting', '<p>upcomign summer sale will start on 11 of july&nbsp;</p>', '<p>Staff meeting will be held in room 02 on 3rd July to discuss the upcoming summer sale. as you all know this will be very busy period but management would lkie evryone to attend</p>', '2018-06-27 19:26:51'),
	(12, 'tamara', '<p>cct 2015!</p>', '<p>graduation</p>', '2018-07-27 13:49:40'),
	(13, 'Holiday Bookings', '<p><em>You can book an appointment up to 10 weeks early. A small number of extra near-term appointments are also released every day at 14:30. If you can\'t book one straightaway, keep trying. It may take 2 or 3 days to find one.</em></p>\r\n<p>&nbsp;</p>', '<div class="hatnote navigation-not-searchable">ES" redirects here. For other uses, see&nbsp;<a class="mw-redirect mw-disambig" title="NES (disambiguation)" href="https://en.wikipedia.org/wiki/NES_(disambiguation)">NES (disambiguation)</a>.</div>\r\n<p>&lt;d', '2018-07-27 16:00:52'),
	(14, 'Back Door Policy', '<p>After 9am no one is allowed to use back door</p>', '<p>It&rsquo;s estimated that that employee theft is responsible for 75% of all inventory shortages:&nbsp; items ranging from food and beverage to big-ticket items including company laptops and other electronics.<br /><br />Because of a restaurant\'s hectic', '2018-08-04 19:47:59'),
	(16, 'Maximum Working Hours', '<p>&nbsp;</p>\r\n<p>The Organisation of Working Time Act 1997 states that the maximum average working week for most employees cannot exceed 48 hours. This does not mean that a working week can never exceed 48 hours; it is the average that is important.</p>', '<p>The average is calculated in one of the following ways:<br /> &bull;Over 4 months for most employees<br /> &bull;Over 6 months for employees working in the security industry, hospitals, prisons, gas/electricity, airport/docks, agriculture and employees', '2018-08-07 12:19:15'),
	(17, 'running late', 'am running 20mins late', 'jhjkk; ljlhjlkl bjljnlljknlknl bljj', '2018-10-03 10:36:08'),
	(18, 'CCT', '<p>Graduation 2018</p>', '<p>Dress code is match</p>', '2018-10-03 11:15:33'),
	(19, 'test', '<p>test</p>', '<p>we are testing</p>', '2019-07-24 08:58:55');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;

-- Dumping structure for table logintest.holidays
CREATE TABLE IF NOT EXISTS `holidays` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `employee` varchar(50) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `Holiday_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.holidays: ~9 rows (approximately)
/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
INSERT INTO `holidays` (`Id`, `employee`, `startdate`, `enddate`, `Holiday_status`) VALUES
	(4, 'Brian Phillips', '2018-05-27', '0000-00-00', 'pending1'),
	(5, 'Ben Chintedza', '2018-06-10', '2018-06-11', 'denied'),
	(17, 'test tseting', '2018-09-09', '2018-09-09', 'approved'),
	(18, 'test tseting', '2018-09-09', '2018-09-09', 'approved'),
	(21, '123445', '2018-09-09', '2018-09-09', 'denied'),
	(24, 'gregh south', '0000-00-00', '0000-00-00', 'Pending'),
	(26, 'moses makawa', '2018-08-07', '2018-08-07', 'Pending'),
	(28, 'jacob chsiale', '2018-08-13', '2018-08-19', 'approved'),
	(29, 'Charity Maziki', '2018-08-26', '2018-08-18', 'approved'),
	(30, '123445', '2019-04-08', '2019-04-15', ''),
	(31, NULL, '0000-00-00', NULL, 'Pending');
/*!40000 ALTER TABLE `holidays` ENABLE KEYS */;

-- Dumping structure for table logintest.members
CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `resetToken` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `resetComplete` varchar(3) COLLATE utf8mb4_bin DEFAULT 'No',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table logintest.members: 1 rows
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
	(2, 'jacob', '$2y$10$bbq/QpvHejx9F5euqrCpP.ZbFNzwihMncpM6A2W.HvLihprLEu3ea', 'chisalejacob@gmail.com', 'yes', 'd4d76e4e2151718d53e376f083298b5c8cc9293865dc176df4087d66948e2ad9', 'No');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Dumping structure for table logintest.post
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_decscription` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.post: ~0 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`post_id`, `post_title`, `post_decscription`, `post_content`, `post_date`, `post_image`) VALUES
	(1, 'End of Season', 'coming soon', '<p>end of&nbsp;season is here holla</p>\r\n', '2018-03-09', 'images/96953e5b6c.png'),
	(2, 'Health and well-being At Work ', 'Meeting to be held on 22nd May 2018 \r\nClayton hotel D 15 14:30\r\nEveryone to attend ', '<p>The month of October we celebrate health&nbsp; and well Being At Work as all we know this is very important</p>\r\n', '2018-04-27', 'images/001d4d8949.jpg'),
	(3, 'Weather Alert', 'Bad weather on the way and shop is closed for business tomorrow', '<p>Due to red warning flagged by the weather forecast, we asking all&nbsp; staff not to come to work tomorrow this for safety reasons</p>\r\n', '2018-04-28', 'images/78b575aa4f.jpg'),
	(4, 'meeting', 'meeting', '<p>whta happen here bfore</p>\r\n', '2018-05-25', 'images/6e511e2760.jpg');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table logintest.query
CREATE TABLE IF NOT EXISTS `query` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `query_subject` varchar(250) NOT NULL,
  `query_text` text NOT NULL,
  `query_status` int(1) NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.query: ~4 rows (approximately)
/*!40000 ALTER TABLE `query` DISABLE KEYS */;
INSERT INTO `query` (`query_id`, `query_subject`, `query_text`, `query_status`) VALUES
	(1, 'login', 'i cant login into my acc', 0),
	(2, 'ssdsdsw', 'jk;m;ml/m./l.,,', 0),
	(3, 'qeqeqweqwe', 'wqewqewqewqewqe', 0),
	(4, 'why', 'is is not happening', 0);
/*!40000 ALTER TABLE `query` ENABLE KEYS */;

-- Dumping structure for table logintest.rota
CREATE TABLE IF NOT EXISTS `rota` (
  `sched_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `week_start` varchar(50) NOT NULL,
  `monday` varchar(50) NOT NULL,
  `tuesday` varchar(50) NOT NULL,
  `wednesday` varchar(50) NOT NULL,
  `thursday` varchar(50) NOT NULL,
  `friday` varchar(50) NOT NULL,
  `saturday` varchar(50) NOT NULL,
  `sunday` varchar(50) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.rota: ~8 rows (approximately)
/*!40000 ALTER TABLE `rota` DISABLE KEYS */;
INSERT INTO `rota` (`sched_id`, `employee_name`, `week_start`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
	(1, 'Jacob Chisale', '29/05/2018', '17:00 - 23:00', '11:00 - 19:00', 'off', 'off', '23:00 - 07:00', '19:00 - 23:00', '11:00 - 19:00'),
	(2, 'Ben Chintedza', '29/05/2018', 'off', 'off', '11:00 - 19:00', '23:00 - 07:00', '19:00 - 23:00', '11:00 - 19:00', '07:00 - 15:00'),
	(3, 'Charity Maziki', '29/05/2018', '07:00 - 15:00', '07:00 - 15:00', '09:00 - 17:00', '11:00 - 19:00', 'off', 'off', '23:00 - 07:00'),
	(4, 'moses', '04/06/2018', 'off', 'off', '12:00 - 20:00', '13:00 - 21:00', '09:00 - 17:00', 'off', 'off'),
	(5, 'Jacob chisale 2', '04/06/2018', 'off', 'off', '12:00 - 20:00', '13:00 - 21:00', 'off', 'off', 'off'),
	(6, 'mpha phiri', '30/07/2018', 'off', '08:00-08:00', '12:00 - 20:00', '13:00 - 21:00', '09:00 - 17:00', '09:00-1700', 'off'),
	(7, 'Jacob Chisale', '2018-08-13', 'off', 'off', '12:00 - 20:00', '13:00 - 21:00', '09:00 - 17:00', 'off', 'off'),
	(8, 'Mphatso Chintedza', '2018-08-13', 'holiday', 'holiday', 'Holiday', 'holiday', 'holiday', 'holiday', 'holiday'),
	(9, 'Tamara Jere', '2018-08-12', 'holiday', 'holiday', 'Holiday', 'holiday', 'holiday', 'holiday', 'holiday'),
	(10, 'Tamara Jere', '2019-04-08', '08:00-16:00', 'off', 'off', 'off', 'off', 'off', 'off');
/*!40000 ALTER TABLE `rota` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_admin
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `Admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Last_Name` varchar(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_admin: 1 rows
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` (`Admin_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Username`, `Password`, `Location`) VALUES
	(28, 'Windam', 'Jared', 'Yap', 'admin', 'admin', 'upload/1292242_605321739514625_1977251878_o.jpg');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_communication_administration
CREATE TABLE IF NOT EXISTS `tbl_communication_administration` (
  `CFA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CFA_Subject` varchar(100) NOT NULL,
  `CFA_To` varchar(100) NOT NULL,
  `CFA_From` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Date_Received` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`CFA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_communication_administration: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_communication_administration` DISABLE KEYS */;
INSERT INTO `tbl_communication_administration` (`CFA_ID`, `CFA_Subject`, `CFA_To`, `CFA_From`, `Date`, `Date_Received`, `File_Name`, `Description`, `Location`) VALUES
	(1, 'IS_311', 'Jared Windam', 'Rodzil Camato', 'October/5/2013', 'October/11/2013', 'Jared', 'Word', 'upload_communication_for_administration/JUST GIVE ME REASON by PINK.docx'),
	(2, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'admin/upload_communication_for_administration/My Apple boycott is over.docx'),
	(3, 'pPpkKk', 'h', 'b', 'b', 'b', 'h', 'h', 'upload_communication_for_administration/Lesson_1-Nine_Knowledge_Area_Defintions.pdf');
/*!40000 ALTER TABLE `tbl_communication_administration` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_communication_students
CREATE TABLE IF NOT EXISTS `tbl_communication_students` (
  `CFS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(100) NOT NULL,
  `CFS_To` varchar(100) NOT NULL,
  `CFS_From` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Date_Received` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`CFS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_communication_students: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_communication_students` DISABLE KEYS */;
INSERT INTO `tbl_communication_students` (`CFS_ID`, `Subject`, `CFS_To`, `CFS_From`, `Date`, `Date_Received`, `File_Name`, `Description`, `Location`) VALUES
	(2, 'IS 311', 'Jared Windam', 'Kevin Lorayna', 'October/23/2013', 'October/16/2013', 'Jared', 'Word', 'upload_communication_for_students/594921_File_JUST GIVE ME REASON by PINK.docx'),
	(3, 'IS 312', 'Jared_Windam', 'Kevin_Lorayna', 'October/16/2013', 'October/23/2013', 'Polly', 'Word', 'upload_communication_for_students/693339_File_JUST GIVE ME REASON by PINK.docx'),
	(4, 'aaaaaaaaaaaaaaa', 's', 's', 's', 's', 's', 's', 'upload_communication_for_students/694942_File_860887_File_Rhea Jane Y. Windam ( Curriculum Vitae) (6'),
	(5, 's', 's', 's', 's', 's', 'g', 'g', 'upload_communication_for_students/350515_File_JUST GIVE ME REASON by PINK.docx'),
	(6, 'g', 'g', 'g', 'g', 'h', 'h', 'h', 'upload_communication_for_students/JUST GIVE ME REASON by PINK.docx'),
	(7, 'weeqeq', 'e', 'e', 'e', 'e', 'ee', 'e', 'admin/upload_communication_for_students/My Apple boycott is over.docx');
/*!40000 ALTER TABLE `tbl_communication_students` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_download_log
CREATE TABLE IF NOT EXISTS `tbl_download_log` (
  `Log_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Download_By` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  PRIMARY KEY (`Log_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_download_log: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_download_log` DISABLE KEYS */;
INSERT INTO `tbl_download_log` (`Log_ID`, `Download_By`, `File_Name`, `Date`) VALUES
	(1, '', 'upload_memorandum/227188_File_Application Letter ( Rhea Jane Windam).docx', '2013-10-15 02:49:24'),
	(2, '', 'upload_memorandum/227188_File_Application Letter ( Rhea Jane Windam).docx', '2013-10-15 02:50:26'),
	(3, '', 'upload_memorandum/227188_File_Application Letter ( Rhea Jane Windam).docx', '2013-10-15 02:51:45'),
	(4, '', 'upload_memorandum/982754_File_JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:51:47'),
	(5, '6', 'upload_memorandum/JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:53:02'),
	(6, '6', 'upload_memorandum/JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:53:41'),
	(7, '6', 'upload_memorandum/_JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:53:43'),
	(8, '6', 'admin/upload_memorandum/Liezel Juanites Daquila.docx (Resume).docx', '2013-10-15 02:56:59');
/*!40000 ALTER TABLE `tbl_download_log` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_download_log_admin
CREATE TABLE IF NOT EXISTS `tbl_download_log_admin` (
  `Log_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Download_By` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  PRIMARY KEY (`Log_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_download_log_admin: 16 rows
/*!40000 ALTER TABLE `tbl_download_log_admin` DISABLE KEYS */;
INSERT INTO `tbl_download_log_admin` (`Log_ID`, `Download_By`, `File_Name`, `Date`) VALUES
	(152, '26', 'admin/upload_memorandum/Liezel Juanites Daquila.docx (Resume).docx', '2013-10-15 09:28:21'),
	(151, '26', 'admin/upload_memorandum/My Apple boycott is over.docx', '2013-10-15 09:28:20'),
	(150, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:16'),
	(149, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:15'),
	(148, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:14'),
	(147, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:14'),
	(146, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:13'),
	(145, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 09:28:12'),
	(137, '2', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 02:29:49'),
	(138, '26', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 02:31:20'),
	(139, '', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx', '2013-10-15 02:46:36'),
	(140, '', 'upload_memorandum/214126_File_JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:47:49'),
	(141, '', 'upload_memorandum/982754_File_JUST GIVE ME REASON by PINK.docx', '2013-10-15 02:47:51'),
	(142, '26', 'admin/upload_memorandum/Liezel Juanites Daquila.docx (Resume).docx', '2013-10-15 02:56:56'),
	(143, '', 'admin/upload_resolution/Application Letter ( Rhea Jane Windam).docx', '2013-10-15 03:00:39'),
	(144, '26', 'upload_communication_for_administration/Lesson_1-Nine_Knowledge_Area_Defintions.pdf', '2013-10-15 08:57:30');
/*!40000 ALTER TABLE `tbl_download_log_admin` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_external_communication
CREATE TABLE IF NOT EXISTS `tbl_external_communication` (
  `EC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Invitation` varchar(100) NOT NULL,
  `EC_To` varchar(100) NOT NULL,
  `EC_From` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Date_Received` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`EC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_external_communication: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_external_communication` DISABLE KEYS */;
INSERT INTO `tbl_external_communication` (`EC_ID`, `Invitation`, `EC_To`, `EC_From`, `Date`, `Date_Received`, `Subject`, `File_Name`, `Description`, `Location`) VALUES
	(1, 'k', 'k', 'k', '2013-10-15 00:01:08', 'k', 'k', 'k', 'k', 'upload_external_communication/961704_File_My Apple boycott is over.docx'),
	(2, 'j', 'j', 'j', '2013-10-15 00:02:43', 'j', 'j', 'j', 'j', 'upload_external_communication/My Apple boycott is over.docx'),
	(3, 's', 's', 's', 'October/18/2013', 'October/3/2013', 's', 's', 's', 'upload_external_communication/download.docx'),
	(4, 'w', 'w', 'w', 'w', 'October/10/2013', 'w', 'we', 'w', 'admin/upload_external_communication/JUST GIVE ME REASON by PINK.docx');
/*!40000 ALTER TABLE `tbl_external_communication` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_login
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `User_ID` int(100) NOT NULL AUTO_INCREMENT,
  `Last_Name` varchar(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_login: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
INSERT INTO `tbl_login` (`User_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Gender`, `Username`, `Password`, `Status`, `Location`) VALUES
	(5, 'Windam', 'Jamaica', 'Jimenez', 'Male', 'admin', 'admin', 'Blocked', 'upload/4411701.png'),
	(6, 'Windam', 'Jared', 'Yap', 'Male', 'jared', 'jam', 'Approved', 'upload/188462_174323269286973_6850638_n.jpg');
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_memorandum
CREATE TABLE IF NOT EXISTS `tbl_memorandum` (
  `Memorandum_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Memorandum_Number` int(100) NOT NULL,
  `Series` varchar(100) NOT NULL,
  `Memo_To` varchar(100) NOT NULL,
  `Memo_From` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`Memorandum_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_memorandum: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_memorandum` DISABLE KEYS */;
INSERT INTO `tbl_memorandum` (`Memorandum_ID`, `Memorandum_Number`, `Series`, `Memo_To`, `Memo_From`, `Date`, `File_Name`, `Description`, `Location`) VALUES
	(3, 9, '2013', 'Jared Windam', 'Ton_Jacobo', 'October/26/2013', 'Ms.Morante', 'Word', 'upload_memorandum/227188_File_Application Letter ( Rhea Jane Windam).docx'),
	(13, 0, 'k', 'k', 'k', 'k', 'k', 'k', 'upload_memorandum/860887_File_Rhea Jane Y. Windam ( Curriculum Vitae).docx'),
	(14, 2213, '2013', 'Jared Windam', 'Rodzil Camato', 'October/26/2013', 'Jared', 'Word', 'upload_memorandum/214126_File_JUST GIVE ME REASON by PINK.docx'),
	(15, 3354, '2012', 'Jared Widam', 'Rodzil Camato', 'October/18/2013', 'Jared_Windam', 'Excel', 'upload_memorandum/982754_File_JUST GIVE ME REASON by PINK.docx'),
	(16, 9123, '2013', 'Jared Windam', 'Rodzil Camato', 'October/4/2013', 'Jam', 'Word', 'upload_memorandum/_JUST GIVE ME REASON by PINK.docx'),
	(17, 8143, '2013', 'Jared Windam', 'Rodzil Camato', 'October/19/2013', 'Ton', 'Word', 'upload_memorandum/JUST GIVE ME REASON by PINK.docx'),
	(18, 0, 'q', 'q', 'q', 'q', 'q', 'q', 'admin/upload_memorandum/My Apple boycott is over.docx'),
	(19, 0, 'p', 'p', 'p', 'p', 'p', 'p', 'admin/upload_memorandum/Liezel Juanites Daquila.docx (Resume).docx');
/*!40000 ALTER TABLE `tbl_memorandum` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_project_proposal
CREATE TABLE IF NOT EXISTS `tbl_project_proposal` (
  `PP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Target_Participants` varchar(100) NOT NULL,
  `Budgetary_Requirements` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Date_Received` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`PP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_project_proposal: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_project_proposal` DISABLE KEYS */;
INSERT INTO `tbl_project_proposal` (`PP_ID`, `Target_Participants`, `Budgetary_Requirements`, `Date`, `Date_Received`, `File_Name`, `Description`, `Location`) VALUES
	(1, 'p', 'p', 'p', 'p', 'p', 'p', 'admin/upload_project_proposal/525767_File_My Apple boycott is over.docx');
/*!40000 ALTER TABLE `tbl_project_proposal` ENABLE KEYS */;

-- Dumping structure for table logintest.tbl_resolution
CREATE TABLE IF NOT EXISTS `tbl_resolution` (
  `Resolution_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(100) NOT NULL,
  `Data` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Date_Received` varchar(100) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`Resolution_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.tbl_resolution: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_resolution` DISABLE KEYS */;
INSERT INTO `tbl_resolution` (`Resolution_ID`, `Subject`, `Data`, `Date`, `Date_Received`, `File_Name`, `Description`, `Location`) VALUES
	(1, 'k', 'K', 'K', 'K', 'K', 'K', 'upload_resolution/622739_File_JUST GIVE ME REASON by PINK.docx'),
	(2, 'd', 'd', 'd', 'd', 'K', 'd', 'upload_resolution/JUST GIVE ME REASON by PINK.docx'),
	(3, 'j', 'k', 'k', 'k', 'K', 'k', 'upload_resolution/JUST GIVE ME REASON by PINK.docx'),
	(4, 'e', 'e', 'e', 'e', 'e', 'e', 'admin/upload_resolution/Application Letter ( Rhea Jane Windam).docx');
/*!40000 ALTER TABLE `tbl_resolution` ENABLE KEYS */;

-- Dumping structure for table logintest.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table logintest.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
	(1, 'jacob', 'j.chisale@yahoo.com', '63087ae8cbc3525177ad5a5f2cfe7aad'),
	(2, 'bryan', 'bryan@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
	(3, 'admin', 'admin@cctcollege.com', 'a66abb5684c45962d887564f08346e8d'),
	(4, 'jacob', 'admin@cctcollege.com', '645671f2bdd10442fcc423164c05c155'),
	(5, 'admin2', 'j.chisale@yahoo.com12', 'e10adc3949ba59abbe56e057f20f883e'),
	(6, 'jacob', '07002@ie.mcd.com', '822701251274e9e30c516bbd63e36e38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
