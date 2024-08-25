<!DOCTYPE html>
<html>
<body>
	<h1>Convert string to lower case </h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="Lower case">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$r=strtolower($s1);
	print($r);
?>