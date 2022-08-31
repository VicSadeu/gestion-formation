<?php
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION['pseudo_user'])){
    $id = $_SESSION["id"];
    $nom = $_SESSION['pseudo_user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>connexion secel</title>

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="connect-user.php" method="POST">
        <h2 class="form-login-heading">Connexion</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" autocomplete="off" placeholder="nom Utilisateur" name="pseudo" autofocus>
          <br>
          <input type="password" class="form-control" autocomplete="off" placeholder="Mot de passe" name="password"><br>
         
          <button class="btn btn-theme btn-block" href="accueil.php" type="submit"><i class="fa fa-lock"></i> Connecter</button>
          <?php
          if(isset($_GET['erreur'])){
            $err=$_GET['erreur'];
            if($err==1){
                echo"<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }else{ ?>

              <script>
              alert ("Veuillez entrer tous les champs svp !!!");
            </script>'; <?php
              
            }
          }
          ?>
          <hr>
         
          <div class="registration">
            Vous n'avez pas de compte ?<br/>
            <a class="" href="inscription2.php">
              Creer un compte
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mot de passe oublie ?</h4>
              </div>
          
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
