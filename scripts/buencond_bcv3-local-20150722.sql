-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2015 a las 18:05:29
-- Versión del servidor: 5.5.43
-- Versión de PHP: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `buencond_bcv3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE IF NOT EXISTS `activos` (
  `id_activos` bigint(20) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` double NOT NULL,
  `fecha_compra` date NOT NULL,
  `cuenta_contable` varchar(15) NOT NULL,
  `condicion` varchar(20) DEFAULT NULL COMMENT 'Activo\nDesincorporado',
  PRIMARY KEY (`id_activos`),
  UNIQUE KEY `activos_idx` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id_activos`, `codigo`, `descripcion`, `cantidad`, `costo`, `fecha_compra`, `cuenta_contable`, `condicion`) VALUES
(1, 'A01', 'Mesa Plastica Plegable', 1, 15000, '2014-01-02', '1.02.03.04.009', 'Activo'),
(2, 'A02', 'Bancos plasticos', 50, 200, '2014-02-04', '1.02.03.04.009', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `fechahora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `user`, `modelo`, `accion`, `fechahora`) VALUES
(1, 'admin', 'Proveedores', 'Index', '2015-07-21 22:26:26'),
(2, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:26:29'),
(3, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:31:03'),
(4, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:32:05'),
(5, 'admin', 'Proveedores', 'Index', '2015-07-21 22:32:05'),
(6, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:34:34'),
(7, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:35:23'),
(8, 'admin', 'Proveedores', 'Index', '2015-07-21 22:35:23'),
(9, 'admin', 'Proveedores', 'Actualizar', '2015-07-21 22:35:29'),
(10, 'admin', 'Proveedores', 'Actualizar', '2015-07-21 22:35:36'),
(11, 'admin', 'Proveedores', 'Index', '2015-07-21 22:35:36'),
(12, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:42:37'),
(13, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:43:29'),
(14, 'admin', 'Proveedores', 'Index', '2015-07-21 22:43:29'),
(15, 'admin', 'Proveedores', 'Crear', '2015-07-21 22:43:37'),
(16, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:03:31'),
(17, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:03:43'),
(18, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:04:29'),
(19, 'admin', 'Proveedores', 'Index', '2015-07-21 23:04:29'),
(20, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:05:58'),
(21, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:07:07'),
(22, 'admin', 'Proveedores', 'Index', '2015-07-21 23:07:07'),
(23, 'admin', 'Proveedores', 'Crear', '2015-07-21 23:07:12'),
(24, 'admin', 'Proveedores', 'Index', '2015-07-22 09:31:39'),
(25, 'admin', 'Proveedores', 'Crear', '2015-07-22 09:31:52'),
(26, 'admin', 'Proveedores', 'Crear', '2015-07-22 09:33:10'),
(27, 'admin', 'Proveedores', 'Crear', '2015-07-22 09:34:44'),
(28, 'admin', 'Proveedores', 'Crear', '2015-07-22 09:49:59'),
(29, 'admin', 'Proveedores', 'Crear', '2015-07-22 09:51:30'),
(30, 'admin', 'Proveedores', 'Index', '2015-07-22 09:51:30'),
(31, 'admin', 'Propiedad', 'Index', '2015-07-22 09:51:50'),
(32, 'admin', 'Propiedad', 'Index', '2015-07-22 09:52:05'),
(33, 'admin', 'Propiedad', 'Index', '2015-07-22 09:52:12'),
(34, 'admin', 'Propiedad', 'Index', '2015-07-22 09:54:12'),
(35, 'conf', 'User', 'Index', '2015-07-22 09:58:32'),
(36, 'conf', 'User', 'Crear', '2015-07-22 09:58:39'),
(37, 'conf', 'User', 'Crear', '2015-07-22 09:59:07'),
(38, 'conf', 'User', 'Index', '2015-07-22 09:59:08'),
(39, 'conf', 'User', 'Crear', '2015-07-22 09:59:12'),
(40, 'conf', 'User', 'Crear', '2015-07-22 09:59:30'),
(41, 'conf', 'User', 'Index', '2015-07-22 09:59:30'),
(42, 'p1', 'Avisos', 'Index', '2015-07-22 10:00:39'),
(43, 'p1', 'ReciboCobro', 'Index', '2015-07-22 10:00:48'),
(44, 'admin', 'Proveedores', 'Index', '2015-07-22 12:18:05'),
(45, 'admin', 'Instalaciones', 'Index', '2015-07-22 12:18:13'),
(46, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:30:08'),
(47, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:30:31'),
(48, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:40:36'),
(49, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:42:22'),
(50, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:42:22'),
(51, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:42:22'),
(52, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:43:07'),
(53, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:43:28'),
(54, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:44:33'),
(55, 'admin', 'Instalaciones', 'Index', '2015-07-22 12:44:34'),
(56, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:44:37'),
(57, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:45:06'),
(58, 'admin', 'Instalaciones', 'Index', '2015-07-22 12:45:07'),
(59, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:45:46'),
(60, 'admin', 'Instalaciones', 'Crear', '2015-07-22 12:46:17'),
(61, 'admin', 'Instalaciones', 'Index', '2015-07-22 12:46:18'),
(62, 'admin', 'Instalaciones', 'Actualizar', '2015-07-22 12:46:24'),
(63, 'admin', 'Instalaciones', 'Actualizar', '2015-07-22 12:46:29'),
(64, 'admin', 'Instalaciones', 'Index', '2015-07-22 12:46:29'),
(65, 'admin', 'Activos', 'Index', '2015-07-22 12:49:25'),
(66, 'admin', 'Activos', 'Crear', '2015-07-22 12:49:34'),
(67, 'admin', 'Activos', 'Crear', '2015-07-22 12:52:46'),
(68, 'admin', 'Activos', 'Crear', '2015-07-22 12:54:27'),
(69, 'admin', 'Activos', 'Index', '2015-07-22 12:54:27'),
(70, 'admin', 'Activos', 'Crear', '2015-07-22 12:54:30'),
(71, 'admin', 'Activos', 'Crear', '2015-07-22 12:57:44'),
(72, 'admin', 'Activos', 'Index', '2015-07-22 12:57:44'),
(73, 'admin', 'Activos', 'Index', '2015-07-22 12:58:17'),
(74, 'admin', 'Diario', 'Index', '2015-07-22 12:59:36'),
(75, 'admin', 'Banco', 'Index', '2015-07-22 13:00:52'),
(76, 'admin', 'Banco', 'Crear', '2015-07-22 13:00:55'),
(77, 'admin', 'Banco', 'Crear', '2015-07-22 13:05:02'),
(78, 'admin', 'Banco', 'Crear', '2015-07-22 13:05:54'),
(79, 'admin', 'Banco', 'Crear', '2015-07-22 13:06:15'),
(80, 'admin', 'Banco', 'Crear', '2015-07-22 13:06:37'),
(81, 'admin', 'Banco', 'Crear', '2015-07-22 13:07:07'),
(82, 'admin', 'Banco', 'Index', '2015-07-22 13:07:07'),
(83, 'admin', 'ReciboCobro', 'Cxc', '2015-07-22 13:09:41'),
(84, 'admin', 'Periodo', 'Index', '2015-07-22 13:10:02'),
(85, 'admin', 'Periodo', 'Index', '2015-07-22 15:47:20'),
(86, 'admin', 'Periodo', 'Crear', '2015-07-22 15:59:47'),
(87, 'admin', 'Periodo', 'Crear', '2015-07-22 15:59:55'),
(88, 'admin', 'Periodo', 'Crear', '2015-07-22 16:00:25'),
(89, 'admin', 'Periodo', 'Index', '2015-07-22 16:00:29'),
(90, 'admin', 'Periodo', 'Crear', '2015-07-22 16:00:40'),
(91, 'admin', 'Periodo', 'Crear', '2015-07-22 16:01:01'),
(92, 'admin', 'Periodo', 'Index', '2015-07-22 16:01:02'),
(93, 'admin', 'Periodo', 'Crear', '2015-07-22 16:02:50'),
(94, 'admin', 'Periodo', 'Crear', '2015-07-22 16:03:34'),
(95, 'admin', 'Periodo', 'Index', '2015-07-22 16:03:35'),
(96, 'admin', 'Periodo', 'Crear', '2015-07-22 16:04:14'),
(97, 'admin', 'Periodo', 'Crear', '2015-07-22 16:04:44'),
(98, 'admin', 'Periodo', 'Index', '2015-07-22 16:04:44'),
(99, 'admin', 'Periodo', 'Crear', '2015-07-22 16:04:50'),
(100, 'admin', 'Periodo', 'Crear', '2015-07-22 16:04:57'),
(101, 'admin', 'Periodo', 'Index', '2015-07-22 16:04:57'),
(102, 'admin', 'Periodo', 'Crear', '2015-07-22 16:05:00'),
(103, 'admin', 'Periodo', 'Crear', '2015-07-22 16:05:07'),
(104, 'admin', 'Periodo', 'Index', '2015-07-22 16:05:07'),
(105, 'admin', 'Periodo', 'Crear', '2015-07-22 16:05:11'),
(106, 'admin', 'Periodo', 'Crear', '2015-07-22 16:05:18'),
(107, 'admin', 'Periodo', 'Index', '2015-07-22 16:05:19'),
(108, 'admin', 'Periodo', 'Crear', '2015-07-22 16:08:32'),
(109, 'admin', 'Periodo', 'Crear', '2015-07-22 16:08:38'),
(110, 'admin', 'Periodo', 'Index', '2015-07-22 16:08:39'),
(111, 'admin', 'Periodo', 'Crear', '2015-07-22 16:08:42'),
(112, 'admin', 'Periodo', 'Crear', '2015-07-22 16:08:49'),
(113, 'admin', 'Periodo', 'Index', '2015-07-22 16:08:49'),
(114, 'admin', 'Periodo', 'Crear', '2015-07-22 16:08:55'),
(115, 'admin', 'Periodo', 'Crear', '2015-07-22 16:09:02'),
(116, 'admin', 'Periodo', 'Index', '2015-07-22 16:09:03'),
(117, 'admin', 'Periodo', 'Crear', '2015-07-22 16:09:08'),
(118, 'admin', 'Periodo', 'Crear', '2015-07-22 16:09:15'),
(119, 'admin', 'Periodo', 'Index', '2015-07-22 16:09:15'),
(120, 'admin', 'Periodo', 'Crear', '2015-07-22 16:09:18'),
(121, 'admin', 'Periodo', 'Crear', '2015-07-22 16:09:25'),
(122, 'admin', 'Periodo', 'Index', '2015-07-22 16:09:25'),
(123, 'admin', 'Facturas', 'Index', '2015-07-22 16:34:20'),
(124, 'admin', 'Facturas', 'Crear', '2015-07-22 16:34:24'),
(125, 'admin', 'Facturas', 'Crear', '2015-07-22 16:38:15'),
(126, 'admin', 'Facturas', 'Index', '2015-07-22 16:38:16'),
(127, 'admin', 'Facturas', 'Crear', '2015-07-22 16:38:20'),
(128, 'admin', 'Facturas', 'Crear', '2015-07-22 16:39:00'),
(129, 'admin', 'Facturas', 'Index', '2015-07-22 16:39:00'),
(130, 'admin', 'ReciboCobro', 'Cxc', '2015-07-22 16:39:22'),
(131, 'admin', 'Facturas', 'Index', '2015-07-22 16:41:11'),
(132, 'admin', 'Facturas', 'Crear', '2015-07-22 16:41:14'),
(133, 'admin', 'Facturas', 'Crear', '2015-07-22 16:42:20'),
(134, 'admin', 'Facturas', 'Index', '2015-07-22 16:42:21'),
(135, 'admin', 'Proveedores', 'Index', '2015-07-22 16:42:29'),
(136, 'admin', 'Proveedores', 'Crear', '2015-07-22 16:42:37'),
(137, 'admin', 'Proveedores', 'Crear', '2015-07-22 16:43:28'),
(138, 'admin', 'Proveedores', 'Index', '2015-07-22 16:43:28'),
(139, 'admin', 'Facturas', 'Index', '2015-07-22 16:43:42'),
(140, 'admin', 'Facturas', 'Crear', '2015-07-22 16:44:12'),
(141, 'admin', 'Facturas', 'Crear', '2015-07-22 16:44:46'),
(142, 'admin', 'Facturas', 'Index', '2015-07-22 16:44:46'),
(143, 'admin', 'Facturas', 'Crear', '2015-07-22 16:45:01'),
(144, 'admin', 'Proveedores', 'Index', '2015-07-22 16:45:17'),
(145, 'admin', 'Proveedores', 'Crear', '2015-07-22 16:45:26'),
(146, 'admin', 'Proveedores', 'Crear', '2015-07-22 16:46:42'),
(147, 'admin', 'Proveedores', 'Index', '2015-07-22 16:46:43'),
(148, 'admin', 'Facturas', 'Index', '2015-07-22 16:46:51'),
(149, 'admin', 'Facturas', 'Index', '2015-07-22 16:46:51'),
(150, 'admin', 'Facturas', 'Crear', '2015-07-22 16:47:05'),
(151, 'admin', 'Facturas', 'Crear', '2015-07-22 16:47:39'),
(152, 'admin', 'Facturas', 'Index', '2015-07-22 16:47:39'),
(153, 'admin', 'ReciboCobro', 'Index', '2015-07-22 17:09:53'),
(154, 'admin', 'ReciboCobro', 'Cxc', '2015-07-22 17:10:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id_avisos` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date DEFAULT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Activo\nVencido',
  PRIMARY KEY (`id_avisos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE IF NOT EXISTS `banco` (
  `id_banco` bigint(20) NOT NULL AUTO_INCREMENT,
  `banco` varchar(50) NOT NULL,
  `cuenta_banco` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `saldo` double NOT NULL,
  `cuenta_contable` varchar(15) NOT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Activa\nCerrada',
  PRIMARY KEY (`id_banco`),
  UNIQUE KEY `banco_idx` (`cuenta_banco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id_banco`, `banco`, `cuenta_banco`, `nombre`, `fecha_apertura`, `fecha_cierre`, `saldo`, `cuenta_contable`, `condicion`) VALUES
(1, 'Provincial', '12345678901234567890', 'CR Santa Fe', '2015-01-05', NULL, 10000, '1.01.01.02.001', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_movimiento`
--

CREATE TABLE IF NOT EXISTS `banco_movimiento` (
  `id_banco_movimiento` bigint(20) NOT NULL AUTO_INCREMENT,
  `cuenta_banco` varchar(20) NOT NULL,
  `referencia` varchar(10) NOT NULL,
  `periodo` varchar(15) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL COMMENT 'Deposito\nTrasferencia\nCheque',
  `persona` varchar(100) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `cargo` double DEFAULT NULL,
  `abono` double DEFAULT NULL,
  `conciliado` varchar(2) DEFAULT NULL COMMENT 'Si No',
  `condicion` varchar(20) DEFAULT NULL COMMENT 'Emitido Cobrado Anulado',
  PRIMARY KEY (`id_banco_movimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE IF NOT EXISTS `catalogo` (
  `id_catalogo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cuenta_contable` varchar(15) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `nivel` int(11) NOT NULL,
  `condicion` varchar(10) NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id_catalogo`),
  UNIQUE KEY `catalogo_idx` (`cuenta_contable`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id_catalogo`, `cuenta_contable`, `descripcion`, `nivel`, `condicion`) VALUES
(1, '1.00.00.00.000', 'ACTIVO', 1, 'Activo'),
(2, '1.01.00.00.000', 'ACTIVO CIRCULANTE', 2, 'Activo'),
(3, '1.01.01.00.000', 'Activo disponible', 3, 'Activo'),
(4, '1.01.01.01.000', 'Caja', 4, 'Activo'),
(5, '1.01.01.02.000', 'Banco', 4, 'Activo'),
(6, '1.01.02.00.000', 'Activo exigible', 3, 'Activo'),
(7, '1.01.02.01.000', 'Cuentas por Cobrar Propiedad', 4, 'Activo'),
(8, '1.01.02.01.001', 'Cuentas por Cobrar Propiedad No.01', 5, 'Activo'),
(9, '1.01.02.01.002', 'Cuentas por Cobrar Propiedad No.02', 5, 'Activo'),
(10, '1.01.02.01.003', 'Cuentas por Cobrar Propiedad No.03', 5, 'Activo'),
(11, '1.01.02.01.004', 'Cuentas por Cobrar Propiedad No.04', 5, 'Activo'),
(12, '1.01.02.01.005', 'Cuentas por Cobrar Propiedad No.05', 5, 'Activo'),
(13, '1.01.02.01.006', 'Cuentas por Cobrar Propiedad No.06', 5, 'Activo'),
(14, '1.01.02.01.007', 'Cuentas por Cobrar Propiedad No.07', 5, 'Activo'),
(15, '1.01.02.01.008', 'Cuentas por Cobrar Propiedad No.08', 5, 'Activo'),
(16, '1.01.02.01.009', 'Cuentas por Cobrar Propiedad No.09', 5, 'Activo'),
(17, '1.01.02.01.010', 'Cuentas por Cobrar Propiedad No.10', 5, 'Activo'),
(18, '1.01.02.01.011', 'Cuentas por Cobrar Propiedad No.11', 5, 'Activo'),
(19, '1.01.02.01.012', 'Cuentas por Cobrar Propiedad No.12', 5, 'Activo'),
(20, '1.01.02.01.013', 'Cuentas por Cobrar Propiedad No.13', 5, 'Activo'),
(21, '1.01.02.01.014', 'Cuentas por Cobrar Propiedad No.14', 5, 'Activo'),
(22, '1.01.02.01.015', 'Cuentas por Cobrar Propiedad No.15', 5, 'Activo'),
(23, '1.01.02.01.016', 'Cuentas por Cobrar Propiedad No.16', 5, 'Activo'),
(24, '1.01.02.01.017', 'Cuentas por Cobrar Propiedad No.17', 5, 'Activo'),
(25, '1.01.02.01.018', 'Cuentas por Cobrar Propiedad No.18', 5, 'Activo'),
(26, '1.01.02.01.019', 'Cuentas por Cobrar Propiedad No.19', 5, 'Activo'),
(27, '1.01.02.01.020', 'Cuentas por Cobrar Propiedad No.20', 5, 'Activo'),
(28, '1.01.02.01.021', 'Cuentas por Cobrar Propiedad No.21', 5, 'Activo'),
(29, '1.01.02.01.022', 'Cuentas por Cobrar Propiedad No.22', 5, 'Activo'),
(30, '1.01.02.01.023', 'Cuentas por Cobrar Propiedad No.23', 5, 'Activo'),
(31, '1.01.02.01.024', 'Cuentas por Cobrar Propiedad No.24', 5, 'Activo'),
(32, '1.01.02.01.025', 'Cuentas por Cobrar Propiedad No.25', 5, 'Activo'),
(33, '1.01.02.01.026', 'Cuentas por Cobrar Propiedad No.26', 5, 'Activo'),
(34, '1.01.02.01.027', 'Cuentas por Cobrar Propiedad No.27', 5, 'Activo'),
(35, '1.01.02.01.028', 'Cuentas por Cobrar Propiedad No.28', 5, 'Activo'),
(36, '1.01.02.01.029', 'Cuentas por Cobrar Propiedad No.29', 5, 'Activo'),
(37, '1.01.02.01.030', 'Cuentas por Cobrar Propiedad No.30', 5, 'Activo'),
(38, '1.01.02.01.031', 'Cuentas por Cobrar Propiedad No.31', 5, 'Activo'),
(39, '1.01.02.01.032', 'Cuentas por Cobrar Propiedad No.32', 5, 'Activo'),
(40, '1.01.02.01.033', 'Cuentas por Cobrar Propiedad No.33', 5, 'Activo'),
(41, '1.01.02.01.034', 'Cuentas por Cobrar Propiedad No.34', 5, 'Activo'),
(42, '1.01.02.01.035', 'Cuentas por Cobrar Propiedad No.35', 5, 'Activo'),
(43, '1.01.02.01.036', 'Cuentas por Cobrar Propiedad No.36', 5, 'Activo'),
(44, '1.01.02.01.037', 'Cuentas por Cobrar Propiedad No.37', 5, 'Activo'),
(45, '1.01.02.01.038', 'Cuentas por Cobrar Propiedad No.38', 5, 'Activo'),
(46, '1.01.02.01.039', 'Cuentas por Cobrar Propiedad No.39', 5, 'Activo'),
(47, '1.01.02.01.040', 'Cuentas por Cobrar Propiedad No.40', 5, 'Activo'),
(48, '1.01.02.01.041', 'Cuentas por Cobrar Propiedad No.41', 5, 'Activo'),
(49, '1.01.02.01.042', 'Cuentas por Cobrar Propiedad No.42', 5, 'Activo'),
(50, '1.01.02.01.043', 'Cuentas por Cobrar Propiedad No.43', 5, 'Activo'),
(51, '1.01.02.01.044', 'Cuentas por Cobrar Propiedad No.44', 5, 'Activo'),
(52, '1.01.02.01.045', 'Cuentas por Cobrar Propiedad No.45', 5, 'Activo'),
(53, '1.01.02.01.046', 'Cuentas por Cobrar Propiedad No.46', 5, 'Activo'),
(54, '1.01.02.01.047', 'Cuentas por Cobrar Propiedad No.47', 5, 'Activo'),
(55, '1.01.02.01.048', 'Cuentas por Cobrar Propiedad No.48', 5, 'Activo'),
(56, '1.01.02.01.049', 'Cuentas por Cobrar Propiedad No.49', 5, 'Activo'),
(57, '1.01.02.01.050', 'Cuentas por Cobrar Propiedad No.50', 5, 'Activo'),
(58, '1.01.02.01.051', 'Cuentas por Cobrar Propiedad No.51', 5, 'Activo'),
(59, '1.01.02.01.052', 'Cuentas por Cobrar Propiedad No.52', 5, 'Activo'),
(60, '1.01.02.01.053', 'Cuentas por Cobrar Propiedad No.53', 5, 'Activo'),
(61, '1.01.02.01.054', 'Cuentas por Cobrar Propiedad No.54', 5, 'Activo'),
(62, '1.01.02.01.055', 'Cuentas por Cobrar Propiedad No.55', 5, 'Activo'),
(63, '1.01.02.01.056', 'Cuentas por Cobrar Propiedad No.56', 5, 'Activo'),
(64, '1.01.02.01.057', 'Cuentas por Cobrar Propiedad No.57', 5, 'Activo'),
(65, '1.01.02.01.058', 'Cuentas por Cobrar Propiedad No.58', 5, 'Activo'),
(66, '1.01.02.01.059', 'Cuentas por Cobrar Propiedad No.59', 5, 'Activo'),
(67, '1.01.02.01.060', 'Cuentas por Cobrar Propiedad No.60', 5, 'Activo'),
(68, '1.01.02.01.061', 'Cuentas por Cobrar Propiedad No.61', 5, 'Activo'),
(69, '1.01.02.01.062', 'Cuentas por Cobrar Propiedad No.62', 5, 'Activo'),
(70, '1.01.02.01.063', 'Cuentas por Cobrar Propiedad No.63', 5, 'Activo'),
(71, '1.01.02.01.064', 'Cuentas por Cobrar Propiedad No.64', 5, 'Activo'),
(72, '1.01.02.01.065', 'Cuentas por Cobrar Propiedad No.65', 5, 'Activo'),
(73, '1.01.02.01.066', 'Cuentas por Cobrar Propiedad No.66', 5, 'Activo'),
(74, '1.01.02.01.067', 'Cuentas por Cobrar Propiedad No.67', 5, 'Activo'),
(75, '1.01.02.01.068', 'Cuentas por Cobrar Propiedad No.68', 5, 'Activo'),
(76, '1.01.02.01.069', 'Cuentas por Cobrar Propiedad No.69', 5, 'Activo'),
(77, '1.01.02.01.070', 'Cuentas por Cobrar Propiedad No.70', 5, 'Activo'),
(78, '1.01.02.01.071', 'Cuentas por Cobrar Propiedad No.71', 5, 'Activo'),
(79, '1.01.02.01.072', 'Cuentas por Cobrar Propiedad No.72', 5, 'Activo'),
(80, '1.01.02.01.073', 'Cuentas por Cobrar Propiedad No.73', 5, 'Activo'),
(81, '1.01.02.01.074', 'Cuentas por Cobrar Propiedad No.74', 5, 'Activo'),
(82, '1.01.02.01.075', 'Cuentas por Cobrar Propiedad No.75', 5, 'Activo'),
(83, '1.01.02.01.076', 'Cuentas por Cobrar Propiedad No.76', 5, 'Activo'),
(84, '1.01.02.01.077', 'Cuentas por Cobrar Propiedad No.77', 5, 'Activo'),
(85, '1.01.02.01.078', 'Cuentas por Cobrar Propiedad No.78', 5, 'Activo'),
(86, '1.01.02.01.079', 'Cuentas por Cobrar Propiedad No.79', 5, 'Activo'),
(87, '1.01.02.01.080', 'Cuentas por Cobrar Propiedad No.80', 5, 'Activo'),
(88, '1.01.02.01.081', 'Cuentas por Cobrar Propiedad No.81', 5, 'Activo'),
(89, '1.01.02.01.082', 'Cuentas por Cobrar Propiedad No.82', 5, 'Activo'),
(90, '1.01.02.01.083', 'Cuentas por Cobrar Propiedad No.83', 5, 'Activo'),
(91, '1.01.02.01.084', 'Cuentas por Cobrar Propiedad No.84', 5, 'Activo'),
(92, '1.01.02.01.085', 'Cuentas por Cobrar Propiedad No.85', 5, 'Activo'),
(93, '1.01.02.01.086', 'Cuentas por Cobrar Propiedad No.86', 5, 'Activo'),
(94, '1.01.02.01.087', 'Cuentas por Cobrar Propiedad No.87', 5, 'Activo'),
(95, '1.01.02.01.088', 'Cuentas por Cobrar Propiedad No.88', 5, 'Activo'),
(96, '1.01.02.01.089', 'Cuentas por Cobrar Propiedad No.89', 5, 'Activo'),
(97, '1.01.02.01.090', 'Cuentas por Cobrar Propiedad No.90', 5, 'Activo'),
(98, '1.01.02.01.091', 'Cuentas por Cobrar Propiedad No.91', 5, 'Activo'),
(99, '1.01.02.01.092', 'Cuentas por Cobrar Propiedad No.92', 5, 'Activo'),
(100, '1.01.02.01.093', 'Cuentas por Cobrar Propiedad No.93', 5, 'Activo'),
(101, '1.01.02.01.094', 'Cuentas por Cobrar Propiedad No.94', 5, 'Activo'),
(102, '1.01.02.01.095', 'Cuentas por Cobrar Propiedad No.95', 5, 'Activo'),
(103, '1.01.02.01.096', 'Cuentas por Cobrar Propiedad No.96', 5, 'Activo'),
(104, '1.01.02.01.097', 'Cuentas por Cobrar Propiedad No.97', 5, 'Activo'),
(105, '1.01.02.01.098', 'Cuentas por Cobrar Propiedad No.98', 5, 'Activo'),
(106, '1.01.02.01.099', 'Cuentas por Cobrar Propiedad No.99', 5, 'Activo'),
(107, '1.01.02.01.100', 'Cuentas por Cobrar Propiedad No.100', 5, 'Activo'),
(108, '1.01.02.06.000', 'Anticipos a Proveedores', 4, 'Activo'),
(109, '1.01.02.07.000', 'Anticipos a Contratistas', 4, 'Activo'),
(110, '1.02.00.00.000', 'ACTIVO NO CIRCULANTE', 2, 'Activo'),
(111, '1.02.03.00.000', 'Activo Fijo', 3, 'Activo'),
(112, '1.02.03.03.000', 'Instalaciones', 4, 'Activo'),
(113, '1.02.03.04.000', 'Maquinarias y equipos', 4, 'Activo'),
(114, '1.02.03.04.005', 'Equipos de comunicaciones y senalamiento', 5, 'Activo'),
(115, '1.02.03.04.009', 'Maquinas, muebles y demas equipos de oficina', 5, 'Activo'),
(116, '2.00.00.00.000', 'PASIVO', 1, 'Activo'),
(117, '2.01.00.00.000', 'PASIVO CIRCULANTE', 2, 'Activo'),
(118, '2.01.01.00.000', 'Cuentas a pagar', 3, 'Activo'),
(119, '2.01.01.01.000', 'Provedores', 4, 'Activo'),
(120, '2.01.01.01.001', 'Corpoelec', 5, 'Activo'),
(121, '2.01.01.01.002', 'Gas Comunal', 5, 'Activo'),
(122, '2.01.01.01.003', 'Hidrolara', 5, 'Activo'),
(123, '2.01.01.01.004', 'CANTV', 5, 'Activo'),
(124, '2.01.01.01.005', 'Digitron', 5, 'Activo'),
(125, '2.01.01.01.006', 'Aseo', 5, 'Activo'),
(126, '2.01.01.01.010', 'Vigilancia', 5, 'Activo'),
(127, '2.01.01.01.011', 'Administradora', 5, 'Activo'),
(128, '2.01.01.01.099', 'Otros proveedores por pagar', 5, 'Activo'),
(129, '2.01.01.02.000', 'Contratistas', 4, 'Activo'),
(130, '2.01.01.09.000', 'Impuestos indirectos a pagar', 4, 'Activo'),
(131, '2.01.01.99.000', 'Otras cuentas a pagar', 4, 'Activo'),
(132, '3.00.00.00.000', 'RECURSOS', 1, 'Activo'),
(133, '3.05.00.00.000', 'TRANSFERENCIAS', 2, 'Activo'),
(134, '3.05.01.00.000', 'Transfrencias para financiar gastos corrientes', 3, 'Activo'),
(135, '3.05.01.01.000', 'Transferencias Sector privado', 4, 'Activo'),
(136, '3.05.01.01.001', 'Unidad familiar propiedad No.01', 5, 'Activo'),
(137, '3.05.01.01.002', 'Unidad familiar propiedad No.02', 5, 'Activo'),
(138, '3.05.01.01.003', 'Unidad familiar propiedad No.03', 5, 'Activo'),
(139, '3.05.01.01.004', 'Unidad familiar propiedad No.04', 5, 'Activo'),
(140, '3.05.01.01.005', 'Unidad familiar propiedad No.05', 5, 'Activo'),
(141, '3.05.01.01.006', 'Unidad familiar propiedad No.06', 5, 'Activo'),
(142, '3.05.01.01.007', 'Unidad familiar propiedad No.07', 5, 'Activo'),
(143, '3.05.01.01.008', 'Unidad familiar propiedad No.08', 5, 'Activo'),
(144, '3.05.01.01.009', 'Unidad familiar propiedad No.09', 5, 'Activo'),
(145, '3.05.01.01.010', 'Unidad familiar propiedad No.10', 5, 'Activo'),
(146, '3.05.01.01.011', 'Unidad familiar propiedad No.11', 5, 'Activo'),
(147, '3.05.01.01.012', 'Unidad familiar propiedad No.12', 5, 'Activo'),
(148, '3.05.01.01.013', 'Unidad familiar propiedad No.13', 5, 'Activo'),
(149, '3.05.01.01.014', 'Unidad familiar propiedad No.14', 5, 'Activo'),
(150, '3.05.01.01.015', 'Unidad familiar propiedad No.15', 5, 'Activo'),
(151, '3.05.01.01.016', 'Unidad familiar propiedad No.16', 5, 'Activo'),
(152, '3.05.01.01.017', 'Unidad familiar propiedad No.17', 5, 'Activo'),
(153, '3.05.01.01.018', 'Unidad familiar propiedad No.18', 5, 'Activo'),
(154, '3.05.01.01.019', 'Unidad familiar propiedad No.19', 5, 'Activo'),
(155, '3.05.01.01.020', 'Unidad familiar propiedad No.20', 5, 'Activo'),
(156, '3.05.01.01.021', 'Unidad familiar propiedad No.21', 5, 'Activo'),
(157, '3.05.01.01.022', 'Unidad familiar propiedad No.22', 5, 'Activo'),
(158, '3.05.01.01.023', 'Unidad familiar propiedad No.23', 5, 'Activo'),
(159, '3.05.01.01.024', 'Unidad familiar propiedad No.24', 5, 'Activo'),
(160, '3.05.01.01.025', 'Unidad familiar propiedad No.25', 5, 'Activo'),
(161, '3.05.01.01.026', 'Unidad familiar propiedad No.26', 5, 'Activo'),
(162, '3.05.01.01.027', 'Unidad familiar propiedad No.27', 5, 'Activo'),
(163, '3.05.01.01.028', 'Unidad familiar propiedad No.28', 5, 'Activo'),
(164, '3.05.01.01.029', 'Unidad familiar propiedad No.29', 5, 'Activo'),
(165, '3.05.01.01.030', 'Unidad familiar propiedad No.30', 5, 'Activo'),
(166, '3.05.01.01.031', 'Unidad familiar propiedad No.31', 5, 'Activo'),
(167, '3.05.01.01.032', 'Unidad familiar propiedad No.32', 5, 'Activo'),
(168, '3.05.01.01.033', 'Unidad familiar propiedad No.33', 5, 'Activo'),
(169, '3.05.01.01.034', 'Unidad familiar propiedad No.34', 5, 'Activo'),
(170, '3.05.01.01.035', 'Unidad familiar propiedad No.35', 5, 'Activo'),
(171, '3.05.01.01.036', 'Unidad familiar propiedad No.36', 5, 'Activo'),
(172, '3.05.01.01.037', 'Unidad familiar propiedad No.37', 5, 'Activo'),
(173, '3.05.01.01.038', 'Unidad familiar propiedad No.38', 5, 'Activo'),
(174, '3.05.01.01.039', 'Unidad familiar propiedad No.39', 5, 'Activo'),
(175, '3.05.01.01.040', 'Unidad familiar propiedad No.40', 5, 'Activo'),
(176, '3.05.01.01.041', 'Unidad familiar propiedad No.41', 5, 'Activo'),
(177, '3.05.01.01.042', 'Unidad familiar propiedad No.42', 5, 'Activo'),
(178, '3.05.01.01.043', 'Unidad familiar propiedad No.43', 5, 'Activo'),
(179, '3.05.01.01.044', 'Unidad familiar propiedad No.44', 5, 'Activo'),
(180, '3.05.01.01.045', 'Unidad familiar propiedad No.45', 5, 'Activo'),
(181, '3.05.01.01.046', 'Unidad familiar propiedad No.46', 5, 'Activo'),
(182, '3.05.01.01.047', 'Unidad familiar propiedad No.47', 5, 'Activo'),
(183, '3.05.01.01.048', 'Unidad familiar propiedad No.48', 5, 'Activo'),
(184, '3.05.01.01.049', 'Unidad familiar propiedad No.49', 5, 'Activo'),
(185, '3.05.01.01.050', 'Unidad familiar propiedad No.50', 5, 'Activo'),
(186, '3.05.01.01.051', 'Unidad familiar propiedad No.51', 5, 'Activo'),
(187, '3.05.01.01.052', 'Unidad familiar propiedad No.52', 5, 'Activo'),
(188, '3.05.01.01.053', 'Unidad familiar propiedad No.53', 5, 'Activo'),
(189, '3.05.01.01.054', 'Unidad familiar propiedad No.54', 5, 'Activo'),
(190, '3.05.01.01.055', 'Unidad familiar propiedad No.55', 5, 'Activo'),
(191, '3.05.01.01.056', 'Unidad familiar propiedad No.56', 5, 'Activo'),
(192, '3.05.01.01.057', 'Unidad familiar propiedad No.57', 5, 'Activo'),
(193, '3.05.01.01.058', 'Unidad familiar propiedad No.58', 5, 'Activo'),
(194, '3.05.01.01.059', 'Unidad familiar propiedad No.59', 5, 'Activo'),
(195, '3.05.01.01.060', 'Unidad familiar propiedad No.60', 5, 'Activo'),
(196, '3.05.01.01.061', 'Unidad familiar propiedad No.61', 5, 'Activo'),
(197, '3.05.01.01.062', 'Unidad familiar propiedad No.62', 5, 'Activo'),
(198, '3.05.01.01.063', 'Unidad familiar propiedad No.63', 5, 'Activo'),
(199, '3.05.01.01.064', 'Unidad familiar propiedad No.64', 5, 'Activo'),
(200, '3.05.01.01.065', 'Unidad familiar propiedad No.65', 5, 'Activo'),
(201, '3.05.01.01.066', 'Unidad familiar propiedad No.66', 5, 'Activo'),
(202, '3.05.01.01.067', 'Unidad familiar propiedad No.67', 5, 'Activo'),
(203, '3.05.01.01.068', 'Unidad familiar propiedad No.68', 5, 'Activo'),
(204, '3.05.01.01.069', 'Unidad familiar propiedad No.69', 5, 'Activo'),
(205, '3.05.01.01.070', 'Unidad familiar propiedad No.70', 5, 'Activo'),
(206, '3.05.01.01.071', 'Unidad familiar propiedad No.71', 5, 'Activo'),
(207, '3.05.01.01.072', 'Unidad familiar propiedad No.72', 5, 'Activo'),
(208, '3.05.01.01.073', 'Unidad familiar propiedad No.73', 5, 'Activo'),
(209, '3.05.01.01.074', 'Unidad familiar propiedad No.74', 5, 'Activo'),
(210, '3.05.01.01.075', 'Unidad familiar propiedad No.75', 5, 'Activo'),
(211, '3.05.01.01.076', 'Unidad familiar propiedad No.76', 5, 'Activo'),
(212, '3.05.01.01.077', 'Unidad familiar propiedad No.77', 5, 'Activo'),
(213, '3.05.01.01.078', 'Unidad familiar propiedad No.78', 5, 'Activo'),
(214, '3.05.01.01.079', 'Unidad familiar propiedad No.79', 5, 'Activo'),
(215, '3.05.01.01.080', 'Unidad familiar propiedad No.80', 5, 'Activo'),
(216, '3.05.01.01.081', 'Unidad familiar propiedad No.81', 5, 'Activo'),
(217, '3.05.01.01.082', 'Unidad familiar propiedad No.82', 5, 'Activo'),
(218, '3.05.01.01.083', 'Unidad familiar propiedad No.83', 5, 'Activo'),
(219, '3.05.01.01.084', 'Unidad familiar propiedad No.84', 5, 'Activo'),
(220, '3.05.01.01.085', 'Unidad familiar propiedad No.85', 5, 'Activo'),
(221, '3.05.01.01.086', 'Unidad familiar propiedad No.86', 5, 'Activo'),
(222, '3.05.01.01.087', 'Unidad familiar propiedad No.87', 5, 'Activo'),
(223, '3.05.01.01.088', 'Unidad familiar propiedad No.88', 5, 'Activo'),
(224, '3.05.01.01.089', 'Unidad familiar propiedad No.89', 5, 'Activo'),
(225, '3.05.01.01.090', 'Unidad familiar propiedad No.90', 5, 'Activo'),
(226, '3.05.01.01.091', 'Unidad familiar propiedad No.91', 5, 'Activo'),
(227, '3.05.01.01.092', 'Unidad familiar propiedad No.92', 5, 'Activo'),
(228, '3.05.01.01.093', 'Unidad familiar propiedad No.93', 5, 'Activo'),
(229, '3.05.01.01.094', 'Unidad familiar propiedad No.94', 5, 'Activo'),
(230, '3.05.01.01.095', 'Unidad familiar propiedad No.95', 5, 'Activo'),
(231, '3.05.01.01.096', 'Unidad familiar propiedad No.96', 5, 'Activo'),
(232, '3.05.01.01.097', 'Unidad familiar propiedad No.97', 5, 'Activo'),
(233, '3.05.01.01.098', 'Unidad familiar propiedad No.98', 5, 'Activo'),
(234, '3.05.01.01.099', 'Unidad familiar propiedad No.99', 5, 'Activo'),
(235, '3.05.01.01.100', 'Unidad familiar propiedad No.100', 5, 'Activo'),
(236, '4.00.00.00.000', 'EGRESOS', 1, 'Activo'),
(237, '4.02.00.00.000', 'MATERIALES Y SUMINISTROS', 2, 'Activo'),
(238, '4.03.00.00.000', 'SERVICIOS NO PERSONALES', 2, 'Activo'),
(239, '4.03.03.00.000', 'Servicios Basicos', 3, 'Activo'),
(240, '4.03.03.01.000', 'Electricidad', 4, 'Activo'),
(241, '4.03.03.02.000', 'Gas', 4, 'Activo'),
(242, '4.03.03.03.000', 'Agua', 4, 'Activo'),
(243, '4.03.03.04.000', 'Telefonos', 4, 'Activo'),
(244, '4.03.03.05.000', 'Servicios de Comunicacion', 4, 'Activo'),
(245, '4.03.03.06.000', 'Servicio de Aseo urbano y domiciliario', 4, 'Activo'),
(246, '4.03.03.99.000', 'Otros servicios basicos', 4, 'Activo'),
(247, '4.03.08.00.000', 'Servicios profesionales y tecnicos', 4, 'Activo'),
(248, '4.03.08.01.000', 'Servicios juridicos', 4, 'Activo'),
(249, '4.03.08.02.000', 'Servicios de contabilidad y auditoria', 4, 'Activo'),
(250, '4.03.08.02.001', 'Administradora', 5, 'Activo'),
(251, '4.03.08.10.000', 'Servicios de vigilancia', 4, 'Activo'),
(252, '4.03.08.10.001', 'Vigilancia', 5, 'Activo'),
(253, '4.03.08.99.000', 'Otros servicios profesionales y tecnicos', 4, 'Activo'),
(254, '5.00.00.00.000', 'Resultados', 1, 'Activo'),
(255, '6.00.00.00.000', 'Capital', 1, 'Activo'),
(256, '7.00.00.00.000', 'Cuentas de Orden', 1, 'Activo'),
(257, '1.02.03.03.001', 'Caney', 5, 'Activo'),
(258, '1.02.03.03.002', 'Cancha Deportiva', 5, 'Activo'),
(259, '1.02.03.03.003', 'Parque Infantil', 5, 'Activo'),
(260, '1.01.01.02.001', 'Provincial 12345678901234567890', 5, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` bigint(20) NOT NULL AUTO_INCREMENT,
  `familia` varchar(50) DEFAULT NULL,
  `comentario` text NOT NULL,
  `aprobado` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `fecha_registro` date DEFAULT NULL,
  `fecha_aprobacion` date DEFAULT NULL,
  PRIMARY KEY (`id_comentarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` bigint(20) NOT NULL AUTO_INCREMENT,
  `aniomes` varchar(50) DEFAULT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Correcto\nReverso',
  PRIMARY KEY (`id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `diario`
--

INSERT INTO `diario` (`id_diario`, `aniomes`, `fecha`, `descripcion`, `condicion`) VALUES
(1, '2015Enero', '2015-07-22', 'Recibo de electricidad del mes de enero', 'Correcto'),
(2, '2015Enero', '2015-07-22', 'Recibo de pago de agua mes de enero', 'Correcto'),
(3, '2015Enero', '2015-07-22', 'Pago servicio de Vigilancia mes de enero', 'Correcto'),
(4, '2015Enero', '2015-07-22', 'Administracion del mes de enero', 'Correcto'),
(5, '2015Enero', '2015-07-22', 'Jardineria y Varios', 'Correcto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario_det`
--

CREATE TABLE IF NOT EXISTS `diario_det` (
  `id_diario_det` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_diario` bigint(20) NOT NULL,
  `cuenta` varchar(15) NOT NULL,
  `debe` double DEFAULT NULL,
  `haber` double DEFAULT NULL,
  PRIMARY KEY (`id_diario_det`),
  KEY `diario_diario_det_fk` (`id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `diario_det`
--

INSERT INTO `diario_det` (`id_diario_det`, `id_diario`, `cuenta`, `debe`, `haber`) VALUES
(1, 1, '4.03.03.01.000', 700, 0),
(2, 1, '2.01.01.01.001', 0, 700),
(3, 2, '4.03.03.03.000', 1000, 0),
(4, 2, '2.01.01.01.003', 0, 1000),
(5, 3, '4.03.08.10.000', 35000, 0),
(6, 3, '2.01.01.01.010', 0, 35000),
(7, 4, '4.03.08.02.000', 11500, 0),
(8, 4, '2.01.01.01.011', 0, 11500),
(9, 5, '4.03.08.99.000', 3500, 0),
(10, 5, '2.01.01.01.099', 0, 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id_facturas` bigint(20) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `control` varchar(10) NOT NULL,
  `periodo` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `monto` double NOT NULL,
  `abono` double NOT NULL DEFAULT '0',
  `condicion` varchar(20) DEFAULT NULL COMMENT 'Activa\nCancelada',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_facturas`),
  UNIQUE KEY `facturas_idx` (`numero`,`proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_facturas`, `numero`, `control`, `periodo`, `fecha`, `proveedor`, `concepto`, `monto`, `abono`, `condicion`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, '1', '1', '2015Enero', '2015-01-30', 'Corpoelec', 'Recibo de electricidad del mes de enero', 700, 0, 'Activa', '2015-07-22 16:38:16', NULL),
(2, '2', '2', '2015Enero', '2015-01-30', 'Hidrolara', 'Recibo de pago de agua mes de enero', 1000, 0, 'Activa', '2015-07-22 16:39:00', NULL),
(3, '3', '3', '2015Enero', '2015-01-30', 'Vigilancia', 'Pago servicio de Vigilancia mes de enero', 35000, 0, 'Activa', '2015-07-22 16:42:20', NULL),
(4, '4', '4', '2015Enero', '2015-01-30', 'Administradora', 'Administracion del mes de enero', 11500, 0, 'Activa', '2015-07-22 16:44:46', NULL),
(5, '-', '-', '2015Enero', '2015-01-30', 'Pedro Perez', 'Jardineria y Varios', 3500, 0, 'Activa', '2015-07-22 16:47:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE IF NOT EXISTS `familia` (
  `id_familia` bigint(20) NOT NULL AUTO_INCREMENT,
  `familia` varchar(100) NOT NULL,
  `propiedad` varchar(10) NOT NULL,
  `jefe_familia` varchar(100) NOT NULL,
  `telefono_hab` varchar(15) DEFAULT NULL,
  `tenencia_propiedad` varchar(100) NOT NULL,
  `tipo_ingreso` varchar(20) DEFAULT NULL COMMENT 'Diario\nSemanal\nQuincenal\nMensual\nPor Obra',
  `monto_ingreso` double DEFAULT NULL,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  PRIMARY KEY (`id_familia`),
  UNIQUE KEY `familia_idx` (`familia`,`propiedad`,`jefe_familia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia_integrantes`
--

CREATE TABLE IF NOT EXISTS `familia_integrantes` (
  `id_familia_integrantes` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_familia` bigint(20) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL COMMENT 'M\nF',
  `parentesco` varchar(20) DEFAULT NULL COMMENT 'Madre\nPadre\nHijo\nTio\nSobrino\nAbuelo\nNieto',
  `nivel_instruccion` varchar(20) DEFAULT NULL COMMENT 'Primaria\nSecundaria\nUniversitaria\nPostgrado',
  `profesion` varchar(100) NOT NULL,
  `trabaja` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `lugar_trabajo` varchar(100) DEFAULT NULL COMMENT 'Publico\nPrivado\nComercial\nCuenta Propia\nBueneria\nOtro',
  `ingreso_mensual` double NOT NULL,
  `telefono_cel` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL COMMENT 'Soltero\nCasado\nUnion Estable\nDivorciado\nViudo',
  `correo` varchar(50) DEFAULT 'NULL',
  `foto` varchar(100) DEFAULT 'NULL',
  PRIMARY KEY (`id_familia_integrantes`),
  KEY `familia_familia_integrantes_fk` (`id_familia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalaciones`
--

CREATE TABLE IF NOT EXISTS `instalaciones` (
  `id_instalaciones` bigint(20) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(5) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `detalles` text,
  `alquiler` double NOT NULL,
  `cuenta_contable` varchar(15) NOT NULL,
  `condicion` varchar(15) DEFAULT NULL COMMENT 'Disponible\nMantenimiento',
  PRIMARY KEY (`id_instalaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `instalaciones`
--

INSERT INTO `instalaciones` (`id_instalaciones`, `codigo`, `descripcion`, `capacidad`, `detalles`, `alquiler`, `cuenta_contable`, `condicion`) VALUES
(1, 'I01', 'Caney', 50, 'Caney para eventos', 10000, '1.02.03.03.001', 'Disponible'),
(2, 'I02', 'Cancha Deportiva', 50, 'Cancha depotiva', 5000, '1.02.03.03.002', 'Disponible'),
(3, 'I03', 'Parque Infantil', 10, 'Parque Infnatil de Juegos', 2000, '1.02.03.03.003', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE IF NOT EXISTS `organizacion` (
  `id_organizacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(100) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Activo\nInactivo',
  PRIMARY KEY (`id_organizacion`),
  UNIQUE KEY `organizacion_idx` (`razon_social`),
  UNIQUE KEY `organizacion_idx1` (`rif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`id_organizacion`, `razon_social`, `rif`, `estado`, `municipio`, `parroquia`, `sector`, `direccion`, `telefono`, `correo`, `logo`, `condicion`) VALUES
(1, 'Conjunto Residencial Santa Fe', 'J-12345678-9', 'Lara', 'Libertador', 'Libertador', 'Libertador', 'Av. Libertador', '(0251)123.45.67', 'santafe@corre.com', 'foto_home3.jpg', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` bigint(20) NOT NULL AUTO_INCREMENT,
  `anio` varchar(4) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `aniomes` varchar(15) DEFAULT NULL,
  `condicion` varchar(10) NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id_periodo`),
  UNIQUE KEY `periodo_idx` (`anio`,`mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `anio`, `mes`, `aniomes`, `condicion`) VALUES
(1, '2015', 'Enero', '2015Enero', 'Activo'),
(2, '2015', 'Febrero', '2015Febrero', 'Activo'),
(3, '2015', 'Marzo', '2015Marzo', 'Activo'),
(4, '2015', 'Abril', '2015Abril', 'Activo'),
(5, '2015', 'Mayo', '2015Mayo', 'Activo'),
(6, '2015', 'Junio', '2015Junio', 'Activo'),
(7, '2015', 'Julio', '2015Julio', 'Activo'),
(8, '2015', 'Agosto', '2015Agosto', 'Activo'),
(9, '2015', 'Septiembre', '2015Septiembre', 'Activo'),
(10, '2015', 'Octubre', '2015Octubre', 'Activo'),
(11, '2015', 'Noviembre', '2015Noviembre', 'Activo'),
(12, '2015', 'Diciembre', '2015Diciembre', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE IF NOT EXISTS `propiedad` (
  `id_propiedad` bigint(20) NOT NULL AUTO_INCREMENT,
  `propiedad` varchar(10) NOT NULL,
  `superficie` double NOT NULL DEFAULT '1',
  `alicuota` double NOT NULL DEFAULT '0',
  `cuenta_contable` varchar(15) NOT NULL,
  `cuenta_ingresos` varchar(15) NOT NULL,
  `cedula_responsable` varchar(15) NOT NULL,
  `nombre_responsable` varchar(100) NOT NULL,
  `telefono_responsable` varchar(15) DEFAULT NULL,
  `correo_responsable` varchar(100) DEFAULT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Ocupada\nLibre',
  PRIMARY KEY (`id_propiedad`),
  UNIQUE KEY `propiedad_idx` (`propiedad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`id_propiedad`, `propiedad`, `superficie`, `alicuota`, `cuenta_contable`, `cuenta_ingresos`, `cedula_responsable`, `nombre_responsable`, `telefono_responsable`, `correo_responsable`, `condicion`) VALUES
(1, 'No.01', 150, 1, '1.01.02.01.001', '3.05.01.01.001', 'V-01', 'Propietario 01', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(2, 'No.02', 150, 1, '1.01.02.01.002', '3.05.01.01.002', 'V-02', 'Propietario 02', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(3, 'No.03', 150, 1, '1.01.02.01.003', '3.05.01.01.003', 'V-03', 'Propietario 03', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(4, 'No.04', 150, 1, '1.01.02.01.004', '3.05.01.01.004', 'V-04', 'Propietario 04', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(5, 'No.05', 150, 1, '1.01.02.01.005', '3.05.01.01.005', 'V-05', 'Propietario 05', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(6, 'No.06', 150, 1, '1.01.02.01.006', '3.05.01.01.006', 'V-06', 'Propietario 06', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(7, 'No.07', 150, 1, '1.01.02.01.007', '3.05.01.01.007', 'V-07', 'Propietario 07', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(8, 'No.08', 150, 1, '1.01.02.01.008', '3.05.01.01.008', 'V-08', 'Propietario 08', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(9, 'No.09', 150, 1, '1.01.02.01.009', '3.05.01.01.009', 'V-09', 'Propietario 09', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(10, 'No.10', 150, 1, '1.01.02.01.010', '3.05.01.01.010', 'V-10', 'Propietario 10', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(11, 'No.11', 150, 1, '1.01.02.01.011', '3.05.01.01.011', 'V-11', 'Propietario 11', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(12, 'No.12', 150, 1, '1.01.02.01.012', '3.05.01.01.012', 'V-12', 'Propietario 12', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(13, 'No.13', 150, 1, '1.01.02.01.013', '3.05.01.01.013', 'V-13', 'Propietario 13', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(14, 'No.14', 150, 1, '1.01.02.01.014', '3.05.01.01.014', 'V-14', 'Propietario 14', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(15, 'No.15', 150, 1, '1.01.02.01.015', '3.05.01.01.015', 'V-15', 'Propietario 15', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(16, 'No.16', 150, 1, '1.01.02.01.016', '3.05.01.01.016', 'V-16', 'Propietario 16', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(17, 'No.17', 150, 1, '1.01.02.01.017', '3.05.01.01.017', 'V-17', 'Propietario 17', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(18, 'No.18', 150, 1, '1.01.02.01.018', '3.05.01.01.018', 'V-18', 'Propietario 18', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(19, 'No.19', 150, 1, '1.01.02.01.019', '3.05.01.01.019', 'V-19', 'Propietario 19', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(20, 'No.20', 150, 1, '1.01.02.01.020', '3.05.01.01.020', 'V-20', 'Propietario 20', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(21, 'No.21', 150, 1, '1.01.02.01.021', '3.05.01.01.021', 'V-21', 'Propietario 21', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(22, 'No.22', 150, 1, '1.01.02.01.022', '3.05.01.01.022', 'V-22', 'Propietario 22', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(23, 'No.23', 150, 1, '1.01.02.01.023', '3.05.01.01.023', 'V-23', 'Propietario 23', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(24, 'No.24', 150, 1, '1.01.02.01.024', '3.05.01.01.024', 'V-24', 'Propietario 24', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(25, 'No.25', 150, 1, '1.01.02.01.025', '3.05.01.01.025', 'V-25', 'Propietario 25', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(26, 'No.26', 150, 1, '1.01.02.01.026', '3.05.01.01.026', 'V-26', 'Propietario 26', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(27, 'No.27', 150, 1, '1.01.02.01.027', '3.05.01.01.027', 'V-27', 'Propietario 27', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(28, 'No.28', 150, 1, '1.01.02.01.028', '3.05.01.01.028', 'V-28', 'Propietario 28', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(29, 'No.29', 150, 1, '1.01.02.01.029', '3.05.01.01.029', 'V-29', 'Propietario 29', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(30, 'No.30', 150, 1, '1.01.02.01.030', '3.05.01.01.030', 'V-30', 'Propietario 30', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(31, 'No.31', 150, 1, '1.01.02.01.031', '3.05.01.01.031', 'V-31', 'Propietario 31', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(32, 'No.32', 150, 1, '1.01.02.01.032', '3.05.01.01.032', 'V-32', 'Propietario 32', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(33, 'No.33', 150, 1, '1.01.02.01.033', '3.05.01.01.033', 'V-33', 'Propietario 33', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(34, 'No.34', 150, 1, '1.01.02.01.034', '3.05.01.01.034', 'V-34', 'Propietario 34', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(35, 'No.35', 150, 1, '1.01.02.01.035', '3.05.01.01.035', 'V-35', 'Propietario 35', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(36, 'No.36', 150, 1, '1.01.02.01.036', '3.05.01.01.036', 'V-36', 'Propietario 36', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(37, 'No.37', 150, 1, '1.01.02.01.037', '3.05.01.01.037', 'V-37', 'Propietario 37', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(38, 'No.38', 150, 1, '1.01.02.01.038', '3.05.01.01.038', 'V-38', 'Propietario 38', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(39, 'No.39', 150, 1, '1.01.02.01.039', '3.05.01.01.039', 'V-39', 'Propietario 39', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(40, 'No.40', 150, 1, '1.01.02.01.040', '3.05.01.01.030', 'V-40', 'Propietario 40', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(41, 'No.41', 150, 1, '1.01.02.01.041', '3.05.01.01.041', 'V-41', 'Propietario 41', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(42, 'No.42', 150, 1, '1.01.02.01.042', '3.05.01.01.042', 'V-42', 'Propietario 42', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(43, 'No.43', 150, 1, '1.01.02.01.043', '3.05.01.01.043', 'V-43', 'Propietario 43', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(44, 'No.44', 150, 1, '1.01.02.01.044', '3.05.01.01.044', 'V-44', 'Propietario 44', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(45, 'No.45', 150, 1, '1.01.02.01.045', '3.05.01.01.045', 'V-45', 'Propietario 45', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(46, 'No.46', 150, 1, '1.01.02.01.046', '3.05.01.01.046', 'V-46', 'Propietario 46', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(47, 'No.47', 150, 1, '1.01.02.01.047', '3.05.01.01.047', 'V-47', 'Propietario 47', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(48, 'No.48', 150, 1, '1.01.02.01.048', '3.05.01.01.048', 'V-48', 'Propietario 48', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(49, 'No.49', 150, 1, '1.01.02.01.049', '3.05.01.01.049', 'V-49', 'Propietario 49', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(50, 'No.50', 150, 1, '1.01.02.01.050', '3.05.01.01.050', 'V-50', 'Propietario 50', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(51, 'No.51', 150, 1, '1.01.02.01.051', '3.05.01.01.051', 'V-51', 'Propietario 51', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(52, 'No.52', 150, 1, '1.01.02.01.052', '3.05.01.01.052', 'V-52', 'Propietario 52', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(53, 'No.53', 150, 1, '1.01.02.01.053', '3.05.01.01.053', 'V-53', 'Propietario 53', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(54, 'No.54', 150, 1, '1.01.02.01.054', '3.05.01.01.054', 'V-54', 'Propietario 54', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(55, 'No.55', 150, 1, '1.01.02.01.055', '3.05.01.01.055', 'V-55', 'Propietario 55', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(56, 'No.56', 150, 1, '1.01.02.01.056', '3.05.01.01.056', 'V-56', 'Propietario 56', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(57, 'No.57', 150, 1, '1.01.02.01.057', '3.05.01.01.057', 'V-57', 'Propietario 57', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(58, 'No.58', 150, 1, '1.01.02.01.058', '3.05.01.01.058', 'V-58', 'Propietario 58', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(59, 'No.59', 150, 1, '1.01.02.01.059', '3.05.01.01.059', 'V-59', 'Propietario 59', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(60, 'No.60', 150, 1, '1.01.02.01.060', '3.05.01.01.060', 'V-60', 'Propietario 60', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(61, 'No.61', 150, 1, '1.01.02.01.061', '3.05.01.01.061', 'V-61', 'Propietario 61', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(62, 'No.62', 150, 1, '1.01.02.01.062', '3.05.01.01.062', 'V-62', 'Propietario 62', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(63, 'No.63', 150, 1, '1.01.02.01.063', '3.05.01.01.063', 'V-63', 'Propietario 63', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(64, 'No.64', 150, 1, '1.01.02.01.064', '3.05.01.01.064', 'V-64', 'Propietario 64', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(65, 'No.65', 150, 1, '1.01.02.01.065', '3.05.01.01.065', 'V-65', 'Propietario 65', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(66, 'No.66', 150, 1, '1.01.02.01.066', '3.05.01.01.066', 'V-66', 'Propietario 66', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(67, 'No.67', 150, 1, '1.01.02.01.067', '3.05.01.01.067', 'V-67', 'Propietario 67', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(68, 'No.68', 150, 1, '1.01.02.01.068', '3.05.01.01.068', 'V-68', 'Propietario 68', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(69, 'No.69', 150, 1, '1.01.02.01.069', '3.05.01.01.069', 'V-69', 'Propietario 69', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(70, 'No.70', 150, 1, '1.01.02.01.070', '3.05.01.01.070', 'V-70', 'Propietario 70', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(71, 'No.71', 150, 1, '1.01.02.01.071', '3.05.01.01.071', 'V-71', 'Propietario 71', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(72, 'No.72', 150, 1, '1.01.02.01.072', '3.05.01.01.072', 'V-72', 'Propietario 72', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(73, 'No.73', 150, 1, '1.01.02.01.073', '3.05.01.01.073', 'V-73', 'Propietario 73', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(74, 'No.74', 150, 1, '1.01.02.01.074', '3.05.01.01.074', 'V-74', 'Propietario 74', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(75, 'No.75', 150, 1, '1.01.02.01.075', '3.05.01.01.075', 'V-75', 'Propietario 75', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(76, 'No.76', 150, 1, '1.01.02.01.076', '3.05.01.01.076', 'V-76', 'Propietario 76', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(77, 'No.77', 150, 1, '1.01.02.01.077', '3.05.01.01.077', 'V-77', 'Propietario 77', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(78, 'No.78', 150, 1, '1.01.02.01.078', '3.05.01.01.078', 'V-78', 'Propietario 78', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(79, 'No.79', 150, 1, '1.01.02.01.079', '3.05.01.01.079', 'V-79', 'Propietario 79', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(80, 'No.80', 150, 1, '1.01.02.01.080', '3.05.01.01.080', 'V-80', 'Propietario 80', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(81, 'No.81', 150, 1, '1.01.02.01.081', '3.05.01.01.081', 'V-81', 'Propietario 81', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(82, 'No.82', 150, 1, '1.01.02.01.082', '3.05.01.01.082', 'V-82', 'Propietario 82', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(83, 'No.83', 150, 1, '1.01.02.01.083', '3.05.01.01.083', 'V-83', 'Propietario 83', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(84, 'No.84', 150, 1, '1.01.02.01.084', '3.05.01.01.084', 'V-84', 'Propietario 84', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(85, 'No.85', 150, 1, '1.01.02.01.085', '3.05.01.01.085', 'V-85', 'Propietario 85', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(86, 'No.86', 150, 1, '1.01.02.01.086', '3.05.01.01.086', 'V-86', 'Propietario 86', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(87, 'No.87', 150, 1, '1.01.02.01.087', '3.05.01.01.087', 'V-87', 'Propietario 87', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(88, 'No.88', 150, 1, '1.01.02.01.088', '3.05.01.01.088', 'V-88', 'Propietario 88', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(89, 'No.89', 150, 1, '1.01.02.01.089', '3.05.01.01.089', 'V-89', 'Propietario 89', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(90, 'No.90', 150, 1, '1.01.02.01.090', '3.05.01.01.090', 'V-90', 'Propietario 90', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(91, 'No.91', 150, 1, '1.01.02.01.091', '3.05.01.01.091', 'V-91', 'Propietario 91', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(92, 'No.92', 150, 1, '1.01.02.01.092', '3.05.01.01.092', 'V-92', 'Propietario 92', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(93, 'No.93', 150, 1, '1.01.02.01.093', '3.05.01.01.093', 'V-93', 'Propietario 93', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(94, 'No.94', 150, 1, '1.01.02.01.094', '3.05.01.01.094', 'V-94', 'Propietario 94', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(95, 'No.95', 150, 1, '1.01.02.01.095', '3.05.01.01.095', 'V-95', 'Propietario 95', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(96, 'No.96', 150, 1, '1.01.02.01.096', '3.05.01.01.096', 'V-96', 'Propietario 96', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(97, 'No.97', 150, 1, '1.01.02.01.097', '3.05.01.01.097', 'V-97', 'Propietario 97', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada'),
(98, 'No.98', 150, 1, '1.01.02.01.098', '3.05.01.01.098', 'V-98', 'Propietario 98', '(0251)', 'alexvasquez_ucla@yahoo.es', 'Ocupada'),
(99, 'No.99', 150, 1, '1.01.02.01.099', '3.05.01.01.099', 'V-99', 'Propietario 99', '(0251)', 'alexvasquezucla@gmail.com', 'Ocupada'),
(100, 'No.100', 150, 1, '1.01.02.01.100', '3.05.01.01.100', 'V-100', 'Propietario 100', '(0251)', 'alexvasquez_ucla@hotmail.com', 'Ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad_det`
--

CREATE TABLE IF NOT EXISTS `propiedad_det` (
  `id_propiedad_det` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_propiedad` bigint(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `terreno_propio` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `ocv` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `ambientes` varchar(100) DEFAULT NULL COMMENT 'Sala\nComedor\nCocina\nBano',
  `habitaciones` int(11) NOT NULL,
  `paredes` varchar(20) NOT NULL,
  `techo` varchar(20) DEFAULT NULL COMMENT 'Platabanda\nAsbesto\nTejas\nMadera\nZinc\nMachienbrado\nRaso\nOtro',
  `enseres` varchar(200) NOT NULL,
  `salubridad` varchar(100) DEFAULT NULL COMMENT 'Limpia\nSucia\nMedia Limpia\nMedia Sucia\nOtros',
  `plagas` varchar(100) DEFAULT NULL COMMENT 'Moscas\nHormigas\nRatones\nCucarachas\nCiempies\nOtros',
  `mascotas` varchar(100) DEFAULT NULL COMMENT 'Perro\nGato\nPajaros\nGallinas\nPatos\nCochinos\nOtros',
  `servicio_agua` varchar(50) DEFAULT NULL COMMENT 'Acueducto\nCamion\nPila Publica\nRio\nOtro',
  `servicio_cloaca` varchar(50) DEFAULT NULL COMMENT 'Cloaca\nSeptico\nLetrina\nAire Libre\nBolsas\nOtro',
  `servicio_gas` varchar(50) DEFAULT NULL COMMENT 'Bombona\nTuberia\nNo posee',
  `servicio_electrico` varchar(50) DEFAULT NULL COMMENT 'Publico\nPlanta Electrica\nNo tiene',
  `servicio_aseo` varchar(50) NOT NULL,
  `servicio_telefonia` varchar(50) DEFAULT NULL COMMENT 'Domiciliario\nCelular\nPrepago\nCentro de Comunicaciones\nOtros',
  `servicio_transporte` varchar(50) DEFAULT NULL COMMENT 'Propio\nPublico\nBestias\nTaxi\nOtros',
  `servicio_infrmacion` varchar(50) DEFAULT NULL COMMENT 'TV\nRadio\nPrensa\nInternet\nAlternativos\nOtros',
  `servicio_comunal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_propiedad_det`),
  KEY `propiedad_propiedad_det_fk` (`id_propiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT,
  `rif` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `cuenta_contable` varchar(15) NOT NULL,
  `cuenta_egresos` varchar(15) NOT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Activo\nInactivo',
  PRIMARY KEY (`id_proveedor`),
  UNIQUE KEY `proveedores_idx` (`rif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `rif`, `nombre`, `direccion`, `telefono`, `correo`, `cuenta_contable`, `cuenta_egresos`, `condicion`) VALUES
(1, 'J-12345678-9', 'Corpoelec', 'Cabudare', '(0251)123.45.67', 'admin@corpoelect.com', '2.01.01.01.001', '4.03.03.01.000', 'Activo'),
(2, 'G-12345678-9', 'Gas Comunal', 'Cabudare', '(0251)321.45.67', 'admin@gascomunal.com', '2.01.01.01.002', '4.03.03.02.000', 'Activo'),
(3, 'J-98765432-1', 'Hidrolara', 'Cabudare', '(0251)987.65.43', 'admin@hidrolara.com', '2.01.01.01.003', '4.03.03.03.000', 'Activo'),
(5, 'G-32165498-7', 'CANTV', 'Cabudare', '(0251)321.54.76', 'admin@cantv.com', '2.01.01.01.004', '4.03.03.04.000', 'Activo'),
(6, 'J-09871234-5', 'Vigilancia', 'Cabudare', '(0251)321.44.55', 'admin@vigilancia.com', '2.01.01.01.010', '4.03.08.10.000', 'Activo'),
(7, 'J-99999999-9', 'Ferreteria PRECA', 'Cabudare', '(0251)888.88.88', 'admin@preca.com', '2.01.01.01.099', '4.02.00.00.000', 'Activo'),
(8, 'J-22222222-2', 'Administradora', 'Cabudare', '(0251)555.55.55', 'admin@administradora.com', '2.01.01.01.011', '4.03.08.02.000', 'Activo'),
(9, 'J-44444444-4', 'Pedro Perez', 'Cabudare', '(0251)222.22.22', 'pedroperez@correo.com', '2.01.01.01.099', '4.03.08.99.000', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyectos` bigint(20) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(50) NOT NULL,
  `proyecto` varchar(100) NOT NULL,
  `descripcion` text,
  `costo` double NOT NULL,
  `cuenta_contable` varchar(15) NOT NULL,
  `condicion` varchar(20) DEFAULT NULL COMMENT 'Proy\nApro\nNeg\nEjec\nPara\nFin',
  PRIMARY KEY (`id_proyectos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_cobro`
--

CREATE TABLE IF NOT EXISTS `recibo_cobro` (
  `id_recibo_cobro` bigint(20) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(25) NOT NULL,
  `propiedad` varchar(10) NOT NULL,
  `alicuota` double NOT NULL,
  `cedula_responsable` varchar(15) NOT NULL,
  `nombre_responsable` varchar(100) NOT NULL,
  `monto` double NOT NULL,
  `abono` double NOT NULL DEFAULT '0',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  `fecha_acreditacion` datetime DEFAULT NULL,
  `condicion` varchar(15) DEFAULT 'Pendiente' COMMENT 'Pendiente Cancelado',
  PRIMARY KEY (`id_recibo_cobro`),
  UNIQUE KEY `recibo_cobro_idx` (`periodo`,`propiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_cobro_det`
--

CREATE TABLE IF NOT EXISTS `recibo_cobro_det` (
  `id_recibo_cobro_det` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_recibo_cobro` bigint(20) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `proveedor` varchar(200) NOT NULL,
  `factura` varchar(20) NOT NULL,
  `monto` double NOT NULL,
  PRIMARY KEY (`id_recibo_cobro_det`),
  KEY `id_recibo_cobro` (`id_recibo_cobro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `id_reservacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `instalacion` varchar(250) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `familia` varchar(50) NOT NULL,
  `motivo` varchar(250) DEFAULT NULL,
  `responsable_reserva` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL,
  `aprobado` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `fecha_aprobacion` timestamp NULL DEFAULT NULL,
  `responsable_aprobacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_reservacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auth_key` varchar(50) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `propiedad` varchar(10) NOT NULL DEFAULT '0-0',
  `familia` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL COMMENT 'Administrador\nCondominio\nResidente',
  `foto` varchar(200) DEFAULT 'NULL',
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Activo\nSuspendido',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user_idx` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `auth_key`, `password_reset_token`, `propiedad`, `familia`, `tipo`, `foto`, `condicion`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', '0-0', NULL, 'Administrador', 'NULL', 'Activo'),
(2, 'conf', '2d4de2ba4d00f51dd7031724d2fbe7ff899ea508', 'conf', 'conf', '0-0', NULL, 'Configuracion', 'NULL', 'Activo'),
(3, 'audi', 'df44a1c6f830f3230610f6812231585f7b883859', 'auditor', 'auditor', '', NULL, 'Auditor', '', 'Activo'),
(4, 'condo', '0b57c04029df6e9c49624b3ae761889cf2cb0053', 'condo', 'condo', '0-0', NULL, 'Condominio', 'NULL', 'Activo'),
(5, 'p1', 'b78f576611ec06f96af3ca654c22172a5d746c40', 'p1', 'p1', 'No.01', NULL, 'Residente', '', 'Activo'),
(6, 'p2', 'c5fd961c9f737a955a308050062e7a2c34ee67c3', 'p2', 'p2', 'No.02', NULL, 'Residente', '', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion`
--

CREATE TABLE IF NOT EXISTS `votacion` (
  `id_votacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `proyecto` varchar(100) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `voto` varchar(2) DEFAULT NULL COMMENT 'Si\nNo',
  `fecha_voto` date DEFAULT NULL,
  PRIMARY KEY (`id_votacion`),
  UNIQUE KEY `votacion_idx` (`proyecto`,`familia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diario_det`
--
ALTER TABLE `diario_det`
  ADD CONSTRAINT `diario_diario_det_fk` FOREIGN KEY (`id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `familia_integrantes`
--
ALTER TABLE `familia_integrantes`
  ADD CONSTRAINT `familia_familia_integrantes_fk` FOREIGN KEY (`id_familia`) REFERENCES `familia` (`id_familia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `propiedad_det`
--
ALTER TABLE `propiedad_det`
  ADD CONSTRAINT `propiedad_propiedad_det_fk` FOREIGN KEY (`id_propiedad`) REFERENCES `propiedad` (`id_propiedad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recibo_cobro_det`
--
ALTER TABLE `recibo_cobro_det`
  ADD CONSTRAINT `recibo_cobro_det_ibfk_1` FOREIGN KEY (`id_recibo_cobro`) REFERENCES `recibo_cobro` (`id_recibo_cobro`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
