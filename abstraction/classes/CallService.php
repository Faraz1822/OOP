<?php  
	/**
	* Abstract Class having an abstract call method
	*/
	abstract class CallService
	{
		protected $totalCoins;

		public function setTotalCoins($_totalCoins)
		{
			$this->totalCoins = $_totalCoins;
		}

		public function getRemainingCoins()
		{
			return $this->totalCoins;
		}

		abstract public function call();
	}
?>