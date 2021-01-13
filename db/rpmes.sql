-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2019 at 07:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpmes`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `SP_AddAct`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddAct` (IN `InputID_User` VARCHAR(11), IN `InputIcon` VARCHAR(20), IN `InputMessage` TEXT, IN `InputDate` VARCHAR(50))  BEGIN
INSERT INTO `ACT`(`ID_User`, `Icon`, `Message`, `Date`) VALUES(InputID_User,InputIcon,InputMessage,InputDate);
END$$

DROP PROCEDURE IF EXISTS `SP_AddAdmin`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddAdmin` (IN `INputFName` VARCHAR(25), IN `INputMName` VARCHAR(25), IN `INputLName` VARCHAR(25), IN `INpuToffice` VARCHAR(100), IN `INputAgency_Head` VARCHAR(60), IN `INputEmail` VARCHAR(50), IN `INputUName` VARCHAR(200), IN `INputPwd` VARCHAR(400), IN `INputPwd_Rec` VARCHAR(200), IN `INputAvatar` VARCHAR(200))  BEGIN
 SET INputPwd=MD5(INputPwd);
 INSERT INTO `ADMIN`(`FName`, `MName`, `LName`, `Agency_Head`, `Office`, `Email`, `type`, `UName`, `Pwd`, `Pwd_rec`, `Avatar`)
 VALUES(INputFName,INputMName,INputLName,INpuToffice,INputAgency_Head,INputEmail,INputUName,INputPwd,INputPwd_Rec,INputAvatar);
END$$

DROP PROCEDURE IF EXISTS `SP_AddAlert_User`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddAlert_User` (IN `InputIDUser` VARCHAR(15))  BEGIN
INSERT INTO `ALERT_USER`(`ID_User`) VALUES();
END$$

