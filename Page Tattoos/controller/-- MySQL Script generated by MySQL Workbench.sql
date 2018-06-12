-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema estudio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema estudio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `estudio` DEFAULT CHARACTER SET utf8 ;
USE `estudio` ;

-- -----------------------------------------------------
-- Table `estudio`.`estudio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estudio`.`estudio` (
  `Proprietario` VARCHAR(45) NOT NULL,
  `NomeEstudio` VARCHAR(45) NOT NULL,
  `CNPJ` VARCHAR(45) NOT NULL,
  `Telefone` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Login` VARCHAR(45) NOT NULL,
  `Senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CNPJ`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `estudio`.`artistaestudio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estudio`.`artistaestudio` (
  `Nome` VARCHAR(45) NOT NULL,
  `Sobrenome` VARCHAR(45) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `Telefone` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Estudio_CNPJ` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CPF`),
  INDEX `fk_Artista_Estudio_idx` (`Estudio_CNPJ` ASC),
  CONSTRAINT `fk_Artista_Estudio`
    FOREIGN KEY (`Estudio_CNPJ`)
    REFERENCES `estudio`.`estudio` (`CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `estudio`.`ArtistaSolo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estudio`.`ArtistaSolo` (
  `Cpf` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Sobrenome` VARCHAR(45) NOT NULL,
  `Telefone` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Login` VARCHAR(45) NOT NULL,
  `Senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Cpf`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
