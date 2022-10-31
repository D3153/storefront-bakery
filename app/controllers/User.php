<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function register(){
		if(isset($_POST['action'])){
            if($_POST['password'] == $_POST['password_confirm']){
                $user = new \app\models\User();
                $check = $user->get($_POST['username']);
                if(!$check){
                    $user->username = $_POST['username'];
                    $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->insert();
                    header('location:/User/login');
                }else{
                    header('location:/User/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
                }
            }else{
                header('location:/User/register?error=Passwords do not match.');
            }
        }else{
            $this->view('User/register');
        }

	}

	public function login(){
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if(password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['username'] = $user->username;
				header('location:/User/myAccount');
			}else{
				header('location:/User/login?error=Wrong username/password combination!');
			}
		}else{
			$this->view('User/login');
		}
	}

	public function myAccount(){
		$this->view('User/myAccount');
	}


	public function addProduct(){
		$this->view('User/addProduct');
	}

	public function contactUs(){
		$this->view('User/contactUs');
	}

	public function checkout(){
		$this->view('User/checkout');
	}

	public function cart(){
		$this->view('User/cart');
	}
}