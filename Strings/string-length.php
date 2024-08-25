<!-- caculate string length -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculate string length</title>
</head>
<body>
	<h1>Calulate length of string</h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="Calculate length">	
	</form>
</body>
</html>

<?php
	$s1=$_POST['t1'];
	echo(strlen($s1));
?>