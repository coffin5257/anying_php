<html>
<?php define('Pi',3.141592657); ?>
<form action=9.php method="post">
R:<input type="text" name="r">
<input type="submit" >
<br>S:
<?php $r=(int)$_POST['r']; ?>
<?php $s=Pi*$r*$r; ?>
<?php echo $s;?>
</form>
</html>