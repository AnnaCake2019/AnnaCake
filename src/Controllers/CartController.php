<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CartBakeryRepository;
use Notorious\Shugar\Models\CartCakeRepository;
use Notorious\Shugar\Models\CartPieRepository;
use Notorious\Shugar\Models\CartCheesecakeRepository;
use Notorious\Shugar\Models\UserRepository;
use Notorious\Shugar\Models\FrontBakeryRepository;
use Notorious\Shugar\Models\FrontCakeRepository;
use Notorious\Shugar\Models\FrontCheesecakeRepository;
use Notorious\Shugar\Models\FrontPieRepository;

class CartController extends Controller
{
    private $cartBakeryRepository;
    private $cartCakeRepository;
    private $cartPieRepository;
    private $cartCheesecakeRepository;

    private $userRepository;

    private $frontPieRepository;
    private $frontCheesecakeRepository;
    private $frontBakeryRepository;
    private $frontCakeRepository;

    public function __construct()
    {
        $this->cartBakeryRepository = new CartBakeryRepository();
        $this->cartCakeRepository = new CartCakeRepository();
        $this->cartPieRepository = new CartPieRepository();
        $this->cartCheesecakeRepository = new CartCheesecakeRepository();
        
        $this->userRepository = new UserRepository();

        $this->frontCakeRepository = new FrontCakeRepository();
        $this->frontCheesecakeRepository = new FrontCheesecakeRepository();
        $this->frontPieRepository = new FrontPieRepository();
        $this->frontBakeryRepository = new FrontBakeryRepository();
    }

    public function addBakeryAction($id)
    { 
        session_start();
        if (!(isset($_SESSION['name']))) {
        	$session = rand();
        	$_SESSION['name'] = $session; 
        	$checked = $this->userRepository->check($session);
        	if (count($checked) == 0) {
            	$this->userRepository->save($session);
        	}        	
        }  

        $bakery = $this->cartBakeryRepository->getBakery($id); 
        $bakeryId = $bakery['id'];

        $params=[
            'Bakery_id'=> $bakeryId,
            'Users_id' => $_SESSION['name']
        ];
        	$this->cartBakeryRepository->foreing();
            $this->cartBakeryRepository->save($params);
    }

    public function addCakeAction($id)
    { 
        session_start();
        if (!(isset($_SESSION['name']))) {
        	$session = rand();
        	$_SESSION['name'] = $session; 
        	$checked = $this->userRepository->check($session);
        	if (count($checked) == 0) {
            	$this->userRepository->save($session);
        	}        	
        }  

        $cake = $this->cartCakeRepository->getCake($id); 
        $cakeId = $cake['id'];

        $params=[
            'Cakes_id'=> $cakeId,
            'Users_id' => $_SESSION['name']
        ];       
        	$this->cartCakeRepository->foreing();
            $this->cartCakeRepository->save($params);
    }

    public function addCheesecakeAction($id)
    { 
        session_start();
        if (!(isset($_SESSION['name']))) {
        	$session = rand();
        	$_SESSION['name'] = $session; 
        	$checked = $this->userRepository->check($session);
        	if (count($checked) == 0) {
            	$this->userRepository->save($session);
        	}        	
        }  

        // $cheesecake = $this->cartCheesecakeRepository->getCheesecakes($id); 
        // $cheesecakeId = $cheesecake['id'];
        $params=[
            'id'=> $id,
            'Users_id' => $_SESSION['name']
        ];       
        	$this->cartCheesecakeRepository->foreing();
            $this->cartCheesecakeRepository->save($params);
    }

    public function addPieAction($id)
    { 
        session_start();
        if (!(isset($_SESSION['name']))) {
        	$session = rand();
        	$_SESSION['name'] = $session; 
        	$checked = $this->userRepository->check($session);
        	if (count($checked) == 0) {
            	$this->userRepository->save($session);
        	}        	
        }  

        $pie = $this->cartPieRepository->getPies($id); 
        $pieId = $pie['id'];

        $params=[
            'Pies_id'=> $pieId,
            'Users_id' => $_SESSION['name']
        ];       
        	$this->cartPieRepository->foreing();
            $this->cartPieRepository->save($params);
    }



