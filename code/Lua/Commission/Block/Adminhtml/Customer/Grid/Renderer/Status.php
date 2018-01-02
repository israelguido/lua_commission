<?php
/**
 * Copyright © Lua.NET. All rights reserved.
 * See COPYING.txt for license details.
 * By iguido@lua.net (Israel Guido)
 */

namespace Lua\Commission\Block\Adminhtml\Customer\Grid\Renderer;

class Status extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    protected $ticketFactory;

    public function __construct(
        \Magento\Backend\Block\Context $context,
        \Lua\Commission\Model\CustomerFactory $ticketFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->ticketFactory = $ticketFactory;
    }

    public function render(\Magento\Framework\DataObject $row)
    {
        $ticket = $this->ticketFactory->create()->load($row->getId());

        if ($ticket && $ticket->getId()) {
            return $ticket->getStatusAsLabel();
        }

        return '';
    }
}
