<!DOCTYPE html>
 <script src="../inc/script.js"></script>
 
     <div class="content-wrapper">
      <div class="page-header">

              <h3 class="page-title"> Prevision</h3>
          
      </div>

      <div class="row">

     <div class="col-md-10 grid-margin stretch-card" style="margin-left: 100px;">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Prevision</h3>
                    <p class="card-description">formulaire</p>

                    <form class="forms-sample">
                      

                    
                    <div class="form-group">
                        <label for="exampleInputUsername1">Date</label>
                       <input type="date" class="form-control" id="date">
                          
                          <p id="poids total"></p>
                          <p id="montant"></p>
                       
                      </div>

                      <button type="submit" id="button1" onclick="  getPrevision();"   class="btn btn-gradient-secondary btn-rounded btn-fw me-2">Valider</button>
                    
                     
                    </form>


                  </div>
                </div>

     </div>
     <script type="text/javascript">
        var bouton=document.getElementById("button1");
  bouton.addEventListener("click", function (event) {
            event.preventDefault();
           getPrevision();
        });
     </script>

         <div class="corps"></div>


  
</div>
   </div>
 
