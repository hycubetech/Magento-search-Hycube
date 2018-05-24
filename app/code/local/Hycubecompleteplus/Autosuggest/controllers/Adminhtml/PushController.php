<?php

class Hycubecompleteplus_Autosuggest_Adminhtml_PushController extends Mage_Adminhtml_Controller_Action
{
    public function startpushAction()
    {
        $service = Mage::getModel('hycubecompleteplus_autosuggest/service');
        $service->populatePusher();

        $this->loadLayout();
        $this->renderLayout();
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/config/hycubecompleteplus');
    }
}
