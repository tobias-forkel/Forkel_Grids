<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */


class Forkel_Grids_Block_Adminhtml_Popup_Renderer_Popup extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Render
     *
     * Output HTML for cell "Popup".
     *
     * @param Varien_Object $row
     *
     * @return string
     */
    public function render(Varien_Object $row)
    {
        return $this->getLayout()->createBlock('forkel_grids/adminhtml_popup_cell_popup')->setRow($row)->toHtml();
    }
}
