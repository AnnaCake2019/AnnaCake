<?php

namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CakeRepository;


class AdminController extends Controller
{
    private $cakeRepository;
    public function __construct()
    {
        $this->cakeRepository = new CakeRepository();
    }    

    public function AccountAction()
    {
    $content = 'AdminAccount.php';
    $template = 'AdminMenu.php';
    $data = [
        'title' => 'Главная'
    ];
    echo $this->renderPage($content, $template, $data);
    }

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
        // if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        //     header('Location: /Admin/Start');
        // } else
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'price' => $post['price'],
                'img' => $files['img']['name']
            ];
            if ($this->cakeRepository->save($params) === false) {
                $addResult = 'Торт не был добавлен';
            } else {
                $addResult = 'Торт добавлен';
            }
            }
        $content = 'AdmitCake.php';
        $template = 'AdminMenu.php';
        $cakes = $this->cakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cakes' => $cakes,
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function DeleteCakeAction($id)
    {
        $cake = $this->cakeRepository->getById($id);
        $params = [
            // 'table_name' => 'Cakes',
            'id' => $cake['id']
        ];
        $this->cakeRepository->deleteCake($params);

        $content = 'AdmitCake.php';
        $template = 'AdminMenu.php';
        $cakes = $this->cakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cakes' => $cakes,
        ];
        echo parent::renderPage($content, $template, $data);
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

    public function showAction($id) {
        session_start();
        $cake = $this->cakeRepository->getById($id);
        $data = [
            'title'=>$cake['title'],
            'cake' => $cake,
            // 'auth'=> isset($_SESSION['name'])
        ];
        echo parent::renderPage('cake.php',   //название файла, который будет открываться при нажатии на конкретный тортик
            'template.php', $data);
    }    
}