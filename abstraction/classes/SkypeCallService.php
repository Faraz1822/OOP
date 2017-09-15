<?php  
	include_once 'CallService.php';

	/**
	* Skype Call Service that will extend our abstract call service
	*/
	class SkypeCallService extends CallService
	{
		public function call()
		{
			$this->totalCoins -= 20;
			echo "Calling Via Skype";
		}
	}
?>