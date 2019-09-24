<?php

namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\BakeryRepository;
use Notorious\Shugar\Models\CakeRepository;
use Notorious\Shugar\Models\CheesecakeRepository;
use Notorious\Shugar\Models\PieRepository;

class ShopController extends Controller
{

    private $сheesecakeRepository;
    private $cakeRepository;
    private $bakeryRepository;
    private $pieRepository;
    public function __construct()
    {
        $this->сheesecakeRepository = new CheesecakeRepository();
        $this->cakeRepository = new CakeRepository();
        $this->bakeryRepository = new BakeryRepository();
        $this->pieRepository = new PieRepository();
    }

    public function ShowAction()
    {
        $content = 'show.php';
        $template = 'template.php';
        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $data = [
            'title' => 'Главная',
            'cakes' => $cakes,
            'pies' => $pies
        ];
        echo $this->renderPage($content, $template, $data);

    }
    public function ShowPieAction()
    {
        $content = 'show.php';
        $template = 'template.php';
        $pies = $this->pieRepository->getAll();
        $data = [
            'title' => 'Главная',
            'pies' => $pies
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