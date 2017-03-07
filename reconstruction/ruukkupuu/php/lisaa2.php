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

  echo $tuotteenkuvaus;

  $characters = '0123456789';
    $result = '';
    for ($i = 0; $i < 5; $i++) {
        $result .= $characters[mt_rand(0, 9)];
      }

  $conn->query("INSERT INTO 5412_tuote (tuotenimi, tuotteen_hinta, tuotenumero, milloin_lisatty) VALUES ('".$tuotteennimi."', '".$tuotehinta."', '".$result."', '".$aika."')");
if(!empty($tuotteenkuvaus)){
    $kuvaus = mysqli_real_escape_string($conn, $tuotteenkuvaus);
  $conn->query("INSERT INTO 5412_tuotteen_kuvaus (tuotteen_kuvaus, tuotenimi, tuotenumero) VALUES (trim('".$kuvaus."'), trim('".$tuotteennimi."'), trim('".$result."'))");

}
  $conn->query("INSERT INTO 5412_arvostelut_laskenta (tuotenumero, tuotenimi) VALUES ('".$result."', '".$tuotteennimi."')");

  if(isset($_POST["nappi"])) {
      $uploaddir = 'tuotekuvat/';
      $temp1 = explode(".", $_FILES["tiedosto"]["name"]);
      $temp2 = explode(".", $_FILES["tiedosto2"]["name"]);
      $temp3 = explode(".", $_FILES["tiedosto3"]["name"]);
      $temp4 = explode(".", $_FILES["tiedosto4"]["name"]);


    $newfilename =  $_POST["tuotenimi"] . 1 . '.' . end($temp1);
    move_uploaded_file($_FILES["tiedosto"]["tmp_name"], "tuotekuvat/" . $newfilename);
    $newfilename2 =  $_POST["tuotenimi"] . 2 . '.' . end($temp2);
    move_uploaded_file($_FILES["tiedosto2"]["tmp_name"], "tuotekuvat/" . $newfilename2);
    $newfilename3 =  $_POST["tuotenimi"] . 3 . '.' . end($temp3);
    move_uploaded_file($_FILES["tiedosto3"]["tmp_name"], "tuotekuvat/" . $newfilename3);
    $newfilename4 =  $_POST["tuotenimi"] . 4 . '.' . end($temp4);
    move_uploaded_file($_FILES["tiedosto4"]["tmp_name"], "tuotekuvat/" . $newfilename4);

    if($newfilename || $newfilename2 || $newfilename3 || $newfilename4) {




    if(!empty($_FILES['tiedosto']['name'])){
      $conn->query("INSERT INTO 5412_tuotekuvat (kuvanimi, tuotenimi, tuotenumero, kuvajarjestys) VALUES ('".$newfilename."', '".$tuotteennimi."','".$result."', 1)");
    }
    if(!empty($_FILES['tiedosto2']['name'])){
      $conn->query("INSERT INTO 5412_tuotekuvat (kuvanimi, tuotenimi, tuotenumero, kuvajarjestys) VALUES ('".$newfilename2."','".$tuotteennimi."','".$result."', 2)");
      }
    if(!empty($_FILES['tiedosto3']['name'])){
      $conn->query("INSERT INTO 5412_tuotekuvat (kuvanimi, tuotenimi, tuotenumero, kuvajarjestys) VALUES ('".$newfilename3."', '".$tuotteennimi."', '".$result."', 3)");
      }
    if(!empty($_FILES['tiedosto4']['name'])){
      $conn->query("INSERT INTO 5412_tuotekuvat (kuvanimi, tuotenimi, tuotenumero, kuvajarjestys) VALUES ('".$newfilename4."', '".$tuotteennimi."', '".$result."', 4)");
      }



        echo "Tiedosto tallennus onnistui! <br>";
    } else {
                echo "Tiedosto tallennus epäonnistui! <br>";

    }
    echo 'Lisätietoa tallennuksesta:<pre>';

    print_r($_FILES);

  }
  $conn->close();
   ?>
