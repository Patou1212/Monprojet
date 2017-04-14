<?php
include "evenement.php";
try{
  // On se connecte � MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', 'password');
	//mysql_select_db("inscripiton_revenus");
}
catch(Exception $e)
{
	// En cas d'ereur, on affiche un message et on arr�te tout
	die('Erreur : '.$e->getMessage());
}

$bdd->exec( 'SELECT id FROM inscription WHERE nom= :nom, prenom= :prenom, password= :password' );
echo'validation'



?>

