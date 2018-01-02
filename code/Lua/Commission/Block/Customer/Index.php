<?php
/**
 * Copyright © Lua.NET. All rights reserved.
 * See COPYING.txt for license details.
 * By iguido@lua.net (Israel Guido)
 */


namespace Lua\Commission\Block\Customer {

    class Index extends \Magento\Framework\View\Element\Template
    {
        /**
         * @var \Magento\Framework\Stdlib\DateTime
         */
        protected $dateTime;

        /**
         * @var \Magento\Customer\Model\Session
         */
        protected $customerSession;

        /**
         * @var \Foggyline\Helpdesk\Model\TicketFactory
         */
        protected $ticketFactory;

        /**
         * @param \Magento\Framework\View\Element\Template\Context $context
         * @param array $data
         */
        public function __construct(
            \Magento\Framework\View\Element\Template\Context $context,
            \Magento\Framework\Stdlib\DateTime $dateTime,
            \Magento\Customer\Model\Session $customerSession,
            \Lua\Commission\Model\CustomerFactory $ticketFactory,
            array $data = []
        )
        {
            $this->dateTime = $dateTime;
            $this->customerSession = $customerSession;
            $this->ticketFactory = $ticketFactory;
            parent::__construct($context, $data);
        }


        public function getTickets()
        {
            return $this->ticketFactory
                ->create()
                ->getCollection()
                ->addFieldToFilter('customer_id', $this->customerSession->getCustomerId());
        }

        public function getSeverities()
        {
            return \Lua\Commission\Model\Customer::getSeveritiesOptionArray();
        }
    }
}
