<?php
/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */
namespace Mdg\InvoicePayment\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\Escaper;
use Magento\OfflinePayments\Model\Banktransfer;
use Magento\OfflinePayments\Model\Cashondelivery;
use Magento\Payment\Helper\Data as PaymentHelper;
use Mdg\InvoicePayment\Model\Payment\Invoice;

class InstructionsConfigProvider extends \Magento\OfflinePayments\Model\InstructionsConfigProvider
{
    /**
     * @var string[]
     */
    protected $methodCodes = [
        Banktransfer::PAYMENT_METHOD_BANKTRANSFER_CODE,
        Cashondelivery::PAYMENT_METHOD_CASHONDELIVERY_CODE,
        Invoice::PAYMENT_METHOD_INVOICE_CODE
    ];
}