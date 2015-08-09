<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Palmer Motorsports - Add New Product</title>
{embed='global_embeds/.headicons'}
<meta author="Christopher J. Roberts">
<meta description="Palmer Motorsports Your #1 Source for Motor Cycles, Dirt Bikes, UtVs, ATVs, SeaDoos, and Huskavarna Lawn and Garden Equipment and repair.">
<meta author="Christopher J. Roberts">
  <script src="{site_url}assets/js/modernizr.js" type="text/javascript"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="{site_url}assets/css/palmer-sass-styles.css" rel="stylesheet">
  <style>

  </style>
 </head>
<body>
<div id="wrapper">
{embed='global_embeds/.top-nav-white-temp'}

<div class="main-container">
    <div class="container">
        <div class="row">

            <section class="col-lg-12 page-content">
              <div class="inner-box category-content">
              
                <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Add New Product</strong> </h2>

                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#publish" aria-controls="publish" role="tab" data-toggle="tab">Publish</a></li>
                    <li role="presentation"><a href="#date" aria-controls="date" role="tab" data-toggle="tab">Date</a></li>
                    <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">Categories</a></li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="publish">
                      {embed='admin/form-add-product'}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="date">
                      {embed='admin/form-add-product-date'}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="categories">
                      {embed='admin/form-add-product-categories'}
                    </div>
                  </div>




              </div><!--/.inner-box /.category-content -->
            </section><!--/.page-content -->
        </div>
    </div>
</div>
{embed='global_embeds/.bottom-info'}
{embed='global_embeds/.footer'}
</div><!-- #wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/hideMaxListItem.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.parallax-1.1.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.scrollto.js" type="text/javascript"></script>
<script src="{site_url}plugins/lib/moment.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/bootstrap-combobox.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/bootstrap_calendar.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/lightbox.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/raphael.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/tag-it.min.js" type="text/javascript"></script>
<script src="{site_url}plugins/js/fullcalendar.min.js" type="text/javascript"></script>


<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script src="{site_url}plugins/js/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script>
$('.textarea').wysihtml5();
</script>

<script src="{site_url}plugins/js/bootstrap-select.min.js" type="text/javascript"></script>
<script>
$('.selectpicker').selectpicker('setStyle', 'btn-white');
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
