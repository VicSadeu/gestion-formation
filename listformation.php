<?php

// on demarre une session
session_start();

// on inclut la connexion à la base
require_once('bd.php');

$sql = "SELECT * FROM `formation`";

//on prepare la requete
$res=$bdd->prepare($sql);

//var_dump($res  );
//on execute la requete
$res->execute();

//on stocke le resultat dans le tableau associatif
$result = $res->fetchAll(PDO::FETCH_ASSOC);

require_once('listformation.php');
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
        <?php
    require("menu2.php");
    ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Formations</h3>

        
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> liste des formations</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Nom</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                    <th><i class="fa fa-bookmark"></i> Formateur</th>
                    <th><i class=" fa fa-edit"></i> Debut </th>
                    <th><i class=" fa fa-edit"></i> Fin </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                        //on boucle sur la variable result
                        foreach($result as $produit):?>
                  <tr>
                    <td>
                      <a href="basic_table.html#"><?=$produit['nom_for'] ?></a>
                    </td>
                    <td class="hidden-phone"><?=$produit['lib_for'] ?></td>
                    <td><?=$produit['formateur'] ?> </td>
                    <td><span class="label label-info label-mini"><?=$produit['date_debut'] ?></span></td>
                    <td><span class="label label-success label-mini"><?=$produit['date_fin'] ?></span></td>
                    <td>
                    <a class="btn btn-success btn-xs" data-toggle="modal" href="login.html#myModal"><i class="fa fa-check "></i></a>
                      <a class="btn btn-primary btn-xs" onclick="return confirm('vous voulez sure de vouloir modifier ?')" href='modifier_for.php?id_for=<?php echo $produit['id_for'] ?>'><i class="fa fa-pencil "></i></a>
                      <a class="btn btn-danger btn-xs" onclick="return confirm('vous voulez sure de vouloir supprimer ?')" href='supprimer_for.php?id_for=<?php echo $produit['id_for'] ?>'><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                    
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
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
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   

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
  
</body>

</html>
