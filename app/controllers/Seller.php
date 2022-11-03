<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	
	public function index(){
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

	public function deleteProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			
		}else{
			$product = new \app\models\Product();
			$products = $product->getAll();
			$this->view("Seller/deleteProduct",$products);
		}
		
	}

	public function modifyProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
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