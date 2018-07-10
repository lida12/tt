<?php
	$c = 'z';
	$next = ++$c; 
	if (strlen($next) > 1) 
	{
 	$next = $next[0];
 	}
	echo $next;
?>
