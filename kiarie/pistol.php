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
  </style>
</head>
<body>
  <!-- navigation bar component -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	        <img id="webIcon" src="images/rose1.png"><h3>Black Rose</h3>

    <!-- navigation logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link " href="#" aria-disabled="false">Top manufacturers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
          </li>
         <li class="nav-item">
            <a class="nav-link " href="homm.php" aria-disabled="false">Accesories</a>
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
      <div class="row justify-content-md-center"><p>Pistols check more</p><a href="https://www.gunbacker.com/best-9mm-pistols-handguns/"><p>here</p></a></div>
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
        <hr><div class="row justify-content-md-center"><p>revolvers</p></div>
        <hr>
    <div class="row One">

      <div class="col-md-4">
        <img src="images/kim.jpeg" alt="an image" >
        <h2>Kimber K6s</h2><a href="https://www.hyattgunstore.com/kimber-k6s-dasa-stainless-357-mag-revolver-2-barrel.html?__cf_chl_captcha_tk__=dd7fc568caa7bfd5cff662a8fb7e835bf1b159ed-1575040649-0-ASY6uehVRDtDKIqe_dzAJSAzZVZahlzMJSHBIECWuUAyX9Ly-ptXJJEusFV0U3zQLziK_Q-ms6mQgR1W2yNC9IvZNg8sdWtQNz_HCDKsCPPQfIPX4sPPptm9gSp6j0-JrUdBKbmWMoxsEkCagF208ki6_n6U5hOFyif2CvDR7x1XVJFZQGyunF3wPFnV8E2YYmZzWAg5EnsxcRbRGykS-t4hUCkUIepAItJqPDrqbQORptoSuMpprdDfkTu72gzwI_zycKg6lK5OgM_57B9yoEJ8K9dyvRhpUf7GWOhj5bMDPV0WIgh5KjjWFr3RgB-wnKSN_Waasa2z6R2t1SHsqSx3UyssbUTFcg4UsTZgHoSgCpWofNLWyh6AJAqoKb8TOg">Check it out</a>
      </div>
      <div class="col-md-4">
          <div class="anImage">
            <img id="riif" src="images/rug.jpeg" alt="anImage">
            <h2>LCR 38 Double-Action</h2><a href="https://www.sportsmansoutdoorsuperstore.com/products2.cfm/ID/74223/5401/ruger-lcr-38-special-double-action-revolver">Check it out</a>
          </div>
        </div>
      <div class="col-md-4">
          <div class="anImage">
            <img id="riif" src="images/reger.jpeg" alt="anImage">
            <h2>Ruger GP100 .22 LR Revolver</h2><a href="https://www.academy.com/shop/pdp/ruger-gp100-22-lr-revolver">Sneek</a>
          </div>
        </div>
<a href="https://www.personaldefenseworld.com/2016/12/combat-handguns-revolvers/">CLICK</a>For more info or visti our store on<a href="https://www.google.com/search?q=revolvers&sxsrf=ACYBGNTMAQNLxogsgZ5KGPeD8EzFSkNhgQ:1575038810298&tbm=isch&source=iu&ictx=1&fir=MYalOLLAU4N0_M%253A%252C5Nq6J6N6Ma3NKM%252C_&vet=1&usg=AI4_-kT3bku8gUj-n_CE-X075QdmGDqnDA&sa=X&ved=2ahUKEwjZ9q3m1I_mAhWGkxQKHfPDCcQQ9QEwBHoECAcQNg#imgrc=MYalOLLAU4N0_M:">Galla</a>

    </div>
    <hr>
          <div class="row justify-content-md-center"><p>Methuselah</p></div>
      
<hr> 
    <div class="row One" id="rifles">
      <div class="col-md-4 boxThree">
        <img src="images/gon.jpg" alt="an image">
        <h2>Claridge Hi-Tec/Goncz Pistol</h2><a href="https://en.wikipedia.org/wiki/Claridge_Hi-Tec/Goncz_Pistol">peep</a>
      </div>
      <div class="col-md-4">
          <div class="anImage">
            <img id="" src="images/fab.jpg" alt="anImage">
            <h2>Fabrique Nationale d'Herstal</h2>
          </div>
      </div>
      <div class="col-md-4">
          <div class="anImage">
            <img id="" src="images/gui.jpg" alt="anImage">
            <h2>Real Factory D'arma Glisenti</h2>
          </div>
      </div>
      
    <hr></div>
            <p>one</p><a href="https://www.google.com/search?q=old+guns+pistols&sxsrf=ACYBGNRVRvU4uTSk6fN95zhaZreFkHL0-g:1575042844071&source=lnms&tbm=isch&sa=X&ved=2ahUKEwik8Ofp44_mAhXGAGMBHfgKCZUQ_AUoAXoECA8QAw&biw=1600&bih=800">click</a>away from more
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

  

  <script type="text/javascript" src = "js/jquery.js"></script>
  <script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>