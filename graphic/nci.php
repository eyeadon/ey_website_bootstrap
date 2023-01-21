<?php
  $upOutOfFolder = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | </title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Nevada Cancer Institute</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../graphic.php">Graphic Design</a></li>
  	      <li class="active">NCI</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-nci" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-nci" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-nci" data-slide-to="1"></li>
    <li data-target="#carousel-nci" data-slide-to="2"></li>
    <li data-target="#carousel-nci" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="nci_brochure1.png" alt="brochure cover showing doctors and nurses smiling, sunflower images">
    </div>
    <div class="item">
      <img class="imageBorder" src="nci_brochure2.png" alt="brochure showing employees at trade show booth and sunflowers">
    </div>
    <div class="item">
      <img class="imageBorder" src="nci_brochure3.png" alt="brochure interior with nurse smiling">
    </div>
    <div class="item">
      <img class="imageBorder" src="nci_brochure4.png" alt="table of employee benefit options">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-nci" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-nci" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-6">
    		  <h2>Employee Benefits Communications</h2>
          <h3>Products: Employee Benefits Guide, Benefits Stationary, and Highlights Pamphlet</h3>
          <h3>Role: Graphic Designer</h3>
          <p>Objective: Collect graphic elements from past communications and build a complete identity for the Nevada Cancer Institute Benefits Department. Use sunflower images and uplifting color scheme. Select dynamic employee photos and add to the Employee Benefits Guide. Increase employee benefits enrollment, health program participation, and overall healthcare education.</p>
        </div>
        <div class="col-md-6">
        <img src="nci_letter.jpg" class="img-responsive topPadding" alt="letterhead and pamphlet using sunflower image">
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="sonic.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="tb.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

