<?php
namespace app\models;

class Product extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * from product";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO product(username, password_hash) VALUES (:username, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash]);
	}
}