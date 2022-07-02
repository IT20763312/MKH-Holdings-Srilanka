-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2021 at 11:18 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldocument`
--

DROP TABLE IF EXISTS `tbldocument`;
CREATE TABLE IF NOT EXISTS `tbldocument` (
  `documentNo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `documentType` varchar(500) NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`documentNo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocument`
--

INSERT INTO `tbldocument` (`documentNo`, `email`, `documentType`, `path`) VALUES
(2, '', '', 'Uploads/CEB-Kotugoda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

DROP TABLE IF EXISTS `tblevents`;
CREATE TABLE IF NOT EXISTS `tblevents` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `eventDescription` varchar(1000) DEFAULT NULL,
  `eventImagePath` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`eventId`, `eventDescription`, `eventImagePath`) VALUES
(1, 'Supply of insulators to CEB Kotugoda - Feb.2021', 'Events/CEB-Kotugoda.jpg'),
(2, 'Supply of insulators to CEB Matale - Feb.2021', 'Events/CEB-Matale.jpg'),
(3, 'Supply of insulators to CEB Trincomalee - Feb.2021', 'Events/CEB-Trinco.jpg'),
(4, 'Meet Director Marketing of Hongshen Electrics China', 'Events/IMG_20190907_152943_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

DROP TABLE IF EXISTS `tblmessage`;
CREATE TABLE IF NOT EXISTS `tblmessage` (
  `messageId` int(11) NOT NULL AUTO_INCREMENT,
  `adminMessage` varchar(20000) DEFAULT NULL,
  `clientMessage` varchar(20000) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `admin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmessage`
--

INSERT INTO `tblmessage` (`messageId`, `adminMessage`, `clientMessage`, `client`, `admin`) VALUES
(77, 'hi', NULL, 'abccompany@gmail.com', 'admin'),
(76, NULL, 'Hello', 'abccompany@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblproductitems`
--

DROP TABLE IF EXISTS `tblproductitems`;
CREATE TABLE IF NOT EXISTS `tblproductitems` (
  `productItemId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `productItemName` varchar(100) DEFAULT NULL,
  `productItemImagepath1` varchar(500) DEFAULT NULL,
  `productItemImagepath2` varchar(500) NOT NULL,
  `productItemImagepath3` varchar(500) NOT NULL,
  `productItemImagepath4` varchar(500) NOT NULL,
  `productItemImagepath5` varchar(500) NOT NULL,
  PRIMARY KEY (`productItemId`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductitems`
--

INSERT INTO `tblproductitems` (`productItemId`, `productName`, `productItemName`, `productItemImagepath1`, `productItemImagepath2`, `productItemImagepath3`, `productItemImagepath4`, `productItemImagepath5`) VALUES
(3, 'Insulators', 'Shackle Insulators', 'ItemImages/Shackle-1.jpg', 'ItemImages/Shackle-2.jpg', 'ItemImages/Shackle-3.jpg', 'ItemImages/Shackle-4.jpg', 'ItemImages/Shackle-5.jpg'),
(4, 'Insulators', 'Stay Insulators LT & HT', 'ItemImages/Stay-1.jpg', 'ItemImages/Stay-2.jpg', 'ItemImages/Stay-3.jpg', 'ItemImages/Stay-5.jpg', 'ItemImages/Stay-6.jpg'),
(5, 'Insulators', 'Pin Insulators', 'ItemImages/Pin-1.jpg', 'ItemImages/Pin-2.jpg', 'ItemImages/Pin-4.jpg', 'ItemImages/Pin-8.jpg', 'ItemImages/pin-insulators-250x250.png'),
(6, 'Insulators', 'Tension Insulators', 'ItemImages/Tension-4.jpg', 'ItemImages/Tension-7.jpg', 'ItemImages/Tension-8.jpg', 'ItemImages/Tension-3.jpg', 'ItemImages/Tension-2.jpg'),
(7, 'HRC Fuse', 'HRC Fuse Cartridge Knife Edge Type â€“ Size 01 & 02', 'ItemImages/Capture.PNG', 'ItemImages/HRC-1.jpg', 'ItemImages/Base-1.jpg', 'ItemImages/', 'ItemImages/'),
(8, 'HRC Fuse', 'Fuse Base â€“ Size 01 & 02', 'ItemImages/Base-3.jpg', 'ItemImages/Base-4.jpg', 'ItemImages/Base-5.jpg', 'ItemImages/Base-1.jpg', 'ItemImages/Base-2.jpg'),
(9, 'HRC Fuse', 'Fuse Pullers & Nutral Links', 'ItemImages/Puller-1.jpg', 'ItemImages/NL-1.jpg', 'ItemImages/NL-2.jpg', 'ItemImages/', 'ItemImages/'),
(10, 'Switchgear', 'MCB', 'ItemImages/MCB-4.jpg', 'ItemImages/MCB-2.jpg', 'ItemImages/MCB-3.jpg', 'ItemImages/MCB-1.jpg', 'ItemImages/low-voltage-swithgears-1535977395-4259414.jpeg'),
(11, 'Switchgear', 'MCCB', 'ItemImages/MCCB-1.jpg', 'ItemImages/MCCB-2.jpg', 'ItemImages/MCCB-3.jpg', 'ItemImages/low-voltage-swithgears-1535977395-4259414.jpeg', 'ItemImages/brand-new-electrical-switchgear-863.jpg'),
(12, 'Switchgear', 'RCCB', 'ItemImages/RCCB-1.jpg', 'ItemImages/RCCB-2.jpg', 'ItemImages/brand-new-electrical-switchgear-863.jpg', 'ItemImages/', 'ItemImages/'),
(13, 'Service Cut-Outs and Cartridge Fuse', 'Service Cut-Outs', 'ItemImages/Service co-3.jpg', 'ItemImages/Service co-4.jpg', 'ItemImages/Service co-2.jpg', 'ItemImages/Service co-1.jpg', 'ItemImages/'),
(15, 'Service Cut-Outs and Cartridge Fuse', 'Cartridge Fuse', 'ItemImages/Capture-6.PNG', 'ItemImages/Capture-4.PNG', 'ItemImages/Capture-3.PNG', 'ItemImages/Capture-5.PNG', 'ItemImages/Cartridge-1.jpg'),
(16, 'Expulsion Fuse Cut-Outs and Links', 'Expulsion Fuse Cut-Outs & Links', 'ItemImages/3kcm_1ut9.jpg', 'ItemImages/rhvu.jpg', 'ItemImages/', 'ItemImages/', 'ItemImages/'),
(17, 'Cable Lugs and Service Connections', 'Cable Lugs & Service Connections', 'ItemImages/Led-9.jpg', 'ItemImages/lugs-2.jpg', 'ItemImages/lugs-3.jpg', 'ItemImages/lugs-4.jpg', 'ItemImages/H type-1.jpg'),
(18, 'LED Light Fittings', 'LED Light Fittings', 'ItemImages/Led-1.jpg', 'ItemImages/Led-2.jpg', 'ItemImages/Led-4.jpg', 'ItemImages/Led-6.jpg', 'ItemImages/Led-7.jpg'),
(19, 'Aerial Bundled Conductors (ABC Accessories)', 'Aerial Bundled Conductors (ABC Accessories)', 'ItemImages/Abc-1.jpg', 'ItemImages/Abc-2.jpg', 'ItemImages/Abc-3.jpg', 'ItemImages/Abc-5.jpg', 'ItemImages/Abc-6.jpg'),
(20, 'Other Electrical Items', 'Jointing Kits', 'ItemImages/Jointing-1.jpg', 'ItemImages/Jointing-2.jpg', 'ItemImages/Jointing-3.jpg', 'ItemImages/Jointing-4.jpg', 'ItemImages/Jointing-5.jpg'),
(21, 'Other Electrical Items', 'Surge Arrestors', 'ItemImages/Surge-1.jpg', 'ItemImages/Surge-2.jpg', 'ItemImages/Surge-3.jpg', 'ItemImages/', 'ItemImages/'),
(22, 'Other Electrical Items', 'Clamps & Conductors', 'ItemImages/aluminum-and-copper-pg-clamp-250x250.jpg', 'ItemImages/copper-pg-clamp-250x250.jpg', 'ItemImages/clamp-1.jpg', 'ItemImages/conductors-1.jpg', 'ItemImages/conductors-2.jpg'),
(23, 'Other Electrical Items', 'Ferrules', 'ItemImages/ferrule-1.jpg', 'ItemImages/ferrule-2.jpg', 'ItemImages/ferrule-3.jpg', 'ItemImages/ferrule-4.jpg', 'ItemImages/'),
(24, 'Other Electrical Items', 'Bolts & Nuts', 'ItemImages/bolts-1.jpg', 'ItemImages/bolts-2.jpg', 'ItemImages/bolts-4.jpg', 'ItemImages/bolts-3.jpg', 'ItemImages/');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

DROP TABLE IF EXISTS `tblproducts`;
CREATE TABLE IF NOT EXISTS `tblproducts` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`productId`, `productName`) VALUES
(2, 'Insulators'),
(3, 'HRC Fuse'),
(4, 'Switchgear'),
(5, 'Service Cut-Outs and Cartridge Fuse'),
(6, 'Expulsion Fuse Cut-Outs and Links'),
(7, 'Cable Lugs and Service Connections'),
(8, 'LED Light Fittings'),
(9, 'Aerial Bundled Conductors (ABC Accessories)'),
(10, 'Other Electrical Items');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

DROP TABLE IF EXISTS `tblregister`;
CREATE TABLE IF NOT EXISTS `tblregister` (
  `registerId` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyType` varchar(50) NOT NULL,
  `companyAddress` varchar(500) NOT NULL,
  `yearOfExperience` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  PRIMARY KEY (`registerId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`registerId`, `fullName`, `email`, `password`, `companyName`, `companyType`, `companyAddress`, `yearOfExperience`, `country`, `contactNo`) VALUES
(17, 'Minjana Ruwanpura', 'abccompany@gmail.com', 'abccompany', 'ABC Company', 'Manufacturing Company', 'Just a address', '5', 'China', '2343214324');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
