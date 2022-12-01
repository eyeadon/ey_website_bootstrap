<?php
  $upOutOfFolder = '../';

  require_once('../head.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Web Development</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Web Development</a></li>
  	      <li class="active">American Hip Hop Dance</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-hiphop" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-hiphop" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-hiphop" data-slide-to="1"></li>
    <li data-target="#carousel-hiphop" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="hiphop1.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="hiphop2.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="hiphop3.png" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-hiphop" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-hiphop" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>American Hip Hop Dance</h2>
          <p><a class="btn btn-primary" href="hiphop_dance/turf1.html" role="button" target="_blank">View Website &raquo;</a></p>
          <h4>University of Massachusetts, JavaScript Class Project</h4>
          <p>Role: Web Design and Development</p>
		  <p>Objective: Research a subject of interest and build an educational web site. Incorporate JQuery functionality for a drop-down navigation bar, image gallery and contact form. Include original graphics and photos.</p>
		  <p>I researched three derivative styles of Hip Hop dance. Turf from Oakland, CA, Krump and Jerk from Los Angeles, CA. Each dance is performed with aspects of visual storytelling, optical illusions and personal style. Several dance moves are illustrated in animated image galleries.</p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="parentlab.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="derby.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

