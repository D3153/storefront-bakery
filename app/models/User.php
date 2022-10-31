<?php
namespace app\models;

class User extends \app\core\Model{

	public function get($username){
		$SQL = "SELECT * from user WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO user(username, password_hash, role) VALUES (:username, :password_hash, :role)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash,
						'role'=>"user"]);
	}
}