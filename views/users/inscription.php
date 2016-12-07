<?php if(!empty($_POST)){
    $controller->inscription($_POST);
}
?>

<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" action="" method="POST" name="form-inscription">
    <!-- Civilité -->
    <label for="civilite">Civilité</label><br/>
    <select name="civilite" id="civilite" class="form-control" >
        <option value="-1">Sélectionnez votre civilité</option>
        <option value="Mr">Monsieur</option>
        <option value="Mme">Madame</option>
    </select>

    <!--  Nom  -->
    <label for="inputNom">Nom</label>
    <input autocomplete="off" type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom"  value="<?php if(isset($nom)) { echo $nom; } ?>">
    </span class="info"></span>

    <!--  Prénom  -->
    <label for="inputPrenom">Prenom</label>
    <input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom"  value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    </span class="info"></span>

    <!--  Date de naissance  -->
    <label for="inputDateNaissance">Date de naissance</label>
    <input autocomplete="off" type="text" name="inputDateNaissance" id="inputDateNaissance" class="form-control" placeholder="Date de naisance"  >
    </span class="info"></span>

    <!--  Adresse  -->
    <label for="inputAdresse">Adresse</label>
    <input autocomplete="off" type="text" name="inputAdresse" id="inputAdresse" class="form-control" placeholder="Adresse"  value="<?php if(isset($adresse)) { echo $adresse; } ?>">
    </span class="info"></span>

    <!--  Code postale  -->
    <label for="inputCodePostale">Code Postale</label>
    <input autocomplete="off" type="text" name="inputCodePostale" id="inputCodePostale" class="form-control" placeholder="CodePostale"  value="<?php if(isset($codePostale)) { echo $codePostale; } ?>">
    </span class="info"></span>

    <!--  Ville  -->
    <label for="inputVille">Ville</label>
    <input autocomplete="off" type="text" name="inputVille" id="inputVille" class="form-control" placeholder="Ville"  value="<?php if(isset($ville)) { echo $ville; } ?>">
    </span class="info"></span>

    <!--  Email  -->
    <label for="inputEmail">Email</label>
    <input autocomplete="off" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Adresse email" value="<?php if(isset($mail)) { echo $mail; } ?>">
    </span class="info"></span>

    <!--  Niveau d'étude  -->
    <label for="niveau_etude">Niveau d'étude</label>
    <select name="niveau_etude" id="niveau_etude" class="form-control" >
        <option value="-1">Sélectionnez un niveau d'étude</option>
        <option value="1">Bac + 1</option>
        <option value="2">Bac + 2</option>
        <option value="3">Bac + 3</option>
        <option value="4">Bac + 4</option>
        <option value="5">Bac + 5</option>
    </select>
    <br />
    </span class="info"></span>

    <!--  Type de contrat  -->
    <label for="type_contrat">Type de Contrat</label>
    <select name="type_contrat" id="type_contrat" class="form-control" onchange="checkContrat(this)">
        <option value="-1">Sélectionnez un type de contrat</option>
        <option value="CDI">CDI</option>
        <option value="CDD">CDD</option>
        <option value="Alternance">Alternance</option>
        <option value="Stage">Stage</option>
    </select>
    <br />
    </span class="info"></span>

    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' id='forminscrip' value="inscription" type="submit" onClick="checkInscription(this);">S'inscrire</button>
    <br/>
    <br/>
</form>
</div>


