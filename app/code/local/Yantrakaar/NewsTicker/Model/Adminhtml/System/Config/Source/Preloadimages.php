<?php
class Yantrakaar_NewsTicker_Model_Adminhtml_System_Config_Source_Preloadimages
{
	public function toOptionArray(){
		
		$mode = array(
					array('value'=>'all','label'=>'all'),
					array('value'=>'visible','label'=>'visible'),
				);
		return $mode;
	}

}