DROP PROCEDURE IF EXISTS `SP_AddNotification`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddNotification` (IN `InputIDUser` INT(11), IN `InputNotif` INT(11), IN `InputDate` VARCHAR(100), IN `InputIcon` VARCHAR(100))  BEGIN
INSERT INTO `NOTIFICATION`(`ID_User`, `Notification`, `Date`, `Icon`) VALUES(InputIDUser,InputNotif,InputDate,InputIcon);
END$$

DROP PROCEDURE IF EXISTS `SP_AddRet_Form1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddRet_Form1` (IN `InputID_admin` VARCHAR(11), IN `InputID_User` INT(11), IN `Inputfy` VARCHAR(4), IN `InputAgency` TEXT, IN `InputForm1_a` TEXT, IN `InputForm1_b` TEXT, IN `InputForm1_c` TEXT, IN `InputForm1_d` TEXT, IN `InputForm1_e` TEXT, IN `InputForm1_Mm_From` VARCHAR(11), IN `InputForm1_dd_From` VARCHAR(11), IN `InputForm1_yy_From` VARCHAR(11), IN `InputForm1_Mm_to` VARCHAR(11), IN `InputForm1_dd_to` VARCHAR(11), IN `InputForm1_yy_to` VARCHAR(11), IN `InputFS_total` VARCHAR(500), IN `InputFS_Jan` VARCHAR(200), IN `InputFS_Feb` VARCHAR(200), IN `InputFS_Mar` VARCHAR(200), IN `InputFS_Apr` VARCHAR(200), IN `InputFS_May` VARCHAR(200), IN `InputFS_Jun` VARCHAR(200), IN `InputFS_Jul` VARCHAR(200), IN `InputFS_Aug` VARCHAR(200), IN `InputFS_Sep` VARCHAR(200), IN `InputFS_Oct` VARCHAR(200), IN `InputFS_Nov` VARCHAR(200), IN `InputFS_Dec` VARCHAR(200), IN `InputPercentage_Total` VARCHAR(200), IN `InputPercentage_Jan` VARCHAR(100), IN `InputPercentage_Feb` VARCHAR(100), IN `InputPercentage_Mar` VARCHAR(100), IN `InputPercentage_Apr` VARCHAR(100), IN `InputPercentage_May` VARCHAR(100), IN `InputPercentage_Jun` VARCHAR(100), IN `InputPercentage_Jul` VARCHAR(100), IN `InputPercentage_Aug` VARCHAR(100), IN `InputPercentage_Sep` VARCHAR(100), IN `InputPercentage_Oct` VARCHAR(100), IN `InputPercentage_Nov` VARCHAR(100), IN `InputPercentage_Dec` VARCHAR(100), IN `InputOI_Jan` TEXT, IN `InputOI_Feb` TEXT, IN `InputOI_Mar` TEXT, IN `InputOI_Apr` TEXT, IN `InputOI_May` TEXT, IN `InputOI_Jun` TEXT, IN `InputOI_Jul` TEXT, IN `InputOI_Aug` TEXT, IN `InputOI_Sep` TEXT, IN `InputOI_Oct` TEXT, IN `InputOI_Nov` TEXT, IN `InputOI_Dec` TEXT, IN `InputOI_Total` VARCHAR(600), IN `InputEG_M_Jan` VARCHAR(200), IN `InputEG_M_Feb` VARCHAR(200), IN `InputEG_M_Mar` VARCHAR(200), IN `InputEG_M_Apr` VARCHAR(200), IN `InputEG_M_May` VARCHAR(200), IN `InputEG_M_Jun` VARCHAR(200), IN `InputEG_M_Jul` VARCHAR(200), IN `InputEG_M_Aug` VARCHAR(200), IN `InputEG_M_Sep` VARCHAR(200), IN `InputEG_M_Oct` VARCHAR(200), IN `InputEG_M_Nov` VARCHAR(200), IN `InputEG_M_Dec` VARCHAR(200), IN `InputEG_M_Total` VARCHAR(200), IN `InputEG_F_Jan` VARCHAR(200), IN `InputEG_F_Feb` VARCHAR(200), IN `InputEG_F_Mar` VARCHAR(200), IN `InputEG_F_Apr` VARCHAR(200), IN `InputEG_F_May` VARCHAR(200), IN `InputEG_F_Jun` VARCHAR(200), IN `InputEG_F_Jul` VARCHAR(200), IN `InputEG_F_Aug` VARCHAR(200), IN `InputEG_F_Sep` VARCHAR(200), IN `InputEG_F_Oct` VARCHAR(200), IN `InputEG_F_Nov` VARCHAR(200), IN `InputEG_F_Dec` VARCHAR(200), IN `InputEG_F_Total` VARCHAR(200), IN `InputSubmitted_by` VARCHAR(200), IN `InputSubmitted_Mm` VARCHAR(400), IN `InputSubmitted_dd` VARCHAR(400), IN `InputSubmitted_yy` VARCHAR(400), IN `InputOffice` VARCHAR(200), IN `InputAgency_Head` VARCHAR(200), IN `InputConfirmed` INT(1), IN `Inputpro_Name` TEXT)  BEGIN
 INSERT INTO `Ret_Form1`(
`ID_admin`, `ID_User`, `fy`, `Agency`, `Form1_a`, `Form1_b`, `Form1_c`, `Form1_d`,  `Form1_e`,
`Form1_Mm_From`, `Form1_dd_From`, `Form1_yy_From`, `Form1_Mm_to`, `Form1_dd_to`, `Form1_yy_to`,
`FS_total`,`FS_Jan`, `FS_Feb`, `FS_Mar`, `FS_Apr`, `FS_May`, `FS_Jun`, `FS_Jul`, `FS_Aug`, `FS_Sep`, `FS_Oct`, `FS_Nov`, `FS_Dec`,`Percentage_Total`,
`Percentage_Jan`, `Percentage_Feb`, `Percentage_Mar`, `Percentage_Apr`, `Percentage_May`, `Percentage_Jun`, `Percentage_Jul`,
`Percentage_Aug`, `Percentage_Sep`, `Percentage_Oct`, `Percentage_Nov`, `Percentage_Dec`,
`OI_Jan`, `OI_Feb`, `OI_Mar`, `OI_Apr`, `OI_May`, `OI_Jun`, `OI_Jul`, `OI_Aug`,
`OI_Sep`, `OI_Oct`, `OI_Nov`, `OI_Dec`,`OI_Total`,`EG_M_Jan`, `EG_M_Feb`, `EG_M_Mar`, `EG_M_Apr`, `EG_M_May`, `EG_M_Jun`, `EG_M_Jul`, `EG_M_Aug`, `EG_M_Sep`, `EG_M_Oct`, `EG_M_Nov`, `EG_M_Dec`,`EG_M_Total`,`EG_F_Jan`, `EG_F_Feb`, `EG_F_Mar`, `EG_F_Apr`, `EG_F_May`, `EG_F_Jun`, `EG_F_Jul`, `EG_F_Aug`, `EG_F_Sep`, `EG_F_Oct`, `EG_F_Nov`, `EG_F_Dec`,
`EG_F_Total`,`Submitted_by`,`Submitted_Mm`, `Submitted_dd`, `Submitted_yy`, `Office`, `Agency_Head`, `Confirmed`, `pro_Name`				
)
VALUES
(
 InputID_admin,InputID_User,Inputfy,InputAgency,InputForm1_a,InputForm1_b,InputForm1_c,
 InputForm1_d,InputForm1_e,
 InputForm1_Mm_From,InputForm1_dd_From,InputForm1_yy_From,InputForm1_Mm_to,
 InputForm1_dd_to,InputForm1_yy_to,InputFS_total,InputFS_Jan,InputFS_Feb,
 InputFS_Mar,InputFS_Apr,InputFS_May,InputFS_Jun,InputFS_Jul,
 InputFS_Aug,InputFS_Sep,InputFS_Oct,InputFS_Nov,
 InputFS_Dec,InputPercentage_Total,InputPercentage_Jan,InputPercentage_Feb,
 InputPercentage_Mar,InputPercentage_Apr,
 InputPercentage_May,InputPercentage_Jun,InputPercentage_Jul,
 InputPercentage_Aug,InputPercentage_Sep,InputPercentage_Oct,
 InputPercentage_Nov,InputPercentage_Dec,InputOI_Jan,InputOI_Feb,InputOI_Mar,InputOI_Apr,
 InputOI_May,InputOI_Jun,InputOI_Jul,InputOI_Aug,InputOI_Sep,InputOI_Oct,
 InputOI_Nov,InputOI_Dec,InputOI_Total,InputEG_M_Jan,InputEG_M_Feb,InputEG_M_Mar,
 InputEG_M_Apr,InputEG_M_May,InputEG_M_Jun,InputEG_M_Jul,InputEG_M_Aug,
 InputEG_M_Sep ,InputEG_M_Oct,InputEG_M_Nov,InputEG_M_Dec,InputEG_M_Total,
 InputEG_F_Jan ,InputEG_F_Feb,InputEG_F_Mar,
 InputEG_F_Apr ,InputEG_F_May,InputEG_F_Jun,InputEG_F_Jul,InputEG_F_Aug,
 InputEG_F_Sep ,InputEG_F_Oct,InputEG_F_Nov,InputEG_F_Dec,InputEG_F_Total,
 InputSubmitted_by,InputSubmitted_Mm,InputSubmitted_dd,InputSubmitted_yy,
 InputOffice,InputAgency_Head,InputConfirmed,Inputpro_Name				
);
END$$

DROP PROCEDURE IF EXISTS `SP_AddRet_Form3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddRet_Form3` (IN `InputID_User` VARCHAR(11), IN `Inputmy` VARCHAR(300), IN `InputNp` VARCHAR(200), IN `InputSector` VARCHAR(300), IN `InputLocation` VARCHAR(300), IN `InputAgency` VARCHAR(300), IN `InputStatus` VARCHAR(300), IN `InputQuarter` VARCHAR(10), IN `InputPrepared_by` VARCHAR(70), IN `InputOffice` VARCHAR(200), IN `Inputd_M` VARCHAR(10), IN `Inputd_d` VARCHAR(10), IN `Inputd_y` VARCHAR(10), IN `InputAgency_Head` VARCHAR(50), IN `InputSlippage` VARCHAR(10), IN `InputIssues` TEXT, IN `InputSource_of_Info` TEXT, IN `InputRecommendation` TEXT, IN `InputReleasesPeriod` VARCHAR(11), IN `InputDis_Period` VARCHAR(11), IN `InputTarget` VARCHAR(11), IN `InputActual` VARCHAR(11), IN `InputFund_Utilization` VARCHAR(11), IN `Inputpro_Name` TEXT)  BEGIN
INSERT INTO `RET_FORM3`
				(
					`ID_User`, `my`, `Np`, `Sector`, `Location`, `Agency`, `Status`, `Quarter`, `Prepared_by`,
					`Office`, `d_M`, `d_d`, `d_y`, `Agency_Head`, `Slippage`, `Issues`, `Source_of_Info`,
					`Recommendation`, `ReleasesPeriod`, `Dis_Period`, `Target`, `Actual`, `Fund_Utilization`, `pro_Name`
				)
			VALUES
				(
					InputID_User,Inputmy ,InputNp ,InputSector , InputLocation ,
                   InputAgency ,InputStatus ,InputQuarter ,InputPrepared_by,InputOffice, Inputd_M ,
                   Inputd_d ,Inputd_y ,InputAgency_Head,InputSlippage ,InputIssues ,InputSource_of_Info ,
                   InputRecommendation ,InputReleasesPeriod,InputDis_Period ,InputTarget ,
                   InputActual ,InputFund_Utilization ,Inputpro_Name
				);
END$$

DROP PROCEDURE IF EXISTS `SP_AddRet_Form4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddRet_Form4` (IN `InputID_User` VARCHAR(11), IN `Inputm` VARCHAR(15), IN `Inputyr` VARCHAR(4), IN `InputQuarter` VARCHAR(15), IN `InputAgency` VARCHAR(200), IN `Inputnew_Proj` TEXT, IN `InputProj_Obj` TEXT, IN `Inputres_Indi` TEXT, IN `InputObserved_res` TEXT, IN `InputSubmitted_by` VARCHAR(100), IN `InputNoted_by` VARCHAR(100), IN `InputOffice` VARCHAR(100), IN `InputDate` VARCHAR(100))  BEGIN
INSERT INTO `RET_FORM4`
(
`ID_User`, `m`, `yr`, `Quarter`, `Agency`, `new_Proj`, `Proj_Obj`,
`res_Indi`, `Observed_res`, `Submitted_by`, `Noted_by`, `Office`, `Date`
)
VALUES
(
InputID_User,Inputm ,Inputyr ,InputQuarter ,InputAgency,Inputnew_Proj ,InputProj_Obj ,
Inputres_Indi ,InputObserved_res ,InputSubmitted_by ,InputNoted_by,InputOffice ,InputDate
);
END$$

DROP PROCEDURE IF EXISTS `SP_AddToACC_MAN_Cli`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddToACC_MAN_Cli` (IN `INputID_Admin` VARCHAR(11), IN `INputConditiones` INT(1))  BEGIN
INSERT INTO `ACC_MAN_Cli`(`ID_admin`, `conditiones`) VALUES(INputID_Admin, INputConditiones);
END$$

