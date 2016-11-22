<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Projet Event !">
  <meta name="author" content="RH-SL">
  <link rel="icon" href="../../favicon.ico">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

  <title>Job Dating</title>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
       <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="index.php?p=home">Event</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?p=partner">Nos partenaires</a></li>
          <li><a href="index.php?p=login">Connexion</a></li>
          <li><a href="index.php?p=sign-in">Inscription</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="starter-template" style="padding-top: 100px">
    <?php print $content; ?>
    </div>
  </div>

  <footer class="footer">

    <div class="row">
      <div class="col-xs-9 col-xs-offset-3  col-sm-6 col-md-4 col-md-offset-1">
        <h1>Coordonées</h1>
        <div class="row info">
          <i class="fa fa-map-marker" aria-hidden="true"></i> Rue de truc, 11111 ville<br />
          <i class="fa fa-clock-o" aria-hidden="true"></i> Samedi : 09h00 - 13h30 et 14h30 - 19h00<br />
          <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@jobdating.fr"> info@jobdating.fr<br /></a>
          <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0123568745"> 0123568745<br /></a>
          <i class="fa fa-subway" aria-hidden="true"></i> ligne 9 : arrêt La Muette<br />
          <i class="fa fa-info-circle" aria-hidden="true"></i> Campus à proximité de la tour eiffel<br /> 
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4  col-md-offset-2">
        <h1>Contact</h1>
        <br/>
        <div class="row">
          <div class="col-xs-9 col-xs-offset-3 col-md-1 col-md-offset-0 fb-img">
            <a href="https://www.facebook.com/"><img src="../public/images/facebook.png" class="header-img" alt="facebook"/></a>
          </div>
          <div class="col-xs-9 col-xs-offset-3  col-md-1 col-md-offset-3 lkd-img">
            <a href="https://fr.linkedin.com/"><img src="../public/images/linkedin.png" class="header-img" alt="linkedin"/></a>
          </div>
          <div class="col-xs-9 col-xs-offset-3 col-md-1 col-md-offset-3 git-img">
            <a href=""><img src="../public/images/git-black.png" class="header-img" alt="git"/></a>
          </div>
        </div>
        <br/>
        <br/>
      </div>
    </div>

  </footer>
</body>
</html>