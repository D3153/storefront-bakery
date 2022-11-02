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


}