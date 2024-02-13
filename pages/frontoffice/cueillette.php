
<!DOCTYPE html>
 <script src="../inc/script.js"></script>
  <?php 
    $listcueilleur=getAllCueilleur();
    $listparcelle=getAllParcelle();
    $listcueillette=getAllCueillette();
  ?>

     <div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Cueillette </h3>
          
      </div>

      <div class="row">

     <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Cueillette</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample" id="formss">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Date cueillette</label>
                        <input name="datecueillette" type="date" class="form-control" id="datecueillette" name=" surface">
                      </div>

                       <div class="form-group" >
                      <label name="idcueilleur" for="exampleFormControlSelect1">Cueilleur </label>
                      <select name="idcueilleur" class="form-control form-control-sm" id="Cueilleur">
                        <?php for ($i=0; $i < count($listcueilleur) ; $i++) {  ?>
                          <option value="<?php echo $listcueilleur[$i]['idcueilleur'] ?>"><?php echo $listcueilleur[$i]['idcueilleur']."/".$listcueilleur[$i]['nom'] ?></option>
                          <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label name="idparcelle" for="exampleFormControlSelect1">Idparcelle </label>
                      <select name="idparcelle" class="form-control form-control-sm" id="idparcelle">
                      <?php for ($i=0; $i < count($listparcelle) ; $i++) {  ?>
                          <option value="<?php echo $listparcelle[$i]['idparcelle'] ?>"><?php echo $listparcelle[$i]['idparcelle']."/".$listparcelle[$i]['surface'] ?></option>
                          <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1"> Poids</label>
                        <input name="poids" type="number" class="form-control" id="poids" name="poids" placeholder="poids">
                      </div>

                      
                      <button  type="submit"  id="button1"class="btn btn-gradient-secondary btn-rounded btn-fw me-2" >Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>

<script type="text/javascript">
  var submitButtonCueillette=document.getElementById("button1");
  submitButtonCueillette.addEventListener("click", function (event) {
            event.preventDefault();
            sendDataCueillette();
        });
</script>
                   <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Les Cueillettes</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>IdCueillette</th>
                          <th>Date cueillette</th>
                          <th>Cueilleur</th>
                          <th>Idparcelle</th>
                          <th>Poids</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i=0; $i < count($listcueillette) ; $i++) {  ?>

                        <tr>
                          <td><?php echo $listcueillette[$i]['idcueillette'] ?></td>
                          <td><?php echo $listcueillette[$i]['datecueillette'] ?></td>
                          <td> <?php echo $listcueillette[$i]['idceuilleur'] ?></td>
                          <td><?php echo $listcueillette[$i]['idparcelle'] ?></td>
                          <td> <?php echo $listcueillette[$i]['poids'] ?> </td>
                        
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>
