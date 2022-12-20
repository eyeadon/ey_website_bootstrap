<?php
  $upOutOfFolder = '../';

  require_once('../head.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>UMass Amherst</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Web Development</a></li>
  	      <li class="active">UMass Amherst</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-umass" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-umass" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-umass" data-slide-to="1"></li>
    <li data-target="#carousel-umass" data-slide-to="2"></li>
    <li data-target="#carousel-umass" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="umass-newsletter1.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="umass-newsletter2.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="umass-tweet-blitz.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="umass-about-page.png" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-umass" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-umass" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>Dept. of Psychological and Brain Sciences<br />Website Administration</h2>
          <h3>Products: Newsletter Microsites, Page Layouts and Views, Content Updates</h3>
          <h3>Role: Web Designer/Developer</h3>
          <p><a class="btn btn-primary" href="https://www.pbs.umass.edu/about/newsletters/spring-2022-newsletter" role="button" target="_blank">View Website &raquo;</a></p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="wmcc.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

