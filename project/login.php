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
<body>
<?php
session_start();
$db = mysqli_connect('localhost', 'root','', 'register');
// Grab User submitted information
$uname = $_POST["uname"];
$pass = $_POST["psw"];
// Make sure we connected successfully
if(! $db)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
$query = "SELECT * FROM registration WHERE Username='$uname' AND password='$pass'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

if($row["Username"]==$uname && $row["password"]==$pass)
    header('Location: home1.php');
else
    echo"<h1 style='color:white'>Sorry, your credentials are not valid, Please try again.</h1>";
?>
</html>

