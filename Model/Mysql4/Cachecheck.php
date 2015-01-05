<?php
class Mclay_Upgradecheck_Model_Mysql4_Cachecheck extends Mage_Core_Model_Mysql4_Abstract{
    protected function _construct()
    {
        $this->_init('upgradecheck/cachecheck', 'code');
    }   
}
?>