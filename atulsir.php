
<?php
session_start();

if (!isset($_SESSION['username'])  && $_SESSION['page']!="atulsir.php") {
	header('location:login.php');
	# code...	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Atul Sir</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">E-College</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="">Works</a></li>
					<li> <a href="">Team</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="">Carrier</a></li>
					<!-- <li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal">Login/Signup</a></li> -->
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li>
			<li style="background-color:#ffde59;"><a href="">DSP - Home</a></li>
			<li><a href="">DSP - Overview</a></li>
			<li><a href="">DSP - Architecture</a></li>
			<li><a href="">DSP - History</a></li>
			<li><a href="">DSP - Modern</a></li>
			<li><a href="">DSP - See also</a></li>
			<li><a href="">DSP - Reference</a></li>
			<li><a href="">DSP -  External links</a></li>
			<li><a href="">DSP - DFT</a></li>
			<li><a href="">DSP - Digital Filter</a></li>
			<li><a href="">DSP - Z-transform</a></li>
			<li><a href="">DSP - ROC</a></li>
			<li><a href="">DSP - FFT</a></li>
			<li><a href="">DSP - DTFT</a></li>
			<li><a href="">DSP - Foruier series</a></li>
			<li><a href="">DSP - LTI</a></li>
			<li><a href="">DSP - Impulse response</a></li>
			<li><a href="">DSP - Pass Filter</a></li>
			



		</ul>
	</div>

	 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent">
		<div class="title-image">
			<img src="vishal sir.png.jpg" style="margin-left: 270px;" height="240px"><br>
			<h1> &emsp; &emsp; &emsp; &emsp;&emsp; Dr.Vishal Awasthi</h1>
		</div>
		<div class="content">
		<h4 style="font-family: 'Assistant', sans-serif;" class="content">
			<h3 class="text-center" style="color:#fd0000;"> DSP Introduction</h3><br>
			<p style="color: aliceblue;">DSP stands for digital signal processor, which sounds pretty self-explanatory. The technology is found inside headphones, smartphones, smart speakers, studio audio gear, vehicle entertainment systems, and much more. It’s actually a cornerstone of modern audio products.</p>

				<br><h3 style="font-family: 'Rubik', sans-serif; font-style: bold; color:#fd0000;" class="text-center">Audience</h3><br>
				<p style="color: aliceblue;">This tutorial is designed for DSP who need to learn DSP language from scratch.</p>

				<br><h3 class="text-center" style="font-style: bold;color:#fd0000;">Prerequisites</h3><br>
				<p style="color: aliceblue;">You should have a basic understanding of Signal and System</p>

		</h4>
		</div>
		<button id="btn_next" style="background-color:#ffde59; ">Next</button>
	</div>


	<!------java main content starts ---->


<!-- 	<script type="text/javascript">
		
		function opensidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='250px';
			document.getElementById('mainpagecontent').style.marginLeft='250px';
		}

		function closesidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='0';
			document.getElementById('mainpagecontent').style.marginLeft='0px';			
		}

	</script>
 -->
</body>
</html> 