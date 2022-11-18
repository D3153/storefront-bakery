<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Seller2fa extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'seller'){
			$user = new \app\models\User();
			$user->get($_SESSION['username']);
			if($user->secret_key == null){
				header('location:/Seller/setup2fa');
			}elseif($user->secret_key != null){
				header('location:/Seller/check2fa');
			}else return false;
		}else{
			return false;
		}
			
	}
}