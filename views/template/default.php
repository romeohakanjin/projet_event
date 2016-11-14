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

    <title>Projet Event</title>

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php?p=home">Event</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?p=connexion">Connexion</a></li>
            <li><a href="index.php?p=inscription">Inscription</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="starter-template" style="padding-top: 100px">
        <?php print $content; ?>
      </div>
    </div><!-- /.container -->
  </body>
</html>