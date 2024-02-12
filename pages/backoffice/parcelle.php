<?php
$listthe=getAllThe();
$listparcelle=getAllParcelle();
?>
<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Parcelle </h3>
          
      </div>

      <div class="row">

     <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Parcelle</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample"  method="get" action="backoffice/traitparcelle.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Surface</label>
                        <input name="surface" type="number" class="form-control" id="exampleInputUsername1" placeholder="surface" name=" surface">
                      </div>

                       <div class="form-group">
                      <label for="exampleFormControlSelect1">Variete</label>
                      <select name="variete" class="form-control form-control-sm" id="exampleFormControlSelect1">
                        <?php for ($i=0; $i < count($listthe) ; $i++) { ?>
                        <option value="<?php echo $listthe[$i]['idthe'] ?>"> <?php echo $listthe[$i]['variete'] ?></option>
                      <?php  } ?>
                      </select>
                    </div>

                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>


                   <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Les Parcelles existantes</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>IdParcelle</th>
                          <th>Surface</th>
                          <th>Variété</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php for ($i=0; $i <count($listparcelle) ; $i++) {  ?>
                        <tr>
                          <td><?php echo $listparcelle[$i]['idparcelle'] ?></td>
                          <td><?php echo $listparcelle[$i]['surface'] ?></td>
                          <td><?php echo $listparcelle[$i]['idthe'] ?></td>
                        </tr>
                        <?php  } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>