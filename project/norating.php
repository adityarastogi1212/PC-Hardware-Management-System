<html>
<head>
<style>
	table,th,td{
		border:4px solid black;
		border-collapse: collapse;
		border-color:slategrey;
		background-color:white;
		color:#555555;
		font-family:arial;
		opacity:0.9;
	}
	th,td{
		padding:10px;
		font-size: 22px;
	}
	th{
		text-align: left;
		font-size: 20px;
		color:white;
		background-color:#555555;
		opacity:0.9;
	}
	table{
		border-spacing: 3px;
		width:100%;
	
	}

</style>
</head>
<body background="psu1.jpg">
<?php
$con = mysqli_connect("localhost","root","","pccomp");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"pccomp");
$sql="SELECT * FROM pccomp.psu WHERE Rating='none'";
$result=mysqli_query($con,$sql);
echo "<center><table border='10'>
<tr>
<th>Pname</th>
<th>Manufacturer</th>
<th>Rating</th>
<th>Wattage</th>
<th>Price</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['Pname'] . "</td>";
echo "<td>" . $row['Manufacturer'] . "</td>";
echo "<td>" . $row['Rating'] . "</td>";
echo "<td>" . $row['Wattage'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
"</tr> ";
};
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
