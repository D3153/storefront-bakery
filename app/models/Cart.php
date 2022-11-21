<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getById($cart_id){
		$SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function insertIntoCart()
	{
		$SQL = "INSERT INTO cart(user_id, product_id, custom_cake_id, quantity, total_price) VALUES (:user_id, :product_id, :custom_cake_id, :quantity, :total_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'product_id'=>$this->product_id,
						'custom_cake_id'=>$this->custom_cake_id,
						'quantity'=>$this->quantity,
						'total_price'=>$this->total_price]);
	}
}