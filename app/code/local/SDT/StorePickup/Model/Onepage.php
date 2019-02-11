<?php

class SDT_StorePickup_Model_Onepage extends Mage_Checkout_Model_Type_Onepage
{
    public function saveShippingMethod($shippingMethod)
    {
        if (empty($shippingMethod)) {
            return array('error' => -1, 'message' => Mage::helper('checkout')->__('Invalid shipping method.'));
        }
        $rate = $this->getQuote()->getShippingAddress()->getShippingRateByCode($shippingMethod);
        if (!$rate) {
            return array('error' => -1, 'message' => Mage::helper('checkout')->__('Invalid shipping method.'));
        }
        $address = $this->getQuote()->getShippingAddress();
        $address->setShippingMethod($shippingMethod);
        if($shippingMethod == SDT_StorePickup_Model_Pickup::SHIPPING_METHOD_CODE) {
            $address->setStorePickup(Mage::app()->getRequest()->getPost('store_pickup', null));
        }

        $this->getCheckout()
            ->setStepData('shipping_method', 'complete', true)
            ->setStepData('payment', 'allow', true);

        return array();
    }
}