DROP PROCEDURE IF EXISTS `SP_AddToACC_MAN_Head`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddToACC_MAN_Head` (IN `INputID_Admin` VARCHAR(11), IN `INputConditiones` INT(1))  BEGIN
INSERT INTO `ACC_MAN_Head`(`ID_admin`, `conditiones`) VALUES(INputID_Admin, INputConditiones);
END$$

DROP PROCEDURE IF EXISTS `SP_DeleteForm1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DeleteForm1` (IN `InputIDForm1` INT(11))  BEGIN
 DELETE FROM `Form1` WHERE `ID_Form1`=InputIDForm1;
END$$

DROP PROCEDURE IF EXISTS `SP_DELETEFORM2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DELETEFORM2` (IN `InputIDForm2` INT(11))  BEGIN
DELETE FROM `FORM2` WHERE `ID_Form2`=InputIDForm2;
END$$

DROP PROCEDURE IF EXISTS `SP_DeleteForm3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DeleteForm3` (IN `InputID_Form3` INT(11))  BEGIN
DELETE FROM `FORM3` WHERE `ID_Form3`=InputID_Form3;
END$$

DROP PROCEDURE IF EXISTS `SP_DeleteForm4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DeleteForm4` (IN `InputAgency` VARCHAR(200))  BEGIN
DELETE FROM `FORM4` WHERE `ID_Form4`=InputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveF2wAgencyProName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveF2wAgencyProName` (IN `InputAgency` TEXT, IN `Inputpro_Name` VARCHAR(100))  BEGIN
SELECT * FROM `F2` WHERE  `Agency`=InputAgency AND `pro_Name`=Inputpro_Name;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm1` (IN `INputAgency` TEXT)  BEGIN
   SELECT * From `Form1` WHERE `Agency`=INputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm1SortedDesc`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm1SortedDesc` (IN `InputAgency` TEXT)  BEGIN
SELECT * FROM `Form1` WHERE `Agency`=InputAgency ORDER BY `ID_Form1` DESC;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm2` (IN `InputAgency` TEXT)  BEGIN
 SELECT * FROM `Form2` WHERE `Agency`=InputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm2wAgency`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm2wAgency` (IN `InputAgency` VARCHAR(300))  BEGIN
