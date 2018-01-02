<?php

namespace Lua\Commission\Model\Customer\Grid;

class Severity implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Lua\Commission\Model\Customer::getSeveritiesOptionArray();
    }
}
