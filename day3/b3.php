<?php
	$color = array('white', 'green', 'red', 'blue', 'black');
	$k=array_search("red",$color)
	for($i=$k;$i<count($color);$i++)
	{
		$t=$color[$i];
		$color[$i]=$color[$i+1];
		$color[$i+1]=$t;
	}	
	array_pop($t);
	for($k=0;$k<count($color);$k++)
	{
		echo $color[$k];
	}
?>
