<!DOCTYPE html>
<html>
<body>
	<h1>Compare First n character of two strings Ignoring cases </h1>
	<form method="post" action="#">
		Enter First String  : <input type="text" name="t1"> <br>
		Enter Second String : <input type="text" name="t2"><br>
		Enter Number Of Character To Compare : <input type="number" name="t3"><br>
		<input type="submit" value="Compare">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$n=$_POST["t3"];
	$r=strncasecmp($s1,$s2,$n);
	if($r==0)
		echo("Strings are same/equal");
	elseif($r<0)
		echo("The First string is greater ");
	elseif($r>0)
		echo("The second string is greater ");
?>