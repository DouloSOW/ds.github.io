<?php
include("connexion.php");
$resultat=$conn-> query ("SELECT Date, cas_testes, cas_positifs, cas_importes, cas_contact, cas_guerri, trans_com, deces FROM COVID19_PAYS");
$chaine="";
$chaine.="<fieldset>
		<legend> Données : </legend>";
$chaine.="RECAPITULATIF DES DONNEES TELECHARGEES";
$chaine.="<table id='export' border>
				 <tr>
					 <th>Date<th>
					<th>Cas testes<th>
					 <th>Cas positifs<th>
					<th>Cas importes<th>
					<th>Cas contact<th>
					<th>Cas gueris<th>
					<th>Transmission communautaire<th>
					<th>Deces<th>
				 <tr>";
while( $row=$resultat-> fetch_assoc()) {
	$chaine.="<tr><td>".$row['Date']."<td><td>".$row['cas_testes']."<td><td>".$row['cas_positifs']."<td><td>".$row['cas_importes']."<td><td>".$row['cas_contact']."<td><td>".$row['cas_guerri']."<td><td>".$row['trans_com']."<td><td>".$row['deces']."<td><tr>";
}
$chaine.="<table>";
$chaine.="</fieldset>";		
print($chaine);	
   

?>