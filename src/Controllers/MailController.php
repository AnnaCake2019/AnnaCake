<?php 
namespace Notorious\Shugar\Controllers;
use Notorious\Shugar\Core\Controller;

class MailController extends Controller
{
	public function sendAction()
	{
		$content = 'mail.php';
		$template = 'template.php';
		$data = [
			'title' => 'Отправка'
		];
		echo $this->renderPage($content, $template, $data);
	}


}


 ?>