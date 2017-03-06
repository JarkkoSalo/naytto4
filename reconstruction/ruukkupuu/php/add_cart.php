<?php

session_start();

require_once("config.php"); // Fill db details config file!

$dataConnection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (mysqli_connect_errno())
  {
  die("Tietokantavirhe.");
  }
  if (!isset($_GET["id"]))
  {
	  die("Puuttuva parametri.");
  }
  $currentProduct = intval($_GET["id"]);
  $productRow = mysqli_fetch_assoc(mysqli_query($dataConnection, "SELECT * FROM 5412_tuote WHERE tuotenumero = '" . $currentProduct . "' LIMIT 1"));

  $productArray = array($productRow["tuotenumero"]);


   if ( !isset($_SESSION["tuotteet"]) ) {
	   $_SESSION["tuotteet"] = $productArray;

   }
   else
   {
	array_push($_SESSION["tuotteet"], $productRow["tuotenumero"]);
   }
   //header("Location: http://localhost/verkkokauppa/get_product.php?id=" . $currentProduct);
echo "<script>window.location.href='../news-magazine.php?id=" . $currentProduct . "';</script>";
?>
