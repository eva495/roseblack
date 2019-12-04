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
	<title></title>
	<link rel = "stylesheet" href = "boot.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
      color: #f01;
    
    }
    .footer {
      height: 200px;
      background: #000000;
      color: #fff;
    }
    h4{
      font-size:20;
      font-color:#000000;
    }
    body {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    background:#cccccc;
}
.main_sidebar {
    min-height:100vh;
    position:fixed;
    top:66px;
    left:0;
    width:350px;
    transition: all 300ms cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: left, width;
    box-shadow: inset -1px 0 10px rgba(32, 64, 64, 64);
    background: #293749;
}
.main_sidebar:after {
    content: '';
    background-color: #202020;
    position: absolute;
    top: 0;
    z-index: -1;
    height: 100%;
    width: 58px;
}
.main_sidebar ul {
    list-style:none;
    padding-left:58px;
}
.main_sidebar ul li {
    padding:10px;
}
.main_sidebar ul li a {
    color:#fff;
    display:block;
}
.main_sidebar ul li i {
    float:left;
    color:grey;
    margin-left:-58px;
    font-size:24px;
    padding-left:7px;
}
.main_sidebar ul li:hover {
    background:#167696;
}
.main_sidebar ul li a:hover {
    color:#fff;
    text-decoration:none;
}
.main_sidebar ul li:hover i {
    color:#fff;
}
.main_sidebar ul li.active {
    background:#293749;
}
.main_sidebar ul li.active i {
    color:#fff;
}
.main_sidebar ul li.active:hover {
    background:#167696;
}
.main_sidebar ul li.active:hover i {
    color:#293749;
}

.main {
    float:right;
    color:#fff;
    display:block;
    width:100%;
    background:red;
    min-height:100vh;
}
	</style>
	<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="AENIwnlQGb6RtSnyknRjgJ/KyVwSxfY2RBzkD8FAUNFjXky82VT3H/OflVni9R69usLF49Po0rq/4NVP3LGQ2w==" />
  
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MQKQSL2');</script>
  <!-- End Google Tag Manager -->


<body class="canvas ">
    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQKQSL2"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <div class="flash-tab-container">
  </div>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
    <!-- navigation logo -->
    <img id="webIcon" src="images/rose1.png"><h3>Black Rose</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link " href="#" aria-disabled="false">Top manufactures</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="operation.php">Operation mechanism<!--  <span class="sr-only">(current)</span> --></a>
          </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php" aria-disabled="false">Accesories</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">          
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>
  </nav>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <div class="wrapper">
    <aside class="main_sidebar">
        <ul>
            <li><i class="fa fa-history"></i><a href="https://www.marketing91.com/top-17-gun-brands/">Influencial companies</a></li>
            <li><i class="fa fa-file"></i><a href="https://www.gunpowdermagazine.com/the-fascinating-life-of-gaston-glock-polymer-gun-pioneer/">Gaston glock</a></li>
            <li><i class="fa fa-file"></i><a href="https://www.nytimes.com/topic/company/sturm-ruger-company-inc">Sturm Ruger & co</a></li>
            <li><i class="fa fa-file"></i><a href="https://www.sigsauer.com/company/">Sig Saucer</a></li>
            <li><i class="fa fa-file"></i><a href="https://www.smith-wesson.com/">Smith and Wesson</a></li>
            <li><i class="fa fa-file"></i><a href="https://www.heckler-koch.com/en/company/about-hk.html">Heckler & Koch</a></li>
                        <li><i class="fa fa-flag"></i><a href="https://www.berettausa.com/en-us/">Berreta</a></li>
            <li class="active"><i class="fa fa-bell"></i><a href="#">subscriptions</a>

     </div>
  </menu>
</main>

            </li>

        </ul>
    </aside>
    <div class="mian">
        <h1>Prakash </h1>
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
          <a href="https://www.pinterest.com/search/pins/?q=gun%20manufacturers&rs=typed&term_meta[]=gun%7Ctyped&term_meta[]=manufacturers%7Ctyped" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
          	   <span class="small-note pt-2">Powered by <a href="https://www.agoda.com/pages/agoda/default/DestinationSearchResult.aspx?selectedproperty=43094&city=2994&hid=43094&site_id=1829922&tag=b8313263-6f6a-62a6-ce1c-46d3add23dec&device=c&network=g&adid=376544014267&rand=17912573197028746709&expid=&adpos=1t1&gclid=Cj0KCQiAiZPvBRDZARIsAORkq7fPQXheBj56auSjABvkUlT7r8lN5WV6FfHEOiFehlO_IdVPM498wOsaAlEyEALw_wcB">orchids</a></span>
    
		</div> </div> </div> </div>
		</center>
	</div>
	</center>
	>
</body>
</html>