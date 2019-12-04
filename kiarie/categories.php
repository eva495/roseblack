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
		.row{
			color: #000000;
		
		}
		.footer {
			height: 200px;
			background: #000000;
			color: #fff;
			width: 100%;
		}
		h4{
			font-size:20;
			font-color:#000000;
		}
		.imageCol {
			height: 200px;

		}
		.myImage {
			height: 80%
			width: 100%;
		}
		#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

/* Toggling the sidebar header content, hide the big heading [h3] and showing the small heading [strong] and vice versa*/
#sidebar .sidebar-header strong {
    display: none;
}
#sidebar.active .sidebar-header h3 {
    display: none;
}
#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
}

/* Same dropdown links padding*/
#sidebar.active ul ul a {
    padding: 10px !important;
}

/* Changing the arrow position to bottom center position, 
   translateX(50%) works with right: 50% 
   to accurately  center the arrow */
#sidebar.active .dropdown-toggle::after {
    top: auto;
    bottom: 10px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}
.justify-content-md-center{
			background:#000000;
		}
p{
   	color: #fff;

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
            </li>s
	    	<li class="nav-item">
        	<a class="nav-link " href="categories.php" aria-disabled="false">categories</a>
    		</li>
	    	<li class="nav-item">
        	<a class="nav-link " href="manifucture.php" aria-disabled="false">Top manufacturers</a>
    		</li>
	    	<li class="nav-item">
	        	<a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
	      	</li>
    		<li class="nav-item dropdown">
        <a class="nav-link " href="about.php" aria-disabled="false">Accesories</a>
       
      </li>>
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
      <div class="sidebar-heading">Best Guns </div>
      <div class="list-group list-group-flush">
        <a href="pistol.php" class="list-group-item list-group-item-action bg-light">Pistols</a>
        <a href="shot.php" class="list-group-item list-group-item-action bg-light">Shotguns</a>
        <a href="rifles.php" class="list-group-item list-group-item-action bg-light">RIFLES</a>
      </div>
    </div>

<!-- container class -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 ">
				<div class="description"><h4></h4>
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
	<hr>
			<div class="row justify-content-md-center"><p>Pistols</p></div>
			<hr>
			<div class="row One">

				
				<div class="col-md-4 imageCol">
						
						<img class="myImage" id="riif" src="images/gun4.jpeg" alt="anImage">
						<h2>Dan Wesson model 715</h2>
					
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/rem.png" alt="anImage">
						<h2>Remington RP9 9MM</h2>
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="images/hell.jpeg" alt="anImage">
						 <h2>FX-19 Hellfire  compact p</h2> 
				</div>
			</div>
			<br>
			<hr>
				<hr><div class="row justify-content-md-center"><p>rifles</p></div>
				<hr>
		<div class="row One">

			<div class="col-md-4 box">
				<img src="images/HK416.jpg" alt="an image" >
				<h2>Heckler & Koch HK416</h2>
			</div>
			<div class="col-md-4 box">
					<div class="anImage">
						<img id="riif" src="images/Sam16.jpg" alt="anImage">
						<h2>M16A1</h2>
					</div>
				</div>
			<div class="col-md-4 box">
					<div class="anImage">
						<img src="images/M16A4.jpg" alt="anImage">
						<h2>M16A4</h2>
					</div>
				</div>
			
		</div>
		<hr>
					<div class="row justify-content-md-center"><p>SHOTGUNS</p></div>
			
<hr> 
		<div class="row One" id="rifles">
			<div class="col-md-4 box">
				<img src="images/sss.jpeg" alt="an image">
				<h2>Benelli Super Black Eagle 3 Shotgun</h2>
			</div>
			<div class="col-md-4 box">
					<div class="anImage">
						<img id="" src="images/re.jpeg" alt="anImage">
						<h2>Rem 870, Hunting</h2>
					</div>
			</div>
			<div class="col-md-4 box">
					<div class="anImage">
						<img id="" src="images/cyn.jpeg" alt="anImage">
						<h2>CYMA M870 3-Round Burst Multi-Shot</h2>
					</div>
			</div>
			
		<hr></div>
		<center>
	<div class="footer">
		<div class="jumbotron-fluid">
			<br>
			<h5>social</h5>
			<a href="https://www.facebook.com/NighthawkCustomFirearms" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/facebook.png" alt="Facebook" /></a>
          <a href="https://www.instagram.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/instagram.png" alt="Instagram" /></a>
          <a href="https://www.twitter.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/twitter.png" alt="Twitter" /></a>
          <a href="https://www.youtube.com/user/01NHC" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/youtube.png" alt="Youtube" /></a>
          <a href="https://www.pinterest.com/nighthawkcustom" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
		</div>
		</center>
	</div>
	
	</div>
</div>

	
</center>
	<script type="text/javascript" src = "js/jquery.js"></script>
	<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>