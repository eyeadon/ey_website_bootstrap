<?php
    $parentDirectory = '';
    require_once('head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Web Apps</title>

<?php
  require_once('head2_link.php');
  require_once('header_and_nav.php');
?>
  
<body>

<!-- Main Content -->
<div class="container">
    
    <h1>Web Apps</h1>
    
    <div class="row rowPadding">
        <div class="col-md-6">
          <a href="web_apps/whatcha_bringing.php"><img src="web_apps/whatcha-bringing-home.png" class="img-responsive img-rounded imageBorder" alt="event web form"></a>
          <h3>Whatcha Bringing</h3>
          <p><a class="btn btn-default" href="web_apps/whatcha_bringing.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <a href="web_apps/game_hub.php"><img src="web_apps/game-hub-home.png" class="img-responsive img-rounded imageBorder" alt="game search app"></a>
          <h3>Game Hub</h3>
          <p><a class="btn btn-default" href="web_apps/game_hub.php" role="button">View &raquo;</a></p>
        </div>
      </div>

    </div> <!-- /container -->
<!-- End Main Content -->

<?php
  require_once('footer.php');
  require_once('bootstrap_core_javascript.php');
?>

  </body>
</html>

