<?php

/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\LiqPay;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'service_manager' => [
    ],

    'form_elements' => [
        'factories' => [
            Form\CnbForm::class =>
                InvokableFactory::class
        ]
    ],

    Module::class => [

        /**
         *
         */
        'action' => 'pay',

        /**
         *
         */
        'amount' => '',

        /**
         *
         */
        'currency' => 'UAH',

        /**
         *
         */
        'description' => "",

        /**
         *
         */
        'sandbox' => '1',

        /**
         *
         */
        'version' => '3',

        /**
         *
         */
        'result_url' => ''
    ]

];
