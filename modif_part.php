<?php

session_start();

require_once ('bd.php');

    $id_part = $_POST["id_part"];
    $nom_part = $_POST['nom_part'];
    $prenom_part = $_POST['prenom_part'];
    $pseudo_part = $_POST['pseudo_part'];
    $email_part = $_POST['email_part'];
    $tel_part = $_POST['tel_part'];
    

    $req = $bdd -> prepare("UPDATE participant SET id_part=? nom_part = ?, prenom_part = ?, pseudo_part = ?, email_part = ?, tel_part=? WHERE id_part = ? ");
      $req->execute(array($id_part,$nom_part, $prenom_part, $pseudo_part, $email_part, $tel_part));

      header ("Location: modifier_part.php?id_part=$id_part");
    


?>