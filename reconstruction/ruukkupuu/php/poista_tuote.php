<?php



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

  $id = $_GET["tuotenumero"];
  $query = $conn->query("SELECT * FROM 5412_tuote WHERE tuotenumero = '" . $id ."' ");

  $es = $query->fetch_object();



?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<style>


  button {

    color: white;
    text-align: center;
    display: block;
    margin: 15px auto;
  }

  .kyllapoisto {
      padding: 10px 40px 10px 40px;
    background-color: green;
  }

  .eipoistoa {
          padding: 10px 50px 10px 50px;
    background-color: red;
  }
</style>
</head>
<body>
  <br>
  <br>
  <div class="row">
    <h3 style="text-align: center;"> Olet poistamassa tuotetta, "<?php echo $es->tuotenimi ?>" jolla on tuotenumero <?php  echo $es->tuotenumero ?> </h3>

  </div>
  <div class="row">
  <p style="text-align: center;"> Oletko aivan varma että haluat poistaa tuotteen </p>
  <form method="post">
    <input type="submit" name="kylla" value="Kyllä, poista">
    <input type="submit" name="ei" value="Ei, älä poista">
  </form>
  </div>
  <?php

    if(isset($_POST["kylla"])) {
      $query = $conn->query("DELETE FROM 5412_tuote WHERE tuotenumero = '".$id."'");

      $query = $conn->query("DELETE FROM 5412_tuotekuvat WHERE tuotenumero = '".$id."'");

      $query = $conn->query("DELETE FROM 5412_tuotteen_kuvaus WHERE tuotenumero = '".$id."'");

      $query = $conn->query("DELETE FROM 5412_arvostelut_laskenta WHERE tuotenumero = '".$id."'");

      $conn->close();

      header("Location: http://cosmo.kpedu.fi/~jarkkosalo/php2017/naytto4/naytto4/reconstruction/ruukkupuu/php/muokkaus.php"); /* Redirect browser */
      exit();
    }

    if(isset($_POST["ei"])) {
      header("Location: http://cosmo.kpedu.fi/~jarkkosalo/php2017/naytto4/naytto4/reconstruction/ruukkupuu/php/muokkaus.php"); /* Redirect browser */
      exit();

    }

   ?>

</body>
</html>
