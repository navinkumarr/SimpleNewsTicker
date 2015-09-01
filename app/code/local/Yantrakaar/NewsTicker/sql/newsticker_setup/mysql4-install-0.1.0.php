<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
drop table if exists newsticker_group ; create table newsticker_group(group_id int auto_increment not null ,group_name varchar(50) not null ,group_active bool not null,primary key(group_id));
drop table if exists newsticker_text; create table newsticker_text(ticker_id int auto_increment not null , ticker_text varchar(500) , ticker_group_id int,primary key(ticker_id) , foreign key(ticker_group_id) references newsticker_group(group_id));
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 