<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" action="../controllers/index.php?action=inscription" method="POST">

    <label for="inputEmail" class="sr-only">Email</label>
    <input autocomplete="off" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?php if(isset($mail)) { echo $mail; } ?>">
    
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input autocomplete="off" type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
    
    <!--afficher une petite liste deroulante-->
    <label for="inputPrenom" class="sr-only">Civilité</label>
    <input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <label for="inputNom" class="sr-only">Nom</label>
    <input autocomplete="off" type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom" required value="<?php if(isset($nom)) { echo $nom; } ?>">
    
    <label for="inputPrenom" class="sr-only">Prenom</label>
    <input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    
    <!--mettre un datepicker-->
    <label for="inputDateNaissance" class="sr-only">Date de naissance</label>
    <input autocomplete="off" type="text" name="inputDateNaissance" id="inputDateNaissance" class="form-control" placeholder="Date de naisance" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <label for="inputAdresse" class="sr-only">Adresse</label>
    <input autocomplete="off" type="text" name="inputAdresse" id="inputAdresse" class="form-control" placeholder="Adresse" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <label for="inputCodePostale" class="sr-only">Code Postale</label>
    <input autocomplete="off" type="text" name="inputCodePostale" id="inputCodePostale" class="form-control" placeholder="CodePostale" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <label for="inputVille" class="sr-only">Ville</label>
    <input autocomplete="off" type="text" name="inputVille" id="inputVille" class="form-control" placeholder="Ville" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <!--afficher avec liste déroulante-->
    <label for="inputNiveauEtude" class="sr-only">Niveau d'étude</label>
    <input autocomplete="off" type="text" name="inputNiveauEtude" id="inputNiveauEtude" class="form-control" placeholder="Niveau d'étude" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <!--afficher avec list deroulante-->
    <label for="inputTypeContrat" class="sr-only">Type de Contrat</label>
    <input autocomplete="off" type="text" name="inputTypeContrat" id="inputTypeContrat" class="form-control" placeholder="Type de contrat" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <!-- <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <br />
    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' value="inscription" type="submit">S'inscrire</button>
    <br/>
    <br/>
  </form>
</div>


