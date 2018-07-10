<?php
	$date1 ="2014-04-30 08:00:00";
	$date2 ="2017-07-17 07:00:00";
	$diff=abs(strtotime($date2)-strtotime($date1));
	$y=floor($diff/(365*60*60*24));
	$m=floor(($diff-$y*365*60*60*24)/(30*60*60*24));
	$d= floor(($diff - $y* 365*60*60*24 - $m*30*60*60*24)/ (60*60*24));
	printf("%d years, %d months, %d days\n", $y, $m, $d);
?>
