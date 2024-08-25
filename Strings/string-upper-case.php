<!DOCTYPE html>
<html>
<body>
	<h1>Convert string to upper case </h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="Upper case">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$r=strtoupper($s1);
	print($r);
?>