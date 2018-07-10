<?php
	$Color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
	foreach($Color as $a=>$b)
	{
		echo "[".$a."]=>".strtolower($b);
	}
	echo "<br>";
	foreach($Color as $a=>$b)
	{
		echo "[".$a."]=>".strtoupper($b);
	}
?>
