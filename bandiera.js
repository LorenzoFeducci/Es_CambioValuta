
function cambioBandiera(){
    var scelta = document.getElementById("bandiera").value;
    var immagine = document.getElementById("nazione");
    if(scelta == "Dollaro"){
        immagine.src = "america.gif";
    } else if(scelta == "Yen"){
        immagine.src = "japan.gif";
    } else if(scelta == "Franchi svizzeri"){
        immagine.src = "svizzera.gif";
    } else {
        immagine.src = "UK.gif";
    }
}