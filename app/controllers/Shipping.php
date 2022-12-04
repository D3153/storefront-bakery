<?php
namespace app\controllers;

class Shipping extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\CheckSellerRole]
	public function trackingInfo($cart_id){
		$recieverInfo = new \app\models\Cart();
		$recieverInfo = $recieverInfo->getByCartId($cart_id);
		if(isset($_POST['action'])){
			$shipping = new \app\models\Shipping();
			$shipping->tracking_info= $_POST['trackingNumber'];
			$t=time();
			$shipping->time_stamp = date("Y-m-d",$t);
			$shipping->shipping_id=$shipping->insert();

			$recieverInfo->shipping_id= $shipping->shipping_id;
			$recieverInfo->cart_id=$cart_id;
			$recieverInfo->updateOrderStatusShip();
			header('location:/Seller/viewOrders');
		}
		$this->view("Shipping/trackingInfo",['recieverInfo'=>$recieverInfo]);
	}

	#[\app\filters\Login]
	#[\app\filters\CheckSellerRole]
	public function viewDetails($cart_id){
		$recieverInfo = new \app\models\Cart();
		$recieverInfo = $recieverInfo->getByCartId($cart_id);
		$shipDetail = new \app\models\Shipping();
		$shipDetail = $shipDetail->getByShippingId($recieverInfo->shipping_id);
		$this->view("Shipping/viewDetails",['recieverInfo'=>$recieverInfo, 'shipDetail'=>$shipDetail]);

	}

	#[\app\filters\Login]
	public function trackingforUser($cart_id){
		$recieverInfo = new \app\models\Cart();
		$recieverInfo = $recieverInfo->getByCartId($cart_id);
		$shipDetail = new \app\models\Shipping();
		$shipDetail = $shipDetail->getByShippingId($recieverInfo->shipping_id);
		$this->view("Shipping/trackingforUser",['recieverInfo'=>$recieverInfo, 'shipDetail'=>$shipDetail]);

	}
}