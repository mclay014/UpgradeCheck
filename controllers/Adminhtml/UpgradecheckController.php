<?php
class Mclay_Upgradecheck_Adminhtml_UpgradecheckController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__('Check For Upgrade'));
	   $this->renderLayout();
    }
}

?>