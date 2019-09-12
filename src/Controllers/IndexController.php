<?php


namespace Notorious\Shugar\Controllers;


use Notorious\Shugar\Core\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $content = 'main.php';
        $template = 'template.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);

    }
}