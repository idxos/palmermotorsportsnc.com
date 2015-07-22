<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Palmer Motorsports - Create New</title>
{embed='global_embeds/.headicons'}
<meta author="Christopher J. Roberts">
<meta description="Palmer Motorsports Your #1 Source for Motor Cycles, Dirt Bikes, UtVs, ATVs, SeaDoos, and Huskavarna Lawn and Garden Equipment and repair.">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

<link href="{path=css/_ee_channel_form_css}" type="text/css" rel="stylesheet" media="screen">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/palmer-sass-styles.css" rel="stylesheet">
<link href="assets/css/animation.css" rel="stylesheet">
<link href="plugins/css/bootstrap-select.min.css" rel="stylesheet">
<link href="plugins/css/bootstrap-select.css.map" rel="stylesheet">


<style>

</style>

<style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
<script src="assets/js/pace.min.js"></script>    
</head>
<body>
<div id="wrapper">
    {embed='global_embeds/.top-nav-white'}
    <div class="main-container">
        <div class="container">
            <div class="row">
              <section class="col-xs-12 page-content">
              
              
      
{exp:channel:form channel="products"}


                    
<div class="form-group">
  <label for="title">Title</label>
  <input type="text" name="title" id="title" value="{title}" size="50" maxlength="100" onkeyup="liveUrlTitle();" class="form-control">
</div>

<div class="form-group">
  <label for="url_title">URL Title</label>
  <input type="text" name="url_title" id="url_title" value="{url_title}" maxlength="75" size="50" class="form-control">
</div>

<div class="form-group">
  <label for="entry_date">Entry Date</label>
  <input type="text" name="entry_date" value="{entry_date}" maxlength="23" size="25" class="form-control">
</div>

<div class="form-group">
  <label for="expiration_date">Expiration Date</label>
  <input type="text" name="expiration_date" value="{expiration_date}" maxlength="23" size="25" class="form-control">
</div>

<div class="form-group">
  <label for="categories">Categories</label>
  <select name="category[]" id="categories" size="4" class="form-control">
    {categories}
      <option class="" value="{category_id}"{selected}>{category_name}</option>
    {/categories}
  </select>
</div>


<div class="form-group">
  <label for="product_bodytype">Body Type</label>
  <select name="product_bodytype" id="product_bodytype" value="{product_bodytype}" class="form-control">
    {options:product_bodytype}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_bodytype}
  </select>
</div>

<div class="form-group">
  <label for="product_drivetrain">Drivetrain</label>
  <select name="product_drivetrain" id="product_drivetrain" value="{product_drivetrain}" class="form-control">
    {options:product_drivetrain}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_drivetrain}
  </select>
</div>


<div class="form-group">
  <label for="product_fuel_type">Fuel Type</label>
  <select name="product_fuel_type" id="product_fuel_type" value="{product_fuel_type}" class="form-control selectpicker">
    {options:product_fuel_type}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_fuel_type}
  </select>
</div>


<div class="form-group">
  <label for="product_make">Make</label>
  <select name="product_make" id="product_make" value="{product_make}" class="form-control selectpicker">
    {options:product_make}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_make}
  </select>
</div>


<div class="form-group">
<label for="product_model">Model</label>
<input type="text" name="product_model" id="product_model" value="{product_model}" class="form-control selectpicker">
</div>

<div class="form-group">
<label for="product_miles">Miles</label>
<input name="product_miles" type="text" id="product_miles" value="{product_miles}" class="form-control selectpicker">
</div>

<div class="form-group">
  <label for="product_color">Color</label>
  <select name="product_color" id="product_color" value="{product_color}" class="form-control selectpicker">
    {options:product_color}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_color}
  </select>
</div>


<div class="form-group">
  <label for="product_size">Vehicle Size</label>
  <select name="product_size" id="product_size" value="{product_size}" class="form-control selectpicker">
    {options:product_size}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_size}
  </select>
</div>

<div class="form-group">
  <label for="product_title_status">Title Status</label>
  <select name="product_title_status" id="product_title_status" value="{product_title_status}" class="selectpicker">
    {options:product_title_status}
      <option value="{option_value}"{selected}>{option_name}</option>
    {/options:product_title_status}
  </select>
</div>



<div class="form-group">
<label for="product_trans">Transmission</label>
<div class="radio">
  <label>
    <input type="radio" name="product_trans" id="product_trans" value="product_trans_auto" checked>
    Automatic
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="product_trans" id="product_trans" value="product_trans_manual">
    Manual
  </label>
</div>
</div>

<div class="form-group">
<label for="product_transmission">Auto Transmission</label>
<select class="form-control selectpicker">
  <option value="automatic">Automatic</option>
  <option value="manual">Manual</option>
  <option value="semi-auto">Semi-auto</option>
</div>


<div class="form-group">
<label for="product_vin">Vin</label>
<input type="text" name="product_vin" id="product_vin" value="{product_vin}" class="form-control">
</div>


<div class="form-group">
<label for="product_year">Year</label>
<select class="form-control selectpicker">
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
</div>




<input type="submit" class="btn btn-lg btn-success" value="Submit">
{/exp:channel:form}







                
              </section><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.main-container-->
{embed='global_embeds/.bottom-info'}
{embed='global_embeds/.footer'}
</div><!-- #wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/hideMaxListItem.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.fs.scroller.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.fs.selecter.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.parallax-1.1.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.scrollto.js" type="text/javascript"></script>

<script src="{site_url}assets/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/bootstrap-select.js.map" type="text/javascript"></script>

    <script type="text/javascript">
    $('.datepicker').datepicker()
        $("select").on("change", function() {
        var value = $(this).val();
    });
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('.selectpicker').selectpicker('mobile');
}
    </script>


</body>
</html>