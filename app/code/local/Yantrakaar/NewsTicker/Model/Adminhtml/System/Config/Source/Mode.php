<?php
class Yantrakaar_NewsTicker_Model_Adminhtml_System_Config_Source_Mode
{
	public function toOptionArray(){
		
		$mode = array(
					array('value'=>'horizontal','label'=>'horizontal'),
					array('value'=>'vertical','label'=>'vertical'),
					array('value'=>'fade','label'=>'fade'),
				);
		return $mode;
	}

}