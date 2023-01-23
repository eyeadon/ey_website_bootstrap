<?php
  $upOutOfFolder = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | New England Roller Derby</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>New England Roller Derby</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Web Development</a></li>
  	      <li class="active">New England Roller Derby</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-derby" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-derby" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-derby" data-slide-to="1"></li>
    <li data-target="#carousel-derby" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="derby1.png" alt="webpage layout with photo of roller derby skaters racing">
    </div>
    <div class="item">
      <img class="imageBorder" src="derby2.png" alt="webpage layout with illustration of skater and various protective equipment">
    </div>
    <div class="item">
      <img class="imageBorder" src="derby3.png" alt="webpage layout with illustration of skater and various protective equipment">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-derby" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-derby" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>University of Massachusetts, Introduction to DHTML Class Project</h2>
          <h3>Products: HTML/CSS Website</h3>
          <h3>Role: Web Designer/Developer</h3>
          <p><a class="btn btn-primary" href="roller_derby/index.html" role="button" target="_blank">View Website &raquo;</a></p>
		  <p>Objective: Teach visitors of your web site about a personal hobby or interest. Include original graphics and photos. Use HTML and CSS for page layout, type styles and navigation.</p> 
		  <p>I created New England Roller Derby to inform visitors about the history, game play and equipment of roller derby. It includes photos from a New England area bout and a schedule of future bouts. Links are provided for more information about rules, organizations and equipment.</p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="hiphop.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

