<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\LiqPay\Controller;

use MSBios\Application\Controller\IndexController as DefaultIndexController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 * @package MSBios\LiqPay\Controller
 */
class IndexController extends DefaultIndexController
{
    /**
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
            'form' => null
        ]);
    }

}