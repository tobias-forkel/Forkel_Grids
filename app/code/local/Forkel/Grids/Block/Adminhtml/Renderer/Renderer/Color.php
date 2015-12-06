<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */


class Forkel_Grids_Block_Adminhtml_Renderer_Renderer_Color extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Render
     *
     * @param Varien_Object $object
     *
     * @return string
     */
    public function render(Varien_Object $object)
    {
        $name = $object->getName();

        return sprintf('<span style="color:#d00000">%s</span>', $name);
    }
}