<?php

session_start();

require_once("bd.php");
    $id_for = $_POST["id_for"];
    $id_part = $_SESSION["id_part"];
    $H1 = $_POST["11"];
    $H2 = $_POST["12"];
    $F1 = $_POST["21"];
    $F2 = $_POST["22"];
    $F3 = $_POST["23"];
    $F4 = $_POST["24"];
    $F5 = $_POST["25"];
    $FF1 = $_POST["31"];
    $FF2 = $_POST["32"];
    $FF3 = $_POST["33"];
    $FF4 = $_POST["34"];
    $FF5 = $_POST["35"];
    $E1 = $_POST["41"];
    $E2 = $_POST["42"];
    $E3 = $_POST["43"];
    $E4 = $_POST["44"];
    $E5 = $_POST["45"];
    $P1 = $_POST["51"];
    $P2 = $_POST["52"];
    $P3 = $_POST["53"];
    $P4 = $_POST["54"];
    $C1 = $_POST["61"];
    $C2 = $_POST["62"];
    $C3 = $_POST["63"];

    $req = $bdd ->prepare("INSERT INTO `evaluer` (`id_for`,`id_part`, `11`,`12`,
    `21`,`22`,`23`,`24`,`25`,
    `31`,`32`,`33`,`34`,`35`,
    `41`,`42`,`43`,`44`,`45`,
    `51`,`52`,`53`,`54`,`61`,`62`,`63`) 
    VALUES (?,?,?,?,
    ?,?,?,?,?,
    ?,?,?,?,?,
    ?,?,?,?,?,
    ?,?,?,?,?,?,?)" );
     
    $req->execute(array($id_for,$id_part,$H1,$H2,$F1,$F2,$F3,$F4,$F5,$FF1,$FF2,
    $FF3,$FF4,$FF5,$E1,$E2,$E3,$E4,$E5,$P1,$P2, $P3, $P4, $C1,$C2,
    $C3));

    header("location: mes_formations.php")


?>