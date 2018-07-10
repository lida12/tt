<?php
	function Prime($n)
	{
 		for($x=2; $x<$n; $x++)
   		{
      			if($n %$x ==0)
	      		{
		   		return 0;
		  	}
    		}
  	return 1;
   	}
	$a = Prime(3);
	if ($a==0)
	echo 'is not a Prime Number.....'."\n";
	else
	echo 'This is a Prime Number..'."\n";
?>	
