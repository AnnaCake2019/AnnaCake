<?php


namespace Notorious\Shugar\Controllers;

use Notorious\Shugar\Core\Controller;

class ShopController extends Controller
{
    public function ShowAction()
    {
        $content = 'show.php';
        $template = 'template.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
}