<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */


class Forkel_Grids_Block_Adminhtml_Dashboard_Custom_Renderer_Truncate extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Render
     *
     * Truncate text
     *
     * @param Varien_Object $row
     *
     * @return string
     */
    public function render(Varien_Object $row)
    {
        $helper = Mage::helper(Forkel_Grids_Helper_Data::MODULE_KEY);

        return $helper->truncateText($row->getDescription(), 30);
    }
}
