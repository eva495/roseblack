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
    <?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="homm.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
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
		.footer {
			height: 200px;
			background: #000000;
			color: #fff;
		}
		.One{
			background:#202020;
		}
		.justify-content-md-center{
			background:#000000;
		}
		p{
			color: #fff;

		}
		.riff{
			border-radius: 8px;
		}
		h2{
	         color: #fff;
	         font-size:24px;
	         font-style: italic;

		}
	</style>
</head>
<body>
	<!-- navigation bar component -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<!-- navigation logo -->
	 	<img id="webIcon" src="images/rose1.png"><h3>Black Rose</h3>
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
        	<a class="nav-link " href="manifucture.php" aria-disabled="false">Top manufacturers</a>
    		</li>
	    	<li class="nav-item">
	        	<a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
	      	</li>
    		<li class="nav-item ">
        <a class="nav-link" href="#" aria-disabled="false"> Accesories</a>
        </a>
      </li>
    </ul>
    		<form class="form-inline my-2 my-lg-0">     		 
     		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
  		</div>
	</nav>
	<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Accesories available </div>
      <div class="list-group list-group-flush">
        <a href="http://www.doubletapammo.net/" class="list-group-item list-group-item-action bg-light">Double tap ammunation</a>
        <a href="https://www.etsy.com/market/gun_swag" class="list-group-item list-group-item-action bg-light">Lifestyles</a>
        <a href="https://www.opticsplanet.com/gun-mount-flashlights.html" class="list-group-item list-group-item-action bg-light">Tactical training</a>
                <a href="http://pdf.textfiles.com/manuals/FIREARMS/" class="list-group-item list-group-item-action bg-light">manuals</a>
        <a href="https://outdoorchief.com/best-drag-bags-and-gun-cases-top-5-reviews/" class="list-group-item list-group-item-action bg-light">Drags bags</a>

      </div>
    </div>

<!-- container class -->
	<div class="container">
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
			<div class="row justify-content-md-center"><p>Barrels</p></div>
			<hr>
			<div class="row One">

				
				<div class="col-md-4 imageCol">
						
						<img class="myImage" id="riif" src="images/luger.jpg" alt="anImage">
						<h2>Lothar Walther Luger 08 Original Long</h2>
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/bond.jpg" alt="anImage">
						<h2>Vizard's Guns & Ammo Bond Arms BAJW9MM  Black Rubber Grip*</h2>					
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/glov.jpg"  alt="anImage">
						 <h2>BARREL GLOCK 19 BURNT BRONZE 9MM LUGER</h2> 
					
				</div>
			
			</div>
		
	</div>
	</div>
	<div class="row justify-content-md-center"><p>Gun holders</p></div>
			<hr>
			<div class="row One">

				
				<div class="col-md-4 imageCol">
						
						<img class="myImage" id="riif" src="images/pin.jpg" alt="anImage"><h2>Pin on BBS & BB loader</h2>
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/amo.jpg" alt="anImage">
<h2> Shell Bullet Belt Cartridge Ammo Holder</h2>					
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/tac.jpg" alt="anImage">
						 <h2>Adjustable Tactical Butt Stock Rifle Cheek Rest Pouch Bullet</h2> 
					
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
          <a href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=gun%20holders%20wall&eq=gun%20holder&etslf=5557&term_meta[]=gun%7Cautocomplete%7C0&term_meta[]=holders%7Cautocomplete%7C0&term_meta[]=wall%7Cautocomplete%7C0" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
		</div>
		</center>
	</div>
	
    </div>
</center>
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>

