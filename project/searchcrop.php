<html>
<style>
	body{
		margin:0;
		padding:0;
		background:url(pics/a9);
		background-size: cover;
		font-family: sans-serif;
	}
	</style>
<head>
<style>
	table,th,td{
		border:4px solid black;
		border-collapse: collapse;
		font-family: Comic Sans MS;
	}
	th,td{
		padding:10px;
		font-size: 22px;
	}
	th{
		text-align: left;
		background-color: #ff0000;
		font-size: 20px;
		color: white;
	}
	table{
		border-spacing: 3px;
		border-color: green;
		background-color: #00ccff;
		background:"images/crop2.jpg";
		width:100%;
	
	}

</style>
</head>
<body>
<?php
include("demo.php");
$sql="SELECT * FROM agriculture1.crop WHERE crop_name='$_POST[crop_name]'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) >0)
{			
echo "<table border='1'>
<tr>
<th>Crop ID</th>
<th>Crop Name</th>
<th>Crop Type</th>
<th>Season</th>
<th>Month</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['crop_id'] . "</td>";
echo "<td>" . $row['crop_name'] . "</td>";
echo "<td>" . $row['crop_type'] . "</td>";
echo "<td>" . $row['season'] . "</td>";
echo "<td>" . $row['month'] . "</td>";
"</tr> ";
};
echo "</table>";
}
else
{
echo "<p>crop \"$_POST[crop_name]\""; 
echo " not exists</p>";
exit();
}
mysqli_close($con);
?>
</body>
</html>
