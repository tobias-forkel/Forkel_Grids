<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

 class Forkel_Grids_Block_Dashboard_Grid extends Mage_Adminhtml_Block_Widget_Grid
 {

    /**
     * Setting default for every grid on dashboard
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('forkel_grids/dashboard_grid.phtml');
        $this->setDefaultLimit(5);
    }
 }