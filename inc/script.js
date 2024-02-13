 function sendDataCueillette() {
        var xhr;
        try {
            xhr = new XMLHttpRequest();
        } catch (e) {
            xhr = false;
        }

<<<<<<< Updated upstream
        var form = document.getElementById("formss");
=======
        var form = document.getElementById("formCueillette");
>>>>>>> Stashed changes

        xhr.addEventListener("load", function (event) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response === "success") {
                    window.alert("Cueillette inserer");
<<<<<<< Updated upstream
                    window.location.href = "template.php?page=frontoffice/cueillette";
                } else {
                   window.alert("Cueillette non inserer(Excees de quantite)");
                   window.location.href = "template.php?page=cueillette";
=======
                } else {
                   window.alert("Poids superieur aux poids restants");
>>>>>>> Stashed changes
                }
            } else {
                window.alert("Something went wrong!");
            }
        });

<<<<<<< Updated upstream
        xhr.open("GET", "frontoffice/traitcueillette.php?poids=" + document.getElementById("poids").value + "&&idcueilleur=" + document.getElementById("Cueilleur").value + "&&idparcelle=" + document.getElementById("idparcelle").value + "&&datecueillette=" + document.getElementById("datecueillette").value);
=======
        xhr.open("GET", "traitcueillette.php?poids=" + document.getElementById("poids").value + "&&idcueilleur=" + document.getElementById("Cueilleur").value + "&&idparcelle=" + document.getElementById("idparcelle").value + "&&datecueillette=" + document.getElementById("datecueillette").value);
        xhr.send();
    }

     function getPrevision() {
        var xhr;
        try {
            xhr = new XMLHttpRequest();
        } catch (e) {
            xhr = false;
        }

        
        xhr.addEventListener("load", function (event) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                var montant=document.getElementById("montant");
                var poids=document.getElementById("poids total");
                montant.innerHTML="montant :" +response[0];
                poids.innerHTML="poids total thé restant:" +response[1];

var corpsDiv = document.querySelector('.corps');
corpsDiv.innerHTML="";

var colDiv = document.createElement("div");
colDiv.className = "col-4 grid-margin stretch-card";
var cardDiv = document.createElement("div");
cardDiv.className = "card";

var cardBodyDiv = document.createElement("div");
cardBodyDiv.className = "card-body";
var h4Title = document.createElement("h4");
h4Title.className = "card-title";
h4Title.textContent = "Parcelle n1";

var flexDiv = document.createElement("div");
flexDiv.className = "d-flex mt-5 align-items-top";

var flexItemDiv = document.createElement("div");
flexItemDiv.className = "d-flex align-items-center me-4 text-muted font-weight-light";

var iElement = document.createElement("i");
iElement.className = "mdi mdi-account-outline icon-sm me-2";

var spanElement = document.createElement("span");
spanElement.textContent = "88ha";


var flexGrowDiv = document.createElement("div");
flexGrowDiv.className = "mb-0 flex-grow";

var h5Element = document.createElement("h5");
h5Element.textContent = "THE SAHAMBAVY";


var pElement1 = document.createElement("p");
pElement1.className = "mb-0 font-weight-light";
pElement1.textContent = "Nombre de pied: 22";

var pElement2 = document.createElement("p");
pElement2.className = "mb-0 font-weight-light";
pElement2.textContent = "poids thé restant: 22";

var msAutoDiv = document.createElement("div");
msAutoDiv.className = "ms-auto";


var buttonElement = document.createElement("button");
buttonElement.type = "button";
buttonElement.className = "btn btn-outline-secondary btn-rounded btn-icon";
var iButtonElement = document.createElement("i");
iButtonElement.className = "mdi mdi-leaf text-success";
buttonElement.appendChild(iButtonElement);


flexItemDiv.appendChild(iElement);
flexItemDiv.appendChild(spanElement);
flexGrowDiv.appendChild(h5Element);
flexGrowDiv.appendChild(pElement1);
flexGrowDiv.appendChild(pElement2);
flexDiv.appendChild(flexItemDiv);
flexDiv.appendChild(flexGrowDiv);
msAutoDiv.appendChild(buttonElement);
cardBodyDiv.appendChild(h4Title);
cardBodyDiv.appendChild(flexDiv);
cardBodyDiv.appendChild(msAutoDiv);
cardDiv.appendChild(cardBodyDiv);
colDiv.appendChild(cardDiv);

corpsDiv.appendChild(colDiv);


               
               
            } else {
                window.alert("Something went wrong!");
            }
        });

        xhr.open("GET", "traitprevision.php?date=" + document.getElementById("date").value);
>>>>>>> Stashed changes
        xhr.send();
    }