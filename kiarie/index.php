<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
  }
?>
 <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
      </h3>
      </div>
  <?php endif ?>

    <!-- logged in user information -->
   

<!DOCTYPE html>
<html>
<head>
	<title>Black Rose Guns Showcase</title>
	<link rel = "stylesheet" href = "boot.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
	<style type="text/css">
		img#webIcon {
			width: 50px;
			height: 50px;
			border-radius: 50%;
		}
		h3 {
			color: #fff;
			padding: 0px 250px 0px 10px;
		}
		/*.carousel{
		    background: #2f4357;
		    margin-top: 20px;
		}
		/*.myCarousel{
		    text-align: center;
		    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
		}
		.bs-example{
			margin: 20px;
		}
		.myItem img {
			height: 50%;
			width: 50%;
		}
		.description {
			text-align: center;
			color: #fff;
		}
		.anImage {
			height: 200px;
/*			background-color: rgba(255, 159, 159, 0.7);
*/		}
		.footer {
			height: 200px;
			background: #000000;
			color: #fff;
		}
		.vivi{
			height:200px;
			//width:40%;
			background-repeat:no-repeat;
		}
		.rein{
			width:20%;
			height:50px;
		}
		h2{
			font-size:12;
		}
		* {
			box-sizing:border-box;
			margin:0px;
		}

		/* Slideshow container */
		.slideshow-container {
		  width: 100%;
		  height: 600px;
		  position: relative;
		  margin: auto;
		}

		/* Hide the images by default */
		.mySlides {
		  display: none;
		  width: 100%;
		  height: 600px;
		}

		/* Fading animation */
		.fades {
		  -webkit-animation-name: fades;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fades;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fades {
		  from {opacity: .4}
		  to {opacity: 1}
		}

		@keyframes fades {
		  from {opacity: .4}
		  to {opacity: 1}
		}
		.mask {
			position: absolute;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.7);
			align-content: center;

		}
		.intro {
			padding-top: 12%;
			text-shadow: 1px 0px 0px  #fff;
			font-stretch: expanded;
			font-size: 2em;
			font-family: monospace;
		}
		hr {
			
			border-color: #777;
			border-width: 0.5px;
			width: 700px;
			padding-bottom: 1%;

		}
		h5{
			font-size: 34px;
			font-style:;
		}
		.username {
			font-size: 1em;
			text-decoration: none;
			color: cyan !important;
		}
		.username:hover {
			color: cyan !important;
		}
		.guest {
			height: 30px;
			width: 30px;
			border-radius: 50%;
			margin-top: 5px !important;
		}
	</style>
</head>
<body>
	<!-- navigation bar component -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<!-- navigation logo -->
	 	<img id="webIcon" src="images/rose1.png"><h3>Black Rose</h3>
	 		<!--h3>Black Rose <i>Easy to learn </i></h3>-->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    	 <li class="nav-item">
            <a class="nav-link " href="index.php" aria-disabled="false">home</a>
            </li>
	    	<li class="nav-item">
        	<a class="nav-link " href="categories.php" aria-disabled="false">categories</a>
    		</li>
	    	<li class="nav-item">
        	<a class="nav-link " href="manifucture.php" aria-disabled="false">Top manufactures</a>
    		</li>
	    	<li class="nav-item">
	        	<a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
	      	</li>
    		<li class="nav-item">
        	<a class="nav-link " href="about.php" aria-disabled="false">Accessories</a>
    		</li>
    		<li class="nav-item">
        	<img class="guest" src="images/guest.png"/>
    		</li>
    		<li class="nav-item">
	        	<?php  if (isset($_SESSION['username'])) : ?>
	        		
	    		<?php echo '<a class="nav-link username">'.$_SESSION['username'].'</a>'; ?>
    		</li>
    		<li class="nav-item">
        		<p> <a class="nav-link " href="index.php?logout='1'" style="color: white;">logout</a> </p>
    			<?php endif ?>
    		</li>
    	</ul>
    
  		</div>
	</nav>
<!-- container class -->
	<div class="container-fluid" style="background: #000">
		<div class="slideshow-container">

		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fades">
		    <div class="mask">
		    	<div class="description"><h4 class="intro"><center><hr></center>Black Rose is a one stop spot for you to learn about firearms. <br/>Take a look at our top manufacturers and even get to have<br> a sneek peek at how different firearms operate! </h4>

			</div>
		    </div>
		    <img src="images/gun9.jpg" style="width:100%;height: 100%">
		    
		  </div>

		  <div class="mySlides fades">
		    <div class="mask">
		    	<center>
			    	<div class="description"><h4 class="intro"><center><hr></center>Black Rose is a one stop spot for you to learn about firearms. <br/>Take a look at our top manufacturers and even get to have<br> a sneek peek at how different firearms operate! </h4>
					</div>
				</center>
		    </div>
		    <img src="images/gun11.jpg" style="width:100%;height: 100%">
		    
		  </div>

		  <div class="mySlides fades">
		    <div class="mask"><div class="description"><h4 class="intro"><center><hr></center>Black Rose is a one stop spot for you to learn about firearms. <br/>Take a look at our top manufacturers and even get to have<br> a sneek peek at how different firearms operate! </h4>
			</div></div>
		    <img src="images/gun7.jpg" style="width:100%;height: 100%">
		    
		  </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<div class="anImage">
				<img src="images/rem.png" alt="an image">
				<h2>SHOTGUNS -Magnum Research Desert Eagle Mark XIX with brushed chrome finish - .50 AE</h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="anImage">
				<img id="rein" src="images/gun1.jpeg" alt="an image">
				<h2>RIFLES-since a few nerfs have already been deployed to the popular 725 shotgun and M4A1 assault rifle.</h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="anImage">
							<a href="" target="-blank"><img src="images/sss.jpeg" alt="an image" style=""></a>
				<h2>SHOTGUNS-Benelli Supernova a 12 gauge shotgun made in Italy in 2006</h2>

				</div>
		</div>
	</div>
	<center>
	<div class="footer">
		<div class="jumbotron-fluid">
			<br>
			<h5>social</h5>
			<a href="https://www.facebook.com/NighthawkCustomFirearms" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/facebook.png" alt="Facebook" /></a>
          <a href="https://www.instagram.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/instagram.png" alt="Instagram" /></a>
          <a href="https://www.twitter.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/twitter.png" alt="Twitter" /></a>
          <a href="https://www.youtube.com/user/01NHC" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/youtube.png" alt="Youtube" /></a>
          <a href="https://www.pinterest.com/search/pins/?q=gun%20collections&rs=typed&term_meta[]=gun%7Ctyped&term_meta[]=collections%7Ctyped" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
		</div>
		</center>
	</div>
	
		
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
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>
