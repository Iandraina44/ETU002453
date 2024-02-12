
     <div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Variete </h3>
          
      </div>

      <div class="row">

     <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Variete de the</h3>
                    <p class="card-description">formulaire d'insertion</p>

                    <form class="forms-sample" method="get" action="backoffice/traitvariete.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> Variete</label>
                        <input name="nomvariete" type="text" class="form-control" id="exampleInputUsername1" placeholder="variete" name=" variete">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">  Occupation</label>
                        <input name="occupation" type="number" class="form-control" id="exampleInputUsername1" placeholder=" occupation" name="  occupation">
                      </div>

                       <div class="form-group">
                        <label for="exampleInputUsername1"> Rendement</label>
                        <input name="rendement" type="number" class="form-control" id="exampleInputUsername1" placeholder=" rendement" name="  rendement">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                     
                    </form>


                  </div>
                </div>

     </div>


                   <div class="col-lg-7  grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Les varietes de thé</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>IdUser</th>
                          <th>Variete</th>
                          <th>Occupation</th>
                          <th>Rendement</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                          <td>Pending</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </div>
 </div>
