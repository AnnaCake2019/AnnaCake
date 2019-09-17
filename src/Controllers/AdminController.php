<?php


namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;

class AdminController extends Controller
{
    public function StartAction()
    {
    $content = 'Admin.php';
    $template = 'AdminStart.php';
    $data = [
        'title' => 'Главная'
    ];
    echo $this->renderPage($content, $template, $data);

}
    public function CakeAction()
    {
        $content = 'AdmitCake.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }

    public function CheesecakeAction()
    {
        $content = 'AdminCheesecake.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }

    public function PieAction()
    {
        $content = 'AdminPie.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }

    public function BakeryAction()
    {
        $content = 'AdminBakery.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
    public function BaskedAction()
    {
        $content = 'AdminBasked.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
    public function CallAction()
    {
        $content = 'AdminCall.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
}