<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */


class Forkel_Grids_Block_Adminhtml_Dashboard_Custom_Renderer_Shortener extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Truncates a string at the specified length.
     * Append " ..." if string is longer then the specified length.
     *
     * @param Varien_Object $object
     *
     * @return string
     */
    public function render(Varien_Object $object)
    {
        $description = strtok(wordwrap($object->getDescription(), 30, ' ...\n'), '\n');

        return $description;
    }
}