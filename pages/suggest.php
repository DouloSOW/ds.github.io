<!DOCTYPE html>
<html lang="fr">

<!--Entête de la page-->
<head>
<!--<script src="https://kit.fontawesome.com/036c985da2.js" crossorigin="anonymous"></script>-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>Info Tech | Accueil</title>
<link rel="stylesheet" href="css/form.css?v=1" type="text/css">
<script type="text/Javascript" src="TRAITEMENT_JS/suggest.js?v=1"> </script>

</head>

<!--Corps de la page-->
<body>


<?php 

include("head.php");
?>
<img class="affiche" src="Images/suggest.jpg">


       <marquee direction="down">
            <p class=foot_text style="color: black;">Toute idée est la bienvenue. Ensemble nous, tous, pouvons vaincre Covid19 . Vos suggestions me seront très utiles</p>
        </marquee>
    

<form id="formulaire" action="TRAITEMENT_PHP/traitement_suggest.php" method="POST" enctype="multipart/form-data">

    <div class="section"><span class="span">1.</span>Identification</div>
        <label>Nom : <input type = "text" id="nom"  name="prenom" onblur="error()"></label><br><span id="error_nom"></span>  <br>
        <label>Prénom :<input type = "text" id="prenom"  name="nom" onblur="error()"></label><br><span id="error_prenom"></span>  <br>

        <label>Mail : <input type="email" name="mail" id="mail"  placeholder="xyz@boite.com" onblur="error()"/></label><br><span id="error_mail"></span>  <br>
       
        <div class="section"><span class="span">2.</span>Votre suggestion sur le site</div>
        <label>Saisissez ici votre suggestion, SVP : <textarea name="suggest" id="suggest" class="suggest" onblur="error()"></textarea></label><br><span id="error_suggest"></span>  <br>
        <div id='result'></div>



  <div class="section">Validation des informations </div>
         <input type = "submit" id="envoyer" value="Envoyer les données" disabled="true" >  
         

</form>


    <!--FOOT-->



<?php

include("foot.php");
?>

    
</body>

</html>