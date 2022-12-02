<?php
namespace app\filters;

#[\Attribute]
class CheckSellerRole extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'user'){
			header('location:/User/index?error=You must be a seller to access this location.');
			return true;
		}
		return false;
	}
}