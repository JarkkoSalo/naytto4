<?php

session_start();

require_once("config.php"); // Fill db details config file!

$dataConnection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (mysqli_connect_errno())
  {
  die("Tietokantavirhe.");
  }
  if (isset($_GET["emptyCart"]))
  {
	  unset($_SESSION["tuotteet"]);
  }
   if (isset($_GET["removeItem"]))
  {
	 foreach (array_keys($_SESSION["tuotteet"], intval($_GET["removeItem"])) as $key) {
    unset($_SESSION["tuotteet"][$key]);
	break;
}


  }
?>
<!doctype html>
<html class="no-js" lang="fi">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<style>
  #logo {
    height: 300px;
  }
  .tiili img {
    width: 10%;
    height: 10%;
  }

  .card {
    margin: 0 auto;

  }

  .tuotekuva {
    width: 30%;
    height: 30%;
    display: block;
    margin: 15px auto;
  }

  .center {
    margin: 0 auto;
  }

  .push {

    height: 4em;

  }

  .card img {
    height: 200px;
  }

  .ehdotus {
    @include block-grid(3);
  }

  #ostonappi {
    background-color: #257cd6;
    padding: 10px 20px 10px 20px;
    color: white;
  }

  .hinta {
    background-color: #c6bfb0;
  }
</style>


<link rel="stylesheet" href="arvosteluohjelma/moo/Assets/mooRatings.css">
<style>
#rating {
  position: absolute;
  top:15px;
}
</style>

</head>
<body>



<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');

    </script>
<style>.fi-social-facebook{color:dodgerblue;font-size:2rem;}.fi-social-youtube{color:red;font-size:2rem;}.fi-social-pinterest{color:darkred;font-size:2rem;}i.fi-social-instagram{color:brown;font-size:2rem;}i.fi-social-tumblr{color:navy;font-size:2rem;}.fi-social-twitter{color:skyblue;font-size:2rem;}</style>
<header>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
<li><a href="#">Four</a></li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
<li><input type="search" placeholder="Search"></li>
<li><button type="button" class="button">Search</button></li>
</ul>
</div>
</div>


<div class="row">
<div class="medium-4 columns">
<img src="bonzai.png" id="logo" alt="company logo">
</div>
<div class="medium-8 columns">
<img src="https://placehold.it/900x175&text=Responsive Ads - ZURB Playground/333" alt="advertisement for deep fried Twinkies">
</div>
</div>

<br>
<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title">Menu</div>
</div>
<div class="top-bar" id="main-menu">
<ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">

</ul>
</li>
</ul>
</div>
</header>
<body>


<div style="float: right;">
<?php
 if ( !isset($_SESSION["tuotteet"]) ) {
	 echo 'Ostoskori on tyhjä.';
 }
 else
 {
	 echo '<a href="cart.php" style="text-decoration: none; color: black;">Ostoskorissa ' . sizeOf($_SESSION["tuotteet"]) . ' tuotetta.</a>';
 }
?>
</div>
<hr style="size: 1px; border-color: #61bf44;">
<strong>Ostoskorin sisältö</strong>
<?php
 if ( !isset($_SESSION["tuotteet"]) ) {
	 echo '<p><i>Ostoskori on tyhjä.</i></p>';
 }
 else
 {
$priceCounter = 0;
$productCounter = 0;

foreach (array_count_values($_SESSION["tuotteet"]) as $tuote => $maara)
{

	$productRow = mysqli_fetch_assoc(mysqli_query($dataConnection, "SELECT * FROM 5412_tuote WHERE tuotenumero = '" . $tuote . "' LIMIT 1"));

	echo "<p><a href=\"../news-magazine.php?id=" . $productRow["tuotenumero"] . "\">" . utf8_encode($productRow["tuotenimi"]) . "</a> x " . $maara . "<br><strong>Hinta: </strong> " . ($productRow["tuotteen_hinta"] * $maara) . " € (" . $productRow["tuotteen_hinta"] . " € / kpl) <br><a href=\"cart.php?removeItem=" . $productRow["tuotenumero"] . "\">[Poista korista]</a></p>";
	$priceCounter = $priceCounter + $productRow["tuotteen_hinta"] * $maara;
	$productCounter = $productCounter + $maara;
}

echo $productCounter . " tuotetta, yhteensä: " . $priceCounter . " €";

echo '<p><a href="cart.php?emptyCart">Tyhjennä ostoskori</a></p>';
}
?>
<footer>
<div class="row">




</div>
<div class="row expanded">
<div class="medium-6 columns">



</div>
<div class="medium-6 columns">
<ul class="menu align-right">
<li class="menu-text">Copyright © <?php echo date("Y");?> Ruukkupuu Oy</li>
</ul>
</div>
</div>
</footer>

<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>
