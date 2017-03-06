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




  $arvo = $_POST['arvo'];
  $tn = $_POST["tuotenumero"];



  echo var_dump($_POST['arvo']);
  echo var_dump($_POST["action"]);
if($arvo == 1){
  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $lisays = $es->yksi_tahti+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET yksi_tahti = '".$lisays."' WHERE tuotenumero = '".$tn."'");

  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $tmaaralisays = $es->tahti_maara+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET tahti_maara = '".$tmaaralisays."' WHERE tuotenumero = '".$tn."'");
} if($arvo == 2){
  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $lisays = $es->kaksi_tahti+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET kaksi_tahti = '".$lisays."' WHERE tuotenumero = '".$tn."'");

  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $tmaaralisays = $es->tahti_maara+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET tahti_maara = '".$tmaaralisays."' WHERE tuotenumero = '".$tn."'");
} if($arvo == 3){
  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $lisays = $es->kolme_tahti+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET kolme_tahti = '".$lisays."' WHERE tuotenumero = '".$tn."'");

  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tahti_maara AND tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $tmaaralisays = $es->tahti_maara+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET tahti_maara = '".$tmaaralisays."' WHERE tuotenumero = '".$tn."'");
} if($arvo == 4){
  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $lisays = $es->nelja_tahti+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET nelja_tahti = '".$lisays."' WHERE tuotenumero = '".$tn."'");

  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tahti_maara AND tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $tmaaralisays = $es->tahti_maara+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET tahti_maara = '".$tmaaralisays."' WHERE tuotenumero = '".$tn."'");
}  if($arvo == 5){
  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $lisays = $es->viisi_tahti+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET viisi_tahti = '".$lisays."' WHERE tuotenumero = '".$tn."'");

  $sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tahti_maara AND tuotenumero = "'.$tn.'"';
  $answer = $conn->query($sql);

  $es = $answer->fetch_object();
  $tmaaralisays = $es->tahti_maara+1;

  $kysely = $conn->query("UPDATE 5412_arvostelut_laskenta SET tahti_maara = '".$tmaaralisays."' WHERE tuotenumero = '".$tn."'");
}
  $conn->close();

?>
