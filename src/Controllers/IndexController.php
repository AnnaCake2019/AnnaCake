<?php


namespace Notorious\Shugar\Controllers;


use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\FrontBakeryRepository;
use Notorious\Shugar\Models\FrontCakeRepository;
use Notorious\Shugar\Models\FrontCheesecakeRepository;
use Notorious\Shugar\Models\FrontPieRepository;

class IndexController extends Controller
{

    private $frontPieRepository;
    private $frontCheesecakeRepository;
    private $frontBakeryRepository;
    private $frontCakeRepository;

    public function __construct()
    {
        $this->frontCakeRepository = new FrontCakeRepository();
        $this->frontCheesecakeRepository = new FrontCheesecakeRepository();
        $this->frontPieRepository = new FrontPieRepository();
        $this->frontBakeryRepository = new FrontBakeryRepository();
    }

    public function indexAction()
    {
        $fcakes = $this->frontCakeRepository->getAll();
        $fcheesecakes = $this->frontCheesecakeRepository->getAll();
        $fpies = $this->frontPieRepository->getAll();
        $fbakerys = $this->frontBakeryRepository->getAll();
        $content = 'main.php';
        $template = 'template.php';
        $data = [
            'title' => 'Главная',
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys

        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function aboutAction(){
        $content = 'aboutUS.php';
        $template = 'template.php';
        $data = [
            'title' => 'Главная'
        ];
        echo $this->renderPage($content, $template, $data);
    }
}