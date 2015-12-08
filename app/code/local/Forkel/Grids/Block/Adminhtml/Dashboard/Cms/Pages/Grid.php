<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Block_Adminhtml_Dashboard_Cms_Pages_Grid extends Mage_Adminhtml_Block_Dashboard_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('cmsPagesGrid');
        $this->setDefaultSort('update_time');
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
        return 'cms/page_collection';
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
        $this->addColumn('title', array(
            'header'    => $this->__('Title'),
            'sortable'  => false,
            'index'     => 'title'
        ));

        $this->addColumn('identifier', array(
            'header'    => $this->__('Identifier'),
            'sortable'  => false,
            'index'     => 'identifier'
        ));

        $this->addColumn('update_time', array(
            'header'    => $this->__('Last Modified'),
            'sortable'  => false,
            'index'     => 'update_time'
        ));

        $this->setFilterVisibility(false);
        $this->setPagerVisibility(false);

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/cms_page/edit', array('page_id' => $row->getPageId()));
    }
}
