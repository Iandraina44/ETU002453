<?php 
$listecategoriedepense=getAllCategorieDepense();

?>

<div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Depense</h3>
          
      </div>

      <div class="row">

     <div class="col-md-8 grid-margin stretch-card" style="margin-left:160px">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Depense</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample" action="frontoffice/traitdepense.php" method="get">
                      
                       <div class="form-group">
                      <label for="exampleFormControlSelect1">IdCategorie</label>
                      <select name="categorie" class="form-control form-control-sm" id="exampleFormControlSelect1">
                        <?php for ($i=0; $i <count($listecategoriedepense) ; $i++) { ?>
                          <option value="<?php echo $listecategoriedepense[$i]['idcategoriedepense'] ?>"><?php echo $listecategoriedepense[$i]['idcategoriedepense']."/".$listecategoriedepense[$i]['motif'] ?></option>
                          <?php } ?>
                      </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="exampleInputUsername1">Montant</label>
                        <input name="montant" type="number" class="form-control" id="exampleInputUsername1" name="montant" placeholder="montant">
                      </div>

                      
                    <div class="form-group">
                        <label for="exampleInputUsername1">datedepense</label>
                        <input name="datedepense" type="date" name="datedepense" class="form-control" id="exampleInputUsername1" placeholder="montant">
                      </div>

                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>


   </div>
 </div>