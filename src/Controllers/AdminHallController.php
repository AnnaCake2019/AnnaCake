<?php


namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;

class AdminHallController extends Controller
{
    public function MainAction()
    {
        $content = 'AdmitMain.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
}