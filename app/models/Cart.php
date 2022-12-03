<?php
namespace app\models;

class Cart extends \app\core\Model{

//for order history
	public function getByUser($user_id){
		$SQL = "SELECT * FROM cart CROSS JOIN product on cart.product_id=product.product_id WHERE user_id = :user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function getCart($user_id)
	{

	 	$SQL = "SELECT * FROM cart CROSS JOIN product on cart.product_id=product.product_id WHERE cart.user_id = :user_id AND status = :status";

	 	// $SQL = "SELECT * , 'dummy1' AS membersCol1 FROM cart CROSS JOIN product on cart.product_id=product.product_id WHERE cart.user_id = :user_id AND status = :status
		// UNION 
	 	// SELECT * FROM cart CROSS JOIN custom_cake on cart.custom_cake_id=custom_cake.custom_cake_id WHERE cart.user_id = :user_id AND status = :status";

		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function getCartProduct($user_id, $product_id){
		$SQL = "SELECT * FROM cart WHERE user_id=:user_id AND status=:status AND product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'cart',
						'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}


	public function insertIntoCart()
	{
		$SQL = "INSERT INTO cart(user_id, product_id, custom_cake_id, quantity, unit_price, shipping_id, status) VALUES (:user_id, :product_id, :custom_cake_id, :quantity, :unit_price, :shipping_id, :status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'product_id'=>$this->product_id,
						'custom_cake_id'=>$this->custom_cake_id,
						'quantity'=>$this->quantity,
						'unit_price'=>$this->unit_price,
						'shipping_id'=>$this->shipping_id,
						'status'=>'cart']);
	}

	public function updateOrderStatus(){
		$SQL = "UPDATE cart SET status=:status WHERE user_id = :user_id AND status = :intitStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid',
						'user_id'=>$this->user_id,
						'initStatus'=>'cart']);
	}

	public function updateQty(){
		$SQL = "UPDATE cart SET quantity=quantity+:quantity WHERE user_id = :user_id AND status = :status AND product_id = :product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['quantity'=>1,
						'user_id'=>$this->user_id,
						'status'=>'cart',
						'product_id'=>$this->product_id]);
	}

	public function updatePrice(){
		$SQL = "UPDATE cart LEFT JOIN product ON cart.product_id=product.product_id SET unit_price=price*quantity WHERE user_id = :user_id AND status = :status AND cart.product_id = :product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'status'=>'cart',
						'product_id'=>$this->product_id]);
	}

	public function updateItemStatus(){
		$SQL = "UPDATE cart SET status=:status WHERE product_id = :product_id AND status = :intitStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
						'product_id'=>$this->product_id,
						'initStatus'=>$this->initStatus]);
	}

	public function deleteProduct(){
		$SQL = "DELETE FROM cart WHERE product_id = :product_id AND user_id = :user_id AND status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,
						'user_id'=>$this->user_id,
						'status'=>'cart']);
	}

	public function deleteCake(){
		$SQL = "DELETE FROM cart WHERE custom_cake_id = :custom_cake_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['custom_cake_id'=>$this->custom_cake_id]);
	}

	public function removeProduct(){
		$SQL = "UPDATE cart SET quantity=quantity-:quantity WHERE user_id = :user_id AND status = :status AND product_id = :product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['quantity'=>1,
						'user_id'=>$this->user_id,
						'status'=>'cart',
						'product_id'=>$this->product_id]);
	}

	//for checkout
	public function updateCartCheckout($user_id){
		$SQL = "UPDATE cart SET status=:status, full_name=:full_name, email=:email, address=:address, phone_num=:phone_num WHERE user_id=:user_id AND status=:intitStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid',
						'full_name'=>$this->full_name,
						'email'=>$this->email,
						'address'=>$this->address,
						'phone_num'=>$this->phone_num,
						'user_id'=>$user_id,
						'status'=>'cart']);
	}

}