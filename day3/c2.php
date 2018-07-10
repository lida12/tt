<?php
	$input =date_create('17-07-2015 17:07:28');
	echo date_format($input,"Y-m-d h:i:sa")."<br>";
	echo date_format($input,"Y/m/d")."<br>";
	echo date_format($input,"h:i A")."<br>";
	echo date_format($input,"l jS F Y");

?>
