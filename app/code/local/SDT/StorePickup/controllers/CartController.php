<?php

require_once Mage::getModuleDir('controllers', 'Mage_Checkout') . DS . 'CartController.php';
class SDT_StorePickup_CartController extends Mage_Checkout_CartController
{
    public function estimateUpdatePostAction()
    {
        $code = (string) $this->getRequest()->getParam('estimate_method');
        if (!empty($code)) {
            $address = $this->_getQuote()->getShippingAddress();
            $address->setShippingMethod($code);
            if($code == SDT_StorePickup_Model_Pickup::SHIPPING_METHOD_CODE) {
                $address->setStorePickup($this->getRequest()->getParam('store_pickup', null));
            }
            $address->save();
        }
        $this->_goBack();
    }
}

