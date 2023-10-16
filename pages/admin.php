
<meta charset="utf-8">
<title>Covid-19 au Sénégal</title>
<link rel="stylesheet" href="css/mystyle.css" type="text/css">


<div class="Choix">
<button class="btn1 choice" value="export" onClick="exportTableToCSV('export_csv.csv');"><div class="glowing">Cliquez ici pour télécharger les données</div><i class="fas fa-download"></i></button>

</div>
<script src="TRAITEMENT_JS/exportation.js"></script>
<?php
include("head.php");
include("cnxion.php");
$resultat=$conn-> query ("SELECT Date, cas_testes, cas_positifs, cas_importes, cas_contact, cas_guerri, trans_com, deces FROM COVID19_PAYS");
$chaine="";
$chaine.="<fieldset>
		<legend> Données : </legend>";
$chaine.="RECAPITULATIF DES DONNEES à TELECHARGER";
$chaine.="<table id='export' border >
				 <tr>
					 <th>Date<th>
					<th>Cas testés<th>
					 <th>Cas positifs<th>
					<th>Cas importés<th>
					<th>Cas contacts<th>
					<th>Cas guéris<th>
					<th>Transmission communautaire<th>
					<th>Décès<th>
				 <tr>";
while( $row=$resultat-> fetch_assoc()) {
	$chaine.="<tr><td>".$row['Date']."<td><td>".$row['cas_testes']."<td><td>".$row['cas_positifs']."<td><td>".$row['cas_importes']."<td><td>".$row['cas_contact']."<td><td>".$row['cas_guerri']."<td><td>".$row['trans_com']."<td><td>".$row['deces']."<td><tr>";
}
$chaine.="<table>";
$chaine.="</fieldset>";		
print($chaine);	
   

?>
<div id="resultat_donnees">
</div>