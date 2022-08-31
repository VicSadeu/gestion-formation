<?php
session_start();
// on inclut la connexion à la base
require_once('bd.php');


  $sql = "SELECT * FROM formation ORDER BY id_for desc";



//on prepare la requete
$res=$bdd->prepare($sql);

//var_dump($res  );
//on execute la requete
$res->execute();

//on stocke le resultat dans le tableau associatif
$result = $res->fetchAll(PDO::FETCH_ASSOC);

require_once('stat.php');
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
            <h4><i class="fa fa-angle-right"></i>statistique par formations</h4>
            <div class="form-panel">

            <?php foreach($result as $key => $produit): 

                require_once('bd.php');

                $id = $produit['id_for'];

                //on prepare la requete
                $res2=$bdd->prepare("SELECT count(*) AS nbre FROM evaluer,formation WHERE evaluer.id_for=formation.id_for AND formation.id_for=? ");
                $res2->execute(array($id));
                $result2 = $res2->fetchAll(PDO::FETCH_ASSOC);
                $result2 = $result2;
                $id2 = $produit['id_for'];
                $res3=$bdd->prepare("SELECT count(*) AS nbree FROM abonner,formation,participant WHERE abonner.id_for=formation.id_for AND abonner.id_part=participant.id_part AND abonner.id_for=? ");
                $res3->execute(array($id2));
                $result3 = $res3->fetchAll(PDO::FETCH_ASSOC);
                $result3 = $result3;
                if($result2[0]["nbre"]==0){
                    $stat= 0;
                }
                if($result3[0]["nbree"]==0){
                    $stat= 0;
                }else{
                   $stat=($result2[0]["nbre"]/$result3[0]["nbree"])*100; 
                }
                
                ?>
            

              <div class="showback">
                <a href="stvoirplus.php?id_for=<?php echo $produit['id_for'] ?>'">
                <h4><i class="fa fa-angle-right"></i><?=$produit['nom_for'] ?>: <?= $result2[0]["nbre"] ?> evaluations sur <?= $result3[0]["nbree"] ?></h4>
                <?= $stat ?>%
                <?php 
                  if($stat>=1 && $stat<20){
                    $a="progress-bar progress-bar-danger" ;
                  }elseif(($stat>=20 && $stat<40)){
                    $a="progress-bar progress-bar-warning" ;
                  }elseif(($stat>=40 && $stat<60)){
                    $a="progress-bar progress-bar-info" ;
                  }else{
                    $a="progress-bar progress-bar-success" ;
                  }
                ?>
                  <div class="progress progress-striped active">
                  
                  <div class="<?= $a ?>" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $stat ?>%">
                    <span class="sr-only">45% Complete</span>
                  </div>
                </div>
                </a>
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
