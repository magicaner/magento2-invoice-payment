<?php
/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */
namespace Mdg\InvoicePayment\Model\Config\Source;

/**
 * Class CompanyType
 * @package Mdg\InvoicePayment\Model\Config\Source
 */
class CompanyType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array|void
     */
    public function toOptionArray()
    {
        $options = [
            ['value' => '', 'label' => __('-- None --')],
            ['value' => 'OOO', 'label' => __('OOO')],
            ['value' => 'ZAO', 'label' => __('ZAO')],
            ['value' => 'OAO', 'label' => __('OAO')],
        ];

        return $options;
    }
}
