<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Seller2fa extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'seller'){
			$user = new \app\models\Seller(); 	
			$user = $user->getByUserId($_SESSION['user_id']);
			if($user->secret_key == null){
				header('location:/Seller/setup2fa');
				return true;
			}else return false;
		}else{
			return false;
		}
			
	}
}