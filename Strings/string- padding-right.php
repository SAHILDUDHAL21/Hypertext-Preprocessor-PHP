<!DOCTYPE html>
<html>
<body>
	<h1>Padding string right side </h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1"><br>
		Enter Pading Size : <input type="number" name="t2"><br>
		Enter Padding Character : <input type="text" name="t3"><br>
		<input type="submit" value="Add padding effect">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$n=$_POST["t2"];
	$c=$_POST["t3"];
	$r=str_pad($s1,$n,$c); //By default, padding is in the right side  
	// $r=str_pasd($s1,$n,STR_PAD_RIGHT); // he pn vaparu shakto
	print($r);
?>