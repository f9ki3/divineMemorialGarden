-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 10:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divine_memorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `date`, `username`, `password`, `fname`, `lname`, `email`, `contact`, `img`, `status`) VALUES
(1, '2024-02-25', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'profile.png', 0),
(2, '2024-02-25', 'dave', 'dave', 'dave', 'bergania', 'dave@gmail.com', '09120912091', 'profile.png', 0),
(3, '2024-02-27', 'fyke', 'fyke', 'fyke', 'lleva', 'floterina@gmail.com', '09120912989', 'profile.png\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deceased_person`
--

CREATE TABLE `deceased_person` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `deceased_name` varchar(100) DEFAULT NULL,
  `grave_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawn`
--

CREATE TABLE `lawn` (
  `id` int(11) NOT NULL,
  `lawn_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawn`
--

INSERT INTO `lawn` (`id`, `lawn_name`, `description`, `status`) VALUES
(1, 'Lawn 1', 'This lawn is located near Multipurpose Hall', 0),
(2, 'Lawn 2', 'no description', 0),
(3, 'Lawn 3', 'no description', 0),
(4, 'Lawn 4', 'no description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `block_number` varchar(10) DEFAULT NULL,
  `lot_number` varchar(10) DEFAULT NULL,
  `classification` varchar(50) DEFAULT NULL,
  `lot_owner` varchar(100) DEFAULT NULL,
  `lot_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `date`, `area`, `block_number`, `lot_number`, `classification`, `lot_owner`, `lot_status`) VALUES
(1, NULL, 'Lawn 1', '1', 'A', 'Premium', 'JANE PABUSTAN 1', 0),
(2, NULL, 'Lawn 1', '1', 'B', 'Premium', 'ELEN NIETO 3', 1),
(3, NULL, 'Lawn 1', '1', 'C', 'Premium', 'AMBROSIO DELA CRUZ 1', 1),
(4, NULL, 'Lawn 1', '1', 'D', 'Premium', 'RODOLFO CONCEPCION', 0),
(5, NULL, 'Lawn 1', '1', 'E', 'Premium', 'CRISTINA ONG', 0),
(6, NULL, 'Lawn 1', '1', 'K', 'Regular', 'JANE PABUSTAN 3', 0),
(7, NULL, 'Lawn 1', '1', 'L', 'Regular', 'ELEN NIETO 4', 0),
(8, NULL, 'Lawn 1', '1', 'M', 'Regular', 'ELEN NIETO 5', 0),
(9, NULL, 'Lawn 1', '1', 'N', 'Regular', 'RODOLFO CONCEPCION 1', 0),
(10, NULL, 'Lawn 1', '1', 'O', 'Premium', 'ROSARIO MANINGAS 4', 0),
(11, NULL, 'Lawn 1', '2', 'A', 'Regular', 'VIRGINIA BUENDIA', 0),
(12, NULL, 'Lawn 1', '2', 'B', 'Regular', 'EVANGELINE CARPIO', 1),
(13, NULL, 'Lawn 1', '2', 'C', 'Regular', 'BERNARDA SANTILLAN', 0),
(14, NULL, 'Lawn 1', '2', 'D', 'Regular', 'AMBROSIO DELA CRUZ 1', 0),
(15, NULL, 'Lawn 1', '2', 'E', 'Premium', 'NENITA DELA CRUZ 2', 0),
(16, NULL, 'Lawn 1', '2', 'K', 'Regular', 'LANI CABABARO', 0),
(17, NULL, 'Lawn 1', '2', 'L', 'Regular', 'MANUEL FRANCISCO', 0),
(18, NULL, 'Lawn 1', '2', 'M', 'Regular', 'BERNARDA SANTILLAN', 0),
(19, NULL, 'Lawn 1', '2', 'N', 'Regular', 'AMBROSIO DELA CRUZ 1', 0),
(20, NULL, 'Lawn 1', '2', 'O', 'Regular', 'AMBROSIO DELA CRUZ 1', 0),
(21, NULL, 'Lawn 1', '2', 'P', 'Premium', 'LORENZO DELA CRUZ', 0),
(22, NULL, 'Lawn 1', '3', 'A', 'Regular', 'SALVACION GOMEZ', 0),
(23, NULL, 'Lawn 1', '3', 'B', 'Regular', 'NELIA CAMACHO from blk 63 A', 0),
(24, NULL, 'Lawn 1', '3', 'C', 'Regular', 'NELIA CAMACHO from blk 62 K', 0),
(25, NULL, 'Lawn 1', '3', 'D', 'Regular', 'NELIA CAMACHO', 0),
(26, NULL, 'Lawn 1', '3', 'E', 'Regular', 'DULCE CORAZON RICAFORT', 0),
(27, NULL, 'Lawn 1', '3', 'F', 'Premium', 'MA. CONCEPCION LEGASPI', 0),
(28, NULL, 'Lawn 1', '3', 'K', 'Regular', 'IMELDA AGUSTIN', 0),
(29, NULL, 'Lawn 1', '3', 'L', 'Regular', 'DOLORES LLEMOS', 0),
(30, NULL, 'Lawn 1', '3', 'M', 'Regular', 'REMEGIA GADINA', 0),
(31, NULL, 'Lawn 1', '3', 'N', 'Regular', 'RENATO COLOCADO', 0),
(32, NULL, 'Lawn 1', '3', 'O', 'Regular', 'RENATO COLOCADO 2', 0),
(33, NULL, 'Lawn 1', '3', 'P', 'Premium', 'MA. CONCEPCION LEGASPI', 0),
(40, NULL, 'Lawn 1', '4', 'A', 'Regular', 'GILDA MALLARI from JOAQUIN VILLALUNA', 0),
(41, NULL, 'Lawn 1', '4', 'B', 'Regular', 'CARMEN SAN ANTONIO', 0),
(42, NULL, 'Lawn 1', '4', 'C', 'Regular', 'EVELYN BERNALDO', 0),
(43, NULL, 'Lawn 1', '4', 'D', 'Regular', 'ANGELIE MUSNGI', 0),
(44, NULL, 'Lawn 1', '4', 'E', 'Regular', 'ANGELIE MUSNGI', 0),
(45, NULL, 'Lawn 1', '4', 'F', 'Premium', 'GLENDA MAGLONSO', 0),
(46, NULL, 'Lawn 1', '4', 'K', 'Regular', 'FLORINDA GASCON', 0),
(47, NULL, 'Lawn 1', '4', 'L', 'Regular', 'FLORINDA GASCON', 0),
(48, NULL, 'Lawn 1', '4', 'M', 'Regular', 'TONY GABOR 1', 0),
(49, NULL, 'Lawn 1', '4', 'N', 'Regular', 'TONY GABOR 1', 0),
(50, NULL, 'Lawn 1', '4', 'O', 'Regular', 'LUIS ALBERTO SAMSON', 0),
(51, NULL, 'Lawn 1', '4', 'P', 'Regular', 'LOPE TABIOS', 0),
(52, NULL, 'Lawn 1', '4', 'Q', 'Premium', 'CHONA LUMTAO 3', 0),
(53, NULL, 'Lawn 1', '5', 'A', 'Regular', 'ARACELI CALDERON', 0),
(54, NULL, 'Lawn 1', '5', 'B', 'Regular', 'GERLIE ROLLON', 0),
(55, NULL, 'Lawn 1', '5', 'C', 'Regular', 'LELAILA ALFONSO', 0),
(56, NULL, 'Lawn 1', '5', 'D', 'Regular', 'TEODORO MERLE', 0),
(57, NULL, 'Lawn 1', '5', 'E', 'Regular', 'SOCORRO SEBASTIAN', 0),
(58, NULL, 'Lawn 1', '5', 'F', 'Regular', 'MYLENE ANGELA MAMANO from Emma Agustin', 0),
(59, NULL, 'Lawn 1', '5', 'G', 'Premium', 'CHONA LUMTAO 2', 0),
(60, NULL, 'Lawn 1', '5', 'K', 'Regular', 'MELANI CASTANEDA', 0),
(61, NULL, 'Lawn 1', '5', 'L', 'Regular', 'ALBERTO PENA', 0),
(62, NULL, 'Lawn 1', '5', 'M', 'Regular', 'MA. JULIETA PENA', 0),
(63, NULL, 'Lawn 1', '5', 'N', 'Regular', 'AGNES BOQUIREN', 0),
(64, NULL, 'Lawn 1', '5', 'O', 'Regular', 'NELIA DY from MELINDA MARASIGAN', 0),
(65, NULL, 'Lawn 1', '5', 'P', 'Regular', 'MARITES ENERO', 0),
(66, NULL, 'Lawn 1', '5', 'Q', 'Premium', 'CHONA LUMTAO 1', 0),
(67, NULL, 'Lawn 1', '6', 'A', 'Regular', 'MARIA VICTORIA DELOS ARCOS', 0),
(68, NULL, 'Lawn 1', '6', 'B', 'Regular', 'MA. LUISA PENA', 0),
(69, NULL, 'Lawn 1', '6', 'C', 'Regular', 'VAN SANTOS', 0),
(70, NULL, 'Lawn 1', '6', 'D', 'Regular', 'PATRIA DUENAS', 0),
(71, NULL, 'Lawn 1', '6', 'E', 'Regular', 'ALBINA DELA CRUZ from DAMIANA PASTOLERO', 0),
(72, NULL, 'Lawn 1', '6', 'F', 'Regular', 'FILIPINA LIM', 0),
(73, NULL, 'Lawn 1', '6', 'G', 'Premium', 'MARITES FELICIANO 1', 0),
(74, NULL, 'Lawn 1', '6', 'K', 'Exterior', 'DIANNA BUGNON', 0),
(75, NULL, 'Lawn 1', '6', 'L', 'Exterior', 'NEZIEL VINUYA', 0),
(76, NULL, 'Lawn 1', '6', 'M', 'Exterior', 'AUREA V. MARCELO', 0),
(77, NULL, 'Lawn 1', '6', 'N', 'Exterior', 'IRENE C. SANMIGUEL', 0),
(78, NULL, 'Lawn 1', '6', 'O', 'Exterior', 'IRENE C. SANMIGUEL', 0),
(79, NULL, 'Lawn 1', '6', 'P', 'Exterior', 'MARITESS DELA CRUZ', 0),
(80, NULL, 'Lawn 1', '6', 'Q', 'Exterior', 'MARITES FELICIANO 2', 0),
(81, NULL, 'Lawn 1', '6', 'R', 'Prime', 'MARITES FELICIANO 3', 0),
(82, NULL, 'Lawn 1', '7', 'K', 'Premium', 'RENATO ESPIRITU JR.', 0),
(83, NULL, 'Lawn 1', '7', 'L', 'Premium', 'MARIA KRISTINA OLINO from Marissa Espiritu', 0),
(84, NULL, 'Lawn 1', '7', 'M', 'Premium', 'MA. LOURDES MARCELO', 0),
(85, NULL, 'Lawn 1', '7', 'N', 'Premium', 'AMAFE ASINAS', 0),
(86, NULL, 'Lawn 1', '7', 'O', 'Premium', 'AMAFE ASINAS', 0),
(87, NULL, 'Lawn 1', '7', 'P', 'Premium', 'REYNALDO CANDELARIO JR.', 0),
(88, NULL, 'Lawn 1', '7', 'Q', 'Premium', 'JESSIE CONCEPCION', 0),
(89, NULL, 'Lawn 1', '7', 'R', 'Premium', 'VIRGINIA CONCEPCION', 0),
(90, NULL, 'Lawn 1', '7', 'S', 'Premium', 'VIRGINIA CONCEPCION', 0),
(91, NULL, 'Lawn 1', '8', 'A', 'Regular', 'ROSANNA MARQUEZ', 0),
(92, NULL, 'Lawn 1', '8', 'B', 'Regular', 'NARCISA SANTUA', 0),
(93, NULL, 'Lawn 1', '8', 'C', 'Regular', 'MA. LOURDES MARCELO', 0),
(103, NULL, 'Lawn 1', '8', 'D', 'Regular', 'BIENVENIDO RONQUILLO JR.', 0),
(104, NULL, 'Lawn 1', '8', 'E', 'Regular', 'JUANITA DOROPA', 0),
(105, NULL, 'Lawn 1', '8', 'F', 'Regular', 'VICTORIA DELA CRUZ', 0),
(106, NULL, 'Lawn 1', '8', 'G', 'Regular', 'JULIA CONCEPCION', 0),
(107, NULL, 'Lawn 1', '8', 'H', 'Regular', 'ARSENIA CONCEPCION', 0),
(108, NULL, 'Lawn 1', '8', 'I', 'Regular', 'MELICITAS CONCEPCION', 0),
(109, NULL, 'Lawn 1', '8', 'J', 'Premium', 'JANE PABUSTAN 2', 0),
(110, NULL, 'Lawn 1', '8', 'K', 'Regular', 'EXEQUIEL PACHECO', 0),
(111, NULL, 'Lawn 1', '8', 'L', 'Regular', 'EXEQUIEL PACHECO', 0),
(112, NULL, 'Lawn 1', '8', 'M', 'Regular', 'VONJAMAR FETALINO', 0),
(113, NULL, 'Lawn 1', '8', 'N', 'Regular', 'JOAQUIN DOROPA', 0),
(114, NULL, 'Lawn 1', '8', 'O', 'Regular', 'NERMA ALCANAR', 0),
(115, NULL, 'Lawn 1', '8', 'P', 'Regular', 'RIZALINA ROMEN', 0),
(116, NULL, 'Lawn 1', '8', 'Q', 'Regular', 'RAMON PARCON', 0),
(117, NULL, 'Lawn 1', '8', 'R', 'Regular', 'NOIDA PARCON', 0),
(118, NULL, 'Lawn 1', '8', 'S', 'Regular', 'WALVIN DELA CRUZ from GERMILINA CONCEPCION', 0),
(119, NULL, 'Lawn 1', '8', 'T', 'Regular', 'AVELINA RIVERA', 0),
(120, NULL, 'Lawn 1', '9', 'A', 'Regular', 'MARLON DELA CRUZ', 0),
(121, NULL, 'Lawn 1', '9', 'B', 'Regular', 'MARIA MEDINA', 0),
(122, NULL, 'Lawn 1', '9', 'C', 'Regular', 'TORIBIO MATUBARAN', 0),
(123, NULL, 'Lawn 1', '9', 'D', 'Regular', 'BENJAMIN FRANCISCO from Analyn Francisco', 0),
(124, NULL, 'Lawn 1', '9', 'E', 'Regular', 'ANALYN FRANCISCO', 0),
(125, NULL, 'Lawn 1', '9', 'F', 'Regular', 'SENEN BUSTAMANTE', 0),
(126, NULL, 'Lawn 1', '9', 'G', 'Regular', 'NOEMI IGNACIO', 0),
(127, NULL, 'Lawn 1', '9', 'H', 'Regular', 'PHOEBE MAE MIRANDA', 0),
(128, NULL, 'Lawn 1', '9', 'I', 'Regular', 'AMPARO DE GUZMAN', 0),
(129, NULL, 'Lawn 1', '9', 'J', 'Regular', 'ROMELITO TADEO from Blk 21 Lot O', 0),
(130, NULL, 'Lawn 1', '9', 'K', 'Regular', 'FLOR ANGELI PINLAC', 0),
(131, NULL, 'Lawn 1', '9', 'L', 'Regular', 'FLOR ANGELI PINLAC', 0),
(132, NULL, 'Lawn 1', '9', 'M', 'Regular', 'NORY ANZURES', 0),
(133, NULL, 'Lawn 1', '9', 'N', 'Regular', 'JONNY CLORES', 0),
(134, NULL, 'Lawn 1', '9', 'O', 'Regular', 'MILDRED MANAGAYTAY', 0),
(135, NULL, 'Lawn 1', '9', 'P', 'Regular', 'REINERIA MORENO', 0),
(136, NULL, 'Lawn 1', '9', 'Q', 'Regular', 'ELVIRA VILLAFLORES', 0),
(137, NULL, 'Lawn 1', '9', 'R', 'Regular', 'EDWIN REMODO', 0),
(138, NULL, 'Lawn 1', '9', 'S', 'Regular', 'RAQUEL MAYORGA', 0),
(139, NULL, 'Lawn 1', '9', 'T', 'Regular', 'PAULITA YAMAMOTO', 0),
(140, NULL, 'Lawn 1', '10', 'A', 'Regular', 'ROMANA DE GUZMAN', 0),
(141, NULL, 'Lawn 1', '10', 'B', 'Regular', 'ANNIE LYN JADREN', 0),
(142, NULL, 'Lawn 1', '10', 'C', 'Regular', 'GREMARRY FRIAS', 0),
(143, NULL, 'Lawn 1', '10', 'D', 'Regular', 'SALVADOR PIÑON', 0),
(144, NULL, 'Lawn 1', '10', 'E', 'Regular', 'SALVADOR PIÑON', 0),
(145, NULL, 'Lawn 1', '10', 'F', 'Regular', 'LEDWENITA CABARLES', 0),
(146, NULL, 'Lawn 1', '10', 'G', 'Regular', 'MARIETTA VILLAFLORES', 0),
(147, NULL, 'Lawn 1', '10', 'H', 'Regular', 'MARIETTA VILLAFLORES/ SHIELA JACINTO', 0),
(148, NULL, 'Lawn 1', '10', 'I', 'Regular', 'VICTORIA FUERTE from FE ESTALILLA', 0),
(149, NULL, 'Lawn 1', '10', 'J', 'Regular', 'MARIEL MABANGLO', 0),
(150, NULL, 'Lawn 1', '10', 'K', 'Regular', 'CONSUELO REYES', 0),
(151, NULL, 'Lawn 1', '10', 'L', 'Regular', 'GIL GEPILA', 0),
(152, NULL, 'Lawn 1', '10', 'M', 'Regular', 'GINA RANGEL 2', 0),
(153, NULL, 'Lawn 1', '10', 'N', 'Regular', 'ROBELYN BROSAS CAREL', 0),
(154, NULL, 'Lawn 1', '10', 'O', 'Regular', 'RODRIGO NARIDO', 0),
(155, NULL, 'Lawn 1', '10', 'P', 'Regular', 'MIRRIAM VILLEGAS', 0),
(156, NULL, 'Lawn 1', '10', 'Q', 'Regular', 'EMILY MENDOZA', 0),
(157, NULL, 'Lawn 1', '10', 'R', 'Regular', 'CORAZON SARCAOGA', 0),
(158, NULL, 'Lawn 1', '10', 'S', 'Regular', 'THELMA ABENION', 0),
(159, NULL, 'Lawn 1', '10', 'T', 'Regular', 'ELMALYN SISON', 0),
(160, NULL, 'Lawn 1', '11', 'A', 'Regular', 'MARINA ARCEGA', 0),
(161, NULL, 'Lawn 1', '11', 'B', 'Regular', 'PERLA ALONZO', 0),
(162, NULL, 'Lawn 1', '11', 'C', 'Regular', 'GINA RANGEL', 0),
(163, NULL, 'Lawn 1', '11', 'D', 'Regular', 'ADELAIDA LIAMZON-09358828504', 0),
(164, NULL, 'Lawn 1', '11', 'E', 'Regular', 'JENETH MONDIA', 0),
(165, NULL, 'Lawn 1', '11', 'F', 'Regular', 'JANICE ROSALES', 0),
(166, NULL, 'Lawn 1', '11', 'G', 'Regular', 'JANICE ROSALES', 0),
(167, NULL, 'Lawn 1', '11', 'H', 'Regular', 'CLEO WEINER', 0),
(168, NULL, 'Lawn 1', '11', 'I', 'Regular', 'MARIA RESURRECCION SARCE from Blk 11 Lot K', 0),
(169, NULL, 'Lawn 1', '11', 'J', 'Regular', 'MARY ROSE SARCE', 0),
(170, NULL, 'Lawn 1', '11', 'K', 'Regular', 'JOSEPH ENGANO', 0),
(171, NULL, 'Lawn 1', '11', 'L', 'Regular', 'EMELITA PULIDO', 0),
(172, NULL, 'Lawn 1', '11', 'M', 'Regular', 'FLORO ANANO', 0),
(173, NULL, 'Lawn 1', '11', 'N', 'Regular', 'SARAH MALINAO', 0),
(174, NULL, 'Lawn 1', '11', 'O', 'Regular', 'JOEL RENTORIA', 0),
(175, NULL, 'Lawn 1', '11', 'P', 'Regular', 'CELSO GULINAO', 0),
(176, NULL, 'Lawn 1', '11', 'Q', 'Regular', 'ANTERA ESCAREZ', 0),
(177, NULL, 'Lawn 1', '11', 'R', 'Regular', 'OLIVIA LETIGIO', 0),
(178, NULL, 'Lawn 1', '11', 'S', 'Regular', 'OLIVA RAMOS', 0),
(179, NULL, 'Lawn 1', '11', 'T', 'Regular', 'ISABEL REBOSURA', 0),
(180, NULL, 'Lawn 1', '12', 'A', 'Regular', 'ARLANDO SANTOS 4', 0),
(181, NULL, 'Lawn 1', '12', 'B', 'Regular', 'ARLANDO SANTOS 3', 0),
(182, NULL, 'Lawn 1', '12', 'C', 'Regular', 'GINA ARCE from Blk 9 Lot S', 0),
(183, NULL, 'Lawn 1', '12', 'D', 'Regular', 'GINA ARCE', 0),
(184, NULL, 'Lawn 1', '12', 'E', 'Regular', 'GINA ARCE', 0),
(185, NULL, 'Lawn 1', '12', 'F', 'Regular', 'EVA CASTILAN', 0),
(186, NULL, 'Lawn 1', '12', 'G', 'Regular', 'EVA CASTILAN', 0),
(187, NULL, 'Lawn 1', '12', 'H', 'Regular', 'EVA CASTILAN/REBICCA RIESGO', 0),
(188, NULL, 'Lawn 1', '12', 'I', 'Regular', 'ROBERTO BORJA', 0),
(189, NULL, 'Lawn 1', '12', 'J', 'Regular', 'ANNABELLE GEROZAGA', 0),
(190, NULL, 'Lawn 1', '12', 'K', 'Regular', 'ARLANDO SANTOS', 0),
(191, NULL, 'Lawn 1', '12', 'L', 'Regular', 'ARLANDO SANTOS', 0),
(192, NULL, 'Lawn 1', '12', 'M', 'Regular', 'JENNIFER VINUYA from PRIMO AVERGONZADO', 0),
(193, NULL, 'Lawn 1', '12', 'N', 'Regular', 'RUFINA AGUNOD from PRIMO AVERGONZADO', 0),
(194, NULL, 'Lawn 1', '12', 'O', 'Regular', 'ELENITA ESPINOSA', 0),
(195, NULL, 'Lawn 1', '12', 'P', 'Regular', 'LEONARDO MATIONG', 0),
(196, NULL, 'Lawn 1', '12', 'Q', 'Regular', 'ROMEO FETALVERO', 0),
(197, NULL, 'Lawn 1', '12', 'R', 'Regular', 'SUSAN FETALVERO', 0),
(198, NULL, 'Lawn 1', '12', 'S', 'Regular', 'RHODA BALONES', 0),
(199, NULL, 'Lawn 1', '12', 'T', 'Regular', 'ANGELITA BALLERA', 0),
(200, NULL, 'Lawn 1', '13', 'A', 'Regular', 'SOFIA LERMA', 0),
(201, NULL, 'Lawn 1', '13', 'B', 'Regular', 'MA. DIOVE VALDEZ', 0),
(202, NULL, 'Lawn 1', '13', 'C', 'Regular', 'RUBY AUTENTICO', 0),
(203, NULL, 'Lawn 1', '13', 'D', 'Regular', 'KARENLIE SANTIAGO', 0),
(204, NULL, 'Lawn 1', '13', 'E', 'Regular', 'ROSEMARIE RUTOR', 0),
(205, NULL, 'Lawn 1', '13', 'F', 'Regular', 'JEANNIE VENTURINA', 0),
(206, NULL, 'Lawn 1', '13', 'G', 'Regular', 'TERESITA REYES LIM from Blk 13 Lot J', 0),
(207, NULL, 'Lawn 1', '13', 'H', 'Regular', 'ANITA LALUSIS', 0),
(208, NULL, 'Lawn 1', '13', 'I', 'Regular', 'HILDA BORBON', 0),
(209, NULL, 'Lawn 1', '13', 'J', 'Regular', 'JUVILYN EDOSMA', 0),
(210, NULL, 'Lawn 1', '13', 'K', 'Exterior', 'JOSE SALGADO SR.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deceased_person`
--
ALTER TABLE `deceased_person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `lawn`
--
ALTER TABLE `lawn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deceased_person`
--
ALTER TABLE `deceased_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawn`
--
ALTER TABLE `lawn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deceased_person`
--
ALTER TABLE `deceased_person`
  ADD CONSTRAINT `deceased_person_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
