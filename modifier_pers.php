
<?php
  session_start();
  $id_user=$_GET['id_user'];
include("bd.php");

$ps=$bdd->prepare("SELECT * FROM utilisateur WHERE id_user=?");
$ps->execute(array($id_user));
//on stocke le resultat dans le tableau associatif
$result = $ps->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>FORMATION SECEL</title>

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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
  
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
  <?php
    include("menu2.php");
    ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Modifier le personnel : <?php echo $result['nom_user']; ?> </h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="modif_pers.php">
                <div class="form-group " style="display:none" >
                    <label for="name" class="control-label col-lg-2">Id:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="id_user" value="<?php echo $_GET['id_user']; ?>" placeholder="<?php echo $_SESSION['id_user']; ?>" type="text" required />
                    </div>
                  </div>  
                <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="nom_user" value="<?php echo $result['nom_user']; ?>" minlength="2" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="prenom" class="control-label col-lg-2">Prenom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="prenom" name="prenom_user" value="<?php echo $result['prenom_user']; ?>" minlength="2" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pseudo" class="control-label col-lg-2">pseudo</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="pseudo_user" name="pseudo_user" value="<?php echo $result['pseudo_user']; ?>" minlength="2" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email_user" name="email_user" value="<?php echo $result['email_user']; ?>" minlength="2" type="email" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password_user" value="<?php echo $result['password_user']; ?>" minlength="2" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tel" class="control-label col-lg-2">Telephone</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="tel_user" name="tel_user" value="<?php echo $result['tel_user']; ?>" minlength="2"  type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="role" class="control-label col-lg-2">role</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="role" value="<?php echo $result['role']; ?>">
                      <option name="1">Formateur</option>
                      <option name="2">Responsable</option>
                      
                      </select>
                  
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                     <center> <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button></center>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>


