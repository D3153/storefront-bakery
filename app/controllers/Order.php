<?php
namespace app\controllers;

class Order extends \app\core\Controller{
	public function checkout(){
		$this->view('Order/checkout');
	}
}