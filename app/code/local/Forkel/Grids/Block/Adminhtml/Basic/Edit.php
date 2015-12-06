<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Basic_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_blockGroup = Forkel_Grids_Helper_Data::MODULE_KEY;
        $this->_controller = 'adminhtml_basic';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Data'));
    }

    /**
     * Get header text
     *
     * Check if global id exists. Return text for "edit" or "new".
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry(Forkel_Grids_Helper_Data::MODULE_KEY)->getId())
        {
            return $this->__('Forkel Grids > Basic > Edit');
        }

        return $this->__('Forkel Grids > Basic > New');
    }
}