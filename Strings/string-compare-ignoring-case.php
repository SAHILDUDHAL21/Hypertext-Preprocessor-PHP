<!DOCTYPE html>
<html>
<body>
	<h1>Compare to strings Ignoring cases </h1>
	<form method="post" action="#">
		Enter First String  : <input type="text" name="t1"> <br>
		Enter Second String : <input type="text" name="t2"><br>
		<input type="submit" value="Convert">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$r=strcasecmp($s1,$s2);
	if($r==0)
		echo("Strings are same/equal");
	elseif($r<0)
		echo("The First string is greater ");
	elseif($r>0)
		echo("The second string is greater ");
?>