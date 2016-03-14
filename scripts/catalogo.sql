-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-06-2015 a las 09:59:55
-- Versión del servidor: 5.5.43
-- Versión de PHP: 5.4.39-0+deb7u2

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id_catalogo`, `cuenta_contable`, `descripcion`, `nivel`, `condicion`) VALUES
(1, '1.00.00.00.000', 'Activo', 1, 'Activo'),
(2, '1.01.00.00.000', 'Circulante', 2, 'Activo'),
(3, '1.01.01.00.000', 'Disponible', 3, 'Activo'),
(4, '1.01.01.01.000', 'Banco', 4, 'Activo'),
(5, '1.01.01.01.001', 'Provincial Cuenta 12345678901234567890', 5, 'Activo'),
(6, '1.01.01.02.000', 'Caja Chica', 4, 'Activo'),
(7, '1.01.02.00.000', 'Exigible', 3, 'Activo'),
(8, '1.01.02.01.000', 'Cuentas por Cobrar Propiedad', 4, 'Activo'),
(9, '1.01.02.01.001', 'Cuentas por Cobrar Propiedad No.1', 5, 'Activo'),
(10, '1.01.02.01.002', 'Cuentas por Cobrar Propiedad No.2', 5, 'Activo'),
(11, '1.01.02.01.003', 'Cuentas por Cobrar Propiedad No.3', 5, 'Activo'),
(12, '1.01.02.01.004', 'Cuentas por Cobrar Propiedad No.4', 5, 'Activo'),
(13, '1.01.02.01.005', 'Cuentas por Cobrar Propiedad No.5', 5, 'Activo'),
(14, '1.01.02.01.006', 'Cuentas por Cobrar Propiedad No.6', 5, 'Activo'),
(15, '1.01.02.01.007', 'Cuentas por Cobrar Propiedad No.7', 5, 'Activo'),
(16, '1.01.02.01.008', 'Cuentas por Cobrar Propiedad No.8', 5, 'Activo'),
(17, '1.01.02.01.009', 'Cuentas por Cobrar Propiedad No.9', 5, 'Activo'),
(18, '1.01.02.01.010', 'Cuentas por Cobrar Propiedad No.10', 5, 'Activo'),
(19, '1.01.02.01.011', 'Cuentas por Cobrar Propiedad No.11', 5, 'Activo'),
(20, '1.01.02.01.012', 'Cuentas por Cobrar Propiedad No.12', 5, 'Activo'),
(21, '1.01.02.01.013', 'Cuentas por Cobrar Propiedad No.13', 5, 'Activo'),
(22, '1.01.02.01.014', 'Cuentas por Cobrar Propiedad No.14', 5, 'Activo'),
(23, '1.01.02.01.015', 'Cuentas por Cobrar Propiedad No.15', 5, 'Activo'),
(24, '1.01.02.01.016', 'Cuentas por Cobrar Propiedad No.16', 5, 'Activo'),
(25, '1.01.02.01.017', 'Cuentas por Cobrar Propiedad No.17', 5, 'Activo'),
(26, '1.01.02.01.018', 'Cuentas por Cobrar Propiedad No.18', 5, 'Activo'),
(27, '1.01.02.01.019', 'Cuentas por Cobrar Propiedad No.19', 5, 'Activo'),
(28, '1.01.02.01.020', 'Cuentas por Cobrar Propiedad No.20', 5, 'Activo'),
(29, '1.01.02.02.000', 'Anticipos a Proveedores ', 4, 'Activo'),
(30, '1.02.00.00.000', 'No Circulante', 2, 'Activo'),
(31, '1.02.01.00.000', 'Cuentas por Cobrar Largo Plazo', 3, 'Activo'),
(32, '1.02.02.00.000', 'Activo Fijo', 3, 'Activo'),
(33, '1.02.02.01.000', 'Terrenos', 4, 'Activo'),
(34, '1.02.02.02.000', 'Instalaciones', 4, 'Activo'),
(35, '1.02.02.03.000', 'Equipos', 4, 'Activo'),
(36, '1.02.03.00.000', 'Activo Intangible', 3, 'Activo'),
(37, '1.02.03.01.000', 'Estudios y Proyectos', 4, 'Activo'),
(38, '1.02.03.02.000', 'Gastos de Organizacion', 4, 'Activo'),
(39, '1.02.04.00.000', 'Activo No Circalntes', 3, 'Activo'),
(40, '1.02.04.01.000', 'Depositos en Garantia', 4, 'Activo'),
(41, '1.02.04.02.000', 'Activos en Gestion Judicial', 4, 'Activo'),
(42, '1.02.04.03.000', 'Gastos Pagados por Anticipado', 4, 'Activo'),
(43, '1.02.04.04.000', 'Anticipos a Proveedores Largo Plazo', 4, 'Activo'),
(44, '1.02.05.00.000', 'Revaluacion de Activos', 3, 'Activo'),
(45, '1.02.05.01.000', 'Reevaluacion de Terrenos', 4, 'Activo'),
(46, '1.02.05.02.000', 'Revaluacion de Construcciones', 4, 'Activo'),
(47, '2.00.00.00.000', 'Pasivo', 1, 'Activo'),
(48, '2.01.00.00.000', 'Pasivo Circulante', 2, 'Activo'),
(49, '2.01.01.00.000', 'Cuentas por Pagar', 3, 'Activo'),
(50, '2.01.01.01.000', 'Proveedores', 4, 'Activo'),
(51, '2.01.01.02.000', 'Contratistas', 4, 'Activo'),
(52, '2.01.01.03.000', 'Sueldos a Pagar', 4, 'Activo'),
(53, '2.01.01.04.000', 'Retenciones Laborales a Pagar', 4, 'Activo'),
(54, '2.02.00.00.000', 'Pasivo No Circulante', 2, 'Activo'),
(55, '2.02.01.00.000', 'Efectos por Pagar Largo Plazo', 3, 'Activo'),
(56, '2.02.02.00.000', 'Depreciacio y amortizacion Acumulada', 3, 'Activo'),
(57, '3.00.00.00.000', 'Recursos', 1, 'Activo'),
(58, '3.01.00.00.000', 'Ingresos Ordinarios', 2, 'Activo'),
(59, '3.02.00.00.000', 'Ingresos Extraordinarios', 2, 'Activo'),
(60, '3.03.00.00.000', 'Ingresos de Operacion', 2, 'Activo'),
(61, '4.00.00.00.000', 'Egresos', 1, 'Activo'),
(62, '4.01.00.00.000', 'Gastos de Personal', 2, 'Activo'),
(63, '4.01.01.00.000', 'Sueldos y Salarios', 3, 'Activo'),
(64, '4.02.00.00.000', 'Materiales y Sumnistros', 2, 'Activo'),
(65, '4.02.01.00.000', 'Productos Alimenticios', 3, 'Activo'),
(66, '4.02.02.00.000', 'Productos de minas y canteras', 3, 'Activo'),
(67, '4.02.03.00.000', 'Textiles y Vestuarios', 3, 'Activo'),
(68, '4.02.04.00.000', 'Productos de Cuero y Caucho', 3, 'Activo'),
(69, '4.02.05.00.000', 'Productos de papel, Carton e Impresos', 3, 'Activo'),
(70, '4.02.06.00.000', 'Productos Quimicos y Derivados', 3, 'Activo'),
(71, '4.02.07.00.000', 'Productos Minerales no Metalicos', 3, 'Activo'),
(72, '4.02.08.00.000', 'Productos Metalicos', 3, 'Activo'),
(73, '4.02.09.00.000', 'Productos de Madera', 3, 'Activo'),
(74, '4.02.10.00.000', 'Productos Varios y Utiles Diversos', 3, 'Activo'),
(75, '4.03.00.00.000', 'Servicios no Personales', 2, 'Activo'),
(76, '4.03.01.00.000', 'Alquileres de Inmuebles', 3, 'Activo'),
(77, '4.03.02.00.000', 'Alquileres de Equipos', 3, 'Activo'),
(78, '4.03.03.00.000', 'Servicios Basicos', 3, 'Activo'),
(79, '4.03.04.00.000', 'Servicios de Transporte y Almacenaje', 3, 'Activo'),
(80, '4.03.05.00.000', 'Servicios de Informacion, Impresion y Relaciones Publicas', 3, 'Activo'),
(81, '4.03.06.00.000', 'Viaticos', 3, 'Activo'),
(82, '4.03.07.00.000', 'Servicios Profesionales y Tecnicos', 3, 'Activo'),
(83, '4.04.00.00.000', 'Activos Reales', 2, 'Activo'),
(84, '4.05.00.00.000', 'Activos Financieros', 2, 'Activo'),
(85, '5.00.00.00.000', 'Resultados', 1, 'Activo'),
(86, '6.00.00.00.000', 'Capital', 1, 'Activo'),
(87, '7.00.00.00.000', 'Cuentas de Orden', 1, 'Activo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
