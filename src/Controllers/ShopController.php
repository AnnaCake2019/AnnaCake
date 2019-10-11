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


    public function ShowCakeAction($id)
    {
        $content = 'showCake.php';
        $template = 'template.php';
        $cake = $this->cakeRepository->getById($id);
        $data = [
            'cake' => $cake
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function ShowPieAction($id)
    {
        $content = 'ShowPie.php';
        $template = 'template.php';
        $pie = $this->pieRepository->getById($id);
        $data = [
            'pie' => $pie
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function ShowBakeryAction($id)
    {
        $content = 'ShowBakery.php';
        $template = 'template.php';
        $bakery = $this->bakeryRepository->getById($id);
        $data = [
            'bakery' => $bakery
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function ShowCheesAction($id)
    {
        $content = 'ShowChees.php';
        $template = 'template.php';
        $twoChee = $this->сheesecakeRepository->getById($id);
        $data = [
            'twoChee' => $twoChee
        ];
        echo parent::renderPage($content, $template, $data);
    }

}