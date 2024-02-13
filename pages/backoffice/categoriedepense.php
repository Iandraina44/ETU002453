<?php 
$listcategoriedepense=getAllCategorieDepense();
?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Categorie depense </h3>
          
      </div>

      <div class="row">

     <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Categorie depense</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample" method="get" action="backoffice/traitcategoriedepense.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Motif</label>
                        <input name="motif" type="text" class="form-control" id="exampleInputUsername1" placeholder="variete" name=" variete">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                    </form>

                  </div>
                </div>

     </div>


                   <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Les varietes de thé</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id Categorie depense</th>
                          <th>motif</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i=0; $i < count($listcategoriedepense) ; $i++) {  ?>
                        <tr>
                          <td><?php echo $listcategoriedepense[$i]['idcategoriedepense'] ?></td>
                          <td><?php echo $listcategoriedepense[$i]['motif'] ?></td>
                        </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>