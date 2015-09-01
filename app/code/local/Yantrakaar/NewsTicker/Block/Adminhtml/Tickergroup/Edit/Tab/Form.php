<?php
class Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("newsticker_form", array("legend"=>Mage::helper("newsticker")->__("Item information")));

				
						$fieldset->addField("group_name", "text", array(
						"label" => Mage::helper("newsticker")->__("Group Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "group_name",
						));
									
						 $fieldset->addField('group_active', 'select', array(
						'label'     => Mage::helper('newsticker')->__('Group Active '),
						'values'   => Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Grid::getValueArray1(),
						'name' => 'group_active',					
						"class" => "required-entry",
						"required" => true,
						));

				if (Mage::getSingleton("adminhtml/session")->getTickergroupData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getTickergroupData());
					Mage::getSingleton("adminhtml/session")->setTickergroupData(null);
				} 
				elseif(Mage::registry("tickergroup_data")) {
				    $form->setValues(Mage::registry("tickergroup_data")->getData());
				}
				return parent::_prepareForm();
		}
}
