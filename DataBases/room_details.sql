-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 05:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `room`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE IF NOT EXISTS `room_details` (
  `email` varchar(1000) NOT NULL,
  `district` varchar(1000) NOT NULL,
  `mandal` varchar(1000) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  `room_type` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `rent` int(244) NOT NULL,
  `roomno` int(244) NOT NULL,
  `roomty` varchar(1000) NOT NULL,
  `booked` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`email`, `district`, `mandal`, `image1`, `image2`, `image3`, `room_type`, `address`, `rent`, `roomno`, `roomty`, `booked`) VALUES
('anandkumarmettu@gmail.com', 'Hyderabad', 'Asifnagar', 'files/Paying Guest/31.jpg', 'files/Paying Guest/32.jpg', 'files/Paying Guest/33.jpg', 'Paying Guest', 'Asifnagar', 98765, 130341151, 'Single', 'NULL'),
('parashuram009@gmail.com', 'Adilabad', 'Adilabad (Urban)', 'files/Residential/31.jpg', 'files/Residential/32.jpg', 'files/Residential/33.jpg', 'Residential', 'Adilabad', 12234, 917083988, '', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Residential/61.jpg', 'files/Residential/63.jpg', 'files/Residential/62.jpg', 'Residential', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 0, 302304931, 'Single', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Residential/71.jpg', 'files/Residential/72.jpg', 'files/Residential/73.jpg', 'Residential', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 10000, 886341970, 'Single', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Paying Guest/93.jpg', 'files/Paying Guest/92.jpg', 'files/Paying Guest/91.jpg', 'Paying Guest', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 12500, 1666922884, '', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Open Grounds/102.jpg', 'files/Open Grounds/101.jpg', 'files/Open Grounds/103.jpg', 'Open Grounds', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 15000, 1598117662, '', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Banquet Halls/111.jpg', 'files/Banquet Halls/113.jpg', 'files/Banquet Halls/112.jpg', 'Banquet Halls', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 14200, 405635313, '', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Charminar', 'files/Hotels/123.jpg', 'files/Hotels/121.jpg', 'files/Hotels/122.jpg', 'Hotels', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 13000, 1833276090, '', 'NULL'),
('maheshrellu555@gmail.com', 'Adilabad', 'Adilabad (Urban)', 'files/Residential/132.jpg', 'files/Residential/133.jpg', 'files/Residential/131.jpg', 'Residential', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 9000, 134280036, '', 'NULL'),
('maheshrellu555@gmail.com', 'Hyderabad', 'Tirumalgherry', 'files/Paying Guest/142.jpg', 'files/Paying Guest/143.jpg', 'files/Paying Guest/141.jpg', 'Paying Guest', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 14500, 2146885416, '', 'NULL'),
('maheshrellu555@gmail.com', 'Jagtial', 'Raikal', 'files/Banquet Halls/172.jpg', 'files/Banquet Halls/173.jpg', 'files/Banquet Halls/171.jpg', 'Banquet Halls', 'Chilakalapalli(vill), Balijipeta(md), Vizianagaram(dist), Andhrapradesh(state),535557', 25000, 168046507, '', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
