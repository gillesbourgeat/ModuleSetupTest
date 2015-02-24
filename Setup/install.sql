-- ---------------------------------------------------------------------
-- This file contains the sql queries for create your module tables
-- ---------------------------------------------------------------------

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- module_setup_test
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `module_setup_test`;

CREATE TABLE `module_setup_test`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `version` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
