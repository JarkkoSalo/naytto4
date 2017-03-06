function arvostele() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("uusi_arvo").value = this.responseText;
      //var arvo = document.getElementById("rating");

      //arvo = arvo.value;
    }
  };
  xhttp.open("POST", "arvosteluohjelma/arvostele.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("arvo="+document.getElementById("rating").value);
  alert('Kiitoksia arvostelustasi');
}
