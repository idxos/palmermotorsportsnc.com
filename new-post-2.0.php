<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
<title>Palmer Motorsports - Categories</title>
<?php include('global_embeds/headicons.php'); ?>
<meta author="Christopher J. Roberts">
<meta description="Palmer Motorsports Your #1 Source for Motor Cycles, Dirt Bikes, UtVs, ATVs, SeaDoos, and Huskavarna Lawn and Garden Equipment and repair.">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>

    <script src="assets/js/fileinput.min.js" type="text/javascript"></script>
    <script src="assets/js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="assets/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

    <link href="assets/css/checkbox.css" rel="stylesheet">
    <link href="assets/css/scrollbar.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/animation.css" rel="stylesheet">
    
    <link href="assets/css/palmer-sass-styles.css" rel="stylesheet">


<style>

</style>
</head>
<body>
<div id="wrapper">

    <?php include('global_embeds/top-nav-white.php'); ?>
    
    <div class="search-row-wrapper">
        <div class="container">
            <div class="row">
                <?php include('forms/page-topbar-search.php'); ?>
            </div>
        </div>
    </div>

    <div class="main-container">        
        <div class="container">
            <div class="row">
                <section class="col-md-3 page-sidebar">
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
                                    <?php include('categories/business-ads.php'); ?>
                                </div><!--/.tab-pane #businessAds-->
                                <div class="tab-pane" id="personalAds">
                                    <?php include('categories/personal-ads.php'); ?>
                                </div><!--/.tab-pane #personalAds-->
                            </div><!--/.tab-content-->
                            <div class="tab-box  save-search-bar text-center"> 
                                <a href=""> <i class=" icon-star-empty"></i> Save Search </a> 
                            </div>
                        </div><!--/.adds-wrapper-->
                    </div><!-- End of inner-box -->

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
                    </div>
                                         
                    <div class="post-promo text-center">
                        <h2> Do you get anything for sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.php" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                    </div>



                </section><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-container-->





    <?php include('global_embeds/footer.php'); ?>



</div><!-- #wrapper -->
<?php include('categories/modal-select-region.php'); ?>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
<script src="assets/js/hideMaxListItem.js"></script>
<script src="assets/js/jquery.fs.scroller.js"></script>
<script src="assets/js/jquery.fs.selecter.js"></script>

<script src="assets/js/form-validation.js"></script>
<script src="assets/js/jquery.scrollto.js"></script>


<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/touch.js" type="text/javascript"></script>
<script src="assets/js/checkbox.js" type="text/javascript"></script>

<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

</body>
</html>