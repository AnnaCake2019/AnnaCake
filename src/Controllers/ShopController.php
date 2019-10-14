<?php

namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Controllers\CartController;

class ShopController extends CartController
{


    public function __construct()
    {

    }

    public function ShowAction()
    {
     
        $cartController = new CartController;
        $cartController->__construct();
        $cartController->showShopAction();
      

    }



}