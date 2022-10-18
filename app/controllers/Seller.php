<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	public function register(){
		if(isset($_POST['action'])){
            if($_POST['password'] == $_POST['password_confirm']){
                $seller = new \app\models\Seller();
                $check = $seller->get($_POST['username']);
                if(!$check){
                    $seller->username = $_POST['username'];
                    $seller->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $seller->insert();
                    header('location:/Seller/login');
                }else{
                    header('location:/Seller/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
                }
            }else{
                header('location:/Seller/register?error=Passwords do not match.');
            }
        }else{
			$this->view('Seller/register');
        }
	}

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