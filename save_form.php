<?php

session_start();

require_once("bd.php");

    $nom_for = $_POST["nom_for"];
    $lib_for = $_POST["lib_for"];
    $formateur = $_POST["formateur"];
    $date_debut = $_POST["date_debut"];
    $date_fin = $_POST["date_fin"];
    $id_user =$_POST["id_user"];

    $req = $bdd ->prepare("INSERT INTO formation (`nom_for`, `lib_for`, `formateur`, `date_debut`, `date_fin`,`id_user`) VALUES (?,?,?,?,?,?)" );
     
    $req->execute(array($nom_for,$lib_for,$formateur,$date_debut,$date_fin,$id_user));

    header("location: ajoutfor.php")


?>