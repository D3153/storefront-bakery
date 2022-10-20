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

	public function profile(){
		$this->view('Seller/profile');
	}
}