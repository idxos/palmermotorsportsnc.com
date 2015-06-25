<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
<title>Palmer Motorsports - Account</title>
<?php include('global_embeds/headicons.php'); ?>
<meta author="Christopher J. Roberts">
<meta description="Palmer Motorsports Your #1 Source for Motor Cycles, Dirt Bikes, UtVs, ATVs, SeaDoos, and Huskavarna Lawn and Garden Equipment and repair.">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/css/palmer-theme-styles.css" rel="stylesheet">
    <link href="assets/css/animation.css" rel="stylesheet">

 
    <script>
        paceOptions = {
          elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    
</head>
<body>
<div id="wrapper">

    <?php include('global_embeds/top-nav-white.php'); ?>


    <div class="main-container">
        <div class="container">

            <div class="row">

                <section class="col-md-3 reg-sidebar">
                    <aside>
                        <?php include('account/page-sidebar.php'); ?>
                    </aside>
                </section>
                <section class="col-md-9 page-content col-thin-right">

                    <?php include('account/page-content.php'); ?>
                    
                </section><!--/.col-->
                
            </div><!--/.row-->

            <div class="row">
                <section class="col-lg-12">
                    
                </section>
            </div>
        </div><!--/.container-->
    </div><!--/.main-container-->


    <?php include('global_embeds/bottom-info.php'); ?>
    <?php include('global_embeds/footer.php'); ?>

</div><!-- #wrapper -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/form-validation.js" type="text/javascript"></script>
<script src="assets/js/icheck.min.js" type="text/javascript"></script>
<script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/js/hideMaxListItem.js" type="text/javascript"></script>
<script src="assets/js/footable.js" type="text/javascript"></script>
<script src="assets/js/footable.filter.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    $('#addManageTable').footable().bind('footable_filtering', function (e) {
      var selected = $('.filter-status').find(':selected').text();
      if (selected && selected.length > 0) {
        e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
        e.clear = !e.filter;
      }
    });

    $('.clear-filter').click(function (e) {
      e.preventDefault();
      $('.filter-status').val('');
      $('table.demo').trigger('footable_clear_filter');
    });
   
  });
</script>
<script>
    function checkAll(bx) {
      var chkinput = document.getElementsByTagName('input');
      for(var i=0; i < chkinput.length; i++) {
        if(chkinput[i].type == 'checkbox') {
          chkinput[i].checked = bx.checked;
        }
      }
    }
</script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

</body>
</html>