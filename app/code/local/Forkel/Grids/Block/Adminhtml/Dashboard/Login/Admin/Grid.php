<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Dashboard_Login_Admin_Grid extends Mage_Adminhtml_Block_Dashboard_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('adminLoginsGrid');
        $this->setDefaultSort('logdate');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Get collection class
     *
     * Return collection path as a string.
     *
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'admin/user_collection';
    }

    /**
     * Prepare collection
     *
     * Extend collection with joins to other resources.
     *
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('firstname', array(
            'header'    => $this->__('Firstname'),
            'sortable'  => false,
            'index'     => 'firstname'
        ));

        $this->addColumn('lastname', array(
            'header'    => $this->__('Lastname'),
            'sortable'  => false,
            'index'     => 'lastname'
        ));

        $this->addColumn('logdate', array(
            'header'    => $this->__('Date'),
            'type'      => 'datetime',
            'sortable'  => false,
            'index'     => 'logdate'
        ));

        $this->setFilterVisibility(false);
        $this->setPagerVisibility(false);

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/permissions_user/edit/', array('user_id' => $row->getUserId()));
    }
}
