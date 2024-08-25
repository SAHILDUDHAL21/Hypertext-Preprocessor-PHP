<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search in data base</title>
</head>
<body>
	<form method="post" action="#">
		Enter Student Roll no to search : 
		<input type="number" name="t1"><br>
		<input type="submit" name="" value="Search record">

	</form>

</body>
</html>
<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		die("Error in connection");
	$no=$_POST['t1'];
	mysqli_query($con,"use sahil");
	$r=mysqli_query($con,"select * from student where rno=$no");

	if($r=mysqli_fetch_array($r))
	{
		echo "<br>Name=".$r[1];
		echo "<br>Persentage=".$r[2];
	}
	else
	{
		echo "Not Found";
	}

	mysqli_close($con);
?>