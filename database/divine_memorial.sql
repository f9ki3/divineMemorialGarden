-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 03:53 PM
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
  `lot_owner` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `date`, `area`, `block_number`, `lot_number`, `classification`, `lot_owner`) VALUES
(1, NULL, 'Lawn 1', '1', 'A', 'Premium', 'JANE PABUSTAN 1'),
(2, NULL, 'Lawn 1', '1', 'B', 'Premium', 'ELEN NIETO 3'),
(3, NULL, 'Lawn 1', '1', 'C', 'Premium', 'AMBROSIO DELA CRUZ 1'),
(4, NULL, 'Lawn 1', '1', 'D', 'Premium', 'RODOLFO CONCEPCION'),
(5, NULL, 'Lawn 1', '1', 'E', 'Premium', 'CRISTINA ONG'),
(6, NULL, 'Lawn 1', '1', 'K', 'Regular', 'JANE PABUSTAN 3'),
(7, NULL, 'Lawn 1', '1', 'L', 'Regular', 'ELEN NIETO 4'),
(8, NULL, 'Lawn 1', '1', 'M', 'Regular', 'ELEN NIETO 5'),
(9, NULL, 'Lawn 1', '1', 'N', 'Regular', 'RODOLFO CONCEPCION 1'),
(10, NULL, 'Lawn 1', '1', 'O', 'Premium', 'ROSARIO MANINGAS 4'),
(11, NULL, 'Lawn 1', '2', 'A', 'Regular', 'VIRGINIA BUENDIA'),
(12, NULL, 'Lawn 1', '2', 'B', 'Regular', 'EVANGELINE CARPIO'),
(13, NULL, 'Lawn 1', '2', 'C', 'Regular', 'BERNARDA SANTILLAN'),
(14, NULL, 'Lawn 1', '2', 'D', 'Regular', 'AMBROSIO DELA CRUZ 1'),
(15, NULL, 'Lawn 1', '2', 'E', 'Premium', 'NENITA DELA CRUZ 2'),
(16, NULL, 'Lawn 1', '2', 'K', 'Regular', 'LANI CABABARO'),
(17, NULL, 'Lawn 1', '2', 'L', 'Regular', 'MANUEL FRANCISCO'),
(18, NULL, 'Lawn 1', '2', 'M', 'Regular', 'BERNARDA SANTILLAN'),
(19, NULL, 'Lawn 1', '2', 'N', 'Regular', 'AMBROSIO DELA CRUZ 1'),
(20, NULL, 'Lawn 1', '2', 'O', 'Regular', 'AMBROSIO DELA CRUZ 1'),
(21, NULL, 'Lawn 1', '2', 'P', 'Premium', 'LORENZO DELA CRUZ'),
(22, NULL, 'Lawn 1', '3', 'A', 'Regular', 'SALVACION GOMEZ'),
(23, NULL, 'Lawn 1', '3', 'B', 'Regular', 'NELIA CAMACHO from blk 63 A'),
(24, NULL, 'Lawn 1', '3', 'C', 'Regular', 'NELIA CAMACHO from blk 62 K'),
(25, NULL, 'Lawn 1', '3', 'D', 'Regular', 'NELIA CAMACHO'),
(26, NULL, 'Lawn 1', '3', 'E', 'Regular', 'DULCE CORAZON RICAFORT'),
(27, NULL, 'Lawn 1', '3', 'F', 'Premium', 'MA. CONCEPCION LEGASPI'),
(28, NULL, 'Lawn 1', '3', 'K', 'Regular', 'IMELDA AGUSTIN'),
(29, NULL, 'Lawn 1', '3', 'L', 'Regular', 'DOLORES LLEMOS'),
(30, NULL, 'Lawn 1', '3', 'M', 'Regular', 'REMEGIA GADINA'),
(31, NULL, 'Lawn 1', '3', 'N', 'Regular', 'RENATO COLOCADO'),
(32, NULL, 'Lawn 1', '3', 'O', 'Regular', 'RENATO COLOCADO 2'),
(33, NULL, 'Lawn 1', '3', 'P', 'Premium', 'MA. CONCEPCION LEGASPI'),
(34, NULL, 'Lawn 1', '3', 'K', 'Regular', 'IMELDA AGUSTIN'),
(35, NULL, 'Lawn 1', '3', 'L', 'Regular', 'DOLORES LLEMOS'),
(36, NULL, 'Lawn 1', '3', 'M', 'Regular', 'REMEGIA GADINA'),
(37, NULL, 'Lawn 1', '3', 'N', 'Regular', 'RENATO COLOCADO'),
(38, NULL, 'Lawn 1', '3', 'O', 'Regular', 'RENATO COLOCADO 2'),
(39, NULL, 'Lawn 1', '3', 'P', 'Premium', 'MA. CONCEPCION LEGASPI'),
(40, NULL, 'Lawn 1', '4', 'A', 'Regular', 'GILDA MALLARI from JOAQUIN VILLALUNA'),
(41, NULL, 'Lawn 1', '4', 'B', 'Regular', 'CARMEN SAN ANTONIO'),
(42, NULL, 'Lawn 1', '4', 'C', 'Regular', 'EVELYN BERNALDO'),
(43, NULL, 'Lawn 1', '4', 'D', 'Regular', 'ANGELIE MUSNGI'),
(44, NULL, 'Lawn 1', '4', 'E', 'Regular', 'ANGELIE MUSNGI'),
(45, NULL, 'Lawn 1', '4', 'F', 'Premium', 'GLENDA MAGLONSO'),
(46, NULL, 'Lawn 1', '4', 'K', 'Regular', 'FLORINDA GASCON'),
(47, NULL, 'Lawn 1', '4', 'L', 'Regular', 'FLORINDA GASCON'),
(48, NULL, 'Lawn 1', '4', 'M', 'Regular', 'TONY GABOR 1'),
(49, NULL, 'Lawn 1', '4', 'N', 'Regular', 'TONY GABOR 1'),
(50, NULL, 'Lawn 1', '4', 'O', 'Regular', 'LUIS ALBERTO SAMSON'),
(51, NULL, 'Lawn 1', '4', 'P', 'Regular', 'LOPE TABIOS'),
(52, NULL, 'Lawn 1', '4', 'Q', 'Premium', 'CHONA LUMTAO 3'),
(53, NULL, 'Lawn 1', '5', 'A', 'Regular', 'ARACELI CALDERON'),
(54, NULL, 'Lawn 1', '5', 'B', 'Regular', 'GERLIE ROLLON'),
(55, NULL, 'Lawn 1', '5', 'C', 'Regular', 'LELAILA ALFONSO'),
(56, NULL, 'Lawn 1', '5', 'D', 'Regular', 'TEODORO MERLE'),
(57, NULL, 'Lawn 1', '5', 'E', 'Regular', 'SOCORRO SEBASTIAN'),
(58, NULL, 'Lawn 1', '5', 'F', 'Regular', 'MYLENE ANGELA MAMANO from Emma Agustin'),
(59, NULL, 'Lawn 1', '5', 'G', 'Premium', 'CHONA LUMTAO 2'),
(60, NULL, 'Lawn 1', '5', 'K', 'Regular', 'MELANI CASTANEDA'),
(61, NULL, 'Lawn 1', '5', 'L', 'Regular', 'ALBERTO PENA'),
(62, NULL, 'Lawn 1', '5', 'M', 'Regular', 'MA. JULIETA PENA'),
(63, NULL, 'Lawn 1', '5', 'N', 'Regular', 'AGNES BOQUIREN'),
(64, NULL, 'Lawn 1', '5', 'O', 'Regular', 'NELIA DY from MELINDA MARASIGAN'),
(65, NULL, 'Lawn 1', '5', 'P', 'Regular', 'MARITES ENERO'),
(66, NULL, 'Lawn 1', '5', 'Q', 'Premium', 'CHONA LUMTAO 1'),
(67, NULL, 'Lawn 1', '6', 'A', 'Regular', 'MARIA VICTORIA DELOS ARCOS'),
(68, NULL, 'Lawn 1', '6', 'B', 'Regular', 'MA. LUISA PENA'),
(69, NULL, 'Lawn 1', '6', 'C', 'Regular', 'VAN SANTOS'),
(70, NULL, 'Lawn 1', '6', 'D', 'Regular', 'PATRIA DUENAS'),
(71, NULL, 'Lawn 1', '6', 'E', 'Regular', 'ALBINA DELA CRUZ from DAMIANA PASTOLERO'),
(72, NULL, 'Lawn 1', '6', 'F', 'Regular', 'FILIPINA LIM'),
(73, NULL, 'Lawn 1', '6', 'G', 'Premium', 'MARITES FELICIANO 1'),
(74, NULL, 'Lawn 1', '6', 'K', 'Exterior', 'DIANNA BUGNON'),
(75, NULL, 'Lawn 1', '6', 'L', 'Exterior', 'NEZIEL VINUYA'),
(76, NULL, 'Lawn 1', '6', 'M', 'Exterior', 'AUREA V. MARCELO'),
(77, NULL, 'Lawn 1', '6', 'N', 'Exterior', 'IRENE C. SANMIGUEL'),
(78, NULL, 'Lawn 1', '6', 'O', 'Exterior', 'IRENE C. SANMIGUEL'),
(79, NULL, 'Lawn 1', '6', 'P', 'Exterior', 'MARITESS DELA CRUZ'),
(80, NULL, 'Lawn 1', '6', 'Q', 'Exterior', 'MARITES FELICIANO 2'),
(81, NULL, 'Lawn 1', '6', 'R', 'Prime', 'MARITES FELICIANO 3'),
(82, NULL, 'Lawn 1', '7', 'K', 'Premium', 'RENATO ESPIRITU JR.'),
(83, NULL, 'Lawn 1', '7', 'L', 'Premium', 'MARIA KRISTINA OLINO from Marissa Espiritu'),
(84, NULL, 'Lawn 1', '7', 'M', 'Premium', 'MA. LOURDES MARCELO'),
(85, NULL, 'Lawn 1', '7', 'N', 'Premium', 'AMAFE ASINAS'),
(86, NULL, 'Lawn 1', '7', 'O', 'Premium', 'AMAFE ASINAS'),
(87, NULL, 'Lawn 1', '7', 'P', 'Premium', 'REYNALDO CANDELARIO JR.'),
(88, NULL, 'Lawn 1', '7', 'Q', 'Premium', 'JESSIE CONCEPCION'),
(89, NULL, 'Lawn 1', '7', 'R', 'Premium', 'VIRGINIA CONCEPCION'),
(90, NULL, 'Lawn 1', '7', 'S', 'Premium', 'VIRGINIA CONCEPCION'),
(91, NULL, 'Lawn 1', '8', 'A', 'Regular', 'ROSANNA MARQUEZ'),
(92, NULL, 'Lawn 1', '8', 'B', 'Regular', 'NARCISA SANTUA'),
(93, NULL, 'Lawn 1', '8', 'C', 'Regular', 'MA. LOURDES MARCELO'),
(94, NULL, 'Lawn 1', '7', 'N', 'Premium', 'AMAFE ASINAS'),
(95, NULL, 'Lawn 1', '7', 'O', 'Premium', 'AMAFE ASINAS'),
(96, NULL, 'Lawn 1', '7', 'P', 'Premium', 'REYNALDO CANDELARIO JR.'),
(97, NULL, 'Lawn 1', '7', 'Q', 'Premium', 'JESSIE CONCEPCION'),
(98, NULL, 'Lawn 1', '7', 'R', 'Premium', 'VIRGINIA CONCEPCION'),
(99, NULL, 'Lawn 1', '7', 'S', 'Premium', 'VIRGINIA CONCEPCION'),
(100, NULL, 'Lawn 1', '8', 'A', 'Regular', 'ROSANNA MARQUEZ'),
(101, NULL, 'Lawn 1', '8', 'B', 'Regular', 'NARCISA SANTUA'),
(102, NULL, 'Lawn 1', '8', 'C', 'Regular', 'MA. LOURDES MARCELO'),
(103, NULL, 'Lawn 1', '8', 'D', 'Regular', 'BIENVENIDO RONQUILLO JR.'),
(104, NULL, 'Lawn 1', '8', 'E', 'Regular', 'JUANITA DOROPA'),
(105, NULL, 'Lawn 1', '8', 'F', 'Regular', 'VICTORIA DELA CRUZ'),
(106, NULL, 'Lawn 1', '8', 'G', 'Regular', 'JULIA CONCEPCION'),
(107, NULL, 'Lawn 1', '8', 'H', 'Regular', 'ARSENIA CONCEPCION'),
(108, NULL, 'Lawn 1', '8', 'I', 'Regular', 'MELICITAS CONCEPCION'),
(109, NULL, 'Lawn 1', '8', 'J', 'Premium', 'JANE PABUSTAN 2'),
(110, NULL, 'Lawn 1', '8', 'K', 'Regular', 'EXEQUIEL PACHECO'),
(111, NULL, 'Lawn 1', '8', 'L', 'Regular', 'EXEQUIEL PACHECO'),
(112, NULL, 'Lawn 1', '8', 'M', 'Regular', 'VONJAMAR FETALINO'),
(113, NULL, 'Lawn 1', '8', 'N', 'Regular', 'JOAQUIN DOROPA'),
(114, NULL, 'Lawn 1', '8', 'O', 'Regular', 'NERMA ALCANAR'),
(115, NULL, 'Lawn 1', '8', 'P', 'Regular', 'RIZALINA ROMEN'),
(116, NULL, 'Lawn 1', '8', 'Q', 'Regular', 'RAMON PARCON'),
(117, NULL, 'Lawn 1', '8', 'R', 'Regular', 'NOIDA PARCON'),
(118, NULL, 'Lawn 1', '8', 'S', 'Regular', 'WALVIN DELA CRUZ from GERMILINA CONCEPCION'),
(119, NULL, 'Lawn 1', '8', 'T', 'Regular', 'AVELINA RIVERA'),
(120, NULL, 'Lawn 1', '9', 'A', 'Regular', 'MARLON DELA CRUZ'),
(121, NULL, 'Lawn 1', '9', 'B', 'Regular', 'MARIA MEDINA'),
(122, NULL, 'Lawn 1', '9', 'C', 'Regular', 'TORIBIO MATUBARAN'),
(123, NULL, 'Lawn 1', '9', 'D', 'Regular', 'BENJAMIN FRANCISCO from Analyn Francisco'),
(124, NULL, 'Lawn 1', '9', 'E', 'Regular', 'ANALYN FRANCISCO'),
(125, NULL, 'Lawn 1', '9', 'F', 'Regular', 'SENEN BUSTAMANTE'),
(126, NULL, 'Lawn 1', '9', 'G', 'Regular', 'NOEMI IGNACIO'),
(127, NULL, 'Lawn 1', '9', 'H', 'Regular', 'PHOEBE MAE MIRANDA'),
(128, NULL, 'Lawn 1', '9', 'I', 'Regular', 'AMPARO DE GUZMAN'),
(129, NULL, 'Lawn 1', '9', 'J', 'Regular', 'ROMELITO TADEO from Blk 21 Lot O'),
(130, NULL, 'Lawn 1', '9', 'K', 'Regular', 'FLOR ANGELI PINLAC'),
(131, NULL, 'Lawn 1', '9', 'L', 'Regular', 'FLOR ANGELI PINLAC'),
(132, NULL, 'Lawn 1', '9', 'M', 'Regular', 'NORY ANZURES'),
(133, NULL, 'Lawn 1', '9', 'N', 'Regular', 'JONNY CLORES'),
(134, NULL, 'Lawn 1', '9', 'O', 'Regular', 'MILDRED MANAGAYTAY'),
(135, NULL, 'Lawn 1', '9', 'P', 'Regular', 'REINERIA MORENO'),
(136, NULL, 'Lawn 1', '9', 'Q', 'Regular', 'ELVIRA VILLAFLORES'),
(137, NULL, 'Lawn 1', '9', 'R', 'Regular', 'EDWIN REMODO'),
(138, NULL, 'Lawn 1', '9', 'S', 'Regular', 'RAQUEL MAYORGA'),
(139, NULL, 'Lawn 1', '9', 'T', 'Regular', 'PAULITA YAMAMOTO'),
(140, NULL, 'Lawn 1', '10', 'A', 'Regular', 'ROMANA DE GUZMAN'),
(141, NULL, 'Lawn 1', '10', 'B', 'Regular', 'ANNIE LYN JADREN'),
(142, NULL, 'Lawn 1', '10', 'C', 'Regular', 'GREMARRY FRIAS'),
(143, NULL, 'Lawn 1', '10', 'D', 'Regular', 'SALVADOR PIÑON'),
(144, NULL, 'Lawn 1', '10', 'E', 'Regular', 'SALVADOR PIÑON'),
(145, NULL, 'Lawn 1', '10', 'F', 'Regular', 'LEDWENITA CABARLES'),
(146, NULL, 'Lawn 1', '10', 'G', 'Regular', 'MARIETTA VILLAFLORES'),
(147, NULL, 'Lawn 1', '10', 'H', 'Regular', 'MARIETTA VILLAFLORES/ SHIELA JACINTO'),
(148, NULL, 'Lawn 1', '10', 'I', 'Regular', 'VICTORIA FUERTE from FE ESTALILLA'),
(149, NULL, 'Lawn 1', '10', 'J', 'Regular', 'MARIEL MABANGLO'),
(150, NULL, 'Lawn 1', '10', 'K', 'Regular', 'CONSUELO REYES'),
(151, NULL, 'Lawn 1', '10', 'L', 'Regular', 'GIL GEPILA'),
(152, NULL, 'Lawn 1', '10', 'M', 'Regular', 'GINA RANGEL 2'),
(153, NULL, 'Lawn 1', '10', 'N', 'Regular', 'ROBELYN BROSAS CAREL'),
(154, NULL, 'Lawn 1', '10', 'O', 'Regular', 'RODRIGO NARIDO'),
(155, NULL, 'Lawn 1', '10', 'P', 'Regular', 'MIRRIAM VILLEGAS'),
(156, NULL, 'Lawn 1', '10', 'Q', 'Regular', 'EMILY MENDOZA'),
(157, NULL, 'Lawn 1', '10', 'R', 'Regular', 'CORAZON SARCAOGA'),
(158, NULL, 'Lawn 1', '10', 'S', 'Regular', 'THELMA ABENION'),
(159, NULL, 'Lawn 1', '10', 'T', 'Regular', 'ELMALYN SISON'),
(160, NULL, 'Lawn 1', '11', 'A', 'Regular', 'MARINA ARCEGA'),
(161, NULL, 'Lawn 1', '11', 'B', 'Regular', 'PERLA ALONZO'),
(162, NULL, 'Lawn 1', '11', 'C', 'Regular', 'GINA RANGEL'),
(163, NULL, 'Lawn 1', '11', 'D', 'Regular', 'ADELAIDA LIAMZON-09358828504'),
(164, NULL, 'Lawn 1', '11', 'E', 'Regular', 'JENETH MONDIA'),
(165, NULL, 'Lawn 1', '11', 'F', 'Regular', 'JANICE ROSALES'),
(166, NULL, 'Lawn 1', '11', 'G', 'Regular', 'JANICE ROSALES'),
(167, NULL, 'Lawn 1', '11', 'H', 'Regular', 'CLEO WEINER'),
(168, NULL, 'Lawn 1', '11', 'I', 'Regular', 'MARIA RESURRECCION SARCE from Blk 11 Lot K'),
(169, NULL, 'Lawn 1', '11', 'J', 'Regular', 'MARY ROSE SARCE'),
(170, NULL, 'Lawn 1', '11', 'K', 'Regular', 'JOSEPH ENGANO'),
(171, NULL, 'Lawn 1', '11', 'L', 'Regular', 'EMELITA PULIDO'),
(172, NULL, 'Lawn 1', '11', 'M', 'Regular', 'FLORO ANANO'),
(173, NULL, 'Lawn 1', '11', 'N', 'Regular', 'SARAH MALINAO'),
(174, NULL, 'Lawn 1', '11', 'O', 'Regular', 'JOEL RENTORIA'),
(175, NULL, 'Lawn 1', '11', 'P', 'Regular', 'CELSO GULINAO'),
(176, NULL, 'Lawn 1', '11', 'Q', 'Regular', 'ANTERA ESCAREZ'),
(177, NULL, 'Lawn 1', '11', 'R', 'Regular', 'OLIVIA LETIGIO'),
(178, NULL, 'Lawn 1', '11', 'S', 'Regular', 'OLIVA RAMOS'),
(179, NULL, 'Lawn 1', '11', 'T', 'Regular', 'ISABEL REBOSURA'),
(180, NULL, 'Lawn 1', '12', 'A', 'Regular', 'ARLANDO SANTOS 4'),
(181, NULL, 'Lawn 1', '12', 'B', 'Regular', 'ARLANDO SANTOS 3'),
(182, NULL, 'Lawn 1', '12', 'C', 'Regular', 'GINA ARCE from Blk 9 Lot S'),
(183, NULL, 'Lawn 1', '12', 'D', 'Regular', 'GINA ARCE'),
(184, NULL, 'Lawn 1', '12', 'E', 'Regular', 'GINA ARCE'),
(185, NULL, 'Lawn 1', '12', 'F', 'Regular', 'EVA CASTILAN'),
(186, NULL, 'Lawn 1', '12', 'G', 'Regular', 'EVA CASTILAN'),
(187, NULL, 'Lawn 1', '12', 'H', 'Regular', 'EVA CASTILAN/REBICCA RIESGO'),
(188, NULL, 'Lawn 1', '12', 'I', 'Regular', 'ROBERTO BORJA'),
(189, NULL, 'Lawn 1', '12', 'J', 'Regular', 'ANNABELLE GEROZAGA'),
(190, NULL, 'Lawn 1', '12', 'K', 'Regular', 'ARLANDO SANTOS'),
(191, NULL, 'Lawn 1', '12', 'L', 'Regular', 'ARLANDO SANTOS'),
(192, NULL, 'Lawn 1', '12', 'M', 'Regular', 'JENNIFER VINUYA from PRIMO AVERGONZADO'),
(193, NULL, 'Lawn 1', '12', 'N', 'Regular', 'RUFINA AGUNOD from PRIMO AVERGONZADO'),
(194, NULL, 'Lawn 1', '12', 'O', 'Regular', 'ELENITA ESPINOSA'),
(195, NULL, 'Lawn 1', '12', 'P', 'Regular', 'LEONARDO MATIONG'),
(196, NULL, 'Lawn 1', '12', 'Q', 'Regular', 'ROMEO FETALVERO'),
(197, NULL, 'Lawn 1', '12', 'R', 'Regular', 'SUSAN FETALVERO'),
(198, NULL, 'Lawn 1', '12', 'S', 'Regular', 'RHODA BALONES'),
(199, NULL, 'Lawn 1', '12', 'T', 'Regular', 'ANGELITA BALLERA'),
(200, NULL, 'Lawn 1', '13', 'A', 'Regular', 'SOFIA LERMA'),
(201, NULL, 'Lawn 1', '13', 'B', 'Regular', 'MA. DIOVE VALDEZ'),
(202, NULL, 'Lawn 1', '13', 'C', 'Regular', 'RUBY AUTENTICO'),
(203, NULL, 'Lawn 1', '13', 'D', 'Regular', 'KARENLIE SANTIAGO'),
(204, NULL, 'Lawn 1', '13', 'E', 'Regular', 'ROSEMARIE RUTOR'),
(205, NULL, 'Lawn 1', '13', 'F', 'Regular', 'JEANNIE VENTURINA'),
(206, NULL, 'Lawn 1', '13', 'G', 'Regular', 'TERESITA REYES LIM from Blk 13 Lot J'),
(207, NULL, 'Lawn 1', '13', 'H', 'Regular', 'ANITA LALUSIS'),
(208, NULL, 'Lawn 1', '13', 'I', 'Regular', 'HILDA BORBON'),
(209, NULL, 'Lawn 1', '13', 'J', 'Regular', 'JUVILYN EDOSMA'),
(210, NULL, 'Lawn 1', '13', 'K', 'Exterior', 'JOSE SALGADO SR.'),
(211, NULL, 'Lawn 1', '13', 'L', 'Exterior', 'JOSE SALGADO JR'),
(212, NULL, 'Lawn 1', '13', 'M', 'Exterior', 'MARIA CONCEPCION LECETIVO from B Capangyarihan'),
(213, NULL, 'Lawn 1', '13', 'N', 'Exterior', 'IRENE C. SANMIGUEL'),
(214, NULL, 'Lawn 1', '13', 'O', 'Exterior', 'PABLO SAN MIGUEL JR.'),
(215, NULL, 'Lawn 1', '13', 'P', 'Exterior', 'MA.THERESA VERGARA'),
(216, NULL, 'Lawn 1', '13', 'Q', 'Exterior', 'ANGELICA CALONGE'),
(217, NULL, 'Lawn 1', '13', 'R', 'Exterior', 'EMILIA BARRETO'),
(218, NULL, 'Lawn 1', '13', 'S', 'Exterior', 'FLUELLEN ANN CABARON from Maybel San Pascual'),
(219, NULL, 'Lawn 1', '13', 'T', 'Exterior', 'ANNALYN GRACE NAVARRO from Maybel San Pascual'),
(220, NULL, 'Lawn 1', '14', 'A', 'Premium', 'MYRNA BAUTISTA'),
(221, NULL, 'Lawn 1', '14', 'B', 'Premium', 'MYRNA BAUTISTA'),
(222, NULL, 'Lawn 1', '14', 'C', 'Premium', 'RUBY ROSE ADRIANO'),
(223, NULL, 'Lawn 1', '14', 'D', 'Premium', 'ALVIN TERMULO from 7 Q'),
(224, NULL, 'Lawn 1', '14', 'E', 'Premium', 'ANGELINA DEFUNTORUM from Noemi Esguerra'),
(225, NULL, 'Lawn 1', '14', 'F', 'Premium', 'FREDERICK BARROQUILLO'),
(226, NULL, 'Lawn 1', '14', 'G', 'Premium', 'FREDERICK BARROQUILLO'),
(227, NULL, 'Lawn 1', '14', 'K', 'Regular', 'ROBERTO CARAIG from Blk 35 lot J'),
(228, NULL, 'Lawn 1', '14', 'L', 'Regular', 'ROBERTO CARAIG'),
(229, NULL, 'Lawn 1', '14', 'M', 'Regular', 'NEIL SANTIAGO'),
(230, NULL, 'Lawn 1', '14', 'N', 'Regular', 'ALAINE ROCA'),
(231, NULL, 'Lawn 1', '14', 'O', 'Regular', 'DIONISIO SUMERA'),
(232, NULL, 'Lawn 1', '14', 'P', 'Regular', 'DIONISIO SUMERA'),
(233, NULL, 'Lawn 1', '14', 'Q', 'Regular', 'MARY ROSE ADRIANO'),
(234, NULL, 'Lawn 1', '14', 'R', 'Premium', 'SOLEDAD DELA CRUZ'),
(235, NULL, 'Lawn 1', '14', 'S', 'Premium', 'MICHAEL DE OMANIA'),
(236, NULL, 'Lawn 1', '14', 'T', 'Premium', 'MARGIE DE OMANIA'),
(237, NULL, 'Lawn 1', '15', 'A', 'Regular', 'MARCELINA EUGENIO'),
(238, NULL, 'Lawn 1', '15', 'B', 'Regular', 'MARCELINA EUGENIO'),
(239, NULL, 'Lawn 1', '15', 'C', 'Regular', 'KATHERINE LUMIBAO'),
(240, NULL, 'Lawn 1', '15', 'D', 'Regular', 'ROGELIO RIVERA'),
(241, NULL, 'Lawn 1', '15', 'E', 'Regular', 'JUANITA MOLINA'),
(242, NULL, 'Lawn 1', '15', 'F', 'Regular', 'JERAMIE MENDOZA from Blk 14 Lot Q'),
(243, NULL, 'Lawn 1', '15', 'G', 'Regular', 'YVETTE SORRO'),
(244, NULL, 'Lawn 1', '15', 'H', 'Regular', 'MACARIA DAROLE'),
(245, NULL, 'Lawn 1', '15', 'I', 'Regular', 'GINA DE GUZMAN'),
(246, NULL, 'Lawn 1', '15', 'J', 'Regular', 'MARITA ALCALA'),
(247, NULL, 'Lawn 1', '15', 'K', 'Regular', 'ETHEL CECILLE BALTAZAR'),
(248, NULL, 'Lawn 1', '15', 'L', 'Regular', 'MARCELINA EUGENIO from Blk 23 LOT s'),
(249, NULL, 'Lawn 1', '15', 'M', 'Regular', 'PRISCILA CAPUCION'),
(250, NULL, 'Lawn 1', '15', 'N', 'Regular', 'JOSEPITO CAPUCION'),
(251, NULL, 'Lawn 1', '15', 'O', 'Regular', 'JESUS MASANGKAY'),
(252, NULL, 'Lawn 1', '15', 'P', 'Regular', 'GLORIA IBAY from Jan Carlos Tansioco'),
(253, NULL, 'Lawn 1', '15', 'Q', 'Regular', 'JOHANNA SALAZAR'),
(254, NULL, 'Lawn 1', '15', 'R', 'Regular', 'LEONORA TABALINA'),
(255, NULL, 'Lawn 1', '15', 'S', 'Regular', 'LENNIE SALAZAR'),
(256, NULL, 'Lawn 1', '15', 'T', 'Regular', 'MARITA ALCALA'),
(257, NULL, 'Lawn 1', '16', 'A', 'Regular', 'LILIAN CORTEZ'),
(258, NULL, 'Lawn 1', '16', 'B', 'Regular', 'CORNELIA PEREZ'),
(259, NULL, 'Lawn 1', '16', 'C', 'Regular', 'JOSEFA LE GEOC'),
(260, NULL, 'Lawn 1', '16', 'D', 'Regular', 'IMELDA GIRON'),
(261, NULL, 'Lawn 1', '16', 'E', 'Regular', 'GLENN CASTRO'),
(262, NULL, 'Lawn 1', '16', 'F', 'Regular', 'REYGIAN LABARETE'),
(263, NULL, 'Lawn 1', '16', 'G', 'Regular', 'GILDA MANESE'),
(264, NULL, 'Lawn 1', '16', 'H', 'Regular', 'JULIETA BAGADIONG'),
(265, NULL, 'Lawn 1', '16', 'I', 'Regular', 'ZENON DADIRO'),
(266, NULL, 'Lawn 1', '16', 'J', 'Regular', 'GREGORIA SOBERANO'),
(267, NULL, 'Lawn 1', '16', 'K', 'Regular', 'MA. SALOME BUARAO'),
(268, NULL, 'Lawn 1', '16', 'L', 'Regular', 'MARY GRACE LOQUIAS'),
(269, NULL, 'Lawn 1', '16', 'M', 'Regular', 'ANA MARIE JAVIER'),
(270, NULL, 'Lawn 1', '16', 'N', 'Regular', 'IMELDA GIRON'),
(271, NULL, 'Lawn 1', '16', 'O', 'Regular', 'CELIA DE DIOS'),
(272, NULL, 'Lawn 1', '16', 'P', 'Regular', 'CELIA DE DIOS'),
(273, NULL, 'Lawn 1', '16', 'Q', 'Regular', 'ENRIQUE TAMBOON'),
(274, NULL, 'Lawn 1', '16', 'R', 'Regular', 'RONALD ZAPE from Blk 16 Lot P'),
(275, NULL, 'Lawn 1', '16', 'S', 'Regular', 'FLORENTINO DEL ROSARIO'),
(276, NULL, 'Lawn 1', '16', 'T', 'Regular', 'FLORENTINO DEL ROSARIO'),
(277, NULL, 'Lawn 1', '17', 'A', 'Regular', 'ROSITA HIZON'),
(278, NULL, 'Lawn 1', '17', 'B', 'Regular', 'AURORA EVANGELISTA'),
(279, NULL, 'Lawn 1', '17', 'C', 'Regular', 'CESAR EVANGELISTA'),
(280, NULL, 'Lawn 1', '17', 'D', 'Regular', 'LIBRITO RIOTOTAR JR.'),
(281, NULL, 'Lawn 1', '17', 'E', 'Regular', 'TESSALUNICA TAYO'),
(282, NULL, 'Lawn 1', '17', 'F', 'Regular', 'GINA FREMISTA'),
(283, NULL, 'Lawn 1', '17', 'G', 'Regular', 'MILLER SEVILLA'),
(284, NULL, 'Lawn 1', '17', 'H', 'Regular', 'RUDY BETONIO'),
(285, NULL, 'Lawn 1', '17', 'I', 'Regular', 'FLORENDO ANSALE'),
(286, NULL, 'Lawn 1', '17', 'J', 'Regular', 'EDNA ESCANO'),
(287, NULL, 'Lawn 1', '17', 'K', 'Regular', 'EUFROCINA PASCUA'),
(288, NULL, 'Lawn 1', '17', 'L', 'Regular', 'MA. ALMA DE OCAMPO'),
(289, NULL, 'Lawn 1', '17', 'M', 'Regular', 'MA. ALMA DE OCAMPO'),
(290, NULL, 'Lawn 1', '17', 'N', 'Regular', 'LEONY DELA CRUZ'),
(291, NULL, 'Lawn 1', '17', 'O', 'Regular', 'JOSEPH CABANGIL'),
(292, NULL, 'Lawn 1', '17', 'P', 'Regular', 'ADELAIDA ADALLA'),
(293, NULL, 'Lawn 1', '17', 'Q', 'Regular', 'ERLINDA LINCOLN'),
(294, NULL, 'Lawn 1', '17', 'R', 'Regular', 'MARLON CERVANTES'),
(295, NULL, 'Lawn 1', '17', 'S', 'Regular', 'JULIANA BARGOS'),
(296, NULL, 'Lawn 1', '17', 'T', 'Regular', 'TRANQUILINA PINGOL'),
(297, NULL, 'Lawn 1', '18', 'A', 'Regular', 'GEORGE MORADA'),
(298, NULL, 'Lawn 1', '18', 'B', 'Regular', 'GEORGE MORADA'),
(299, NULL, 'Lawn 1', '18', 'C', 'Regular', 'MARGARITA RAYMUNDO'),
(300, NULL, 'Lawn 1', '18', 'D', 'Regular', 'RAYMUND RAYMUNDO'),
(301, NULL, 'Lawn 1', '18', 'E', 'Regular', 'MARICRIS CAPULO'),
(302, NULL, 'Lawn 1', '18', 'F', 'Regular', 'LIWAYWAY JOHNSON'),
(303, NULL, 'Lawn 1', '18', 'G', 'Regular', 'AUREA AGUILLON'),
(304, NULL, 'Lawn 1', '18', 'H', 'Regular', 'AUREA AGUILLON'),
(305, NULL, 'Lawn 1', '18', 'I', 'Regular', 'MENILDA GALEDO'),
(306, NULL, 'Lawn 1', '18', 'J', 'Regular', 'NARCISO PERALTA'),
(307, NULL, 'Lawn 1', '18', 'K', 'Regular', 'EVELIO VARGAS'),
(308, NULL, 'Lawn 1', '18', 'L', 'Regular', 'YOLANDA VARGAS'),
(309, NULL, 'Lawn 1', '18', 'M', 'Regular', 'EDGARDO RAYMUNDO'),
(310, NULL, 'Lawn 1', '18', 'N', 'Regular', 'MA. TERESA CELESTINO'),
(311, NULL, 'Lawn 1', '18', 'O', 'Regular', 'MA. VICTORIA WENCESLAO'),
(312, NULL, 'Lawn 1', '18', 'P', 'Regular', 'MERCY DELA CERNA'),
(313, NULL, 'Lawn 1', '18', 'Q', 'Regular', 'MERCY DELA CERNA'),
(314, NULL, 'Lawn 1', '18', 'R', 'Regular', 'ELLEN BALLESTEROS'),
(315, NULL, 'Lawn 1', '18', 'S', 'Regular', 'RENATO BENEDICTO'),
(316, NULL, 'Lawn 1', '18', 'T', 'Regular', 'ROSEMARIE MAURICIO'),
(317, NULL, 'Lawn 1', '19', 'A', 'Regular', 'MICHAEL RODRIGUEZ'),
(318, NULL, 'Lawn 1', '19', 'B', 'Regular', 'THELMA LOBRIO'),
(319, NULL, 'Lawn 1', '19', 'C', 'Regular', 'LEONORA TIONGCO from Blk 19 Lot N'),
(320, NULL, 'Lawn 1', '19', 'D', 'Regular', 'LEONORA TIONGCO'),
(321, NULL, 'Lawn 1', '19', 'E', 'Regular', 'ESTELITA FERRERA'),
(322, NULL, 'Lawn 1', '19', 'F', 'Regular', 'ESTELITA FERRERA'),
(323, NULL, 'Lawn 1', '19', 'G', 'Regular', 'ROOSEVELT HILARIO'),
(327, '2024-03-21 00:00:00', 'Lawn 1', '15', 'A', 'Premium', 'SARAH GERONIMO'),
(328, '2024-03-14 00:00:00', 'Lawn 1', '15', 'F', 'Exterior', 'MIKE ANGELO'),
(329, '2024-03-23 00:00:00', 'Lawn 1', '15', 'T', 'Premium', 'DANIELLE CEASAR'),
(330, '2024-03-24 00:00:00', 'Lawn 1', '15', 'G', 'Premium', 'JOHN ARNOLD ');

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
