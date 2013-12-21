USE `creaprac_email`;

-- -----------------------------------------------------
-- Table `creaprac_email`.`mail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mail` ;

CREATE TABLE IF NOT EXISTS `mail` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `company` VARCHAR(255) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `country` VARCHAR(105) NOT NULL,
  `message` VARCHAR(255) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB DEFAULT CHARSET=UTF8 COLLATE utf8_unicode_ci;