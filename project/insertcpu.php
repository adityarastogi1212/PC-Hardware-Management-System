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
$sql = "INSERT INTO cpu VALUES ('$_POST[cname]','$_POST[slot]','$_POST[brand]','$_POST[gen]','$_POST[threads]','$_POST[cores]','$_POST[tdp]','$_POST[performance]','$_POST[price]','$_POST[type]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

mysqli_close($con)
?>
<br><h1 style="color:white"><center>WELCOME<br><br>
<?php
	echo "\"$_POST[cname]\" successfully inserted";
?>
</body>
</html>