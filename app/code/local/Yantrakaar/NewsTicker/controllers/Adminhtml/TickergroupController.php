<?php

class Yantrakaar_NewsTicker_Adminhtml_TickergroupController extends Mage_Adminhtml_Controller_Action
{
		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("newsticker/tickergroup")->_addBreadcrumb(Mage::helper("adminhtml")->__("Tickergroup  Manager"),Mage::helper("adminhtml")->__("Tickergroup Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("NewsTicker"));
			    $this->_title($this->__("Manager Tickergroup"));

				$this->_initAction();
				$this->renderLayout();
		}
		public function editAction()
		{			    
			    $this->_title($this->__("NewsTicker"));
				$this->_title($this->__("Tickergroup"));
			    $this->_title($this->__("Edit Item"));
				
				$id = $this->getRequest()->getParam("id");
				$model = Mage::getModel("newsticker/tickergroup")->load($id);
				if ($model->getId()) {
					Mage::register("tickergroup_data", $model);
					$this->loadLayout();
					$this->_setActiveMenu("newsticker/tickergroup");
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Tickergroup Manager"), Mage::helper("adminhtml")->__("Tickergroup Manager"));
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Tickergroup Description"), Mage::helper("adminhtml")->__("Tickergroup Description"));
					$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);
					$this->_addContent($this->getLayout()->createBlock("newsticker/adminhtml_tickergroup_edit"))->_addLeft($this->getLayout()->createBlock("newsticker/adminhtml_tickergroup_edit_tabs"));
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("adminhtml/session")->addError(Mage::helper("newsticker")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}

		public function newAction()
		{

		$this->_title($this->__("NewsTicker"));
		$this->_title($this->__("Tickergroup"));
		$this->_title($this->__("New Item"));

        $id   = $this->getRequest()->getParam("id");
		$model  = Mage::getModel("newsticker/tickergroup")->load($id);

		$data = Mage::getSingleton("adminhtml/session")->getFormData(true);
		if (!empty($data)) {
			$model->setData($data);
		}

		Mage::register("tickergroup_data", $model);

		$this->loadLayout();
		$this->_setActiveMenu("newsticker/tickergroup");

		$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);

		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Tickergroup Manager"), Mage::helper("adminhtml")->__("Tickergroup Manager"));
		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Tickergroup Description"), Mage::helper("adminhtml")->__("Tickergroup Description"));


		$this->_addContent($this->getLayout()->createBlock("newsticker/adminhtml_tickergroup_edit"))->_addLeft($this->getLayout()->createBlock("newsticker/adminhtml_tickergroup_edit_tabs"));

		$this->renderLayout();

		}
		public function saveAction()
		{

			$post_data=$this->getRequest()->getPost();


				if ($post_data) {

					try {

						

						$model = Mage::getModel("newsticker/tickergroup")
						->addData($post_data)
						->setId($this->getRequest()->getParam("id"))
						->save();

						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Tickergroup was successfully saved"));
						Mage::getSingleton("adminhtml/session")->setTickergroupData(false);

						if ($this->getRequest()->getParam("back")) {
							$this->_redirect("*/*/edit", array("id" => $model->getId()));
							return;
						}
						$this->_redirect("*/*/");
						return;
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						Mage::getSingleton("adminhtml/session")->setTickergroupData($this->getRequest()->getPost());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					return;
					}

				}
				$this->_redirect("*/*/");
		}



		public function deleteAction()
		{
				if( $this->getRequest()->getParam("id") > 0 ) {
					try {
						$model = Mage::getModel("newsticker/tickergroup");
						$model->setId($this->getRequest()->getParam("id"))->delete();
						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item was successfully deleted"));
						$this->_redirect("*/*/");
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					}
				}
				$this->_redirect("*/*/");
		}

		
		public function massRemoveAction()
		{
			try {
				$ids = $this->getRequest()->getPost('group_ids', array());
				foreach ($ids as $id) {
                      $model = Mage::getModel("newsticker/tickergroup");
					  $model->setId($id)->delete();
				}
				Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item(s) was successfully removed"));
			}
			catch (Exception $e) {
				Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
			}
			$this->_redirect('*/*/');
		}
			
		/**
		 * Export order grid to CSV format
		 */
		public function exportCsvAction()
		{
			$fileName   = 'tickergroup.csv';
			$grid       = $this->getLayout()->createBlock('newsticker/adminhtml_tickergroup_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'tickergroup.xml';
			$grid       = $this->getLayout()->createBlock('newsticker/adminhtml_tickergroup_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
}
