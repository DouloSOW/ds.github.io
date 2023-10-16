<?php session_start();
	if((empty($_SESSION['login']) or empty($_SESSION['motdepasse'])) or ($_SESSION['login']!="Doulo" or $_SESSION['motdepasse']!="SOW"))
	{
		echo "<script type='text/javascript'>alert(\"Vous essayez d'acceder � une page qui n'existe pas\");
				window.location.replace('index.php');
			  </script> ";
		
	}
	
	include("head.php");
	include("cnxion.php");

?>
<meta charset="utf-8">
<title>Covid-19 au Sénégal</title>
<link rel="stylesheet" href="css/mystyle.css?v=1" type="text/css">
<link rel="stylesheet" href="css/form.css?v=1" type="text/css">
<script type="text/javascript" src="TRAITEMENT_JS/traitement_superviseur.js?v=1"></script>


<div class="Choix">
<button class="btn1 choice" >
<input type="submit" id="deconnexion" name="deconnexion" value="deconnexion" class="btn1 choice" onclick="deconnexion(); document.location.replace('../index.php')">

</button>
</div>
<p class="alter">INSERTION DES DONNEES JOURNALIERES</p>

<div class="part1">
<form id="formulaire" action="TRAITEMENT_PHP/traitement_superviseur.php" method="POST" enctype="multipart/form-data">

    <div class="section"><span class="span">1.</span>Identification</div>
        <label>cas_testes :<input type = "number" id="cas_testes"  name="cas_testes" onblur="error()" ></label><br> <span id="error_cas_testes"></span>  <br>
        <label>cas_positifs : <input type="number" min="0" name="cas_positifs" id="cas_positifs" onblur="error()"></label><br><span id="error_cas_positifs"></span>  <br>
        <label>cas_importes :<input type="number" min="0"  name="cas_importes" id="cas_importes" onblur="error()"/></label> <br><span id="error_cas_importes"></span>  <br>
		<label>cas_contact : <input type = "number" id="cas_contact"  name="cas_contact" onblur="error()"></label><br><span id="error_cas_contact"></span>  <br>
        <label>cas_guerri :<input type = "number" id="cas_guerri"  name="cas_guerri" onblur="error()" ></label><br><span id="error_cas_guerri"></span>  <br>
        <label>trans_com : <input type="number" min="0" name="trans_com" id="trans_com" onblur="error()"></label><br><span id="error_trans_com"></span>   <br>
        <label>deces :<input type="number" min="0"  name="deces" id="deces" onblur="error()" /></label> <br> <span id="error_deces"></span> <br>
        <label>cas_graves :<input type="number" min="0" name="cas_graves" id="cas_graves" onblur="error()" /></label> <br>  <span id="error_cas_graves"></span> <br>



  <div class="section">Validation des informations </div>
         <input type = "submit" id="envoyer" value="Envoyer les données" disabled="false" >  
         

</form>


    <!--FIN FORMULAIRE-->

<?php




















?>
<div id="resultat_donnees">
</div>
</div>
    <!--FOOT-->



	<?php

include("foot.php");
?>

    
</body>

</html>

