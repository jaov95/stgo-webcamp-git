-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 29, 2020 at 07:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) UNSIGNED NOT NULL,
  `tipo_categoria` varchar(50) NOT NULL,
  `icono_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `tipo_categoria`, `icono_categoria`) VALUES
(1, 'Seminario', 'fa-university'),
(2, 'Conferencia', 'fa-comment'),
(3, 'Taller', 'fa-code');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `id_evento` tinyint(10) UNSIGNED NOT NULL,
  `nombre_evento` varchar(100) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `clave_evento` varchar(15) NOT NULL,
  `id_categoria` tinyint(10) UNSIGNED NOT NULL,
  `id_invitado` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre_evento`, `fecha_evento`, `hora_evento`, `clave_evento`, `id_categoria`, `id_invitado`) VALUES
(1, 'Responsive Web Design', '2020-12-09', '10:00:00', 'taller_00', 3, 1),
(2, 'Responsive Web Design', '2020-12-10', '10:00:00', 'taller_01', 3, 1),
(3, 'Flexbox', '2020-12-09', '12:00:00', 'taller_02', 3, 2),
(4, 'HTML5 y CSS3', '2020-12-09', '14:00:00', 'taller_03', 3, 3),
(5, 'Drupal', '2020-12-09', '17:00:00', 'taller_04', 3, 4),
(6, 'Lapurd', '2020-12-09', '19:00:00', 'taller_05', 3, 5),
(7, 'AngularJS', '2020-12-10', '10:00:00', 'taller_06', 3, 1),
(8, 'PHP y MySQL', '2020-12-10', '12:00:00', 'taller_07', 3, 2),
(9, 'JavaScript Avanzado', '2020-12-10', '14:00:00', 'taller_08', 3, 3),
(10, 'SEO en Google', '2020-12-10', '17:00:00', 'taller_09', 3, 4),
(11, 'De Photoshop a HTML5 y CSS3', '2020-12-10', '19:00:00', 'taller_10', 3, 5),
(12, 'PHP Intermedio y Avanzado', '2020-12-10', '21:00:00', 'taller_11', 3, 6),
(13, 'Laravel', '2020-12-11', '10:00:00', 'taller_12', 3, 1),
(14, 'Crea tu propia API', '2020-12-11', '12:00:00', 'taller_13', 3, 2),
(15, 'JavaScript y jQuery', '2020-12-11', '14:00:00', 'taller_14', 3, 3),
(16, 'Creando Plantillas para WordPress', '2020-12-11', '17:00:00', 'taller_15', 3, 4),
(17, 'Tiendas Virtuales en Magento', '2020-12-11', '19:00:00', 'taller_16', 3, 5),
(18, 'Como ser freelancer', '2020-12-09', '10:00:00', 'conferencia_1', 2, 6),
(19, 'Tecnologías del Futuro', '2020-12-09', '17:00:00', 'conferencia_02', 2, 1),
(20, 'Seguridad en la Web', '2020-12-09', '19:00:00', 'conferencia_03', 2, 2),
(21, 'Como crear una tienda online que venda millones en pocos días', '2020-12-10', '10:00:00', 'conferencia_04', 2, 6),
(22, 'Los mejores lugares para encontrar trabajo', '2020-12-10', '17:00:00', 'conferencia_05', 2, 1),
(23, 'Pasos para crear un negocio rentable', '2020-12-10', '19:00:00', 'conferencia_06', 2, 2),
(24, 'Como hacer Marketing en línea', '2020-12-11', '10:00:00', 'conferencia_07', 2, 6),
(25, '¿Con que lenguaje debo empezar?', '2020-12-11', '17:00:00', 'conferencia_08', 2, 2),
(26, 'Frameworks y librerias Open Source', '2020-12-11', '19:00:00', 'conferencia_09', 2, 3),
(27, 'Diseño UI y UX', '2020-12-09', '10:00:00', 'seminario_01', 1, 6),
(28, 'Aprende a Programar en una mañana', '2020-12-09', '10:00:00', 'seminario_02', 1, 3),
(29, 'Diseño UI y UX para móviles', '2020-12-09', '10:00:00', 'seminario_03', 1, 5),
(30, 'Creando una App en Android en una mañana', '2020-12-11', '10:00:00', 'seminario_04', 1, 4),
(31, 'Creando una App en iOS en una tarde', '2020-12-11', '17:00:00', 'seminario_05', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invitado`
--

CREATE TABLE `invitado` (
  `id_invitado` int(6) UNSIGNED NOT NULL,
  `nombre_invitado` varchar(40) NOT NULL,
  `apellido_invitado` varchar(40) NOT NULL,
  `descripcion_invitado` text NOT NULL,
  `url_imagen_invitado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitado`
--

INSERT INTO `invitado` (`id_invitado`, `nombre_invitado`, `apellido_invitado`, `descripcion_invitado`, `url_imagen_invitado`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado4.jpg'),
(5, 'Harold', 'García', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado5.jpg'),
(6, 'Susan', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ex malesuada maximus gravida. Integer vitae porta risus, quis imperdiet eros. Sed interdum ex sit amet arcu imperdiet venenatis. Pellentesque posuere vulputate metus, sed pretium magna laoreet eget. Donec tempor augue sit amet ultricies gravida.', 'invitado6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_invitado` (`id_invitado`);

--
-- Indexes for table `invitado`
--
ALTER TABLE `invitado`
  ADD PRIMARY KEY (`id_invitado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `invitado`
--
ALTER TABLE `invitado`
  MODIFY `id_invitado` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`id_invitado`) REFERENCES `invitado` (`id_invitado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
