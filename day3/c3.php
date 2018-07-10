<?php
	$input =date_create('15-07-2015 09:30:00');
	date_modify($input,"+1 week");
	echo "1 week added : ".date_format($input,"Y-m-d H:i:s")."<br>";
	date_modify($input,"+1 month");
	echo "1 month added : ".date_format($input,"Y-m-d H:i:s")."<br>";
	date_add($input,date_interval_create_from_date_string("10 days"));
	date_modify($input,"+1 year");
	echo "1 year added : ".date_format($input,"Y-m-d H:i:s")."<br>";
	echo "10days added to above date : ".date_format($input,"m/d/Y")."<br>";
	date_modify($input,"-3 days");
	echo "3 days subtracted : ".date_format($input,"d-m-Y")."<br>";
	date_modify($input,"-1 month");
	echo "1 month before : ".date_format($input,"Y-m-d H:i:s")."<br>";
?>
