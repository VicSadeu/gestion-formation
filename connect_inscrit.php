
<?php

session_start();

require_once("bd.php");

$nom_part = $_POST["nom_part"];
$prenom_part = $_POST["prenom_part"];
$pseudo_part = $_POST["pseudo_part"];
$email_part = $_POST["email_part"];
$password_part = $_POST["password_part"];
$tel_part=$_POST["tel_part"];
$role="participant";

$req = $bdd ->prepare("INSERT INTO `participant` (`nom_part`, `prenom_part`, `pseudo_part`, `email_part`, `password_part`,`tel_part`,`role`) VALUES (?,?,?,?,?,?,?)" );

$req->execute(array($nom_part,$prenom_part,$pseudo_part,$email_part,$password_part,$tel_part,$role));
 
header("location: index.php")

?>