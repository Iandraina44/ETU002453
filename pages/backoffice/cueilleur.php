<?php 
    
    $listcueilleur=getAllCueilleur();

?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title">Cueilleur</h3>
          
      </div>

      <div class="row">

     <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Cueilleur</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample" method="get" action="backoffice/traitcueilleur.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Nom</label>
                        <input name="nom" type="text" class="form-control" id="exampleInputUsername1" placeholder="nom" name=" variete">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Date de naissance</label>
                        <input name="datenaissance" type="date" class="form-control" id="exampleInputUsername1" placeholder=" " name="  occupation">
                      </div>

                       <div class="form-group">
                      <label for="exampleFormControlSelect1">Genre</label>
                      <select name="sexe" class="form-control form-control-sm" id="exampleFormControlSelect1">
                        <option value="F">femme</option>
                        <option value="H">homme</option>
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
                    <h3 class="card-title">LISTE CUEILLEURS</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Idcueilleur</th>
                          <th>Nom</th>
                          <th>Genre</th>
                          <th>date de naissance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  for ($i=0; $i < count($listcueilleur) ; $i++) { ?>
                        <tr>
                          <td><?php echo $listcueilleur[$i]['idcueilleur'] ?></td>
                          <td><?php echo $listcueilleur[$i]['nom'] ?></td>
                          <td ><?php echo $listcueilleur[$i]['genre'] ?></td>
                          <td><?php echo $listcueilleur[$i]['datenaissance'] ?></td>
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>