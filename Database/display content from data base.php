<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		die("Error in connection.....");

	mysqli_query($con,"use sahil");

	$result=mysqli_query($con,"select * from student");
	while ($row=mysqli_fetch_array($result))
	{
		echo "<br><br>Roll no = ".$row[0];
		echo "<br>Name = ".$row[1];
		echo "<br>Persentage = ".$row[2];
	}

	mysqli_close($con);

?>