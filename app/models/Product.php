<?php
namespace app\models;

class Product extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * from product";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO product(category_id, name, description, image, size, price) VALUES (:category_id, :name, :description, :image ,:size, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id,
						'name'=>$this->name,
						'description'=>$this->description,
						'image'=>$this->image,
						'size'=>$this->size,
						'price'=>$this->price]);
	}


}