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
		if(isset($_POST['action'])){
			$customizeCake = new \app\models\customizeCake();
			$check = $allProduct->getName($_POST['name']);
			if(!$check){
				$product = new \app\models\Product();
				$product->category_id = $_POST['category_id'];
				$product->name = $_POST['name'];
				$product->description = $_POST['description'];
				$product->size = $_POST['size'];
				$product->price = $_POST['price'];
				$filename = $this->saveFile($_FILES['image']);
				$product->image = $filename;
				$product->insert();
				header('location:/Seller/checkProducts');
		}else{
			$this->view('Product/customizeCake');
		}
	}

}