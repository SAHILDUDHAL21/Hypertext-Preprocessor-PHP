<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		die("Error in connection.....");

	mysqli_query($con,"use sahil");

	$result=mysqli_query($con,"select * from student");
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Roll no</th>";
	echo "<th>Name</th>";
	echo "<th>Persentage</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_close($con);

?>