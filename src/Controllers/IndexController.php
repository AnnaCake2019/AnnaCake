<?php


namespace Notorious\Shugar\Controllers;


use Notorious\Shugar\Controllers\CartController;



class IndexController extends CartController
{




    public function __construct()
    {


    }


    public function indexAction()
    {
        $cartController = new CartController;
        $cartController->__construct();
        $cartController->showAction();

    }

    public function aboutAction(){

        $cartController = new CartController;
        $cartController->__construct();     
        $cartController->showAboutAction();

    }
}