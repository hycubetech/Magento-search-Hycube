<?php
/**
 * InstantSearchPlus (Autosuggest).
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Mage
 *
 * @copyright  Copyright (c) 2014 Fast Simon (http://www.instantsearchplus.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$helper = Mage::helper('hycubecompleteplus_autosuggest');

Mage::log(__FILE__.' triggered', null, 'hycubecomplete.log', true);

//getting site owner email
$storeMail = $helper->getConfigDataByFullPath('trans_email/ident_general/email');
Mage::log($storeMail, null, 'hycubecomplete.log');
Mage::getModel('core/config')->saveConfig('hycubecompleteplus/config/store_email', $storeMail);

Mage::getModel('core/config')->saveConfig('hycubecompleteplus/config/enabled', 1);
