<?php

session_start();


require_once('bd.php');

$id_for=$_GET["id_for"];
$id_part=$_GET["id_part"];

$ps=$bdd->prepare("DELETE  FROM formation,participant,evaluer WHERE formation.id_for=evaluer.id_for AND
participant.id_part=evaluer.id_part AND evaluer.id_for =? AND evaluer.id_part=?");
$ps->execute(array($id_for,$id_part));

header("location:liste_evaluations.php");


?>
