<?php
 session_start();
require_once("bd.php");

    $id_for = $_GET["id_for"];
    $id_part = $_GET["id_part"];
    

    $req = $bdd ->prepare("INSERT INTO `abonner` (`id_for`, `id_part`) VALUES (?,?)" );
     
    $req->execute(array($id_for, $id_part));
   
    header("location: mes_formations.php");


?>