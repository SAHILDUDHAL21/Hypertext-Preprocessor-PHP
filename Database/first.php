<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert in data base</title>
</head>
<body>
	<form method="post" action="#">
		Enter Student Roll no to search : 
		<input type="number" name="t1"><br>
		Enter Student Roll no to search : 
		<input type="text" name="t2"><br>
		Enter Student Roll no to search : 
		<input type="number" name="t3"><br>
		<input type="submit" name="" value="Insert record">

	</form>

</body>
</html>
<?php
	$rno=$_POST['t1'];
	$nm=$_POST['t2'];
	$per=$_POST['t3'];

	$con=mysqli_connect("localhost","root","");
	if(!$con)
		die("DataBase not Connected");
	mysqli_select_db($con,"sahil");
	$r=mysqli_query($con,"insert into student values($rno,'$nm',$per)");
	echo "record inserted";
	mysqli_close($con);
?>