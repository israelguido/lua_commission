<?php

namespace Lua\Commission\Model\Ticket\Grid;

class Status implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Lua\Commission\Model\Customer::getStatusesOptionArray();
    }
}
