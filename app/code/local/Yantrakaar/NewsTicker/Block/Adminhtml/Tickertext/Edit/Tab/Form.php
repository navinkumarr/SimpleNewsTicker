<?php
class Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("newsticker_form", array("legend"=>Mage::helper("newsticker")->__("Item information")));

				
						$fieldset->addField("ticker_text", "text", array(
						"label" => Mage::helper("newsticker")->__("Ticker Text"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "ticker_text",
						));
									
						 $fieldset->addField('ticker_group_id', 'select', array(
						'label'     => Mage::helper('newsticker')->__('Group Name'),
						'values'   => Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Grid::getValueArray3(),
						'name' => 'ticker_group_id',					
						"class" => "required-entry",
						"required" => true,
						));

				if (Mage::getSingleton("adminhtml/session")->getTickertextData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getTickertextData());
					Mage::getSingleton("adminhtml/session")->setTickertextData(null);
				} 
				elseif(Mage::registry("tickertext_data")) {
				    $form->setValues(Mage::registry("tickertext_data")->getData());
				}
				return parent::_prepareForm();
		}
}
