<!-- remove whitespaces from  left side of string -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>remove the whitespaces of left side </title>
</head>
<body>
	<h1>Remove the whitespaces from begining / left side</h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="trim from left">	
	</form>
</body>
</html>

<?php
	$s1=$_POST["t1"];
	$r=ltrim($s1);
	print($r);
?>