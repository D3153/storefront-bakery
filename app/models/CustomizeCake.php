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

	public function insert(){
		$SQL = "INSERT INTO custom_cake(description, image, layer, serving, flavor, price) VALUES (:description, :image, :layer, :serving ,:flavor, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['description'=>$this->description,
						'image'=>$this->image,
						'layer'=>$this->layer,
						'serving'=>$this->serving,
						'flavor'=>$this->flavor,
						'price'=>$this->price]);
	}

}