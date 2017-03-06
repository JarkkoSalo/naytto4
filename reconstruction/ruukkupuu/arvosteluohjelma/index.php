<?php

?>
<!DOCTYPE html>
<html lang="fi">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tähtiarvostelujärjestelmä</title>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<link rel="stylesheet" href="moo/Assets/mooRatings.css">
<style>
#rating {
  position: absolute;
  top:15px;
}
</style>
  </head>
  <body>

<div class="container">
  <br>

    <div class="card">
      <div class="card-block">
        <h1 style="text-align:center;">Tähtiarvostelujärjestelmä</h1>

        <p>Ohjelma jolla voidaan arvostella esimerkiksi verkkokaupan tuotteita</p>

<p>Anna arvostelu</p>

<p id="kiitos"></p>
<select name="rating" id="rating" class="invisible">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

  <input type="hidden" id="uusi_arvo" value="0">


<br>
<button class="btn btn-primary" onclick="arvostele();">Lähetä arvostelu</button>
<script src="moo/Demo/mootools-core-1.3.js"></script>


<script src="moo/Source/mooRatings-1.1.js"></script>

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
<script src="js/ohjelma.js"></script>
  </body>
</html>
