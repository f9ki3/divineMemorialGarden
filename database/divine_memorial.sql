-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 02:22 PM
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
-- Table structure for table `deceased_person`
--

CREATE TABLE `deceased_person` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `deceased_name` varchar(100) DEFAULT NULL,
  `grave_status` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `dod` date NOT NULL,
  `deceased_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deceased_person`
--

INSERT INTO `deceased_person` (`id`, `property_id`, `date`, `deceased_name`, `grave_status`, `dob`, `dod`, `deceased_type`) VALUES
(585, 1, '2024-04-22 08:16:35', 'Michaels', 'Body', '2024-04-18', '2024-04-30', 'upper'),
(586, 1, '2024-04-22 08:16:42', 'Arnold', 'Remains', '0000-00-00', '2024-04-26', 'lower'),
(587, 3, '2024-04-24 23:04:11', 'Juan Dela Cruz', 'Regular', '2016-02-09', '2024-04-23', 'upper'),
(588, 3, '2024-04-24 23:05:09', 'April Norse Noi', 'Premium', '2003-02-13', '2024-04-14', 'lower');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `maintenance_user_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipal` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_date` datetime NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_date`, `sender_id`, `reciever_id`, `message_content`, `message_status`) VALUES
(16, '2024-04-25 08:47:51', 2, 101, 'sample message', 0),
(17, '2024-04-25 08:49:52', 2, 101, 'asassa', 0),
(18, '2024-04-25 08:56:08', 2, 100, 'Hello', 0),
(19, '2024-04-25 09:23:55', 2, 104, 'Hello', 0),
(20, '2024-04-25 09:24:21', 2, 107, 'pre', 0),
(21, '2024-04-25 10:00:37', 2, 104, 'yow', 0),
(22, '2024-04-25 10:00:57', 2, 102, 'Hello tol', 0),
(23, '2024-04-25 10:03:06', 2, 100, 'Yow utang mo mag bayad kana', 0),
(24, '2024-04-25 10:03:20', 2, 107, 'ginagawa mo', 0),
(25, '2024-04-25 10:03:43', 2, 107, 'hahaha', 0),
(26, '2024-04-25 10:03:50', 2, 101, 'pre', 0),
(27, '2024-04-25 10:04:00', 2, 101, 'mag paramdam kana', 0),
(28, '2024-04-25 10:04:10', 2, 104, 'ano kaya yun', 0),
(29, '2024-04-25 10:04:16', 2, 100, 'tol', 0),
(30, '2024-04-25 10:04:26', 2, 100, 'shot na', 0),
(31, '2024-04-25 11:22:42', 100, 2, 'mareh', 0),
(32, '2024-04-25 11:33:31', 100, 2, 'Pre', 0),
(33, '2024-04-25 11:35:16', 100, 2, 'mareh', 0),
(34, '2024-04-25 12:32:55', 100, 2, 'hello', 0),
(35, '2024-04-25 12:42:57', 100, 2, 'yow', 0),
(36, '2024-04-25 12:43:25', 2, 100, 'bakit', 0),
(37, '2024-04-25 12:49:11', 100, 2, 'may tatanong lang ako', 0),
(38, '2024-04-25 12:49:34', 2, 100, 'Okay sigeh ano ba yon?', 0),
(39, '2024-04-25 13:19:40', 2, 100, 'Haha so ganito na nga alam mo bang pinoposas ang mga bata hahahahahahahahahaha', 0),
(41, '2024-04-25 13:49:52', 2, 100, 'hello', 0),
(42, '2024-04-25 13:52:55', 2, 0, 'assas', 0),
(43, '2024-04-25 13:54:27', 2, 100, 'asassas', 0),
(44, '2024-04-25 13:58:51', 2, 100, 'okay', 0),
(45, '2024-04-25 14:07:31', 2, 100, 'dcghfhgfhj', 0),
(46, '2024-04-25 14:12:06', 100, 0, 'OKay start na', 0),
(47, '2024-04-25 14:12:32', 100, 2, 'Okay', 0),
(48, '2024-04-25 14:13:10', 100, 2, 'Game', 0),
(49, '2024-04-25 14:14:06', 100, 2, 'delay', 0),
(50, '2024-04-25 14:16:37', 2, 100, 'puro bugs na', 0),
(51, '2024-04-25 14:17:03', 100, 2, 'haha ou nga eh', 0),
(52, '2024-04-25 14:17:16', 100, 2, 'ano ba mmaganda gawin', 0),
(53, '2024-04-25 14:18:10', 2, 100, 'ey ano na', 0),
(54, '2024-04-25 14:20:23', 2, 100, 'party na', 0),
(55, '2024-04-25 14:23:45', 2, 100, 'asssas', 0),
(56, '2024-04-25 14:23:54', 2, 0, 'aa', 0),
(57, '2024-04-25 14:24:08', 2, 100, 'sad', 0),
(59, '2024-04-25 14:31:20', 2, 0, 'samasak askajsaskl asklaksklkasa aslkaslkalskaa askalkslak akslakslka askalskl alkslaksl ka lasklkasl', 0),
(60, '2024-04-25 14:31:38', 2, 100, 'sammplesasa asasasasd sda asd wsdasasd as', 0),
(61, '2024-04-25 14:32:09', 2, 100, 'yow tara na game', 0),
(62, '2024-04-25 14:32:19', 2, 100, 'G kapa pa', 0),
(63, '2024-04-25 14:32:28', 2, 101, 'Pre Kumusta', 0),
(64, '2024-04-25 14:32:47', 2, 104, 'Tol laban na', 0),
(65, '2024-04-25 14:32:58', 2, 102, 'Pasok ka bukas?', 0),
(66, '2024-04-25 14:33:26', 2, 102, 'Hello Tol ano ganap natin pasok kaba OJT?', 0),
(67, '2024-04-25 14:33:36', 2, 102, 'Okay Sigeh', 0),
(68, '2024-04-25 14:33:50', 100, 2, 'Mareh laban na daw', 0),
(69, '2024-04-25 14:34:26', 2, 100, 'G ba open kana account', 0),
(70, '2024-04-25 14:34:43', 100, 2, 'cgehcegh', 0),
(71, '2024-04-25 14:38:38', 2, 101, 'Pre g na daw', 0),
(72, '2024-04-25 14:39:44', 101, 2, 'Hi', 0),
(73, '2024-04-25 14:40:18', 101, 2, 'hello', 0),
(74, '2024-04-25 14:40:25', 101, 2, 'Okay', 0),
(75, '2024-04-25 14:40:41', 101, 2, 'This is a test', 0),
(76, '2024-04-25 14:40:49', 2, 101, 'OKay', 0),
(77, '2024-04-25 14:41:04', 101, 2, 'Rank game na', 0),
(78, '2024-04-25 14:41:16', 2, 101, 'okay gamme na ba pre', 0),
(79, '2024-04-25 14:41:26', 101, 2, 'Ou', 0),
(80, '2024-04-25 14:59:51', 108, 107, 'Hello', 0),
(81, '2024-04-25 15:00:18', 108, 107, 'Hello inquire lng ako sa lot posted ana 63 K', 0),
(82, '2024-04-25 15:00:29', 108, 107, 'Cash ko po sana', 0),
(83, '2024-04-25 15:01:01', 108, 106, 'Hello Im Caprio inquire po sanaa ako sa lupa', 0),
(84, '2024-04-25 15:01:17', 108, 101, 'Hello po mag Inquire lng po ako sa binibentang lupa po', 0),
(85, '2024-04-25 15:01:44', 108, 104, 'Hello Po', 0),
(86, '2024-04-25 17:42:47', 2, 101, 'prre', 0),
(87, '2024-04-25 17:43:02', 2, 102, 'pre', 0),
(88, '2024-04-25 18:24:15', 111, 2, 'Hello', 0),
(89, '2024-04-25 18:24:39', 111, 2, 'Im Interested in your lot', 0),
(90, '2024-04-25 18:24:49', 111, 100, 'Hello May I inquire?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `id` int(11) NOT NULL,
  `payment_added` datetime NOT NULL,
  `payment_name` varchar(100) NOT NULL,
  `payment_description` int(11) NOT NULL,
  `payment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `lot_status` int(1) NOT NULL DEFAULT 0,
  `map_img` varchar(100) NOT NULL,
  `request_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `date`, `area`, `block_number`, `lot_number`, `classification`, `lot_owner`, `lot_status`, `map_img`, `request_status`) VALUES
