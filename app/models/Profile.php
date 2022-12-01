<?php
namespace app\models;

class Profile extends \app\core\Model{

	public function getAll($user_id){
		// $SQL = "SELECT * from message_center WHERE user_id=:user_id";
		// $STMT = self::$_connection->prepare($SQL);
		// $STMT->execute(['user_id'=>$user_id]);
		// $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\MessageCenter');
		// return $STMT->fetchAll();
	}


	public function insertUserId($user_id){
		$SQL = "INSERT INTO profile(user_id) VALUES (:user_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
	}

}