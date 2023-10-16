<?php
include("connexion.php");
//-------------------------------------------------IMPORTATION----------------------------------------------------------------------

$id="4";

$cas_testes=$_POST['cas_testes'];
$cas_positifs=$_POST['cas_positifs'];
$cas_importes =$_POST['cas_importes'];
$cas_contact=$_POST['cas_contact'];
$cas_guerri=$_POST['cas_guerri'];
$trans_com=$_POST['trans_com'];
$deces=$_POST['deces'];
$cas_graves=$_POST['cas_graves'];


$sql= "insert into COVID19_PAYS (cas_testes, cas_positifs, cas_importes, cas_contact, cas_guerri, trans_com, deces, cas_graves, num) values ('$cas_testes', '$cas_positifs', '$cas_importes', '$cas_contact', '$cas_guerri', '$trans_com', '$deces', '$cas_graves', '$id')";
if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


?>