<?php
  $parentDirectory = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | CyclePottery</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>CyclePottery</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../my_websites.php">Websites</a></li>
  	      <li class="active">CyclePottery</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-cyclepottery" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-cyclepottery" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-cyclepottery" data-slide-to="1"></li>
    <li data-target="#carousel-cyclepottery" data-slide-to="2"></li>
    <li data-target="#carousel-cyclepottery" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="cp1.png" alt="webpage layout with slideshow of kids making pottery">
    </div>
    <div class="item">
      <img class="imageBorder" src="cp2.png" alt="webpage layout showing photos of pottery studio and equipment">
    </div>
    <div class="item">
      <img class="imageBorder" src="cp3.png" alt="bio page, photo of owner Kathryn Roszko">
    </div>
    <div class="item">
      <img class="imageBorder" src="cp4.png" alt="shop page showing various mugs and plates">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-cyclepottery" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-cyclepottery" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>Website Redesign and Build</h2>
          <h3>Products: Responsive WordPress Website, WooCommerce Store</h3>
          <h3>Role: Web Designer/Developer</h3>
          <p>Completed redesigned WordPress website in conjunction with Midnightson Designs. Collaborated with CyclePottery to produce content for their site. Created page layouts, photo galleries and Woocommerce shop. Enhanced the brand image of CyclePottery by staging specific photo shoots. Provided instruction to the client on creating blog posts and uploading photos. Improved functionality and fixed problem issues during construction of redesign.</p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="wmcc.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="scontz_thompson.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

