<!-- remove whitespaces from string -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>remove the whitespaces</title>
</head>
<body>
	<h1>Remove the whitespaces</h1>
	<form method="post" action="#">
		Enter String : <input type="text" name="t1">
		<input type="submit" value="trim">	
	</form>
</body>
</html>

<?php
	$s1=$_POST['t1'];
	echo(trim($s1));
?>