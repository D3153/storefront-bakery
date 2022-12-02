<?php
namespace app\controllers;

class Cart extends \app\core\Controller{

	public function cart(){
		$cart = new \app\models\Cart();
		$cartUser = $cart->getCart($_SESSION['user_id']);
		$total_price = 0;
		foreach ($cartUser as $data){
			$total_price += $data->unit_price;
		}
		$this->view('Cart/cart', ['cartUser'=>$cartUser, 'total_price'=>$total_price]);
	}

	public function orders(){
		$order = new \app\models\Cart();
		$order_history = $order->getByUser($_SESSION['user_id']);
		// $cartUser[] = array();
		// $userPaid[] = array();
		// $userShip[] = array();
		// foreach($order_history as $data){
		// 	if($data->status = 'cart'){
		// 		array_push($cartUser, $data);
		// 	}
		// 	if($data->status = 'paid'){
		// 		array_push($cartPaid, $data);
		// 	}
		// 	if($data->status = 'shipped'){
		// 		array_push($cartShip, $data);
		// 	}
		// }

		// // var_dump($cartPaid);
		$this->view('Cart/orders', $order_history);
	}

	public function addCartProduct($product_id)
		{
			//user_id, product_id, custom_cake_id, quantity, unit_price, shipping_id, status) VALUES (:user_id, :product_id, :custom_cake_id, :quantity, :unit_price, :shipping_id, :status
			$cart = new \app\models\Cart();
			$product = new \app\models\Product();
			$product = $product->get($product_id);

			$cartUser = $cart->getCartProduct($_SESSION['user_id'], $product_id);

			if($cartUser){
				$cart->user_id = $_SESSION['user_id'];
				$cart->product_id = $product_id;
				$cart->updateQty();
				$cart->updatePrice();
			}else{
				$cart->user_id = $_SESSION['user_id'];
				$cart->product_id = $product_id;
				$cart->quantity = 1;
				$cart->unit_price = $product->price;
				$cart->custom_cake_id = null;
				$cart->shipping_id = null;
				$cart->insertIntoCart();
			}
			header('location:/Product/shopAll');
		}

	public function removeFromCart($product_id)
	{
		$cart = new \app\models\Cart();
		$product = new \app\models\Product();
		$product = $product->get($product_id);

		$cartUser = $cart->getCartProduct($_SESSION['user_id'], $product_id);
		if($cartUser){
			if($cartUser->quantity > 1){
				$cart->user_id = $_SESSION['user_id'];
				$cart->product_id = $product_id;
				$cart->removeProduct();
				$cart->updatePrice();
			}else{
				$cart->user_id = $_SESSION['user_id'];
			$cart->product_id = $product_id;
			$cart->deleteProduct();
			}
		}
		header('location:/Cart/cart');
	}
	
}