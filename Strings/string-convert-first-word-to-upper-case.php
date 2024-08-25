<!DOCTYPE html>
<html>
<body>
	<h1>Convert The first Word of string to upper case  </h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="Convert">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$r=ucwords($s1);
	print($r);
?>