<?php


class Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_tickertext";
	$this->_blockGroup = "newsticker";
	$this->_headerText = Mage::helper("newsticker")->__("Tickertext Manager");
	$this->_addButtonLabel = Mage::helper("newsticker")->__("Add New Item");
	parent::__construct();
	
	}

}