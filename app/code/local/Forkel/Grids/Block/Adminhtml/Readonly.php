<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Readonly extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = Forkel_Grids_Helper_Data::MODULE_KEY;
        $this->_controller = 'adminhtml_readonly';
        $this->_headerText = $this->__('Forkel Grids > Readonly');

        parent::__construct();

        $this->_removeButton('add');
    }
}
