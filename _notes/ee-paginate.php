<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
<title>Palmer Motorsports - Search Results</title>
{embed='global_embeds/.head-icons'}
<meta author="Christopher J. Roberts">
<meta description="Palmer Motorsports Your #1 Source for Motor Cycles, Dirt Bikes, UtVs, ATVs, SeaDoos, and Huskavarna Lawn and Garden Equipment and repair.">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <link href="{site_url}assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{site_url}assets/js/fileinput.min.js" type="text/javascript"></script>
    <script src="{site_url}assets/js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="{site_url}assets/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

    <link href="{site_url}assets/css/core.css" rel="stylesheet">
    <link href="{site_url}assets/css/checkbox.css" rel="stylesheet">
    <link href="{site_url}assets/css/scrollbar.css" rel="stylesheet">

    <link href="{site_url}assets/css/style.css" rel="stylesheet">
    <link href="{site_url}assets/css/flexslider.css" rel="stylesheet">

    <style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
    <script src="{site_url}assets/js/pace.min.js"></script>
    
</head>
<body>
<div id="wrapper">
  
  {embed='global_embeds/.top-nav-white'}
  
  <div class="search-row-wrapper">
      <div class="container">
          {embed='forms/products-top-search'}
      </div>
  </div>

  <div class="main-container">
      <div class="container">
        <div class="row">

          <section class="col-md-3 reg-sidebar">
              <aside>
                  {embed='products/sidebar-search'}
              </aside>
          </section>

          <section class="col-sm-9 page-content col-thin-right">
                                
            <div class="category-list">
                {embed='products/category-list'}
                {embed='products/listing-filter'}
                <div class="adds-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane active" id="searchResults"> 

                          {exp:search:search_results}
                            <div class="item-list">
                                <div class="col-sm-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i class="ion-ios-camera"></i> 2 </span>
                                        <a href="{title_permalink='products/details'}">
                                            <img class="thumbnail no-margin" src="{product_image_thumb}" alt="Photo of {title}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7 add-desc-box">
                                    <div class="add-details">
                                        <h5 class="add-title"> 
                                            <a href="{title_permalink='products/details'}">{title}</a>
                                        </h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="{title}">B </span>

                                        <span class="date"><i class="ion-ios-calendar-outline"></i> 
                                        {exp:channel:month_links channel="products" limit="1"}{month}{/exp:channel:month_links} {exp:channel:month_links channel="products" limit="1"}{day}{/exp:channel:month_links}, {exp:channel:month_links channel="products" limit="1"}{year}{/exp:channel:month_links}
                                        </span> - <span class="category">{product_type} </span>- <span class="item-location"><i class="ion-ios-location"></i> Charlotte, NC </span></span>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-right price-box">
                                    <h2 class="item-price"> $ {product_price}</h2>
                                    <a class="btn btn-default btn-sm make-favorite" data-toggle="modal" data-target="#saveAsFave"> <i class="ion-ios-heart"></i> <span>Save</span> </a>
                                </div>
                            </div>
                          {/exp:search:search_results}

                        </div><!--/.tab-pane #searchResults-->
                    </div><!--/.tab-content-->
                    <div class="tab-box  save-search-bar text-center"> 
                        <a href="" data-toggle="modal" data-target="#scheduleTestDrive"><i class="ion-ios-heart size-15"> </i> Save Search </a> 
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
              <h2> See something you like ? </h2>
              <h5>Take it for a test drive for FREE.  Send us a message and we will get you riding today !</h5>
              <a href="#scheduleTestDrive" data-toggle="modal" data-target="#scheduleTestDrive" class="btn btn-lg btn-border btn-post btn-danger"> Schedule Test Drive </a>
              <br/>
            </div>
            <br>
          </section><!--/.col-->

      </div><!--/.row-->
      <div class="row">
        <section class="col-lg-12">
            
        </section>
      </div>
    </div><!--/.container-->
  </div><!--/.main-container-->
  {embed='global_embeds/.footer'}


  <!-- Modal -->
  <div class="modal fade" id="scheduleTestDrive" tabindex="-1" role="dialog" aria-labelledby="scheduleTestDrive">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Schedule a Test Drive</h4>
        </div>
        <div class="modal-body">
          {embed='forms/.modal-search-scheduleTestDrive'}
        </div>
        <div class="modal-footer">
      
        </div>
      </div>
    </div>
  </div><!--/.modal-contactUs-->

  <!-- Modal -->
  <div class="modal fade" id="saveSearch" tabindex="-1" role="dialog" aria-labelledby="saveSearch">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Save Search</h4>
        </div>
        <div class="modal-body">
          {embed='forms/.modal-search-saveSearch'}
        </div>
        <div class="modal-footer">
      
        </div>
      </div>
    </div>
  </div><!--/.modal-contactUs-->

</div><!-- #wrapper -->
<script src="{site_url}assets/js/app.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/hideMaxListItem.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.fs.scroller.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.fs.selecter.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.parallax-1.1.js" type="text/javascript"></script>
<script src="{site_url}assets/js/form-validation.js" type="text/javascript"></script>
<script src="{site_url}assets/js/jquery.scrollto.js" type="text/javascript"></script>
<script src="{site_url}assets/js/adsdetails.js" type="text/javascript"></script>
<script src="{site_url}assets/js/fileinput.min.js" type="text/javascript"></script>
<script src="{site_url}assets/js/script.js" type="text/javascript"></script>

<script src="{site_url}assets/js/core.js" type="text/javascript"></script>
<script src="{site_url}assets/js/touch.js" type="text/javascript"></script>
<script src="{site_url}assets/js/checkbox.js" type="text/javascript"></script>
<script src="{site_url}assets/js/scrollbar.js" type="text/javascript"></script>

</body>
</html>                                         