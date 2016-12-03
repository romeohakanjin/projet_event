<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Job Dating">
  <meta name="author" content="RH-SL">
  <link rel="icon" href="../../favicon.ico">

  <title>Job Dating</title>
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../public/js/inscription.js"></script>

</head>

<body>
  <header>
    <div class="flexslider col-xs-offset-1 col-md-offset-2">
      <img src="../public/images/push_your_career.jpg" />
    </div>
  </header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="accroche navbar-brand" href="index.php?p=home">Push Your Career</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?p=partner">Nos partenaires</a></li>
          <li><a href="index.php?p=sign-in">Inscription</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <aside>
    <div class="calendar">
      <h3>La date à retenir</h3>
      <script src="../public/js/calendar.js"></script>
    </div>
  </aside>
  <section>
    <div class="container">
      <div class="starter-template" style="padding-top: 100px">
        <?php print $content; ?>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="row">
      <div class="col-xs-9 col-xs-offset-3  col-sm-6 col-md-4 col-md-offset-1">
        <h1>Coordonées</h1>
        <div class="row info">
          <i class="fa fa-map-marker" aria-hidden="true"></i> 10 rue Sextius Michel - 75015 Paris<br />
          <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@jobdating.fr"> info@jobdating.fr<br /></a>
          <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0123568745"> 0123568745<br /></a>
          <i class="fa fa-subway" aria-hidden="true"></i> ligne 6 : arrêt Bir-hakeim ou RER C : arrêt Champs de mars<br />
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