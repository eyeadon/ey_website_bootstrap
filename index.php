<?php
    $parentDirectory = '';
    require_once('head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Web Development, Graphic Design, Illustration</title>

<?php
  require_once('head2_link.php');
  require_once('header_and_nav.php');
?>

<body>

<!-- Main Content -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container topPaddingHome">
        <p>Welcome to Evan Yeadon's online portfolio</p>
      </div>
    </div> 
    
    
    <div class="container topMargin">
      <div class="m-1">
        <a href="https://github.com/eyeadon" target="_blank"><img src="images/github-logo-40.png" class="float-left" alt="github cat logo"></a> <a href="https://github.com/eyeadon" target="_blank">My GitHub</a>
      </div>
      <div class="row rowPadding">
      <div class="col-md-4">
          <a href="web_apps.php"><img src="web_apps/whatcha-bringing-home.png" class="img-responsive img-rounded imageBorder" alt="web event form"></a>
          <h2>Web Apps</h2>
          <p><a class="btn btn-default" href="web_apps.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <a href="my_websites.php"><img src="my_websites/umass_home.png" class="img-responsive img-rounded imageBorder" alt="website layout"></a>
          <h2>Websites</h2>
          <p><a class="btn btn-default" href="my_websites.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <a href="graphic.php"><img src="graphic/zhone_home.png" class="img-responsive img-rounded imageBorder" alt="brochure with line drawing graphics"></a>
          <h2>Graphic Design</h2>
          <p><a class="btn btn-default" href="graphic.php" role="button">View &raquo;</a></p>
        </div>
      </div>
      
      <div class="row rowPadding">
      <div class="col-md-4">
          <a href="illustration.php"><img src="illustration/squares_b.png" class="img-responsive img-rounded imageBorder" alt="geometric composition"></a>
          <h2>Illustration</h2>
          <p><a class="btn btn-default" href="illustration.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
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

