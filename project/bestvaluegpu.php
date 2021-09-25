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
<body background="gpu.jpg">
<?php
$con = mysqli_connect("localhost","root","","pccomp");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"pccomp");
$sql="SELECT g.Gname,g.Brand,g.VRAMType,g.VRAMCapacity,g.Price,g.Performance, g.Performance/g.Price AS 'Performance for price' 
FROM gpu g  
ORDER BY `Performance for price`  
DESC
";
$result=mysqli_query($con,$sql);
echo "<center><table border='10'>
<tr>
<th>Gname</th>
<th>Brand</th>
<th>VRAM Type</th>
<th>VRAM Capacity</th>
<th>Performance</th>
<th>Price</th>
<th>Performance Per Rupee</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['Gname'] . "</td>";
echo "<td>" . $row['Brand'] . "</td>";
echo "<td>" . $row['VRAMType'] . "</td>";
echo "<td>" . $row['VRAMCapacity'] . "</td>";
echo "<td>" . $row['Performance'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Performance for price'] . "</td>";
"</tr> ";
};
echo "</table>";
mysqli_close($con);
?>
</body>
</html>

