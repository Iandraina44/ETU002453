<?php
include ("../inc/fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Template</title>
<!--     
    <link href="../src/assets3/css/bootstrap.min.css" rel="stylesheet">
    <script src="../src/assets3/js/jquery.min.js"></script>
    <script src="../src/assets3/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../src/assets/css/style.css">
<style type="text/css">
    #bar{
      background-color: white;
    }
    #bar div h2{
      color: #A86938;
    }
    .content-wrapper{
     background-image: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url("../src/assets/images/bg1.jpg");
    background-attachment: fixed;
    background-position: center;
   background-size: cover;
    }
   td{
    color: brown;
    }
</style>
  </head>
  <body>
    <div  class="container-scroller">
      <nav id="bar" class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
        <div  class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        
        </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <h2 > <i class="mdi mdi-leaf menu-icon"></i>LEAF your life</h2>
        </div>
      </nav>


      <div class="container-fluid page-body-wrapper">

     <nav class="sidebar sidebar-offcanvas" id="sidebar" >
          <ul class="nav" style="">

            
            <li class="nav-item">
              <a class="nav-link" href="template.php?page=accueil">
                <span class="menu-title">Accueil</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
              <li class="nav-item">
              <a class="nav-link" href="template.php?page=backoffice/variete">
                <span class="menu-title">Variete de thé</span>
                <i class="mdi mdi-animation menu-icon"></i>
              </a>
            </li>


            </li>
              <li class="nav-item">
              <a class="nav-link" href="template.html">
                <span class="menu-title">Cueilleur</span>
                <i class="mdi mdi-face menu-icon"></i>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="template.html">
                <span class="menu-title">Cueillette</span>
                <i class="mdi mdi-leaf menu-icon"></i>
              </a>
            </li>


         
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Parcelle</span>
                <i class="mdi mdi-drag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Resultat</span>
                <i class="mdi mdi-message-alert menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Depense</span>
                <i class="mdi mdi-currency-eur menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">categorie de depense</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="template.php?page=backoffice/salaire">
                <span class="menu-title">configuration salariale</span>
                <i class="mdi mdi-bookmark-check menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
    

        <div class="main-panel">

        <div class="containerfluid">
          <!-- contenu -->
          <?php

          $page=$_GET['page'];
          include($page.".php");

          ?>
          <!--  -->
        </div>

          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">© 2024  | ETU002557 ETU002629 ETU002453</span>
              
            </div>
          </footer>
        </div>

    </div>

 
  </body>
</html>