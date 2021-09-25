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
mysqli_select_db($con,"register");
$sql = "INSERT INTO registration(Username,email,password) VALUES ('$_POST[uname]','$_POST[email]','$_POST[psw]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

mysqli_close($con)
?>
<br><h1 style="color:white"><center>WELCOME<br><br>
<?php
	echo "User \"$_POST[uname]\" successfully registered";
?>
</h1>
<a style="color:darkblue;font-size:25px;" href="home1.php">Click here to Go to Main Page</a>
</body>
</html>