<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Adminhtml_Forkel_Grids_PopupController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Initialize action
     *
     * @return Mage_Adminhtml_Controller_Action
     */
    protected function _initAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('forkel/grids_popup');

        return $this;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction()
    {
        $this->_title($this->__('Forkel Grids'))->_title($this->__('Popup'));

        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Popup action
     *
     * @return void
     */
    public function popupAction()
    {
        $this->_title($this->__('Forkel Grids'))->_title($this->__('Popup'));
        $this->loadLayout();

        echo $this->__('Do something in popupAction().');
    }

    /**
     * Check the permissions for current backend user
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin/forkel/grids/popup');
    }
}
