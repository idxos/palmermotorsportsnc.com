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

    <title>Palmer Motorsports</title>
    <meta name="description" content="">
    <meta author="Christopher J. Roberts">

    <script src="assets/js/modernizr.js" type="text/javascript"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/palmer-sass-styles.css" rel="stylesheet">
    
    


</head>
<body clas="">
<div id="wrapper">
<!-- ## insert top-nav.php -->
<div class="main-container">
    <div class="container">
        <div class="row">
            <section class="col-xs-12 page-content">
                <form>
                    <div class="inner-box category-content">
                        <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Add a New Posting</strong> </h2>
                          <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                  <label for="title">Title</label>
                                  <input type="text" class="form-control" placeholder="New Suzuki XYZ Dirtbike Motorcycle">
                                  <span class="help-block">A great title needs at least 60 characters. </span>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <label for="product_price">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">$</div>
                                        <input type="text" class="form-control" id="product_price" placeholder="Price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <label for="title">Location</label>
                                    <input type="text" class="form-control" placeholder="Denver, NC" data-toggle="tooltip" data-placement="bottom" title="General location, please enter your city name.">
                                </div>
                            </div>
                            <div class="col-xs-2">
                              <div class="form-group">
                                    <label for="title">Zip</label>
                                    <input type="text" class="form-control" placeholder="28037" data-toggle="tooltip" data-placement="bottom" title="Enter your zip-code.">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="product_bodytype">Description</label>
                                  <textarea class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                          </div>

                        <div class="content-subheading"> <i class="icon-user fa"></i> <strong>Sub Heading Section Here</strong> </div>
                          
                        <div class="well">
                            <h3><i class=" icon-certificate icon-color-1"></i> Posting Details</h3>
                            <p>Premium ads help sellers promote their product or service by getting their ads more visibility with more buyers and sell what they want faster. <a href="help.html">Learn more</a></p>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_make">Make</label>
                                        <select class="selectpicker show-tick">
                                            <option value="yamaha">Yamaha</option>
                                            <option value="suzuki">Suzuki</option>
                                            <option value="honda">Honda</option>
                                            <option value="harley-davidson">Harley Davidson</option>
                                            <option value="husqavarna">Husqavarna</option>
                                            <option value="other">Other</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_model">Model</label>
                                        <input name="product_model" type="text" class="col-xs-12 form-control">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_year">Year</label>
                                        <select class="selectpicker show-tick">
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_title_status">Title Status</label>
                                        <select class="selectpicker show-tick">
                                            <option value="clean">Clean</option>
                                            <option value="parts\only">Parts Only</option>
                                            <option value="rebuilt">Rebuilt</option>
                                            <option value="salvage">Salvage</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="form-group">
                                        <label for="product_vin">VIN</label>
                                        <input name="product_vin" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_engine_cc">Engine Displacement (CC's)</label>
                                        <input name="product_engine_cc" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="product_miles">Odometer</label>
                                        <input name="product_miles" type="text" class="form-control" placeholder="ex: 96 miles">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">         
                                    <div class="form-group">
                                        <label for="product_condition">Condition</label>
                                        <select class="selectpicker show-tick">
                                            <option value="">-</option> 
                                            <option value="new">new</option> 
                                            <option value="like new">like new</option> 
                                            <option value="excellent">excellent</option> 
                                            <option value="good">good</option> 
                                            <option value="fair">fair</option> 
                                            <option value="salvage">salvage</option>
                                            <option value="other">other...</option>
                                        </select>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label for="product_paint">Paint</label>
                                        <select class="selectpicker show-tick">
                                          <option value="black">Black</option>
                                          <option value="blue">Blue</option>
                                          <option value="brown">Brown</option>
                                          <option value="custom">Custom</option>
                                          <option value="green">Green</option>
                                          <option value="grey">Grey</option>
                                          <option value="orange">Orange</option>
                                          <option value="purple">Purple</option>
                                          <option value="red">Red</option>
                                          <option value="silver">Silver</option>
                                          <option value="white">White</option>
                                          <option value="yellow">Yellow</option>
                                          <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">        
                                    <div class="form-group">
                                        <label for="product_fuel_type">Fuel Type</label>
                                        <select class="selectpicker show-tick">
                                            <option value="-">-</option>
                                            <option value="gas">Gas</option>
                                            <option value="diesel">Diesel</option>
                                            <option value="electric">Electric</option>
                                            <option value="hybrid">Hybrid</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">         
                                    <div class="form-group">
                                        <label for="product_transmission">Transmission</label>
                                        <select class="selectpicker show-tick">
                                            <option value="-">-</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                            <option value="semi-auto">Semi-auto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <input type="submit" value="Submit" class="btn btn-lg btn-success">
                        
                        </div>
                    </form>
                </div>
            </section><!--/.col page-content -->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/.main-container-->
<!-- ## insert bottom-info.php -->
<!-- ## insert footer.php -->
</div><!-- #wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/form-validation.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/js/hideMaxListItem.js" type="text/javascript"></script>

<script src="assets/js/jquery.parallax-1.1.js" type="text/javascript"></script>
<script src="assets/js/form-validation.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollto.js" type="text/javascript"></script>


<script src="plugins/lib/moment.min.js" type="text/javascript"></script>
<script src="plugins/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="plugins/js/bootstrap-combobox.js" type="text/javascript"></script>
<script src="plugins/js/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="plugins/js/bootstrap_calendar.min.js" type="text/javascript"></script>

<script src="plugins/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="plugins/js/lightbox.min.js" type="text/javascript"></script>
<script src="plugins/js/raphael.min.js" type="text/javascript"></script>
<script src="plugins/js/tag-it.min.js" type="text/javascript"></script>
<script src="plugins/js/fullcalendar.min.js" type="text/javascript"></script>


<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script src="plugins/js/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script>
$('.textarea').wysihtml5();
</script>

<script src="plugins/js/bootstrap-select.min.js" type="text/javascript"></script>
<script>
$('.datepicker').datepicker();
    $("select").on("change", function() {
    var value = $(this).val();
});
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('.selectpicker').selectpicker('mobile');
}
</script>


</body>
</html>




