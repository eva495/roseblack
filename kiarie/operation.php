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
		.pb-video-container {
        padding-top: 20px;
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
	</style>
</head>
<body>
	<!-- navigation bar component -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- navigation logo -->
        <img id="webIcon" src="images/rose1.png"><h3>Black Rose</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link " href="about.php" aria-disabled="false">Accesories</a>
            </li>
        </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">     		 
     		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
    </nav>
<!-- container class -->
	<div class="container">
		<div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">
       <center> <h3 class="text-xs-center">Gun operation Video Gallery</h3></center>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/qWveqBkFV3Q?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Shotgun (Remington 870)</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/wAqE-KLbiYc?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">AR-15 Rifle Works</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/EjQrhDKDWFk?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Pistol (Colt M1911) works!</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/oqFmQYNBwcw?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">How to reload an AK</label>
            </div>
        </div>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/dewCo9IGZrg?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">AK AR Clash of the Rifles</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/cBb_eDYzTSA?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Semi auto pistol</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/IsIX-ZT1Zc8?ecver=" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Shotguns for beginners</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/xKF2fiORD2g?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">my weirdest shotguns</label>
            </div>
        </div>
    </div>
</div>
     <!-- jumbotron component : can be fluid(full span) too-->
		<!-- <form method="post" action="process.php">
		  	<div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password</label>
		  		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form> -->
	</div>
	<div class="footer">
		<div class="jumbotron-fluid">
			<br>
			<h5>social</h5>
			<a href="https://www.facebook.com/NighthawkCustomFirearms" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/facebook.png" alt="Facebook" /></a>
          <a href="https://www.instagram.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/instagram.png" alt="Instagram" /></a>
          <a href="https://www.twitter.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/twitter.png" alt="Twitter" /></a>
          <a href="https://www.youtube.com/user/01NHC" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/youtube.png" alt="Youtube" /></a>
          <a href="https://www.pinterest.com/search/pins/?q=gun%20operation&rs=typed&term_meta[]=gun%7Ctyped&term_meta[]=operation%7Ctyped" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
		</div>
		</center>
	</div>
	
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>

