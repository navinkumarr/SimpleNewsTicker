<?php
class Yantrakaar_NewsTicker_Model_Adminhtml_System_Config_Source_Autodirection
{
	public function toOptionArray(){
		
		$mode = array(
					array('value'=>'next','label'=>'next'),
					array('value'=>'prev','label'=>'prev'),
				);
		return $mode;
	}

}