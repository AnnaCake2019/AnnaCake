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
}