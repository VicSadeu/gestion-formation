<?php
session_start();
if(isset($_session["prenom"])){
    $prenom = $_session["prenom"];
}else{
    $path = $_SERVER["php_self"];
    $file = basename ($path);
    if($file !== 'index.php') header("location: index.php");
}
?>