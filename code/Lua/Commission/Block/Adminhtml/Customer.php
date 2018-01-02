<?php
/**
 * Copyright © Lua.NET. All rights reserved.
 * See COPYING.txt for license details.
 * By iguido@lua.net (Israel Guido)
 */

namespace Lua\Commission\Block\Adminhtml;

class Customer extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml';
        $this->_blockGroup = 'Lua_Commission';
        $this->_headerText = __('Customer Commission');

        parent::_construct();

        $this->removeButton('add');
    }
}
