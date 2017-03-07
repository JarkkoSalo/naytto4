<?php
error_reporting(0);

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


$tn = $_POST["tuotenumero"];

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$yks = $es->yksi_tahti;

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$kaks = $es->kaksi_tahti;

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$kolme = $es->kolme_tahti;

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$nelja = $es->nelja_tahti;

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$viisi = $es->viisi_tahti;

$sql = 'SELECT * FROM 5412_arvostelut_laskenta WHERE tuotenro = "'.$tn.'"';
$answer = $conn->query($sql);

$es = $answer->fetch_object();
$tahtimaara = $es->tahti_maara;

$yksi = $yks * 1;
$kaksi = $kaks * 1;
$kolme = $kolme * 1;
$nelja = $nelja * 1;
$viisi = $viisi * 1;

$whole = floor($yksi + $kaksi + $kolme + $nelja + $viisi / $tahtimaara);


 ?>
