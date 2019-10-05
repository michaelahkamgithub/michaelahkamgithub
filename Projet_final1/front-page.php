<?php get_header(); ?>
<div class="container-fluid">
    <div class="row align-items-center text-center no-gutters mt-5">
        <div class="col-xl-12 col-md-12 col-12">

        </div>
    </div>
    <div class="row align-items-center text-center  no-gutters">
        <div class="col-xl-12 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/titreBienetre.jpg" alt="À propos" class="img-fluid"/>
        </div>
    </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="wp-content/themes/projetFinal/img/Relaxation.jpg" alt="Relaxation">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="wp-content/themes/projetFinal/img/Relaxation1.jpg" alt="Relaxation1">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="wp-content/themes/projetFinal/img/Relaxation%202.jpg" alt="Relaxation2">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<div class="container-fluid">
    <div class="row align-items-center text-center no-gutters">
        <div class="col-xl-4 d-md-none d-lg-block d-none d-sm-block pt-4 bandeNoir">
            <h2 class="texteDore font tailleTexte wow slideInLeft" data-wow-duration="3s" data-wow-delay=".4s">Lun au Ven : 8h à 17h <br> Sam et Dim : Fermé</h2>
        </div>
        <div class="col-xl-4 d-md-none d-lg-block d-none d-sm-block pt-4 bandeNoir">
            <h2 class="texteDore font tailleTexte wow bounceIn" data-wow-duration="3s" data-wow-delay="4s">(819) 775-3551<br>info@moleculesenaction.ca</h2>
        </div>
        <div class="col-xl-4 d-md-none d-lg-block d-none d-sm-block pt-4 bandeNoir">
            <h2 class="texteDore font tailleTexte wow slideInRight" data-wow-duration="3s" data-wow-delay="2s">Sylvie Massé Massothérapeute<br>34 rue St-Dominique<br>GATINEAU (Secteur Hull), QC, J9A 1A2</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center text-center no-gutters pt-3">
        <div class="col-xl-12 col-md-12 col-12">
            <h1 class="font1 texteService">NOS SERVICES</h1>
        </div>
    </div>
    <div class="row align-items-center text-center  no-gutters pt-3 mb-3">
        <div class="col-xl-4 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/Massage.jpg" alt="Massage femme" class="img-fluid"/>
            <h1 class="pt-3 texteMassageReflex font1">Massage et réflexologie</h1>
        </div>
        <div class="col-xl-4 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/Femme_enceinte.jpg" alt="Femme enceinte" class="img-fluid"/>
            <h1 class="pt-3 texteMassageFemmeEnceinte font1">Massage femme enceinte</h1>
        </div>
        <div class="col-xl-4 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/Massage_enfant.jpg" alt="Massage enfant" class="img-fluid"/>
            <h1 class="pt-3 texteMassageEnfant font1">Massage enfant 5 ans et plus</h1>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container-fluid align-items-center text-center">
        <img src="wp-content/themes/projetFinal/img/bannière.jpg" alt="méditation" title="méditation" class="img-fluid">
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center text-center no-gutters mb-5">
        <div class="col-xl-6 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/etude.jpg" alt="formation" class="img-fluid"/>
            <h2 class="pt-3 mb-3 texteInscription font1">Apprenez à faire un bon massage</h2>
            <h3 class="mb-3 texteReserveSeance font tailleTexte">Réservez votre séance de formation dès maintenant!</h3>
            <button type="button" class="btn btn-danger btn-lg mb-3">Je m'inscris</button>
        </div>
        <div class="col-xl-6 col-md-12 col-12">
            <img src="wp-content/themes/projetFinal/img/time.jpg" alt="Rendez-vous" class="img-fluid"/>
            <h2 class="pt-3 mb-3 texteInscription font1">Le bien-être avant tout?</h2>
            <h3 class="mb-3 texteReserveSeance font tailleTexte">Prenez votre rendez-vous dès maintenant!</h3>
            <a class="btn btn-danger btn-lg mb-3" href="Tarifs.html">Rendez-vous</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>