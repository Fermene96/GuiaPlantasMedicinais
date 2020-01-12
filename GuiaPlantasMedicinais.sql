-- MySQL Script generated by MySQL Workbench
-- Wed Nov 28 21:31:00 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema GPM
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema GPM
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `GPM` ;
USE `GPM` ;

-- -----------------------------------------------------
-- Table `GPM`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GPM`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GPM`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GPM`.`Administrador` (
  `idAdministrador` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GPM`.`Planta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GPM`.`Planta` (
  `idPlanta` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `foto` VARCHAR(50) NOT NULL,
  `preparo` VARCHAR(90) NOT NULL,
  `cultivo` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`idPlanta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GPM`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GPM`.`Comentario` (
  `comentario` VARCHAR(200) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Planta_idPlanta` INT NOT NULL,
  `Planta_Administrador_idAdministrador` INT NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Planta_idPlanta`, `Planta_Administrador_idAdministrador`),
  INDEX `fk_Comentario_Planta1_idx` (`Planta_idPlanta` ASC, `Planta_Administrador_idAdministrador` ASC),
  CONSTRAINT `fk_Comentario_Usuario`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `GPM`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentario_Planta1`
    FOREIGN KEY (`Planta_idPlanta`)
    REFERENCES `GPM`.`Planta` (`idPlanta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
