<?php
  $parentDirectory = '';
  require_once('head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Illustration</title>

<?php
  require_once('head2_link.php');
  require_once('header_and_nav.php');
?>

<body>

<!-- Main Content -->
<div class="container">
      <h1>Illustration</h1>
      <div class="row rowPadding">
        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8" style="text-align:center;">
          <a href="illustration/djgirl.png" class="fancybox" rel="group">
          <img src="illustration/dj_thumb1.jpg" class="img-thumbnail" alt="female DJ with turntables">
          </a>
          <a href="illustration/teamdj.gif" class="fancybox" rel="group">
          <img src="illustration/dj_thumb2.jpg" class="img-thumbnail" alt="simple outline logo of DJ">
          </a>
          <a href="illustration/jungle.gif" class="fancybox" rel="group">
          <img src="illustration/dj_thumb3.jpg" class="img-thumbnail" alt="jungle scene with bird and growing trees, vector illustration">
          </a>
          <a href="illustration/djcolor.jpg" class="fancybox" rel="group">
          <img src="illustration/dj_thumb4.jpg" class="img-thumbnail" alt="DJ in nightclub scene">
          </a>
          <a href="illustration/drummers.png" class="fancybox" rel="group">
          <img src="illustration/vector_thumb1.jpg" class="img-thumbnail" alt="three snare drummers play on football field">
          </a>
          <a href="illustration/work_life.jpg" class="fancybox" rel="group">
          <img src="illustration/vector_thumb2.jpg" class="img-thumbnail" alt="man juggles icons of home, money, briefcase">
          </a>
          <a href="illustration/excercise.jpg" class="fancybox" rel="group">
          <img src="illustration/vector_thumb3.jpg" class="img-thumbnail" alt="man runs past tree">
          </a>
          <a href="illustration/flower1.png" class="fancybox" rel="group">
          <img src="illustration/flower_thumb1.jpg" class="img-thumbnail" alt="vector illustration of spring flowers">
          </a>
          <a href="illustration/flower2.gif" class="fancybox" rel="group">
          <img src="illustration/flower_thumb2.jpg" class="img-thumbnail" alt="flower from a beach garden">
          </a>
          <a href="illustration/flower3.gif" class="fancybox" rel="group">
          <img src="illustration/flower_thumb3.jpg" class="img-thumbnail" alt="flower that looks like a sun with rays">
          </a>
          <a href="illustration/spacial.png" class="fancybox" rel="group">
          <img src="illustration/spacial_thumb1.jpg" class="img-thumbnail" alt="geometric rectangles moving into vanishing point">
          </a>
          <a href="illustration/squares_b.png" class="fancybox" rel="group">
          <img src="illustration/squares_thumb1.jpg" class="img-thumbnail" alt="geometric composition">
          </a>
        </div>
      </div>
    </div> <!-- /container -->
<!-- End Main Content -->

<?php
  require_once('footer.php');
  require_once('bootstrap_core_javascript.php');
?>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

  </body>
</html>

