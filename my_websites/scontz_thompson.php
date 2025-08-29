<?php
  $parentDirectory = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Scontz Thompson Music</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Scontz Thompson Music</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Websites</a></li>
  	      <li class="active">Scontz Thompson Music</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-scontz" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-scontz" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-scontz" data-slide-to="1"></li>
    <li data-target="#carousel-scontz" data-slide-to="2"></li>
    <li data-target="#carousel-scontz" data-slide-to="3"></li>
    <li data-target="#carousel-scontz" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="scontz1.png" alt="webpage layout with grid of paintings and photos of people and animals">
    </div>
    <div class="item">
      <img class="imageBorderWhite" src="scontz2.png" alt="webpage layout showing fantasy paintings and music preview buttons">
    </div>
    <div class="item">
      <img class="imageBorderWhite" src="scontz5.png" alt="webpage layout showing fantasy paintings and music preview buttons">
    </div>
    <div class="item">
      <img class="imageBorder" src="scontz3.png" alt="webpage layout with video of bell ringing, portrait of guitar player">
    </div>
    <div class="item">
      <img class="imageBorder" src="scontz4.png" alt="photo gallery with many images of nature scenes and animals">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-scontz" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-scontz" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>Website Design and Build</h2>
          <h3>Products: Responsive WordPress Website, WooCommerce Store</h3>
          <h3>Role: Web Designer/Developer</h3>
          <p><a class="btn btn-primary" href="https://scontzthompsonmusic.com" role="button" target="_blank">View Website &raquo;</a></p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="cyclepottery.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="asme.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

