<?php 

$lis=selectAllPaiement();

?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title">Paiement</h3>
          
      </div>

      <div class="row">

     <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Liste de Paiement</h3>
                    <p class="card-description">formulaire de recherche</p>

                    <form class="forms-sample" method="get" action="frontoffice/traitpaiement.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Date debut</label>
                        <input name="min" type="date" class="form-control" id="exampleInputUsername1" >
                      </div>

                       <div class="form-group">
                        <label for="exampleInputUsername1">Date fin </label>
                        <input name="max" type="date" class="form-control" id="exampleInputUsername1" >
                      </div>
                   
                     
                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>


                   <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Paiement des cueilleurs </h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Date</th>
                          <th>poids</th>
                          <th>Mallus</th>
                          <th>Bonus</th>
                          <th>montant </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i=0; $i <count($lis) ; $i++) {  ?>
                        <tr>
                          <td><?php echo $lis[$i]['nom'] ?></td>
                          <td><?php echo $lis[$i]['datecueillette'] ?></td>
                          <td><?php echo $lis[$i]['poidcueilli'] ?></td>
                        <td><?php echo $lis[$i]['mallus'] ?></td>
                          <td><?php echo $lis[$i]['bonus'] ?></td>
                          <td><?php echo $lis[$i]['paiement'] ?></td>
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>