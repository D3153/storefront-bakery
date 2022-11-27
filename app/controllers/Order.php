<?php
namespace app\controllers;

class Order extends \app\core\Controller{
	public function checkout(){
		if(isset($_POST['action'])){
			header('location:/Order/confirmation');
		}
		$this->view('Order/checkout');
	}

	public function confirmation(){
		if(isset($_POST['action'])){
			header('location:/Product/shopAll');
		}
		$msg = "First line of text\nSecond line of text";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("ymimi1121@gmail.com","My subject",$msg);
		$this->view('Order/confirmation');

	}
}