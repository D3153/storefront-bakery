<?php
namespace app\controllers;

class Order extends \app\core\Controller{

	#[\app\filters\Login]
	public function checkout(){
		$cartTemp = new \app\models\Cart();
		$cartUser = $cartTemp->getAllFromUser($_SESSION['user_id']);
		$total_price = 0;
		foreach ($cartUser as $data){
			$total_price += $data->unit_price;
		}

		if(isset($_POST['action'])){
			$cart = new \app\models\Cart();
			$cart->full_name = $_POST['name'];
			$cart->email = $_POST['email'];
			$cart->address = $_POST['address'];
			$cart->phone_num = $_POST['phone'];
			$cart->updateCartCheckout($_SESSION['user_id']);
			header('location:/Order/confirmation');
		}
		$this->view('Order/checkout', $total_price);
	}

	#[\app\filters\Login]
	public function confirmation(){
		if(isset($_POST['action'])){
			header('location:/Product/shopAll');
		}
		$this->view('Order/confirmation');

	}
}