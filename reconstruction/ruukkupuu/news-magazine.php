<?php
session_start();
$juttu = array();



$servername = "localhost";
$username = "data15";
$password = "jNTKdg3NTbRBuVEn";
$dbname = "data15";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tuotenumero = $_GET["id"];


$head = $conn->query("SELECT * FROM 5412_tuote WHERE tuotenumero = '".$tuotenumero."'");

$ed = $head->fetch_object();

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script type="text/javascript">

</script>

<title>Oy Ruukkupuu | <?php echo $ed->tuotenimi; ?></title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>


</a>

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

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1487720919,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"b903b1d9a9bf136055d68f672784cafe",petok:"9bacac981267b420e805f813dd2016913656043c-1488779194-1800",zone:"zurb.com",rocket:"m",apps:{}}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>



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

<script>

function hello() {
  var count = 20;
  var html = [];
  while(count--) {
    html.push("<input type='text' name='name", count, "'>");
  }
  $('#myform').append(html.join(''));
}
</script>
<link rel="stylesheet" href="arvosteluohjelma/moo/Assets/mooRatings.css">
<style>
#rating {
  position: absolute;
  top:15px;
}
</style>
</head>
<body>

<a href="http://zurb.com/article/1466/what-s-underneath-matters-how-meundies-in" class="meundies-banner">
<div class="info row">
<h5 class="columns small-10 small-centered"><strong><span class="show-for-large">What's Underneath Matters: </span>Win a year's supply of underwear from MeUndies!</strong></h5>
</div>
</a>

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
<input type="button" onclick="hello();"> 

<div class="row">
<div class="medium-4 columns">
<img src="https://placehold.it/450x183&text=LOGO" alt="company logo">
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
<li class="has-submenu"><a href="#">Tech</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Energy</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Space</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Medicine</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Robotics</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Tesla</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
</ul>
</div>
</header>

<?php
 if ( !isset($_SESSION["tuotteet"]) ) {
	 echo 'Ostoskori on tyhjä.';
 }
 else
 {
	 echo '<a href="php/cart.php" style="text-decoration: none; color: black;">Ostoskorissa ' . sizeOf($_SESSION["tuotteet"]) . ' tuotetta.</a>';
 }

?>

<!-- HEADER PÄÄTTYY, TÄSTÄ ALKAA KOODI -->
  <?php

      $mead = $conn->query("SELECT * FROM 5412_tuotekuvat WHERE tuotenumero = '".$tuotenumero."'");

      $es = $mead->fetch_object();

      $lead = $conn->query("SELECT * FROM 5412_tuotteen_kuvaus WHERE tuotenumero = '".$tuotenumero."'");

      $eg = $lead->fetch_object();
   ?>

    <div class="row">
      <div class="large-12">
       <br>
       <h4 class="hinta" style="text-align: center;"><?php echo $ed->tuotenimi ?></h4>
       <br>
     </div>
   </div>
   </div>
   <div class="row">

    <div class="small-12 large-12 column">
    <div class="card">
    <h4 class="float-right"><?php  echo $ed->tuotteen_hinta . ' ' .'€'; ?></h4>  <?php // näyttää tuotteen hinnan ja lisää siihen euromerkin ?>
    <div class="card-section hinta">
    <br>
    <br>
    <p class="float-right"><?php echo 'Tuotenumero' . ' ' . $ed->tuotenumero; ?></p> <?php  // Tulostaa tuotteen tuotenumeron hinnan alle ?>
    </div>
  </div>
</div>
    <br>
    <br>

    <p><a class="float-right" id="ostonappi" href="php/add_cart.php?id=<?php echo $tuotenumero; ?>">Lisää ostoskoriin</a></p>
    <div class="small-12 large-12 column">
       <?php
       echo '<img class="tuotekuva" src="' . "php/tuotekuvat/" . $es->kuvanimi . '">'; // hae tuotekuva ja tulosta se img tagin avulla

       ?>

    </div>

 </div>
</div>

 <br>

 <div class="row">

 <div class="large-12">
  <?php echo $eg->tuotteen_kuvaus // tuotteen kuvauksen tulostus?>
  <div class="push"></div>
 </div>
</div>

 <div class="row">

 <div class="large-12">
<div class="card" >
  <div class="card-block">
