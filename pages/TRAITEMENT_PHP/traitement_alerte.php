

<?php
include("connexion.php");
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;	
$age = isset($_POST['age']) ? $_POST['age'] : NULL;
$region = isset($_POST['region']) ? $_POST['region'] : NULL;
$cas = isset($_POST['cas']) ? $_POST['cas'] : NULL;
$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
$sql="INSERT INTO alert(nom,prenom,age,region,cas,tel,mail) VALUES ('$nom','$prenom','$age','$region','$cas','$tel','$mail')";

if ($conn->query($sql) === TRUE) {
	$n=$nom.',<br/>';
	echo 'Bonjour '.$prenom.' '.$n;
	   echo "Votre alerte a bien été soumise. Je vous félicite de votre engagement.";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
							}
						


?>
