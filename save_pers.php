<?php

session_start();

require_once("bd.php");

    $nom_user = $_POST["nom_user"];
    $prenom_user = $_POST["prenom_user"];
    $pseudo_user = $_POST["pseudo_user"];
    $email_user = $_POST["email_user"];
    $password_user = $_POST["password_user"];
    $tel_user = $_POST["tel_user"];
    $role = $_POST["role"];

    $req = $bdd ->prepare("INSERT INTO `utilisateur` (`nom_user`, `prenom_user`, `pseudo_user`, `email_user`, `password_user`, `tel_user`, `role`) VALUES (?,?,?,?,?,?,?)" );
     
    $req->execute(array($nom_user,$prenom_user,$pseudo_user,$email_user,$password_user,$tel_user,$role));

    header("location: liste_pers.php")


?>