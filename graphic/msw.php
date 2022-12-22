<?php
  $upOutOfFolder = '../';

  require_once('../head.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>McGriff, Seibels & Williams, Inc.</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../graphic.php">Graphic Design</a></li>
  	      <li class="active">MSW</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-msw" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-msw" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-msw" data-slide-to="1"></li>
    <li data-target="#carousel-msw" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="msw_brochure1.png" alt="brochure with globe showing USA">
    </div>
    <div class="item">
      <img class="imageBorder" src="msw_brochure2.png" alt="brochure with text quotes and image of handshaking">
    </div>
    <div class="item">
      <img class="imageBorder" src="msw_brochure3.png" alt="brochure with text bullet points and image of key">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-msw" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-msw" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-8 col-md-offset-2">
    		  <h2>MSW Marketing Materials</h2>
          <h3>Product: Brochure</h3>
          <h3>Role: Graphic Designer</h3>
          <p>Objective: Expand the brand identity of McGriff, Seibels & Williams, Inc. Define the final version of the MSW logo. Convey the core values and mission statement of MSW by creating a marketing brochure. Describe the services they offer with elegant design and clever photography.</p>
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="tb.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="bw.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

