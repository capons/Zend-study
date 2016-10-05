<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MainController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new ViewModel(array(
            'message' => 'Hello world',
        ));
        $view->setTemplate('application/test/test.php');
        return $view;
    }
}
