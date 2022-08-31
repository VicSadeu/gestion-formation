<?php

// on demarre une session
session_start();

// on inclut la connexion à la base
require_once('bd.php');

$sql = "SELECT * FROM `utilisateur`";

//on prepare la requete
$res=$bdd->prepare($sql);

//var_dump($res  );
//on execute la requete
$res->execute();

//on stocke le resultat dans le tableau associatif
$result = $res->fetchAll(PDO::FETCH_ASSOC);

require_once('liste_pers.php');
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
        <h3><i class="fa fa-angle-right"></i>Formateurs</h3>

        
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> liste du personnel de formation</h4>
                <hr>
                <thead>
                  <tr>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Identifiant</th>
                    <th><i class="fa fa-bullhorn"></i> Nom</th>
                    <th class="hidden-phone"><i class="fa fa-bullhorn"></i> Prenom</th>
                    <th><i class="fa fa-bookmark"></i> Pseudo</th>
                    <th><i class=" fa fa-edit"></i> Email </th>
                    <th><i class=" fa fa-edit"></i> Telephone </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                        //on boucle sur la variable result
                        foreach($result as $produit):?>
                  <tr>
                  <td>
                      <b><?=$produit['id_user'] ?></b>
                    </td>
                    <td>
                      <b><?=$produit['nom_user'] ?></b>
                    </td>
                    <td class="hidden-phone"><?=$produit['prenom_user'] ?></td>
                    <td><?=$produit['pseudo_user'] ?> </td>
                    <td><?=$produit['email_user'] ?></td>
                    <td><?=$produit['tel_user'] ?></td>
                    <td>
                      <a class="btn btn-success btn-xs" data-toggle="modal" href="login.html#myModal"><i class="fa fa-check"></i></a>
                      <a class="btn btn-primary btn-xs" onclick="return confirm('vous voulez sure de vouloir modifier ?')" href='modifier_pers.php?id_user=<?php echo $produit['id_user'] ?>'><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger btn-xs" onclick="return confirm('vous voulez sure de vouloir supprimer ?')" href='supprimer_pers.php?id_user=<?php echo $produit['id_user'] ?>'><i class="fa fa-trash-o "></i></a>
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
        
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
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
                    <p>  <?=$produit['nom_user']; ?><p>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Prenom:</label>
                    <div class="col-lg-10">
                      <p>  <?=$produit['prenom_user']; ?>
                      </div>
                  </div>
                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Email:</label>
                    <div class="col-lg-10">
                      <p> <?=$produit['email_user']; ?><p>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="formateur" class="control-label col-lg-2">Telephone:</label>
                    <div class="col-lg-10">
                    <p>  <?=$produit['tel_user']; ?><p>  
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
