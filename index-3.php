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
    <link href="assets/css/core.css" rel="stylesheet">
    
    <style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
    <script src="assets/js/pace.min.js"></script>
</head>
<body clas="">
<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;"><div class="pace-progress-inner"></div></div><div class="pace-activity"></div></div>

<div id="wrapper">

    <?php include('global_embeds/top-nav-white.php'); ?>
    <?php include('forms/search-nav-02.php'); ?>  

    <div class="main-container">   


        <div class="container">
            <div class="row">
                <!-- uncomment code for absolute positioning tweek see top comment in css -->
                <!--<div class="absolute-wrapper"></div> -->
                <!-- Menu -->
                <div class="side-menu">
                
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="brand-wrapper">
                                <!-- Hamburger -->
                                <button type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Brand -->
                                <div class="brand-name-wrapper">
                                    <a class="navbar-brand" href="#">
                                        Brand
                                    </a>
                                </div>

                                <!-- Search -->
                                <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>

                                <!-- Search body -->
                                <div id="search" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form class="navbar-form" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                                        </form>
                                    </div>
                                </div><!--/.search-->
                            </div><!--/.brand-wrapper-->
                        </div><!--/.navbar-header-->

                        <!-- Main Menu -->
                        <div class="side-menu-container">
                            <ul class="nav navbar-nav">

                                <li><a href="#"><span class="glyphicon glyphicon-send"></span> Link</a></li>
                                <li class="active"><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li>

                                <!-- Dropdown-->
                                <li class="panel panel-default" id="dropdown">
                                    <a data-toggle="collapse" href="#dropdown-lvl1">
                                        <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                                    </a>

                                    <!-- Dropdown level 1 -->
                                    <div id="dropdown-lvl1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>

                                                <!-- Dropdown level 2 -->
                                                <li class="panel panel-default" id="dropdown">
                                                    <a data-toggle="collapse" href="#dropdown-lvl2">
                                                        <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                                    </a>
                                                    <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul class="nav navbar-nav">
                                                                <li><a href="#">Link</a></li>
                                                                <li><a href="#">Link</a></li>
                                                                <li><a href="#">Link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
                            </ul>
                        </div><!-- /.main-menu -->
                    </nav>
                </div><!-- /.container -->

                <div class="container-fluid"><!-- main container -->
                    <div class="side-body">
                       <h1> Main Content here </h1>
                       <pre> Resize the screen to view the left slide menu </pre>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div><!--/.side-body-->
                </div><!--/.container-fluid-->


            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-container-->
</div><!--/.wrapper-->






    
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
$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});
</script>

<script src="assets/js/google-analytics.js" type="text/javascript"></script>
</body>
</html>