(1, NULL, 'Lawn 1', '1', 'A', 'Premium', 'JANE PABUSTAN 1', 1, 'block1lotA.png', 1),
(2, NULL, 'Lawn 1', '1', 'B', 'Premium', 'ELEN NIETO 3', 1, 'block1lotB.png', 1),
(3, NULL, 'Lawn 1', '1', 'C', 'Premium', 'AMBROSIO DELA CRUZ 1', 0, 'block1lotC.png', 0),
(4, NULL, 'Lawn 1', '1', 'D', 'Premium', 'RODOLFO CONCEPCION', 0, 'block1lotC.png', 0),
(5, NULL, 'Lawn 1', '1', 'E', 'Premium', 'CRISTINA ONG', 1, 'block1lotE.png', 1),
(6, NULL, 'Lawn 1', '1', 'K', 'Regular', 'JANE PABUSTAN 3', 0, 'block1lotK.png', 0),
(7, NULL, 'Lawn 1', '1', 'L', 'Regular', 'ELEN NIETO 4', 0, 'block1lotL.png', 0),
(8, NULL, 'Lawn 1', '1', 'M', 'Regular', 'ELEN NIETO 5', 0, 'block1lotM.png', 0),
(9, NULL, 'Lawn 1', '1', 'N', 'Regular', 'RODOLFO CONCEPCION 1', 1, 'block1lotN.png', 1),
(10, NULL, 'Lawn 1', '1', 'O', 'Premium', 'ROSARIO MANINGAS 4', 0, 'block1lotO.png', 0),
(11, NULL, 'Lawn 1', '2', 'A', 'Regular', 'VIRGINIA BUENDIA', 1, 'block2lotA.png', 1),
(12, NULL, 'Lawn 1', '2', 'B', 'Regular', 'EVANGELINE CARPIOS', 1, 'block2lotB.png', 1),
(13, NULL, 'Lawn 1', '2', 'C', 'Regular', 'BERNARDA SANTILLAN', 0, 'block2lotC.png', 0),
(14, NULL, 'Lawn 1', '2', 'D', 'Regular', 'AMBROSIO DELA CRUZ 1', 1, 'block2lotD.png', 1),
(15, NULL, 'Lawn 1', '2', 'E', 'Premium', 'NENITA DELA CRUZ 2', 0, 'block2lotE.png', 1),
(16, NULL, 'Lawn 1', '2', 'K', 'Regular', 'LANI CABABARO', 0, 'block2lotK.png', 1),
(17, NULL, 'Lawn 1', '2', 'L', 'Regular', 'MANUEL FRANCISCO', 0, 'block2lotL.png', 1),
(18, NULL, 'Lawn 1', '2', 'M', 'Regular', 'BERNARDA SANTILLAN', 0, 'block2lotM.png', 0),
(19, NULL, 'Lawn 1', '2', 'N', 'Regular', 'AMBROSIO DELA CRUZ 1', 0, 'block2lotN.png', 0),
(20, NULL, 'Lawn 1', '2', 'O', 'Regular', 'AMBROSIO DELA CRUZ 1', 0, '', 0),
(21, NULL, 'Lawn 1', '2', 'P', 'Premium', 'LORENZO DELA CRUZ', 0, 'block2lotP.png', 0),
(22, NULL, 'Lawn 1', '3', 'A', 'Regular', 'SALVACION GOMEZ', 0, 'block3lotA.png', 0),
(23, NULL, 'Lawn 1', '3', 'B', 'Regular', 'NELIA CAMACHO ', 1, 'block3lotP.png', 1),
(24, NULL, 'Lawn 1', '3', 'C', 'Regular', 'NELIA CAMACHO from blk 62 K', 0, '', 0),
(25, NULL, 'Lawn 1', '3', 'D', 'Regular', 'NELIA CAMACHO', 0, '', 0),
(26, NULL, 'Lawn 1', '3', 'E', 'Regular', 'DULCE CORAZON RICAFORT', 0, 'block3lotE.png', 0),
(27, NULL, 'Lawn 1', '3', 'F', 'Premium', 'MA. CONCEPCION LEGASPI', 0, 'block3lotF.png', 0),
(28, NULL, 'Lawn 1', '3', 'K', 'Regular', 'IMELDA AGUSTIN', 0, 'block3lotK.png', 0),
(29, NULL, 'Lawn 1', '3', 'L', 'Regular', 'DOLORES LLEMOS', 0, 'block3lotL.png', 0),
(30, NULL, 'Lawn 1', '3', 'M', 'Regular', 'REMEGIA GADINA', 0, '', 0),
(31, NULL, 'Lawn 1', '3', 'N', 'Regular', 'RENATO COLOCADO', 0, '', 0),
(32, NULL, 'Lawn 1', '3', 'O', 'Regular', 'RENATO COLOCADO 2', 0, 'block2lotO.png', 0),
(33, NULL, 'Lawn 1', '3', 'P', 'Premium', 'MA. CONCEPCION LEGASPI', 0, '', 0),
(34, NULL, 'Lawn 1', '4', 'A', 'Regular', 'GILDA MALLARI from JOAQUIN VILLALUNA', 0, '', 0),
(35, NULL, 'Lawn 1', '4', 'B', 'Regular', 'CARMEN SAN ANTONIO', 0, 'block3lotB.png', 0),
(36, NULL, 'Lawn 1', '4', 'C', 'Regular', 'EVELYN BERNALDO', 0, 'block3lotC.png', 0),
(37, NULL, 'Lawn 1', '4', 'D', 'Regular', 'ANGELIE MUSNGI', 0, '', 0),
(38, NULL, 'Lawn 1', '4', 'E', 'Regular', 'ANGELIE MUSNGI', 0, 'block3lotE.png', 0),
(39, NULL, 'Lawn 1', '4', 'F', 'Premium', 'GLENDA MAGLONSO', 0, '', 0),
(40, NULL, 'Lawn 1', '4', 'K', 'Regular', 'FLORINDA GASCON', 0, '', 0),
(41, NULL, 'Lawn 1', '4', 'L', 'Regular', 'FLORINDA GASCON', 0, '', 0),
(42, NULL, 'Lawn 1', '4', 'M', 'Regular', 'TONY GABOR 1', 0, '', 0),
(43, NULL, 'Lawn 1', '4', 'N', 'Regular', 'TONY GABOR 1', 0, '', 0),
(44, NULL, 'Lawn 1', '4', 'O', 'Regular', 'LUIS ALBERTO SAMSON', 0, '', 0),
(45, NULL, 'Lawn 1', '4', 'P', 'Regular', 'LOPE TABIOS', 0, '', 0),
(46, NULL, 'Lawn 1', '4', 'Q', 'Premium', 'CHONA LUMTAO 3', 0, '', 0),
(47, NULL, 'Lawn 1', '5', 'A', 'Regular', 'ARACELI CALDERON', 0, '', 0),
(48, NULL, 'Lawn 1', '5', 'B', 'Regular', 'GERLIE ROLLON', 0, '', 0),
(49, NULL, 'Lawn 1', '5', 'C', 'Regular', 'LELAILA ALFONSO', 0, '', 0),
(50, NULL, 'Lawn 1', '5', 'D', 'Regular', 'TEODORO MERLE', 0, '', 0),
(51, NULL, 'Lawn 1', '5', 'E', 'Regular', 'SOCORRO SEBASTIAN', 0, '', 0),
(52, NULL, 'Lawn 1', '5', 'F', 'Regular', 'MYLENE ANGELA MAMANO from Emma Agustin', 0, '', 0),
(53, NULL, 'Lawn 1', '5', 'G', 'Premium', 'CHONA LUMTAO 2', 0, '', 0),
(54, NULL, 'Lawn 1', '5', 'K', 'Regular', 'MELANI CASTANEDA', 0, '', 0),
(55, NULL, 'Lawn 1', '5', 'L', 'Regular', 'ALBERTO PENA', 0, '', 0),
(56, NULL, 'Lawn 1', '5', 'M', 'Regular', 'MA. JULIETA PENA', 0, '', 0),
(57, NULL, 'Lawn 1', '5', 'N', 'Regular', 'AGNES BOQUIREN', 0, '', 0),
(58, NULL, 'Lawn 1', '5', 'O', 'Regular', 'NELIA DY from MELINDA MARASIGAN', 0, '', 0),
(59, NULL, 'Lawn 1', '5', 'P', 'Regular', 'MARITES ENERO', 0, '', 0),
(60, NULL, 'Lawn 1', '5', 'Q', 'Premium', 'CHONA LUMTAO 1', 0, '', 0),
(61, NULL, 'Lawn 1', '6', 'A', 'Regular', 'MARIA VICTORIA DELOS ARCOS', 0, '', 0),
(62, NULL, 'Lawn 1', '6', 'B', 'Regular', 'MA. LUISA PENA', 0, '', 0),
(63, NULL, 'Lawn 1', '6', 'C', 'Regular', 'VAN SANTOS', 0, '', 0),
(64, NULL, 'Lawn 1', '6', 'D', 'Regular', 'PATRIA DUENAS', 0, '', 0),
(65, NULL, 'Lawn 1', '6', 'E', 'Regular', 'ALBINA DELA CRUZ from DAMIANA PASTOLERO', 0, '', 0),
(66, NULL, 'Lawn 1', '6', 'F', 'Regular', 'FILIPINA LIM', 0, '', 0),
(67, NULL, 'Lawn 1', '6', 'G', 'Premium', 'MARITES FELICIANO 1', 0, '', 0),
(68, NULL, 'Lawn 1', '6', 'K', 'Exterior', 'DIANNA BUGNON', 0, '', 0),
(69, NULL, 'Lawn 1', '6', 'L', 'Exterior', 'NEZIEL VINUYA', 0, '', 0),
(70, NULL, 'Lawn 1', '6', 'M', 'Exterior', 'AUREA V. MARCELO', 0, '', 0),
(71, NULL, 'Lawn 1', '6', 'N', 'Exterior', 'IRENE C. SANMIGUEL', 0, '', 0),
(72, NULL, 'Lawn 1', '6', 'O', 'Exterior', 'IRENE C. SANMIGUEL', 0, '', 0),
(73, NULL, 'Lawn 1', '6', 'P', 'Exterior', 'MARITESS DELA CRUZ', 0, '', 0),
(74, NULL, 'Lawn 1', '6', 'Q', 'Exterior', 'MARITES FELICIANO 2', 0, '', 0),
(75, NULL, 'Lawn 1', '6', 'R', 'Prime', 'MARITES FELICIANO 3', 0, '', 0),
(76, NULL, 'Lawn 1', '7', 'K', 'Premium', 'RENATO ESPIRITU JR.', 0, '', 0),
(77, NULL, 'Lawn 1', '7', 'L', 'Premium', 'MARIA KRISTINA OLINO from Marissa Espiritu', 0, '', 0),
(78, NULL, 'Lawn 1', '7', 'M', 'Premium', 'MA. LOURDES MARCELO', 0, '', 0),
(79, NULL, 'Lawn 1', '7', 'N', 'Premium', 'AMAFE ASINAS', 0, '', 0),
(80, NULL, 'Lawn 1', '7', 'O', 'Premium', 'AMAFE ASINAS', 0, '', 0),
(81, NULL, 'Lawn 1', '7', 'P', 'Premium', 'REYNALDO CANDELARIO JR.', 0, '', 0),
(82, NULL, 'Lawn 1', '7', 'Q', 'Premium', 'JESSIE CONCEPCION', 0, '', 0),
(83, NULL, 'Lawn 1', '7', 'R', 'Premium', 'VIRGINIA CONCEPCION', 0, '', 0),
(84, NULL, 'Lawn 1', '7', 'S', 'Premium', 'VIRGINIA CONCEPCION', 0, '', 0),
(85, NULL, 'Lawn 1', '8', 'A', 'Regular', 'ROSANNA MARQUEZ', 0, '', 0),
(86, NULL, 'Lawn 1', '8', 'B', 'Regular', 'NARCISA SANTUA', 0, '', 0),
(87, NULL, 'Lawn 1', '8', 'C', 'Regular', 'MA. LOURDES MARCELO', 0, '', 0),
(88, NULL, 'Lawn 1', '8', 'D', 'Regular', 'BIENVENIDO RONQUILLO JR.', 0, '', 0),
(89, NULL, 'Lawn 1', '8', 'E', 'Regular', 'JUANITA DOROPA', 0, '', 0),
(90, NULL, 'Lawn 1', '8', 'F', 'Regular', 'VICTORIA DELA CRUZ', 0, '', 0),
(91, NULL, 'Lawn 1', '8', 'G', 'Regular', 'JULIA CONCEPCION', 0, '', 0),
(92, NULL, 'Lawn 1', '8', 'H', 'Regular', 'ARSENIA CONCEPCION', 0, '', 0),
(93, NULL, 'Lawn 1', '8', 'I', 'Regular', 'MELICITAS CONCEPCION', 0, '', 0),
(94, NULL, 'Lawn 1', '8', 'J', 'Premium', 'JANE PABUSTAN 2', 0, '', 0),
(95, NULL, 'Lawn 1', '8', 'K', 'Regular', 'EXEQUIEL PACHECO', 0, '', 0),
(96, NULL, 'Lawn 1', '8', 'L', 'Regular', 'EXEQUIEL PACHECO', 0, '', 0),
(97, NULL, 'Lawn 1', '8', 'M', 'Regular', 'VONJAMAR FETALINO', 0, '', 0),
(98, NULL, 'Lawn 1', '8', 'N', 'Regular', 'JOAQUIN DOROPA', 0, '', 0),
(99, NULL, 'Lawn 1', '8', 'O', 'Regular', 'NERMA ALCANAR', 0, '', 0),
(100, NULL, 'Lawn 1', '8', 'P', 'Regular', 'RIZALINA ROMEN', 0, '', 0),
(101, NULL, 'Lawn 1', '8', 'Q', 'Regular', 'RAMON PARCON', 0, '', 0),
(102, NULL, 'Lawn 1', '8', 'R', 'Regular', 'NOIDA PARCON', 0, '', 0),
(103, NULL, 'Lawn 1', '8', 'S', 'Regular', 'WALVIN DELA CRUZ from GERMILINA CONCEPCION', 0, '', 0),
(104, NULL, 'Lawn 1', '8', 'T', 'Regular', 'AVELINA RIVERA', 0, '', 0),
(105, NULL, 'Lawn 1', '9', 'A', 'Regular', 'MARLON DELA CRUZ', 0, '', 0),
(106, NULL, 'Lawn 1', '9', 'B', 'Regular', 'MARIA MEDINA', 0, '', 0),
(107, NULL, 'Lawn 1', '9', 'C', 'Regular', 'TORIBIO MATUBARAN', 0, '', 0),
(108, NULL, 'Lawn 1', '9', 'D', 'Regular', 'BENJAMIN FRANCISCO from Analyn Francisco', 0, '', 0),
(109, NULL, 'Lawn 1', '9', 'E', 'Regular', 'ANALYN FRANCISCO', 0, '', 0),
(110, NULL, 'Lawn 1', '9', 'F', 'Regular', 'SENEN BUSTAMANTE', 0, '', 0),
(111, NULL, 'Lawn 1', '9', 'G', 'Regular', 'NOEMI IGNACIO', 0, '', 0),
(112, NULL, 'Lawn 1', '9', 'H', 'Regular', 'PHOEBE MAE MIRANDA', 0, '', 0),
(113, NULL, 'Lawn 1', '9', 'I', 'Regular', 'AMPARO DE GUZMAN', 0, '', 0),
(114, NULL, 'Lawn 1', '9', 'J', 'Regular', 'ROMELITO TADEO from Blk 21 Lot O', 0, '', 0),
(115, NULL, 'Lawn 1', '9', 'K', 'Regular', 'FLOR ANGELI PINLAC', 0, '', 0),
(116, NULL, 'Lawn 1', '9', 'L', 'Regular', 'FLOR ANGELI PINLAC', 0, '', 0),
(117, NULL, 'Lawn 1', '9', 'M', 'Regular', 'NORY ANZURES', 0, '', 0),
(118, NULL, 'Lawn 1', '9', 'N', 'Regular', 'JONNY CLORES', 0, '', 0),
(119, NULL, 'Lawn 1', '9', 'O', 'Regular', 'MILDRED MANAGAYTAY', 0, '', 0),
(120, NULL, 'Lawn 1', '9', 'P', 'Regular', 'REINERIA MORENO', 0, '', 0),
(121, NULL, 'Lawn 1', '9', 'Q', 'Regular', 'ELVIRA VILLAFLORES', 0, '', 0),
(122, NULL, 'Lawn 1', '9', 'R', 'Regular', 'EDWIN REMODO', 0, '', 0),
(123, NULL, 'Lawn 1', '9', 'S', 'Regular', 'RAQUEL MAYORGA', 0, '', 0),
(124, NULL, 'Lawn 1', '9', 'T', 'Regular', 'PAULITA YAMAMOTO', 0, '', 0),
(125, NULL, 'Lawn 1', '10', 'A', 'Regular', 'ROMANA DE GUZMAN', 0, '', 0),
(126, NULL, 'Lawn 1', '10', 'B', 'Regular', 'ANNIE LYN JADREN', 0, '', 0),
(127, NULL, 'Lawn 1', '10', 'C', 'Regular', 'GREMARRY FRIAS', 0, '', 0),
(128, NULL, 'Lawn 1', '10', 'D', 'Regular', 'SALVADOR PIÑON', 0, '', 0),
(129, NULL, 'Lawn 1', '10', 'E', 'Regular', 'SALVADOR PIÑON', 0, '', 0),
(130, NULL, 'Lawn 1', '10', 'F', 'Regular', 'LEDWENITA CABARLES', 0, '', 0),
(131, NULL, 'Lawn 1', '10', 'G', 'Regular', 'MARIETTA VILLAFLORES', 0, '', 0),
(132, NULL, 'Lawn 1', '10', 'H', 'Regular', 'MARIETTA VILLAFLORES/ SHIELA JACINTO', 0, '', 0),
(133, NULL, 'Lawn 1', '10', 'I', 'Regular', 'VICTORIA FUERTE from FE ESTALILLA', 0, '', 0),
(134, NULL, 'Lawn 1', '10', 'J', 'Regular', 'MARIEL MABANGLO', 0, '', 0),
(135, NULL, 'Lawn 1', '10', 'K', 'Regular', 'CONSUELO REYES', 0, '', 0),
(136, NULL, 'Lawn 1', '10', 'L', 'Regular', 'GIL GEPILA', 0, '', 0),
(137, NULL, 'Lawn 1', '10', 'M', 'Regular', 'GINA RANGEL 2', 0, '', 0),
(138, NULL, 'Lawn 1', '10', 'N', 'Regular', 'ROBELYN BROSAS CAREL', 0, '', 0),
(139, NULL, 'Lawn 1', '10', 'O', 'Regular', 'RODRIGO NARIDO', 0, '', 0),
(140, NULL, 'Lawn 1', '10', 'P', 'Regular', 'MIRRIAM VILLEGAS', 0, '', 0),
(141, NULL, 'Lawn 1', '10', 'Q', 'Regular', 'EMILY MENDOZA', 0, '', 0),
(142, NULL, 'Lawn 1', '10', 'R', 'Regular', 'CORAZON SARCAOGA', 0, '', 0),
(143, NULL, 'Lawn 1', '10', 'S', 'Regular', 'THELMA ABENION', 0, '', 0),
(144, NULL, 'Lawn 1', '10', 'T', 'Regular', 'ELMALYN SISON', 0, '', 0),
(145, NULL, 'Lawn 1', '11', 'A', 'Regular', 'MARINA ARCEGA', 0, '', 0),
(146, NULL, 'Lawn 1', '11', 'B', 'Regular', 'PERLA ALONZO', 0, '', 0),
(147, NULL, 'Lawn 1', '11', 'C', 'Regular', 'GINA RANGEL', 0, '', 0),
(148, NULL, 'Lawn 1', '11', 'D', 'Regular', 'ADELAIDA LIAMZON-09358828504', 0, '', 0),
(149, NULL, 'Lawn 1', '11', 'E', 'Regular', 'JENETH MONDIA', 0, '', 0),
(150, NULL, 'Lawn 1', '11', 'F', 'Regular', 'JANICE ROSALES', 0, '', 0),
(151, NULL, 'Lawn 1', '11', 'G', 'Regular', 'JANICE ROSALES', 0, '', 0),
(152, NULL, 'Lawn 1', '11', 'H', 'Regular', 'CLEO WEINER', 0, '', 0),
(153, NULL, 'Lawn 1', '11', 'I', 'Regular', 'MARIA RESURRECCION SARCE from Blk 11 Lot K', 0, '', 0),
(154, NULL, 'Lawn 1', '11', 'J', 'Regular', 'MARY ROSE SARCE', 0, '', 0),
(155, NULL, 'Lawn 1', '11', 'K', 'Regular', 'JOSEPH ENGANO', 0, '', 0),
(156, NULL, 'Lawn 1', '11', 'L', 'Regular', 'EMELITA PULIDO', 0, '', 0),
(157, NULL, 'Lawn 1', '11', 'M', 'Regular', 'FLORO ANANO', 0, '', 0),
(158, NULL, 'Lawn 1', '11', 'N', 'Regular', 'SARAH MALINAO', 0, '', 0),
(159, NULL, 'Lawn 1', '11', 'O', 'Regular', 'JOEL RENTORIA', 0, '', 0),
(160, NULL, 'Lawn 1', '11', 'P', 'Regular', 'CELSO GULINAO', 0, '', 0),
(161, NULL, 'Lawn 1', '11', 'Q', 'Regular', 'ANTERA ESCAREZ', 0, '', 0),
(162, NULL, 'Lawn 1', '11', 'R', 'Regular', 'OLIVIA LETIGIO', 0, '', 0),
(163, NULL, 'Lawn 1', '11', 'S', 'Regular', 'OLIVA RAMOS', 0, '', 0),
(164, NULL, 'Lawn 1', '11', 'T', 'Regular', 'ISABEL REBOSURA', 0, '', 0),
(165, NULL, 'Lawn 1', '12', 'A', 'Regular', 'ARLANDO SANTOS 4', 0, '', 0),
(166, NULL, 'Lawn 1', '12', 'B', 'Regular', 'ARLANDO SANTOS 3', 0, '', 0),
(167, NULL, 'Lawn 1', '12', 'C', 'Regular', 'GINA ARCE from Blk 9 Lot S', 0, '', 0),
(168, NULL, 'Lawn 1', '12', 'D', 'Regular', 'GINA ARCE', 0, '', 0),
(169, NULL, 'Lawn 1', '12', 'E', 'Regular', 'GINA ARCE', 0, '', 0),
(170, NULL, 'Lawn 1', '12', 'F', 'Regular', 'EVA CASTILAN', 0, '', 0),
(171, NULL, 'Lawn 1', '12', 'G', 'Regular', 'EVA CASTILAN', 0, '', 0),
(172, NULL, 'Lawn 1', '12', 'H', 'Regular', 'EVA CASTILAN/REBICCA RIESGO', 0, '', 0),
(173, NULL, 'Lawn 1', '12', 'I', 'Regular', 'ROBERTO BORJA', 0, '', 0),
(174, NULL, 'Lawn 1', '12', 'J', 'Regular', 'ANNABELLE GEROZAGA', 0, '', 0),
(175, NULL, 'Lawn 1', '12', 'K', 'Regular', 'ARLANDO SANTOS', 0, '', 0),
(176, NULL, 'Lawn 1', '12', 'L', 'Regular', 'ARLANDO SANTOS', 0, '', 0),
(177, NULL, 'Lawn 1', '12', 'M', 'Regular', 'JENNIFER VINUYA from PRIMO AVERGONZADO', 0, '', 0),
(178, NULL, 'Lawn 1', '12', 'N', 'Regular', 'RUFINA AGUNOD from PRIMO AVERGONZADO', 0, '', 0),
(179, NULL, 'Lawn 1', '12', 'O', 'Regular', 'ELENITA ESPINOSA', 0, '', 0),
(180, NULL, 'Lawn 1', '12', 'P', 'Regular', 'LEONARDO MATIONG', 0, '', 0),
(181, NULL, 'Lawn 1', '12', 'Q', 'Regular', 'ROMEO FETALVERO', 0, '', 0),
(182, NULL, 'Lawn 1', '12', 'R', 'Regular', 'SUSAN FETALVERO', 0, '', 0),
(183, NULL, 'Lawn 1', '12', 'S', 'Regular', 'RHODA BALONES', 0, '', 0),
(184, NULL, 'Lawn 1', '12', 'T', 'Regular', 'ANGELITA BALLERA', 0, '', 0),
(185, NULL, 'Lawn 1', '13', 'A', 'Regular', 'SOFIA LERMA', 0, '', 0),
(186, NULL, 'Lawn 1', '13', 'B', 'Regular', 'MA. DIOVE VALDEZ', 0, '', 0),
(187, NULL, 'Lawn 1', '13', 'C', 'Regular', 'RUBY AUTENTICO', 0, '', 0),
(188, NULL, 'Lawn 1', '13', 'D', 'Regular', 'KARENLIE SANTIAGO', 0, '', 0),
(189, NULL, 'Lawn 1', '13', 'E', 'Regular', 'ROSEMARIE RUTOR', 0, '', 0),
(190, NULL, 'Lawn 1', '13', 'F', 'Regular', 'JEANNIE VENTURINA', 0, '', 0),
(191, NULL, 'Lawn 1', '13', 'G', 'Regular', 'TERESITA REYES LIM from Blk 13 Lot J', 0, '', 0),
(192, NULL, 'Lawn 1', '13', 'H', 'Regular', 'ANITA LALUSIS', 0, '', 0),
(193, NULL, 'Lawn 1', '13', 'I', 'Regular', 'HILDA BORBON', 0, '', 0),
(194, NULL, 'Lawn 1', '13', 'J', 'Regular', 'JUVILYN EDOSMA', 0, '', 0),
(195, NULL, 'Lawn 1', '13', 'K', 'Exterior', 'JOSE SALGADO SR.', 0, '', 0),
(196, NULL, 'Lawn 1', '13', 'L', 'Exterior', 'JOSE SALGADO JR', 0, '', 0),
(197, NULL, 'Lawn 1', '13', 'M', 'Exterior', 'MARIA CONCEPCION LECETIVO from B Capangyarihan', 0, '', 0),
(198, NULL, 'Lawn 1', '13', 'N', 'Exterior', 'IRENE C. SANMIGUEL', 0, '', 0),
(199, NULL, 'Lawn 1', '13', 'O', 'Exterior', 'PABLO SAN MIGUEL JR.', 0, '', 0),
(200, NULL, 'Lawn 1', '13', 'P', 'Exterior', 'MA.THERESA VERGARA', 0, '', 0),
(201, NULL, 'Lawn 1', '13', 'Q', 'Exterior', 'ANGELICA CALONGE', 0, '', 0),
(202, NULL, 'Lawn 1', '13', 'R', 'Exterior', 'EMILIA BARRETO', 0, '', 0),
(203, NULL, 'Lawn 1', '13', 'S', 'Exterior', 'FLUELLEN ANN CABARON from Maybel San Pascual', 0, '', 0),
(204, NULL, 'Lawn 1', '13', 'T', 'Exterior', 'ANNALYN GRACE NAVARRO from Maybel San Pascual', 0, '', 0),
(205, NULL, 'Lawn 1', '14', 'A', 'Premium', 'MYRNA BAUTISTA', 0, '', 0),
(206, NULL, 'Lawn 1', '14', 'B', 'Premium', 'MYRNA BAUTISTA', 0, '', 0),
(207, NULL, 'Lawn 1', '14', 'C', 'Premium', 'RUBY ROSE ADRIANO', 0, '', 0),
(208, NULL, 'Lawn 1', '14', 'D', 'Premium', 'ALVIN TERMULO from 7 Q', 0, '', 0),
(209, NULL, 'Lawn 1', '14', 'E', 'Premium', 'ANGELINA DEFUNTORUM from Noemi Esguerra', 0, '', 0),
(210, NULL, 'Lawn 1', '14', 'F', 'Premium', 'FREDERICK BARROQUILLO', 0, '', 0),
(211, NULL, 'Lawn 1', '14', 'G', 'Premium', 'FREDERICK BARROQUILLO', 0, '', 0),
(212, NULL, 'Lawn 1', '14', 'K', 'Regular', 'ROBERTO CARAIG from Blk 35 lot J', 0, '', 0),
(213, NULL, 'Lawn 1', '14', 'L', 'Regular', 'ROBERTO CARAIG', 0, '', 0),
(214, NULL, 'Lawn 1', '14', 'M', 'Regular', 'NEIL SANTIAGO', 0, '', 0),
(215, NULL, 'Lawn 1', '14', 'N', 'Regular', 'ALAINE ROCA', 0, '', 0),
(216, NULL, 'Lawn 1', '14', 'O', 'Regular', 'DIONISIO SUMERA', 0, '', 0),
(217, NULL, 'Lawn 1', '14', 'P', 'Regular', 'DIONISIO SUMERA', 0, '', 0),
(218, NULL, 'Lawn 1', '14', 'Q', 'Regular', 'MARY ROSE ADRIANO', 0, '', 0),
(219, NULL, 'Lawn 1', '14', 'R', 'Premium', 'SOLEDAD DELA CRUZ', 0, '', 0),
(220, NULL, 'Lawn 1', '14', 'S', 'Premium', 'MICHAEL DE OMANIA', 0, '', 0),
(221, NULL, 'Lawn 1', '14', 'T', 'Premium', 'MARGIE DE OMANIA', 0, '', 0),
(222, NULL, 'Lawn 1', '15', 'A', 'Regular', 'MARCELINA EUGENIO', 0, '', 0),
(223, NULL, 'Lawn 1', '15', 'B', 'Regular', 'MARCELINA EUGENIO', 0, '', 0),
(224, NULL, 'Lawn 1', '15', 'C', 'Regular', 'KATHERINE LUMIBAO', 0, '', 0),
(225, NULL, 'Lawn 1', '15', 'D', 'Regular', 'ROGELIO RIVERA', 0, '', 0),
(226, NULL, 'Lawn 1', '15', 'E', 'Regular', 'JUANITA MOLINA', 0, '', 0),
(227, NULL, 'Lawn 1', '15', 'F', 'Regular', 'JERAMIE MENDOZA from Blk 14 Lot Q', 0, '', 0),
(228, NULL, 'Lawn 1', '15', 'G', 'Regular', 'YVETTE SORRO', 0, '', 0),
(229, NULL, 'Lawn 1', '15', 'H', 'Regular', 'MACARIA DAROLE', 0, '', 0),
(230, NULL, 'Lawn 1', '15', 'I', 'Regular', 'GINA DE GUZMAN', 0, '', 0),
(231, NULL, 'Lawn 1', '15', 'J', 'Regular', 'MARITA ALCALA', 0, '', 0),
(232, NULL, 'Lawn 1', '15', 'K', 'Regular', 'ETHEL CECILLE BALTAZAR', 0, '', 0),
(233, NULL, 'Lawn 1', '15', 'L', 'Regular', 'MARCELINA EUGENIO from Blk 23 LOT s', 0, '', 0),
(234, NULL, 'Lawn 1', '15', 'M', 'Regular', 'PRISCILA CAPUCION', 0, '', 0),
(235, NULL, 'Lawn 1', '15', 'N', 'Regular', 'JOSEPITO CAPUCION', 0, '', 0),
(236, NULL, 'Lawn 1', '15', 'O', 'Regular', 'JESUS MASANGKAY', 0, '', 0),
(237, NULL, 'Lawn 1', '15', 'P', 'Regular', 'GLORIA IBAY from Jan Carlos Tansioco', 0, '', 0),
(238, NULL, 'Lawn 1', '15', 'Q', 'Regular', 'JOHANNA SALAZAR', 0, '', 0),
(239, NULL, 'Lawn 1', '15', 'R', 'Regular', 'LEONORA TABALINA', 0, '', 0),
(240, NULL, 'Lawn 1', '15', 'S', 'Regular', 'LENNIE SALAZAR', 0, '', 0),
(241, NULL, 'Lawn 1', '15', 'T', 'Regular', 'MARITA ALCALA', 0, '', 0),
(242, NULL, 'Lawn 1', '16', 'A', 'Regular', 'LILIAN CORTEZ', 0, '', 0),
(243, NULL, 'Lawn 1', '16', 'B', 'Regular', 'CORNELIA PEREZ', 0, '', 0),
(244, NULL, 'Lawn 1', '16', 'C', 'Regular', 'JOSEFA LE GEOC', 0, '', 0),
(245, NULL, 'Lawn 1', '16', 'D', 'Regular', 'IMELDA GIRON', 0, '', 0),
(246, NULL, 'Lawn 1', '16', 'E', 'Regular', 'GLENN CASTRO', 0, '', 0),
(247, NULL, 'Lawn 1', '16', 'F', 'Regular', 'REYGIAN LABARETE', 0, '', 0),
(248, NULL, 'Lawn 1', '16', 'G', 'Regular', 'GILDA MANESE', 0, '', 0),
(249, NULL, 'Lawn 1', '16', 'H', 'Regular', 'JULIETA BAGADIONG', 0, '', 0),
(250, NULL, 'Lawn 1', '16', 'I', 'Regular', 'ZENON DADIRO', 0, '', 0),
(251, NULL, 'Lawn 1', '16', 'J', 'Regular', 'GREGORIA SOBERANO', 0, '', 0),
(252, NULL, 'Lawn 1', '16', 'K', 'Regular', 'MA. SALOME BUARAO', 0, '', 0),
(253, NULL, 'Lawn 1', '16', 'L', 'Regular', 'MARY GRACE LOQUIAS', 0, '', 0),
(254, NULL, 'Lawn 1', '16', 'M', 'Regular', 'ANA MARIE JAVIER', 0, '', 0),
(255, NULL, 'Lawn 1', '16', 'N', 'Regular', 'IMELDA GIRON', 0, '', 0),
(256, NULL, 'Lawn 1', '16', 'O', 'Regular', 'CELIA DE DIOS', 0, '', 0),
(257, NULL, 'Lawn 1', '16', 'P', 'Regular', 'CELIA DE DIOS', 0, '', 0),
(258, NULL, 'Lawn 1', '16', 'Q', 'Regular', 'ENRIQUE TAMBOON', 0, '', 0),
(259, NULL, 'Lawn 1', '16', 'R', 'Regular', 'RONALD ZAPE from Blk 16 Lot P', 0, '', 0),
(260, NULL, 'Lawn 1', '16', 'S', 'Regular', 'FLORENTINO DEL ROSARIO', 0, '', 0),
(261, NULL, 'Lawn 1', '16', 'T', 'Regular', 'FLORENTINO DEL ROSARIO', 0, '', 0),
(262, NULL, 'Lawn 1', '17', 'A', 'Regular', 'ROSITA HIZON', 0, '', 0),
(263, NULL, 'Lawn 1', '17', 'B', 'Regular', 'AURORA EVANGELISTA', 0, '', 0),
(264, NULL, 'Lawn 1', '17', 'C', 'Regular', 'CESAR EVANGELISTA', 0, '', 0),
(265, NULL, 'Lawn 1', '17', 'D', 'Regular', 'LIBRITO RIOTOTAR JR.', 0, '', 0),
(266, NULL, 'Lawn 1', '17', 'E', 'Regular', 'TESSALUNICA TAYO', 0, '', 0),
(267, NULL, 'Lawn 1', '17', 'F', 'Regular', 'GINA FREMISTA', 0, '', 0),
(268, NULL, 'Lawn 1', '17', 'G', 'Regular', 'MILLER SEVILLA', 0, '', 0),
(269, NULL, 'Lawn 1', '17', 'H', 'Regular', 'RUDY BETONIO', 0, '', 0),
(270, NULL, 'Lawn 1', '17', 'I', 'Regular', 'FLORENDO ANSALE', 0, '', 0),
(271, NULL, 'Lawn 1', '17', 'J', 'Regular', 'EDNA ESCANO', 0, '', 0),
(272, NULL, 'Lawn 1', '17', 'K', 'Regular', 'EUFROCINA PASCUA', 0, '', 0),
(273, NULL, 'Lawn 1', '17', 'L', 'Regular', 'MA. ALMA DE OCAMPO', 0, '', 0),
(274, NULL, 'Lawn 1', '17', 'M', 'Regular', 'MA. ALMA DE OCAMPO', 0, '', 0),
(275, NULL, 'Lawn 1', '17', 'N', 'Regular', 'LEONY DELA CRUZ', 0, '', 0),
(276, NULL, 'Lawn 1', '17', 'O', 'Regular', 'JOSEPH CABANGIL', 0, '', 0),
(277, NULL, 'Lawn 1', '17', 'P', 'Regular', 'ADELAIDA ADALLA', 0, '', 0),
(278, NULL, 'Lawn 1', '17', 'Q', 'Regular', 'ERLINDA LINCOLN', 0, '', 0),
(279, NULL, 'Lawn 1', '17', 'R', 'Regular', 'MARLON CERVANTES', 0, '', 0),
(280, NULL, 'Lawn 1', '17', 'S', 'Regular', 'JULIANA BARGOS', 0, '', 0),
(281, NULL, 'Lawn 1', '17', 'T', 'Regular', 'TRANQUILINA PINGOL', 0, '', 0),
(282, NULL, 'Lawn 1', '18', 'A', 'Regular', 'GEORGE MORADA', 0, '', 0),
(283, NULL, 'Lawn 1', '18', 'B', 'Regular', 'GEORGE MORADA', 0, '', 0),
(284, NULL, 'Lawn 1', '18', 'C', 'Regular', 'MARGARITA RAYMUNDO', 0, '', 0),
(285, NULL, 'Lawn 1', '18', 'D', 'Regular', 'RAYMUND RAYMUNDO', 0, '', 0),
(286, NULL, 'Lawn 1', '18', 'E', 'Regular', 'MARICRIS CAPULO', 0, '', 0),
(287, NULL, 'Lawn 1', '18', 'F', 'Regular', 'LIWAYWAY JOHNSON', 0, '', 0),
(288, NULL, 'Lawn 1', '18', 'G', 'Regular', 'AUREA AGUILLON', 0, '', 0),
(289, NULL, 'Lawn 1', '18', 'H', 'Regular', 'AUREA AGUILLON', 0, '', 0),
(290, NULL, 'Lawn 1', '18', 'I', 'Premium', 'MENILDA GALEDO', 0, '', 0),
(291, NULL, 'Lawn 1', '18', 'J', 'Regular', 'NARCISO PERALTA', 0, '', 0),
(292, NULL, 'Lawn 1', '18', 'K', 'Regular', 'EVELIO VARGAS', 0, '', 0),
(293, NULL, 'Lawn 1', '18', 'L', 'Regular', 'YOLANDA VARGAS', 0, '', 0),
(294, NULL, 'Lawn 1', '18', 'M', 'Regular', 'EDGARDO RAYMUNDO', 0, '', 0),
(295, NULL, 'Lawn 1', '18', 'N', 'Regular', 'MA. TERESA CELESTINO', 0, '', 0),
(296, NULL, 'Lawn 1', '18', 'O', 'Regular', 'MA. VICTORIA WENCESLAO', 0, '', 0),
(297, NULL, 'Lawn 1', '18', 'P', 'Regular', 'MERCY DELA CERNA', 0, '', 0),
(298, NULL, 'Lawn 1', '18', 'Q', 'Regular', 'MERCY DELA CERNA', 0, '', 0),
(299, NULL, 'Lawn 1', '18', 'R', 'Regular', 'ELLEN BALLESTEROS', 0, '', 0),
(300, NULL, 'Lawn 1', '18', 'S', 'Regular', 'RENATO BENEDICTO', 0, '', 0),
(301, NULL, 'Lawn 1', '18', 'T', 'Regular', 'ROSEMARIE MAURICIO', 0, '', 0),
(302, NULL, 'Lawn 1', '19', 'A', 'Regular', 'MICHAEL RODRIGUEZ', 0, '', 0),
(303, NULL, 'Lawn 1', '19', 'B', 'Regular', 'THELMA LOBRIO', 0, '', 0),
(304, NULL, 'Lawn 1', '19', 'C', 'Regular', 'LEONORA TIONGCO from Blk 19 Lot N', 0, '', 0),
(305, NULL, 'Lawn 1', '19', 'D', 'Regular', 'LEONORA TIONGCO', 0, '', 0),
(306, NULL, 'Lawn 1', '19', 'E', 'Regular', 'ESTELITA FERRERA', 0, '', 0),
(307, NULL, 'Lawn 1', '19', 'F', 'Regular', 'ESTELITA FERRERA', 0, '', 0),
(308, NULL, 'Lawn 1', '19', 'G', 'Regular', 'ROOSEVELT HILARIO', 0, '', 0),
(309, NULL, 'Lawn 1', '19', 'H', 'Regular', 'ROSE JOY SEBALLOS', 0, '', 0),
(310, NULL, 'Lawn 1', '19', 'I', 'Regular', 'CELESTE SABADO', 0, '', 0),
(311, NULL, 'Lawn 1', '19', 'J', 'Regular', 'CELESTE SABADO', 0, '', 0),
(312, NULL, 'Lawn 1', '19', 'K', 'Regular', 'YOLANDA FERNANDEZ', 0, '', 0),
(313, NULL, 'Lawn 1', '19', 'L', 'Regular', 'YOLANDA FERNANDEZ', 0, '', 0),
(314, NULL, 'Lawn 1', '19', 'M', 'Regular', 'MAXIMINO DOMINGO JR.', 0, '', 0),
(315, NULL, 'Lawn 1', '19', 'N', 'Regular', 'VILLAFREDA PAITAN', 0, '', 0),
(316, NULL, 'Lawn 1', '19', 'O', 'Regular', 'ARLENE RETOR', 0, '', 0),
(317, NULL, 'Lawn 1', '19', 'P', 'Regular', 'LUNA TADEO', 0, '', 0),
(318, NULL, 'Lawn 1', '19', 'Q', 'Regular', 'ALEJANDRO DAGUISO from FLORENCIA SAN FELIPE 1', 0, '', 0),
(319, NULL, 'Lawn 1', '19', 'R', 'Regular', 'ALEJANDRO DAGUISO from FLORENCIA SAN FELIPE 2', 0, '', 0),
(320, NULL, 'Lawn 1', '19', 'S', 'Regular', 'ALEJANDRO DAGUISO from FLORENCIA SAN FELIPE 3', 0, '', 0),
(321, NULL, 'Lawn 1', '19', 'T', 'Regular', 'ALEJANDRO DAGUISO from FLORENCIA SAN FELIPE 4', 0, '', 0),
(322, NULL, 'Lawn 1', '20', 'A', 'Regular', 'ARNEL BOBIS', 0, '', 0),
(323, NULL, 'Lawn 1', '20', 'B', 'Regular', 'ELISA BACLAS 1', 0, '', 0),
(324, NULL, 'Lawn 1', '20', 'C', 'Regular', 'MARGARITA FELIX', 0, '', 0),
(325, NULL, 'Lawn 1', '20', 'D', 'Regular', 'MARGARITA FELIX', 0, '', 0),
(326, NULL, 'Lawn 1', '20', 'E', 'Regular', 'MARGARITA FELIX', 0, '', 0),
(327, NULL, 'Lawn 1', '20', 'F', 'Regular', 'VIVIAN DELOS SANTOS', 0, '', 0),
(328, NULL, 'Lawn 1', '20', 'G', 'Regular', 'VIVIAN DELOS SANTOS', 0, '', 0),
(329, NULL, 'Lawn 1', '20', 'H', 'Regular', 'ROSALINDA QUIRAP from Blk 20 D', 0, '', 0),
(330, NULL, 'Lawn 1', '20', 'I', 'Regular', 'GODOFREDO BENEDICTO', 0, '', 0),
(331, NULL, 'Lawn 1', '20', 'J', 'Regular', 'TERESITA GALANO', 0, '', 0),
(332, NULL, 'Lawn 1', '20', 'K', 'Exterior', 'BERNARDINA CAPANGYARIHAN 2', 0, '', 0),
(333, NULL, 'Lawn 1', '20', 'L', 'Exterior', 'BERNARDINA CAPANGYARIHAN 3', 0, '', 0),
(334, NULL, 'Lawn 1', '20', 'M', 'Exterior', 'BERNARDINA CAPANGYARIHAN 4', 0, '', 0),
(335, NULL, 'Lawn 1', '20', 'N', 'Exterior', 'BERNARDINA CAPANGYARIHAN 5', 0, '', 0),
(336, NULL, 'Lawn 1', '20', 'O', 'Exterior', 'OFELIA LAMBERTI', 0, '', 0),
(337, NULL, 'Lawn 1', '20', 'P', 'Exterior', 'REYNALDO DE GUZMAN', 0, '', 0),
(338, NULL, 'Lawn 1', '20', 'Q', 'Exterior', 'MARILYN BARRIGA', 0, '', 0),
(339, NULL, 'Lawn 1', '20', 'R', 'Exterior', 'VICTORIA R. AGAPITO', 0, '', 0),
(340, NULL, 'Lawn 1', '20', 'S', 'Exterior', 'MAURA TORRES from Jupitra Daitol', 0, '', 0),
(341, NULL, 'Lawn 1', '20', 'T', 'Exterior', 'NESTOR LAGUERTA', 0, '', 0),
(342, NULL, 'Lawn 1', '21', 'K', 'Premium', 'ADELAIDA DE GUZMAN', 0, '', 0),
(343, NULL, 'Lawn 1', '21', 'L', 'Premium', 'ADELAIDA DE GUZMAN', 0, '', 0),
(344, NULL, 'Lawn 1', '21', 'M', 'Premium', 'FE MARIE LABIANO', 0, '', 0),
(345, NULL, 'Lawn 1', '21', 'N', 'Premium', 'PERLA CENIDOZA', 0, '', 0),
(346, NULL, 'Lawn 1', '21', 'O', 'Premium', 'YOLANDA AÑONUEVO', 0, '', 0),
(347, NULL, 'Lawn 1', '22', 'A', 'Regular', 'CARINA JIMENEZ', 0, '', 0),
(348, NULL, 'Lawn 1', '22', 'B', 'Regular', 'NARDO PALISOC', 0, '', 0),
(349, NULL, 'Lawn 1', '22', 'C', 'Regular', 'LILIBETH PANGAN', 0, '', 0),
(350, NULL, 'Lawn 1', '22', 'D', 'Regular', 'LILIBETH PANGAN', 0, '', 0),
(351, NULL, 'Lawn 1', '22', 'E', 'Regular', 'LILIBETH PANGAN', 0, '', 0),
(352, NULL, 'Lawn 1', '22', 'F', 'Premium', 'EVA CASTILAN', 0, '', 0),
(353, NULL, 'Lawn 1', '22', 'G', 'Premium', 'EMILY DE GUIA', 0, '', 0),
(354, NULL, 'Lawn 1', '22', 'H', 'Premium', 'ERLANI MATA', 0, '', 0),
(355, NULL, 'Lawn 1', '22', 'I', 'Premium', 'MARY JANE CONCEPCION from LORELA GUILLERMO', 0, '', 0),
(356, NULL, 'Lawn 1', '22', 'J', 'Premium', 'NEMA STA. MARIA', 0, '', 0),
(357, NULL, 'Lawn 1', '22', 'K', 'Regular', 'RENITO MARTINEZ', 0, '', 0),
(358, NULL, 'Lawn 1', '22', 'L', 'Regular', 'ISABELITA PASCUA', 0, '', 0),
(359, NULL, 'Lawn 1', '22', 'M', 'Regular', 'GERTRUDES ACOSTA', 0, '', 0),
(360, NULL, 'Lawn 1', '22', 'N', 'Regular', 'JONALYN YNARES fromGERTRUDES ACOSTA', 0, '', 0),
(361, NULL, 'Lawn 1', '22', 'O', 'Regular', 'SONIA DELA CRUZ', 0, '', 0),
(362, NULL, 'Lawn 1', '22', 'P', 'Regular', 'SONIA DULFO', 0, '', 0),
(363, NULL, 'Lawn 1', '22', 'Q', 'Regular', 'SOCORRO BALATUCAN', 0, '', 0),
(364, NULL, 'Lawn 1', '22', 'R', 'Regular', 'CONCEPCION FENOL', 0, '', 0),
(365, NULL, 'Lawn 1', '22', 'S', 'Regular', 'TERESITA SHIRAI', 0, '', 0),
(366, NULL, 'Lawn 1', '22', 'T', 'Regular', 'APRILE LABASTIDA', 0, '', 0),
(367, NULL, 'Lawn 1', '23', 'A', 'Regular', 'JESUS EUCOS', 0, '', 0),
(368, NULL, 'Lawn 1', '23', 'B', 'Regular', 'ROWENA GATCHALIAN', 0, '', 0),
(369, NULL, 'Lawn 1', '23', 'C', 'Regular', 'ERMILYN ABIÑON', 0, '', 0),
(370, NULL, 'Lawn 1', '23', 'D', 'Regular', 'RICHARD DELIZO', 0, '', 0),
(371, NULL, 'Lawn 1', '23', 'E', 'Regular', 'ZENAIDA SORIANO', 0, '', 0),
(372, NULL, 'Lawn 1', '23', 'F', 'Regular', 'FELICIDAD PABER', 0, '', 0),
(373, NULL, 'Lawn 1', '23', 'G', 'Regular', 'MARK JOSEPH GRAJO', 0, '', 0),
(374, NULL, 'Lawn 1', '23', 'H', 'Regular', 'MILA BERTULFO', 0, '', 0),
(375, NULL, 'Lawn 1', '23', 'I', 'Regular', 'LILIOSA DIZON', 0, '', 0),
(376, NULL, 'Lawn 1', '23', 'J', 'Regular', 'HERSHI BALATUCAN', 0, '', 0),
(377, NULL, 'Lawn 1', '23', 'K', 'Regular', 'EDITHA LUCIO', 0, '', 0),
(378, NULL, 'Lawn 1', '23', 'L', 'Regular', 'ZENAIDA RIVO', 0, '', 0),
(379, NULL, 'Lawn 1', '23', 'M', 'Regular', 'LORNA BUSTO', 0, '', 0),
(380, NULL, 'Lawn 1', '23', 'N', 'Regular', 'MARITES HIPOLITO', 0, '', 0),
(381, NULL, 'Lawn 1', '23', 'O', 'Regular', 'ISABELITA OCFEMIA', 0, '', 0),
(382, NULL, 'Lawn 1', '23', 'P', 'Regular', 'MA. LUISA MAGAT', 0, '', 0),
(383, NULL, 'Lawn 1', '23', 'Q', 'Regular', 'LAURA BO', 0, '', 0),
(384, NULL, 'Lawn 1', '23', 'R', 'Regular', 'NENITA JURILLA', 0, '', 0),
(385, NULL, 'Lawn 1', '23', 'S', 'Regular', 'ROWENA VERDAN', 0, '', 0),
(386, NULL, 'Lawn 1', '23', 'T', 'Regular', 'LUCIA DILAN', 0, '', 0),
(387, NULL, 'Lawn 1', '24', 'A', 'Regular', 'MERLYN SAQUILLO', 0, '', 0),
(388, NULL, 'Lawn 1', '24', 'B', 'Regular', 'MERLYN SAQUILLO', 0, '', 0),
(389, NULL, 'Lawn 1', '24', 'C', 'Regular', 'ADELAIDA DINGCO', 0, '', 0),
(390, NULL, 'Lawn 1', '24', 'D', 'Regular', 'PACIFICO DELA CRUZ', 0, '', 0),
(391, NULL, 'Lawn 1', '24', 'E', 'Regular', 'MARINA SANTIAGO', 0, '', 0),
(392, NULL, 'Lawn 1', '24', 'F', 'Regular', 'ALMA IGNACIO', 0, '', 0),
(393, NULL, 'Lawn 1', '24', 'G', 'Regular', 'RONALYN CAYETANO', 0, '', 0),
(394, NULL, 'Lawn 1', '24', 'H', 'Regular', 'RONALYN CAYETANO', 0, '', 0),
(395, NULL, 'Lawn 1', '24', 'I', 'Regular', 'EUFROCINA PASCUA', 0, '', 0),
(396, NULL, 'Lawn 1', '24', 'J', 'Regular', 'EDMUND GILE', 0, '', 0),
(397, NULL, 'Lawn 1', '24', 'K', 'Regular', 'GILBERT BOSITO', 0, '', 0),
(398, NULL, 'Lawn 1', '24', 'L', 'Regular', 'JENALYN REYES', 0, '', 0),
(399, NULL, 'Lawn 1', '24', 'M', 'Regular', 'WILMA VENTURA', 0, '', 0),
(400, NULL, 'Lawn 1', '24', 'N', 'Regular', 'WINFRED REYES', 0, '', 0),
(401, NULL, 'Lawn 1', '24', 'O', 'Regular', 'EDEN MABUNGA from Kathleen Berboso', 0, '', 0),
(402, NULL, 'Lawn 1', '24', 'P', 'Regular', 'LUIS IGNACIO', 0, '', 0),
(403, NULL, 'Lawn 1', '24', 'Q', 'Regular', 'LOLITA BONIFACIO', 0, '', 0),
(404, NULL, 'Lawn 1', '24', 'R', 'Regular', 'JESSICA MIJARES', 0, '', 0),
(405, NULL, 'Lawn 1', '24', 'S', 'Regular', 'SALVACION CRUZ', 0, '', 0),
(406, NULL, 'Lawn 1', '24', 'T', 'Regular', 'JESSA GUADILLA', 0, '', 0),
(407, NULL, 'Lawn 1', '25', 'A', 'Regular', 'DANILO AINZA', 0, '', 0),
(408, NULL, 'Lawn 1', '25', 'B', 'Regular', 'DANILO AINZA', 0, '', 0),
(409, NULL, 'Lawn 1', '25', 'C', 'Regular', 'LINDA TURA', 0, '', 0),
(410, NULL, 'Lawn 1', '25', 'D', 'Regular', 'JESUSA ABREA', 0, '', 0),
(411, NULL, 'Lawn 1', '25', 'E', 'Regular', 'LOURDES MAYOLA', 0, '', 0),
(412, NULL, 'Lawn 1', '25', 'F', 'Regular', 'FRANCIS ALLAN DELA CRUZ', 0, '', 0),
(413, NULL, 'Lawn 1', '25', 'G', 'Regular', 'FRANCIS ALLAN DELA CRUZ', 0, '', 0),
(414, NULL, 'Lawn 1', '25', 'H', 'Regular', 'EMMA REED', 0, '', 0),
(415, NULL, 'Lawn 1', '25', 'I', 'Regular', 'CHINA BULAWAN', 0, '', 0),
(416, NULL, 'Lawn 1', '25', 'J', 'Regular', 'MITZI GRACE PEÑA', 0, '', 0),
(417, NULL, 'Lawn 1', '25', 'K', 'Regular', 'ENGELBERT CRUZ 2', 0, '', 0),
(418, NULL, 'Lawn 1', '25', 'L', 'Regular', 'ENGELBERT CRUZ 3', 0, '', 0),
(419, NULL, 'Lawn 1', '25', 'M', 'Regular', 'ENGELBERT CRUZ 4', 0, '', 0),
(420, NULL, 'Lawn 1', '25', 'N', 'Regular', 'PASTORA DE LEON', 0, '', 0),
(421, NULL, 'Lawn 1', '25', 'O', 'Regular', 'LAILANI BARTOLAY', 0, '', 0),
(422, NULL, 'Lawn 1', '25', 'P', 'Regular', 'JOSIE PONTILAN', 0, '', 0),
(423, NULL, 'Lawn 1', '25', 'Q', 'Regular', 'JOSEFINA CALUAG', 0, '', 0),
(424, NULL, 'Lawn 1', '25', 'R', 'Regular', 'ADELAIDA RODELAS', 0, '', 0),
(425, NULL, 'Lawn 1', '25', 'S', 'Regular', 'FELICISIMA ESTRADA', 0, '', 0),
(426, NULL, 'Lawn 1', '25', 'T', 'Regular', 'GLIZA PEÑA', 0, '', 0),
(427, NULL, 'Lawn 1', '26', 'A', 'Regular', 'MARILYN VELASCO', 0, '', 0),
(428, NULL, 'Lawn 1', '26', 'B', 'Regular', 'EDUARDO SANDIGO', 0, '', 0),
(429, NULL, 'Lawn 1', '26', 'C', 'Regular', 'MANUELA GARCIA', 0, '', 0),
(430, NULL, 'Lawn 1', '26', 'D', 'Regular', 'MANUELA GARCIA', 0, '', 0),
(431, NULL, 'Lawn 1', '26', 'E', 'Regular', 'ERLINDA MENDOZA', 0, '', 0),
(432, NULL, 'Lawn 1', '26', 'F', 'Regular', 'ANTONIO MENDOZA', 0, '', 0),
(433, NULL, 'Lawn 1', '26', 'G', 'Regular', 'MARILOU SALAZAR', 0, '', 0),
(434, NULL, 'Lawn 1', '26', 'H', 'Regular', 'MARILOU SALAZAR', 0, '', 0),
(435, NULL, 'Lawn 1', '26', 'I', 'Regular', 'ROWENA ULAR', 0, '', 0),
(436, NULL, 'Lawn 1', '26', 'J', 'Regular', 'CHRISTOPHER BENEDICTO', 0, '', 0),
(437, NULL, 'Lawn 1', '26', 'K', 'Regular', 'EDWIN BERDEJA from Ma. Teresa Ravena', 0, '', 0),
(438, NULL, 'Lawn 1', '26', 'L', 'Regular', 'JEFFREY FRANCISCO from Ma. Teresa Ravena', 0, '', 0),
(439, NULL, 'Lawn 1', '26', 'M', 'Regular', 'AURORA BAUTISTA', 0, '', 0),
(440, NULL, 'Lawn 1', '26', 'N', 'Regular', 'BERLITO DE GUZMAN from Bernardino Mahilum Jr', 0, '', 0),
(441, NULL, 'Lawn 1', '26', 'O', 'Regular', 'NANCY DE GUZMAN', 0, '', 0),
(442, NULL, 'Lawn 1', '26', 'P', 'Regular', 'ARNOLD MORADA', 0, '', 0),
(443, NULL, 'Lawn 1', '26', 'Q', 'Regular', 'ROSALINDA FRIAS', 0, '', 0),
(444, NULL, 'Lawn 1', '26', 'R', 'Regular', 'ROSALINDA FRIAS', 0, '', 0),
(445, NULL, 'Lawn 1', '26', 'S', 'Regular', 'ANTONIO SALVADOR JR.', 0, '', 0),
(446, NULL, 'Lawn 1', '26', 'T', 'Regular', 'ANTONIO SALVADOR JR.', 0, '', 0),
(447, NULL, 'Lawn 1', '27', 'A', 'Regular', 'RUBEN MORCILLA', 0, '', 0),
(448, NULL, 'Lawn 1', '27', 'B', 'Regular', 'MERIAM BARCELONA', 0, '', 0),
(449, NULL, 'Lawn 1', '27', 'C', 'Regular', 'MARY GRACE PELICANO', 0, '', 0),
(450, NULL, 'Lawn 1', '27', 'D', 'Regular', 'ESTELITA DON', 0, '', 0),
(451, NULL, 'Lawn 1', '27', 'E', 'Regular', 'DANILO ALICANTE', 0, '', 0),
(452, NULL, 'Lawn 1', '27', 'F', 'Regular', 'BONIFACIO AQUINO JR', 0, '', 0),
(453, NULL, 'Lawn 1', '27', 'G', 'Regular', 'ERLINDA LAMBAN', 0, '', 0),
(454, NULL, 'Lawn 1', '27', 'H', 'Regular', 'ERLINDA LAMBAN', 0, '', 0),
(455, NULL, 'Lawn 1', '27', 'I', 'Regular', 'RICARDO CHAVEZ', 0, '', 0),
(456, NULL, 'Lawn 1', '27', 'J', 'Regular', 'LUCIA CONTRERAS', 0, '', 0),
(457, NULL, 'Lawn 1', '27', 'K', 'Regular', 'LOLITA SALCEDO', 0, '', 0),
(458, NULL, 'Lawn 1', '27', 'L', 'Regular', 'CHESTER PALATTAO', 0, '', 0),
(459, NULL, 'Lawn 1', '27', 'M', 'Regular', 'MARITES LEYNES', 0, '', 0),
(460, NULL, 'Lawn 1', '27', 'N', 'Regular', 'CRYSTEL JOY TAMON', 0, '', 0),
(461, NULL, 'Lawn 1', '27', 'O', 'Regular', 'ELEANOR CASTILLO', 0, '', 0),
(462, NULL, 'Lawn 1', '27', 'P', 'Regular', 'MARILYN BUCAG 2', 0, '', 0),
(463, NULL, 'Lawn 1', '27', 'Q', 'Regular', 'MARILYN BUCAG', 0, '', 0),
(464, NULL, 'Lawn 1', '27', 'R', 'Regular', 'MARIAN CRISTINE MORALIDA from RANDY ESTRELLA', 0, '', 0),
(465, NULL, 'Lawn 1', '27', 'S', 'Regular', 'WILLIAM HAN', 0, '', 0),
(466, NULL, 'Lawn 1', '27', 'T', 'Regular', 'NORA DE GUZMAN', 0, '', 0),
(467, NULL, 'Lawn 1', '28', 'A', 'Regular', 'MARIA KATRINA ESTEBAN', 0, '', 0),
(468, NULL, 'Lawn 1', '28', 'B', 'Regular', 'KATHLENE MAE ABENION', 0, '', 0),
(469, NULL, 'Lawn 1', '28', 'C', 'Regular', 'KATHLENE MAE ABENION', 0, '', 0),
(470, NULL, 'Lawn 1', '28', 'D', 'Regular', 'EMELIANA BRINGINO 1', 0, '', 0),
(471, NULL, 'Lawn 1', '28', 'E', 'Regular', 'EMELIANA BRINGINO 2', 0, '', 0),
(472, NULL, 'Lawn 1', '28', 'F', 'Regular', 'EMELIANA BRINGINO 3', 0, '', 0),
(473, NULL, 'Lawn 1', '28', 'G', 'Regular', 'RUBEN GENIO', 0, '', 0),
(474, NULL, 'Lawn 1', '28', 'H', 'Regular', 'ESTRELLA GENIO', 0, '', 0),
(475, NULL, 'Lawn 1', '28', 'I', 'Regular', 'PATRICIA ANNE BIGLANG-AWA from PILAR DEL ROSARIO', 0, '', 0),
(476, NULL, 'Lawn 1', '28', 'J', 'Regular', 'ROSANETTE CAPILI from PILAR DEL ROSARIO', 0, '', 0),
(477, NULL, 'Lawn 1', '28', 'K', 'Exterior', 'SIGNORINA SANTIAGO', 0, '', 0),
(478, NULL, 'Lawn 1', '28', 'L', 'Exterior', 'BENEDICTA MARCELO', 0, '', 0),
(479, NULL, 'Lawn 1', '28', 'M', 'Exterior', 'Reserved for Office', 0, '', 0),
(480, NULL, 'Lawn 1', '28', 'N', 'Exterior', 'SALVE ENERO', 0, '', 0),
(481, NULL, 'Lawn 1', '28', 'O', 'Exterior', 'MARY ANN ABANGAN', 0, '', 0),
(482, NULL, 'Lawn 1', '28', 'P', 'Exterior', 'LUCRECIA BARCELONA', 0, '', 0),
(483, NULL, 'Lawn 1', '28', 'Q', 'Exterior', 'MARK SATORRE from Ernalynda Bigornia', 0, '', 0),
(484, NULL, 'Lawn 1', '28', 'R', 'Exterior', 'ERNALYNDA BIGORNIA 2', 0, '', 0),
(485, NULL, 'Lawn 1', '28', 'S', 'Exterior', 'GRACE REUNIR', 0, '', 0),
(486, NULL, 'Lawn 1', '28', 'T', 'Exterior', 'RONALDO REUNIR', 0, '', 0),
(487, NULL, 'Lawn 1', '30', 'A', 'Premium', 'MARGIE VILLAMAR from Analyn Villamar', 0, '', 0),
(488, NULL, 'Lawn 1', '30', 'K', 'Regular', 'MA. TERESA MABINI', 0, '', 0),
(489, NULL, 'Lawn 1', '30', 'L', 'Premium', 'ANGELITA TRINIDAD', 0, '', 0),
(490, NULL, 'Lawn 1', '30', 'M', 'Premium', 'PEDRO ABOGADO', 0, '', 0),
(491, NULL, 'Lawn 1', '30', 'N', 'Premium', 'PETRONILA ABOGADDO', 0, '', 0),
(492, NULL, 'Lawn 1', '30', 'O', 'Premium', 'MAURA AGA', 0, '', 0),
(493, NULL, 'Lawn 1', '30', 'P', 'Premium', 'NIEVEZ RAMIREZ', 0, '', 0),
(494, NULL, 'Lawn 1', '30', 'Q', 'Premium', 'ROSALIE SARMIENTO 1', 0, '', 0),
(495, NULL, 'Lawn 1', '30', 'R', 'Premium', 'ROSALIE SARMIENTO 2', 0, '', 0),
(496, NULL, 'Lawn 1', '30', 'S', 'Premium', 'VIRGINIA DE OMANIA', 0, '', 0),
(497, NULL, 'Lawn 1', '30', 'T', 'Premium', 'MEDGELY CASABUENA', 0, '', 0),
(498, NULL, 'Lawn 1', '31', 'A', 'Regular', 'MICHAEL SIGUENZA', 0, '', 0),
(499, NULL, 'Lawn 1', '31', 'B', 'Regular', 'MAURICE SIGUENZA', 0, '', 0),
(500, NULL, 'Lawn 1', '31', 'C', 'Regular', 'GERONIMO BALMONTE JR.', 0, '', 0),
(501, NULL, 'Lawn 1', '31', 'D', 'Regular', 'ISABELITA DELOS SANTOS', 0, '', 0),
(502, NULL, 'Lawn 1', '31', 'E', 'Regular', 'DANILO KALAHI', 0, '', 0),
(503, NULL, 'Lawn 1', '31', 'F', 'Regular', 'EDNA CAPILITAN', 0, '', 0),
(504, NULL, 'Lawn 1', '31', 'G', 'Regular', 'EDNA CAPILITAN', 0, '', 0),
(505, NULL, 'Lawn 1', '31', 'H', 'Regular', 'RONALDO DOMINE', 0, '', 0),
(506, NULL, 'Lawn 1', '31', 'I', 'Regular', 'HANNAH JOCEL ROLDAN from Roselle Carillo', 0, '', 0),
(507, NULL, 'Lawn 1', '31', 'J', 'Regular', 'MA. CONSUELO MOSCOSA', 0, '', 0),
(508, NULL, 'Lawn 1', '31', 'K', 'Regular', 'RINA VICTORIANO from Jeffrey Martinez', 0, '', 0),
(509, NULL, 'Lawn 1', '31', 'L', 'Regular', 'AZUCENA NAVALES', 0, '', 0),
(510, NULL, 'Lawn 1', '31', 'M', 'Regular', 'MARIA ELA MOLLENO', 0, '', 0),
(511, NULL, 'Lawn 1', '31', 'N', 'Regular', 'JOSIELYN TAN from MARICRIS CELDA', 0, '', 0),
(512, NULL, 'Lawn 1', '31', 'O', 'Regular', 'LAARNI ESPINAL', 0, '', 0),
(513, NULL, 'Lawn 1', '31', 'P', 'Regular', 'MARIA HERLIE RECIO', 0, '', 0),
(514, NULL, 'Lawn 1', '31', 'Q', 'Regular', 'JENELIN SANCHEZ', 0, '', 0),
(515, NULL, 'Lawn 1', '31', 'R', 'Regular', 'JEAN RAMIIREZ', 0, '', 0),
(516, NULL, 'Lawn 1', '31', 'S', 'Regular', 'RACQUEL TAGARINO', 0, '', 0),
(517, NULL, 'Lawn 1', '31', 'T', 'Regular', 'RENITO MARTINEZ', 0, '', 0),
(518, NULL, 'Lawn 1', '32', 'A', 'Regular', 'CRISPINA PANGILINAN', 0, '', 0),
(519, NULL, 'Lawn 1', '32', 'B', 'Regular', 'VILMA MARIANO', 0, '', 0),
(520, NULL, 'Lawn 1', '32', 'C', 'Regular', 'MERIAM MENIA', 0, '', 0),
(521, NULL, 'Lawn 1', '32', 'D', 'Regular', 'ELADIO MALACAD', 0, '', 0),
(522, NULL, 'Lawn 1', '32', 'E', 'Regular', 'KATHERINE MACATIAG', 0, '', 0),
(523, NULL, 'Lawn 1', '32', 'F', 'Regular', 'EVANGELINE ABAD from Jherelin Macatiag', 0, '', 0),
(524, NULL, 'Lawn 1', '32', 'G', 'Regular', 'CRISTILYN REVERAL', 0, '', 0),
(525, NULL, 'Lawn 1', '32', 'H', 'Regular', 'EDUARDO SANTOS', 0, '', 0),
(526, NULL, 'Lawn 1', '32', 'I', 'Regular', 'AMY MARAVILLA', 0, '', 0),
(527, NULL, 'Lawn 1', '32', 'J', 'Regular', 'LUZVIMINDA NIRO from Roseminda Buen', 0, '', 0),
(528, NULL, 'Lawn 1', '32', 'K', 'Regular', 'EDEN IBARRA', 0, '', 0),
(529, NULL, 'Lawn 1', '32', 'L', 'Regular', 'ELIZABETH PUNZALAN', 0, '', 0),
(530, NULL, 'Lawn 1', '32', 'M', 'Regular', 'HALILI MADARANG', 0, '', 0),
(531, NULL, 'Lawn 1', '32', 'N', 'Regular', 'REYMOND BABIA', 0, 'vindy_apply_id.jpg', 0),
(532, NULL, 'Lawn 1', '32', 'O', 'Regular', 'ROCHELLYN MORDEN', 0, '', 0),
(533, NULL, 'Lawn 1', '32', 'P', 'Regular', 'SAHLEE BALANSAG', 0, '', 0),
(534, NULL, 'Lawn 1', '32', 'Q', 'Regular', 'SAHLEE BALANSAG', 0, '', 0),
(535, NULL, 'Lawn 1', '32', 'R', 'Regular', 'TERESITA BITONIO', 0, '', 0),
(536, NULL, 'Lawn 1', '32', 'S', 'Regular', 'MYLAH ENGLISH', 0, '', 0),
(537, NULL, 'Lawn 1', '32', 'T', 'Regular', 'ARISTEO DOMINGO', 0, '', 0),
(538, NULL, 'Lawn 1', '33', 'A', 'Regular', 'NIEVES DELA CRUZ 1', 0, '', 0),
(539, NULL, 'Lawn 1', '33', 'B', 'Regular', 'NIEVES DELA CRUZ 2', 0, '', 0),
(540, NULL, 'Lawn 1', '33', 'C', 'Regular', 'EUMEDIA CONCEPCION', 0, '', 0),
(541, NULL, 'Lawn 1', '33', 'D', 'Regular', 'MELIZA RANA', 0, '', 0),
(542, NULL, 'Lawn 1', '33', 'E', 'Regular', 'ROSEMARIE CACNIO', 0, '', 0),
(543, NULL, 'Lawn 1', '33', 'F', 'Regular', 'SHEILA MAY TAN', 0, '', 0),
(544, NULL, 'Lawn 1', '33', 'G', 'Regular', 'JETHROW CASIMIRO from LETECIA ADUAN', 0, '', 0),
(545, NULL, 'Lawn 1', '33', 'H', 'Regular', 'LETECIA ADUAN', 0, '', 0),
(546, NULL, 'Lawn 1', '33', 'I', 'Regular', 'MARINA COLON', 0, '', 0),
(547, NULL, 'Lawn 1', '33', 'J', 'Regular', 'VIRGINIA MENDOZA from Michelle Diaz', 0, '', 0),
(548, NULL, 'Lawn 1', '33', 'K', 'Premium', 'GENOVEVA HERNANDEZ from Nieves Dela Cruz', 0, '', 0),
(549, NULL, 'Lawn 1', '33', 'L', 'Regular', 'RICARDO SAN JOSE from NIEVES DELA CRUZ 4', 0, '', 0),
(550, NULL, 'Lawn 1', '33', 'M', 'Regular', 'MARY GRACE ROQUE', 0, '', 0),
(551, NULL, 'Lawn 1', '33', 'N', 'Regular', 'JULIETA MARTINEZ', 0, '', 0),
(552, NULL, 'Lawn 1', '33', 'O', 'Regular', 'DIONISIO REYES', 0, '', 0),
(553, NULL, 'Lawn 1', '33', 'P', 'Regular', 'ELENA PAYAS', 0, '', 0),
(554, NULL, 'Lawn 1', '33', 'Q', 'Regular', 'LYNNIEBEL FAINGASON from Cristina Roncales', 0, '', 0),
(555, NULL, 'Lawn 1', '33', 'R', 'Regular', 'VIRGINIA PALISOC', 0, '', 0),
(556, NULL, 'Lawn 1', '33', 'S', 'Regular', 'ROLANDO BAUTISTA', 0, '', 0),
(557, NULL, 'Lawn 1', '33', 'T', 'Regular', 'LYDIA MANGUBAT', 0, '', 0),
(558, NULL, 'Lawn 1', '34', 'A', 'Premium', 'SALVACION SINCO', 0, '', 0),
(559, NULL, 'Lawn 1', '34', 'B', 'Regular', 'THELMA CERENO', 0, '', 0),
(560, NULL, 'Lawn 1', '34', 'C', 'Regular', 'ENRIQUETA DAQUIS', 0, '', 0),
(561, NULL, 'Lawn 1', '34', 'D', 'Regular', 'ANNA HAZEL JACINTO', 0, '', 0),
(562, NULL, 'Lawn 1', '34', 'E', 'Regular', 'MARIA JOSEPHINE BARBOSA', 0, '', 0),
(563, NULL, 'Lawn 1', '34', 'F', 'Regular', 'CORAZON BANTIAD', 0, '', 0),
(564, NULL, 'Lawn 1', '34', 'G', 'Regular', 'CHARITO REYES 1', 0, '', 0),
(565, NULL, 'Lawn 1', '34', 'H', 'Regular', 'NENITA CARCER', 0, '', 0),
(566, NULL, 'Lawn 1', '34', 'I', 'Regular', 'ANGELO ANI 1', 0, '', 0),
(567, NULL, 'Lawn 1', '34', 'J', 'Regular', 'ANGELO ANI 2', 0, '', 0),
(568, NULL, 'Lawn 1', '34', 'K', 'Premium', 'EUGENIA AGAPITO', 0, '', 0),
(569, NULL, 'Lawn 1', '34', 'L', 'Regular', 'ROSENDO AGAPITO', 0, '', 0),
(570, NULL, 'Lawn 1', '34', 'M', 'Regular', 'NANCY PRIMERO', 0, '', 0),
(571, NULL, 'Lawn 1', '34', 'N', 'Regular', 'NANCY DIAZ', 0, '', 0),
(572, NULL, 'Lawn 1', '34', 'O', 'Regular', 'MARINELLE DE LUNA', 0, '', 0),
(573, NULL, 'Lawn 1', '34', 'P', 'Regular', 'MARILYN GRANADOS', 0, '', 0),
(574, NULL, 'Lawn 1', '34', 'Q', 'Regular', 'ZENAIDA DIMACALI', 0, '', 0),
(575, NULL, 'Lawn 1', '34', 'R', 'Regular', 'ZENAIDA DIMACALI', 0, '', 0),
(576, NULL, 'Lawn 1', '34', 'S', 'Regular', 'ELIBERTA CRUZ', 0, '', 0),
(577, NULL, 'Lawn 1', '34', 'T', 'Regular', 'ENGELBERT CRUZ', 0, '', 0),
(578, NULL, 'Lawn 1', '35', 'A', 'Premium', 'CECILIA DELA CRUZ', 0, '', 0),
(579, NULL, 'Lawn 1', '35', 'B', 'Regular', 'MARINA DELA CRUZ', 0, '', 0),
(580, NULL, 'Lawn 1', '35', 'C', 'Regular', 'EDUARDO SANCHEZ', 0, '', 0),
(581, NULL, 'Lawn 1', '35', 'D', 'Regular', 'JOEL MARIANO', 0, '', 0),
(582, NULL, 'Lawn 1', '35', 'E', 'Regular', 'JULIE ANN SYVIL GAMBOA', 0, '', 0),
(583, NULL, 'Lawn 1', '35', 'F', 'Regular', 'JULIE ANN SYVIL GAMBOA', 0, '', 0),
(584, NULL, 'Lawn 1', '35', 'G', 'Regular', 'BRENDA CARCER', 0, '', 0),
(585, NULL, 'Lawn 1', '35', 'H', 'Regular', 'SHELLA FE TABILLERAN from Estrelita San Miguel', 0, '', 0),
(586, NULL, 'Lawn 1', '35', 'I', 'Regular', 'FRANCISCA BERNARDO', 0, '', 0),
(587, NULL, 'Lawn 1', '35', 'J', 'Regular', 'ACE VILLASOTTO', 0, '', 0),
(588, NULL, 'Lawn 1', '35', 'K', 'Premium', 'ROSALINA FRANCISCO', 0, '', 0),
(589, NULL, 'Lawn 1', '35', 'L', 'Regular', 'NARITO AGUSTIN', 0, '', 0),
(590, NULL, 'Lawn 1', '35', 'M', 'Regular', 'LILIBETH GUMAFELIX', 0, '', 0),
(591, NULL, 'Lawn 1', '35', 'N', 'Regular', 'ANTONIO NIETO', 0, '', 0),
(592, NULL, 'Lawn 1', '35', 'O', 'Regular', 'ERLINDA JOSE from IMELDA ABRENA 1', 0, '', 0),
(593, NULL, 'Lawn 1', '35', 'P', 'Regular', 'IMELDA ABRENA 2', 0, '', 0),
(594, NULL, 'Lawn 1', '35', 'Q', 'Regular', 'GRESILDA BUNI', 0, '', 0),
(595, NULL, 'Lawn 1', '35', 'R', 'Regular', 'GRESILDA BUNI', 0, '', 0),
(596, NULL, 'Lawn 1', '35', 'S', 'Regular', 'MYRNA DOMINGO', 0, '', 0),
(597, NULL, 'Lawn 1', '35', 'T', 'Regular', 'MYRNA DOMINGO', 0, '', 0),
(598, NULL, 'Lawn 1', '36', 'A', 'Premium', 'CONRADO VENOYA', 0, '', 0),
(599, NULL, 'Lawn 1', '36', 'B', 'Regular', 'CATALINA AGAPITO', 0, '', 0),
(600, NULL, 'Lawn 1', '36', 'C', 'Regular', 'ZENAIDA DELA CRUZ', 0, '', 0),
(601, NULL, 'Lawn 1', '36', 'D', 'Regular', 'TERESITA GUTIERREZ', 0, '', 0),
(602, NULL, 'Lawn 1', '36', 'E', 'Regular', 'AGNES GARLITOS from Shiela Estrella', 0, '', 0),
(603, NULL, 'Lawn 1', '36', 'F', 'Regular', 'ALLAN PADILLA', 0, '', 0),
(604, NULL, 'Lawn 1', '36', 'G', 'Regular', 'MARY ROSE DE GUZMAN from FE ESTALILLA', 0, '', 0),
(605, NULL, 'Lawn 1', '36', 'H', 'Regular', 'MARY ROSE DE GUZMAN from FE ESTALILLA', 0, '', 0),
(606, NULL, 'Lawn 1', '36', 'I', 'Regular', 'AURORA BAUTISTA', 0, '', 0),
(607, NULL, 'Lawn 1', '36', 'J', 'Regular', 'RUBIO ATEGA 1', 0, '', 0),
(608, NULL, 'Lawn 1', '36', 'K', 'Premium', 'MANUEL MONTEFALCON', 0, '', 0),
(609, NULL, 'Lawn 1', '36', 'L', 'Regular', 'MELANIE JEAN HONRALES from John Patrick Gumafelix', 0, '', 0),
(610, NULL, 'Lawn 1', '36', 'M', 'Regular', 'RUEL BRIONES', 0, '', 0),
(611, NULL, 'Lawn 1', '36', 'N', 'Regular', 'NATALIA DIZON 1 from 62 P', 0, '', 0),
(612, NULL, 'Lawn 1', '36', 'O', 'Regular', 'GILBERT BAUSTISTA 1', 0, '', 0),
(613, NULL, 'Lawn 1', '36', 'P', 'Regular', 'GILBERT BAUSTISTA 2', 0, '', 0),
(614, NULL, 'Lawn 1', '36', 'Q', 'Regular', 'CHARITO MACALINO', 0, '', 0),
(615, NULL, 'Lawn 1', '36', 'R', 'Regular', 'SUSANA AQUINO', 0, '', 0),
(616, NULL, 'Lawn 1', '36', 'S', 'Regular', 'MARIANITO GEPIALA', 0, '', 0),
(617, NULL, 'Lawn 1', '36', 'T', 'Regular', 'RUBIO ATEGA 2', 0, '', 0),
(618, NULL, 'Lawn 1', '37', 'A', 'Premium', 'HELEN NEPOMUCENO', 0, '', 0),
(619, NULL, 'Lawn 1', '37', 'B', 'Regular', 'SOLEDAD BATONG BAKAL', 0, '', 0),
(620, NULL, 'Lawn 1', '37', 'C', 'Regular', 'IMELDA ARCEGA from 62 S', 0, '', 0),
(621, NULL, 'Lawn 1', '37', 'D', 'Regular', 'NATALIA DIZON 2 from 62 Q', 0, '', 0),
(622, NULL, 'Lawn 1', '37', 'E', 'Regular', 'MARJORIE BELZA', 0, '', 0),
(623, NULL, 'Lawn 1', '37', 'F', 'Regular', 'MARIBETH BAUTISTA from Ma Cecilia Bautista', 0, '', 0),
(624, NULL, 'Lawn 1', '37', 'G', 'Regular', 'JOSE RIZAL AMBAGAY', 0, '', 0),
(625, NULL, 'Lawn 1', '37', 'H', 'Regular', 'FERDINAND DE GUZMAN', 0, '', 0),
(626, NULL, 'Lawn 1', '37', 'I', 'Regular', 'NELIA FERMIN', 0, '', 0),
(627, NULL, 'Lawn 1', '37', 'J', 'Regular', 'VIRGINIA NEDERA', 0, '', 0),
(628, NULL, 'Lawn 1', '37', 'K', 'Exterior', 'THELMA DELA CRUZ', 0, '', 0),
(629, NULL, 'Lawn 1', '37', 'L', 'Exterior', 'MARIBETH SOBREVILLA', 0, '', 0),
(630, NULL, 'Lawn 1', '37', 'M', 'Exterior', 'JOEROS BERMEO- from L Feliciano', 0, '', 0),
(631, NULL, 'Lawn 1', '37', 'N', 'Exterior', 'OLIVE LUCAS', 0, '', 0),
(632, NULL, 'Lawn 1', '37', 'O', 'Exterior', 'ALFREDA GIRAY', 0, '', 0),
(633, NULL, 'Lawn 1', '37', 'P', 'Exterior', 'REMEDIOS PINON', 0, '', 0),
(634, NULL, 'Lawn 1', '37', 'Q', 'Exterior', 'MYRNA AMBAGAY', 0, '', 0),
(635, NULL, 'Lawn 1', '37', 'R', 'Exterior', 'GEMMA DE GUZMAN', 0, '', 0),
(636, NULL, 'Lawn 1', '37', 'S', 'Exterior', 'RAYMOND JIGGS ESPADILLA', 0, '', 0),
(637, NULL, 'Lawn 1', '37', 'T', 'Exterior', 'HERMELYN ESPADILLA', 0, '', 0),
(638, NULL, 'Lawn 1', '38', 'K', 'Premium', 'PABLO ALABADO JR', 0, '', 0),
(639, NULL, 'Lawn 1', '38', 'L', 'Premium', 'VILMA AGOY AGOY from Blk 39 A(ADDITIONAL LOT', 0, '', 0),
(640, NULL, 'Lawn 1', '38', 'M', 'Premium', 'VILMA AGOY AGOY from Blk 39 B', 0, '', 0),
(641, NULL, 'Lawn 1', '38', 'N', 'Premium', 'GEORGE HERNANDEZ', 0, '', 0),
(642, NULL, 'Lawn 1', '38', 'O', 'Premium', 'SUSANA MENDOZA', 0, '', 0),
(643, NULL, 'Lawn 1', '38', 'P', 'Premium', 'LEO DICON', 0, '', 0),
(644, NULL, 'Lawn 1', '38', 'Q', 'Premium', 'REMOVED', 0, '', 0),
(645, NULL, 'Lawn 1', '38', 'R', 'Premium', 'REMOVED', 0, '', 0),
(646, NULL, 'Lawn 1', '39', 'A', 'Regular', 'FLAVIANO DATING', 0, '', 0),
(647, NULL, 'Lawn 1', '39', 'B', 'Regular', 'MA. THERESA LAGASCA', 0, '', 0),
(648, NULL, 'Lawn 1', '39', 'C', 'Regular', 'MYRNA BUENAVENTURA', 0, '', 0),
(649, NULL, 'Lawn 1', '39', 'D', 'Regular', 'GEORGE HERNANDEZ', 0, '', 0),
(650, NULL, 'Lawn 1', '39', 'E', 'Regular', 'EDUARDO LOBENIA', 0, '', 0),
(651, NULL, 'Lawn 1', '39', 'F', 'Regular', 'RICHARD ARISPE   /MELBA MERCADO', 0, '', 0),
(652, NULL, 'Lawn 1', '39', 'G', 'Premium', 'RICHARD ARISPE   /MELBA MERCADO', 0, '', 0),
(653, NULL, 'Lawn 1', '39', 'H', 'Premium', 'RICHARD ARISPE   /MELBA MERCADO', 0, '', 0),
(654, NULL, 'Lawn 1', '39', 'K', 'Regular', 'FELINO DELA CRUZ JR.', 0, '', 0),
(655, NULL, 'Lawn 1', '39', 'L', 'Regular', 'FELINO DELA CRUZ JR.', 0, '', 0),
(656, NULL, 'Lawn 1', '39', 'M', 'Regular', 'MELITA COPE', 0, '', 0),
(657, NULL, 'Lawn 1', '39', 'N', 'Regular', 'MYLENE DALIGDIG', 0, '', 0),
(658, NULL, 'Lawn 1', '39', 'O', 'Regular', 'ESTRELITA CRUZ', 0, '', 0),
(659, NULL, 'Lawn 1', '39', 'P', 'Regular', 'ELEONOR MARTINEZ', 0, '', 0),
(660, NULL, 'Lawn 1', '39', 'Q', 'Regular', 'DONNALIZA MARCELINO', 0, '', 0),
(661, NULL, 'Lawn 1', '39', 'R', 'Regular', 'DONNALIZA MARCELINO', 0, '', 0),
(662, NULL, 'Lawn 1', '39', 'S', 'Premium', 'EVELYN CALLOS(From Regular )', 0, '', 0),
(663, NULL, 'Lawn 1', '39', 'T', 'Premium', 'FLORITA ORTEGA', 0, '', 0),
(664, NULL, 'Lawn 1', '40', 'A', 'Regular', 'EVARISTO BENJAMIN', 0, '', 0);
INSERT INTO `property` (`id`, `date`, `area`, `block_number`, `lot_number`, `classification`, `lot_owner`, `lot_status`, `map_img`, `request_status`) VALUES
(665, NULL, 'Lawn 1', '40', 'B', 'Regular', 'EVARISTO BENJAMIN', 0, '', 0),
(666, NULL, 'Lawn 1', '40', 'C', 'Regular', 'EVA SOCO', 0, '', 0),
(667, NULL, 'Lawn 1', '40', 'D', 'Regular', 'NORA SALVADOR', 0, '', 0),
(668, NULL, 'Lawn 1', '40', 'E', 'Regular', 'NELIDA REPUBERBIO', 0, '', 0),
(669, NULL, 'Lawn 1', '40', 'F', 'Regular', 'LUZVIMINDA BERNARDINO', 0, '', 0),
(670, NULL, 'Lawn 1', '40', 'G', 'Regular', 'FELIPE STA. MARIA', 0, '', 0),
(671, NULL, 'Lawn 1', '40', 'H', 'Regular', 'CORNELIA PEREZ', 0, '', 0),
(672, NULL, 'Lawn 1', '40', 'I', 'Regular', 'GLORIA MENDOZA', 0, '', 0),
(673, NULL, 'Lawn 1', '40', 'J', 'Regular', 'LEANDRO NEPOMUCENO JR.', 0, '', 0),
(674, NULL, 'Lawn 1', '40', 'K', 'Regular', 'BETTY SOTELO', 0, '', 0),
(675, NULL, 'Lawn 1', '40', 'L', 'Regular', 'LILIBETH LIM', 0, '', 0),
(676, NULL, 'Lawn 1', '40', 'M', 'Regular', 'FLORINDA LUNA', 0, '', 0),
(677, NULL, 'Lawn 1', '40', 'N', 'Regular', 'MA. EDITHA FAJARDO', 0, '', 0),
(678, NULL, 'Lawn 1', '40', 'O', 'Regular', 'CYNTHIA MENDOZA', 0, '', 0),
(679, NULL, 'Lawn 1', '40', 'P', 'Regular', 'ANITA CHICO', 0, '', 0),
(680, NULL, 'Lawn 1', '40', 'Q', 'Regular', 'AMELIA D. SALVADOR from Elmer Sarmento', 0, '', 0),
(681, NULL, 'Lawn 1', '40', 'R', 'Regular', 'ELMER SARMIENTO', 0, '', 0),
(682, NULL, 'Lawn 1', '40', 'S', 'Regular', 'ANGELICA PADILLA', 0, '', 0),
(683, NULL, 'Lawn 1', '40', 'T', 'Regular', 'NORA PAÑA', 0, '', 0),
(684, NULL, 'Lawn 1', '41', 'A', 'Regular', 'MARILOU CRUZ', 0, '', 0),
(685, NULL, 'Lawn 1', '41', 'B', 'Regular', 'MARILOU CRUZ', 0, '', 0),
(686, NULL, 'Lawn 1', '41', 'C', 'Regular', 'ANA MARIE ALVAREZ', 0, '', 0),
(687, NULL, 'Lawn 1', '41', 'D', 'Regular', 'LEA ANN MORAL', 0, '', 0),
(688, NULL, 'Lawn 1', '41', 'E', 'Regular', 'WILFREDO IBARRA', 0, '', 0),
(689, NULL, 'Lawn 1', '41', 'F', 'Regular', 'MARIA MAYUMI MENDOZA', 0, '', 0),
(690, NULL, 'Lawn 1', '41', 'G', 'Regular', 'DECINA FRANCISCO', 0, '', 0),
(691, NULL, 'Lawn 1', '41', 'H', 'Regular', 'ESTRELLA MENDOZA', 0, '', 0),
(692, NULL, 'Lawn 1', '41', 'I', 'Regular', 'MARICAR DE GUZMAN', 0, '', 0),
(693, NULL, 'Lawn 1', '41', 'J', 'Regular', 'MARICAR DE GUZMAN', 0, '', 0),
(694, NULL, 'Lawn 1', '41', 'K', 'Regular', 'MAUREEN DE JESUS', 0, '', 0),
(695, NULL, 'Lawn 1', '41', 'L', 'Regular', 'GINA REYES', 0, '', 0),
(696, NULL, 'Lawn 1', '41', 'M', 'Regular', 'VICTORIA VILLARIN', 0, '', 0),
(697, NULL, 'Lawn 1', '41', 'N', 'Regular', 'MAE CASTILLON', 0, '', 0),
(698, NULL, 'Lawn 1', '41', 'O', 'Regular', 'MAE CASTILLON', 0, '', 0),
(699, NULL, 'Lawn 1', '41', 'P', 'Regular', 'RODELIO GUEVARRA', 0, '', 0),
(700, NULL, 'Lawn 1', '41', 'Q', 'Regular', 'YOLANDA GUEVARRA', 0, '', 0),
(701, NULL, 'Lawn 1', '41', 'R', 'Regular', 'MA. ZARINA MYLA BREGENTE', 0, '', 0),
(702, NULL, 'Lawn 1', '41', 'S', 'Regular', 'RODELIO GUEVARRA', 0, '', 0),
(703, NULL, 'Lawn 1', '41', 'T', 'Regular', 'GEOGIE ABALOS', 0, '', 0),
(704, NULL, 'Lawn 1', '42', 'A', 'Regular', 'CARMELITA ESTOPARE', 0, '', 0),
(705, NULL, 'Lawn 1', '42', 'B', 'Regular', 'ROSARIO GALLEGO', 0, '', 0),
(706, NULL, 'Lawn 1', '42', 'C', 'Regular', 'ISABELITA DIMAANO', 0, '', 0),
(707, NULL, 'Lawn 1', '42', 'D', 'Regular', 'DOMINGA BORROMEO', 0, '', 0),
(708, NULL, 'Lawn 1', '42', 'E', 'Regular', 'ANAVILES VILLANUEVA', 0, '', 0),
(709, NULL, 'Lawn 1', '42', 'F', 'Regular', 'NENITA SILAPAN', 0, '', 0),
(710, NULL, 'Lawn 1', '42', 'G', 'Regular', 'ELEANOR RELOVA', 0, '', 0),
(711, NULL, 'Lawn 1', '42', 'H', 'Regular', 'MARICHER DIADIVAS', 0, '', 0),
(712, NULL, 'Lawn 1', '42', 'I', 'Regular', 'EMILY AGUIRRE', 0, '', 0),
(713, NULL, 'Lawn 1', '42', 'J', 'Regular', 'ELSIE CELESTIAL', 0, '', 0),
(714, NULL, 'Lawn 1', '42', 'K', 'Regular', 'ESTRELLA CORPUZ', 0, '', 0),
(715, NULL, 'Lawn 1', '42', 'L', 'Regular', 'VIRGINIA BORDADOR', 0, '', 0),
(716, NULL, 'Lawn 1', '42', 'M', 'Regular', 'EVELYN MORALES', 0, '', 0),
(717, NULL, 'Lawn 1', '42', 'N', 'Regular', 'ELISEO NOTARTE', 0, '', 0),
(718, NULL, 'Lawn 1', '42', 'O', 'Regular', 'MA. CECILIA PALISOC', 0, '', 0),
(719, NULL, 'Lawn 1', '42', 'P', 'Regular', 'MA. CECILIA PALISOC', 0, '', 0),
(720, NULL, 'Lawn 1', '42', 'Q', 'Regular', 'ANNIE CAMERO', 0, '', 0),
(721, NULL, 'Lawn 1', '42', 'R', 'Regular', 'FERDINAND BAGADIONG', 0, '', 0),
(722, NULL, 'Lawn 1', '42', 'S', 'Regular', 'RUBINA PARDILLA', 0, '', 0),
(723, NULL, 'Lawn 1', '42', 'T', 'Regular', 'CARLOS ROGADOR', 0, '', 0),
(724, NULL, 'Lawn 1', '43', 'A', 'Premium', 'MENEN ALMONTE', 0, '', 0),
(725, NULL, 'Lawn 1', '43', 'B', 'Premium', 'MARILEN CARAAN', 0, '', 0),
(726, NULL, 'Lawn 1', '43', 'C', 'Premium', 'HONESTO LOPEZ', 0, '', 0),
(727, NULL, 'Lawn 1', '43', 'D', 'Premium', 'MARY GRACE CRUZ', 0, '', 0),
(728, NULL, 'Lawn 1', '43', 'E', 'Premium', 'LUZVIMINDA CALUCAG', 0, '', 0),
(729, NULL, 'Lawn 1', '43', 'F', 'Premium', 'TERESITA FORLAJE', 0, '', 0),
(730, NULL, 'Lawn 1', '43', 'G', 'Premium', 'LOURDES GABIONZA', 0, '', 0),
(731, NULL, 'Lawn 1', '43', 'H', 'Premium', 'ANITA VICENTINO', 0, '', 0),
(732, NULL, 'Lawn 1', '43', 'I', 'Premium', 'FAITH VILLA from Blk 43 Lot S', 0, '', 0),
(733, NULL, 'Lawn 1', '43', 'J', 'Premium', 'MAGNOLIA JOSSEN VILLA frm 43 T', 0, '', 0),
(734, NULL, 'Lawn 1', '44', 'A', 'Premium', 'ROWENA BANDIGAN ADDITIONAL LOT', 0, '', 0),
(735, NULL, 'Lawn 1', '44', 'B', 'Premium', 'ROWENA BANDIGAN Additional Lot', 0, '', 0),
(736, NULL, 'Lawn 1', '44', 'C', 'Premium', 'FELISA LUCIO from Catherine Lucio', 0, '', 0),
(737, NULL, 'Lawn 1', '44', 'D', 'Premium', 'ELEAZAR VILLA', 0, '', 0),
(738, NULL, 'Lawn 1', '44', 'E', 'Premium', 'CHARITO CACHO', 0, '', 0),
(739, NULL, 'Lawn 1', '44', 'F', 'Premium', 'JENNIFER ESTERO from Alicia Milaya', 0, '', 0),
(740, NULL, 'Lawn 1', '44', 'G', 'Premium', 'ROBERTO DELA CRUZ from Melanie Mandanas', 0, '', 0),
(741, NULL, 'Lawn 1', '44', 'H', 'Premium', 'ROBERTO DELA CRUZ from Melanie Mandanas', 0, '', 0),
(742, NULL, 'Lawn 1', '44', 'I', 'Premium', 'GLEA BAUTISTA', 0, '', 0),
(743, NULL, 'Lawn 1', '44', 'J', 'Premium', 'GLEA BAUTISTA', 0, '', 0),
(744, NULL, 'Lawn 1', '44', 'K', 'Regular', 'ROWENA BANDIGAN', 0, '', 0),
(745, NULL, 'Lawn 1', '44', 'L', 'Regular', 'ROWENA BANDIGAN', 0, '', 0),
(746, NULL, 'Lawn 1', '44', 'M', 'Regular', 'LEONILA BERNARDO from Cecilia Mercado', 0, '', 0),
(747, NULL, 'Lawn 1', '44', 'N', 'Regular', 'LEONILA BERNARDO', 0, '', 0),
(748, NULL, 'Lawn 1', '44', 'O', 'Regular', 'LIZA ISAGUNDE', 0, '', 0),
(749, NULL, 'Lawn 1', '44', 'P', 'Regular', 'MARLON MAER', 0, '', 0),
(750, NULL, 'Lawn 1', '44', 'Q', 'Regular', 'MANUEL HABABA JR.', 0, '', 0),
(751, NULL, 'Lawn 1', '44', 'R', 'Regular', 'IAN PATRICK LUTAO', 0, '412747216_10230946337499190_4281031286631952966_n.jpg', 0),
(752, NULL, 'Lawn 1', '44', 'S', 'Regular', 'ISABELITA SEVILLA', 0, '', 0),
(753, NULL, 'Lawn 1', '44', 'T', 'Regular', 'ELENITA MOERMAN', 0, '', 0),
(754, NULL, 'Lawn 1', '45', 'A', 'Regular', 'IRENE AMADO', 0, '', 0),
(755, NULL, 'Lawn 1', '45', 'B', 'Regular', 'IRENE AMADO', 0, '', 0),
(756, NULL, 'Lawn 1', '45', 'C', 'Regular', 'GERLITA ORTIZ', 0, '', 0),
(757, NULL, 'Lawn 1', '45', 'D', 'Regular', 'NORBERTO NOGUERA', 0, '', 0),
(758, NULL, 'Lawn 1', '45', 'E', 'Regular', 'SALVADOR SYDNEY', 0, '', 0),
(759, NULL, 'Lawn 1', '45', 'F', 'Regular', 'EGAN LOUIS FAJARDO', 0, '', 0),
(760, NULL, 'Lawn 1', '45', 'G', 'Regular', 'DAPHNE ANGELA FAJARDO', 0, '', 0),
(761, NULL, 'Lawn 1', '45', 'H', 'Regular', 'EMILY ANTONIO', 0, '', 0),
(762, NULL, 'Lawn 1', '45', 'I', 'Regular', 'MARRY-ANN MAPA', 0, '', 0),
(763, NULL, 'Lawn 1', '45', 'J', 'Regular', 'EMELY GUEVARRA', 0, '', 0),
(764, NULL, 'Lawn 1', '45', 'K', 'Regular', 'VALERIANO MADILO', 0, '', 0),
(765, NULL, 'Lawn 1', '45', 'L', 'Regular', 'EVANGELINE SURATOS', 0, '', 0),
(766, NULL, 'Lawn 1', '45', 'M', 'Regular', 'ALEXANDER BATAC', 0, '', 0),
(767, NULL, 'Lawn 1', '45', 'N', 'Regular', 'ROMEO MENDOZA', 0, '', 0),
(768, NULL, 'Lawn 1', '45', 'O', 'Regular', 'JAY CABOBOY', 0, '', 0),
(769, NULL, 'Lawn 1', '45', 'P', 'Regular', 'JOSEPHINE MERCADO', 0, '', 0),
(770, NULL, 'Lawn 1', '45', 'Q', 'Regular', 'JOSEPHINE MERCADO', 0, '', 0),
(771, NULL, 'Lawn 1', '45', 'R', 'Regular', 'VALENTINE VILORIA', 0, '', 0),
(772, NULL, 'Lawn 1', '45', 'S', 'Regular', 'ALEXANDER SUNGA', 0, '', 0),
(773, NULL, 'Lawn 1', '45', 'T', 'Regular', 'MINDA GULINAO', 0, '', 0),
(774, NULL, 'Lawn 1', '46', 'A', 'Regular', 'EDUARDO DE VERA JR.', 0, '', 0),
(775, NULL, 'Lawn 1', '46', 'B', 'Regular', 'GLORIA SAN LUIS', 0, '', 0),
(776, NULL, 'Lawn 1', '46', 'C', 'Regular', 'ISABELITA BAUTISTA', 0, '', 0),
(777, NULL, 'Lawn 1', '46', 'D', 'Regular', 'ROBERT FETALVERO', 0, '', 0),
(778, NULL, 'Lawn 1', '46', 'E', 'Regular', 'HERMENIGILDA SAN LUIS', 0, '', 0),
(779, NULL, 'Lawn 1', '46', 'F', 'Regular', 'MARIETTA BONDAD', 0, '', 0),
(780, NULL, 'Lawn 1', '46', 'G', 'Regular', 'SUSANA SABENIANO', 0, '', 0),
(781, NULL, 'Lawn 1', '46', 'H', 'Regular', 'FELOMINA SAN MIGUEL from Analyn Lloret', 0, '', 0),
(782, NULL, 'Lawn 1', '46', 'I', 'Regular', 'MARIE VELASCO', 0, '', 0),
(783, NULL, 'Lawn 1', '46', 'J', 'Regular', 'JOSEFINA RIVERA', 0, '', 0),
(784, NULL, 'Lawn 1', '46', 'K', 'Regular', 'EVELYN TORIO', 0, '', 0),
(785, NULL, 'Lawn 1', '46', 'L', 'Regular', 'ROGELIO BANDELEON', 0, '', 0),
(786, NULL, 'Lawn 1', '46', 'M', 'Regular', 'ANNABELLE BANDELEON', 0, '', 0),
(787, NULL, 'Lawn 1', '46', 'N', 'Regular', 'JULIANA CAMPANO', 0, '', 0),
(788, NULL, 'Lawn 1', '46', 'O', 'Regular', 'ELSIE DELA  CRUZ', 0, '', 0),
(789, NULL, 'Lawn 1', '46', 'P', 'Regular', 'ZENAIDA SULINAP', 0, '', 0),
(790, NULL, 'Lawn 1', '46', 'Q', 'Regular', 'LEONILA DOMINGO', 0, '', 0),
(791, NULL, 'Lawn 1', '46', 'R', 'Regular', 'TRINIDAD ISRAEL', 0, '', 0),
(792, NULL, 'Lawn 1', '46', 'S', 'Regular', 'MA. LINA BONILLA', 0, '', 0),
(793, NULL, 'Lawn 1', '46', 'T', 'Regular', 'MELANIE BORDADOR', 0, '', 0),
(794, NULL, 'Lawn 1', '47', 'A', 'Regular', 'LEONOR VIAJE', 0, '', 0),
(795, NULL, 'Lawn 1', '47', 'B', 'Regular', 'LEONOR VIAJE from Blk 55 Lot O', 0, '', 0),
(796, NULL, 'Lawn 1', '47', 'C', 'Regular', 'LOLITA JUNGCO', 0, '', 0),
(797, NULL, 'Lawn 1', '47', 'D', 'Regular', 'MERRIAM MEDIDA', 0, '', 0),
(798, NULL, 'Lawn 1', '47', 'E', 'Regular', 'ELLENE GIVA', 0, '', 0),
(799, NULL, 'Lawn 1', '47', 'F', 'Regular', 'ISABELITA DIMAANO', 0, '', 0),
(800, NULL, 'Lawn 1', '47', 'G', 'Regular', 'MA. LUISA HIPOLITO', 0, '', 0),
(801, NULL, 'Lawn 1', '47', 'H', 'Regular', 'DANILO ZAMORA', 0, '', 0),
(802, NULL, 'Lawn 1', '47', 'I', 'Regular', 'SALVADOR SOCITO', 0, '', 0),
(803, NULL, 'Lawn 1', '47', 'J', 'Regular', 'SALVADOR SOCITO', 0, '', 0),
(804, NULL, 'Lawn 1', '47', 'K', 'Regular', 'FELICITA PANTALEON', 0, '', 0),
(805, NULL, 'Lawn 1', '47', 'L', 'Regular', 'FELICITA PANTALEON', 0, '', 0),
(806, NULL, 'Lawn 1', '47', 'M', 'Regular', 'DOMINGO DEDASE II', 0, '', 0),
(807, NULL, 'Lawn 1', '47', 'N', 'Regular', 'TERESITA TABINAS', 0, '', 0),
(808, NULL, 'Lawn 1', '47', 'O', 'Regular', 'TERESITA TABINAS', 0, '', 0),
(809, NULL, 'Lawn 1', '47', 'P', 'Regular', 'NENITA OKADA', 0, '', 0),
(810, NULL, 'Lawn 1', '47', 'Q', 'Regular', 'LEOPOLDO MUNSAYAC', 0, '', 0),
(811, NULL, 'Lawn 1', '47', 'R', 'Regular', 'LEOPOLDO MUNSAYAC', 0, '', 0),
(812, NULL, 'Lawn 1', '47', 'S', 'Regular', 'MELANIE MANDANAS 3', 0, '', 0),
(813, NULL, 'Lawn 1', '47', 'T', 'Regular', 'HELEN SUGUI', 0, '', 0),
(814, NULL, 'Lawn 1', '48', 'A', 'Premium', 'SIMEONA ACIBAR', 0, '', 0),
(815, NULL, 'Lawn 1', '48', 'B', 'Premium', 'EMELYN SOONG', 0, '', 0),
(816, NULL, 'Lawn 1', '48', 'C', 'Premium', 'EMELYN SOONG', 0, '', 0),
(817, NULL, 'Lawn 1', '48', 'D', 'Premium', 'ANITA CONCEPCION', 0, '', 0),
(818, NULL, 'Lawn 1', '48', 'E', 'Premium', 'JULIETA VALENTINO', 0, '', 0),
(819, NULL, 'Lawn 1', '48', 'F', 'Premium', 'JULIETA VALENTINO 2', 0, '', 0),
(820, NULL, 'Lawn 1', '48', 'G', 'Premium', 'CESAR CONSULTADO', 0, '', 0),
(821, NULL, 'Lawn 1', '48', 'H', 'Premium', 'CESAR CONSULTADO', 0, '', 0),
(822, NULL, 'Lawn 1', '48', 'I', 'Premium', 'MATEA ARMEZA', 0, '', 0),
(823, NULL, 'Lawn 1', '48', 'J', 'Premium', 'MATEA ARMEZA', 0, '', 0),
(824, NULL, 'Lawn 1', '52', 'J', 'Premium', 'ELISA BALDESUES', 0, '', 0),
(825, NULL, 'Lawn 1', '52', 'K', 'Premium', 'MILAGROS PILOTON from Norma Arciaga', 0, '', 0),
(826, NULL, 'Lawn 1', '52', 'L', 'Premium', 'JEFFREY CRUZ', 0, '', 0),
(827, NULL, 'Lawn 1', '52', 'M', 'Premium', 'JERSIE CRUZ', 0, '', 0),
(828, NULL, 'Lawn 1', '52', 'N', 'Premium', 'JERSIE CRUZ', 0, '', 0),
(829, NULL, 'Lawn 1', '52', 'O', 'Premium', 'KRISTINA HENRIETA MONTERO', 0, '', 0),
(830, NULL, 'Lawn 1', '52', 'P', 'Premium', 'CLAUDIA ISABELLE MONTERO', 0, '', 0),
(831, NULL, 'Lawn 1', '52', 'Q', 'Premium', 'GREGORIA DELA CRUZ', 0, '', 0),
(832, NULL, 'Lawn 1', '52', 'R', 'Premium', 'RUFINA DELA CRUZ', 0, '', 0),
(833, NULL, 'Lawn 1', '52', 'S', 'Premium', 'RAMON BALATUCAN', 0, '', 0),
(834, NULL, 'Lawn 1', '52', 'T', 'Regular', 'COLENSO SINGSON', 0, '', 0),
(835, NULL, 'Lawn 1', '53', 'A', 'Premium', 'BENITA MORAGA', 0, '', 0),
(836, NULL, 'Lawn 1', '53', 'B', 'Regular', 'JOAN CRUZ', 0, '', 0),
(837, NULL, 'Lawn 1', '53', 'C', 'Regular', 'LUCILA DELOS REYES from Blk 40 Lot Q', 0, '', 0),
(838, NULL, 'Lawn 1', '53', 'D', 'Regular', 'RACHEL TILOS', 0, '', 0),
(839, NULL, 'Lawn 1', '53', 'E', 'Regular', 'CECILIA MERCADO', 0, '', 0),
(840, NULL, 'Lawn 1', '53', 'F', 'Regular', 'CLAUDIA ISABELLE MONTERO', 0, '', 0),
(841, NULL, 'Lawn 1', '53', 'G', 'Regular', 'NARCISA BORBON', 0, '', 0),
(842, NULL, 'Lawn 1', '53', 'H', 'Regular', 'VIRGINIA ESPERAS', 0, '', 0),
(843, NULL, 'Lawn 1', '53', 'I', 'Regular', 'VIRGINIA ESPERAS', 0, '', 0),
(844, NULL, 'Lawn 1', '53', 'J', 'Regular', 'SUSAN PAULINO', 0, '', 0),
(845, NULL, 'Lawn 1', '53', 'K', 'Premium', 'GENALYN NORICO', 0, '', 0),
(846, NULL, 'Lawn 1', '53', 'L', 'Regular', 'DOMINADOR REALES', 0, '', 0),
(847, NULL, 'Lawn 1', '53', 'M', 'Regular', 'MA. THERESA BERNARDO', 0, '', 0),
(848, NULL, 'Lawn 1', '53', 'N', 'Regular', 'ONOFRE MARCELO', 0, '', 0),
(849, NULL, 'Lawn 1', '53', 'O', 'Regular', 'MELANIE BOLANTE', 0, '', 0),
(850, NULL, 'Lawn 1', '53', 'P', 'Regular', 'MARILYN BINALBER', 0, '', 0),
(851, NULL, 'Lawn 1', '53', 'Q', 'Regular', 'LEONILA JUAN', 0, '', 0),
(852, NULL, 'Lawn 1', '53', 'R', 'Regular', 'LEONILA JUAN', 0, '', 0),
(853, NULL, 'Lawn 1', '53', 'S', 'Regular', 'RAYMOND FLORIANO SR.', 0, '', 0),
(854, NULL, 'Lawn 1', '53', 'T', 'Regular', 'LUCIA ZAMORA', 0, '', 0),
(855, NULL, 'Lawn 1', '54', 'A', 'Premium', 'FORTALEZA LEE CARIDO', 0, '', 0),
(856, NULL, 'Lawn 1', '54', 'B', 'Regular', 'ELIZARDO CARIDO', 0, '', 0),
(857, NULL, 'Lawn 1', '54', 'C', 'Regular', 'HYCINTH MARGARET MENDOZA', 0, '', 0),
(858, NULL, 'Lawn 1', '54', 'D', 'Regular', 'RAYMOND FLORIANO SR.', 0, '', 0),
(859, NULL, 'Lawn 1', '54', 'E', 'Regular', 'HELEN MANAOG', 0, '', 0),
(860, NULL, 'Lawn 1', '54', 'F', 'Regular', 'HELEN MANAOG', 0, '', 0),
(861, NULL, 'Lawn 1', '54', 'G', 'Regular', 'ANALYN OBEJA', 0, '', 0),
(862, NULL, 'Lawn 1', '54', 'H', 'Regular', 'MAGDALENA OBEJA', 0, '', 0),
(863, NULL, 'Lawn 1', '54', 'I', 'Regular', 'MAGDALENA OBEJA', 0, '', 0),
(864, NULL, 'Lawn 1', '54', 'J', 'Regular', 'HERMENIA BACSAL from JOCELYN VALERO', 0, '', 0),
(865, NULL, 'Lawn 1', '54', 'K', 'Premium', 'JACQUELINE MORES', 0, '', 0),
(866, NULL, 'Lawn 1', '54', 'L', 'Regular', 'MANILYN MARBEBE', 0, '', 0),
(867, NULL, 'Lawn 1', '54', 'M', 'Regular', 'FREDERICK DIAZ', 0, '', 0),
(868, NULL, 'Lawn 1', '54', 'N', 'Regular', 'FREDERICK DIAZ', 0, '', 0),
(869, NULL, 'Lawn 1', '54', 'O', 'Regular', 'MARIA CRISTINA IMPERIO', 0, '', 0),
(870, NULL, 'Lawn 1', '54', 'P', 'Regular', 'JOANNA PERAS', 0, '', 0),
(871, NULL, 'Lawn 1', '54', 'Q', 'Regular', 'ELEONOR IRENE DATUIN', 0, '', 0),
(872, NULL, 'Lawn 1', '54', 'R', 'Regular', 'AGUSTINA MAYORMITA', 0, '', 0),
(873, NULL, 'Lawn 1', '54', 'S', 'Regular', 'OLIMPIO VASIG', 0, '', 0),
(874, NULL, 'Lawn 1', '54', 'T', 'Regular', 'MARIETTA CATIG', 0, '', 0),
(875, NULL, 'Lawn 1', '55', 'A', 'Premium', 'HERMINIA BORELA', 0, '', 0),
(876, NULL, 'Lawn 1', '55', 'B', 'Regular', 'JULIAN GONO', 0, '', 0),
(877, NULL, 'Lawn 1', '55', 'C', 'Regular', 'MARIA GENIE DELOS SANTOS', 0, '', 0),
(878, NULL, 'Lawn 1', '55', 'D', 'Regular', 'PACIENCIA BERSABAL', 0, '', 0),
(879, NULL, 'Lawn 1', '55', 'E', 'Regular', 'MA. LOURDES LARCENA', 0, '', 0),
(880, NULL, 'Lawn 1', '55', 'F', 'Regular', 'CHRISTINE GREGORIO', 0, '', 0),
(881, NULL, 'Lawn 1', '55', 'G', 'Regular', 'BELINDA LOZADA from MARIA CRISTINA IMPERIO', 0, '', 0),
(882, NULL, 'Lawn 1', '55', 'H', 'Regular', 'CORAZON MANDAC', 0, '', 0),
(883, NULL, 'Lawn 1', '55', 'I', 'Regular', 'NERY JOSEPH VASQUEZ', 0, '', 0),
(884, NULL, 'Lawn 1', '55', 'J', 'Regular', 'RACHEL VASQUEZ', 0, '', 0),
(885, NULL, 'Lawn 1', '55', 'K', 'Premium', 'JOCELYN TAPERO from Marilyn Yamane', 0, '', 0),
(886, NULL, 'Lawn 1', '55', 'L', 'Regular', 'JOCELYN TAPERO from Marilyn Yamane', 0, '', 0),
(887, NULL, 'Lawn 1', '55', 'M', 'Regular', 'RAQUEL TRANGIA', 0, '', 0),
(888, NULL, 'Lawn 1', '55', 'N', 'Regular', 'RAQUEL TRANGIA', 0, '', 0),
(889, NULL, 'Lawn 1', '55', 'O', 'Regular', 'JOHN PAUL SANOSA', 0, '', 0),
(890, NULL, 'Lawn 1', '55', 'P', 'Regular', 'VICENTE GOPEZ', 0, '', 0),
(891, NULL, 'Lawn 1', '55', 'Q', 'Regular', 'VICENTE GOPEZ', 0, '', 0),
(892, NULL, 'Lawn 1', '55', 'R', 'Regular', 'RICHARD MONTALBO', 0, '', 0),
(893, NULL, 'Lawn 1', '55', 'S', 'Regular', 'RESTILYN SANTOS', 0, '', 0),
(894, NULL, 'Lawn 1', '55', 'T', 'Regular', 'LANIE ESTRELLA', 0, '', 0),
(895, NULL, 'Lawn 1', '56', 'A', 'Premium', 'VANESSA DELA CRUZ', 0, '', 0),
(896, NULL, 'Lawn 1', '56', 'B', 'Regular', 'EUGENIA LAMANDO', 0, '', 0),
(897, NULL, 'Lawn 1', '56', 'C', 'Regular', 'CAROLINA BERBOSO', 0, '', 0),
(898, NULL, 'Lawn 1', '56', 'D', 'Regular', 'CAROLINA BERBOSO', 0, '', 0),
(899, NULL, 'Lawn 1', '56', 'E', 'Regular', 'KARLA PAVIA', 0, '', 0),
(900, NULL, 'Lawn 1', '56', 'F', 'Regular', 'MATEA RODRIGUEZ', 0, '', 0),
(901, NULL, 'Lawn 1', '56', 'G', 'Regular', 'MANILYN MONTABO', 0, '', 0),
(902, NULL, 'Lawn 1', '56', 'H', 'Regular', 'LILIBETH RODRIGUEZ', 0, '', 0),
(903, NULL, 'Lawn 1', '56', 'I', 'Regular', 'CAROLINA LALO', 0, '', 0),
(904, NULL, 'Lawn 1', '56', 'J', 'Regular', 'CAROLINA LALO', 0, '', 0),
(905, NULL, 'Lawn 1', '56', 'K', 'Premium', 'MARIVEL QUIROGA', 0, '', 0),
(906, NULL, 'Lawn 1', '56', 'L', 'Regular', 'FERDINAND TAMBAGO', 0, '', 0),
(907, NULL, 'Lawn 1', '56', 'M', 'Regular', 'MARICIRIS SERVO', 0, '', 0),
(908, NULL, 'Lawn 1', '56', 'N', 'Regular', 'MERCY IKEDO', 0, '', 0),
(909, NULL, 'Lawn 1', '56', 'O', 'Regular', 'JENNY SALVADOR', 0, '', 0),
(910, NULL, 'Lawn 1', '56', 'P', 'Regular', 'LUALHATI CHAVAZ', 0, '', 0),
(911, NULL, 'Lawn 1', '56', 'Q', 'Regular', 'MARIA LOPEZ', 0, '', 0),
(912, NULL, 'Lawn 1', '56', 'R', 'Regular', 'SABINA ESTRELLA', 0, '', 0),
(913, NULL, 'Lawn 1', '56', 'S', 'Regular', 'ROSALIE VILLADOS 2', 0, '', 0),
(914, NULL, 'Lawn 1', '56', 'T', 'Premium', 'EMELITA LACSON', 0, '', 0),
(915, NULL, 'Lawn 1', '57', 'A', 'Premium', 'MA. CHRISTINA CASTRO', 0, '', 0),
(916, NULL, 'Lawn 1', '57', 'B', 'Regular', 'EMELITA TRINIDAD', 0, '', 0),
(917, NULL, 'Lawn 1', '57', 'C', 'Regular', 'GLENN TRINIDAD', 0, '', 0),
(918, NULL, 'Lawn 1', '57', 'D', 'Regular', 'ESPY BALBUENA', 0, '', 0),
(919, NULL, 'Lawn 1', '57', 'E', 'Regular', 'IMELDA NEPOMUCENO', 0, '', 0),
(920, NULL, 'Lawn 1', '57', 'F', 'Regular', 'SANTIAGO CANILAO', 0, '', 0),
(921, NULL, 'Lawn 1', '57', 'G', 'Regular', 'SANTIAGO CANILAO', 0, '', 0),
(922, NULL, 'Lawn 1', '57', 'H', 'Regular', 'JOCELYN PUNZAL', 0, '', 0),
(923, NULL, 'Lawn 1', '57', 'I', 'Regular', 'MIRRIAM BALBOA 2', 0, '', 0),
(924, NULL, 'Lawn 1', '57', 'J', 'Premium', 'ROGELIO DINONG', 0, '', 0),
(925, NULL, 'Lawn 1', '57', 'K', 'Premium', 'MA. CHRISTINA CASTRO', 0, '', 0),
(926, NULL, 'Lawn 1', '57', 'L', 'Regular', 'CHERRYL ANN TRINIDAD', 0, '', 0),
(927, NULL, 'Lawn 1', '57', 'M', 'Regular', 'APRIL ANGELA TRINIDAD', 0, '', 0),
(928, NULL, 'Lawn 1', '57', 'N', 'Regular', 'CELESTE FE BARREDO', 0, '', 0),
(929, NULL, 'Lawn 1', '57', 'O', 'Regular', 'CRISTINA IGNO', 0, '', 0),
(930, NULL, 'Lawn 1', '57', 'P', 'Regular', 'CELESTE FE BARREDO', 0, '', 0),
(931, NULL, 'Lawn 1', '57', 'Q', 'Regular', 'OLIMPIO MARCELO', 0, '', 0),
(932, NULL, 'Lawn 1', '57', 'R', 'Regular', 'EVELYN DE JESUS 3', 0, '', 0),
(933, NULL, 'Lawn 1', '57', 'S', 'Regular', 'EVELYN DE JESUS 4', 0, '', 0),
(934, NULL, 'Lawn 1', '57', 'T', 'Premium', 'LANIE ANICETO', 0, '', 0),
(935, NULL, 'Lawn 1', '58', 'A', 'Premium', 'RANDY VICTORIANO', 0, '', 0),
(936, NULL, 'Lawn 1', '58', 'B', 'Regular', 'RANDY VICTORIANO', 0, '', 0),
(937, NULL, 'Lawn 1', '58', 'C', 'Regular', 'JESUS ALBERTO', 0, '', 0),
(938, NULL, 'Lawn 1', '58', 'D', 'Regular', 'MICHAEL JADULAN from Mary Jane Pascua', 0, '', 0),
(939, NULL, 'Lawn 1', '58', 'E', 'Regular', 'NORMA BOLINA', 0, '', 0),
(940, NULL, 'Lawn 1', '58', 'F', 'Regular', 'ALYSSA KIRSTIN MANAOG', 0, '', 0),
(941, NULL, 'Lawn 1', '58', 'G', 'Regular', 'LORETO MANAOG', 0, '', 0),
(942, NULL, 'Lawn 1', '58', 'H', 'Regular', 'LORETO MANAOG', 0, '', 0),
(943, NULL, 'Lawn 1', '58', 'I', 'Regular', 'LORETO MANAOG', 0, '', 0),
(944, NULL, 'Lawn 1', '58', 'J', 'Premium', 'CORAZON LABRADOR', 0, '', 0),
(945, NULL, 'Lawn 1', '58', 'K', 'Premium', 'NORMA RAMIREZ from ELINORA MAGHANOY 3', 0, '', 0),
(946, NULL, 'Lawn 1', '58', 'L', 'Regular', 'GILBERTO RIOTUTAR from ELINORA MAGHANOY 4', 0, '', 0),
(947, NULL, 'Lawn 1', '58', 'M', 'Regular', 'JHOSIELYN GACUTAN', 0, '', 0),
(948, NULL, 'Lawn 1', '58', 'N', 'Regular', 'JUANITO CAOILE', 0, '', 0),
(949, NULL, 'Lawn 1', '58', 'O', 'Regular', 'LORENA CAPINPIN', 0, '', 0),
(950, NULL, 'Lawn 1', '58', 'P', 'Regular', 'FELICIANO BELTRAN', 0, '', 0),
(951, NULL, 'Lawn 1', '58', 'Q', 'Regular', 'ELENA YPON', 0, '', 0),
(952, NULL, 'Lawn 1', '58', 'R', 'Regular', 'ROSALIA STA JUANA', 0, '', 0),
(953, NULL, 'Lawn 1', '58', 'S', 'Regular', 'ZENAIDA BOLINA', 0, '', 0),
(954, NULL, 'Lawn 1', '58', 'T', 'Premium', 'LUDIVINA JUEGO', 0, '', 0),
(955, NULL, 'Lawn 1', '59', 'A', 'Premium', 'GINA BORBON from ELINORA MAGHANOY 1', 0, '', 0),
(956, NULL, 'Lawn 1', '59', 'B', 'Premium', 'EMERLYN SAWICA from Elionora Maghanoy', 0, '', 0),
(957, NULL, 'Lawn 1', '59', 'C', 'Premium', 'AUGUSTO SAN PEDRO', 0, '', 0),
(958, NULL, 'Lawn 1', '59', 'D', 'Premium', 'TERESITA SAN JOSE', 0, '', 0),
(959, NULL, 'Lawn 1', '59', 'E', 'Premium', 'TERESITA SAN JOSE', 0, '', 0),
(960, NULL, 'Lawn 1', '59', 'F', 'Premium', 'TOMAS OBIAL', 0, '', 0),
(961, NULL, 'Lawn 1', '59', 'G', 'Premium', 'TOMAS OBIAL', 0, '', 0),
(962, NULL, 'Lawn 1', '59', 'H', 'Premium', 'EMELINDA SADIASA from 51 A, 59 I', 0, '', 0),
(963, NULL, 'Lawn 1', '59', 'I', 'Premium', 'ZENAIDA BOLINA from 51 B, 59 J', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sell_bulletin`
--

CREATE TABLE `sell_bulletin` (
  `id` int(11) NOT NULL,
  `bulletin_date` datetime NOT NULL,
  `bulletin_user_id` int(11) NOT NULL,
  `bulletin_price` double NOT NULL,
  `bulletin_contact` int(11) NOT NULL,
  `bulletin_email` varchar(50) NOT NULL,
  `bulletin_note` varchar(200) NOT NULL,
  `bulletin_coo` varchar(100) NOT NULL,
  `bulletin_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell_bulletin`
--

INSERT INTO `sell_bulletin` (`id`, `bulletin_date`, `bulletin_user_id`, `bulletin_price`, `bulletin_contact`, `bulletin_email`, `bulletin_note`, `bulletin_coo`, `bulletin_status`) VALUES
(17, '2024-04-24 19:45:37', 23, 30000, 2147483647, 'art@gmail.com', 'asasasas', '661e80eb878f2_map_highligh.png', 1),
(18, '2024-04-24 20:23:55', 1, 25000, 2147483647, 'stephany@gmail.com', 'negotiable', '661e80eb878f2_map_highligh.png', 1),
(19, '2024-04-24 20:25:23', 2, 20000, 2147483647, 'michael@gmail.com', 'negotiable', '661e823425bfc_map_highligh.png', 1),
(20, '2024-04-24 20:40:51', 9, 43000, 2147483647, 'arnold@gmail.com', 'negotiable', '661e89431a0ff_map_highligh.png', 1),
(21, '2024-04-24 20:50:05', 14, 24000, 2147483647, 'ambo@gmail.com', 'Negotiable', '412747216_10230946337499190_4281031286631952966_n.jpg', 1),
(22, '2024-04-24 20:54:14', 5, 25000, 2147483647, 'cristina@gmail.com', 'negotiable', '434336536_695643889227080_6086058091800610116_n.jpg', 1),
(23, '2024-04-25 02:15:00', 11, 63000, 2147483647, 'virginia@gmail.com', 'negetioble', 'wall 2.jpeg', 1),
(24, '2024-04-25 14:58:40', 12, 68000, 2147483647, 'caprio@gmail.com', 'Negotiable', 'map_highligh.png', 1),
(25, '2024-04-25 18:15:49', 15, 80000, 2147483647, 'nenita@gmail.com', 'Negotiable please message me', '434336536_695643889227080_6086058091800610116_n.jpg', 0),
(26, '2024-04-25 18:18:23', 16, 73000, 2147483647, 'lani@gmail.com', 'negotiable', '434336536_695643889227080_6086058091800610116_n.jpg', 0),
(27, '2024-04-25 18:23:42', 17, 83000, 2147483647, 'manuel@gmail.com', 'Negotiable', 'map_highligh.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_transaction`
--

CREATE TABLE `service_transaction` (
  `id` int(11) NOT NULL,
  `service_date` datetime NOT NULL,
  `service_user_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `service_amount` double NOT NULL,
  `service_payment_id` int(1) NOT NULL,
  `service_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `service_date_added` datetime NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_description` varchar(100) NOT NULL,
  `service_type_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `id` int(11) NOT NULL,
  `sort_user_id` int(11) NOT NULL,
  `sort_min` double NOT NULL,
  `sort_max` double NOT NULL,
  `sort_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_property_id` int(11) NOT NULL,
  `user_date_added` datetime NOT NULL,
  `user_fname` varchar(50) DEFAULT NULL,
  `user_lname` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_contact` varchar(11) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_barangay` varchar(100) NOT NULL,
  `user_municipal` varchar(100) NOT NULL,
  `user_province` varchar(100) NOT NULL,
  `user_zipcode` int(11) NOT NULL,
  `user_profile` varchar(155) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_otp` int(4) NOT NULL,
  `user_otp_status` int(1) NOT NULL,
  `user_started` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_property_id`, `user_date_added`, `user_fname`, `user_lname`, `user_email`, `user_contact`, `user_address`, `user_barangay`, `user_municipal`, `user_province`, `user_zipcode`, `user_profile`, `user_name`, `user_password`, `user_type`, `user_status`, `user_otp`, `user_otp_status`, `user_started`) VALUES
(1, 0, '2024-04-03 17:38:47', 'Dave', 'Bergania', 'dave@gmail.com', '09120912098', '-', '', '', '', 0, 'dave_profile.jpg', 'dave', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 0, 0, 0, 1, 1),
(2, 1, '2024-04-03 17:42:24', 'Stephany', 'Gandula', 'steph@gmail.com', '09120912919', 'Karla Ville,', 'Prenza II', 'Marilao', 'Bulacan', 0, '662a2c61ceb3b_662a2c24e7217_stephany_profile.jpg', 'stephany', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 0, 1),
(100, 2, '2024-04-21 13:51:30', 'Michael', 'Astorga', 'floterina@gmail.com', '09120912091', 'Northville V', 'Barangay Northville V', 'Marilao', 'Bulacan', 3019, '66287f78c58ae_map_highligh.png', 'michael', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 3598, 1, 0),
(101, 23, '2024-04-24 05:49:25', 'Art', 'Concerman', 'art@gmail.com', '09128712871', 'Northville V', 'Northville V', 'Marilao', 'Bulacan', 3019, '66288217797b8_412747216_10230946337499190_4281031286631952966_n.jpg', 'art', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(102, 9, '2024-04-24 05:59:49', 'Dave', 'Bergania', 'dave@gmail.com', '09120912091', 'Block 9 lot 10', 'Prenza I', 'Marilao', 'Bulacan', 3019, '6628840fbf814_66275475dba7e_Sukuna-Background.jpg', 'arnold', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(104, 5, '2024-04-24 14:45:12', 'Maningas', 'David', 'cristina@gmail.com', '09120912091', 'Prenza', 'Prenza', 'Marilao', 'Bulacan', 3019, '66292985c21be_wall 2.jpeg', 'maningas123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(106, 14, '2024-04-24 14:46:19', 'Ambo', 'Dela Cruz', 'ambo@gmail.com', '09120912121', 'Makarayo St.', 'Prenza 2', 'Marilao', 'Bulacan', 3019, '6628ffb83e2bc_th.jpg', 'ambo123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(107, 11, '2024-04-24 16:10:49', 'Virgina', 'Virgin', NULL, '09120912091', 'sample', 'Prenza', 'Marilao', 'Bulacan', 3019, '66294b8d6342e_wall1.jpeg', 'virginia123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(108, 12, '2024-04-24 16:12:49', 'Anthony', 'Caprio', NULL, '09120912091', 'Home Town', 'Tibagan', 'Marilao', 'Bulacan', 3019, '6629fee6700be_Black Logo.png', 'caprio123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(109, 15, '2024-04-24 16:13:41', 'Ninita', 'Arcobrem', NULL, '09120912091', 'Navotas', 'Tibagan', 'Marilao', 'Bulacan', 3019, '662a2d0b028db_nenita.jpg', 'nenita123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 1),
(110, 16, '2024-04-24 16:20:44', 'Lani', 'Marquez', NULL, '09120912091', 'Nilooban', 'Prenza II', 'Marilao', 'Bulacan', 3019, '662a2dbabc624_lani.jpg', 'lani123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 1),
(111, 17, '2024-04-24 16:21:52', 'MManuel', 'Alonzo', NULL, '09120912091', 'Binahay', 'Libagan', 'San Jose Del Monte', 'Bulacan', 3019, '662a2e850e8b9_images.jpg', 'manuel123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 1),
(112, 0, '2024-04-24 17:09:50', 'Mike', 'Arnolds', 'floterina@gmail.com', '09120912091', 'Beverly Ville', 'Loma De Gato', 'Marilao', 'Bulacan', 3019, '6629222d947b5_wall1.jpeg', 'mike123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 2, 0, 7005, 1, 0),
(113, 67, '2024-04-25 12:28:57', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'marites123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(114, 68, '2024-04-25 12:29:16', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'dianna123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(115, 69, '2024-04-25 12:29:34', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'niezel123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(116, 70, '2024-04-25 12:29:59', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'aurea123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(117, 71, '2024-04-25 12:30:25', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'irene123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(119, 175, '2024-04-25 12:32:06', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'arlando123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0),
(120, 90, '2024-04-25 12:32:22', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, 'profile_dummy.jpg', 'vistoria123', '61ea0803f8853523b777d414ace3130cd4d3f92de2cd7ff8695c337d79c2eeee', 1, 0, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deceased_person`
--
ALTER TABLE `deceased_person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenance_user_id` (`maintenance_user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_bulletin`
--
ALTER TABLE `sell_bulletin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bulletin_user_id` (`bulletin_user_id`);

--
-- Indexes for table `service_transaction`
--
ALTER TABLE `service_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_user_id` (`service_user_id`),
  ADD KEY `service_type_id` (`service_type_id`),
  ADD KEY `service_payment_id` (`service_payment_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_property_id` (`user_property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deceased_person`
--
ALTER TABLE `deceased_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=589;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=964;

--
-- AUTO_INCREMENT for table `sell_bulletin`
--
ALTER TABLE `sell_bulletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service_transaction`
--
ALTER TABLE `service_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`maintenance_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `service_transaction`
--
ALTER TABLE `service_transaction`
  ADD CONSTRAINT `service_transaction_ibfk_1` FOREIGN KEY (`service_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `service_transaction_ibfk_2` FOREIGN KEY (`service_type_id`) REFERENCES `service_type` (`id`),
  ADD CONSTRAINT `service_transaction_ibfk_3` FOREIGN KEY (`service_payment_id`) REFERENCES `payment_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
