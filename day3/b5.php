<?php
	$text=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	echo "<br>Ascending order by value <br>";
	asort($text);
	foreach($text as $a=>$b)
	{
		echo "$a=>$b <br>";
	}
	echo "<br>Ascending order by key <br>";
	ksort($text);
	foreach($text as $a=>$b)
	{
		echo "$a=>$b <br>";
	}
	echo "<br>Descending order by value <br>";
	arsort($text);
	foreach($text as $a=>$b)
	{
		echo "$a=>$b <br>";
	}
	echo "<br>Descending order by key <br>";
	krsort($text);
	foreach($text as $a=>$b)
	{
		echo "$a=>$b <br>";
	}
	
	
?>
