<?php  
	include_once 'CallService.php';

	/**
	* Whatsapp Call Service that will extend our abstract call service
	*/
	class WhatsappCallService extends CallService
	{
		public function call()
		{
			$this->totalCoins -= 10;
			echo "Calling Via Whatsapp";
		}
	}
?>