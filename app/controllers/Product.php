<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function shopAll(){
		$product = new \app\models\Product();
		$products = $product->getAll();
		$this->view('Product/shopAll', $products);
	}

	public function search(){
        $product = new \app\models\Product();
        $products = $product->search($_GET['search_term']);
        $this->view('Product/shopAll', $products);
    }

	public function customizeCake(){
		if(isset($_POST['action'])){
			$customCake = new \app\models\customizeCake();
			$customCake->description = $_POST['description'];
			$customCake->layer = $_POST['layer'];
			$customCake->serving = $_POST['serving'];
			$customCake->flavor = $_POST['flavor'];
			$filename = $this->saveFile($_FILES['image']);
			$customCake->image = $filename;
			$price = $_POST['layer']*40 +$_POST['serving']*4.99;
			$customCake->price = $price;
			$customCake->insert();
			header('location:/Product/shopAll');
		}else{
			$this->view('Product/customizeCake');
		}
	}

}