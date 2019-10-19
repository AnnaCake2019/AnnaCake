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

use Notorious\Shugar\Models\BakeryRepository;
use Notorious\Shugar\Models\CakeRepository;
use Notorious\Shugar\Models\CheesecakeRepository;
use Notorious\Shugar\Models\PieRepository;


class CartController extends Controller
{
    protected $cartBakeryRepository;
    protected $cartCakeRepository;
    protected $cartPieRepository;
    protected $cartCheesecakeRepository;

    protected $userRepository;

    protected $frontPieRepository;
    protected $frontCheesecakeRepository;
    protected $frontBakeryRepository;
    protected $frontCakeRepository;

    private $сheesecakeRepository;
    private $cakeRepository;
    private $bakeryRepository;
    private $pieRepository;

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

        $this->сheesecakeRepository = new CheesecakeRepository();
        $this->cakeRepository = new CakeRepository();
        $this->bakeryRepository = new BakeryRepository();
        $this->pieRepository = new PieRepository();
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
            'Users_id' => $_SESSION['name'],
            'count' => $_POST['quant']
        ];  
        	$this->cartBakeryRepository->foreing();

            $checkBakery = $this->cartBakeryRepository->check($bakeryId);

            if (count($checkBakery) == 0) {
                $this->cartBakeryRepository->save($params);
            }           

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
            'Users_id' => $_SESSION['name'],
            'count' => $_POST['quant']
        ];       
        	$this->cartCakeRepository->foreing();

            $checkCake = $this->cartCakeRepository->check($cakeId);

            if (count($checkCake) == 0) {           
                $this->cartCakeRepository->save($params);
            }           

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
        $params=[
            'id'=> $id,
            'Users_id' => $_SESSION['name'],
            'count' => $_POST['quant']
        ];       
        	$this->cartCheesecakeRepository->foreing();

            $checkChees = $this->cartCheesecakeRepository->check($id);

            if (count($checkChees) == 0) { 
                $this->cartCheesecakeRepository->save($params);
            }
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
            'Users_id' => $_SESSION['name'],
            'count' => $_POST['quant']
        ];       
        	$this->cartPieRepository->foreing();

            $checkPie = $this->cartCheesecakeRepository->check($pieId);

            if (count($checkPie) == 0) { 
                $this->cartPieRepository->save($params);
            }
    }



    public function deleteBakeryAction($id)
    {
        session_start();
        $params=[
            'Bakery_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartBakeryRepository->deleteBakery($params);

    }

    public function plusBakeryAction($id)
    {
        session_start();
        $params=[
           'Bakery_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartBakeryRepository->getCount($params);
        $quantity = array_shift($quantity) + 1;
        $params=[
           'Bakery_id'=> $id, 
           'Users_id' => $_SESSION['name'],
           'quantity' => $quantity
        ];       
        $this->cartBakeryRepository->addOne($params);
    }

    public function minusBakeryAction($id)
    {
        session_start();
        $params=[
           'Bakery_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartBakeryRepository->getCount($params);
        $quantity = array_shift($quantity) - 1;
        if ($quantity == 0) {
        $params=[
            'Bakery_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartBakeryRepository->deleteBakery($params);            
        } else{
            $params=[
                'Bakery_id'=> $id, 
                'Users_id' => $_SESSION['name'],
                'quantity' => $quantity
            ];       
            $this->cartBakeryRepository->addOne($params);            
        }

    }





    public function deleteCakeAction($id)
    {
        session_start();
        $params=[
            'Cakes_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartCakeRepository->deleteCake($params);

    }

    public function plusCakeAction($id)
    {
        session_start();
        $params=[
           'Cakes_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartCakeRepository->getCount($params);
        $quantity = array_shift($quantity) + 1;
        $params=[
           'Cakes_id'=> $id, 
           'Users_id' => $_SESSION['name'],
           'quantity' => $quantity
        ];       
        $this->cartCakeRepository->addOne($params);
    }

    public function minusCakeAction($id)
    {
        session_start();
        $params=[
           'Cakes_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartCakeRepository->getCount($params);
        $quantity = array_shift($quantity) - 1;
        if ($quantity == 0) {
        $params=[
            'Cakes_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartCakeRepository->deleteCake($params);            
        } else{
            $params=[
                'Cakes_id'=> $id, 
                'Users_id' => $_SESSION['name'],
                'quantity' => $quantity
            ];       
            $this->cartCakeRepository->addOne($params);            
        }

    }


    public function deletePieAction($id)
    {
        session_start();
        $params=[
            'Pies_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartPieRepository->deletePie($params);

    }

    public function plusPieAction($id)
    {
        session_start();
        $params=[
           'Pies_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartPieRepository->getCount($params);
        $quantity = array_shift($quantity) + 1;
        $params=[
           'Pies_id'=> $id, 
           'Users_id' => $_SESSION['name'],
           'quantity' => $quantity
        ];       
        $this->cartPieRepository->addOne($params);
    }

    public function minusPieAction($id)
    {
        session_start();
        $params=[
           'Pies_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartPieRepository->getCount($params);
        $quantity = array_shift($quantity) - 1;
        if ($quantity == 0) {
        $params=[
            'Pies_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartPieRepository->deletePie($params);            
        } else{
            $params=[
                'Pies_id'=> $id, 
                'Users_id' => $_SESSION['name'],
                'quantity' => $quantity
            ];       
            $this->cartPieRepository->addOne($params);            
        }

    }




    public function deleteCheeseAction($id)
    {
        session_start();
        $params=[
            'Cheesecakes_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartCheesecakeRepository->deleteCheese($params);

    }

    public function plusCheeseAction($id)
    {
        session_start();
        $params=[
           'Cheesecakes_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartCheesecakeRepository->getCount($params);
        $quantity = array_shift($quantity) + 1;
        $params=[
           'Cheesecakes_id'=> $id, 
           'Users_id' => $_SESSION['name'],
           'quantity' => $quantity
        ];       
        $this->cartCheesecakeRepository->addOne($params);
    }

    public function minusCheeseAction($id)
    {
        session_start();
        $params=[
           'Cheesecakes_id'=> $id, 
           'Users_id' => $_SESSION['name']
        ];
        $quantity = $this->cartCheesecakeRepository->getCount($params);
        $quantity = array_shift($quantity) - 1;
        if ($quantity == 0) {
        $params=[
            'Cheesecakes_id'=> $id,
            'Users_id' => $_SESSION['name']
        ]; 
        $this->cartCheesecakeRepository->deleteCheese($params);            
        } else{
            $params=[
                'Cheesecakes_id'=> $id, 
                'Users_id' => $_SESSION['name'],
                'quantity' => $quantity
            ];       
            $this->cartCheesecakeRepository->addOne($params);            
        }

    }
















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

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
        	$bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
         	array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
        	$cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
         	array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
        	$pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
         	array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
        	$cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
         	array_push($cheesecakeCart, $cheesecake1);
        }


        $data = [
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
        ];
        echo $this->renderPage($content, $template, $data);

    }


    public function showAboutAction()
    {
        session_start();
        $content = 'aboutUS.php';
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

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }


        $data = [
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function showContactAction()
    {
        session_start();
        $content = 'contact.php';
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

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }


        $data = [
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function showShopAction()
    {
        session_start();
        $content = 'show.php';
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

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }

        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();

        $data = [
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees,
        ];
        echo $this->renderPage($content, $template, $data);
    }



    public function ShowCakeAction($id)
    {
        session_start();
        $content = 'showCake.php';
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

        $cake = $this->cakeRepository->getById($id);

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }

        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();


        $data = [
            'cake' => $cake,
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees,
        ];
        echo parent::renderPage($content, $template, $data);
    }


    public function ShowPieAction($id)
    {
        session_start();
        $content = 'showPie.php';
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

        $pie = $this->pieRepository->getById($id);

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }

        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();


        $data = [
            'pie' => $pie,
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees,
        ];
        echo parent::renderPage($content, $template, $data);
    }


    public function ShowBakeryAction($id)
    {
        session_start();
        $content = 'ShowBakery.php';
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

        $bakery = $this->bakeryRepository->getById($id);


        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']); 
            array_push($bakeryCart, $bakery1);           
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }

        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();


        $data = [
            'bakery' => $bakery,
            'bakeryCart' => $bakeryCart,
            'bakeryCartCol' => $bakeryCartCol,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees,
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function ShowCheesAction($id)
    {
        session_start();
        $content = 'ShowChees.php';
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

        $twoChee = $this->сheesecakeRepository->getById($id);

        $bakeryCart=[];
        foreach ($bakerysBaskets as $row){
            $bakery1 = $this->cartBakeryRepository->getFromBakery($row['Bakery_id']);  
            array_push($bakeryCart, $bakery1);
        }

        $cakeCart=[];
        foreach ($cakesBaskets as $row1){
            $cake1 = $this->cartCakeRepository->getFromCakes($row1['Cakes_id']);  
            array_push($cakeCart, $cake1);
        }

        $pieCart=[];
        foreach ($piesBaskets as $row2){
            $pie1 = $this->cartPieRepository->getFromPies($row2['Pies_id']);  
            array_push($pieCart, $pie1);
        }

        $cheesecakeCart=[];
        foreach ($cheesecakesBaskets as $row3){
            $cheesecake1 = $this->cartCheesecakeRepository->getFromCheesecakes($row3['Cheesecakes_id']);  
            array_push($cheesecakeCart, $cheesecake1);
        }

        $cakes = $this->cakeRepository->getAll();
        $pies = $this->pieRepository->getAll();
        $bakerys = $this->bakeryRepository->getAll();
        $twoChees = $this->сheesecakeRepository->getAll();


        $data = [
            'twoChee' => $twoChee,
            'bakeryCart' => $bakeryCart,
            'cakeCart' => $cakeCart,
            'pieCart' => $pieCart,
            'cheesecakeCart' => $cheesecakeCart,
            'Users_id' => $_SESSION['name'],
            'fcakes' => $fcakes,
            'fcheesecakes' => $fcheesecakes,
            'fpies' => $fpies,
            'fbakerys' => $fbakerys,
            'cakes' => $cakes,
            'pies' => $pies,
            'bakerys' => $bakerys,
            'twoChees' => $twoChees,
        ];
        echo parent::renderPage($content, $template, $data);
    }
    
}