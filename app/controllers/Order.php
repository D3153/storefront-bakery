<?php
namespace app\controllers;

class Order extends \app\core\Controller{

	#[\app\filters\Login]
	public function checkout(){
		if(isset($_POST['action'])){
			header('location:/Order/confirmation');
		}
		$this->view('Order/checkout');
	}

	#[\app\filters\Login]
	public function confirmation(){
		if(isset($_POST['action'])){
			header('location:/Product/shopAll');
		}
		$this->view('Order/confirmation');

	}
}