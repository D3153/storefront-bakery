<?php
namespace app\controllers;

class Feedback extends \app\core\Controller{
	#[\app\filters\Login]
	public function leaveFeedback($cart_id){
		$recieverInfo = new \app\models\Cart();
		$recieverInfo = $recieverInfo->getByCartId($cart_id);
		if(isset($_POST['action'])){
			$feedback = new \app\models\Feedback();
			$feedback->rate = $_POST['rating'];
			$feedback->comment = $_POST['comment'];
			$t=time();
			$feedback->comment_date = date("Y-m-d",$t);
			$feedback->feedback_id= $feedback->insert();

			$recieverInfo->feedback_id= $feedback->feedback_id;
			$recieverInfo->cart_id=$cart_id;
			$recieverInfo->updateComment();
			header('location:/Cart/orders');
		}
		$this->view('Feedback/leaveFeedback');
	}

	#[\app\filters\Login]
	#[\app\filters\CheckSellerRole]
	public function viewFeedback($feedback_id){
		$feedback = new \app\models\Feedback();
		$feedback = $feedback->getByFeedbackId($feedback_id);

		$this->view('Feedback/viewFeedback',['feedback'=>$feedback]);
	}
}