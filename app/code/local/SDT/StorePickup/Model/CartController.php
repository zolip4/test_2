<?php

class SDT_StorePickup_Model_CartController extends Mage_Core_Controller_Front_Action
{
    public function estimateUpdatePostAction()
    {
        $code = (string) $this->getRequest()->getParam('estimate_method');

            $address = $this->_getQuote()->getShippingAddress();
            $address->setShippingMethod($code);
            if($code == SDT_StorePickup_Model_Pickup::SHIPPING_METHOD_CODE) {
                $address->setStorePickup($this->getRequest()->getParam('store_pickup', null));
            }
            $address->save();
        }
        $this-> goBack();
    }
}
