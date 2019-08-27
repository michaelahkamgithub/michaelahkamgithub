$( "#boutonEnleverImage" ).click(function() {
    $("#flashID").hide();
});

$( "#boutonAjouterImage" ).click(function() {
    $("#flashID").show();
});

$('#flashID').css("position","relative");

var compteur = 0;

$( "#boutonGauche" ).click(function() {
    compteur = compteur - 50;
    $("#flashID").css("left",compteur);
});

$( "#boutonDroite" ).click(function() {
    compteur = compteur + 50;
    $("#flashID").css("left",compteur);
});

$( "#boutonChangerImage" ).click(function() {
    var nomImage;

    nomImage = $('#flashID').attr("src") ;

    if(nomImage === "medias/flash.jpg") {
        $('#flashID').attr("src", "medias/flash2.jpg");
    }
    else{
        $('#flashID').attr("src", "medias/flash.jpg");

    }
});

$( "#boutonAjouterTitre" ).click(function() {
    $("#texteJquery").html("FLASH JQUERY")
});

$( "#boutonAjouterAttribut" ).click(function() {
    $('#flashID').attr("alt","Photo de flash")
});

$( "#boutonVitesseSupreme" ).click(function() {
    var myVar = setInterval(disparaitreFlash, 500, );
});

function disparaitreFlash(){
    $('#flashID') .toggle();
}

