<?php
class Yantrakaar_NewsTicker_Model_Adminhtml_System_Config_Source_Pagertype
{
	public function toOptionArray(){
		
		$mode = array(
					array('value'=>'full','label'=>'full'),
					array('value'=>'short','label'=>'short'),
				);
		return $mode;
	}

}