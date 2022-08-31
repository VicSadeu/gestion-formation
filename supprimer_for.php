<?php

session_start();
$code=$_GET['id_for'];
include("bd.php");

$ps=$bdd->prepare("DELETE FROM formation WHERE id_for=?");
$ps->execute(array($code));

header("location:listformation.php");


?>