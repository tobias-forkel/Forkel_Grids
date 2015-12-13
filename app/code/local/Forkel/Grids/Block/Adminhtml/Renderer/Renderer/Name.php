<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */


class Forkel_Grids_Block_Adminhtml_Renderer_Renderer_Name extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Render
     *
     * Output HTML for cell "Name".
     *
     * @param Varien_Object $row
     *
     * @return string
     */
    public function render(Varien_Object $row)
    {
        return $this->getLayout()->createBlock('forkel_grids/adminhtml_renderer_cell_name')->setRow($row)->toHtml();
    }
}
