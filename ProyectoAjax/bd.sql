-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para vovo
CREATE DATABASE IF NOT EXISTS `vovo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `vovo`;

-- Volcando estructura para tabla vovo.aduanas
CREATE TABLE IF NOT EXISTS `aduanas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Telefono` varchar(25) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Status` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.aduanas: ~0 rows (aproximadamente)
DELETE FROM `aduanas`;
/*!40000 ALTER TABLE `aduanas` DISABLE KEYS */;
INSERT INTO `aduanas` (`ID`, `Nombre`, `Direccion`, `Estado`, `Ciudad`, `Pais`, `Telefono`, `Correo`, `Status`) VALUES
	(1, 'Mexico', '234', 'Cancun', 'Cancun', 'MExico', '999', 'da@gmail.com', 1);
/*!40000 ALTER TABLE `aduanas` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.agenciaduanal
CREATE TABLE IF NOT EXISTS `agenciaduanal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `RepreRFC` varchar(50) NOT NULL,
  `RazonSocial` varchar(50) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `NExterior` varchar(50) NOT NULL,
  `NInterior` varchar(50) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `Delegacion` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Pagina` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.agenciaduanal: ~0 rows (aproximadamente)
DELETE FROM `agenciaduanal`;
/*!40000 ALTER TABLE `agenciaduanal` DISABLE KEYS */;
INSERT INTO `agenciaduanal` (`ID`, `Nombre`, `RepreRFC`, `RazonSocial`, `Calle`, `NExterior`, `NInterior`, `Colonia`, `CP`, `Delegacion`, `Ciudad`, `Estado`, `Pais`, `Telefono`, `Celular`, `Correo`, `Pagina`) VALUES
	(1, 'Salas', 'gg', 'gg', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'h', '777', 'gg', 'gg', 'h', 'g', 'dd');
/*!40000 ALTER TABLE `agenciaduanal` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.agenteaduanal
CREATE TABLE IF NOT EXISTS `agenteaduanal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAgente` varchar(60) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.agenteaduanal: ~7 rows (aproximadamente)
DELETE FROM `agenteaduanal`;
/*!40000 ALTER TABLE `agenteaduanal` DISABLE KEYS */;
INSERT INTO `agenteaduanal` (`ID`, `NombreAgente`, `Telefono`, `Celular`, `Correo`, `Status`) VALUES
	(1, 'Mario', '9988', '9981348327', 'dasa.19983@gmail.com', ''),
	(2, 'Zuriel', '998877', '23456', 'dasa.1998@gmail.com', ''),
	(3, 'Juan', '345', '344', 'fsdfsd', ''),
	(4, 'fff', 'ff', 'ff', 'ff', ''),
	(5, 'walter', '333', '33', '3ggg', ''),
	(6, 'prueba', 'prueba', 'prueba', 'prueba', ''),
	(7, 'lil peep', '99999', '8888', 'lilxan@gmail.com', '');
/*!40000 ALTER TABLE `agenteaduanal` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.colaborador
CREATE TABLE IF NOT EXISTS `colaborador` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  `Fecha_Nac` varchar(50) DEFAULT NULL,
  `RFC` varchar(50) DEFAULT NULL,
  `Curp` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Celular` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Departamento` varchar(50) DEFAULT NULL,
  `Puesto` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT 'vovo123',
  `Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.colaborador: ~4 rows (aproximadamente)
DELETE FROM `colaborador`;
/*!40000 ALTER TABLE `colaborador` DISABLE KEYS */;
INSERT INTO `colaborador` (`ID`, `Nombre`, `ApellidoP`, `ApellidoM`, `Fecha_Nac`, `RFC`, `Curp`, `Direccion`, `Celular`, `Telefono`, `Correo`, `Departamento`, `Puesto`, `Password`, `Status`) VALUES
	(1, 'David', 'Salas', 'Romero', '28-02-1998', '777', '777', '77', '77', '77', 'da@gmail.com', '77', 'Admin', '123', '1'),
	(2, 'Carlos', 'Gutierres', 'lopez', '28-02-1998', '8', '88', '88', '88', '88', 'dasa@gmail.com', '88', 'User', 'vovo123', '1'),
	(3, 'Juan', 'kk', 'kk', '28-02-1998', '99', '99', '99', '99', '99', 'dasa1@gmail.com', '99', 'Admin', 'vovo123', '1'),
	(4, 'diego', 'jj', 'jj', '28-02-1998', 'jj', 'jj', 'jj', 'jj', 'jj', 'dasa2@gmail.com', 'jj', 'User', 'hola', '1');
/*!40000 ALTER TABLE `colaborador` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.datosagenciaaduana
CREATE TABLE IF NOT EXISTS `datosagenciaaduana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAgencia` varchar(50) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Nexterio` varchar(50) NOT NULL,
  `Ninterior` varchar(50) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Delegacion` varchar(50) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `PaginaW` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_datosagenciaaduana_agenciaduanal` (`NombreAgencia`),
  CONSTRAINT `FK_datosagenciaaduana_agenciaduanal` FOREIGN KEY (`NombreAgencia`) REFERENCES `agenciaduanal` (`Nombre`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Volcando datos para la tabla vovo.datosagenciaaduana: ~0 rows (aproximadamente)
DELETE FROM `datosagenciaaduana`;
/*!40000 ALTER TABLE `datosagenciaaduana` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosagenciaaduana` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.datosempresa
CREATE TABLE IF NOT EXISTS `datosempresa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEm` varchar(50) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Nexterio` varchar(50) NOT NULL,
  `Ninterior` varchar(50) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Delegacion` varchar(50) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `PaginaW` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_datosempresa_empresa` (`NombreEm`),
  CONSTRAINT `FK_datosempresa_empresa` FOREIGN KEY (`NombreEm`) REFERENCES `empresa` (`NombreEm`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.datosempresa: ~0 rows (aproximadamente)
DELETE FROM `datosempresa`;
/*!40000 ALTER TABLE `datosempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosempresa` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEm` varchar(50) NOT NULL,
  `RepreRFC` varchar(50) NOT NULL,
  `RazonSocial` varchar(50) NOT NULL,
  `RFC` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NombreEm` (`NombreEm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.empresa: ~0 rows (aproximadamente)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.tabla_transporte_agencia
CREATE TABLE IF NOT EXISTS `tabla_transporte_agencia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Agencia` varchar(50) DEFAULT NULL,
  `Transporte` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_tabla_transporte_agencia_agenciaduanal` (`Agencia`),
  KEY `FK_tabla_transporte_agencia_transporte` (`Transporte`),
  CONSTRAINT `FK_tabla_transporte_agencia_agenciaduanal` FOREIGN KEY (`Agencia`) REFERENCES `agenciaduanal` (`Nombre`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tabla_transporte_agencia_transporte` FOREIGN KEY (`Transporte`) REFERENCES `transporte` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.tabla_transporte_agencia: ~0 rows (aproximadamente)
DELETE FROM `tabla_transporte_agencia`;
/*!40000 ALTER TABLE `tabla_transporte_agencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabla_transporte_agencia` ENABLE KEYS */;

-- Volcando estructura para tabla vovo.transporte
CREATE TABLE IF NOT EXISTS `transporte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TipoT` varchar(50) NOT NULL,
  `TipoV` varchar(50) NOT NULL,
  `AgenteT` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vovo.transporte: ~0 rows (aproximadamente)
DELETE FROM `transporte`;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
