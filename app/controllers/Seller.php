<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	
	public function index(){//login
		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
			$seller = $seller->get($_POST['username']);
			if(password_verify($_POST['password'], $seller->password_hash)){
				$_SESSION['user_id'] = $seller->user_id;
				$_SESSION['username'] = $seller->username;
				$_SESSION['role'] = $seller->role;
				if($_SESSION['role']=="seller"){
					header('location:/Seller/home');		
				}else{
					header('location:/Seller/index?error=Invalid seller info!');
				}
			}else{
				header('location:/Seller/index?error=Wrong username/password combination!');
			}
		}else{
			$this->view('Seller/index');
		}
	}

	public function home(){
		$this->view('Seller/home');
	}

	public function addProduct(){
		if(isset($_POST['action'])){
			$allProduct = new \app\models\Product();
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
				header('location:/Seller/addProduct?error=The product name "'.$_POST['name'].'" is already in use. Select another.');
			}
				
			
		}else{
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$this->view("Seller/addProduct",$categories);
		}
	}


	public function deleteProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$product->product_id = $_POST['product_id'];
			$product->delete();
			header('location:/Seller/checkProducts');
		}else{
			$product = new \app\models\Product();
			$products = $product->getAll();
			$this->view("Seller/deleteProduct",$products);
		}
		
	}

	public function modifyProduct(){
		if(isset($_POST['search'])){
			$product_search = new \app\models\Product();
			$product = $product_search->get($_POST['product_id']);

		}
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$product->$product_id=$_POST['product_id'];
			$filename = $this->saveFile($_FILES['image']);
			if($filename){
				unlink("images/$product->image");
				$product->image = $filename;
			}
			$product->category_id= $_POST['category_id'];
			$product->name= $_POST['name'];
			$product->description= $_POST['description'];
			$product->size= $_POST['size'];
			$product->price= $_POST['price'];
			$product->edit();

		}else{
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$this->view("Seller/modifyProduct",$categories);
		}
		
	}

	

	public function checkProducts(){
		$product = new \app\models\Product();
		$products = $product->getAll();
		$this->view("Seller/checkProducts",$products);
	}

	public function viewOrders(){
		$this->view('Seller/viewOrders');
	}


	public function messageCenter(){
		$contact = new \app\models\ContactUs();
		$contacts = $contact->getAll();
		$this->view("Seller/messageCenter",$contacts);
	}

	#[\app\filters\Login]
	public function logout(){
		session_destroy();
		header('location:/User/index');
	}
}