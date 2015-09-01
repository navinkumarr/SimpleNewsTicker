<?php


class Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_tickergroup";
	$this->_blockGroup = "newsticker";
	$this->_headerText = Mage::helper("newsticker")->__("Tickergroup Manager");
	$this->_addButtonLabel = Mage::helper("newsticker")->__("Add New Item");
	parent::__construct();
	
	}

}