<?php

class Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("tickergroupGrid");
				$this->setDefaultSort("group_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("newsticker/tickergroup")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("group_id", array(
				"header" => Mage::helper("newsticker")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "group_id",
				));
                
				$this->addColumn("group_name", array(
				"header" => Mage::helper("newsticker")->__("Group Name"),
				"index" => "group_name",
				));
						$this->addColumn('group_active', array(
						'header' => Mage::helper('newsticker')->__('Group Active '),
						'index' => 'group_active',
						'type' => 'options',
						'options'=>Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Grid::getOptionArray1(),				
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
			$this->setMassactionIdField('group_id');
			$this->getMassactionBlock()->setFormFieldName('group_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_tickergroup', array(
					 'label'=> Mage::helper('newsticker')->__('Remove Tickergroup'),
					 'url'  => $this->getUrl('*/adminhtml_tickergroup/massRemove'),
					 'confirm' => Mage::helper('newsticker')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray1()
		{
            $data_array=array(); 
			$data_array[1]='Yes';
			$data_array[0]='No';
            return($data_array);
		}
		static public function getValueArray1()
		{
            $data_array=array();
			foreach(Yantrakaar_NewsTicker_Block_Adminhtml_Tickergroup_Grid::getOptionArray1() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}