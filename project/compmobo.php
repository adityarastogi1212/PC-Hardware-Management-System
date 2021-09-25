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
<body background="bg1.jpg">
<?php
$con = mysqli_connect("localhost","root","","pccomp");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"pccomp");
$sql="SELECT m.Mname 
FROM motherboard m, cpu c 
WHERE m.Slot=c.Slot 
AND c.Cname='$_POST[CPUName]'";
$result=mysqli_query($con,$sql);
echo "<center><table border='10'>
<tr>
<th>Mname</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['Mname'] . "</td>";
"</tr> ";
};
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
