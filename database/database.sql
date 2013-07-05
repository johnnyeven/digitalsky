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
  `admin_starttime` INT NOT NULL ,
  `admin_lastlogin` INT NOT NULL ,
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


-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_slider`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_slider` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_slider` (
  `slider_id` INT NOT NULL AUTO_INCREMENT ,
  `slider_pic_path` TEXT NOT NULL ,
  `slider_url` TEXT NOT NULL ,
  `slider_sort` INT NOT NULL ,
  PRIMARY KEY (`slider_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_config`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_config` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_config` (
  `config_id` INT NOT NULL AUTO_INCREMENT ,
  `config_title` CHAR(32) NOT NULL ,
  `config_footer` TEXT NOT NULL ,
  PRIMARY KEY (`config_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_article` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_article` (
  `article_id` INT NOT NULL AUTO_INCREMENT ,
  `article_title` VARCHAR(64) NOT NULL ,
  `article_content` TEXT NOT NULL ,
  `article_posttime` INT NOT NULL ,
  PRIMARY KEY (`article_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `digitalsky_db`.`digisky_product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `digitalsky_db`.`digisky_product` ;

CREATE  TABLE IF NOT EXISTS `digitalsky_db`.`digisky_product` (
  `product_id` INT NOT NULL AUTO_INCREMENT ,
  `product_name` CHAR(32) NOT NULL ,
  `product_content` TEXT NOT NULL ,
  `product_ios_download` TEXT NOT NULL ,
  `product_android_download` TEXT NOT NULL ,
  `product_logo_url` TEXT NOT NULL ,
  `product_image_url` TEXT NOT NULL ,
  `product_sort` INT NOT NULL ,
  PRIMARY KEY (`product_id`) )
ENGINE = InnoDB;

USE `digitalsky_db` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `digitalsky_db`.`digisky_admin`
-- -----------------------------------------------------
START TRANSACTION;
USE `digitalsky_db`;
INSERT INTO `digitalsky_db`.`digisky_admin` (`admin_id`, `admin_account`, `admin_pass`, `admin_init`, `admin_starttime`, `admin_lastlogin`) VALUES (1, 'admin', 'd93a5def7511da3d0f2d171d9c344e91', 1, 0, 0);

COMMIT;

-- -----------------------------------------------------
-- Data for table `digitalsky_db`.`digisky_config`
-- -----------------------------------------------------
START TRANSACTION;
USE `digitalsky_db`;
INSERT INTO `digitalsky_db`.`digisky_config` (`config_id`, `config_title`, `config_footer`) VALUES (1, '数字天空', '<p>数字天空 - 版权所有 增值电信业务经营许可证 XXXXXXXXXXXXXXXX</p>');

COMMIT;

-- -----------------------------------------------------
-- Data for table `digitalsky_db`.`digisky_article`
-- -----------------------------------------------------
START TRANSACTION;
USE `digitalsky_db`;
INSERT INTO `digitalsky_db`.`digisky_article` (`article_id`, `article_title`, `article_content`, `article_posttime`) VALUES (1, '公司简介', '成都数字天空科技有限是一家从事无线网络娱乐产品研发、运营的创新性公司，拥有强劲的研发力量和充满活力的运营团队，敏锐的市场洞察力、先进的产品理念和丰富的经验沉淀，在行业中已开辟出一片新天地，致力于为广大手机用户提供时尚、优质、愉悦的娱乐体验，旗下拥有手机平台、大型网络游戏等，在业界广受好评。公司秉承对员工实行人性化管理的理念，对于每一位员工，公司都给予足够的发展空间、学习空间和丰厚的薪资待遇，提供奋斗的环境和难得的机遇。以梦想为契机，以踏实为前提，以理智为牵引，把握商机，努力在无线网络的浩瀚中，创造光明！', 0);
INSERT INTO `digitalsky_db`.`digisky_article` (`article_id`, `article_title`, `article_content`, `article_posttime`) VALUES (2, '联系方式', '<p>公司地址：</p><p>邮 &nbsp;&nbsp;&nbsp;编：</p><p>总机号码：</p><p>招聘专线：</p><p>传 &nbsp;&nbsp;&nbsp;真：</p><p>邮件地址：</p><p>公司官网：</p>', 0);
INSERT INTO `digitalsky_db`.`digisky_article` (`article_id`, `article_title`, `article_content`, `article_posttime`) VALUES (3, '招聘页面描述', '<p>本公司面向社会、学校公开招募有志之士，如果您希望在3G巨浪的推动下破釜沉舟，在无线网络这个新兴行业中施展抱负，占领一席高地，欢迎您加入成都数字天空科技有限公司。</p><p>广阔而灿烂的市场前景，总需要无数精英的联袂创造，我们将提供充满挑战的职位和项目，为您带来难得的机遇，更有高达２０％的项目分成，让能者多得，让千里马畅行万里！您的加入，是我们的希望与期待，如果您身边有优秀的朋友，欢迎推荐。</p>', 0);

COMMIT;
