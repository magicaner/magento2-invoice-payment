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
class Invoice extends \Magento\Payment\Block\Info
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
    protected $_template = 'Mdg_InvoicePayment::info/invoice.phtml';

    /**
     * @var Registry
     */
    protected $registry;
    /**
     * @var Magento\Framework\Url
     */
    private $urlHelper;

    /**
     * Order constructor.
     * @param Registry $registry
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Registry $registry,
        \Magento\Framework\Url $urlHelper,
        Template\Context $context, array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->registry = $registry;
        $this->urlHelper = $urlHelper;
    }

    public function getFrontendUrl($routePath, $routeParams)
    {
        return $this->urlHelper->getUrl($routePath, $routeParams);
    }

    /**
     * @return \Magento\Sales\Model\Order
     */
    public function getOrder()
    {
        return $this->getData('order');
    }

    /**
     * @return \Magento\Sales\Model\Order\Invoice
     */
    public function getInvoice()
    {
        return $this->getData('invoice');
    }


}
