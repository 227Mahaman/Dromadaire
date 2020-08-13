--MAJ
ALTER TABLE `billet` CHANGE `bus` `bus` INT(11) NULL;
ALTER TABLE `client` CHANGE `tel` `tel` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;