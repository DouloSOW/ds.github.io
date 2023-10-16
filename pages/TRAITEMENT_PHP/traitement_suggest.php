
<?php 

function data(){
	include("connexion.php");
	//Recupération des champs du formulaire
	if(isset($_POST['nom'])){
	$date=date("Y-m-d H:i:s"); 
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];
	$suggest=$_POST['suggest'];
		//$salaire=="1"?:$salaire="Oui";
		
	$sql="insert into suggest (date, nom, prenom, mail, suggest) values ('".$date."', '".$nom."', '".$prenom."', '".$mail."', '".$suggest."')";
	
	if ($conn->query($sql) === TRUE) {
		$n=$nom.',<br/>';
		echo 'Bonjour '.$prenom.' '.$n;
   		echo "Votre suggestion sera bien prise en compte. Nous vous remercions!";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
								}
							}
}
data();
?>
