<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function shopAll(){
		$this->view('Product/shopAll');
	}

	public function customizeCake(){
		$this->view('Product/customizeCake');
	}

	public function addProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$product->category_id = $_POST['category_id'];
			$product->name = $_POST['name'];
			// $product->image = $_POST['image'];
			$product->description = $_POST['description'];
			$product->size = $_POST['size'];
			$product->price = $_POST['price'];
			$filename = $this->saveFile($_FILES['image']);
			$product->image = $filename;
			$product->insert();
			header('location:/Product/shopAll');
		}else{
			// $category = new \app\models\Category();
			// $categories = $category->getAll();
			$this->view("Seller/addProduct",$categories);
		}
		
	}
}