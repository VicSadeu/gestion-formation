<?php

session_start();


require_once('bd.php');

$id_for=$_GET["id_for"];
$res=$bdd->prepare("SELECT * FROM formation,participant,evaluer WHERE formation.id_for=evaluer.id_for AND participant.id_part=evaluer.id_part AND evaluer.id_for = ?");
$res->execute(array($id_for));

//on stocke le resultat dans le tableau associatif
$result = $res->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <style>
      @media print{
          @page{
              size:;
          }
      }
  </style>
    <title>Fiche d'écaluation du:<?php echo $result['date_eval']; ?></title>
</head>
<body>
<div class="form-panel" style="padding:40px 40px 0px 40px; font-size:0, 0.5em; ">
                
                <div class="form">
                      <form id="signupForm" method="POST" action="">
                      <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                            <th><b>  &nbsp <img src="image/images1.png" class="img-rectangle" width="120"> <br></b></th>
                                <th><b>  <br><center>FICHE D'EVALUATIION   <br>DES FORMATIONS  </center><br></b></th>
                                <th><b><center>DGL-FL-0017-01 </center> <br></b></th>
                                
                            </tr>
                        </thead>
                    </table>
                          <div style="display:none">
                              <label for="name" >Id:</label>
                              
                                  b> <?php echo $result['id_for']; ?>  </b>
                              
                          </div>
                          <div class="form-group" style="ligne-height: 0.2em; height:0.5em; ">
                              <label for="nom" class=" ">Nom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                              
                                  <b> <?php echo $result['nom_part']; ?>   <?php echo $result['prenom_part']; ?> </b>
                             
                          </div>
                          <div class="form-group" style="ligne-height: 0.2em; height:0.5em; ">
                              <label for="nom" class=" ">Cours:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                               
                                  <b> <?php echo $result['nom_for']; ?>   </b>
                              
                          </div>
                          <div class="form-group" style="ligne-height: 0.2em; height:0.5em; ">
                              <label for="tel" class=" ">Contact:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                               
                                  <b> <?php echo $result['tel_part']; ?>  </b>
                              
                          </div>
                          <div class="form-group" style="ligne-height: 0.2em; height:0.5em; ">
                              <label for="periode" class=" ">Periode:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                               
                                  <b> <?php echo date_format(new DateTime($result['date_debut']),"d-M-Y"); ?> au <?php echo date_format(new DateTime($result['date_fin']),"d-M-Y"); ?> </b>
                              
                          </div>
                          <div class="form-group" style="ligne-height: 0.2em; height:0.5em; ">
                              <label for="formateur" class=" ">Nom du formateur:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                               
                                  <b> <?php echo $result['formateur']; ?>  </b>
                                  <br>
                              
                          </div>
                        
                          <div class="alert alert-info" style="ligne-height: 0.2em;  height:0.5em; ">
                              <b>Histoire</b>
                          </div>
                          <div class="form-group " style="ligne-height: 0.2em; ligne-height: 0.2em;">
                                
                
                                  <label for="password" class=" ">&nbsp&nbsp 1) Avez-vous deja suivi une formation sur ce sujet? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                   
                                  <b> <?php echo $result['11']; ?>  </b>
                                  <br>
                              
                              <label for="password" class=" ">&nbsp&nbsp 2) ou? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                               
                                  <b> <?php echo $result['12']; ?>  </b>
                                  
                          </div>
                          <div class="alert alert-info" style="ligne-height: 0.2em;  height:0.5em; ">
                              <b>Formation</b> 
                          </div>
                          <div class="form-group " style="ligne-height: 0.2em; ligne-height: 0.2em; display_inline:flex ">
                            <div class=" " style="display:flex;">
                                <label for="password" class=" ">&nbsp&nbsp 1) Le plan du cours présenté a éte respecté</label>
                               
                              
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
                            <div class=" " style="display:flex;">
                              
                              <label for="password" class=" ">&nbsp&nbsp 2) Le cours était bien structuré</label>
                               
                              
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
                            <div class=" " style="display:flex;">
                              
                              <label for="password" class=" ">&nbsp&nbsp 3) La qualité d'information presentée était suffisante</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 4) Les exercices etaient adéquats</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 5) Ce cours a repondu a mes besoins et attentes</label>
                               
                              
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
                          <div class="alert alert-info" style="ligne-height: 0.2em; height:0.5em; "> 
                              <b>Formateur</b> 
                          </div>              
                          <div class="form-group " style=" height:0.5em; ">
                              
                            <div class="form-group " style="ligne-height: 0.2em;">
                            <div class=" " style="display:flex;">
                              <label for="password" class=" ">&nbsp&nbsp 1) Le formateur était préparé</label>
                               
                              
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
                            <div class=" " style="display:flex;">
                              <label for="password" class=" ">&nbsp&nbsp 2) Les explications étaient claires et précises</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" "> &nbsp&nbsp 3) Le formateur a utilisé un langage accessible</label>
                               
                              
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
                            <div class=" " style="display:flex;">
                              <label for="password" class=" ">&nbsp&nbsp 4) Le formateur était attentif aux besoins de chacun</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" "> &nbsp&nbsp 5) Le formateur a su bien s'adapter au groupe</label>
                               
                              
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
                          <div class="alert alert-info" style="ligne-height: 0.2em; height:0.5em; ">
                              <b>Environnement et logistique</b> 
                          </div>
                          <div class="form-group " style="ligne-height: 0.2em;">
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 1) L'accueil et l'ambiance étaient agréables</label>
                               
                              
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
                            <div class="" style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 2) Les équipements en salle étaient adéquats</label>
                               
                              
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
                            <div class="" style="display:flex;">
                              <label for="password" class=" ">&nbsp&nbsp 3) L'environnement physique était adéquat</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 4) Le materiel pédagogique était pertinent</label>
                               
                              
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
                            <div class=" " style="display:flex;">  
                              <label for="password" class=" ">&nbsp&nbsp 5) Comment avez-vous trouvé les repas?</label>
                               
                              
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
                          <div class="alert alert-info" style="ligne-height: 0.2em; height:0.5em; ">
                              <b>Perpestives</b> 
                          </div>
                          <div class="form-group " style="ligne-height: 0.2em;">
                              <label for="password" class=" ">1) Recommenderz-vous ce cours ?</label>
                               
                                  <b> <?php echo $result['51']; ?>  </b>
                                  <br>
                              
                              <label for="password" class=" ">2) Seriez-vous intéressé a vous inscrire a un autre cours ?</label>
                               
                                  <b> <?php echo $result['52']; ?>  </b>
                                  <br>   
                             
                              <label for="password" class="control-label  ">3) Si oui lequel ?</label>
                              
                                  <b> <?php echo $result['53']; ?>  </b>
                              
                              Quand?
                               
                                  <b> <?php echo $result['54']; ?>  </b>
                              
                          </div>
                          <div class="alert alert-info" style="ligne-height: 0.2em; height:0.5em; ">
                              <b>Commentaire (très important)</b> 
                          </div>
                          <div class="form-group ">
                              <label for="password" class="control-label col-lg-5">1) Qu'avez-vous le plus aimé ?</label>
                             
                                  <b> <?php echo $result['61']; ?>  </b>
                                  <br>
                              
                              <label for="password" class="control-label col-lg-5">2) Y'aurait-il des éléments à améliorer :</label>
                              
                                  <b> <?php echo $result['62']; ?>  </b>
                              
                              <br>
                              <label for="password" class="control-label col-lg-5">3) Autres commentaires :</label>
                              
                                  <b> <?php echo $result['63']; ?>  </b>
                              
                          </div>
                  
                          <div class="form-group">
                              <div class="col-lg-offset-4 col-lg-7">
                              
                              <script type="text/javascript">
                                  document.addEventListener('DOMContentLoaded', function(){
                                      window.print()
                                  })

                            </script>
                          </div>    
                      </form>
                </div>
              </div>
</body>
</html>