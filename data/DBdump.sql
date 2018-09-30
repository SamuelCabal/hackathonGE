-- SQL Dump
-- version 4.8.2
--
-- Host: 127.0.0.1
-- Wroten Time: Sep 30, 2018 at 12:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BusServiceData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Units`
--

CREATE TABLE `Units` (
  `idUnit` int(11) NOT NULL,
  `strMatr` varchar(10) COLLATE utf32_spanish2_ci NOT NULL,
  `strCons` varchar (9) COLLATE utf32_spanish2_ci NOT NULL,
  `idDriverAs` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Units of service';

--
-- Dumping data for table `Units`
--

INSERT INTO `Units` (`idUnit`, `strMatr`, `strCons`, `idDriverAs`) VALUES
(101, 'UKE-EMN-56', 'CZ-F09367', '101'),
(102, 'UKE-EMN-67', 'CZ-F09437', '102');

-- --------------------------------------------------------

--
-- Table structure for table `Divers`
--

CREATE TABLE `Drivers` (
  `idDriver` int(11) NOT NULL,
  `strFname` varchar(25) COLLATE utf32_spanish2_ci NOT NULL,
  `strLname` varchar (25) COLLATE utf32_spanish2_ci NOT NULL,
  `numPhone` int(10) NOT NULL,
  `idRouteAs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Drivers in service';

--
-- Dumping data for table `Drivers`
--

INSERT INTO `Drivers` (`idDriver`, `strFname`, `strLname``, `numPhone`, `idRouteAs`) VALUES
(101, 'Samuel', 'Cabal', '4421234543', 122),
(102, 'Raul', 'Hernandez', '4421475543', 123);

-- --------------------------------------------------------

--
-- Table structure for table `Riders`
--

CREATE TABLE `Riders` (
  `idRider` double NOT NULL,
  `strFname` varchar(25) COLLATE utf32_spanish2_ci NOT NULL,
  `strLname` varchar (25) COLLATE utf32_spanish2_ci NOT NULL,
  `idEmail` double NULL,
  `idRidrTyp` tinyint(3) NOT NULL,
  `datLastSeen` date NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Riders booking service';

--
-- Dumping data for table `Riders`
--

INSERT INTO `Riders` (`idRider`, `strFname`, `strLname``, `idEmail`, `idRidrTyp`, `datLastSeen`) VALUES
(10, 'Gabriel', 'Trejo', 10, 1, '2018-09-29'),
(11, 'Daniel', 'Cabal', 11, 1, '2018-09-23'),
(12, 'Anonymous', 'User', "", 0, '2018-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `Emails`
--

CREATE TABLE `Emails` (
  `idEmail`` double NOT NULL,
  `strEmail` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `isVerified` boolean NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Email from users';

--
-- Dumping data for table `Emails`
--

INSERT INTO `Emails` (`idEmail`, `strEmail`, `isVerified`) VALUES
(10, 'prog.gabriel@outlook.es', 1),
(11, 'daniel.cabal@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `RiderTypes`
--

CREATE TABLE `RiderTypes` (
  `idRidrTyp` tinyint(3) NOT NULL,
  `strRidrTyp` varchar(100) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Types od riders';

--
-- Dumping data for table `Units`
--

INSERT INTO `RiderTypes` (`idRidrTyp`, `strRidrTyp`) VALUES
(0, 'Temporal'),
(11, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `BusStops`
--

CREATE TABLE `BusStops` (
  `idStop` int(10) NOT NULL,
  `strStopNm` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `numLatt` double COLLATE utf32_spanish2_ci NOT NULL,
  `numLong` double NOT NULL,
  `isActive` boolean NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci COMMENT= 'Stops across the city';

--
-- Dumping data for table `BusStops`
--

INSERT INTO `BusStops` (`idStop`, `strStopNm`, `numLatt``, `numLong`, `isActive`) VALUES
(101, 'Estación 1', 20.664786, -100.400155, 1),
(102, 'Estación 2', 20.666318, -100.399848, 1),
(103, 'Estación 3', 20.661564, -100.387427, 1),
(104, 'Estación 4', 20.662431, -100.376535, 1),
(105, 'Estación 5', 20.659757, -100.352586, 1),
(106, 'Estación 6', 20.660278, -100.347638, 1),
(107, 'Estación 7', 20.657249, -100.349287, 1),
(108, 'Estación 8', 20.656295, -100.349487, 1),
(109, 'Estación 9', 20.656541, -100.348979, 1),
(110, 'Estación 10', 20.660809, -100.346416, 1),
(111, 'Estación 11', 20.657258, -100.343225, 1),
(112, 'Estación 12', 20.656862, -100.343060, 1),
(113, 'Estación 13', 20.660420, -100.343984, 1),
(114, 'Estación 14', 20.662814, -100.377411, 1),
(115, 'Estación 15', 20.663190, -100.391411, 1),
(116, 'Estación 16', 20.666890, -100.403681, 1),
(117, 'Estación 17', 20.667733, -100.404591, 1),
(118, 'Estación 18', 20.667634, -100.405032, 1),
(119, 'Estación 19', 20.666347, -100.401733, 1),
(120, 'Estación 20', 20.664779, -100.400450, 1);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Units`
--
ALTER TABLE `Units`
  ADD PRIMARY KEY (`idUnit`),
  ADD UNIQUE KEY `ustrMatr` (`strMatr`)
  ADD UNIQUE KEY `uidDriverAs (`idDriverAs`);
  
--
-- Indexes for table `Drivers`
--
ALTER TABLE `Drivers`
  ADD PRIMARY KEY (`idDriver`),
  ADD UNIQUE KEY `unumPhone` (`numPhone`)
  ADD UNIQUE KEY `uidRouteAs` (`idRouteAs``);

--
-- Indexes for table `Riders`
--
ALTER TABLE `Riders`
  ADD PRIMARY KEY (`idRider`),
  ADD UNIQUE KEY `uidEmail` (`idEmail`);

--
-- Indexes for table `Emails`
--
ALTER TABLE `Emails`
  ADD PRIMARY KEY (`idEmail`),
  ADD UNIQUE KEY `ustrEmail` (`strEmail`);
  
--
-- Indexes for table `RyderTypes`
--
ALTER TABLE `RyderTypes`
  ADD PRIMARY KEY (`idRidrTyp`),
  ADD UNIQUE KEY `ustrRidrTyp` (`strRidrTyp`)

--
-- Indexes for table `BusStops`
--
ALTER TABLE `BusStops`
  ADD PRIMARY KEY (`idStop``),
  ADD UNIQUE KEY `ustrStopNm` (`strStopNm`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
