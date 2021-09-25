<html>
<style>
	body{
		margin:0;
		padding:0;
		background:url(bg1.jpg);
		background-size: cover;
		font-family: sans-serif;
	}
</style>
<body >
 <?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect:'  . mysqli_error($con));
}
mysqli_select_db($con,"pccomp");
$sql = "INSERT INTO gpu VALUES ('$_POST[gname]','$_POST[brand]','$_POST[vtype]','$_POST[vcap]','$_POST[watt]','$_POST[performance]','$_POST[price]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

mysqli_close($con)
?>
<br><h1 style="color:white"><center>WELCOME<br><br>
<?php
	echo "\"$_POST[gname]\" successfully inserted";
?>
</body>
</html>