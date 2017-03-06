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
  <div class="row">

      <table class="taulukko">
        <thead>
          <th>Tuotteen nimi</th>
          <th>tuotenumero</th>
          <th>X</th>
        </thead>
        <tbody>
          <?php
            $query = $conn->query("SELECT * FROM 5412_tuote");

            while($row = $query->fetch_assoc()){
            echo '<tr>';
             echo '<td>';
              echo $row["tuotenimi"];
             echo '</td>';
             echo '<td>';
              echo '<a href="final_muokkaus.php?tuotenumero=' . $row["tuotenumero"] . '">' . $row["tuotenumero"] . '</a>';
             echo '</td>';
             echo '<td>';
              echo '<a href="poista_tuote.php?tuotenumero=' . $row["tuotenumero"] . '">' . "Poista" . '</a>';
             echo '</td>';
            echo '</tr>';
            }
          ?>
        </tbody>
      </table>

  </div>

</body>
</html>
