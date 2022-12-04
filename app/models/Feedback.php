<?php
namespace app\models;

class Feedback extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO feedback(rate, comment, comment_date) VALUES (:rate, :comment, :comment_date)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['rate'=>$this->rate,
					'comment'=>$this->comment,
					'comment_date'=>$this->comment_date]);
		return self::$_connection->lastInsertId();
	}

	public function getByFeedbackId($feedback_id){
		$SQL = "SELECT * FROM feedback WHERE feedback_id=:feedback_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['feedback_id'=>$feedback_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Feedback');
		return $STMT->fetch();
	}

}