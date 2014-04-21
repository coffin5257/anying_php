<?php 
$name1 = "coffin";
$name2 = $name1;
$name3 = "coffin";
$name4 =& $name3;
var_dump($name1,$name2,$name3,$name4);
echo "<br>";
$name2 = "coffin5257" ;
$name4 = "coffin5257" ;
var_dump($name1,$name2,$name3,$name4);
?>
