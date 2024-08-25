Swap Two Numbers

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swap Two Numbers</title>
</head>
<body>
	<form method="post" action="#">
		Enter First Number : <input type="number" name="t1">
		Enter Second Number : <input type="number" name="t2">
		<input type="submit" value="Swap">
	</form>
</body>
</html>

<?php
	$a=$_POST["t1"];
	$b=$_POST["t2"];

	$t=$a;
	$a=$b;
	$b=$t;

	echo("First Number = $a");
	echo("<br>Second Number = $b");
?>