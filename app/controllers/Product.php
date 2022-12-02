<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	#[\app\filters\Login]
	public function shopAll(){
		$product = new \app\models\Product();
			$products[] = array();
			$products['Breads'] = $product->getCategoryByName('Breads');
			$products['Cookies'] = $product->getCategoryByName('Cookies');
			$products['Pies'] = $product->getCategoryByName('Pies');
			$products['Pastries'] = $product->getCategoryByName('Pastries');
			$products['Cakes'] = $product->getCategoryByName('Cakes');
			$products['New_Arrivals'] = $product->getCategoryByName('New_Arrivals');
			$this->view('Product/shopAll', $products);
	}

	#[\app\filters\Login]
	public function search(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Breads'] = $product->search($_GET['search_term'],'1');
		$products['Cookies'] = $product->search($_GET['search_term'],'2');
		$products['Pies'] = $product->search($_GET['search_term'],'3');
		$products['Pastries'] = $product->search($_GET['search_term'],'4');
		$products['Cakes'] = $product->search($_GET['search_term'],'5');
		$products['New_Arrivals'] = $product->search($_GET['search_term'],'6');
        $this->view('Product/shopAll', $products);
    }

    #[\app\filters\Login]
    public function searchBread(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Breads'] = $product->search($_GET['search_term'],'1');
        $this->view('Product/Bread', $products);
    }

    #[\app\filters\Login]
    public function searchCookies(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Cookies'] = $product->search($_GET['search_term'],'2');
        $this->view('Product/Cookies', $products);
    }

    #[\app\filters\Login]
    public function searchPies(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Pies'] = $product->search($_GET['search_term'],'3');
        $this->view('Product/Pies', $products);
    }

    #[\app\filters\Login]
    public function searchPastries(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Pastries'] = $product->search($_GET['search_term'],'4');
        $this->view('Product/Pastries', $products);
    }

    #[\app\filters\Login]
    public function searchCakes(){
        $product = new \app\models\Product();
       	$products[] = array();
		$products['Cakes'] = $product->search($_GET['search_term'],'5');
        $this->view('Product/Cakes', $products);
    }

    #[\app\filters\Login]
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

	#[\app\filters\Login]
	public function Bread(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Breads'] = $product->getCategoryByName('Breads');
		$this->view('Product/Bread',$products);
	}

	#[\app\filters\Login]
	public function Cakes(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Cakes'] = $product->getCategoryByName('Cakes');
		$this->view('Product/Cakes',$products);
	}

	#[\app\filters\Login]
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
	
	#[\app\filters\Login]
	public function Pies(){
		$product = new \app\models\Product();
		$products[] = array();
		$products['Pies'] = $product->getCategoryByName('Pies');
		$this->view('Product/Pies',$products);
	}

}