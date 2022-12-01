<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Check2fa extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'seller'){
			if($_SESSION['secret_key']!= null){
				header('location:/Seller/check2fa');
				return true;
			}else return false;
		}else{
			return false;
		}
			
	}
}