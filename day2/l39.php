<?php
	function palin($s) 
	{
  	if ($s== strrev($s))
      		echo $s." is palindrome"."<br>";
  	else
		echo $s." is not a palindrome"."<br>";
	}
	palin('madam');
	palin('hello');
?>

