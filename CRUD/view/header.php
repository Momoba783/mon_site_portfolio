<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>mon site portfolio</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/style.css">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
        <!-- JQuery Library -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Fancy Box Core JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <!-- Fancy Box -->
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="nav-img img" style="background-image: url(../images/moitrainnb.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <ul>
                <li class="index"><a href="../../index.php"><span><small>01</small>Accueil</span></a></li>
                <li class="moi"><a href="moi.php"><span><small>02</small>Moi</span></a></li>
                <li class="competences"><a href="../?page=competences"><span><small>03</small>Compétences</span></a></li>
                <li class="portfolio"><a href="portfolio.php"><span><small>04</small>Portfolio</span></a></li>
                <li class="bonus"><a href="bonus.php"><span><small>05</small>Bonus</span></a></li>
                <li class="contact"><a href="contact.php"><span><small>06</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a id="ancre" class="colorlib-logo" href="../../index.php"><span class="logo-img" style="background-image: url(../images/momo.jpg);"></span>MomoBa</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

<?php 

$pageActive = basename($_SERVER["SCRIPT_FILENAME"], '.php'); 
// var_dump($pageActive);

function changerImg($url) { //Fonction JS pour changer la photo automatiquement sur le burger a chaque page
  echo "
  
    <script>
  
    var imageActive = document.querySelector('.nav-img');
    imageActive.setAttribute('style', 'background-image: url(../images/$url) !important;');
  
    </script>
  
    ";
}

  if(!isset($_GET["page"])) {
   //Permet de changer la couleur dans le menu Burger
    echo "
  
    <script>
  
    var pageactive = document.querySelector('.$pageActive'); 
    pageactive.setAttribute('class', '$pageActive active');
  
    </script>
  
    ";
  }

  if($pageActive == "moi") {
    changerImg("moitrainnb.jpg");
  }
  elseif($pageActive == "portfolio") {
    changerImg("moilunettesnb.jpg");
  }
  elseif($pageActive == "bonus") {
    changerImg("meNB.jpg");
  }
  elseif($pageActive == "contact") {
    changerImg("Mohamednb.jpg");
  }

?>