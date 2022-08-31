<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>FROMATION SECEL</title>

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
    <div class="container">
      <form class="form-login" action="connect_inscrit.php" method="POST">
        <h2 class="form-login-heading">Inscription</h2>
        <div class="login-wrap">
          <label>Nom</label><br>
          <input type="text" class="form-control" autocomplete="off" placeholder=" Nom " name="nom_part" autofocus>
          <br>
          <label>Prenom</label><br>
          <input type="text" class="form-control" autocomplete="off" placeholder=" Prenom" name="prenom_part" autofocus>
          <br>
          <label>pseudo</label><br>
          <input type="text" class="form-control" autocomplete="off" placeholder=" nom utilisateur" name="pseudo_part" autofocus>
          <br>
          <label>Telephone</label><br>
          <input type="text" class="form-control" autocomplete="off" placeholder=" Telephone" name="tel_part" autofocus>
          <br>
          <label>Email</label><br>
          <input type="email" class="form-control" autocomplete="off" placeholder=" Email_part" name="email_part" autofocus>
          <br>
          <label>Mot de passe</label><br>
          <input type="password" class="form-control" placeholder="Mot de passe" name="password_part"><br>
          <label>Confirmer le mot de passe</label><br>
          <input type="password" class="form-control" placeholder="Confirmation" name="confirm"><br>

         
          <button class="btn btn-theme btn-block" onclick="window.location.href='index.php'" type="submit"><i class="fa fa-lock"></i> Inscrire</button>
          <button class="btn btn-theme btn-block" onclick="window.location.href='index.php'" type="reset"><i class="fa fa-back"></i> retour</button>
       
          <hr>
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
    $.backstretch("image/images2.png", {
      speed: 500
    });
  </script>
</body>

</html>
