<?php
	$s1 = 'football';
	$s2 = 'footboll';
	$pos = strspn($s1 ^ $s2, "\0");
	echo 'First difference between two strings at position '.$pos,' : '.$s1[$pos]." vs ". $s2[$pos];
	echo "<br>";
?>
