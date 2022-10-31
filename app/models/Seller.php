<?php
namespace app\models;

class Seller extends \app\core\Model{

	public function get(){
		$SQL = "SELECT * from user WHERE role=seller";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}
}