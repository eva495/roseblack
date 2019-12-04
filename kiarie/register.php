<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Black Rose Guns Showcase</title>
	<link rel = "stylesheet" href = "boot.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">	
  <style type="text/css">
		img#webIcon {
			width: 100px;
			height: 100px;
			border-radius: 50%;
		}
		
		.carousel{
		    background: #2f4357;
		    margin-top: 20px;
		}
		.carousel-item{
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
			padding: 200px;
			height: 500px;
			text-align: center;
			background-color: rgba(0, 0, 0, 0.7);
			color: #fff;
		}
		.anImage {
			height: 200px;
			background-color: rgba(255, 159, 159, 0.7);
		}
		.footer {
			height: 400px;
			background: #333;
			color: #fff;
		}
		.iconDiv {
			position: absolute;
			padding-left: 45%;
			min-width: 200px;
		}
		.regNav {
			height: 200px;
			color: #fff;
		}
		.cont {
			background: rgb(51, 58, 64);
		}
		h2 {
			position: absolute;
			padding-left: 43%;
			padding-top: 10%;

		
		}
		.contentRow {
			height: 500px;
		}
		.leftCol {
			background-image: url('images/berreta.jpg');

		}
		.rightCol {
			background-image: url('images/berreta2.jpg');
		}
		.obscure {
			margin-left: -15px;
			width: 110%;
			height: 100%;
			background: rgb(51, 58, 64, 0.8);
		}
		.midCol {
			background: rgb(54, 58, 66);
		}
		input .textField {
			width: 200px !important;
		}
		label,p {
			color: #fff;
		}
		p {
			font-size: 1.2em;
		}

	</style>
</head>
<body>
	<!-- navigation bar component -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark regNav">
		<!-- navigation logo -->
		
		<div class="iconDiv">
			<img id="webIcon" src="images/rose1.png">			
		</div>
		<h2 >Black Rose</h2>
		
	
	 	
	  
	</nav>
	<!-- container class -->
	<div class="container-fluid cont">
		<div class="row contentRow">
			<div class="col-md-4 leftCol">
				<div class="obscure"></div>
			</div>
			<div class="col-md-4 midCol">
  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<center>
  		<br>
		<br>
  	
  	  <label>Username</label>
  	  <input class="form-control textField" type="text"  name="username" value="<?php echo $username; ?>">
  	


  
  	  <label>Email</label>
  	  <input class="form-control textField" type="email" name="email" value="<?php echo $email; ?>">
  	


  
  	  <label>Password</label>
  	  <input type="password" class="form-control textField" name="password_1">
  	


  	
  	  <label>Confirm password</label>
  	  <input type="password" class="form-control textField"  name="password_2">
  	



  	
  	  <button type="submit"class="btn btn-primary" class="btn" name="reg_user">Register</button>
  	
  	<br/>
	<br/>

  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </center>
  </form>
  </div>
			<div class="col-md-4 rightCol">
				<div class="obscure"></div>
			</div>
		</div>
		
   	</div>

   	<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>
