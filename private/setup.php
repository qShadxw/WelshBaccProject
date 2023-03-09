<?php
require_once __DIR__ . "/private/settings.php";
require_once __DIR__ . "/private/private_info.php";
if (!isset($pdo)) die();

$database_create_statement = "CREATE TABLE IF NOT EXISTS `welshbacc`.`{$table}` (`id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of Report' , `submitdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date of Report Submitted' , `weatherdate` TIMESTAMP NOT NULL COMMENT 'Date of Weather Requested' , `report` VARCHAR(400) NOT NULL COMMENT 'Report of Weather' , PRIMARY KEY (`id`)) ENGINE = InnoDB COMMENT = 'Reports for Application';";

$creates_table = $pdo->prepare($database_create_statement);
$creates_table->execute();