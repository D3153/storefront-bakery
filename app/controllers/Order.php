<?php
namespace app\controllers;

class Order extends \app\core\Controller{

	#[\app\filters\Login]
	public function checkout(){
		$cart = new \app\models\Cart();
		if(isset($_POST['action'])){
			$cart = \app\models\Cart();
			$cart->full_name = $_POST['name'];
			$cart->email = $_POST['email'];
			$cart->address = $_POST['address'];
			$cart->phone_num = $_POST['phone'];
			$cart->updateCartCheckout($_SESSION['user_id']);
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