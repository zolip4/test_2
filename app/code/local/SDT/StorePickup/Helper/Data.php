<?php
class SDT_StorePickup_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getStorePickups($rate) {
        return unserialize(Mage::getStoreConfig('carriers' . '/' . $rate->getCarrier() .  '/' . 'stores'));
    }
}