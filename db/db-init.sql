-- TO USE THIS FILE IN Cloud9
-- Run this command inside the MySQL command line client:
--
-- source ~/workspace/site-with-authentication/db/db-init.sql
--
-- Be careful! This file will DROP the existing authenticated_example database.

-- Drop the existing library database.
DROP DATABASE `authenticated_example`;

-- Create a new, empty library database.
CREATE DATABASE `authenticated_example`;

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema authenticated_example
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema authenticated_example
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `authenticated_example` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `authenticated_example` ;

-- -----------------------------------------------------
-- Table `authenticated_example`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `authenticated_example`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
