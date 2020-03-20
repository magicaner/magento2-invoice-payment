/**
 * @copyright Copyright (c) Misha Medzhytov <mdg12v@gmail.com>, All rights reserved.
 */
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'mdg_invoice',
                component: 'Mdg_InvoicePayment/js/view/payment/method-renderer/invoice-method'
            },
            // other payment method renderers if required
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
