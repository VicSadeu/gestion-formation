<?php

session_start();

require_once("bd.php");

    $id_user = $_POST["id_user"];
    $nom_user = $_POST["nom_user"];
    $prenom_user = $_POST["prenom_user"];
    $pseudo_user = $_POST["pseudo_user"];
    $email_user = $_POST["email_user"];
    $password_user = $_POST["password_user"];
    $tel_user =$_POST["tel_user"];
    $role =$_POST["role"];


    $req = $bdd ->prepare("UPDATE utilisateur SET nom_user=?, prenom_user=?, pseudo_user=?, email_user=?, password_user=?, tel_user=? WHERE id_user=?" );
     
    $req->execute(array($nom_user,$prenom_user,$pseudo_user,$email_user,$password_user,$tel_user,$id_user));

    header("location: modifier_pers.php?id_user=$id_user")


?>