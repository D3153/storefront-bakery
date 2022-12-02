<?php
namespace app\models;

class CustomizeCake extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * from custom_cake";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}

	public function getByDescPrice(){
		$SQL = "SELECT * from custom_cake WHERE description=:description AND price=:price";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['description'=>$this->description,
						'price'=>$this->price]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CustomizeCake');
		return $STMT->fetchAll();
	}


	public function insert($user_id){
		$SQL = "INSERT INTO custom_cake(user_id, description, image, layer, serving, flavor, price) VALUES (:user_id,:description, :image, :layer, :serving ,:flavor, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'description'=>$this->description,
						'image'=>$this->image,
						'layer'=>$this->layer,
						'serving'=>$this->serving,
						'flavor'=>$this->flavor,
						'price'=>$this->price]);
		return self::$_connection->lastInsertId();
	}

}