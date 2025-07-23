<?php
  $upOutOfFolder = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Game Hub</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

    <!-- Main Content -->
    <div class="container">
          <div class="pull-left">
            <h1>Game Hub</h1>
          </div>
          <div class="pull-right">
            <ol class="breadcrumb">
              <li><a href="../web_apps.php">Web Apps</a></li>
              <li class="active">Game Hub</li>
            </ol>
          </div>
        </div> 

        <div class="container">
          <div class="row bottomPadding">
            <div class="col-md-8 col-md-offset-2">
            <a href="https://game-hub-evan-yeadons-projects.vercel.app" target="_blank"><img class="img-responsive center-block imageBorder" src="game-hub-screen-900.png" alt="game search app"></a>
            </div>
          </div>
          <div class="row bottomPadding">
            <div class="col-md-8 col-md-offset-2">
            <h2>React Web App</h2>
              <h3>Technologies: React, Chakra UI, Responsive Design</h3>
              <h3>Role: Web Designer/Developer</h3>
              <p><a class="btn btn-primary" href="https://game-hub-evan-yeadons-projects.vercel.app" role="button" target="_blank">View App &raquo;</a></p>
              <p>This app allows users to search for and find information about video games from the RAWG database. It fetches data from the RAWG API and allows users to search and sort games using a variety of filters. The app features Chakra UI and React for the front end. Additional game description pages were added using React Router. Axios handles fetch requests and React Query and Zustand play roles in state management.</p>
            </div>
          </div>
        </div> <!-- /container -->
        
        <nav aria-label="" class="bottomPadding">
          <ul class="pager">
            <li><a href="whatcha_bringing.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
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

