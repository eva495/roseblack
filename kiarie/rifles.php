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
?><!DOCTYPE html>
<html>
<head>
  <title>rifles gallery</title>
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
    h5{
      font-size:12;
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
          <li class="nav-item dropdown">
            <a class="nav-link " href="categories.php" aria-disabled="false">Categories</a> 
          </li>
       <li class="nav-item dropdown">
            <a class="nav-link " href="manifucture.php" aria-disabled="false">Top manufacturers</a> 
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
    <div class="row" style="background-color: #333; color: cyan;">
      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw040dd1d1/large/7-gh012maw.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw040dd1d1/large/7-gh012maw.jpg?sw=800&sh=800" class="img-fluid">
                    <h5 class="text-center my-3">Henry Big Boy All-Weather Lever Action Rifle .357 Mag 20" Round Barrel 10 Rounds Stained Hardwood Stock Hard Chrome Satin Plating</h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dwc2f2f80b/large/39118.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dwc2f2f80b/large/39118.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Remington 700 SPS Tactical AAC-SD 6.5 Creedmoor Bolt-Action Rifle 22" Heavy Barrel 4 Rounds Threaded 5/8x24 Hogue Overmolded Ghillie Green Pillar Bedded Synthetic Stock Matte Blue</h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw6511de18/large/7-gomx556p3p15ml.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw6511de18/large/7-gomx556p3p15ml.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">ATI Omni Hybrid Maxx AR-15 5.56 NATO Semi Auto Rifle 16" Barrel 30 Rounds M-LOK Hand Guard Carbine Alpha Collapsible Stock Matte Black Finish</h5>

        </a>
      </figure>
  </div>
    <div class="row"  style="background-color: #333; color: cyan;">
      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw9a4f6025/large/108314.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw9a4f6025/large/108314.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Remington 700 Magpul Enhanced .300 Win Mag Bolt Action Rifle 24" Heavy Threaded Barrel 5 Rounds FDE Magpul Hunter Stock Black Cerakote Finish</h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw553c17f9/large/7-g57474.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw553c17f9/large/7-g57474.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Savage Arms Axis XP Compact 6.5 Creedmoor Bolt Action Rifle 20" Barrel 4 Rounds with 3-9x40 Scope Camo Synthetic Stock Black Finish</h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw3e4c07f8/large/10-0112246.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw3e4c07f8/large/10-0112246.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Henry Repeating Arms U.S. Survival AR-7 .22 LR Semi-Auto Rimfire Rifle, 16.125" Barrel, 8 Rounds, Black</h5>

        </a>
      </figure>
  </div>
    <div class="row"  style="background-color: #333; color: cyan;">

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw59feb5d2/large/2-dbf15wsb.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw59feb5d2/large/2-dbf15wsb.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Diamondback Firearms DB15 AR-15 5.56 NATO Semi Auto Rifle 16" Barrel 30 Rounds M-LOK Hand Guard Matte Black Finish</h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw215398ff/large/7-gdtsportm2.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw215398ff/large/7-gdtsportm2.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Del-Ton Sport Mod 2 AR-15 Semi Auto Rifle 5.56mm NATO 16" Barrel 30 Rounds 6 Position Stock Black </h5>

        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw0dfa0887/large/38304.jpg?sw=800&sh=800" data-size="1600x1067">
          <img alt="picture" src="https://www.cheaperthandirt.com/dw/image/v2/BDCK_PRD/on/demandware.static/-/Sites-ctd-master-catalog/default/dw0dfa0887/large/38304.jpg?sw=800&sh=800" class="img-fluid" />
                    <h5 class="text-center my-3">Diamondback Firearms DB15 M4 Carbine AR-15 Semi Automatic Rifle 5.56 NATO 16" Barrel 30 Rounds Free Float Quad Rail Handguard Collapsible Stock Burnt Bronze</h5>

        </a>
      </figure>

    </div>

  </div>
</div>
</div>
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>

</body>
</html>