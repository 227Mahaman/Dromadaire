--MAJ
ALTER TABLE `client` CHANGE `email` `email` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
ALTER TABLE `client` ADD `is_account` INT NOT NULL DEFAULT '0' AFTER `nationalite`;
ALTER TABLE `reservation` CHANGE `etat` `etat` VARCHAR(11) NULL DEFAULT 'NON';