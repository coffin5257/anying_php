<?php
echo '<hr>GET Method<br>'; 
var_dump($_GET);
echo "<br>";
echo '<hr>POST Method<br>';
var_dump($_POST);
?>

<form action="4.php" method="get">
Post_Name:<input type="text" name="username"/>

