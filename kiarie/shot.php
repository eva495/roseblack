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
  <title>shotguns gallery</title>
  <link rel = "stylesheet" href = "boot.css">
  <link rel = "stylesheet" href = "css/bootstrap.min.css">

  <style type="text/css">
    h3{
      color: #fff;
      padding: 0px 250px 0px 10px;
      text-align: center;
    }
    h4{
      text-align: center;
      color: #000000;
    }
    .my-3{
      color: #fff;
    }
    
    .bird{
      width: 50px;
      height: 20px;
      border-radius: 50%;
    }
    .myImage {
      width: 90%;
      height: 60%;
    }
    .rowOne {
      padding: 100px 0px 0px 0px;
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
          <li class="nav-item active">
            <a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
          </li>
         <li class="nav-item">
            <a class="nav-link " href="manifucture.php" aria-disabled="false">Top manifucturers</a>
            </li>
         <li class="nav-item">
            <a class="nav-link " href="categories.php" aria-disabled="false">Categories</a>
            </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php" aria-disabled="false">Accesoriess</a>
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
  <div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">
    <div class="row rowOne" style="background-color: #333; color: cyan;">
      <div class="col-md-4">
          <img alt="picture" src="images/roth.jpg" class="myImage">
                    <h5 class="text-center my-3">othco's Tactical Shotgun Scabbard is Molle compatible rifle holster. The Shotgun holster is great for Airsoft and or hunting.
</h5>

        
      </div>

      <div class="col-md-4">
        <img alt="picture" src="images/brown.jpg" class="myImage">
                    <h5 class="text-center my-3">Browning's BPS is almost the same as Remington's 870 pump-action. Everything just feels about the same with this shotgun as the 870, with the additional of its ambidextrous design. However, I'd feel more comfortable shooting with the walnut stock rather than the synthetic ones Browning offers.</h5>


        
      </div>

      <div class="col-md-4">
        <img alt="picture" src="images/hunt.jpg" class="myImage">
        <h5 class="text-center my-3"></h5>        
      </div>
  </div>
    <div class="row rowOne"  style="background-color: #333; color: cyan;">
      <div class="col-md-4">
         <img alt="picture" src="images/moss.jpg" class="myImage">
                    <h5 class="text-center my-3">Mossberge 835-What I like about this shotgun is its sleek design and its lightweight components. However, it's almost as if you're shooting lighter rounds, even with Mag shells despite the light build of this gun. You just don't get the same amount of kick from when you shoot those 3 1/2-inch shells with other pump-actions.</h5>


        
      </div>

      <div class="col-md-4">
        <img alt="picture" src="images/ben.jpg" class="myImage">
                    <h5 class="text-center my-3">the Super Black Eagle II would come out on top of this list. You can actually shoot 2 3/4″ to 3 1/2″ shells without adjustments with this rifle and can with stand all the weather conditions</h5>

        
      </div>

      <div class="col-md-4">
        <img alt="picture" src="images/remm.jpg" class="myImage">
                    <h5 class="text-center my-3">The Remington 870  If you've done your homework, you can find the Model 870 in any “best shotgun” list there is. I've held a couple of these 870's and the action is just smooth, almost feels like it'll never fail. But the best about this pump-action is it closely competes with guns near the 4-digit price</h5>

        
      </div>
  </div>
    <div class="row rowOne"  style="background-color: #333; color: cyan;">

      <div class="col-md-3">
        <img alt="picture" src="images/tri.jpg" class="myImage">
                       <h5 class="text-center my-3">The new TriStar Compact is a 12-gauge bullpup that is only 30 inches long while still sporting a 20-inch barrel. This gas-operated, semi- automatic shotgun allows you to shoot shells up to 3 inches long, from standard field loads to 1.38-ounce slugs, interchangeably. The Compact also uses a removable choke system with Beretta/Benelli threads, and one extended, ported cylinder-bore choke is included along with a rubber recoil pad, sling mounts, a detachable carry handle, flip-up front and rear sights, and two 5-round magazines. (</h5>

      </div>

      <div class="col-md-3">
                <img alt="picture" src="images/stevens.jpg" class="myImage">

               <h5 class="text-center my-3">The Stevens 555 is an over/under shotgun that's basically two barrels over and under each other. What's great about this is that you can have two chokes with one gun and shoot the fastest follow-up shot. However, despite the 555's single trigger system–rather than one for each barrel–I find it worth the cash</h5>
        
      </div>

      <div class="col-md-3">
       <img alt="picture" src="images/cit.jpg" class="myImage">
                       <h5 class="text-center my-3">Citadel RSS1 is sure to appeal to shooters who want an AK-platform 12 gauge, but would rather lock the magazines straight in instead of rocking them backward. To that end, the RSS1 uses VEPR-style mags that insert straight in rather than Saiga-style mags, which require rocking backward. This Turkish import comes with a five-round mag, and 10-round aftermarket mags are available. It also has a 3-inch chamber and uses screw-in chokes, allowing you to change the pattern density if needed. The Citadel includes AK-style iron sights. You can also mount an optic on the rail attached to the dust cover if more precise shots are desirable</h5>

      </div>
       <div class="col-md-3">
       <img alt="picture" src="images/sko.jpg" class="myImage">
                       <h5 class="text-center my-3">The SKO is a full-sized shotgun, while the Shorty, at 28.75 inches, is the same model but without the shoulder stock. The SKO Mini, with its 14.75-inch, 4140 steel barrel and 27-inch overall length, is simply considered a “firearm” and sidesteps NFA classification. The Mini comes with a two-shot magazine, though five- and 10-rounders are also available. Finally, the gun comes with a vertical foregrip. </h5>

      </div>


  </div>
</div>
</div>
 <div class="footer">
    <div class="jumbotron-fluid">
      <br>
      <h5>social</h5>
      <a href="" target="-blank"><img src="images/fa.jpg" alt="Facebook" height=36 width=68 class="footer-social-icon"></a>
      <a href="" target="-blank"><img src="images/te.png" alt="Twitter" height=36 width=68 class="footer-social-icon"></a>
            <a href="" target="-blank"><img src="images/eed.png" alt="Instagram" height=36 width=68 class="footer-social-icon"></a>
            <a href="" target="-blank"><img src="images/you.png" alt="Youtube" height=36 width=68 class="footer-social-icon"></a>


    </div>
    </center>
  </div>
           </div>

<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>

</body>
</html>