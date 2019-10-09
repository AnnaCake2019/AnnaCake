<?php
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\AdminRepository;
use Notorious\Shugar\Models\BakeryRepository;
use Notorious\Shugar\Models\CakeRepository;
use Notorious\Shugar\Models\CheesecakeRepository;
use Notorious\Shugar\Models\FrontBakeryRepository;
use Notorious\Shugar\Models\FrontCakeRepository;
use Notorious\Shugar\Models\FrontCheesecakeRepository;
use Notorious\Shugar\Models\FrontPieRepository;
use Notorious\Shugar\Models\PieRepository;


class AdminController extends Controller
{
    private $adminRepository;
    private $сheesecakeRepository;
    private $cakeRepository;
    private $bakeryRepository;
    private $pieRepository;
    private $frontPieRepository;
    private $frontCheesecakeRepository;
    private $frontBakeryRepository;
    private $frontCakeRepository;
    public function __construct()
    {
        $this->adminRepository = new AdminRepository();
        $this->сheesecakeRepository = new CheesecakeRepository();
        $this->cakeRepository = new CakeRepository();
        $this->bakeryRepository = new BakeryRepository();
        $this->pieRepository = new PieRepository();
        $this->frontBakeryRepository = new FrontBakeryRepository();
        $this->frontCakeRepository = new  FrontCakeRepository();
        $this->frontCheesecakeRepository = new FrontCheesecakeRepository();
        $this->frontPieRepository = new FrontPieRepository();
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

    public function AuthAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $post = $_POST;
            if (!$this->adminRepository->isAuth($post)){
                echo "Ошибка в логине или пароле";
                return false;
            }
            header('Location: /Admin/Account');
        }
    }


//    Start Front Picture

    public function FrontCakeAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";
            $params = [
                'img' => $name_hash
            ];
            if ($this->frontCakeRepository->save($params) === false) {
                $addResult = 'Картинка не изменена';
            } else {
                move_uploaded_file($tmp_name, "img/Front/$name_hash");
                $addResult = 'Изменили';
            }

        }
            $frontCakes = $this->frontCakeRepository->getAll();
            $content = 'AdminAccount.php';
            $template = 'AdminMenu.php';
            $data = [
                'title' => 'Главная',
                'addResult' => $addResult,
                'frontCakes' => $frontCakes
            ];
        header("Location: /Admin/Account");
        echo $this->renderPage($content, $template, $data);

    }

    public function DeleteFrontCakesAction($id)
    {
        $this->frontCakeRepository->deleteCake($id);
        header("Location: /Admin/Account");

    }

    public function FrontCheesecakeAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";
            $params = [
                'img' => $name_hash
            ];
            if ($this->frontCheesecakeRepository->save($params) === false) {
                $addResult = 'Картинка не изменена';
            } else {
                move_uploaded_file($tmp_name, "img/Front/$name_hash");
                $addResult = 'Изменили';
            }

        }
        $frontCheesecakes = $this->frontCheesecakeRepository->getAll();
        $content = 'AdminAccount.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'frontCheesecakes' => $frontCheesecakes
        ];
        header("Location: /Admin/Account");
        echo $this->renderPage($content, $template, $data);

    }


    public function DeleteFrontCheesecakesAction($id)
    {
        $this->frontCheesecakeRepository->deleteCake($id);
        header("Location: /Admin/Account");

    }

    public function FrontPieAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";
            $params = [
                'img' => $name_hash
            ];
            if ($this->frontPieRepository->save($params) === false) {
                $addResult = 'Картинка не изменена';
            } else {
                move_uploaded_file($tmp_name, "img/Front/$name_hash");
                $addResult = 'Изменили';
            }

        }
        $frontPies = $this->frontPieRepository->getAll();
        $content = 'AdminAccount.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'frontPies' => $frontPies
        ];
        header("Location: /Admin/Account");
        echo $this->renderPage($content, $template, $data);

    }

    public function DeleteFrontPiesAction($id)
    {
        $this->frontPieRepository->deleteCake($id);
        header("Location: /Admin/Account");

    }

    public function FrontBakeryAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";
            $params = [
                'img' => $name_hash
            ];
            if ($this->frontBakeryRepository->save($params) === false) {
                $addResult = 'Картинка не изменена';
            } else {
                move_uploaded_file($tmp_name, "img/Front/$name_hash");
                $addResult = 'Изменили';
            }

        }
        $frontBakerys = $this->frontBakeryRepository->getAll();
        $content = 'AdminAccount.php';
        $template = 'AdminMenu.php';
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'frontBakerys' => $frontBakerys
        ];
        header("Location: /Admin/Account");
        echo $this->renderPage($content, $template, $data);

    }

    public function DeleteFrontBakeryAction($id)
    {
        $this->frontBakeryRepository->deleteCake($id);
        header("Location: /Admin/Account");

    }


    public function AccountAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        $content = 'AdminAccount.php';
        $template = 'AdminMenu.php';
        $frontCakes = $this->frontCakeRepository->getAll();
        $frontCheesecakes = $this->frontCheesecakeRepository->getAll();
        $frontPies = $this->frontPieRepository->getAll();
        $frontBakerys = $this->frontBakeryRepository->getAll();
        $data = [
            'title' => 'Главная',
            'email' => $_SESSION['email'],
            'auth' => isset($_SESSION['email']),
            'frontCakes' => $frontCakes,
            'frontCheesecakes' => $frontCheesecakes,
            'frontPies' => $frontPies,
            'frontBakerys' => $frontBakerys
        ];
        echo $this->renderPage($content, $template, $data);
    }

