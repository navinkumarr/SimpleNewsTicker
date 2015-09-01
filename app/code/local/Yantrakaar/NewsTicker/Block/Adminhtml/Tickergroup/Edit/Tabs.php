<?php
class Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("tickergroup_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("newsticker")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("newsticker")->__("Item Information"),
				"title" => Mage::helper("newsticker")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("newsticker/adminhtml_tickergroup_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
