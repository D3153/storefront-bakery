<?php
namespace app\models;

class MessageCenter extends \app\core\Model{

	public function getAll($user_id){
		$SQL = "SELECT * from message_center WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\MessageCenter');
		return $STMT->fetchAll();
	}


	public function insert(){
		$SQL = "INSERT INTO message_center(user_id, sender, send_date, message) VALUES (:user_id, :sender, :send_date, :message)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'sender'=>$this->sender,
						'send_date'=>$this->send_date,
						'message'=>$this->message]);
	}

}