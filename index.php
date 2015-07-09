<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">

    <title>Palmer Motorsports - Homepage</title>
    <meta name="description" content="">
    <meta author="Christopher J. Roberts">

    <script src="assets/js/modernizr.js" type="text/javascript"></script>
     <!-- Compiled CSS -->
    <link href="assets/css/core.css" rel="stylesheet">
    <link href="assets/css/checkbox.css" rel="stylesheet">
    <link href="assets/css/scrollbar.css" rel="stylesheet">
    <!--[if gt IE 8]><!-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/palmer-sass-styles.css" rel="stylesheet">

    <style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
    <script src="assets/js/pace.min.js"></script>
</head>
<body clas="">
<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<div id="wrapper">

    <?php include('global_embeds/top-nav-white.php'); ?>
    


    <?php include('forms/search-nav-02.php'); ?>  
           

    <div class="main-container">        
        <div class="container">
            <div class="row">
                <section class="col-sm-3 page-sidebar">
                    <aside>
                        <?php include('forms/page-sidebar-categories.php'); ?>
                    </aside>
                </section>
                <section class="col-sm-9 page-content col-thin-left">
                
                    <div class="category-list">

                        <?php include('forms/category-list.php'); ?>

                        <?php include('forms/listing-filter.php'); ?>


                        <div class="adds-wrapper">

                            <div class="tab-content">
                                <div class="tab-pane active" id="allAds"> 
                                    <?php include('categories/all-ads.php'); ?>
                                </div><!--/.tab-pane #allAds-->
                                <div class="tab-pane" id="businessAds">
                                    
                                </div><!--/.tab-pane #businessAds-->
                                <div class="tab-pane" id="personalAds">
                                    
                                </div><!--/.tab-pane #personalAds-->
                            </div><!--/.tab-content-->
                            <div class="tab-box  save-search-bar text-center"> 
                                <a href=""><i class="ion-ios-heart size-15"> </i> Save Search </a> 
                            </div>

                        </div><!--/.adds-wrapper-->
                    </div><!-- /.category-list -->


                    <div class="pagination-bar text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"> ...</a></li>
                            <li><a class="pagination-btn" href="#">Next »</a></li>
                        </ul>
                    </div><!-- End pagination -->

                                         
                    <div class="post-promo text-center">
                        <h2> Do you have something to sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.php" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                        <br/>
                    </div>



                </section><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-container-->





    <?php include('global_embeds/footer.php'); ?>



</div><!-- #wrapper -->

        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
     
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.matchHeight-min.js"></script>
    <script src="assets/js/hideMaxListItem.js"></script>
    <script src="assets/js/jquery.fs.scroller.js"></script>
    <script src="assets/js/jquery.fs.selecter.js"></script>

    <script src="assets/js/form-validation.js"></script>
    <script src="assets/js/jquery.scrollto.js"></script>

    <script src="assets/js/script.js" type="text/javascript"></script>


<script type="text/javascript">
    $("select").on("change", function() {
    var value = $(this).val();
});
</script>



    <script src="assets/js/google-analytics.js" type="text/javascript"></script>
</body>
</html>