<select name="rating" id="rating" class="invisible">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

  <input type="hidden" id="uusi_arvo" value="0">


<br>
<script src="arvosteluohjelma/js/ohjelma.js"></script>
<button class="btn btn-primary" id="yes" onclick="arvostele();">Lähetä arvostelu</button>
<script src="arvosteluohjelma/moo/Demo/mootools-core-1.3.js"></script>
<script>

$(function(){
 $('#yes').on('click', function(e){
   e.preventDefault();
   $('#yes').fadeOut(300);

   $.ajax({
     url: 'arvosteluohjelma/arvostele.php',
     type: 'post',
     data: {'action': 'follow', 'tuotenumero': '<?php echo $ed->tuotenumero; ?>','tuotenimi': '<?php echo $ed->tuotenimi; ?>', 'arvo' : document.getElementById("rating").value},
     success: function(data, status) {
       if(data) {
         console.log(data);
       }
     },
     error: function(xhr, desc, err) {
       console.log(xhr);
       console.log("Details: " + desc + "\nError:" + err);
     }
   }); // end ajax call
 });
});
</script>
<script>

$(function(){


   $.ajax({
     url: 'arvosteluohjelma/laske_keskiarvo.php',
     type: 'post',
     data: {'tuotenumero': '<?php echo $ed->tuotenumero; ?>'},
     success: function(data, status) {
       if(data) {
         console.log(data);
       }
     },
     error: function(xhr, desc, err) {
       console.log(xhr);
       console.log("Details: " + desc + "\nError:" + err);
     }
   }); // end ajax call

});
</script>

<script src="arvosteluohjelma/moo/Source/mooRatings-1.1.js"></script>


<script type="text/javascript">
  window.addEvent('domready', function() {
    var uusi_arvo = document.getElementById('uusi_arvo');
    var arv = uusi_arvo.value;


    // convert the selectbox with id 'rating'
    var rating = new mooRatings(document.id('rating'), {
      showSelectBox : true,
      container : null,
      defaultRating : arv
    });
  });
</script>
</div>
</div>
</div>
</div>


<div class="row">
  <?php


        // Tällä koodilla haetaan ehdotukset, tulostetaan
        $head = $conn->query("SELECT * FROM 5412_tuote");
        $kuva = $conn->query("SELECT * FROM 5412_tuotekuvat LIMIT 4");
        $tuotekuvaus = $conn->query("SELECT * FROM 5412_tuotteen_kuvaus");


        while($row = $kuva->fetch_assoc()) {

        echo '<div class="large-3 column ehdotus">';
        echo '<div class="card">';
        echo "<img class='img-responsive' src=" . "php/tuotekuvat/". $row["kuvanimi"]. '>';
        echo '<div class="card-section">';
        echo '<h4 class="ehdotus" id="'.$row['tuotenimi'].'">' . $row['tuotenimi'].'</h4>';
        echo '<a href="news-magazine.php?id='.$row["tuotenumero"].'">'.$row['tuotenimi'].'</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        }

        $conn->close();
        ?>
</div>
<!-- FOOTER ALKAA ! -->
<footer>
<div class="row expanded callout secondary">
<div class="large-4 columns">
<h5>FLICKR IMAGES</h5>
<div class="row small-up-4">
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
</div>
</div>
<div class="large-4 columns">
<h5>FLICKR IMAGES</h5>
<span class="secondary label">Space</span>
<span class="secondary label">Galaxies</span>
<span class="secondary label">Milky Way</span>
<span class="secondary label">Black Holes</span>
<span class="secondary label">Rebels</span>
<span class="secondary label">Death Star</span>
<span class="secondary label">Republic</span>
<span class="secondary label">R2D2</span>
</div>
<div class="large-4 columns">
<h5>RANDOM MAG</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quam voluptatum vel repellat ab similique molestias molestiae ea omnis eos, id asperiores est praesentium, voluptate officia nulla aspernatur sequi aliquam.</p>
</div>
</div>
<div class="row expanded">
<div class="medium-6 columns">
<ul class="menu">
<li><a href="#">Legal</a></li>
<li><a href="#">Partner</a></li>
<li><a href="#">Explore</a></li>
</ul>
</div>
<div class="medium-6 columns">
<ul class="menu align-right">
<p class="menu-text" style="text-align: center;">Copyright © 2099 Random Mag</p>
</ul>
</div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>
