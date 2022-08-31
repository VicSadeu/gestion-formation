<?php

session_start();
$code=$_GET['id_user'];
include("bd.php");

$ps=$bdd->prepare("DELETE FROM utilisateur WHERE id_user=?");
$ps->execute(array($code));

header("location:liste_pers.php");


?>