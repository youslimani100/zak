<?php
/* // Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bdd_login');
 // connexion à la base de données

 // Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
} */

$db_username = 'root';
 $db_password = '';
 $db_name = 'bdd_login';
 $db_host = 'localhost';
 $connexion = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database'); 
 


?>