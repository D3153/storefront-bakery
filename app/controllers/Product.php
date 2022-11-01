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
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$this->view("Seller/addProduct",$categories);
			// $product->category_id = $_SESSION['profile_id'];
			// $filename = $this->saveFile($_FILES['picture']);
			// $publication->picture = $filename;
			// $publication->caption = $_POST['caption'];
			// $publication->date_time = $_POST['date_time'];
			// $publication->insert();
			// header('location:../Main/publication');
		}else{
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$this->view("Seller/addProduct",$categories);
		}
		
	}
}