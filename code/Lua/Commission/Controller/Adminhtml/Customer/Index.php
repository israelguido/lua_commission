<?php

namespace Lua\Commission\Controller\Adminhtml\Customer;

class Index extends \Lua\Commission\Controller\Adminhtml\Customer
{
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->resultForwardFactory->create();
            $resultForward->forward('grid');
            return $resultForward;
        }
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Lua_Commission::customer');
        $resultPage->getConfig()->getTitle()->prepend(__('Customer Commission'));

        $resultPage->addBreadcrumb(__('Commission'), __('Commission'));
        $resultPage->addBreadcrumb(__('Manage Commission'), __('Manage Commission'));

        return $resultPage;
    }
}
