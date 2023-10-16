<?php 
$server="localhost";
$user="root";
$pw="";
$bdd="covid19";

$conn=new MySQLi($server,$user,$pw,$bdd);
if(!$conn)
{
	echo 'Pas connectée';
}
if(!mysqli_select_db($conn,'covid19')){
	echo 'Base de données non trouvée';
}

?>