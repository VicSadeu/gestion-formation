<?php

session_start();


require_once('bd.php');

$id_for=$_GET["id_for"];
$id_part=$_GET["id_part"];
$res=$bdd->prepare("SELECT * FROM formation,participant,evaluer WHERE formation.id_for=evaluer.id_for AND
participant.id_part=evaluer.id_part AND evaluer.id_for = ? AND evaluer.id_part=?");
$res->execute(array($id_for,$id_part));

//on stocke le resultat dans le tableau associatif
$result = $res->fetch(PDO::FETCH_ASSOC);

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
  <link href="img/favicon.png" rel="icon">
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
    require("menu2.php");
    ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
        <!-- /row -->
        <div class="row mt" style="display:;">
        <h4><i class="fa fa-angle-right" ></i>Formulaire d'evaluation</h4>
            <div class="form-group col-md-3" style="display:flex;">
                            
                            <div class="imprimer">
                                <a onclick="imprimer(<?= $result['id_for'] ?>)" class="btn btn-success" type="_blank">Imprimer</a>

                            </div>
                            <script type="text/javascript">
                                function imprimer(param){
                                    window.open('imprime.php?id_for='+param, 'Page', 'spadding:40px 40px 0px 40px')
                                }
                            </script>
                            <button class="btn btn-theme btn-block" onclick="window.location.href='index.php'" type="reset"><i class="fa fa-back"></i> retour</button>
            </div>  
          <div class="col-lg-12">
           
            <div class="form-panel" style="padding:40px 40px 0px 40px;">
                
              <div class="form">
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                        <div class="form-group " style="display:none">
                            <label for="name" class="control-label col-lg-4">Id:</label>
                            <div class="col-lg-3">
                                b><p><?php echo $result['id_for']; ?> </p></b>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nom" class="control-label col-lg-4">Nom:</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['nom_part']; ?> <?php echo $result['prenom_part']; ?></p></b>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nom" class="control-label col-lg-4">Cours:</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['nom_for']; ?> </p> </b>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="tel" class="control-label col-lg-4">Contact:</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['tel_part']; ?> </p></b>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="periode" class="control-label col-lg-4">Periode:</label>
                            <div class="col-lg-3">
                                <b><p><?php echo date_format(new DateTime($result['date_debut']),"d-M-Y"); ?> au <?php echo date_format(new DateTime($result['date_fin']),"d-M-Y"); ?></p></b>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="formateur" class="control-label col-lg-4">Nom du formateur:</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['formateur']; ?> </p></b>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <div class="alert alert-info">
                            <b>Histoire</b>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-9">1) Avez-vous deja suivi une formation sur ce sujet?</label>
                                <div class="col-lg-3">
                                <b><p><?php echo $result['11']; ?> </p></b>
                                <br>
                            </div>
                            <label for="password" class="control-label col-lg-9">2) ou?</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['12']; ?> </p></b>
                            </div>
                        </div>
                        <div class="alert alert-info">
                            <b>Formation</b> 
                        </div>
                        <div class="form-group ">
                            
                            <label for="password" class="control-label col-lg-9">1) Le plan du cours présenté a éte respecté</label>
                            <div class="col-lg-3" stle="display:flex;">
                                <b><p><?php if ($result['21']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['21']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['21']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['21']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                                
                            </div>
                            <label for="password" class="control-label col-lg-9">2) Le cours était bien structuré</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['22']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['22']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['22']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['22']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">3) La qualité d'information presentée était suffisante</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['23']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['23']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['23']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['23']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">4) Les exercices etaient adéquats</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['24']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['24']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['24']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['24']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">5) Ce cours a repondu a mes besoins et attentes</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['25']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['25']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['25']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['25']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                        </div>
                        <div class="alert alert-info"> 
                            <b>Formateur</b> 
                        </div>              
                        <div class="form-group ">
                            
                            <div class="form-group ">
                            <label for="password" class="control-label col-lg-9">1) Le formateur était préparé</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['31']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['31']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['31']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['31']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">2) Les explications étaient claires et précises</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['32']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['32']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['32']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['32']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">3) Le formateur a utilisé un langage accessible</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['33']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['33']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['33']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['33']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">4) Le formateur était attentif aux besoins de chacun</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['34']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['34']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['34']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['34']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">5) Le formateur a su bien s'adapter au groupe</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['35']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['35']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['35']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['35']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                        </div>                      
                        <div class="alert alert-info">
                            <b>Environnement et logistique</b> 
                        </div>
                        <div class="form-group ">
                            
                            <label for="password" class="control-label col-lg-9">1) L'accueil et l'ambiance étaient agréables</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['41']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['41']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['41']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['41']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }  
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">2) Les équipements en salle étaient adéquats</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['42']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['42']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['42']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['42']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">3) L'environnement physique était adéquat</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['43']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['43']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['43']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['43']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">4) Le materiel pédagogique était pertinent</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['44']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['44']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['44']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['44']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-9">5) Comment avez-vous trouvé les repas?</label>
                            <div class="col-lg-3">
                            <b><p><?php if ($result['45']==1){
                                   echo'<span class="badge">',1,'</span>';
                                } elseif ($result['45']==2) {
                                    echo'<span class="badge bg-primary">',2,'</span>';
                                } elseif($result['45']==3){
                                    echo'<span class="badge bg-success">',3,'</span>';
                                }elseif($result['45']==4){
                                    echo'<span class="badge bg-info">',4,'</span>';
                                }else{
                                    echo'<span class="badge bg-inverse">',5,'</span>';
                                }
                                    
                                ?> </p></b>
                            </div>
                        </div>
                        <div class="alert alert-info">
                            <b>Perpestives</b> 
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-9">1) Recommenderz-vous ce cours ?</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['51']; ?> </p></b>
                                <br>
                            </div>
                            <label for="password" class="control-label col-lg-9">2) Seriez-vous intéressé a vous inscrire a un autre cours ?</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['52']; ?> </p></b>
                                <br>   
                            </div>
                            <label for="password" class="control-label col-lg-3">3) Si oui lequel ?</label>
                            <div class="col-lg-4">
                                <b><p><?php echo $result['53']; ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-1">Quand?</label>
                            <div class="col-lg-3">
                                <b><p><?php echo $result['54']; ?> </p></b>
                            </div>
                        </div>
                        <div class="alert alert-info">
                            <b>Commentaire (très important)</b> 
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-5">1) Qu'avez-vous le plus aimé ?</label>
                            <div class="col-lg-6">
                                <b><p><?php echo $result['61']; ?> </p></b>
                            </div>
                            <label for="password" class="control-label col-lg-5">2) Y'aurait-il des éléments à améliorer :</label>
                            <div class="col-lg-6">
                                <b><p><?php echo $result['62']; ?> </p></b>
                            </div>
                            <br>
                            <label for="password" class="control-label col-lg-5">3) Autres commentaires :</label>
                            <div class="col-lg-6">
                                <b><p><?php echo $result['63']; ?> </p></b>
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
