<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<title>Home Page</title>
<style>
*{
	margin: 0px;
	padding: 0px;
}


.navbar ul{
	list-style: none;
	margin-left:1.8%;
	padding-top:5px;
}
.navbar ul li {
	background-color: rgb(58, 73, 88);
	border:1px solid white;
	width: 143px;
	height:35px;
	font-size:13px;
	line-height: 35px;
	text-align: center;
	position: relative;
	float:left;
	border-radius: 5px;
	}
.navbar ul li a{
	text-decoration: none;
	color: white;
	display:block;
}
.navbar ul li a:hover
{
	background:#3399ff;
	border-radius: 8px;
	top:38px;
}
.navbar ul ul{
	position: absolute;
	display: none;
	transition-delay: 500ms;

}
.navbar ul li:hover > ul{
	display:block;

}
.navbar ul ul ul{
	margin-left: 144px;
	top:0px;
}
h3.one {
	height:40px;
	font-size: 20px;
	color: white ;
	background-color: slategrey;
}

.slideshow-container {
	border:4px solid black;
	    margin-left: 22%;
		margin-right: 22%;
		
		border-collapse: collapse;
		border-color:slategrey;
		background-color:black;
		color:#555555;
		font-family:Arial, Helvetica, sans-serif;
		}
button {
    background-color:rgb(59, 75, 92);
    color: white;
    padding: 15px 30px;
    margin: 4px 5px;
    border: none;
    cursor: pointer;
    width: 80%;
    text-align: center;
    font-size: 20px;
    border-radius: 10px;
}

button1 {
    background-color:red;
    color: white;
    padding: 10px 10px;
    margin: 2px 0;
    border: none;
    cursor: pointer;
    width: 6%;
    text-align: center;
}


