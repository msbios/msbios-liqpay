<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\LiqPay\Form;

use Zend\Form\Element\Hidden;
use Zend\Form\Form;

/**
 * Class CnbForm
 * @package MSBios\LiqPay\Form
 */
class CnbForm extends Form
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