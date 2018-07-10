<?php
	$s="phpresource";
	$r="r";
	$c="0";
	for($i="0"; $i< strlen($s); $i++)
  	{	 
    		if(substr($s,$i,1)==$r)
    		{
    		$c=$c+1;
	 	}
  	}
	echo $c."\n";
?>
