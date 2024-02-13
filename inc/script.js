 function sendDataCueillette() {
        var xhr;
        try {
            xhr = new XMLHttpRequest();
        } catch (e) {
            xhr = false;
        }

        var form = document.getElementById("formss");

        xhr.addEventListener("load", function (event) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response === "success") {
                    window.alert("Cueillette inserer");
                    window.location.href = "template.php?page=frontoffice/cueillette";
                } else {
                   window.alert("Cueillette non inserer(Excees de quantite)");
                   window.location.href = "template.php?page=cueillette";
                }
            } else {
                window.alert("Something went wrong!");
            }
        });

        xhr.open("GET", "frontoffice/traitcueillette.php?poids=" + document.getElementById("poids").value + "&&idcueilleur=" + document.getElementById("Cueilleur").value + "&&idparcelle=" + document.getElementById("idparcelle").value + "&&datecueillette=" + document.getElementById("datecueillette").value);
        xhr.send();
    }