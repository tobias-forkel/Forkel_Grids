<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Helper_Data extends Mage_Core_Helper_Abstract
{
    const MODULE_NAME               = 'Forkel_Grids';
    const MODULE_KEY                = 'forkel_grids';
    const MODEL_BASIC               = 'forkel_grids/basic';
    const MODEL_DEMO                = 'forkel_grids/demo';

    /**
     * Cut the text after a specific number of characters.
     * If $maxlength is not reached, just output the text without modifications.
     *
     * @param string $string Any kind of string.
     * @param integer $maxlength The max length to output.
     *
     * @return string
     */
    public function truncateText($string = '', $maxlength = 10)
    {
        return strtok(wordwrap($string, $maxlength, ' ...\n'), '\n');
    }
}
