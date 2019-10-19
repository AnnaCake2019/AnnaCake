<?php


namespace Notorious\Shugar\Controllers;


use Notorious\Shugar\Controllers\CartController;



class IndexController extends CartController
{




    public function __construct()
    {


    }


    public function IndexAction()
    {
        $cartController = new CartController;
        $cartController->__construct();
        $cartController->showAction();

    }

    public function AboutAction(){

        $cartController = new CartController;
        $cartController->__construct();     
        $cartController->showAboutAction();

    }

    public function ContactAction(){
        $cartController = new CartController;
        $cartController->__construct();     
        $cartController->showContactAction();
    }
}