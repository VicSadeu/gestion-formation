<?php
 
  //var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>SEC<span>EL</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
           
            
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
         
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="deconnection.php">Deconnection</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a><img src="img/vvz.png" class="img-circle fa-user-md" width="80"></a></p>
          <h5 class="centered">
            <?php
              if($_SESSION['role'] == 'formateur' || $_SESSION['role'] == 'Responsable'){
                echo $_SESSION['pseudo_user'];            
              }
              else{
                echo $_SESSION['pseudo_part'];
              }

            ?>
           </h5>
          
          <li class="sub-menu">
            <a href="accueil2.php">
              <i class="fa fa-desktop"></i>
              <span>Accueil</span>
              </a>
        
          </li>
          <?php if(isset($_SESSION['id_part']) && $_SESSION['role']=="participant"){ ?>
          <li class="sub-menu">
            <a href="mes_formations.php">
              <i class="fa fa-tasks"></i>
              <span>Mes formations</span>
              </a>
        
          </li>
          <?php } ?>
          
          <?php if(isset($_SESSION['id_user']) && $_SESSION['role']=="Formateur" || $_SESSION['role']=="Responsable" ){ ?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Formation</span>
              </a>
            <ul class="sub">
              <li><a href="ajoutfor.php">Ajouter une formation</a></li>
              <li><a href="listformation.php">Liste formations</a></li>
              <li><a href="liste_evaluations.php">Liste evaluations</a></li>
              <li><a href="stat.php">Statistiques</a></li>
            
            
            </ul>
          </li>
          <?php } ?>

          <?php if(isset($_SESSION['id_user']) && $_SESSION['role']=="Responsable"){ ?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Administration</span>
              </a>
              <li class="sub-menu">
                <a href="javascript">
                <i class="fa fa-th"> </i>
                <span>evaluation </span>
                </a>
              </li>
            <ul class="sub">
              <li><a href="ajout_pers.php">Ajoutez un personnel</a></li>
              <li><a href="liste_pers.php">Liste personnels</a></li>
              <li><a href="liste_part.php">Liste participants</a></li>
            </ul>
          </li>
          <?php } ?>
          <?php if(isset($_SESSION['id_user']) && $_SESSION['role']=="formateur" || $_SESSION['role']=="Responsable" ){ ?>
          
         
          <?php } ?>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    
    <!--footer end-->
  </section>
</body>

</html>
