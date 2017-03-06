<!DOCTYPE html>
<html>
    <head>   
        <meta charset="utf-8">
        <title>Gallery</title>
        <style>
            .flow-right { 
            text-align: right;
            }
        </style>
    <head>   
    <body>   
        <form enctype="multipart/form-data" method="post">
             
            <label for="Otsikko">Otsikko</label><br>
            <input type="text" name="Otsikko"><br>
            <label for="Kuvateksti">Kuvateksti</label><br>
            <textarea type="text" name="Kuvateksti"></textarea><br>
             
            <!-- MAX_FILE_SIZE määritellään tiedoston maksimikoko tavuina -->
            <input type="hidden" name="MAX_FILE_SIZE" values="300000">

            <p>Valitse tiedosto:<br>
            <input name="tiedosto" type="file">
            <button class="primary button" type="submit" name="send" value="true">Lähetä Tiedot</button>


        </form>

        <?php
            #echo $_FILES['tiedosto']['name'];  //tulostetaan tiedoston nimi
            #echo $_FILES['tiedosto']['size'];  //tulostetaan tiedoston koko
            #echo $_FILES['tiedosto']['tmp_name']; //tulostetaan tiedoston talennusnimi
            #echo $_FILES['tiedosto']['error']; //tulostetaan lähetysvirheet


            $uploaddir = 'http://cosmo.kpedu.fi/~ismojamsa/php2017/';
            $uploadfile = $uploaddir . basename($_FILES['tiedosto']['name']);


            if (move_uploaded_file($_FILES['tiedosto']['tmp_name'], $uploadfile)) {   
                echo "Tiedosto on tallennettu!\n";
            } else {
                echo "Tiedoston tallennus epäonnistui\n";
            }
             
            #echo 'Lisätietoa tallennuksesta:<pre>';
            #print_r($_FILES);
            #print_r($_POST);





            $kuva = $_FILES['tiedosto']['name'];
            $otsikko = $_POST['Otsikko'];
            $kt = $_POST['Kuvateksti'];

            $send = $_POST['send'];

            if($send=='true') {

                # 1. Otetaan yhteys palvelimeen ja valitaan data15 -tietokanta käyttöön
                $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");
                # 2. tarkistetaan yhteyden tila
                if($my->mysql_errno) {
                    die("MySQL, virhe yhteyden luonnissa:" .$my->connect_error);
                }
                # valitaan tietokannan merkistö
                $my->set_charset('utf8');


                //Muodostetaa SQL-kysely muuttujaan
                $sql = 'INSERT INTO 663J_gallery (Kuva, Otsikko, Kuvateksti) 
                        VALUES("'.$uploadfile.'","'.$otsikko.'","'.$kt.'")';

                echo $sql;
                # 3. Suoritetaan SQL-kysely
                if($tulos = $my->query($sql)) {

                    echo '<p>Tiedosto Lähetetty.</p>';
                } else {
                    echo '<p>tiedoston lähetys epäonnistui.</p>';
                }


            } 
            # 4. suljetaan yhteys
            $my->close
        ?>

    </body>
</html>