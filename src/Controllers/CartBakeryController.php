<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CartBakeryRepository;
use Notorious\Shugar\Models\UserRepository;

class CartBakeryController extends Controller
{
    private $cartBakeryRepository;
    private $userRepository;

    public function __construct()
    {
        $this->cartBakeryRepository = new CartBakeryRepository();
        $this->userRepository = new UserRepository();
    }

    public function addAction($id)
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

    public function deleteAction($id)
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
            'bakery_Id'=> $bakeryId,
        ]; 
        $this->cartBakeryRepository->delete($params); 

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
        $content = 'blog.php';
        $template = 'template.php';
        $Users_id = $_SESSION['name'];
        $bakerysBaskets = $this->cartBakeryRepository->getBaskets($Users_id);
        // $bakery_in_basket = $this->cartBakeryRepository->getAllBakery();

        // $bakery = $this->cartBakeryRepository->getFromBakery((int) $bakery_in_basket);
        // $bakery=[];
        // foreach ($bakery_in_basket as $row){
        // $bakery1 = $this->cartBakeryRepository->getFromBakery((int) $row['bakery_id']);  
        //  array_push($bakery, $bakery1);
        // }

        $data = [
            'title' => 'Корзина',
            'bakerysBaskets' => $bakerysBaskets,
            // 'bakery' => $bakery,
            'Users_id' => $_SESSION['name']
        ];
        echo $this->renderPage($content, $template, $data);

    }

}