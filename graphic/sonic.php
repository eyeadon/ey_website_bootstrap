<?php
  $upOutOfFolder = '../';

  require_once('../head.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Sonic</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../graphic.php">Graphic Design</a></li>
  	      <li class="active">Sonic</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-sonic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-sonic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-sonic" data-slide-to="1"></li>
    <li data-target="#carousel-sonic" data-slide-to="2"></li>
    <li data-target="#carousel-sonic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="sonic_news1.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="sonic_news2.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="sonic_news3.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="sonic_tab1.png" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-sonic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-sonic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8">
    		  <h2>2008 Sonic Benefits Blast!</h2>
          <h3>Products: Newsletter, Tabloid Newsletter, and Envelope</h3>
          <h3>Role: Graphic Designer</h3>
          <p>Objective: Communicate benefits choices to Sonic employees in a fun and energetic way. Utilize a Sonic menu motif throughout all communications. Ensure each page is filled with Sonic's unique iconography. Increase employee benefits enrollment, health program participation, and overall healthcare education.</p>
        </div>
        <div class="col-md-4">
        <img src="sonic_env.gif" class="img-responsive topPadding" alt="sonic envelope">
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="zhone.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="nci.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

