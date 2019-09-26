<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;
use Notorious\Shugar\Models\CartBakeryRepository;

class CartController extends Controller
{
	private $cartBakeryRepository;
    public function __construct()
    {
        $this->cartBakeryRepository = new CartBakeryRepository();
    }

    public function addAction($id)
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
            'bakery_id'=> $bakeryId,
        ];        
        // $checked = $this->cartRepository->check($params);
        // if (count($checked) == 0) {
            $this->cartBakeryRepository->save($params); 
        // }
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

	public function showAction()
	{
		session_start();
		$content = 'blog.php';
		$template = 'template.php';

		// $account_n = $_SESSION['name'];
		// $user=$this->cartRepository->isName($account_n);
		// $IdUs = (int) $user['id'];	
  //       $basket = $this->cartRepository->getBas($IdUs);
  //       $basketId=$basket['id'];

        $bakery_in_basket = $this->cartBakeryRepository->getAllBakery();



        // $toys = $this->cartRepository->getFromToys((int) $toys_in_basket);
        $bakery=[];
        foreach ($bakery_in_basket as $row){
        $bakery1 = $this->cartBakeryRepository->getFromBakery($row['bakery_id']);  
       	array_push($bakery, $bakery1);
        }

		$data = [
			'title' => 'Корзина',
			'bakery_in_basket' => $bakery_in_basket,
			'bakery' => $bakery,
		];       
		echo $this->renderPage($content, $template, $data);		




        

	}


}


 ?>