SELECT * FROM `Form2` WHERE `Agency`=InputAgency ORDER BY `ID_Form2` ASC;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm2wID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm2wID` (IN `InputIDForm2` INT(11))  BEGIN
SELECT * FROM `FORM2` WHERE `ID_Form2`=InputIDForm2;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm3wAgency`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm3wAgency` (IN `InputAgency` VARCHAR(300))  BEGIN
SELECT * FROM `FORM3` WHERE `Agency`=InputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm4wAgency`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm4wAgency` (IN `InputAgency` VARCHAR(200))  BEGIN
SELECT * FROM `FORM4` WHERE `Agency`=InputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm5wAgencyPNQT`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm5wAgencyPNQT` (IN `InputAgency` VARCHAR(400), IN `Inputpro_Name` VARCHAR(200), IN `InputQuarter_Tracker` VARCHAR(20))  BEGIN
SELECT * FROM `FORM5` WHERE `Agency`=InputAgency AND `pro_Name`=Inputpro_Name AND `Quarter_Tracker`=InputQuarter_Tracker;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveForm5wQT`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveForm5wQT` (IN `InputQuarter_Tracker` VARCHAR(20))  BEGIN
SELECT * FROM `FORM5` WHERE `Quarter_Tracker`=InputQuarter_Tracker;
END$$

DROP PROCEDURE IF EXISTS `SP_RetrieveProjectwAgency`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RetrieveProjectwAgency` (IN `InputAgency` VARCHAR(300))  BEGIN
SELECT * FROM `Project` WHERE `Agency`=InputAgency;
END$$

DROP PROCEDURE IF EXISTS `SP_SEARCHADMIN`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SEARCHADMIN` (IN `INputType` INT(1))  BEGIN 
   SELECT * From `ADMIN` WHERE `type`=INputType;
END$$

DROP PROCEDURE IF EXISTS `SP_SearchAdminWithUName`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SearchAdminWithUName` (IN `INputUName` VARCHAR(200))  BEGIN
  SELECT * From `ADMIN` WHERE `UName`=INputUName;
END$$

DROP PROCEDURE IF EXISTS `SP_SearchAdminWithUNameandPwd`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SearchAdminWithUNameandPwd` (IN `INputUName` VARCHAR(200), IN `INputPwd` VARCHAR(400))  BEGIN
  SELECT * From `ADMIN` WHERE `UName`=INputUName AND `Pwd`=INputPwd;
END$$

DROP PROCEDURE IF EXISTS `SP_Update_Form2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Update_Form2` (IN `InputStatus` INT(1), IN `InputID_Form2` INT(11))  BEGIN
UPDATE `FORM2` SET `Status`=InputStatus WHERE `ID_Form2`=InputID_Form2;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

DROP TABLE IF EXISTS `act`;
CREATE TABLE IF NOT EXISTS `act` (
  `ID_Act` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(11) NOT NULL,
  `Icon` varchar(20) NOT NULL,
  `Message` text NOT NULL,
  `Date` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Act`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `act`
--

INSERT INTO `act` (`ID_Act`, `ID_User`, `Icon`, `Message`, `Date`) VALUES
(1, '1402968', 'edit_profile1.png', 'Vince   upDated profile', '<span class=\'Date_time\'>January 30, 2019 4:04:pm  ');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

DROP TABLE IF EXISTS `agency`;
CREATE TABLE IF NOT EXISTS `agency` (
  `ID_Agency` int(11) NOT NULL AUTO_INCREMENT,
  `Agency_Name` varchar(400) NOT NULL,
  `Abbr` varchar(10) NOT NULL,
  `AgencyHead` varchar(90) NOT NULL,
  `ID_User` int(11) NOT NULL,
  PRIMARY KEY (`ID_Agency`),
  UNIQUE KEY `ID_User` (`ID_Agency`),
  KEY `ID_User_2` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`ID_Agency`, `Agency_Name`, `Abbr`, `AgencyHead`, `ID_User`) VALUES
