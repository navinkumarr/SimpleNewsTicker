<?php
class Yantrakaar_NewsTicker_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getTickerData($groupid = null){
		if(is_null($groupid))
		{
			$groupid = Mage::getModel("newsticker/config")->getSettingsGroupid();
		}
		
 		if($this->isEnabled())
 		{
 			$collection = Mage::getModel('newsticker/tickergroup')->getCollection();
			$collection->addFieldToFilter('group_id',$groupid);
			$collection->addFieldToFilter('group_active',1);
			$collection->getSelect()->join(array('text' => 'newsticker_text'),'main_table.group_id = text.ticker_group_id',array('text.ticker_text'));
			$collection->addFieldToSelect('group_name');
			return $collection->getData();
 		} else {
 			return '';
 		}
 	}
 	
 	public function isEnabled(){
 		return Mage::getModel("newsticker/config")->getSettingsActive();
 	}
}