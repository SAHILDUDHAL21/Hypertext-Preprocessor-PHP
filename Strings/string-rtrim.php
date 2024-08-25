<!-- remove whitespaces from  right side of string -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>remove the whitespaces of right side </title>
</head>
<body>
	<h1>Remove the whitespaces from end / right side</h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="trim right side">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$r=rtrim($s1);
	print($r);
?>