<?php
	function fact($n)
	{
		$r=1;
		for($i=$n;$i>=1;$i--)
		{
			$r=$r*$i;
		}
		echo "Factorial of ".$n." is : ". $r."<br>";
	}
	fact(5);
	fact(2);
	fact(10);

?>
