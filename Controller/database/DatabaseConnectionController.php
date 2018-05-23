<?php

//On définit les paramètres de connexion
$host = "MSI\SQLEXPRESS01";

//On définit l'utilisateur
$username = "sa";
//On définit le mot de passe
$password = "SQL2014";

//On définit le nom de notre base de données
$database = "LISA_DIGITAL";

/**
 * Création de la connexion, si ça ne fonctionne pas, on affiche un avertissement
 */
try{
$connection = new PDO('sqlsrv:Server='.$host.';Database='.$database, $username, $password) or die("Connexion à la base de données impossible !");
}
 catch (Exception $e){
echo $e;
 }
?>

