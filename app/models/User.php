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

	public function getById($user_id){
		$SQL = "SELECT * from user WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
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

	public function update2fa(){
        $SQL = "UPDATE user SET secret_key=:secret_key WHERE user_id=:user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['secret_key'=>$this->secret_key,
                        'user_id'=>$this->user_id]);
    }
}