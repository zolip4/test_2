<?php
class SDT_StorePickup_Block_Stores extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function _prepareToRender()
    {
        $this->addColumn('store_pickup', array(
            'label' => Mage::helper('sdt_storepickup')->__('Store Pickup'),
            'style' => 'width:100px',
        ));

        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('sdt_storepickup')->__('Add');
    }
}