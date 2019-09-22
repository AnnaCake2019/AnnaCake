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
    public function ShowOneAction($id)
    {
        $content = 'showOne.php';
        $template = 'template.php';
        $cake = $this->cakeRepository->getById($id);
        $data = [
            'cake' => $cake
        ];
        echo parent::renderPage($content, $template, $data);
    }
}