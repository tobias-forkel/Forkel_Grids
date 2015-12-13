<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Dashboard extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();

        $this->_headerText = $this->__('Forkel Grids > Dashboard');
    }

    /**
     * Prepare layout
     *
     * Set child blocks.
     *
     * @return void
     */
    protected function _prepareLayout()
    {
        $this->setChild('cmsPages',
            $this->getLayout()->createBlock('forkel_grids/adminhtml_dashboard_cms_pages_grid')
        );

        $this->setChild('adminLogins',
            $this->getLayout()->createBlock('forkel_grids/adminhtml_dashboard_login_admin_grid')
        );

        $this->setChild('custom',
            $this->getLayout()->createBlock('forkel_grids/adminhtml_dashboard_custom_grid')
        );

        parent::_prepareLayout();
    }

    /**
     * Return header text for block
     *
     * @return string
     */
    public function getHeaderText()
    {
        return $this->_headerText;
    }
}
