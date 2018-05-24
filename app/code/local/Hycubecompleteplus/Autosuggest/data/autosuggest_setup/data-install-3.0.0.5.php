<?php

$batchCollection = Mage::getModel('hycubecompleteplus_autosuggest/batches')
    ->getCollection();

foreach ($batchCollection as $batch) {
    $currentTime = $batch->getUpdateDate();
    $batch->setUpdateDate($currentTime)->save();
}
