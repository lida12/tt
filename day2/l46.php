<?php
	$s = 'www.example.com/public_html/index.php';
	$name = substr(strrchr($s, "/"), 1);
	echo $name;
?>	
