<?php
	function check($n)
	{
		$a=$n>30?"Greater than 30":($n>20?"Greater than 20":($n>10?"Greater than 10":"less than 10"));
		echo $n." ".$a."<br>";
	}
	check(23);
	check(5);
	check(44);

?>
