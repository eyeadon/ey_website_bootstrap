<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $upOutOfFolder; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $upOutOfFolder; ?>activeState.js"></script>
<script>  
  function setFooterStyle() {
    var docHeight = $(window).height();
    var footerHeight = $('#footer').outerHeight();
    var footerTop = $('#footer').position().top + footerHeight;
    var marginTop = (docHeight - footerTop);

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', marginTop + 'px');
    } else {
        $('#footer').css('margin-top', '0');
    }
    $('#footer').removeClass('invisible');

    // console.log("docheight: " + docHeight + "\n" + "footerheight: " + footerHeight + "\n" + 
      // "footertop: " + footerTop + "\n" + "new docheight: " + $(window).height() + "\n" + "margintop: " + marginTop);
  }

  $(document).ready(function() {
    setFooterStyle();
    setInterval(setFooterStyle, 250);

    window.onresize = setFooterStyle;
  });
</script>
