<?php
namespace app\models;

class ContactUs extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * from contact_us";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\ContactUs');
		return $STMT->fetchAll();
	}

	public function get($contact_us_id){
		$SQL = "SELECT * FROM contact_us WHERE contact_us_id =:contact_us_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['contact_us_id'=>$contact_us_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\ContactUs');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO contact_us(user_id, name, email, message, send_date) VALUES (:user_id, :name, :email, :message, :send_date)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'name'=>$this->name,
						'email'=>$this->email,
						'message'=>$this->message,
						'send_date'=>$this->send_date]);
	}

}