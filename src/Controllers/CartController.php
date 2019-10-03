<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CartBakeryRepository;
use Notorious\Shugar\Models\UserRepository;
use Notorious\Shugar\Models\CartRepository;

class CartController extends Controller
{
    private $cartBakeryRepository;
    private $userRepository;
    private $cartRepository;

    public function __construct()
    {
        $this->cartBakeryRepository = new CartBakeryRepository();
        $this->userRepository = new UserRepository();
        $this->cartRepository = new CartRepository();
    }

    public function addAction($id)
    { 

        $session = rand(); //ТО САМОЕ СЛУЧАЙНОЕ ЧИСЛО, КОТОРОЕ ПОТОМ ПОЙДЁТ КАК ИДЕНТИФИКАТОР ДЛЯ СЕССИИ
        $checked = $this->userRepository->check($session);
        if (count($checked) == 0) {
            $this->userRepository->save($session);
        }
        session_start();
        $_SESSION['name'] = $session;   

         $id = '3'; // ПИШУ ЗДЕСЬ 3, ПОТОМУ ЧТО ЭТО НА СТРАНИЦЕ С КОНТАКТАМИ, В add НЕ ПОСТУПАЕТ НИКАКИХ ПАРАМЕТРОВ (СМОТРИ template.php СТРОКА 122)

         // $account_n = $_SESSION['name'];
        // $user=$this->cartRepository->isName($account_n);
        // $IdUs = (int) $user['id'];   

        $bakery = $this->cartBakeryRepository->getBakery($id);  // ДОЛЖЕН ВЫТАСКИВАТЬ ВЫПЕЧКУ ИЗ ТАБЛИЦЫ Bakery ПО $id
        $bakeryId = $bakery['id'];
        
        // $basket = $this->cartRepository->getBas($IdUs);
        // $basketId=$basket['id'];

        $params=[
            // 'baskets_id'=> $basketId,
            'Bakery_id'=> $bakeryId,
            'Users_id' => $_SESSION['name']
        ];
        // $checked = $this->cartRepository->check($params);
        // if (count($checked) == 0) {
        	$this->cartBakeryRepository->foreing();
            $this->cartBakeryRepository->save($params);


		$BakeryBasket = $this->cartBakeryRepository->findBasket($session);
        // foreach ($BakeryBasket as $row){
        // 	$this->cartRepository->saveToBasket($row['id']);  
        // }

        
        $data = [
        	'BakeryBasket_id'=> $BakeryBasket,
        	'Users_id' => $_SESSION['name']

        ];
            $this->cartRepository->save($data);
    }


    // public function dobAction()
    // {
    //     $session = rand();
    //     $checked = $this->userRepository->check($session);
    //     if (count($checked) == 0) {
    //         $this->userRepository->save($session);
    //     }        
    // }

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



 //        $bakery = $this->cartBakeryRepository->getFromBakery((int) $bakery_in_basket);
 //        // $bakery=[];
        // foreach ($bakery_in_basket as $row){
        // $bakery1 = $this->cartBakeryRepository->getFromBakery((int) $row['bakery_id']);  
        //  array_push($bakery, $bakery1);
 //        // }

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
        $bakerysBaskets = $this->cartBakeryRepository->getBaskets();

        $data = [
            'title' => 'Корзина',
            'bakerysBaskets' => $bakerysBaskets,
            'user' => $_SESSION['name']
        ];
        echo $this->renderPage($content, $template, $data);

    }

}