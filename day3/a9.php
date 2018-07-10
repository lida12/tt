<?php
	$studentMarks = array(
68, 70, 72, 49, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 34, 68, 72, 56, 23, 73, 45, 24, 85, 89, 83);
	echo "Number of students : ".(count($studentMarks))."<br>";
	echo "Average Marks : ".(array_sum($studentMarks)/count($studentMarks))."<br>";
	sort($studentMarks);
	$s=count($studentMarks);
	echo "Highest Mark : ".$studentMarks[$s-1]."<br>";
	echo "Lowest Mark : ".$studentMarks[0]."<br>";
	echo "Bottom 5 : ";
	for($i=0;$i<5;$i++)
	{
		echo $studentMarks[$i]." ";
	}	
	echo "<br>Top 5 : ";
	for($j=count($studentMarks);$j>(count($studentMarks)-6);$j--)
	{
		echo $studentMarks[$j]." ";
	}
	echo "<br> No. of student less than 50 : ";
	$k=0;
	do{
		$k++;
	}while(count($studentMarks[$k]));
	if($studentMarks[$k]<50)
	echo count($studentMarks[$k]);
		
	
?>
