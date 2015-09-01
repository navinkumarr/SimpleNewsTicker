<?php
class Yantrakaar_NewsTicker_Model_Mysql4_Tickertext extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("newsticker/tickertext", "ticker_id");
    }
}