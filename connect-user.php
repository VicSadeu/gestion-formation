<?php
session_start();

if(isset($_POST['pseudo']) && isset($_POST['password'])){
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'gestion_eval';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('could not connect to database');
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $pseudo = mysqli_real_escape_string($db,htmlspecialchars($_POST['pseudo']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    if($pseudo !== "" && $password !== ""){
        $requete = "SELECT * FROM utilisateur where
        pseudo_user = '".$pseudo."' and password_user= '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $count = mysqli_num_rows($exec_requete);
       
        if($count > 0) // nom d'utilisateur et mot de passe correctes
        {
            $reponse = mysqli_fetch_array($exec_requete);
            $_SESSION['id_user'] = $reponse['id_user'];
            $_SESSION['role'] = $reponse['role'];
            $_SESSION['pseudo_user'] = $reponse['pseudo_user'];
            $_SESSION['nom_user'] = $reponse['nom_user'];
            header('Location: accueil2.php');
        }else{
            $requete = "SELECT * FROM participant where
            pseudo_part = '".$pseudo."' and password_part= '".$password."' ";
            $exec_requete = mysqli_query($db,$requete);
            $count = mysqli_num_rows($exec_requete);
            if($count > 0){
                $reponse = mysqli_fetch_array($exec_requete);
                $_SESSION['id_part'] = $reponse['id_part'];
                $_SESSION['role'] = $reponse['role'];
                $_SESSION['pseudo_part'] = $reponse['pseudo_part'];
                $_SESSION['nom_part'] = $reponse['nom_part'];
                $_SESSION['tel_part'] = $reponse['tel_part'];
                $_SESSION['email_part'] = $reponse['email_part'];
                header('Location: accueil2.php');    
            } else {
                header('Location: index.php?erreur=1'); // Participant ou mot de passe incorrect
            }
        }
    }else{
        header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
    header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>