(0, '0', '0', '0', 0),
(1, 'NEDA', '', 'Vince Esteban Arnedo', 0),
(79, 'DILG', '', 'Jayvee Siwagan', 0),
(80, 'DPWH', '', 'Seth Cordova', 0),
(81, 'NIA', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

DROP TABLE IF EXISTS `form1`;
CREATE TABLE IF NOT EXISTS `form1` (
  `ID_Form1` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `CurrentYear` date NOT NULL,
  `FS_Jan` decimal(9,2) NOT NULL,
  `FS_Feb` decimal(9,2) NOT NULL,
  `FS_Mar` decimal(9,2) NOT NULL,
  `FS_Apr` decimal(9,2) NOT NULL,
  `FS_May` decimal(9,2) NOT NULL,
  `FS_Jun` decimal(9,2) NOT NULL,
  `FS_Jul` decimal(9,2) NOT NULL,
  `FS_Aug` decimal(9,2) NOT NULL,
  `FS_Sep` decimal(9,2) NOT NULL,
  `FS_Oct` decimal(9,2) NOT NULL,
  `FS_Nov` decimal(9,2) NOT NULL,
  `FS_Dec` decimal(9,2) NOT NULL,
  `Percentage_Jan` decimal(9,2) NOT NULL,
  `Percentage_Feb` decimal(9,2) NOT NULL,
  `Percentage_Mar` decimal(9,2) NOT NULL,
  `Percentage_Apr` decimal(9,2) NOT NULL,
  `Percentage_May` decimal(9,2) NOT NULL,
  `Percentage_Jun` decimal(9,2) NOT NULL,
  `Percentage_Jul` decimal(9,2) NOT NULL,
  `Percentage_Aug` decimal(9,2) NOT NULL,
  `Percentage_Sep` decimal(9,2) NOT NULL,
  `Percentage_Oct` decimal(9,2) NOT NULL,
  `Percentage_Nov` decimal(9,2) NOT NULL,
  `Percentage_Dec` decimal(9,2) NOT NULL,
  `FS_Total` decimal(9,2) NOT NULL,
  `Percentage_Total` decimal(9,2) NOT NULL,
  `OI_Jan` text NOT NULL,
  `OI_Feb` text NOT NULL,
  `OI_Mar` text NOT NULL,
  `OI_Apr` text NOT NULL,
  `OI_May` text NOT NULL,
  `OI_Jun` text NOT NULL,
  `OI_Jul` text NOT NULL,
  `OI_Aug` text NOT NULL,
  `OI_Sep` text NOT NULL,
  `OI_Oct` text NOT NULL,
  `OI_Nov` text NOT NULL,
  `OI_Dec` text NOT NULL,
  `OI_Total` varchar(600) NOT NULL,
  `EG_M_Jan` varchar(200) NOT NULL,
  `EG_M_Feb` varchar(200) NOT NULL,
  `EG_M_Mar` varchar(200) NOT NULL,
  `EG_M_Apr` varchar(200) NOT NULL,
  `EG_M_May` varchar(200) NOT NULL,
  `EG_M_Jun` varchar(200) NOT NULL,
  `EG_M_Jul` varchar(200) NOT NULL,
  `EG_M_Aug` varchar(200) NOT NULL,
  `EG_M_Sep` varchar(200) NOT NULL,
  `EG_M_Oct` varchar(200) NOT NULL,
  `EG_M_Nov` varchar(200) NOT NULL,
  `EG_M_Dec` varchar(200) NOT NULL,
  `EG_M_Total` varchar(200) NOT NULL,
  `EG_F_Jan` varchar(200) NOT NULL,
  `EG_F_Feb` varchar(200) NOT NULL,
  `EG_F_Mar` varchar(200) NOT NULL,
  `EG_F_Apr` varchar(200) NOT NULL,
  `EG_F_May` varchar(200) NOT NULL,
  `EG_F_Jun` varchar(200) NOT NULL,
  `EG_F_Jul` varchar(200) NOT NULL,
  `EG_F_Aug` varchar(200) NOT NULL,
  `EG_F_Sep` varchar(200) NOT NULL,
  `EG_F_Oct` varchar(200) NOT NULL,
  `EG_F_Nov` varchar(200) NOT NULL,
  `EG_F_Dec` varchar(200) NOT NULL,
  `EG_F_Total` varchar(200) NOT NULL,
  `Submitted_by` varchar(200) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  `Submitted_Date` date NOT NULL,
  `Agency_Head` varchar(200) NOT NULL,
  `Confirmed` int(1) NOT NULL,
  PRIMARY KEY (`ID_Form1`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB AUTO_INCREMENT=1904261002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`ID_Form1`, `ProjectID`, `ID_User`, `CurrentYear`, `FS_Jan`, `FS_Feb`, `FS_Mar`, `FS_Apr`, `FS_May`, `FS_Jun`, `FS_Jul`, `FS_Aug`, `FS_Sep`, `FS_Oct`, `FS_Nov`, `FS_Dec`, `Percentage_Jan`, `Percentage_Feb`, `Percentage_Mar`, `Percentage_Apr`, `Percentage_May`, `Percentage_Jun`, `Percentage_Jul`, `Percentage_Aug`, `Percentage_Sep`, `Percentage_Oct`, `Percentage_Nov`, `Percentage_Dec`, `FS_Total`, `Percentage_Total`, `OI_Jan`, `OI_Feb`, `OI_Mar`, `OI_Apr`, `OI_May`, `OI_Jun`, `OI_Jul`, `OI_Aug`, `OI_Sep`, `OI_Oct`, `OI_Nov`, `OI_Dec`, `OI_Total`, `EG_M_Jan`, `EG_M_Feb`, `EG_M_Mar`, `EG_M_Apr`, `EG_M_May`, `EG_M_Jun`, `EG_M_Jul`, `EG_M_Aug`, `EG_M_Sep`, `EG_M_Oct`, `EG_M_Nov`, `EG_M_Dec`, `EG_M_Total`, `EG_F_Jan`, `EG_F_Feb`, `EG_F_Mar`, `EG_F_Apr`, `EG_F_May`, `EG_F_Jun`, `EG_F_Jul`, `EG_F_Aug`, `EG_F_Sep`, `EG_F_Oct`, `EG_F_Nov`, `EG_F_Dec`, `EG_F_Total`, `Submitted_by`, `Noted_by`, `Submitted_Date`, `Agency_Head`, `Confirmed`) VALUES
(1904261001, 44, 0, '2019-05-28', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '12.00', '12.00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '12', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '12', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '12', '2', '', '2019-04-26', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

DROP TABLE IF EXISTS `form2`;
CREATE TABLE IF NOT EXISTS `form2` (
  `ID_Form2` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `Track2` varchar(11) NOT NULL,
  `as_of_M` varchar(300) NOT NULL,
  `as_of_y` varchar(300) NOT NULL,
  `TargetCompletion` date NOT NULL,
  `AllocationPeriod` decimal(9,2) NOT NULL,
  `AllocationMonth` decimal(9,2) NOT NULL,
  `ReleasesPeriod` decimal(9,2) NOT NULL,
  `ReleasesMonth` decimal(9,2) NOT NULL,
  `ObligationPeriod` decimal(9,2) NOT NULL,
  `ObligationMonth` decimal(9,2) NOT NULL,
  `Dis_Period` varchar(300) NOT NULL,
  `Dis_Month` varchar(300) NOT NULL,
  `Oi` text NOT NULL,
  `Target_to_Date` varchar(10) NOT NULL,
  `Target_for_Month` varchar(10) NOT NULL,
  `Actual_to_Date` varchar(10) NOT NULL,
  `Actual_for_Month` varchar(10) NOT NULL,
  `EG_M` varchar(300) NOT NULL,
  `EG_F` varchar(300) NOT NULL,
  `Remarks` text NOT NULL,
  `Status` int(1) NOT NULL,
  `Output_Actual_Date` varchar(100) NOT NULL,
  `Quarter_Tracker` varchar(20) NOT NULL,
  `FS_Total` varchar(11) NOT NULL,
  `Month` varchar(3) NOT NULL,
  `Pic` varchar(50) NOT NULL,
  `Confirm` int(11) NOT NULL,
  `Submitted_by` varchar(200) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_Form2`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

DROP TABLE IF EXISTS `form3`;
CREATE TABLE IF NOT EXISTS `form3` (
  `ID_Form3` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_User` varchar(11) NOT NULL,
  `ID_Agency_Head` varchar(11) NOT NULL,
  `CurrentYear` date NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Agency_Head` varchar(50) NOT NULL,
  `Slippage` varchar(10) NOT NULL,
  `Findings` text NOT NULL,
  `ReasonCause` text NOT NULL,
  `Recommendation` text NOT NULL,
  `ReleasesPeriod` varchar(11) NOT NULL,
  `Dis_Period` varchar(11) NOT NULL,
  `Target` varchar(11) NOT NULL,
  `Actual` varchar(11) NOT NULL,
  `Fund_Utilization` varchar(11) NOT NULL,
  `Prepared_by` varchar(70) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  `Submitted_Date` date NOT NULL,
  PRIMARY KEY (`ID_Form3`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB AUTO_INCREMENT=1905091002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`ID_Form3`, `ProjectID`, `ID_User`, `ID_Agency_Head`, `CurrentYear`, `Status`, `Quarter`, `Date`, `Agency_Head`, `Slippage`, `Findings`, `ReasonCause`, `Recommendation`, `ReleasesPeriod`, `Dis_Period`, `Target`, `Actual`, `Fund_Utilization`, `Prepared_by`, `Noted_by`, `Submitted_Date`) VALUES
(1905091001, 44, '', '', '2019-05-01', '', '', '', '', '', 'kjkh', 'kj', 'hkjhk', '', '', '', '', '', '', '', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

DROP TABLE IF EXISTS `form4`;
CREATE TABLE IF NOT EXISTS `form4` (
  `ID_Form4` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_User` varchar(11) NOT NULL,
  `ID_Agency_Head` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Quarter` varchar(15) NOT NULL,
  `new_Proj` text NOT NULL,
  `Proj_Obj` text NOT NULL,
  `res_Indi` text NOT NULL,
  `Observed_res` text NOT NULL,
  `Prepared_by` varchar(100) NOT NULL,
  `Noted_by` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Form4`),
  KEY `ProjectID` (`ProjectID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

DROP TABLE IF EXISTS `form5`;
CREATE TABLE IF NOT EXISTS `form5` (
  `ID_Form5` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_Agency_Head` varchar(11) NOT NULL,
  `Year` date NOT NULL,
  `NameandComponents` varchar(200) NOT NULL,
  `Funding_Source` varchar(300) NOT NULL,
  `From_sched` varchar(25) NOT NULL,
  `To_sched` varchar(25) NOT NULL,
  `OI` text NOT NULL,
  `FSAllocation` decimal(9,2) NOT NULL,
  `FSReleases` decimal(9,2) NOT NULL,
  `FSObligation` decimal(9,2) NOT NULL,
  `FSDisbursements` decimal(9,2) NOT NULL,
  `Funding_Support` decimal(9,2) NOT NULL,
  `Fund_Utilization` decimal(9,2) NOT NULL,
  `Target_to_Date` decimal(9,2) NOT NULL,
  `Actual_to_Date` decimal(9,2) NOT NULL,
  `Slippage` decimal(9,2) NOT NULL,
  `Performance` decimal(9,2) NOT NULL,
  `EG_M` varchar(10) NOT NULL,
  `EG_F` varchar(10) NOT NULL,
  `Remarks` text NOT NULL,
  `Quarter_Tracker` varchar(20) NOT NULL,
  `Agency` varchar(400) NOT NULL,
  `Weight_per_Component` varchar(100) NOT NULL,
  `Percent_Accomplishment` varchar(20) NOT NULL,
  `Weighted_Accomplishment` varchar(100) NOT NULL,
  `Total_Project_Cost` varchar(11) NOT NULL,
  `FS_Total` varchar(11) NOT NULL,
  `Overall_Physical_Accomplishment` varchar(11) NOT NULL,
  `Weight_Target` varchar(20) NOT NULL,
  `Weight_Actual` varchar(20) NOT NULL,
  `ID_Form5_Total` int(11) NOT NULL,
  `Prepared_by` varchar(40) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  `Submitted_Date` date NOT NULL,
  PRIMARY KEY (`ID_Form5`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form5_total`
--

DROP TABLE IF EXISTS `form5_total`;
CREATE TABLE IF NOT EXISTS `form5_total` (
  `ID_Form5_Total` int(11) NOT NULL,
  `ID_Form5` int(11) NOT NULL,
  `FSAllocationTotal` decimal(9,2) NOT NULL,
  `FSReleasesTotal` decimal(9,2) NOT NULL,
  `FSObligationTotal` decimal(9,2) NOT NULL,
  `FSDisbursementsTotal` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

DROP TABLE IF EXISTS `form6`;
CREATE TABLE IF NOT EXISTS `form6` (
  `ID_Form6` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_User` varchar(11) NOT NULL,
  `ID_Agency_Head` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `Pmc` text NOT NULL,
  `Np` text NOT NULL,
  `Location` text NOT NULL,
  `Agency` text NOT NULL,
  `Funds_Utilization` decimal(9,2) NOT NULL,
  `ReleasesPeriod` varchar(11) NOT NULL,
  `Dis_Period` varchar(11) NOT NULL,
  `Target` decimal(9,2) NOT NULL,
  `Actual` decimal(9,2) NOT NULL,
  `Slippage` decimal(9,2) NOT NULL,
  `Issues` text NOT NULL,
  `Source` text NOT NULL,
  `Action` text NOT NULL,
  `Prepared_by` varchar(200) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(200) NOT NULL,
  `Office` varchar(120) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Submitted_Date` date NOT NULL,
  PRIMARY KEY (`ID_Form6`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form7`
--

DROP TABLE IF EXISTS `form7`;
CREATE TABLE IF NOT EXISTS `form7` (
  `ID_Form7` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `ID_User` varchar(11) NOT NULL,
  `ProjectTitle` varchar(11) NOT NULL,
  `Cost` decimal(9,2) NOT NULL,
  `FundSource` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `Np` text NOT NULL,
  `Location` varchar(120) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `DateFieldVisit` varchar(50) NOT NULL,
  `Major_Findingss` text NOT NULL,
  `Issues` text NOT NULL,
  `Recommendations` text NOT NULL,
  `Action` text NOT NULL,
  `Prepared_by` varchar(50) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  `Office` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Agency_Head` varchar(50) NOT NULL,
  `Submitted_Date` date NOT NULL,
  PRIMARY KEY (`ID_Form7`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form8`
--

DROP TABLE IF EXISTS `form8`;
CREATE TABLE IF NOT EXISTS `form8` (
  `ID_Form8` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Np` text NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `Location` text NOT NULL,
  `Agency` text NOT NULL,
  `Date_pss` text NOT NULL,
  `Concerned_Agency` text NOT NULL,
  `Issues` text NOT NULL,
  `Agreements` text NOT NULL,
  `ActionTaken` text NOT NULL,
  `Prepared_by` varchar(40) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(40) NOT NULL,
  `Office` text NOT NULL,
  `Date` text NOT NULL,
  `Agency_Head` text NOT NULL,
  PRIMARY KEY (`ID_Form8`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form9`
--

DROP TABLE IF EXISTS `form9`;
CREATE TABLE IF NOT EXISTS `form9` (
  `ID_Form9` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(11) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Date_F9` varchar(15) NOT NULL,
  `TrainingTitle` text NOT NULL,
  `Objectives` text NOT NULL,
  `Lead_Office` text NOT NULL,
  `Participating_Offices` text NOT NULL,
  `Male` varchar(11) NOT NULL,
  `Female` varchar(11) NOT NULL,
  `Prepared_by` varchar(50) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(50) NOT NULL,
  `Date_sub` varchar(30) NOT NULL,
  `Date_Noted` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Form9`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form10`
--

DROP TABLE IF EXISTS `form10`;
CREATE TABLE IF NOT EXISTS `form10` (
  `ID_Form10` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `ResolutionTitle` varchar(100) NOT NULL,
  `ResolutionNo` text NOT NULL,
  `Date_Approved` date NOT NULL,
  `Actions` text NOT NULL,
  `Prepared_by` varchar(100) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(100) NOT NULL,
  `Date_sub` date NOT NULL,
  `Date_Noted` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Form10`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form11`
--

DROP TABLE IF EXISTS `form11`;
CREATE TABLE IF NOT EXISTS `form11` (
  `ID_Form11` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(11) NOT NULL,
  `m` varchar(15) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  `ProgramTitle` text NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Nature` text NOT NULL,
  `Details` text NOT NULL,
  `Strategies` text NOT NULL,
  `Responsible` text NOT NULL,
  `Lessons` text NOT NULL,
  `Prepared_by` varchar(50) NOT NULL,
  `Reviewed_by` varchar(40) NOT NULL,
  `Noted_by` varchar(50) NOT NULL,
  `Date_sub` varchar(15) NOT NULL,
  `Date_Noted` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_Form11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fundingsource`
--

DROP TABLE IF EXISTS `fundingsource`;
CREATE TABLE IF NOT EXISTS `fundingsource` (
  `ID_FundingSource` int(11) NOT NULL AUTO_INCREMENT,
  `FundingSourceName` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_FundingSource`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundingsource`
--

INSERT INTO `fundingsource` (`ID_FundingSource`, `FundingSourceName`) VALUES
(1, 'GAA'),
(2, 'ODA');

-- --------------------------------------------------------

--
-- Table structure for table `implementation`
--

DROP TABLE IF EXISTS `implementation`;
CREATE TABLE IF NOT EXISTS `implementation` (
  `ID_Implementation` int(11) NOT NULL AUTO_INCREMENT,
  `ImplementationName` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Implementation`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `implementation`
--

INSERT INTO `implementation` (`ID_Implementation`, `ImplementationName`) VALUES
(1, 'Administration'),
(2, 'Contract');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `ProjectID` int(11) NOT NULL AUTO_INCREMENT,
  `Agency` varchar(300) NOT NULL,
  `ID_Agency` int(11) NOT NULL,
  `ProjectName` varchar(100) NOT NULL,
  `Funding_Source` varchar(150) NOT NULL,
  `ModeOfImplementation` text NOT NULL,
  `ProjectScheduleStart` date NOT NULL,
  `ProjectScheduleEnd` date NOT NULL,
  `Target_Date` varchar(100) NOT NULL,
  `Location` text NOT NULL,
  `Sector` text NOT NULL,
  `FundingSource` text NOT NULL,
  `Actual_Date` varchar(100) NOT NULL,
  `Slippage` varchar(100) NOT NULL,
  `Funding_Support` varchar(200) NOT NULL,
  `Fund_Utilization` varchar(200) NOT NULL,
  `Issues` text NOT NULL,
  `Actions` text NOT NULL,
  `Recommendation` text NOT NULL,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`ProjectID`),
  KEY `ID_Agency` (`ID_Agency`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Agency`, `ID_Agency`, `ProjectName`, `Funding_Source`, `ModeOfImplementation`, `ProjectScheduleStart`, `ProjectScheduleEnd`, `Target_Date`, `Location`, `Sector`, `FundingSource`, `Actual_Date`, `Slippage`, `Funding_Support`, `Fund_Utilization`, `Issues`, `Actions`, `Recommendation`, `Status`) VALUES
(44, '', 0, 'Avengers', '', 'Administration', '2019-04-29', '2019-04-09', '', 'EndGame', 'Agri-Industrial Strategy', 'GAA', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

DROP TABLE IF EXISTS `sector`;
CREATE TABLE IF NOT EXISTS `sector` (
  `ID_Sector` int(11) NOT NULL AUTO_INCREMENT,
  `SectorName` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_Sector`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`ID_Sector`, `SectorName`) VALUES
(1, 'Agri-Industrial Strategy'),
(2, 'Human Development'),
(3, 'Infrastructure Support'),
(4, 'Development Administration'),
(5, 'Disaster Mitigation'),
(6, 'Integrated Area Developmen');

-- --------------------------------------------------------

--
-- Table structure for table `storage_form3`
--

DROP TABLE IF EXISTS `storage_form3`;
CREATE TABLE IF NOT EXISTS `storage_form3` (
  `ID_Storage_Form3` int(11) NOT NULL AUTO_INCREMENT,
  `Proj_Name` text NOT NULL,
  `Component` text NOT NULL,
  `Agency` text NOT NULL,
  `Issues` text NOT NULL,
  `Actions` text NOT NULL,
  `Recommendation` text NOT NULL,
  `Quarter` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_Storage_Form3`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subsector`
--

DROP TABLE IF EXISTS `subsector`;
CREATE TABLE IF NOT EXISTS `subsector` (
  `ID_SubSector` int(11) NOT NULL AUTO_INCREMENT,
  `SubSectorName` varchar(30) NOT NULL,
  `ID_Sector` int(11) NOT NULL,
  PRIMARY KEY (`ID_SubSector`),
  KEY `ID_Sector` (`ID_Sector`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

DROP TABLE IF EXISTS `updates`;
CREATE TABLE IF NOT EXISTS `updates` (
  `ID_upDates` int(11) NOT NULL,
  `ID_Agency_Head` varchar(15) NOT NULL,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`ID_upDates`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Agency` int(11) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `MName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Office` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UName` varchar(200) NOT NULL,
  `Pwd` text NOT NULL,
  `Confirmed` int(1) NOT NULL,
  `Avatar` text NOT NULL,
  `UserType` int(1) NOT NULL,
  `Status` int(1) NOT NULL,
  `Log` int(1) NOT NULL,
  `date_reg` date DEFAULT NULL,
  PRIMARY KEY (`ID_User`),
  KEY `ID_Agency` (`ID_Agency`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `ID_Agency`, `FName`, `MName`, `LName`, `Office`, `Email`, `UName`, `Pwd`, `Confirmed`, `Avatar`, `UserType`, `Status`, `Log`, `date_reg`) VALUES
(1, 80, 'Vince', 'Esteban', 'Arnedo', '', '', '1', '1', 0, '', 1, 0, 0, '2019-05-13'),
(2, 79, 'Jayvee', '', 'Siwagan', '', '', '2', '2', 1, '', 2, 0, 0, '2019-05-13'),
(3, 79, 'Seth', '', 'Cordova', '', '', 'Seth', '', 0, '', 2, 0, 0, '2019-05-13'),
(4, 80, 'Francis', '', 'Cordova', '', '', 'FC', '', 0, '', 3, 0, 0, '2019-05-13'),
(7, 0, '', '', '', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(10, 80, 'FName', 'MName', 'LName', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(11, 80, 'FName', 'MName', 'LName', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(18, 80, 'test', 'test', 'test', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(19, 80, 'kjh', 'kj', 'hk', 'safa', 'sfasdafsadf@gfsdf', 'asfadsf', '', 0, '', 0, 0, 0, '2019-05-13'),
(20, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(21, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(22, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(23, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(24, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(25, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(26, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(27, 80, 'kjh', 'kj', 'hk', '', '', '', '', 0, '', 0, 0, 0, '2019-05-13'),
(28, 0, '0', '0', '0', '0', '0', '0', '', 0, '', 0, 0, 0, '2019-05-13'),
(29, 0, 'k', 'k', 'k', 'k', 'k', 'k', '', 0, '', 0, 0, 0, '2019-05-13'),
(30, 0, 'kl', 'jlk', 'j', 'klj', 'klj', 'lkj', '', 0, '', 0, 0, 0, '2019-05-13'),
(31, 0, 'kl', 'jlk', 'j', 'klj', 'klj', 'lkj', '', 0, '', 0, 0, 0, '2019-05-13'),
(32, 0, 'asdsad', 'jlkasdasd', 'jasd', 'kljasd', 'kljasd', 'lkjasd', '', 0, '', 0, 0, 0, '2019-05-13'),
(33, 0, 'asdsa', 'dsadsad', 'sadsad', 'asdasd', 'aasdas', 'asdasdsadasd', '', 0, '', 0, 0, 0, '2019-05-13'),
(34, 0, 'asdsa', 'dsadsad', 'sadsad', 'asdasd', 'aasdas', 'asdasdsadasd', '', 0, '', 0, 0, 0, '2019-05-13'),
(37, 0, 'kj', 'hkj', 'h', 'kjh', 'kj', 'hkjh', '', 0, '', 0, 0, 0, '2019-05-13'),
(38, 0, 'asdasd', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdasd', '', 0, '', 0, 0, 0, NULL),
(39, 0, 'asdasd', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdasd', '', 0, '', 0, 0, 0, NULL),
(40, 0, 'asdasd', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdasd', '', 0, '', 0, 0, 0, NULL),
(41, 0, 'asdasd', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdasd', '', 0, '', 0, 0, 0, NULL),
(42, 79, 'wewe', 'wee', 'we', 'wew', 'we', 'we', '', 0, '', 0, 0, 0, NULL),
(43, 1, 'giled', 'giled', 'giled', 'giled', 'giled@giled.com', 'giled', '', 0, '', 0, 0, 0, NULL),
(44, 79, 'lk', 'jlk', 'j', 'klj', 'lk', 'jlkj', '', 0, '', 0, 0, 0, NULL),
(45, 79, '2', '2', '2', '2', '2', '2', '', 0, '', 0, 0, 0, NULL),
(46, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(47, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(48, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(49, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(50, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(51, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(52, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(53, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(54, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(55, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(56, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(57, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(58, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(59, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL),
(60, 1, 'jayvee', 'jayvee', 'jayvee', 'jayvee', 'jayvee@gmail.com', 'jayvee', '', 0, '', 0, 0, 0, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form2`
--
ALTER TABLE `form2`
  ADD CONSTRAINT `form2_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `form3`
--
ALTER TABLE `form3`
  ADD CONSTRAINT `form3_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `form4`
--
ALTER TABLE `form4`
  ADD CONSTRAINT `form4_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`),
  ADD CONSTRAINT `form4_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `form5`
--
ALTER TABLE `form5`
  ADD CONSTRAINT `form5_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `form6`
--
ALTER TABLE `form6`
  ADD CONSTRAINT `form6_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `form7`
--
ALTER TABLE `form7`
  ADD CONSTRAINT `form7_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `form1` (`ProjectID`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`ID_Agency`) REFERENCES `agency` (`ID_Agency`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_Agency`) REFERENCES `agency` (`ID_Agency`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
