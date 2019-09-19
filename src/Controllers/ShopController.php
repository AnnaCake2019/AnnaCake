<?php

namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CakeRepository;

class ShopController extends Controller
{

    private $cakeRepository;
    public function __construct()
    {
        $this->cakeRepository = new CakeRepository();
    }

    public function ShowAction()
    {
        $content = 'show.php';
        $template = 'template.php';
        $cakes = $this->cakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'cakes' => $cakes,
        ];
        echo $this->renderPage($content, $template, $data);

    }
}