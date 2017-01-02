<section id="contact-info">
    <div class="center">
        <h2>Venez nous rencontrez</h2>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgxd6SBtw5kcRCY0Qu5lWSZQ&key=AIzaSyD_8p21DtwPsA1dZOPIXDdV51yPGv32mog""></iframe>
                    </div>
                </div>
                <div class="col-sm-7 map-content">
                    <address>
                        <h5>ECE Tech</h5>
                        <p>10 rue Sextius Michel <br> 75015 Paris, France</p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Ligne 6 : arrêt Bir-hakeim ou RER C : arrêt Champs de mars<br />
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Campus à proximité de la tour eiffel<br />
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2><i class="fa fa-handshake-o" aria-hidden="true"></i>Contactez-nous</h2>
            <p class="lead">Vous avez une question? <br> Nous sommes là pour y répondre</p>
        </div>
        <div class="row contact-wrap">
            <!--<div class="alert alert-success">
                <strong>Success!</strong> Votre message a été envoyé, il sera pris en compte dans un délais de 24h.
            </div>
            <div class="alert alert-danger">
                <strong>Danger!</strong> Impossible d'envoyer le mail. Réessayer ultérieurement.
            </div>-->
            <form id="contact" class="contact-form" name="contact-form" method="post" action="index.php?p=send_mail">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" tabindex="1" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" tabindex="2" required="required">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="objet">Sujet *</label>
                        <input type="text" id="objet" name="objet" class="form-control" placeholder="Le sujet de votre message" tabindex="3" required="required">
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Votre message" tabindex="4" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="envoi" class="btn btn-primary btn-lg">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>