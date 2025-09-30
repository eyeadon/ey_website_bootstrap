<?php
  $parentDirectory = '../';

  require_once('../head1_meta.php');
?>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Evan Yeadon">
    <title>Evan Yeadon | Issue Tracker</title>

<?php
  require_once('../head2_link.php');
  require_once('../header_and_nav.php');
?>

<body>
  <!-- Main Content -->
  <div class="container">
    <div class="pull-left">
      <h1>Issue Tracker</h1>
    </div>
    <div class="pull-right">
      <ol class="breadcrumb">
        <li><a href="../web_apps.php">Web Apps</a></li>
        <li class="active">Issue Tracker</li>
      </ol>
    </div>
  </div>

  <div class="container">
    <div
      id="carousel-issue-tracker"
      class="carousel slide carousel-fade"
      data-ride="carousel"
      data-interval="false"
      data-keyboard="true"
    >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-issue-tracker" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-issue-tracker" data-slide-to="1"></li>
        <li data-target="#carousel-issue-tracker" data-slide-to="2"></li>
        <li data-target="#carousel-issue-tracker" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img
            class="imageBorder"
            src="issue-tracker-screen1-900.png"
            alt="graphs showing amount of open bugs / issues"
          />
        </div>
        <div class="item">
          <img
            class="imageBorder"
            src="issue-tracker-screen2-900.png"
            alt="list of open bugs / issues"
          />
        </div>
        <div class="item">
          <img
            class="imageBorder"
            src="issue-tracker-screen3-900.png"
            alt="editing an issue with WYSIWYG editor"
          />
        </div>
        <div class="item">
          <img
            class="imageBorder"
            src="issue-tracker-screen4-900.png"
            alt="assigning an issue"
          />
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-issue-tracker" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-issue-tracker" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- /container -->

  <div class="container">
    <div class="row bottomPadding">
      <div class="col-md-8 col-md-offset-2">
        <h2>Full Stack Web App with Database</h2>
        <h3>
          Technologies: Next.js, React, Tailwind CSS, Prisma, Responsive Design, Online
          Hosted Database
        </h3>
        <h3>Role: Web Designer/Developer</h3>
        <p>
          <a
            class="btn btn-primary"
            href="https://issue-tracker-tau-two.vercel.app"
            role="button"
            target="_blank"
            >View App &raquo;</a
          >
        </p>
        <p>
          An app designed to track bugs/issues in a web development project. This app could be adapted for many other uses including project management. The homepage dashboard displays stats of Open, In Progress, and Closed issues and the latest entries. Issue lists with pagination can be filtered by status. Create, edit, and delete issues as well as assign issues to valid users stored in the database. Authenticated user log in.
        </p>
      </div>
    </div>
  </div>
  <!-- /container -->

  <nav aria-label="" class="bottomPadding">
    <ul class="pager">
        <li><a href="game_hub.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="weather_app.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>

    </ul>
  </nav>
  <!-- End Main Content -->
</body>


<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

