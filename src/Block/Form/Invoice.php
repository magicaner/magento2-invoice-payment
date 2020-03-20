<?php
/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */
namespace Mdg\InvoicePayment\Block\Form;

use Magento\Framework\View\Element\Template;

/**
 * Class Invoice
 * @package Mdg\InvoicePayment\Block\Form
 */
class Invoice extends AbstractInstruction
{
    /**
     * Bank transfer template
     *
     * @var string
     */
    protected $_template = 'Mdg_InvoicePayment::form/invoice.phtml';
    /**
     * @var \Magento\Framework\Url
     */
    private $urlHelper;

    public function __construct(
        \Magento\Framework\Url $urlHelper,
        Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->urlHelper = $urlHelper;
    }

    public function getFrontendUrl($routePath, $routeParams)
    {
        return $this->urlHelper->getUrl($routePath, $routeParams);
    }

}
