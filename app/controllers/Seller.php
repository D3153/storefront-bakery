<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	
	public function login(){
		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
			$seller = $seller->get($_POST['username']);
			if(password_verify($_POST['password'], $seller->password_hash)){
				$_SESSION['user_id'] = $seller->user_id;
				$_SESSION['username'] = $seller->username;
				header('location:/Seller/profile');
			}else{
				header('location:/Seller/login?error=Wrong username/password combination!');
			}
		}else{
			$this->view('Seller/login');
		}
	}

	public function addProduct(){
		if(isset($_POST['action'])){
			//$product = new \app\models\Product();
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


	public function publishNewArrivals(){
		$this->view('Seller/publishNewArrivals');
	}

	public function messageCenter(){
		$this->view('Seller/messageCenter');
	}

	#[\app\filters\Login]
	public function logout(){
		session_destroy();
		header('location:/User/index');
	}
}