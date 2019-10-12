<?php include"header.php"; ?>

<div id="Contacts" class="container-fluid parallax1">
    <div class="row d-flex flex-wrap align-items-center text-center no-gutters pt-3">
        <div class="col-xl-12 col-md-12 col-sm-12 mt-5 pt-5">
            <div class="container align-items-center">
                <div class="row text-center p-2">
                    <div class="col-xl-12 col-12 text-md-center mb-5">
                        <h2 class="texteBlanche">Contactez-nous</h2>
                        <hr>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-phone fa-3x rouge pb-2"></i>
                        <h3 class="texteBlanche">Téléphone</h3>
                        <p class="texteBlanche">(819) 580-8408</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-map-marker-alt fa-3x rouge pb-2"></i>
                        <h3 class="texteBlanche">Adresse</h3>
                        <p class="texteBlanche">Boul Milan, Sherbrooke(QC)</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 p-2">
                        <i class="fas fa-envelope fa-3x rouge pb-2"></i>
                        <h3 class="texteBlanche">Courriel</h3>
                        <p class="texteBlanche">pixelsprophotographie@hotmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container-fluid align-items-center text-center">
        <img src="img/jumbotron1.jpg" alt="Appareil photo" title="nikon" class="img-fluid">
    </div>
</div>

<div class="container">
    <form action="FormulaireEnvoye.php">
        <div class="form-row pt-1 my-4">
            <div class="col-xl-6 col-md-12 col-sm-12 pt-5 my-4">
                <label for="Prénom">Prénom :</label>
                <input type="text" class="form-control" id="Prénom" placeholder="Entrer votre Prénom ici">
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 pt-5 my-4">
                <label for="Nom">Nom :</label>
                <input type="text" class="form-control" id="Nom" placeholder="Entrer votre Nom ici">
            </div>
        </div>

        <label for="choix">Entrer votre choix</label>
        <select class="custom-select" id="choix">
            <option value="0">Veuillez entrer votre choix dans la liste en dessous</option>
            <option value="1">Je veux m'inscrire à la formation</option>
            <option value="2">Je souhaite avoir plus d'information</option>
            <option value="3">J'ai besoin de vos services en photographie</option>
            <option value="4">Je désire avoir une soumission</option>
        </select>

        <section class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <form>
                    <div class="form-group pt-5">
                        <label for="question">Votre message:</label>
                        <textarea id="question" class="form-control" rows="4"></textarea>
                        <small class="form-text text-muted">Vous pouvez agrandir la fenêtre</small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priorite" id="priorite" value="Urgent"
                               checked>
                        <label class="form-check-label" for="priorite">
                            Urgent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priorite" id="priorite1" value="Important">
                        <label class="form-check-label" for="priorite1">
                            Important
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="priorite" id="priorite3" value="Peu attendre">
                        <label class="form-check-label" for="priorite3">
                            Peu attendre
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-danger btn-lg" type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </form>
</div>
<br>
<div class="container">
    <div class="row align-items-center pt-3 my-3">
        <div class="col-xl-12 no-gutters">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5596.492819098016!2d-73.45715490478517!3d45.46483995296914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc90585f248ee61%3A0xa99979fcd0bd10c3!2s6765+Boul+Milan%2C+Brossard%2C+QC+J4Z+2B5!5e0!3m2!1sfr!2sca!4v1561846777990!5m2!1sfr!2sca" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12 col-sm-12 my-5 pt-5">
            <br>
            <h1 class="texteContact texte4">Pixels Pro Photographie</h1>
            <p>Sherbrooke, QC, CANADA <br> pixelsprophotographie@hotmail.com <br> (819) 580-8408 <br> Lun au Ven : 8h à 17h</p>

            <a href="Contact.php"><button type="button" class="btn btn-danger btn-lg">NOUS CONTACTER DÈS MAINTENANT</button></a>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 my-5 pt-5">
            <img src="img/ap.jpg" alt="Image camera" class="img-fluid"/>
        </div>
    </div>
</div>

<?php include"footer.php" ?>