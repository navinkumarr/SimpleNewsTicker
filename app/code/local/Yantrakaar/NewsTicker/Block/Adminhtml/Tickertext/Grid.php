<?php

class Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("tickertextGrid");
				$this->setDefaultSort("ticker_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("newsticker/tickertext")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("ticker_id", array(
				"header" => Mage::helper("newsticker")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "ticker_id",
				));
                
				$this->addColumn("ticker_text", array(
				"header" => Mage::helper("newsticker")->__("Ticker Text"),
				"index" => "ticker_text",
				));
						$this->addColumn('ticker_group_id', array(
						'header' => Mage::helper('newsticker')->__('Group Name'),
						'index' => 'ticker_group_id',
						'type' => 'options',
						'options'=>Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Grid::getOptionArray3(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('ticker_id');
			$this->getMassactionBlock()->setFormFieldName('ticker_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_tickertext', array(
					 'label'=> Mage::helper('newsticker')->__('Remove Tickertext'),
					 'url'  => $this->getUrl('*/adminhtml_tickertext/massRemove'),
					 'confirm' => Mage::helper('newsticker')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray3()
		{
			$options = Mage::getModel('newsticker/tickergroup')->getCollection()->addFieldToFilter('group_active',1);
			$data_array=array();
			if(!empty($options)){ 
				foreach($options as $option){
					$data_array[$option->getGroupId()]=$option->getGroupName();
				}
			} else {
				$data_array[0] = '';
			}
			return($data_array);
		}
		static public function getValueArray3()
		{
            $data_array=array();
			foreach(Yantrakaar_NewsTicker_Block_Adminhtml_Tickertext_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}