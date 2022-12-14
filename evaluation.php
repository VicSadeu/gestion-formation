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
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Formulaire d'evaluation</h4>
            <div class="form-panel"style="padding:20px 20px 40px 20px;">
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                            <th><b>  &nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp <br></b></th>
                                <th><b>  <br><center>FICHE D'EVALUATIION   <br>DES FORMATIONS  </center><br></b></th>
                                <th><b><center>DGL-FL-0017-01 </center> <br></b></th>
                                
                            </tr>
                        </thead>
                    </table>
                </section>
         
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="save_evaluer.php">
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Nom:</label>
                    <div class="col-lg-6">
                      <u>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</u>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tel" class="control-label col-lg-2">Contact:</label>
                    <div class="col-lg-6">
                    <u>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp </u>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="periode" class="control-label col-lg-2">Periode:</label>
                    <div class="col-lg-6">
                    <u>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</u>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="formateur" class="control-label col-lg-2">Nom du formateur:</label>
                    <div class="col-lg-6">
                    <u>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp </u>
                    </div>
                  </div>
                  
                  <div class="alert alert-info">
                    <b>Histoire  </b> 
                  
                  </div>
                  
                  <div class="form-group ">
                      <label for="password" class="control-label col-lg-7">1) Avez-vous deja suivi une formation sur ce sujet? </label>
                      <div class="col-lg-4">
                    
                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                      
                        <br>
              
                      </div>
                    
                     <label for="password" class="control-label col-lg-7">2) ou?</label>
                        <div class="col-lg-3">
                          <input class="form-control " id="lieu" name="12" type="text" />
                        </div>
                  
                  </div>
                    
                  <div class="alert alert-info">
                    <b>Formation </b>
                  </div>
                  <div class="form-group ">
                      <label for="password" class="control-label col-lg-9">1) Le plan du cours pr??sent?? a ??te respect??</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">2) Le cours ??tait bien structur??</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">3) La qualit?? d'information present??e ??tait suffisante</label>
                        <div class="col-lg-3">
                          <P style=> 1  2  3  4  5<P>
                        
                          <br>
                        </div>
                      <label for="password" class="control-label col-lg-9">4) Les exercices etaient ad??quats</label>
                        <div class="col-lg-3">
                          <P style=> 1  2  3  4  5<P>
                        
                          <br>
                        </div>
                      <label for="password" class="control-label col-lg-9">5) Ce cours a repondu a mes besoins et attentes</label>
                        <div class="col-lg-3">
                          <P style=> 1  2  3  4  5<P>
                        
                          <br>
                      </div>
                    </div>
                    <div class="alert alert-info">
                      <b>Formateur</b> 
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-9">1) Le formateur ??tait pr??par??</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">2) Les explications ??taient claires et pr??cises</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">3) Le formateur a utilis?? un langage accessible</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">4) Le formateur ??tait attentif aux besoins de chacun</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">5) Le formateur a su bien s'adapter au groupe</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                    </div>
                    <div class="alert alert-info">
                      <b>Environnement et logistique</b> 
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-9">1) L'accueil et l'ambiance ??taient agr??ables</label>
                  
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">2) Les ??quipements en salle ??taient ad??quats</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">3) L'environnement physique ??tait ad??quat</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">4) Le materiel p??dagogique ??tait pertinent</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-9">5) Comment avez-vous trouv?? les repas?</label>
                      <div class="col-lg-3">
                        <P style=> 1  2  3  4  5<P>
                        
                        <br>
                      </div>        
                    </div>
                    <div class="alert alert-info">
                      <b>Perpestives</b> 
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-7">1) Recommenderz-vous ce cours ?</label>
                      <div class="col-lg-3">
                        <select class="form-control" name="51">
                        <option name="1">Oui</option>
                        <option name="2">Non</option>
                        
                        </select>
                        <br>
                      </div>
                      <label for="password" class="control-label col-lg-7">2) Seriez-vous int??ress?? a vous inscrire a un autre cours ?</label>
                      <div class="col-lg-3">
                        <select class="form-control" name="52">
                        <option name="1">Oui</option>
                        <option name="2">Non</option>
                        
                        </select>
                        <br>
                      </div>
                      <br>
                      <label for="password" class="control-label col-lg-3">3) Si oui lequel ?</label>
                      <div class="col-lg-3">
                        <input class="form-control " id="lieu" name="53" type="text" />
                      </div>
                      <label for="password" class="control-label col-lg-1">Quand?</label>
                      <div class="col-lg-3">
                       <input class="form-control " id="lieu" name="54" type="date" />
                      </div>
                    </div>
                    <div class="alert alert-info">
                      <b>Commentaire (tr??s important)</b> 
                    </div>
                    <div class="form-group ">
                      <br>
                      <label for="password" class="control-label col-lg-3">1) Qu'avez-vous le plus aim?? ?</label>
                      <div class="col-lg-8">
                       <input class="form-control " id="lieu" name="61" type="text" />
                       <br>
                      </div>
                      <label for="password" class="control-label col-lg-3">2) Y'aurait-il des ??l??ments ?? am??liorer :</label>
                      <div class="col-lg-8">
                       <input class="form-control " id="lieu" name="62" type="text" />
                       <br>
                      </div>
                      <label for="password" class="control-label col-lg-4">3) Autres commentaires :</label>
                      <div class="col-lg-7">
                        <input class="form-control " id="lieu" name="63" type="text" />
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-3">
                     <button class="btn btn-theme" type="submit">Enregister</button>
                      <button class="btn btn-theme04" type="button">    Annuler</button>
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
