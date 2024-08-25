Check Even Odd
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check Even Odd</title>
</head>
<body>
	<form method="post" action="evenodd.php">
		Enter No : <input type="number" name="t1">
		<input type="submit" value="Ok">
	</form>
</body>
</html>

<?php
	$n=$_POST["t1"];
	if($n%2==0)
		echo "Number is Even";
	else
		echo "Number is Odd";
?>