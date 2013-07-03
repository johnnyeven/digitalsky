SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `digitalsky_db` ;
CREATE SCHEMA IF NOT EXISTS `digitalsky_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `digitalsky_db` ;

-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_admin` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT ,
  `admin_account` CHAR(32) NOT NULL ,
  `admin_pass` CHAR(32) NOT NULL ,
  `admin_init` TINYINT NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`admin_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_job`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_job` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_job` (
  `job_id` INT NOT NULL AUTO_INCREMENT ,
  `job_name` CHAR(32) NOT NULL ,
  `job_category` INT NOT NULL ,
  `job_count` INT NOT NULL ,
  `job_exp` CHAR(32) NOT NULL ,
  `job_content` TEXT NOT NULL ,
  `job_posttime` INT NOT NULL ,
  `job_endtime` INT NOT NULL ,
  PRIMARY KEY (`job_id`) )
ENGINE = InnoDB;

USE `digitalsky_db` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
