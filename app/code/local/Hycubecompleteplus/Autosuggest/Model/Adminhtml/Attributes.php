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

/**
 * Used in creating options for Yes|No config value selection.
 */
class Hycubecompleteplus_Autosuggest_Model_Adminhtml_Attributes
{
    public $fields = array();

    /**
     * Options getter.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $this->fields = $this->getOptions();

        return $this->fields;
    }

    public function getOptions()
    {
        $entityType = Mage::getModel('catalog/product')->getResource()->getEntityType();
        $entityTypeId = $entityType->getId();
        $attributeInfo = Mage::getResourceModel('eav/entity_attribute_collection')
            ->setEntityTypeFilter($entityTypeId)
            ->setFrontendInputTypeFilter('text')
            ->getData();

        $result = array();
        $result[] = array('value' => '', 'label' => 'Choose an attribute');

        foreach ($attributeInfo as $_key => $_value) {
            if (!isset($_value['is_user_defined']) || $_value['is_user_defined'] != '1') {
                continue;
            }
            if (isset($_value['frontend_label']) && ($_value['frontend_label'] != '')) {
                $result[] = array('value' => $_value['attribute_code'], 'label' => $_value['frontend_label']);
            }
        }

        return $result;
    }
}
