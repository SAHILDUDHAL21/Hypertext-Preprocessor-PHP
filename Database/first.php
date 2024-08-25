<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		die("DataBase not Connected");
	mysqli_select_db($con,"sahil");
	$r=mysqli_query($con,"insert into student values(1,'om',76)");
	mysqli_close($con);
?>