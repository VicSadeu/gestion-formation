<?php

session_start();
$code=$_GET['id_part'];
include("bd.php");

$ps=$bdd->prepare("DELETE FROM participant WHERE id_part=?");
$ps->execute(array($code));

header("location:liste_part.php");


?>