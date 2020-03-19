SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `training` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `tr_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสุกล',
  `tr_nname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเล่น',
  `tr_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยุ่',
  `tr_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tr_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tr_facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tr_times` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่กรอกข้อมุล',
  `tr_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tr_birthday` date NOT NULL COMMENT 'วันเกิด',
  `tr_agency` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หน่วยงาน',
  `tr_position` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ตำแหน่ง',
  `tr_fax` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'โทรสาร',
  `tr_line` int(200) NOT NULL COMMENT 'line_id',
  PRIMARY KEY (`tr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
