-- ---------------------------------------------------------------------
-- This file contains the SQL for version 2.2.1
-- ---------------------------------------------------------------------

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

INSERT INTO `module_setup_test` (`version`, `created_at`, `updated_at`) VALUES ('2.2.1', NOW(),NOW());

SET FOREIGN_KEY_CHECKS = 1;