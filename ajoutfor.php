<?php
  session_start();

  require_once('bd.php');
  
  $sql = "SELECT * FROM `utilisateur`";
  
  //on prepare la requete
  $res=$bdd->prepare($sql);
  
  //var_dump($res  );
  //on execute la requete
  $res->execute();
  
  //on stocke le resultat dans le tableau associatif
  $result = $res->fetchAll(PDO::FETCH_ASSOC);

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
  <link href="image/image1.png" rel="icon">
  <link href="image/images2.png" rel="apple-touch-icon">

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
    <?php
      require_once("menu2.php");
    ?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height"><br>
        <h3><i class="fa fa-angle-right"></i> Ajouter une formation</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="save_form.php">
                <div class="form-group " style="display:none">
                    <label for="name" class="control-label col-lg-2">Id:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" placeholder="<?php echo $_SESSION['id_user']; ?>" type="text" required />
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Nom:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="nom_for" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="libelle" class="control-label col-lg-2">Libelle:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="libelle" name="lib_for" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="libelle" class="control-label col-lg-2">Formateur:</label>
                    <div class="col-lg-10">
                    <input class="form-control " id="formateur" type="text" name="formateur" required />
                   
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="date_d" class="control-label col-lg-2">Debut:</label>
                    <div class="col-lg-3">
                      <input class="form-control " id="date" type="date" name="date_debut" required />
                      
                    </div>
                    <label for="date" class="control-label col-lg-2">fin:</label>
                    <div class="col-lg-3">
                      <input class=" form-control" id="date" name="date_fin" minlength="2" type="date" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="submit">Save</button>
                      <button class="btn btn-theme04" onclick="window.location.href='accueil2.php'" type="reset">Cancel</button>
                    </div>
                  </div>
                </form>
              
    </section>
   
    
    <!--footer end-->
  </section>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
