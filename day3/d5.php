<?php 
$handle = fopen("php.txt", "r");
$handle1 = fopen("tmp/php.txt", "w");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (strpos($line, 'php') !== false) {
            echo $line;
            fwrite($handle1,$line);
            fwrite($handle1,"\n");
        }
       
    }
    
    fclose($handle);
} else {
    
} 

?>

