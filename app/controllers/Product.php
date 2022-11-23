<?php
namespace app\controllers;

class Product extends \app\core\Controller{
	public function shopAll(){
		$product = new \app\models\Product();
		if(isset($_POST['addNewArrival'])){

		}
		if(isset($_POST['addBread'])){

		}else{
			$products[] = array();
			$products['Breads'] = $product->getCategoryByName('Breads');
			$products['Cookies'] = $product->getCategoryByName('Cookies');
			$products['Pies'] = $product->getCategoryByName('Pies');
			$products['Pastries'] = $product->getCategoryByName('Pastries');
			$products['Cakes'] = $product->getCategoryByName('Cakes');
			$products['New_Arrivals'] = $product->getCategoryByName('New_Arrivals');
			$this->view('Product/shopAll', $products);
		}
		
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

	public function Bread(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Breads'] = $product->getCategoryByName('Breads');
		$this->view('Product/Bread',$products);
	}

	public function Cakes(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Cakes'] = $product->getCategoryByName('Cakes');
		$this->view('Product/Cakes',$products);
	}

	public function Cookies(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Cookies'] = $product->getCategoryByName('Cookies');
		$this->view('Product/Cookies',$products);
	}

	public function Pastries(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Pastries'] = $product->getCategoryByName('Pastries');

		$this->view('Product/Pastries',$products);
	}

	public function Pies(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Pies'] = $product->getCategoryByName('Pies');
		$this->view('Product/Pies',$products);
	}


}