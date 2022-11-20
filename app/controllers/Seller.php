<?php
namespace app\controllers;

//arrays for the sizes
define("bread_sizes", ["smallBread"=>"Small (6x3 inches)", "mediumBread"=>"Medium (8x4 inches)", "largeBread"=>"Large (9x5 inches)"]);

define("cookie_sizes", ["smallCookie"=>"Small (3 inches)", "mediumCookie"=>"Medium (4 inches)", "largeCookie"=>"Large (5 inches)"]);

define("pie_sizes", ["smallPie"=>"Small (4 inches)", "mediumPie"=>"Medium (12 inches)", "largePie"=>"Large (16 inches)"]);

define("cake_sizes", ["smallCake"=>"Small (6 inches)", "mediumCake"=>"Medium (8 inches)", "largeCake"=>"Large (10 inches)"]);

class Seller extends \app\core\Controller{
	

	public function index(){//login
		if(isset($_POST['action'])){
			$seller = new \app\models\User();
			$seller = $seller->get($_POST['username']);
			if(password_verify($_POST['password'], $seller->password_hash)){
				$_SESSION['user_id'] = $seller->user_id;
				$_SESSION['username'] = $seller->username;
				$_SESSION['role'] = $seller->role;
				$_SESSION['secret_key'] = $seller->secret_key;
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

#[\app\filters\Check2fa]
#[\app\filters\Seller2fa]
	public function home(){
		print_r($_SESSION);
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
			$this->view("Seller/addProduct", $categories);
		}
	}


	public function deleteProduct($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		unlink("images/$product->image");
		$product->delete();
		header('location:/Seller/checkProducts');
	}

	public function modifyProduct($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		if(isset($_POST['action'])){
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
			header('location:/Seller/checkProducts');
		}else{
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$this->view("Seller/modifyProduct",['categories'=>$categories,'product'=>$product]);
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

	// Use: /Default/makeQRCode?data=protocol://address
	public function makeQRCode(){  
		$data = $_GET['data'];  
		\QRcode::png($data); 
	} 

	#[\app\filters\Login] 
	public function setup2fa(){     
	if(isset($_POST['action'])){         
	$currentcode = $_POST['currentCode'];         
		if(\app\core\TokenAuth6238::verify($_SESSION['secretkey'],$currentcode)){ 
			//the user has verified their proper 2-factor authentication setup             
			$user = new \App\models\User();             
			$user->user_id = $_SESSION['user_id'];             
			$user->secret_key = $_SESSION['secretkey'];             
			$user->update2fa();             
			header('location:Seller/home');         
		}else{             
			header('location:/Seller/setup2fa?error=token not verified!');//reload         
		}     
	}else{         
		$secretkey = \app\core\TokenAuth6238::generateRandomClue();         
		$_SESSION['secretkey'] = $secretkey;         
		$url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'],'Awesome.com',$secretkey, 'Awesome App');
		$this->view('Seller/twofasetup', $url);     
		} 
	} 

	function check2fa(){
		if(isset($_POST['action'])){
			$currentcode = $_POST['currentCode'];
		 if(\app\core\TokenAuth6238::verify($_SESSION['secretkey'],$currentcode)){
		 	$_SESSION['secretkey'] = null;
		 	header('location:/Seller/home');
		 }
		}else{
			$this->view('Seller/check2fa');
		}
    //     if(isset($_POST['action'])){
    //         $currentCode = $_POST['currentCode'];
    //         if(\app\core\TokenAuth6238::verify($_SESSION['secret_key'],$currentCode)){
    //             $_SESSION['secret_key']=null;
    //             header('location:/Seller/setup2fa');
    //         }else{
    //             // session_destroy();
    //             header('location:/Seller/home');
    //         }
    //     }else{
    //         $this->view("Seller/check2fa");
    //     }
    }

}