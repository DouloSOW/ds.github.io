

<!DOCTYPE html>
<html lang="fr">

<!--Entête de la page-->
<head>
<!--<script src="https://kit.fontawesome.com/036c985da2.js" crossorigin="anonymous"></script>-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>Info Tech | Accueil</title>
<link rel="stylesheet" href="css/form.css" type="text/css">
<script type="text/Javascript" src="TRAITEMENT_JS/alerte.js?v=1"> </script>

</head>

<!--Corps de la page-->
<body>


<?php 

include("head.php");
?>
<img class="affiche" src="Images/stop.jpg">


       <marquee direction="down">
            <p class=foot_text style="color: red;">Alerte Covid-19</p>
        </marquee>
    

<form id="formulaire" action="TRAITEMENT_PHP/traitement_alerte.php" method="POST" enctype="multipart/form-data">

    <div class="section"><span class="span">1.</span>Identification</div>
        <label>Nom : <input type = "text" id="nom"  name="prenom" onblur="error()"></label><br><span id="error_nom"></span>  <br>
        <label>Prénom :<input type = "text" id="prenom"  name="nom" onblur="error()"></label><br><span id="error_prenom"></span>  <br>
        <label>Age : <input type="number" min="18" name="age" id="age" onblur="error()"></label><br><span id="error_age"></span>  <br>
        <label>Votre numero de telephone :<input type="number" min="0" placeholder="7*1234567" name="tel" id="tel" onblur="error()"/></label> <br><span id="error_tel"></span>  <br>
        <label>Region :<select name="region" id="region" onblur="error()">
              <option value=""> </option>
              <option value="Dakar">Dakar</option>
              <option value="Thies">Thies</option>
              <option value="Kedougou">Kedougou</option>
              <option value="Matam">Matam</option>
              <option value="Tamba">Tamba</option>
              <option value="Kaffrine">Kaffrine</option>
              <option value="Fatick">Fatick</option>
              <option value="Ziguinchor">Ziguinchor</option>
              <option value="Diourbel">Diourbel</option>
              <option value="Saint-Louis">Saint-Louis</option>
              <option value="Kolda">Kolda</option>
              <option value="Sedhiou">Sedhiou</option>
              <option value="Louga">Louga</option>
              <option value="Kaolack">Kaolack</option>

              </select>
              </label><br><span id="error_region"></span> <br>

        <label>Mail : <input type="email" name="mail" id="mail"  placeholder="xyz@boite.com" onblur="error()"/></label><br><span id="error_mail"></span>  <br>
       
        <div class="section"><span class="span">2.</span>Détails de l'alerte</div>
    <div class="inner-wrap">
            <label><strong>Renseigner le type de cas</strong>
                <select name="cas" id="cas" onblur="error()">
                <option value=""> </option>
                <option value="Malade presentant les symptomes du Covid19">Malade 
                presentant les symptomes du Covid19</option>
                <option value="Nouvel arrivant">Nouvel arrivant</option>
                <option value="rassemblement">Rassemblement</option>
                <option value="Autres">Autres</option>
                </select>
          </label><br><span id="error_cas"></span>  <br>
        </div>



  <div class="section">Validation des informations </div>
         <input type = "submit" id="envoyer" value="Envoyer les données" disabled="true" >  
         

</form>


    <!--FOOT-->



<?php

include("foot.php");
?>

    
</body>

</html>