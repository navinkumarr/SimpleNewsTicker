<?php
	
class Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "ticker_id";
				$this->_blockGroup = "newsticker";
				$this->_controller = "adminhtml_tickertext";
				$this->_updateButton("save", "label", Mage::helper("newsticker")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("newsticker")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("newsticker")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("tickertext_data") && Mage::registry("tickertext_data")->getId() ){

				    return Mage::helper("newsticker")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("tickertext_data")->getId()));

				} 
				else{

				     return Mage::helper("newsticker")->__("Add Item");

				}
		}
}