<?php
class Mclay_Upgradecheck_UpgradecheckController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
		$this->loadLayout();
		$this->renderLayout();
		$cachecheck = Mage::getModel('upgradecheck/cachecheck')->getCollection();
		$check = array();
		foreach($cachecheck as $cache){
			if ($cache->getValue() != 0) {
				array_push($check, $cache->getCode());
			}
			//echo '<h3>'.$cache->getCode(). ' ' .$cache->getValue().'</h3>';
		}
		if (count($check) != 0) {
			echo count($check) . ' caches are enabled';
			echo 'a';
		}
    }
	
} 

?>