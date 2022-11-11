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

	public function getName($name){
		$SQL = "SELECT * from product where name=:name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['name'=>$name]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function get($product_id){
		$SQL = "SELECT * FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function getCategory($category_id){
		$SQL = "SELECT * FROM product WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$category_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
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

	public function delete(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
	}

	public function edit(){
		$SQL = "UPDATE product SET category_id=:category_id, name=:name, description=:description, image=:image,  size=:size, price=:price  WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id,
						'name'=>$this->name,
						'description'=>$this->description,
						'image'=>$this->image,
						'size'=>$this->size,
						'price'=>$this->price,
						'product_id'=>$this->product_id]);
	}

	public function search($searchTerm){
        $SQL = "SELECT * FROM product WHERE name LIKE :searchTerm";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['searchTerm'=>"%$searchTerm%"]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }




}