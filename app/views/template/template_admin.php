<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home | Corlate</title>

  <!-- core CSS -->
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../public/css/font-awesome.min.css" rel="stylesheet">
  <link href="../public/css/animate.min.css" rel="stylesheet">
  <link href="../public/css/prettyPhoto.css" rel="stylesheet">
  <link href="../public/css/main.css" rel="stylesheet">
  <link href="../public/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="../public/js/html5shiv.js"></script>
  <script src="../public/js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../public/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../public/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../public/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../public/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../public/images/ico/apple-touch-icon-57-precomposed.png">
  <!-- JQuery Validator -->
  <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="../public/js/inscription.js"></script>
</head><!--/head-->

<body class="homepage">

<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-4">
          <div class="top-number"><a href="tel:+3316745901254" class="top-number"><i class="fa fa-phone-square"></i> +3316745901254 </a></div>
        </div>
        <div class="col-sm-6 col-xs-8">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!--/.container-->
  </div><!--/.top-bar-->

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
            <li><a href="admin.php?p=logout">Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="starter-template" style="padding-top: 100px">
        <?php print $content; ?>
      </div>
    </div><!-- /.container -->
  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer><!--/#footer-->

  <script src="../public/js/jquery.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/jquery.prettyPhoto.js"></script>
  <script src="../public/js/jquery.isotope.min.js"></script>
  <script src="../public/js/main.js"></script>
  <script src="../public/js/wow.min.js"></script>
</body>
</html>