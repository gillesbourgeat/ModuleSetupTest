-- ---------------------------------------------------------------------
-- This file contains the sql queries to uninstall the module
-- ---------------------------------------------------------------------

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE `module_setup_test`;

SET FOREIGN_KEY_CHECKS = 1;