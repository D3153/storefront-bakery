<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function cart(){
		$this->view('Cart/cart');
	}
}