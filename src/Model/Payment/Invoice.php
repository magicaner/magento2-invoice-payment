<?php
/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */

namespace Mdg\InvoicePayment\Model\Payment;

use Magento\Payment\Model\InfoInterface;
use Magento\Payment\Model\Method\AbstractMethod;

/**
 * Invoice payment method model
 */
class Invoice extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_INVOICE_CODE = 'mdg_invoice';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_INVOICE_CODE;

    /**
     * Invoice payment block paths
     *
     * @var string
     */
    protected $_formBlockType = \Mdg\InvoicePayment\Block\Form\Invoice::class;

    /**
     * Info block path
     *
     * @var string
     */
    protected $_infoBlockType = \Mdg\InvoicePayment\Block\Info\Invoice::class;

    /**
     * Info block path
     *
     * @var string
     */
    protected $_infoBankDataType = \Mdg\InvoicePayment\Block\Info\BankData::class;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * @var bool
     */
    protected $_canOrder = true;

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }

    /**
     * @param InfoInterface $payment
     * @param float $amount
     * @return $this|AbstractMethod
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function order(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        if (!$this->canOrder()) {
            throw new \Magento\Framework\Exception\LocalizedException(__('The order action is not available.'));
        }
        // generate pending invoice
        /*$order = $payment->getOrder();
        $invoice = $order->prepareInvoice();
        $invoice->setState(\Magento\Sales\Model\Order\Invoice::STATE_OPEN);
        $order->addRelatedObject($invoice);*/

        return $this;
    }


    /**
     * Retrieve block type for bank data
     *
     * @return string
     */
    public function getInfoBankDataBlockType()
    {
        return $this->_infoBankDataType;
    }
}