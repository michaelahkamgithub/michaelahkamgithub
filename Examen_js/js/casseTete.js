var premierClique = 0;
var prImgSRC;
var prImgID;
var deuxImgSRC;
var deuxImgID

$(".img-fluid").hover(function(){
    $(".img-fluid").css("cursor","pointer");
});

var Compteur = 0;

$(".img-fluid").click(function() {
    var idImg = this.id;
    var srcImg = this.src;

    if(premierClique ===1){
        $("#" + idImg).hide();
        prImgSRC = srcImg;
        prImgID = idImg;
        premierClique = 0;
    }
    else{
        deuxImgSRC = srcImg;
        deuxImgID = idImg;
        $("#" + prImgID) .attr("src", deuxImgSRC);
        $("#" + deuxImgID) .attr("src", prImgSRC);
        $("#" + prImgID) .show();
        premierClique = 1;
        prImgSRC = "";
        prImgID = "";
        deuxImgSRC = "";
        deuxImgID = "";
        Compteur = Compteur + 1;

    }
});

$("#boutonRecommencer").click(function(){
    $("#image1").attr("src", "img/image-04.jpg");
    $("#image2").attr("src", "img/image-09.jpg");
    $("#image3").attr("src", "img/image-05.jpg");
    $("#image4").attr("src", "img/image-03.jpg");
    $("#image5").attr("src", "img/image-07.jpg");
    $("#image6").attr("src", "img/image-06.jpg");
    $("#image7").attr("src", "img/image-01.jpg");
    $("#image8").attr("src", "img/image-02.jpg");
    $("#image9").attr("src", "img/image-08.jpg");
    $("#solide").hide();

});

$("#boutonTricher").click(function(){
    $("#image1").attr("src", "img/image-01.jpg");
    $("#image2").attr("src", "img/image-02.jpg");
    $("#image3").attr("src", "img/image-03.jpg");
    $("#image4").attr("src", "img/image-04.jpg");
    $("#image5").attr("src", "img/image-05.jpg");
    $("#image6").attr("src", "img/image-06.jpg");
    $("#image7").attr("src", "img/image-07.jpg");
    $("#image8").attr("src", "img/image-08.jpg");
    $("#image9").attr("src", "img/image-09.jpg");
    $("#solide").show();

});

