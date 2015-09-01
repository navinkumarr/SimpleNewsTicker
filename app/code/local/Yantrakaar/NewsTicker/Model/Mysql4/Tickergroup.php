<?php
class Yantrakaar_NewsTicker_Model_Mysql4_Tickergroup extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("newsticker/tickergroup", "group_id");
    }
}