<!--<?php
  session_start();
  require 'dbconfig/config.php';
?>-->
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #272727;
    box-sizing:100px;
}
div.container {
  float:right;
}
/* Set a style for all buttons */
/*.button1 {
    background-color: slategrey;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}*/

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 20px 0 10px 0;
    position: relative;
}
.container {
    padding: 20px;
    align-content: center;
    background: aliceblue;
}
	form{
		align-content: center;
}
.form {
		align-content: center;
		margin-left: 500px;
		margin-right: 300px;
        margin-top:5%;
        margin-bottom:5% 
		padding: 5px 5px;
		overflow:auto;
}
span.password {
    float: right;
    padding-top: 16px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 5vh;
   background-color: #778899;
   color: white;
   text-align: center;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    margin-color:#353535;
}

/* Modal Content/Box */
.modal-content {
    background-color: #660066;
    margin: 5% 0% 15% auto ; /* 5% from the top, 15% from the bottom and centered */
    border: 10px solid #00FF33;
    width: 25%; 
    font-color:red;/*Could be more or less, depending on screen size */
}

article {
   margin-right:10px;
    float:left;
    overflow: hidden;
  }
/* Full-width input fields */
/* Set a style for all buttons */

button {
    background-color:#f9ffe0;
    color: rgb(43, 42, 42);
    padding: 15px 90px;
    margin-right: 50%;
    margin-left: 500px;
    border: solid;
    width: 32%;
    font-size: 12px;
    border-radius: 8px;
    text-align:right;
}

nav{
  float:left;
  max-width:100%;
  padding:4em;

}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.password{
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body background="bg.jpg">
<img src="logo1.png"style="Margin-left:420px">
<form action="setpricecpu.php">
  <input type="text" name="Price" value="Price" placeholder="Enter the price limit">
  <input type="submit" value="Submit">
 </form> 
<center>
 
 <div class="footer"> Project By Pareekshith U.S Katti and Ponnanna M.B</div>
</center>
</body>
</html>
