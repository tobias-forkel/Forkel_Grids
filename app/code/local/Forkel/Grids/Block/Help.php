<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Help extends Mage_Core_Block_Template
{
    public function getDate()
    {
        return Mage::getModel('core/date')->date('Y-m-d H:i:s');
    }
}