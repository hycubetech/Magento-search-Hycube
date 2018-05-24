<?php

class Hycubecompleteplus_Autosuggest_Model_Resource_Batches extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Resource initialization.
     */
    protected function _construct()
    {
        $this->_init('hycubecompleteplus_autosuggest/batches', 'id');
    }
}
