<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\LiqPay\Controller;

use MSBios\Application\Controller\IndexController as DefaultIndexController;
use MSBios\Form\FormElementManagerAwareInterface;
use MSBios\Form\FormElementManagerAwareTrait;
use MSBios\LiqPay\Form;
use Zend\Form\FormInterface;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 * @package MSBios\LiqPay\Controller
 */
class IndexController extends DefaultIndexController implements FormElementManagerAwareInterface
{
    use FormElementManagerAwareTrait;

    /**
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        /** @var FormInterface $form */
        $form = $this->getFormElementManager()->get(Form\CnbForm::class);
        $form->setData([
            'data' => [
                'action' => 'pay',
                'amount' => 'mount',
                'currency' => 'UAH',
                'description' => "Descritpion",
                'sandbox' => '1',
                'version' => '3',
                'result_url' => "some url"
            ]
        ]);
        return new ViewModel([
            'form' => $form
        ]);
    }

}