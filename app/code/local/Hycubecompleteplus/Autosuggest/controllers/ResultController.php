<?php

require_once Mage::getModuleDir('controllers', 'Mage_CatalogSearch').DS.'ResultController.php';

class Hycubecompleteplus_Autosuggest_ResultController extends Mage_CatalogSearch_ResultController
{
    public function indexAction()
    {
        try {
            $layered = Mage::getStoreConfig('hycubecompleteplus/config/layered');
        } catch (Exception $e) {
            Mage::log('ResultController::indexAction() exception: '.$e->getMessage(), null, 'hycubecompleteplus.log');
        }
        if (isset($layered) && $layered == 1) {
            $this->loadLayout();
            $this->renderLayout();
        } else {
            parent::indexAction();
        }
    }
}
