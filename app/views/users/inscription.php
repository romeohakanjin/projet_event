<?php if(!empty($_POST)){
    $controller->inscription($_POST);
}
?>

<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" name="form-signin" id="form-signin" action="index.php?p=confirm_insert" method="POST">

    <!-- Civilité -->
    <br/>
    <label for="selectCivilite">Civilité *</label><br/>
    <select name="selectCivilite" id="selectCivilite" class="form-control" >
        <option value="">Selectionnez votre civilité</option>
        <option value="Mr">Monsieur</option>
        <option value="Mme">Madame</option>
    </select>

    <!--  Nom  -->
    <br/>
    <label for="inputNom">Nom *</label>
    <input type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom"  value="<?php if(isset($nom)) { echo $nom; } ?>">

    <!--  Prénom  -->
    <br/>
    <label for="inputPrenom">Prenom *</label>
    <input type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom"  value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <!--  Date de naissance  -->
    <br/>
    <label for="inputDateNaissance">Date de naissance *</label>
    <input type="text" name="inputDateNaissance" id="inputDateNaissance" class="form-control" placeholder="Date de naissance"  >

    <!--  Adresse  -->
    <br/>
    <label for="inputAdresse">Adresse *</label>
    <input type="text" name="inputAdresse" id="inputAdresse" class="form-control" placeholder="Adresse"  value="<?php if(isset($adresse)) { echo $adresse; } ?>">

    <!--  Code postal  -->
    <br/>
    <label for="inputCodePostale">Code Postal *</label>
    <input type="text" name="inputCodePostal" id="inputCodePostal" class="form-control" placeholder="CodePostal"  value="<?php if(isset($codePostal)) { echo $codePostal; } ?>">
    
    <!--  Ville  -->
    <br/>
    <label for="inputVille">Ville *</label>
    <input type="text" name="inputVille" id="inputVille" class="form-control" placeholder="Ville"  value="<?php if(isset($ville)) { echo $ville; } ?>">
    
    <!--  Email  -->
    <br/>
    <label for="inputEmail">Email *</label>
    <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Adresse email" value="<?php if(isset($mail)) { echo $mail; } ?>">

    <!--  Niveau d'étude  -->
    <br/>
    <label for="selectNiveauEtude">Niveau d'étude *</label>
    <select name="selectNiveauEtude" id="selectNiveauEtude" class="form-control" >
        <option value="">Selectionnez votre niveau d'étude</option>
        <option value="1">Bac + 1</option>
        <option value="2">Bac + 2</option>
        <option value="3">Bac + 3</option>
        <option value="4">Bac + 4</option>
        <option value="5">Bac + 5</option>
    </select>

    <!--  Type de contrat  -->

    <br/>
    <label for="selectTypeContrat">Type de Contrat *</label>
    <select name="selectTypeContrat" id="selectTypeContrat" class="form-control">
        <option value="">Selectionnez votre type de contrat</option>
        <option value="CDI">CDI</option>
        <option value="CDD">CDD</option>
        <option value="Alternance">Alternance</option>
        <option value="Stage">Stage</option>
    </select>

    <br/>
    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' id='forminscrip' value="inscription" type="submit">S'inscrire</button>
    <br/>
    <br/>
</form>
</div>


