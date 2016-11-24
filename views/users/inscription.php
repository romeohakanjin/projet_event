<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" action="../controllers/index.php?action=inscription" method="POST">

    <!--  Civilité  -->
    <label for="inputPrenom">Civilité</label>
    <select name="civilite" id="civilite" class="form-control" placeholder"Civilité" value="<?php if(isset($civilite)) { echo $civilite; } ?>" required>
      <?php foreach ($membre->getMembre() as $membre):?>
        <option value="<?php echo $membre->civilite; ?>"> <?php echo $membre->civilite; ?> </option>
      <?php endforeach; ?>
    </select>
    <br />

    <!--  Nom  -->
    <label for="inputNom">Nom</label>
    <input autocomplete="off" type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom" required value="<?php if(isset($nom)) { echo $nom; } ?>">
    
    <!--  Prénom  -->
    <label for="inputPrenom">Prenom</label>
    <input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    
    <!--  Date de naissance  -->
    <!--mettre un datepicker-->
    <label for="inputDateNaissance">Date de naissance</label>
    <input autocomplete="off" type="text" name="inputDateNaissance" id="inputDateNaissance" class="form-control" placeholder="Date de naisance" required value="<?php if(isset($date_naissance)) { echo $date_naissance; } ?>">

    <!--  Adresse  -->
    <label for="inputAdresse">Adresse</label>
    <input autocomplete="off" type="text" name="inputAdresse" id="inputAdresse" class="form-control" placeholder="Adresse" required value="<?php if(isset($adresse)) { echo $adresse; } ?>">

    <!--  Code postale  -->
    <label for="inputCodePostale">Code Postale</label>
    <input autocomplete="off" type="text" name="inputCodePostale" id="inputCodePostale" class="form-control" placeholder="CodePostale" required value="<?php if(isset($codePostale)) { echo $codePostale; } ?>">

    <!--  Ville  -->
    <label for="inputVille">Ville</label>
    <input autocomplete="off" type="text" name="inputVille" id="inputVille" class="form-control" placeholder="Ville" required value="<?php if(isset($ville)) { echo $ville; } ?>">

    <!--  Email  -->
    <label for="inputEmail">Email</label>
    <input autocomplete="off" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus value="<?php if(isset($mail)) { echo $mail; } ?>">
    
    <!--  Niveau d'étude  -->
    <label for="inputNiveauEtude">Niveau d'étude</label>
    <select name="niveau_etude" id="niveau_etude" class="form-control" placeholder="Niveau d'étude" value="<?php if(isset($niveau_etude)) { echo $niveau_etude; } ?>" required>
      <?php foreach ($membre->getMembre() as $membre): ?>
        <option value="<?php echo $membre->niveau_etude; ?>"> <?php echo $membre->niveau_etude; ?> </option>
      <?php endforeach; ?>
    </select>
    <br />

    <!--  Type de contrat  -->
    <label for="inputTypeContrat">Type de Contrat</label>
    <select name="type_contrat" id="type_contrat" class="form-control" placeholder="Type de contrat" value="<?php if(isset($type_contrat)) { echo $type_contrat; } ?>" required>
      <?php foreach ($membre->getMembre() as $membre): ?>
        <option value="<?php echo $membre->type_contrat; ?>"> <?php echo $membre->type_contrat; ?> </option>
      <?php endforeach; ?>
    </select>
    <br />
    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' value="inscription" type="submit">S'inscrire</button>
    <br/>
    <br/>
  </form>
</div>


