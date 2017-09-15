<?php  
	include_once 'classes/WhatsappCallService.php';
	include_once 'classes/SkypeCallService.php';

	$totalCoins = 50;


	$skype = new SkypeCallService();
	$skype->setTotalCoins($totalCoins);
	$skype->call();

	echo '<br>';
	echo 'Remaining Coins ';
	echo $skype->getRemainingCoins(); // 30

	echo '<br><br>';


	$whatsapp = new WhatsappCallService();
	$whatsapp->setTotalCoins($totalCoins);

	$whatsapp->call();
	echo '<br>';
	echo 'Remaining Coins ';
	echo $whatsapp->getRemainingCoins(); // 40

?>