<?php
$listcueilleur=getAllCueilleur();

$listconf=selectallRemuneration();

?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Configuration </h3>
          
      </div>

      <div class="row">

     <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Configuration</h3>
                    <p class="card-description">formulaire de configuration</p>

                    <form class="forms-sample" method="get" action="backoffice/traitconfiguration.php">

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">IdCueilleur</label>
                      <select name="idcueilleur" class="form-control form-control-sm" id="exampleFormControlSelect1">
                        <?php for ($i=0; $i < count($listcueilleur) ; $i++) { ?>
                        <option value="<?php echo $listcueilleur[$i]['idcueilleur'] ?>"> <?php echo $listcueilleur[$i]['idcueilleur'] ?></option>
                      <?php  } ?>
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Poids minimal journalier</label>
                        <input name="pmin" type="number" class="form-control" id="exampleInputUsername1" placeholder="poids" name=" poids">
                      </div>

                       <div class="form-group">
                        <label for="exampleInputUsername1">bonus</label>
                        <input name="bonus" type="number" class="form-control" id="exampleInputUsername1" placeholder="bonus" name=" bonus">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">malus</label>
                        <input name="malus" type="number" class="form-control" id="exampleInputUsername1" placeholder="mallus" name=" mallus">
                      </div>

                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Confirmer</button>
                     
                    </form>


                  </div>
                        

                </div>

     </div>


                   <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Configuration effectuée</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>IdCueilleur</th>
                          <th>Poids min/j</th>
                          <th>Bonus</th>
                          <th>Mallus</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i=0; $i < count($listconf) ; $i++) {  ?>
                        <tr>
                          <td><?php echo $listconf[$i]['idceuilleur'] ?></td>
                          <td><?php echo $listconf[$i]['poidminimum'] ?></td>
                          <td> <?php echo $listconf[$i]['bonus'] ?></td>
                        <td><?php echo $listconf[$i]['malus'] ?></td>
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>