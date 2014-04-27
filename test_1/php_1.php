<meta charset="utf-8" />
<?php 
date_default_timezone_set('Asia/Shanghai'); 
echo date('Y-m-d H:i:s',strtotime('-1 day')); 
echo "<br>";
echo count('Anying');
echo "<br>";
define('PI', 3.14);
echo defined('PI');
echo "<br>";
$n = '123';
$a = (int)$n;
$b = intval($n);
$c = sprintf("%d",$n);

var_dump($a);echo "<br>";
var_dump($b);echo "<br>";
var_dump($c);echo "<br>";

$Anying='Www.Anying.oRg';
$_2cTo='Www.2cTo.cOm';
if ($Anying==$_2cTo) {
	echo '相等';
}else{
	echo '不相等';
}

$x = 'abcdefg';
$y = 'abcx';
if ($x = $y) {
	echo "===";
}
else{
	echo "!!!=";
}

?>