<?php 

    $listcueilleur=getAllCueilleur();
    $listsalaire=getAllSalaire();

?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Salaire </h3>
          
      </div>

      <div class="row">

     <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"> Salaire </h3>
                    <p class="card-description">formulaire d'insertion Salaire</p>

                    <form class="forms-sample" method="get" action="backoffice/traitsalaire.php">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">id ceuilleur</label>
                            <select name="idcueilleur" class="form-control form-control-sm" id="exampleFormControlSelect1">
                              <?php for ($i=0; $i < count($listcueilleur) ; $i++) {  ?>
                                <option value="<?php echo $listcueilleur[$i]['idcueilleur'] ?>" ><?php echo $listcueilleur[$i]['idcueilleur']."/".$listcueilleur[$i]['nom'] ?></option>
                                <?php } ?>
                            </select>
                          </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1"> montant </label>
                        <input name="montant" type="number" class="form-control" id="exampleInputUsername1" placeholder=" occupation" name="  occupation">
                      </div>
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>

                  </div>
                </div>

     </div>


                   <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Les varietes de thé</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Idsalaire</th>
                          <th>ceuilleur</th>
                          <th>montant</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i=0; $i <count($listsalaire) ; $i++) {  ?>
                        <tr>
                          <td><?php echo $listsalaire[$i]['idsalaire'] ?></td>
                          <td><?php echo $listsalaire[$i]['idceuilleur'] ?></td>
                          <td><?php echo $listsalaire[$i]['montant'] ?></td>
                        </tr>
                            <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>