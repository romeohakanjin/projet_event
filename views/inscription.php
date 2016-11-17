<h2>Inscription</h2>
<div class="container">
  <form class="form-signin" action="controllers/MembreC.php" method="POST">

    <label for="inputEmail" class="sr-only">Email address</label>
    <input autocomplete="off" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?php if(isset($mail)) { echo $mail; } ?>">
    
    <label for="inputPassword" class="sr-only">Password</label>
    <input autocomplete="off" type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="off">
    
    <label for="inputNom" class="sr-only">Nom</label>
    <input autocomplete="off" type="text" name="inputNom" id="inputNom" class="form-control" placeholder="Nom" required value="<?php if(isset($nom)) { echo $nom; } ?>">
    
    <label for="inputPrenom" class="sr-only">Prenom</label>
    <input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control" placeholder="Prénom" required value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <button class="btn btn-lg btn-primary btn-bloick" name='forminscrip' value="inscription" type="submit">S'inscrire</button>
  
  </form>
</div> <!-- /container -->


