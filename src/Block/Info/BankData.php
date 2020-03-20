<?php
/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */
namespace Mdg\InvoicePayment\Block\Info;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

/**
 * Class Invoice
 * @package Mdg\InvoicePayment\Block\Info
 */
class BankData extends \Magento\Payment\Block\Info
{
    /**
     * @var string
     */
    protected $_payableTo;

    /**
     * @var string
     */
    protected $_mailingAddress;

    /**
     * @var string
     */
    protected $_template = 'Mdg_InvoicePayment::info/bank_data.phtml';

    /**
     * Order constructor.
     * @param Registry $registry
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Registry $registry,
        Template\Context $context, array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->registry = $registry;
    }

    /**
     * @return \Magento\Sales\Model\Order
     */
    public function getOrder()
    {
        return $this->registry->registry('current_order');
    }

    /**
     * @return \Magento\Sales\Model\Order
     */
    public function getInvoice()
    {
        return $this->registry->registry('current_invoice');
    }
}
