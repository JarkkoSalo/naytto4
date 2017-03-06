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
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
<style>
  .taulukko {
    margin: 0 auto;
  }
</style>
</head>
<body>
  <br>
  <br>
  <?php
    $query = $conn->query("SELECT * FROM 5412_tuote WHERE tuotenumero = '".$id."'");

    $es = $query->fetch_object();

    ?>
  <div class="row">
    <h4 style="text-align: center; "> Muokkaat tällä hetkellä kohdetta <b>"</b><?php echo $es->tuotenimi ?><b>"</b>, jossa on tuotenumero <?php echo $es->tuotenumero ?> </h4>
  </div>

  <div class="row">
    <form enctype="multipart/form-data" method="post">
    <p> Muokkaa tuotetta </p>
    <input type="text" name="nimimuokkaus" placeholder="nimi">
    <br>
    <input name="tiedosto" type="file"/>
    <br>
    <textarea name="kuvausmuokkaus"> </textarea>
    <br>
    <input type="text" name="hintamuokkaus">
    <br>
    <button type="submit" name="nappi"> Lähetä </button>
  </form>
  </div>
  <?php
    if(isset($_POST["nappi"])) {

    if(!empty($_POST["nimimuokkaus"])) {
        $query = $conn->query("UPDATE 5412_tuote SET tuotenimi='".$_POST['nimimuokkaus']."' WHERE tuotenumero = '".$id."'");

        $query = $conn->query("UPDATE 5412_tuotteen_kuvaus SET tuotenimi='".$_POST['nimimuokkaus']."' WHERE tuotenumero = '".$id."'");

        $query = $conn->query("UPDATE 5412_arvostelut_laskenta SET tuotenimi='".$_POST['nimimuokkaus']."' WHERE tuotenro = '".$id."'");
      } else {
        echo "et muokanut nimeä";
      }

      if(!$_POST["tiedosto"] == true) {
        $uploaddir = 'tuotekuvat/';
        $uploadfile = $uploaddir . basename($_FILES['tiedosto']['name']);

        if(move_uploaded_file($_FILES['tiedosto']['tmp_name'], $uploadfile)) {


          $conn->query("UPDATE 5412_tuotekuvat SET kuvanimi = '".$_FILES['tiedosto']['name']."' WHERE tuotenumero = '".$id."'");



            echo "Tiedosto tallennus onnistui! <br>";
        } else {
                    echo "Tiedosto tallennus epäonnistui! <br>";

        }
        echo 'Lisätietoa tallennuksesta:<pre>';

        print_r($_FILES);
        } else {
          echo "mitään";
        }

      if(!empty($_POST["kuvausmuokkaus"])) {
          $query = $conn->query("UPDATE 5412_tuotteen_kuvaus SET tuotteen_kuvaus='".$_POST['kuvausmuokkaus']."' WHERE tuotenumero = '".$id."'");
        } else {
          echo "et muokanut kuvausta";
        }

        if(!empty($_POST["hintamuokkaus"])) {
            $query = $conn->query("UPDATE 5412_tuote SET tuotteen_hinta='".$_POST['hintamuokkaus']."' WHERE tuotenumero = '".$id."'");
          } else {
            echo "et muokanut hintaa";
          }

      $conn->close();
    }
    // Tee muokkausmahdollisuudet tähän !
   ?>
</body>
</html>
