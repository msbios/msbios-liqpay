<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\LiqPay;

use Zend\Form\Element\Hidden;
use Zend\Form\Form as DefaultForm;

/**
 * Class Form
 * @package MSBios\LiqPay
 */
class Form extends DefaultForm
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Hidden::class,
            'name' => 'data'
        ])->add([
            'type' => Hidden::class,
            'name' => 'signature'
        ]);
    }

}