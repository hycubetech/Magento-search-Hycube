<?php
/**
 * Hycubecompleteplus_Autosuggest_Block_Adminhtml_Button
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category Mage
 *
 * @package   Instantsearchplus
 * @author    Fast Simon <info@instantsearchplus.com>
 * @copyright 2014 Fast Simon (http://www.instantsearchplus.com)
 * @license   Open Software License (OSL 3.0)*
 * @link      http://opensource.org/licenses/osl-3.0.php
 */
class Hycubecompleteplus_Autosuggest_Block_Adminhtml_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Set Template.
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('hycubecompleteplus/system/config/button.phtml');
    }

    /**
     * Return element html.
     *
     * @param Varien_Data_Form_Element_Abstract $element 
     *
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);

        return $this->_toHtml();
    }

    /**
     * Returns uuid
     * 
     * @return mixed
     */
    public function getUUID()
    {
        $config = Mage::getModel('hycubecompleteplus_autosuggest/config');

        return $config->getUUID();
    }

    /**
     * Return ajax url for button.
     *
     * @return string
     */
    public function getAjaxCheckUrl()
    {
        return Mage::helper('adminhtml')
            ->getUrl('hycubecompleteplus/products/updateemail');
    }

    /**
     * Generate button html.
     *
     * @return string
     */
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')

            ->setData(
                array(
                'id' => 'hycubecompleteplus_button',
                'label' => $this->helper('adminhtml')->__('Update'),
                'onclick' => 'javascript:updatehycubecomplete(); return false;',
                )
            );

        return $button->toHtml();
    }
}
