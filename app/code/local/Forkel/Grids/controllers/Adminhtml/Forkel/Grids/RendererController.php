<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Grids_Adminhtml_Forkel_Grids_RendererController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Initialize action
     *
     * @return Mage_Adminhtml_Controller_Action
     */
    protected function _initAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('forkel/grids_basic');

        return $this;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction()
    {
        $this->_title($this->__('Forkel Grids'))->_title($this->__('Renderer'));

        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Edit action
     *
     * Load data to the edit form
     *
     * @return void
     */
    public function editAction()
    {
        $id  = $this->getRequest()->getParam('id');
        $model = Mage::getSingleton(Forkel_Grids_Helper_Data::MODEL_DEMO);

        if ($id)
        {
            $model->load($id);

            if (!$model->getId())
            {
                Mage::getSingleton('adminhtml/session')->addError($this->__('The requested entry no longer exists.'));
                $this->_redirect('*/*/');

                return;
            }
        }

        $this->_title($model->getId() ? $model->getName() : $this->__('New Entry'));

        Mage::register(Forkel_Grids_Helper_Data::MODULE_KEY, $model);

        $this->_initAction()
            ->_addContent($this->getLayout()->createBlock('forkel_grids/adminhtml_renderer_edit')->setData('action', $this->getUrl('*/*/save')))
            ->renderLayout();
    }

    /**
     * Save action
     *
     * Save or update model.
     *
     * @return void
     */
    public function saveAction()
    {
        if ($postData = $this->getRequest()->getPost())
        {
            try
            {
                $model = Mage::getSingleton(Forkel_Grids_Helper_Data::MODEL_DEMO);

                $model->setData($postData);
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The entry with ID ( %s ) has been saved.', $model->getId()));
                $this->_redirect('*/*/');

                return;
            }

            catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }

            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('An error occurred while saving this entry.'));
            }
        }
    }

    /**
     * Delete action
     *
     * Delete one item.
     *
     * @return void
     */
    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');

        if (!filter_var($id, FILTER_VALIDATE_INT))
        {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select one entry.'));
        }
        else
        {
            try
            {
                $model = Mage::getSingleton(Forkel_Grids_Helper_Data::MODEL_DEMO);
                $model->load($id)->delete();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The selected entry was successfully deleted.'));
            }

            catch (Mage_Core_Exception $e)
            {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }

            catch (Exception $e)
            {
                Mage::getSingleton('adminhtml/session')->addError($this->__('An error occurred while deletion.'));
            }
        }

        $this->_redirect('*/*/index');
    }

    /**
     * Check the permissions for current backend user
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('forkel/grids_renderer');
    }

    /**
     * New action
     *
     * Redirect to action "edit"
     *
     * @return void
     */
    public function newAction()
    {
        $this->_forward('edit');
    }
}