</style>
</head>
<body background="bg1.jpg"; style=";font-family:arial, cursive, sans-serif">
	<div>
		<center>
			<img src="logo1.png">
		</center>
		<!--	<br><h3 class=one style="font-size: 200%;color:smokewhite;" align="center">A complete catalog to assemble a PC</h3><br><br>-->

			<div class="navbar">
		<ul>
			<li><a href="#">CPU<span></a>
				<ul>
					<li><a href="allcpu.php">All</a></li>
					<li><a href="#">Brand</a>
					<ul>
						<li><a href="intel.php"><b>Intel</b></a></li>
						<li><a href="amd.php"><b>AMD</b></a></li>
					</ul>
				</li>
					<li><a href="#">No. of cores</a>
					<ul>
						<li><a href="dual.php"><b>Dual</b></a></li>
						<li><a href="quad.php"><b>Quad</b></a></li>
						<li><a href="hexa.php"><b>Hexa</b></a></li>
						<li><a href="octa.php"><b>Octa</b></a></li>
						<li><a href="grtocta.php"><b>Greater than 8</b></a></li>
					</ul>
				</li>
					<li><a href="perf.php">Performance</a>	
				</li>
				<li><a href="price.html">Set Price Limit</a>	
				</li>
				<li><a href="compmobo.html"><h6>Compatible Motherboards</h6></a>	
				<li><a href="bestvaluecpu.php">Value for Price</a>	
				</li>
				</ul>
			</li>
			<li><a href="#">Motherboard</a>
				<ul>
					<li><a href="allmobo.php">All Motherboard</a></li>
					<li><a href="slot.html">Slot</a></li>
					<li><a href="#">RAM Slot</a>
					<ul>
						<li><a href="ddr2.php"><b>DDR2</b></a></li>
						<li><a href="ddr3.php"><b>DDR3</b></a></li>
						<li><a href="ddr4.php"><b>DDR4</b></a></li>
					</ul>
				</li>
				    <li><a href="#">Overclockable</a>
					<ul>
						<li><a href="yes.php"><b>Yes</b></a></li>
						<li><a href="no.php"><b>No</b></a></li>
					</ul>
				</li>
				<li><a href="pricemobo.html">Set Price Limit</a>	
				<li><a href="compram.html">Compatible RAM</a>
				</ul>

			</li>
			<li><a href="#">RAM</a>
			<ul>
					<li><a href="allram.php">All RAM</a></li>
					<li><a href="#">Brand</a>
					<ul>
						<li><a href="corsair.php"><b>Corsair</b></a></li>
						<li><a href="crucial.php"><b>Crucial</b></a></li>
						<li><a href="kingston.php"><b>Kingston</b></a></li>
						<li><a href="hyperx.php"><b>HyperX</b></a></li>
						<li><a href="transcend.php"><b>Transcend</b></a></li>
					</ul>
					<li><a href="#">RAM Slot</a>
					<ul>
						<li><a href="ddr2r.php"><b>DDR2</b></a></li>
						<li><a href="ddr3r.php"><b>DDR3</b></a></li>
						<li><a href="ddr4r.php"><b>DDR4</b></a></li>
					</ul>
					</li>
					<li><a href="#">RAM Capacity</a>
					<ul>
						<li><a href="2gb.php"><b>2GB</b></a></li>
						<li><a href="4gb.php"><b>4GB</b></a></li>
						<li><a href="8gb.php"><b>8GB</b></a></li>
					</ul>
					</li>
					<li><a href="priceram.html">Set Price Limit</a>
					</ul>
			</li>
			
			<li><a href="#">GPU</a>
			<ul>
					<li><a href="allgpu.php">All GPU</a></li>
					<li><a href="#">Brand</a>
					<ul>
						<li><a href="nvidia.php"><b>Nvidia</b></a></li>
						<li><a href="amdgpu.php"><b>AMD</b></a></li>
					</ul> </li>
					<li><a href="#">VRAM Capacity</a>
					<ul>
						<li><a href="v1gb.php"><b>1GB</b></a></li>
						<li><a href="v2gb.php"><b>2GB</b></a></li>
						<li><a href="v3gb.php"><b>3GB</b></a></li>
						<li><a href="v4gb.php"><b>4GB</b></a></li>
						<li><a href="v6gb.php"><b>6GB</b></a></li>
						<li><a href="v8gb.php"><b>8GB</b></a></li>
						<li><a href="v11gb.php"><b>11GB</b></a></li>
					</ul>
					</li>
					<li><a href="gpuperformance.php">Performance</a>	
					<li><a href="pricegpu.html">Set Price Limit</a>	
					<li><a href="bestvaluegpu.php">Value for Price</a>	
				</ul>
			</li>

			<li><a href="#">PSU</a>
			<ul>
					<li><a href="allpsu.php">All PSU</a></li>
					<li><a href="#">Manufacturer</a>
					<ul>
						<li><a href="corsairpsu.php"><b>Corsair</b></a></li>
						<li><a href="coolermaster.php"><b>Coolermaster</b></a></li>
						<li><a href="antec.php"><b>Antec</b></a></li>
						<li><a href="thermaltake.php"><b>Thermatake</b></a></li>
					</ul> </li>
					<li><a href="#">Rating</a>
					<ul>
						<li><a href="norating.php"><b>None</b></a></li>
						<li><a href="80plus.php"><b>80+</b></a></li>
						<li><a href="80plusbronze.php"><b>80+ Bronze</b></a></li>
						<li><a href="80plusgold.php"><b>80+ Gold</b></a></li>
					</ul>
					</li>
					<li><a href="pricepsu.html">Set Price Limit</a>	
				</ul>
			</li>

			<li><a href="#">Cabinet</a>
				<ul>
					<li><a href="allcabinet.php">All Cabinets</a></li>
					<li><a href="#">Manufacturer</a>
						<ul>
							<li><a href="corsaircab.php"><b>Corsair</b></a></li>
							<li><a href="coolermastercab.php"><b>Coolermaster</b></a></li>
							<li><a href="anteccab.php"><b>Antec</b></a></li>
							<li><a href="thermaltakecab.php"><b>Thermatake</b></a></li>
							<li><a href="NZXT.php"><b>NZXT</b></a></li>
						</ul>
					</li>
					<li><a href="#">Type</a>
						<ul>
							<li><a href="atx.php"><b>ATX</b></a></li>
							<li><a href="minatx.php"><b>Mini ATX</b></a></li>
							<li><a href="microatx.php"><b>Micro ATX</b></a></li>
							<li><a href="miniitx.php"><b>Mini ITX</b></a></li>
						</ul>
					</li>
					<li><a href="pricecab.html">Set Price Limit</a>
				</ul>
			</li>

			<li><a href="#">Storage</a>
			<ul>
					<li><a href="allstorage.php">All Storage</a></li>
					<li><a href="#">Brand</a>
					<ul>
						<li><a href="wd.php"><b>WD</b></a></li>
						<li><a href="seagate.php"><b>Seagate</b></a></li>
						<li><a href="kingstonstorage.php"><b>Kingston</b></a></li>
						<li><a href="sandisk.php"><b>Sandisk</b></a></li>
						<li><a href="samsung.php"><b>Samsung</b></a></li>
					</ul>
					<li><a href="#">Type</a>
					<ul>
						<li><a href="hdd.php"><b>HDD</b></a></li>
						<li><a href="ssd.php"><b>SSD</b></a></li>
					</ul>
					</li>
					<li><a href="#">Capacity</a>
					<ul>
						<li><a href="120gb.php"><b>120GB</b></a></li>
						<li><a href="240gb.php"><b>240GB</b></a></li>
						<li><a href="250gb.php"><b>250GB</b></a></li>
						<li><a href="480gb.php"><b>480GB</b></a></li>
						<li><a href="500gb.php"><b>500GB</b></a></li>
						<li><a href="1tb.php"><b>1TB</b></a></li>
						<li><a href="2tb.php"><b>2TB</b></a></li>
						<li><a href="3tb.php"><b>3TB</b></a></li>
					</ul>
					</li>
					<li><a href="pricestorage.html">Set Price Limit</a>	
				</ul>
			</li>

			<li><a href="#">Peripherals</a>
			<ul>
					<li><a href="allperipherals.php">All Peripherals</a></li>
					<li><a href="#">Type</a>
					<ul>
						<li><a href="monitor.php"><b>Monitor</b></a></li>
						<li><a href="keyboard.php"><b>Keyboard</b></a></li>
						<li><a href="mouse.php"><b>Mouse</b></a></li>
					</ul>
					</li>
					<li><a href="priceperi.html">Set Price Limit</a>	
				</ul>
			</li>

			
			<li><a href="home.html">LOGOUT</a></li>
		</ul>
	</div><br><br><br>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="mobo1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="ram1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="gpu1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="psu1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="storage1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="peripherals.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="case1.jpg" style="width:100%">
</div>

</div>
<br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

		<!--</div>
		<div class="logout">
		<br><br><form action="login.html" method="post">
					<button type="submit" name="logout" >Logout</button>
				</form>
		</div>-->
		
</div>
<?php   
session_destroy(); //destroy the session
exit();
?>
</body>
</html>