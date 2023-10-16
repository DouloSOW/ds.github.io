<?php
include("connexion.php");
//---------------------------------------------------ENREGISTREMENT-----------------------------------------------
if (isset($_POST['Envoyer'])){
	//Recupération des champs du formulaire
	$idpays=1;
	$date=$_POST['date'];
	$nom="Senegal";
	$popT="";
	$popM="";
	$popF="";
	$casT=$_POST['cas_t'];
	$casP=$_POST['cas_p'];
	$casI=$_POST['cas_i'];
	$casC=$_POST['cas_c'];
	$casG=$_POST['cas_g'];
	$TC=$_POST['cas_tc'];
	$lieu="";
	$deces=$_POST['deces'];
	$casgrave=$_POST['cas_gr'];
	$num=$_POST['num'];
	
	
	$sql="insert into COVID19_PAYS (CodePays, Date, nom, popTotal, popMasculin, popFeminin, cas_testes, cas_positifs, cas_importes, cas_contact, cas_guerri, trans_com, lieu, deces, cas_graves, num) values ('".$idpays."', '".$date."', '".$nom."', '".intval($popT)."', '".intval($popM)."', '".intval($popF)."', '".$casT."', '".$casP."', '".$casI."', '".$casC."', '".$casG."', '".$TC."', '".$lieu."', '".$deces."', '".$casgrave."', '".$num."')";
	
	if ($conn->query($sql) === TRUE) {
   		echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
								}
}
?>