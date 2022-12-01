<?php
namespace app\models;

class Seller extends \app\core\Model{

	public function get($username){
		$SQL = "SELECT * from user WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function getByUserId($user_id){
		$SQL = "SELECT * from user WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}
}