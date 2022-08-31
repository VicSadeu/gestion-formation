<?php

session_start();

require_once("bd.php");

    $id_for = $_POST["id_for"];
    $nom_for = $_POST["nom_for"];
    $lib_for = $_POST["lib_for"];
    $formateur = $_POST["formateur"];
    $date_debut = $_POST["date_debut"];
    $date_fin = $_POST["date_fin"];
    $id_user =$_POST["id_user"];

    $req = $bdd ->prepare("UPDATE formation SET  nom_for=?, lib_for=?, formateur=?, date_debut=?, date_fin=?, id_user=? WHERE id_for=?" );
     
    $req->execute(array($nom_for,$lib_for,$formateur,$date_debut,$date_fin,$id_user,$id_for));

    header("location: modifier_for.php?id_for=$id_for")


?>