<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Bookio</title>
	<link rel="shortcut icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.min.css">
</head>
<body data-spy = "scroll" data-target = ".navbar" data-offset = "90">
	<nav class="navbar navbar-expand-md navbar-dark nav-text trans fixed-top">
		<div class="container">
			<a class="navbar-brand" href="">
				<img id="logoW" src="img\logo.svg" width="145px">
				<img id="logoB" src="img\logo-blue.svg" width="145px" class="hidden">
			</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	              <a class="nav-link" href="#section1">Home
	                <span class=""></span>
	              </a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#section2">About us</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#section3">Contact</a>
	            </li>
	          </ul>
	        </div>
		</div>
	</nav>
	<div class="bg dflex" id="section1">
		<div class="container my-auto col-lg-10 col-md-10 col-sm-12" align="left">
			<div class="">
				<div class="my-auto col-lg-5 col-md-5">
					<h2 class="text-uppercase" style="color: #fff;">
              			<strong>
              				<div class="dflex header-text">
              				    <span style="letter-spacing: -0px; margin-bottom: -20px;margin-left:0px; font-size: 0.9em;">BETA</span>
              					<span style="letter-spacing: 4.5px;margin-left:-2px;margin-bottom: -20px; ">OUT</span>
              					<span style="font-size: 0.87em; margin-left:0px; letter-spacing: -2.5px;">NOW</span>
              				</div>
              			</strong>
            		</h2>
            		<p style="margin-left: 2px; font-weight: bold; color: white;">Our sharing platform is out now! Signup and post any book that you want to share. And if you have any suggestions or queries you can contact us <a href = "#section3" style = "text-decoration:none;">here</a>.</p>
            		<a href="demo.php" class="btn btn-primary" style="margin-top: 10px; margin-left: 2px;">
            			Start Sharing
            		</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="display: flex;justify-content: center; margin-top: -70px;" hidden>
		<a href="" class="btn btn-secondary">
			Learn more!
		</a>
	</div>

	<section id="section2">
      <div class="container-fluid">
      	<center><h1 style="color: #454545;">ABOUT US</h1>
        	<div class="row1 dflex fadeInUp hidden">
        		<div class="dflex circle">
		        	<a href="https://www.facebook.com/Rinumuet-159301474821277/">
			        	<img id="RINU" src="img\Asset 1.svg">
		        	</a>
			        <h4 class="dflex circle_text">Winners of RINU</h4>
		        </div>        
		        <div class="dflex circle">
		        	<a href="">
		        		<img id="IDU" src="img\Asset 2.svg">
		        	</a>
		        	<h4 class="dflex circle_text">A Product of IDU</h4>
		        </div>
		        <div class="dflex circle">
		        	<a href="https://iec.muet.edu.pk/">
		        		<img id="IEC" src="img\Asset 3.svg">
		        	</a>
		        	<h4 class="dflex circle_text">Incubated at IEC</h4>
		        </div></center>
        	</div>
        </div>
    </section>

    <section id="section3" style="background-color: #0864af">
		<div class="container">
		  <h1 class="text-center" style="color: white;">CONTACT</h1>
		  <div class="row" style="font: 400 16px Lato, sans-serif;line-height: 1.8;color: rgba(255,255,255,0.85); margin-top: 50px;">
		    <div class="col-sm-5">
		      <p>We'd love to hear from you</p>
		      <p><img src="img\loc.svg" width="15px" style="margin-right: 12px"> Innovation and Entreprneaurship Center, MUET, Jamshoro</p>
		      <p><img src="img\phone.svg" width="20px" style="margin-right: 5px"></span> +92 316 3779356</p>
		      <p><img src="img\email.svg" width="22px" style="margin-right: 8px"></span> info@bookio.pk</p> 
		    </div>
		    <form method="post" class = "col-lg-7 col-md-7 col-sm-7">
			      <div class="row">
			        <div class="col-sm-6 form-group">
			          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
			        </div>
			        <div class="col-sm-6 form-group">
			          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
			        </div>
			      </div>
			      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
			      <div class="row">
			        <div class="col-sm-12 form-group">
			          <input type="submit" name="submit" class="btn btn-default pull-right" value="Send" style="background-color: #f2d738; color: white; padding-left: 26px; padding-right: 26px;" >
			        </div>
			      </div> 
		    </form>
		  </div>
		</div>
    </section>

    <footer class="py-5" style="background-color: #454545">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 - IDreamU | All Rights Reserved</p>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		let navb = document.querySelector("nav");
		let logoW = document.querySelector("#logoW");
		let logoB = document.querySelector("#logoB");
		let circles = document.querySelector(".row1");
		window.onscroll = function() {myFunction()};

		function myFunction() {
		    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		        navb.classList.add('bg-light');
		        navb.classList.remove('navbar-dark');
		        navb.classList.add('navbar-light');
		        logoW.classList.add('hidden');
		        logoB.classList.remove('hidden');
		    } else {
		        navb.classList.remove('bg-light');
		    	navb.classList.remove('navbar-light');
		        navb.classList.add('navbar-dark');
		        logoB.classList.add('hidden');
		        logoW.classList.remove('hidden');
		    }
		    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
		        circles.classList.add('animated');
		        circles.classList.remove('hidden');
		    }
		}
	</script>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	
	mail("info@bookio.pk","Bookio Contact Form","From: ".$name."\n".$comments,"From : ".$email); 
}
?>