<?php
/**
 * Copyright © Lua.NET. All rights reserved.
 * See COPYING.txt for license details.
 * By iguido@lua.net (Israel Guido)
 */

namespace Lua\Commission\Model\ResourceModel\Customer;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

    public function _construct()
    {
        $this->_init(
            'Lua\Commission\Model\Customer',
            'Lua\Commission\Model\ResourceModel\Customer'
        );
    }
}