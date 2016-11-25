<?php if(!empty($_POST)){
    $membre->inscription($_POST);
}
?>

<h2>Inscription</h2>
<br />
<div class="container">
  <form class="form-signin" action="" method="POST">
    <label for="inputCivilite">Civilité</label><br/>
    <label><input type="checkbox" id="Checkbox" value="Mr"> Mr</label>
    <input type="checkbox" id="Checkbox" value="Mme"> <label for="cbox2">Mme</label><br/>

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
    <select name="niveau_etude" id="niveau_etude" class="form-control">
        <option value="1">Bac + 1</option>
        <option value="2">Bac + 2</option>
        <option value="3">Bac + 3</option>
        <option value="4">Bac + 4</option>
        <option value="5">Bac + 5</option>
    </select>
    <br />

    <!--  Type de contrat  -->
      <label for="inputTypeContrat">Type de Contrat</label>
    <select name="type_contrat" id="type_contrat" class="form-control">
        <option value="CDI">CDI</option>
        <option value="CDD">CDD</option>
        <option value="Freelance">Freelance</option>
        <option value="Alternance">Alternance</option>
        <option value="Stage">Stage</option>
    </select>
    <br />
    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' value="inscription" type="submit">S'inscrire</button>
    <br/>
    <br/>
  </form>
</div>


