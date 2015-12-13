<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Dashboard_Custom_Grid extends Mage_Adminhtml_Block_Dashboard_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('customGrid');
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
        return 'forkel_grids/demo_collection';
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
        $this->addColumn('name',
            array(
                'header'    => $this->__('Name'),
                'index'     => 'name'
            )
        );

        $this->addColumn('email',
            array(
                'header'    => $this->__('Email'),
                'index'     => 'email'
            )
        );

        $this->addColumn('description',
            array(
                'header'    => $this->__('Description'),
                'width'     =>  '150px',
                'index'     => 'description',
                'renderer'  => 'Forkel_Grids_Block_Adminhtml_Dashboard_Custom_Renderer_Truncate'
            )
        );

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/forkel_grids_basic/edit/', array('id' => $row->getId()));
    }
}

