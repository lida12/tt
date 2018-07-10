<?php
	$number = 123.4;
	setlocale(LC_MONETARY,"en_US");
	echo money_format("The price is $ %i", $number);
		

?>
