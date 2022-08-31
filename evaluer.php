<?php

session_start();


require_once('bd.php');

$id_for=$_GET["id_for"];
$res=$bdd->prepare("SELECT * FROM `formation` WHERE id_for = ?");
$res->execute(array($id_for));

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
            <div class="form-panel"style="padding:10px 10px 40px 10px;">
                
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="save_evaluer.php">
                <div class="form-group " style="display:none">
                    <label for="name" class="control-label col-lg-2">Id:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="id_for" value="<?php echo $result['id_for']; ?>" placeholder="<?php echo $result['id_for']; ?>" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Nom:</label>
                    <div class="col-lg-6">
                      <input class=" form-control" id="nom" name="nom_for" type="text" disabled value="<?php echo $_SESSION['nom_part']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Cours:</label>
                    <div class="col-lg-6">
                      <input class=" form-control" id="nom" name="nom_for" type="text" disabled value="<?php echo $result['nom_for']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tel" class="control-label col-lg-2">Contact:</label>
                    <div class="col-lg-6">
                      <input class=" form-control" id="tel" name="tel_part" type="text" disabled value="<?php echo $_SESSION['tel_part']; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="periode" class="control-label col-lg-2">Periode:</label>
                    <div class="col-lg-6">
                      <input class="form-control " id="periode" name="periode" type="text" disabled value="Du <?php echo date_format(new DateTime($result['date_debut']),"d-M-Y"); ?> au <?php echo date_format(new DateTime($result['date_fin']),"d-M-Y"); ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="formateur" class="control-label col-lg-2">Nom du formateur:</label>
                    <div class="col-lg-6">
                      <input class="form-control " id="formateur" disabled name="formateur" value="<?php echo $result['formateur']; ?>" type="text" />
                    </div>
                  </div>
                  <div class="alert alert-info"><b>Histoire</b> </div>
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">1) Avez-vous deja suivi une formation sur ce sujet?</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="11">
                      <option name="1">Oui</option>
                      <option name="2">Non</option>
                      
                      </select>
                      <br>
              
                    </div>
                    <label for="password" class="control-label col-lg-7">2) ou?</label>
                     <div class="col-lg-3">
                      <input class="form-control " id="lieu" name="12" type="text" />
                    </div>
                    </div>
                  </div>
                  <div class="alert alert-info"><b>Formation</b> </div>
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">1) Le plan du cours présenté a éte respecté</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="21">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">2) Le cours était bien structuré</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="22">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">3) La qualité d'information presentée était suffisante</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="23">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">4) Les exercices etaient adéquats</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="24">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">5) Ce cours a repondu a mes besoins et attentes</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="25">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                     </div>
                    </div>
                
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                    <div class="alert alert-info"><b>Formateur</b> </div>
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">1) Le formateur était préparé</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="31">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">2) Les explications étaient claires et précises</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="32">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">3) Le formateur a utilisé un langage accessible</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="33">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">4) Le formateur était attentif aux besoins de chacun</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="34">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">5) Le formateur a su bien s'adapter au groupe</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="35">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    </div>
                      </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                      <div class="alert alert-info"><b>Environnement et logistique</b> </div>
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">1) L'accueil et l'ambiance étaient agréables</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="41">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">2) Les équipements en salle étaient adéquats</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="42">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">3) L'environnement physique était adéquat</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="43">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">4) Le materiel pédagogique était pertinent</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="44">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br>
                    </div>
                    <label for="password" class="control-label col-lg-7">5) Comment avez-vous trouvé les repas?</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="45">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      <br> 
                    </div>
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                  
                    </div>
                     <div class="alert alert-info"><b>Perpestives</b> </div>
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">1) Recommenderz-vous ce cours ?</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="51">
                      <option name="1">Oui</option>
                      <option name="2">Non</option>
                      
                      </select>
                      <br>
                    </div>
                    
                    <div class="form-group ">
                    <label for="password" class="control-label col-lg-7">2) Seriez-vous intéressé a vous inscrire a un autre cours ?</label>
                    <div class="col-lg-3">
                      <select class="form-control" name="52">
                      <option name="1">Oui</option>
                      <option name="2">Non</option>
                      
                      </select>
                      <br>
              
                    </div>
                    </div>

                    <div class="form-group ">
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
                  </div> <br><br><br><br><br><br><br>
                  <div class="alert alert-info"><b>Commentaire (très important)</b> </div>
                  <div class="form-group ">
                    <br>
                    <label for="password" class="control-label col-lg-3">1) Qu'avez-vous le plus aimé ?</label>
                     <div class="col-lg-8">
                     <input class="form-control " id="lieu" name="61" type="text" />
                     </div>
                    </div>
                    <div class="form-group ">
                    <br><br>
                    <label for="password" class="control-label col-lg-3">2) Y'aurait-il des éléments à améliorer :</label>
                     <div class="col-lg-8">
                     <input class="form-control " id="lieu" name="62" type="text" />
                     </div>
                    </div>
                    <br>
                    <div class="form-group ">
                    <br>
                    <label for="password" class="control-label col-lg-3">3) Autres commentaires :</label>
                     <div class="col-lg-8">
                     <input class="form-control " id="lieu" name="63" type="text" />
                     </div>
                    </div>
                  <br><br><br>
                  <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-7">
                     <button class="btn btn-theme" type="submit" onclick="window.location.href='modifier_pers.php?id_for=<?php echo $produit['id_for'] ?>''">Enregister</button>
                      <button class="btn btn-theme04" onclick="window.location.href='mes_formations.php'" type="button">    Annuler</button>
                    </div>
                    
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
