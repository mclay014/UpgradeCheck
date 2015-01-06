<?php  

class Mclay_Upgradecheck_Block_Adminhtml_Upgradecheck extends Mage_Adminhtml_Block_Template {
	
	protected function getEnabledCacheCount()
	{
		/**$cachecheck = Mage::getModel('upgradecheck/cachecheck')->getCollection();
		$check = array();
		foreach($cachecheck as $cache){
			if ($cache->getValue() != 0) {
				array_push($check, $cache->getCode());
			}
		}
		if (count($check) != 0) {
			return count($check) . ' caches are enabled';
		}
		return 'No caches are enabled...';**/
		$cachecheck = Mage::getModel('upgradecheck/cachecheck')->getCollection();
        $cachecheck->addFieldToFilter('value', array('neq' => 0));
        return $cachecheck->getSize();
	}
	
	protected function getCacheCount()
	{
		return Mage::getModel('upgradecheck/cachecheck')->getCollection()->getSize();
	}
}

?>