-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2015 a las 21:11:14
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

DROP TABLE IF EXISTS `activos`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `fechahora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

DROP TABLE IF EXISTS `avisos`;
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

DROP TABLE IF EXISTS `banco`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_movimiento`
--

DROP TABLE IF EXISTS `banco_movimiento`;
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

DROP TABLE IF EXISTS `catalogo`;
CREATE TABLE IF NOT EXISTS `catalogo` (
  `id_catalogo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cuenta_contable` varchar(15) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `nivel` int(11) NOT NULL,
  `condicion` varchar(10) NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id_catalogo`),
  UNIQUE KEY `catalogo_idx` (`cuenta_contable`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
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

DROP TABLE IF EXISTS `diario`;
CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` bigint(20) NOT NULL AUTO_INCREMENT,
  `aniomes` varchar(50) DEFAULT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `condicion` varchar(10) DEFAULT NULL COMMENT 'Correcto\nReverso',
  PRIMARY KEY (`id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario_det`
--

DROP TABLE IF EXISTS `diario_det`;
CREATE TABLE IF NOT EXISTS `diario_det` (
  `id_diario_det` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_diario` bigint(20) NOT NULL,
  `cuenta` varchar(15) NOT NULL,
  `debe` double DEFAULT NULL,
  `haber` double DEFAULT NULL,
  PRIMARY KEY (`id_diario_det`),
  KEY `diario_diario_det_fk` (`id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

DROP TABLE IF EXISTS `facturas`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

DROP TABLE IF EXISTS `familia`;
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

DROP TABLE IF EXISTS `familia_integrantes`;
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

DROP TABLE IF EXISTS `instalaciones`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

DROP TABLE IF EXISTS `organizacion`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

DROP TABLE IF EXISTS `periodo`;
CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` bigint(20) NOT NULL AUTO_INCREMENT,
  `anio` varchar(4) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `aniomes` varchar(15) DEFAULT NULL,
  `condicion` varchar(10) NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id_periodo`),
  UNIQUE KEY `periodo_idx` (`anio`,`mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

DROP TABLE IF EXISTS `propiedad`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad_det`
--

DROP TABLE IF EXISTS `propiedad_det`;
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

DROP TABLE IF EXISTS `proveedores`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
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

DROP TABLE IF EXISTS `recibo_cobro`;
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

DROP TABLE IF EXISTS `recibo_cobro_det`;
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

DROP TABLE IF EXISTS `reservacion`;
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

DROP TABLE IF EXISTS `user`;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion`
--

DROP TABLE IF EXISTS `votacion`;
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