//    End Front Picture




//    Cake

    public function CakeAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        // if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        //     header('Location: /Admin/Start');
        // } else
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $post = $_POST;
                $files = $_FILES;
                $tmp_name = $_FILES['img']['tmp_name'];
                $name = $_FILES['img']['name'];
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $name_hash = md5($name) . ".$extension";

                $params = [
                    'title' => $post['title'],
                    'description' => $post['description'],
                    'price' => $post['price'],
                    'quantity' => $post['quantity'],
                    'img' => $name_hash
                ];
                    if ($this->cakeRepository->save($params) === false) {
                        $addResult = 'Торт не был добавлен';
                    } else {
                        move_uploaded_file($tmp_name, "img/Cake/$name_hash");
                        $addResult = 'Торт добавлен';
                    }
                }
        $content = 'AdmitCake.php';
        $template = 'AdminMenu.php';
        $cakes = $this->cakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cakes' => $cakes
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function DeleteCakeAction($id)
    {
        $cake = $this->cakeRepository->getById($id);

        $params = [
            'id' => $cake['id']
        ];
        $this->cakeRepository->deleteCake($params);

        $content = 'AdmitCake.php';
        $template = 'AdminMenu.php';
        $cakes = $this->cakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cakes' => $cakes
        ];
        echo parent::renderPage($content, $template, $data);
    }


//     Cheesecake


    public function CheesecakeAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";

            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'price' => $post['price'],
                'quantity' => $post['quantity'],
                'img' => $name_hash
            ];
            if ($this->сheesecakeRepository->save($params) === false) {
                $addResult = 'Торт не был добавлен';
            } else {
                move_uploaded_file($tmp_name, "img/Cheesecake/$name_hash");
                $addResult = 'Торт добавлен';
            }
        }
        $content = 'AdminCheesecake.php';
        $template = 'AdminMenu.php';
        $cheesecakes = $this->сheesecakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cheesecakes' => $cheesecakes
        ];
        echo $this->renderPage($content, $template, $data);

    }

    public function DeleteCheesecakeAction($id)
    {
        $cheesecake = $this->сheesecakeRepository->getById($id);

        $params = [
            'id' => $cheesecake['id']
        ];
        $this->сheesecakeRepository->deleteCake($params);

        $content = 'AdminCheesecake.php';
        $template = 'AdminMenu.php';
        $cheesecakes = $this->сheesecakeRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'cheesecakes' => $cheesecakes
        ];
        echo parent::renderPage($content, $template, $data);
    }


//    Pie

    public function PieAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";

            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'price' => $post['price'],
                'quantity' => $post['quantity'],
                'img' => $name_hash
            ];
            if ($this->pieRepository->save($params) === false) {
                $addResult = 'Торт не был добавлен';
            } else {
                move_uploaded_file($tmp_name, "img/Pie/$name_hash");
                $addResult = 'Торт добавлен';
            }
        }
        $content = 'AdminPie.php';
        $template = 'AdminMenu.php';
        $pies = $this->pieRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'pies' => $pies
        ];
        echo $this->renderPage($content, $template, $data);

    }

    public function DeletePieAction($id)
    {
        $pie = $this->pieRepository->getById($id);

        $params = [
            'id' => $pie['id']
        ];
        $this->pieRepository->deleteCake($params);

        $content = 'AdminPie.php';
        $template = 'AdminMenu.php';
        $pies = $this->pieRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'pies' => $pies
        ];
        echo parent::renderPage($content, $template, $data);
    }



//    Bakery

    public function BakeryAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            $files = $_FILES;
            $tmp_name = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $name_hash = md5($name) . ".$extension";

            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'price' => $post['price'],
                'quantity' => $post['quantity'],
                'img' => $name_hash
            ];
            if ($this->bakeryRepository->save($params) === false) {
                $addResult = 'Торт не был добавлен';
            } else {
                move_uploaded_file($tmp_name, "img/Bakery/$name_hash");
                $addResult = 'Торт добавлен';
            }
        }
        $content = 'AdminBakery.php';
        $template = 'AdminMenu.php';
        $bakerys = $this->bakeryRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'bakerys' => $bakerys
        ];
        echo $this->renderPage($content, $template, $data);

    }
    public function DeleteBakeryAction($id)
    {
        $bakery = $this->bakeryRepository->getById($id);

        $params = [
            'id' => $bakery['id']
        ];
        $this->bakeryRepository->deleteCake($params);

        $content = 'AdminBakery.php';
        $template = 'AdminMenu.php';
        $bakerys = $this->bakeryRepository->getAll();
        $data = [
            'title' => 'Главная',
            'addResult' => $addResult,
            'bakerys' => $bakerys
        ];
        echo parent::renderPage($content, $template, $data);
    }

//    Basked



    public function BaskedAction()
    {
        session_start();
        if(!isset($_SESSION['email'])) header('Location: /Admin/Start');
        $content = 'AdminBasked.php';
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

    public function logoutAction(){
        session_start();
        session_destroy();
        $_SESSION =[];
        header('Location: /');
    }
}