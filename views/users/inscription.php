<?php if(!empty($_POST)){
    $controller->inscription($_POST);
}
?>

<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" id="form-signin" action="" method="POST">
    <!-- Civilité -->
    <label for="selectCivilite">Civilité</label><br/>
    <select name="selectCivilite" id="selectCivilite" class="form-control" >
        <option value="-1">Selectionnez votre civilité</option>
        <option value="Mr">Monsieur</option>
        <option value="Mme">Madame</option>
    </select>

    <!--  Nom  -->
    <label for="inputNom">Nom</label>
    <input type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom"  value="<?php if(isset($nom)) { echo $nom; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Prénom  -->
    <label for="inputPrenom">Prenom</label>
    <input type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom"  value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Date de naissance  -->
    <label for="inputDateNaissance">Date de naissance</label>
    <input type="text" name="inputDateNaissance" id="inputDateNaissance" class="form-control" placeholder="Date de naisance"  >
    <span class="error">Ce champ est obligatoire</span>

    <!--  Adresse  -->
    <label for="inputAdresse">Adresse</label>
    <input type="text" name="inputAdresse" id="inputAdresse" class="form-control" placeholder="Adresse"  value="<?php if(isset($adresse)) { echo $adresse; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Code postal  -->
    <label for="inputCodePostale">Code Postal</label>
    <input type="text" name="inputCodePostal" id="inputCodePostal" class="form-control" placeholder="CodePostal"  value="<?php if(isset($codePostal)) { echo $codePostal; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Ville  -->
    <label for="inputVille">Ville</label>
    <input type="text" name="inputVille" id="inputVille" class="form-control" placeholder="Ville"  value="<?php if(isset($ville)) { echo $ville; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Email  -->
    <label for="inputEmail">Email</label>
    <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Adresse email" value="<?php if(isset($mail)) { echo $mail; } ?>">
    <span class="error">Ce champ est obligatoire</span>

    <!--  Niveau d'étude  -->
    <label for="selectNiveauEtude">Niveau d'étude</label>
    <select name="selectNiveauEtude" id="selectNiveauEtude" class="form-control" >
        <option value="-1">Selectionnez votre niveau d'étude</option>
        <option value="1">Bac + 1</option>
        <option value="2">Bac + 2</option>
        <option value="3">Bac + 3</option>
        <option value="4">Bac + 4</option>
        <option value="5">Bac + 5</option>
    </select>
    <span class="error">Ce champ est obligatoire</span>

    <!--  Type de contrat  -->
    <label for="selectTypeContrat">Type de Contrat</label>
    <select name="selectTypeContrat" id="selectTypeContrat" class="form-control">
        <option value="-1">Selectionnez votre type de contrat</option>
        <option value="CDI">CDI</option>
        <option value="CDD">CDD</option>
        <option value="Alternance">Alternance</option>
        <option value="Stage">Stage</option>
    </select>
    <span class="error">Ce champ est obligatoire</span>

    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' id='forminscrip' value="inscription" type="submit">S'inscrire</button>
    <br/>
    <br/>
</form>
</div>


