-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BuscandoUnHogar
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BuscandoUnHogar
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BuscandoUnHogar` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `BuscandoUnHogar` ;

-- -----------------------------------------------------
-- Table `BuscandoUnHogar`.`Administradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BuscandoUnHogar`.`Administradores` (
  `idAdmin` INT NOT NULL AUTO_INCREMENT,
  `NombreAdmin` VARCHAR(45) NOT NULL,
  `ApellidoPAdmin` VARCHAR(45) NOT NULL,
  `ApellidoMAdmin` VARCHAR(45) NOT NULL,
  `Usuario` VARCHAR(45) NOT NULL,
  `Contrasenia` VARCHAR(45) NOT NULL,
  `TipoAdmin` VARCHAR(45) NOT NULL,
  `CalleNumero` VARCHAR(45) NULL,
  `Colonia` VARCHAR(45) NULL,
  `AlcaldiaMunicipio` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB
COMMENT = '		';


-- -----------------------------------------------------
-- Table `BuscandoUnHogar`.`Donaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BuscandoUnHogar`.`Donaciones` (
  `idDon` INT NOT NULL AUTO_INCREMENT,
  `NombreDon` VARCHAR(45) NOT NULL,
  `ApellidoPDon` VARCHAR(45) NOT NULL,
  `ApellidoMDon` VARCHAR(45) NOT NULL,
  `Producto` VARCHAR(45) NULL,
  `Cantidad` VARCHAR(45) NULL,
  `DineroDon` DECIMAL NULL,
  PRIMARY KEY (`idDon`))
ENGINE = InnoDB
COMMENT = '			';


-- -----------------------------------------------------
-- Table `BuscandoUnHogar`.`Adopciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BuscandoUnHogar`.`Adopciones` (
  `idAdop` INT NOT NULL AUTO_INCREMENT,
  `NombreAdop` VARCHAR(45) NOT NULL,
  `ApellidoPAdop` VARCHAR(45) NOT NULL,
  `ApellidoMAdop` VARCHAR(45) NOT NULL,
  `CalleNumero` VARCHAR(45) NOT NULL,
  `Colonia` VARCHAR(45) NOT NULL,
  `AlcaldiaMunicipio` VARCHAR(45) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `Ingresos` VARCHAR(45) NOT NULL,
  `MotivoAdop` VARCHAR(300) NOT NULL,
  `M2` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdop`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BuscandoUnHogar`.`Mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BuscandoUnHogar`.`Mascotas` (
  `idMascota` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Genero` VARCHAR(45) NULL,
  `Edad` VARCHAR(45) NULL,
  `Tamanio` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(300) NULL,
  `EsquemaVacunacion` VARCHAR(45) NULL,
  `Desparacitacion` TINYINT NULL,
  `Esteril` TINYINT NULL,
  `Foto` BLOB NULL,
  `Adopciones_idAdop` INT NOT NULL,
  PRIMARY KEY (`idMascota`),
  INDEX `fk_Mascotas_Adopciones_idx` (`Adopciones_idAdop` ASC),
  CONSTRAINT `fk_Mascotas_Adopciones`
    FOREIGN KEY (`Adopciones_idAdop`)
    REFERENCES `BuscandoUnHogar`.`Adopciones` (`idAdop`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
