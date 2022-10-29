<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function shopAll(){
		$this->view('Product/shopAll');
	}

	public function customizeCake(){
		$this->view('Product/customizeCake');
	}
}