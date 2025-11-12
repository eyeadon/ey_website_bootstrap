<?php
  $parentDirectory = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Weather and Air Quality App</title>

<?php require_once('../head2_link.php'); ?>

<body>

<?php require_once('../header_and_nav.php'); ?>

    <!-- Main Content -->
    <div class="container">
          <div class="pull-left">
            <h1>Weather and Air Quality App</h1>
          </div>
          <div class="pull-right">
            <ol class="breadcrumb">
              <li><a href="../web_apps.php">Web Apps</a></li>
              <li class="active">Weather and Air Quality App</li>
            </ol>
          </div>
        </div> 

        <div class="container">
          <div class="row bottomPadding">
            <div class="col-md-8 col-md-offset-2">
            <a href="https://weather-widget-lemon.vercel.app" target="_blank"><img class="img-responsive center-block" src="weather-app-screen.png" alt="local weather and air quality readings"></a>
            </div>
          </div>
          <div class="row bottomPadding">
            <div class="col-md-8 col-md-offset-2">
            <h2>JavaScript Web App</h2>
              <h3>Technologies: Node.js, Express, Tailwind CSS, Responsive Design</h3>
              <h3>Role: Web Designer/Developer</h3>
              <p><a class="btn btn-primary" href="https://weather-widget-lemon.vercel.app" role="button" target="_blank">View App &raquo;</a></p>
              <p>A simple app displaying local weather and air quality readings. Uses the browser's geolocation data to pass latitude and longitude through an Express API.</p>
            </div>
          </div>
        </div> <!-- /container -->
        
        <nav aria-label="" class="bottomPadding">
          <ul class="pager">
            <li><a href="issue_tracker.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
            <!-- <li><a href="#">Next Project <span aria-hidden="true">&rarr;</span></a></li> -->
          </ul>
        </nav>
    <!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

