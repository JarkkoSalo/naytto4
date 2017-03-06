<?php

session_start();
include_once("config.php");


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


  $aika = date("d.m.Y");
  $tuotteennimi = $_POST['tuotenimi'];
  $tuotteenkuvaus = $_POST['tuotekuvaus'];
  $tuotehinta = $_POST['price'];


  $characters = '0123456789';
    $result = '';
    for ($i = 0; $i < 5; $i++) {
        $result .= $characters[mt_rand(0, 9)];
      }

  $conn->query("INSERT INTO 5412_tuote (tuotenimi, tuotteen_hinta, tuotenumero, milloin_lisatty) VALUES ('".$tuotteennimi."', '".$tuotehinta."', '".$result."', '".$aika."')");

  $conn->query("INSERT INTO 5412_tuotteen_kuvaus (tuotteen_kuvaus, tuotenimi, tuotenumero) VALUES ('".$tuotteenkuvaus."', '".$tuotteennimi."', '".$result."')");

  $conn->query("INSERT INTO 5412_arvostelut_laskenta (tuotenumero, tuotenimi) VALUES ('".$result."', '".$tuotteennimi."')");

  if(isset($_POST["nappi"])) {
    $uploaddir = 'tuotekuvat/';
    $uploadfile = $uploaddir . basename($_FILES['tiedosto']['name']);

    if(move_uploaded_file($_FILES['tiedosto']['tmp_name'], $uploadfile)) {


      $conn->query("INSERT INTO 5412_tuotekuvat (kuvanimi, tuotenimi, tuotenumero) VALUES ('".$_FILES['tiedosto']['name']."', '".$tuotteennimi."', '".$result."' )");



        echo "Tiedosto tallennus onnistui! <br>";
    } else {
                echo "Tiedosto tallennus epäonnistui! <br>";

    }
    echo 'Lisätietoa tallennuksesta:<pre>';

    print_r($_FILES);

  }
  $conn->close();
   ?>
