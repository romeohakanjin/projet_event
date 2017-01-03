<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Inscription</h2>
            <p class="lead">Afin de participer à notre évênement, merci de vous inscrire en remplissant les champs ci-dessous</p>
        </div> 
        <div class="row contact-wrap">
            <form class="form-signin" name="form-signin" id="form-signin" action="index.php?p=confirm_insert" method="POST">

                <!-- Civilité -->
                <br/>
                <label for="signin-Civilite">Civilité *</label><br/>
                <select name="Civilite" id="signin-Civilite" class="form-control" >
                    <option value="">Selectionnez votre civilité</option>
                    <option value="Mr">Monsieur</option>
                    <option value="Mme">Madame</option>
                </select>
                <label id="error"></label>

                <!--  Nom  -->
                <br/>
                <label for="signin-Nom">Nom *</label>
                <input type="text" name="Nom" id="signin-Nom" class="form-control" placeholder="Votre nom"  value="<?php if(isset($nom)) { echo $nom; } ?>">
                <label id="error"></label>

                <!--  Prénom  -->
                <br/>
                <label for="signin-Prenom">Prenom *</label>
                <input type="text" name="Prenom" id="signin-Prenom" class="form-control" placeholder="Votre prénom"  value="<?php if(isset($prenom)) { echo $prenom; } ?>">
                <label id="error"></label>

                <!--  Date de naissance  -->
                <br/>
                <label for="signin-DateNaissance">Date de naissance *</label>
                <input type="text" name="DateNaissance" id="signin-DateNaissance" class="form-control" placeholder="Votre date de naissance au format AAAA/MM/JJ">
                <label id="error"></label>

                <!--  Adresse  -->
                <br/>
                <label for="signin-Adresse">Adresse *</label>
                <input type="text" name="Adresse" id="signin-Adresse" class="form-control" placeholder="Le numéro de voie, nom de rue"  value="<?php if(isset($adresse)) { echo $adresse; } ?>">
                <label id="error"></label>

                <!--  Code postal  -->
                <br/>
                <label for="signin-CodePostale">Code Postal *</label>
                <input type="text" name="CodePostal" id="signin-CodePostal" class="form-control" placeholder="Votre Code Postal"  value="<?php if(isset($codePostal)) { echo $codePostal; } ?>">
                <label id="error"></label>
                <!--  Ville  -->
                <br/>
                <label for="signin-Ville">Ville *</label>
                <input type="text" name="Ville" id="signin-Ville" class="form-control" placeholder="Votre ville"  value="<?php if(isset($ville)) { echo $ville; } ?>">
                <label id="error"></label>

                <!--  Email  -->
                <br/>
                <label for="signin-Email">Email *</label>
                <input type="email" name="Email" id="signin-Email" class="form-control" placeholder="Votre adresse email" value="<?php if(isset($mail)) { echo $mail; } ?>">
                <label id="error"></label>

                <!--  Niveau d'étude  -->
                <br/>
                <label for="signin-NiveauEtude">Niveau d'étude *</label>
                <select name="NiveauEtude" id="signin-NiveauEtude" class="form-control" >
                    <option value="">Selectionnez votre niveau d'étude</option>
                    <option value="1">Bac + 1</option>
                    <option value="2">Bac + 2</option>
                    <option value="3">Bac + 3</option>
                    <option value="4">Bac + 4</option>
                    <option value="5">Bac + 5</option>
                </select>
                <label id="error"></label>

                <!--  Type de contrat  -->
                <br/>
                <label for="signin-TypeContrat">Type de Contrat *</label>
                <select name="TypeContrat" id="signin-TypeContrat" class="form-control">
                    <option value="">Selectionnez votre type de contrat</option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="Alternance">Alternance</option>
                    <option value="Stage">Stage</option>
                </select>
                <label id="error"></label>

                <div id="signin-submit">
                <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' id='signin-submit' type="submit">S'inscrire</button>
                </div>
                <br/>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->