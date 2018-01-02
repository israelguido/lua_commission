<?php
/**
 * Copyright © Lua.NET. All rights reserved.
 * See COPYING.txt for license details.
 * By iguido@lua.net (Israel Guido)
 */

namespace Lua\Commission\Model;

class Customer extends \Magento\Framework\Model\AbstractModel {


    public function _construct()
    {
        $this->_init('Lua\Commission\Model\ResourceModel\Customer');
    }

}