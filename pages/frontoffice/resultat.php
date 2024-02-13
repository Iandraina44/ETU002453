<?php

$poidstotal=0;
if (isset($_GET['poidstotal'])) {
    $poidstotal=$_GET['poidstotal'];
}
else{
    $poidstotal=poids_total_parcelle();
}


$poidsrestant=0;
if (isset($_GET['poidsrestant'])) {
    $poidsrestant=$_GET['poidsrestant'];
}


$prixrevient=0;
if (isset($_GET['prixrevient'])) {
    $prixrevient=$_GET['prixrevient'];
}


$depenses=0;
if (isset($_GET['depenses'])) {
    $depenses=$_GET['depenses'];
}

$ventes=0;
if (isset($_GET['ventes'])) {
    $ventes=$_GET['ventes'];
}



$benefices=0;
if (isset($_GET['benefices'])) {
    $benefices=$_GET['benefices'];
}


?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Resultat</h3>
          
      </div>

      <div class="row">

     <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Resultat</h3>
                    <p class="card-description">formulaire de recherche saississez deux dates pour avoir des resultats</p>

                    <form class="forms-sample" action="frontoffice/traitresultat.php" method="get">
                      

                    
                    <div class="form-group" >
                        <label for="exampleInputUsername1">Entre</label>
                        <input name="min" type="date" class="form-control" id="exampleInputUsername1">
                       
                      </div>

                       <div class="form-group">
                       
                        <label for="exampleInputUsername1">Et</label>
                         <input name="max" type="date" class="form-control" id="exampleInputUsername1">
                      </div>

                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>

<div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-secondary card-img-holder text-white">
                  <div class="card-body">
                    
                    <p class="font-weight-normal mb-3">Poids total cueillette 
                      <i class="mdi mdi-weight mdi-24px float-right"></i>
                   
                   <br> <strong class="mb-5"><?php echo $poidstotal ?></strong> </p>

                    <p class="font-weight-normal mb-3">Montant des ventes  <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                   
                     <br><strong   class="mb-5"><?php echo $ventes ?></strong>  </p>

                    <p class="font-weight-normal mb-3">Montant des depenses  <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                   
                     <br><strong   class="mb-5"><?php echo $depenses ?></strong>  </p>
                    <p class="font-weight-normal mb-3">Benefice  <i class="mdi mdi-coin mdi-24px float-right"></i>
                   
                     <br> <strong   class="mb-5"><?php echo $benefices ?></strong>  </p>
                   
                   <p class="font-weight-normal mb-3">Poids restant sur les parcelles <i class="mdi mdi-weight mdi-24px float-right"></i>
                   
                    <br><strong   class="mb-5"><?php echo $poidsrestant ?> kg</strong>  </p>

                    <p class="font-weight-normal mb-3">Cout de revient  <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                   
                    <br> <strong   class="mb-5"><?php echo $prixrevient ?> $/kg</strong> </p>
                   
                     
                  </div>
                </div>
              </div>
      </div>
  
</div>
   </div>
 </div>