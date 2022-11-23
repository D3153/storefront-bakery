<?php
namespace app\controllers;

class Cart extends \app\core\Controller{

	public function cart(){
		$this->view('Cart/cart');
	}

	public function insertCart(){
		if(isset($_POST['action'])){
			$cart = new \app\models\Cart();
			$product = new\app\models\Product();
			$prName->getElementById("prName");
			$product->getName($prName);
			echo("$prName");
			header('location:/User/shopAll');
			//$cart->user_id = $_SESSION['user_id'];
			//$cart->product_id
		}else{
			header('location:/User/shopAll');
		}
	}
	
}