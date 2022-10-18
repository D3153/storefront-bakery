<?php
namespace app\models;

class Seller extends \app\core\Model{

	public function get($username){
		$SQL = "SELECT * from seller WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO seller(username, password_hash) VALUES (:username, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash]);
	}
}