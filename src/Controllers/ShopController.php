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
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees
        ];
        echo $this->renderPage($content, $template, $data);

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