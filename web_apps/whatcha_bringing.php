<?php
  $upOutOfFolder = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Whatcha Bringing</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Whatcha Bringing</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Web Apps</a></li>
  	      <li class="active">Whatcha Bringing</li>
        </ol>
      </div>
    </div> 

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
        <a href="https://whatcha-bringing.onrender.com/" target="_blank"><img class="img-responsive bottomPadding center-block imageBorder" src="whatcha-bringing-screen-900.png" alt="event web form"></a>
        </div>
      </div>
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
        <h2>React Web App with Database</h2>
          <h3>Products: MongoDB/Express/React/Node (MERN), Responsive Design, Online Hosted Database</h3>
          <h3>Role: Web Designer/Developer</h3>
          <p><a class="btn btn-primary" href="https://whatcha-bringing.onrender.com/" role="button" target="_blank">View App &raquo;</a></p>
          <p>I created this app to help people organize who is bringing what to a party. An event host can create an event, and guests add dishes or beverages they will be bringing in a variety of categories. Users can view dish/beverage displays with sorting by category. I included date/time integration with selection menus in the event creation form as well as the capability for users to edit/delete items they own. Log in for the full experience!</p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <!-- <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="#"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="#">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav> -->
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

