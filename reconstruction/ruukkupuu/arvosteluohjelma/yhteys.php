<?php
try {
    $yhteys = new PDO("mysql:host=localhost;dbname=data15", "root", "");
} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$yhteys->exec("SET NAMES utf8");
?>
