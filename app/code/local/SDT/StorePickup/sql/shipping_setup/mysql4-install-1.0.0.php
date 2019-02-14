<?php$installer = $this;
$installer->startSetup();
$installer->run("
	ALTER TABLE {$this->getTable('sales/order')}
	ADD COLUMN `store_pickup` VARCHAR(45) NULL; 
	");
$installer->run("
	ALTER TABLE {$this->getTable('sales/quote_address')}
	ADD COLUMN `store_pickup` VARCHAR(45) NULL; 
	");
$installer->endSetup();

$installer = $this;
$installer->startSetup();
$installer->run("
	ALTER TABLE {$this->getTable('sales/order')}
	ADD COLUMN `store_pickup` VARCHAR(45) NULL; 
	");
$installer->run("
	ALTER TABLE {$this->getTable('sales/quote_address')}
	ADD COLUMN `store_pickup` VARCHAR(45) NULL; 
	");
$installer->endSetup();