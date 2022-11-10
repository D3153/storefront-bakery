<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function shopAll(){
		$product = new \app\models\Product();
		$products = $product->getAll();
		$this->view('Product/shopAll', $products);
		// $this->view("Seller/modifyProduct",['categories'=>$categories,'product'=>$product]);
	}

	public function customizeCake(){
		$this->view('Product/customizeCake');
	}

}