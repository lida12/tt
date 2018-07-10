<?php	$cities=array("Itanagar","Dispur","Patna","Panaji","Raipur","Gandhinagar","Srinagar","Bangalore");
	for($i=0;$i<=(count($cities)-1);$i++)
	{
		if($i<(count($cities)-1))
		echo $cities[$i]." , ";
		else
		echo $cities[$i]."<br>";
	}
	array_push($cities,"Thiruvananthapuram","Bhopal","Mumbai","Banglore","Raipur");
	sort($cities);
	for($j=0;$j<=(count($cities)-1);$j++)
	{
		if($j<count($cities)-1)
		echo $cities[$j]." , ";
		else
		echo $cities[$j];
	}
?>
