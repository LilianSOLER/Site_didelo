<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$requete = $bdd->prepare('UPDATE "jeux_videos" SET "possesseur"="Jean" WHERE "possesseur"="Mathieu"'); //delete, insert
$requete->execute(array($_GET['console']));


$requete->closeCursor();

?>