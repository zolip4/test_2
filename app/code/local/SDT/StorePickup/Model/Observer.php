<?php
Class SDT_StorePickup_Model_Observer extends Varien_Event_Observer
{
    public function setSorePickup(Varien_Event_Observer $store)
    {
        $event = $store->getEvent()->getQuoteAddress();

        if (!is_null(Mage::app()->getRequest()->getPost('store_pickup'))) {
            $event->setStorePickup(Mage::app()->getRequest()->getPost('store_pickup'));
        }
    }
}
