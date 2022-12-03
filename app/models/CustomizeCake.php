<?php
namespace app\models;

class CustomizeCake extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM custom_cake";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

	public function getByUserId($user_id){
		$SQL = "SELECT * FROM custom_cake CROSS JOIN cart on custom_cake.custom_cake_id=cart.custom_cake_id WHERE custom_cake.user_id = :user_id AND status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

	public function getAllStatusPaid(){
		$SQL = "SELECT * FROM custom_cake CROSS JOIN cart on custom_cake.custom_cake_id=cart.custom_cake_id WHERE status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

	public function getAllStatusShipped(){
		$SQL = "SELECT * FROM custom_cake CROSS JOIN cart on custom_cake.custom_cake_id=cart.custom_cake_id WHERE status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'shipped']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

	public function getByCakeId($custom_cake_id){
		$SQL = "SELECT * FROM custom_cake WHERE custom_cake_id=:custom_cake_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['custom_cake_id'=>$custom_cake_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetch();
	}


	public function insert($user_id){
		$SQL = "INSERT INTO custom_cake(user_id, description, cake_image, layer, serving, flavor, price) VALUES (:user_id,:description, :cake_image, :layer, :serving ,:flavor, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'description'=>$this->description,
						'cake_image'=>$this->cake_image,
						'layer'=>$this->layer,
						'serving'=>$this->serving,
						'flavor'=>$this->flavor,
						'price'=>$this->price]);
		return self::$_connection->lastInsertId();
	}

	public function removeByCakeId(){
		$SQL = "DELETE FROM custom_cake WHERE custom_cake_id=:custom_cake_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['custom_cake_id'=>$this->custom_cake_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

}