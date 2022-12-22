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
  	      <li><a href="../graphic.php">Graphic Design</a></li>
  	      <li class="active">UMass Amherst</li>
        </ol>
      </div>
    </div> <!-- /container -->

<div class="container">
    
  <div id="carousel-umass-graphics" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-umass-graphics" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-umass-graphics" data-slide-to="1"></li>
      <li data-target="#carousel-umass-graphics" data-slide-to="2"></li>
      <li data-target="#carousel-umass-graphics" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="imageBorder" src="umass-oh-poster.png" alt="poster, college students set up EEG cap on human subject to watch brain waves">
      </div>
      <div class="item">
        <img class="imageBorderWhite" src="umass-oh-social-post.png" alt="social media post, student with EEG cap using computer">
      </div>
      <div class="item">
        <img class="imageBorderWhite" src="umass-postcard-combo.png" alt="postcard with illustration of woman meditating and brain">
      </div>
      <div class="item">
        <img class="imageBorder" src="umass-clinical-event-flyer.png" alt="poster, outlined figures hold hands">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-umass-graphics" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-umass-graphics" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div> <!-- /container -->

<!-- Project description -->
    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h2>Dept. of Psychological and Brain Sciences Communications</h2>
          <h3>Products: Homecoming Open House Promos, Clinical Psychology Event Promos</h3>
          <h3>Role: Graphic Designer</h3>
          <p></p>
        </div>
      </div>
    </div> <!-- /container -->

<!-- Second carousel -->
    <div class="container topMargin">
    
      <div id="carousel-umass-graphics2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-umass-graphics2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-umass-graphics2" data-slide-to="1"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="imageBorder" src="umass_trifold_brochure1.png" alt="trifold brochure, social media icons, photo of man with EEG cap">
          </div>
          <div class="item">
            <img class="imageBorder" src="umass_trifold_brochure2.png" alt="trifold brochure, photos of student playing wih child, student presenting research poster">
          </div>
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-umass-graphics2" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-umass-graphics2" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
    </div> <!-- /container -->
        
<!-- Second project description -->
<div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
          <h3>Product: Department Trifold Brochure</h3>
        </div>
      </div>
    </div> <!-- /container -->

    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="zhone.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

