<?php
	
   function leap($year)
	{
	   if ($year==" ") {
	       echo "Script Usage:
	       php Script1.php {date}
	       date - $year";
	   }
		else if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
		{
		echo "$year is a leap year<br>";  
		}
	    
		else
		{
		echo "$year is not a leap year<br>";  
		}
	
	
	}
		

?>
