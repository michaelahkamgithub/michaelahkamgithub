<?php include"header.php"; ?>

<div id="Contacts" class="container-fluid parallax3">
    <div class="row d-flex flex-wrap align-items-center text-center no-gutters pt-3">
        <div class="col-xl-12 col-md-12 col-sm-12 mt-5 mb-5 pt-5">
            <div class="container align-items-center">
                <div class="row text-center p-2">
                    <div class="col-xl-12 col-12 text-md-center mb-5">
                        <h2 class="texteBlanche">Nos Services</h2>
                        <hr>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-rocket fa-5x rouge pb-2"></i>
                        <h3 class="texteBlanche">Photographie</h3>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-calendar-alt fa-5x rouge pb-2"></i>
                        <h3 class="texteBlanche">Montage photo/vidéo</h3>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-university fa-5x rouge pb-2"></i>
                        <h3 class="texteBlanche">Formation</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container-fluid align-items-center text-center">
        <img src="img/jumbotron.jpg" alt="Appareil photo" title="nikon" class="img-fluid">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12 col-sm-12 my-5 pt-5">
            <br>
            <h1>Photographie</h1>
            <p>Une célébration de mariage? remise de diplôme? Photo magazine? <br> Vous avez un projet? Pourquoi attendre!</p>
            <ul>
                <li>Caméraman</li>
                <li>Shooting</li>
                <li>Photographie événementielle</li>
                <li>Montage photo / vidéo</li>
                <li>Photo publicitaire</li>
                <li>Formation</li>
                <li>Et bien plus encore...</li>
            </ul>
            <a href="Contact.php"><button type="button" class="btn btn-danger btn-lg">NOUS CONTACTER DÈS MAINTENANT</button></a>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 my-5 pt-5">
            <img src="img/camera.jpg" alt="Image camera" class="img-fluid"/>
        </div>
    </div>
</div>

<br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="img/studio1.jpg" alt="studio1">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="img/studio2.jpg" alt="studio2">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="img/studio3.jpg" alt="studio3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<?php include"footer.php" ?>