    public function deleteBakeryAction($id)
    {
        session_start();
        // $account_n = $_SESSION['name'];
        // $user=$this->cartRepository->isName($account_n);
        // $IdUs = (int) $user['id'];  

        $bakery = $this->cartBakeryRepository->getBakery($id);
        $bakeryId = $bakery['id'];
        
        // $basket = $this->cartRepository->getBas($IdUs);

        // $basketId=$basket['id'];

        $params=[
            // 'baskets_id'=> $basketId,
            'Bakery_id'=> $bakeryId,
        ]; 
        $this->cartBakeryRepository->deleteBakery($params); 

    }

    // public function buyAction()
    // {
    //     session_start();
    //     $account_n = $_SESSION['name'];
    //     $user=$this->cartRepository->isName($account_n);
    //     $IdUs = (int) $user['id'];  
        
    //     $basket = $this->cartRepository->getBas($IdUs);

    //     $basketId=$basket['id'];
    //     $statusId='1';

    //     $params=[
    //         'baskets_id'=> $basketId,
    //         'Status_id' => $statusId
    //     ];        
    //     $this->cartRepository->buy($params);

    //     $data=[
    //         'baskets_id'=> $basketId,
    //     ];
    //     $this->cartRepository->deleteFromBasket($data);
    // }

    // public function showAction()
    // {
    //  session_start();
    //  $content = 'blog.php';
    //  $template = 'template.php';

    //  // $account_n = $_SESSION['name'];
    //  // $user=$this->cartRepository->isName($account_n);
    //  // $IdUs = (int) $user['id'];   
 //  //       $basket = $this->cartRepository->getBas($IdUs);
 //  //       $basketId=$basket['id'];

 //        $bakery_in_basket = $this->cartBakeryRepository->getAllBakery();



        // $bakery = $this->cartBakeryRepository->getFromBakery((int) $bakery_in_basket);
        // $bakery=[];
        // foreach ($bakery_in_basket as $row){
        // $bakery1 = $this->cartBakeryRepository->getFromBakery((int) $row['bakery_id']);  
        //  array_push($bakery, $bakery1);
        // }

    //  $data = [
    //      'title' => 'Корзина',
    //      'bakery_in_basket' => $bakery_in_basket,
    //      'bakery' => $bakery,
 //            'bakery_in_basket' => $bakery_in_basket,
 //            // 'row' => $row
    //  ];       
    //  echo $this->renderPage($content, $template, $data);     
    // }

    public function showAction()
    {
    	session_start();
        $content = 'main.php';
        $template = 'template.php';	
        $Users_id = $_SESSION['name'];
        $bakerysBaskets = $this->cartBakeryRepository->getBaskets($Users_id);
        $cakesBaskets = $this->cartCakeRepository->getBaskets($Users_id);
        $piesBaskets = $this->cartPieRepository->getBaskets($Users_id);
        $cheesecakesBaskets = $this->cartCheesecakeRepository->getBaskets($Users_id);

        $fcakes = $this->frontCakeRepository->getAll();
        $fcheesecakes = $this->frontCheesecakeRepository->getAll();
        $fpies = $this->frontPieRepository->getAll();
        $fbakerys = $this->frontBakeryRepository->getAll();

        $bakery=[];
        foreach ($bakerysBaskets as $row){
        	$bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
         	array_push($bakery, $bakery1);
        }

        $cake=[];
        foreach ($cakesBaskets as $row1){
        	$cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
         	array_push($cake, $cake1);
        }

        $pie=[];
        foreach ($piesBaskets as $row2){
        	$pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
         	array_push($pie, $pie1);
        }

        $cheesecake=[];
        foreach ($cheesecakesBaskets as $row3){
        	$cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Сheesecakes_id']);  
         	array_push($cheesecake, $cheesecake1);
        }

        $data = [
            'title' => 'Корзина',
            'bakery' => $bakery,
            'cake' => $cake,
            'pie' => $pie,
            'cheesecake' => $cheesecake,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys
        ];
        echo $this->renderPage($content, $template, $data);

    }

}