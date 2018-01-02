<?php

namespace Lua\Commission\Controller\Adminhtml\Ticket;

class Grid extends \Lua\Commission\Controller\Adminhtml\Customer
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
