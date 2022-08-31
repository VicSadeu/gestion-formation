<?php
  session_start();
// on inclut la connexion à la base
require_once('bd.php');

if($_SESSION['role'] == 'participant'){
  $id = $_SESSION['id_part'];
}

$sql = "SELECT * FROM abonner,formation,participant WHERE formation.id_for=abonner.id_for AND participant.id_part=abonner.id_part AND participant.id_part=?";

//on prepare la requete
$res=$bdd->prepare($sql);

//var_dump($res  );
//on execute la requete
$res->execute(array($id));

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
  <section id="container">
    
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php
      require_once("menu2.php");
    ?>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Mes formations</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- CHART PANELS -->
            
            <?php
                        //on boucle sur la variable result
                        foreach($result as $key => $produit):
                          if(($key)%3 == 0){
                            echo '<div class="row"> ';
                          }
                        ?>
                        
                         
              <div class="col-md-4 col-sm-4 mb">
                <div class="thumbnail">
                  <img src="img/images1.png" alt="...">
                  <div class="caption">
                      <h4><b> <?=$produit['nom_for'] ?> <b></h4>
                      <p><?=$produit['lib_for'] ?></p>
                      <center><a class="btn btn-success" style="width: 100%;" data-toggle="modal" href="login.html#myModal">Voir</a> </br></br>
                      <?php if(isset($_SESSION['id_part']) && $_SESSION['role']=="participant"){ ?>
                      <a class="btn btn-primary" style="width: 100%;" href="evaluer.php?id_for=<?php echo $produit['id_for']; ?>&id_part=<?php echo $_SESSION["id_part"]; ?>">Evaluer</a></center>
                      <?php } ?>
                  </div>
                 
                </div>
                <!-- /grey-panel -->
                
              </div>
              <?php
                if(($key+1)%3 == 0){
                  echo '</div>';
                }
              endforeach;
              ?>
            
            
            
           
            <!-- /row FOURTH ROW OF PANELS -->
            <!--  FIFTH ROW OF PANELS -->
           
            <!-- /row FIFTH ROW OF PANELS -->
            <!--  SIXTH ROW OF PANELS -->
            <!-- Product Panel -->
           
            <!--  END SIXTH ROW OF PANELS -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
  </section>

  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Visualiser </h4>
              </div>
              <div class="modal-body">
                <div class="form-group ">
               
                    <label for="name" class="control-label col-lg-2">Nom:</label>
                    <div class="col-lg-10">
                    <p>  <?=$produit['nom_for']; ?><p>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Description:</label>
                    <div class="col-lg-10">
                      <p>  <?=$produit['lib_for']; ?>
                      </div>
                  </div>
                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">periode:</label>
                    <div class="col-lg-10">
                      <p>Du <?php echo date_format(new DateTime($produit['date_debut']),"d-M-Y"); ?> au <?php echo date_format(new DateTime($produit['date_fin']),"d-M-Y"); ?><p>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="formateur" class="control-label col-lg-2">Formateur:</label>
                    <div class="col-lg-10">
                    <p>  <?=$produit['formateur']; ?><p>  
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Retour</button>
               
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  </section>
  <?php
      require_once("footer.php");
    ?>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
</body>

</html>
