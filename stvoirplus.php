<?php
session_start();
// on inclut la connexion à la base
require_once('bd.php');



  $id_for=$_GET['id_for'];
  $res2=$bdd->prepare("SELECT count(*) AS nbre FROM evaluer WHERE id_for=? ");
  $res2->execute(array($id_for));
  $result2 = $res2->fetchAll(PDO::FETCH_ASSOC);
  $result2 = $result2;
  $id2 = $_GET['id_for'];

 

require_once('stvoirplus.php');
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
  <link href="img/images2.jpg" rel="icon">
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
    <?php
    $sql = "SELECT * FROM formation WHERE id_for=?";



    //on prepare la requete
    $res=$bdd->prepare($sql);
    
    //var_dump($res  );
    //on execute la requete
    $res->execute(array($id_for));
    //on stocke le resultat dans le tableau associatif
    $result = $res->fetch();
    ?>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>statistique de la formation <?=$result['nom_for'] ?></h4>
            <div class="form-panel">

            <?php foreach($result2 as $key => $produit): 
               $id2 = $produit['id_for'];
               

               //on prepare la requete
               $res2=$bdd->prepare("SELECT count(*) AS nbre FROM evaluer WHERE id_for=? ");
               $res2->execute(array($id2));
               $result2 = $res2->fetchAll(PDO::FETCH_ASSOC);
               $result2 = $result2;
               $id2 = $_GET['id_for'];
              
            ?>


              <div class="showback">
                
                <h4><i class="fa fa-angle-right"></i>  evaluations sur <?= $result2[0]["nbre"] ?></h4>
                
                
                  <div class="progress progress-striped active">
                  
                  <div class="" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                    <span class="sr-only">45% Complete</span>
                  </div>
                </div>
               
              </div>
           

            <?php endforeach; ?>
     
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
       
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   
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
