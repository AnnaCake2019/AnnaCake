<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;

use Notorious\Shugar\Models\CartRepository;


class MailController extends Controller
{
    protected $cartRepository;

    public function __construct()
    {
        $this->cartRepository = new CartRepository();
    }

	public function SendAction()
	{
		session_start();
		$content = 'mail.php';
		$template = 'template.php';
		$data = [
			'title' => 'Отправка'
		];
		echo $this->renderPage($content, $template, $data);
	}

	public function SendOfferAction()
	{
		session_start();
		$content = 'offer.php';
		$template = 'template.php';
		$data = [
			'title' => 'Отправка'
		];
		echo $this->renderPage($content, $template, $data);

		$params = [
			'Users_id' => $_SESSION['name']
		];
		$this->cartRepository->clear($params);
	}

	

}


 ?>