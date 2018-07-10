<?php
	$d=date("Y-m-d H:i:s");
	echo "IST : ".$d."<br>";
	date_default_timezone_set("Europe/London");
	$d=date("Y-m-d H:i:s");
	echo "Europe/London : ".$d."<br>";
	date_default_timezone_set("UTC");
	$d=date("Y-m-d H:i:s");
	echo "UTC : ".$d."<br>";
	date_default_timezone_set("America/Chicago");
	$d=date("Y-m-d H:i:s");
	echo "America/Chicago : ".$d."<br>";
?>
