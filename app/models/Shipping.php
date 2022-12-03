<?php
namespace app\models;

class Shipping extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO shipping(tracking_info, time_stamp) VALUES (:tracking_info, :time_stamp)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['tracking_info'=>$this->tracking_info,
				'time_stamp'=>$this->time_stamp]);
		return self::$_connection->lastInsertId();
	}

	public function getByShippingId($shipping_id){
		$SQL = "SELECT * FROM shipping WHERE shipping_id = :shipping_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['shipping_id'=>$shipping_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Shipping');
		return $STMT->fetch();
	}

}