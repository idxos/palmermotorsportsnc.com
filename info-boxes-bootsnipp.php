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

    <title>Bootsnipp Boxes</title>
    <meta name="description" content="">
    <meta author="Christopher J. Roberts">
    <script src="assets/js/modernizr.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/palmer-sass-styles.css" rel="stylesheet">
  <style>
/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

.content {
  padding: 30px;
}

.margin-bottom-30 {
  margin-bottom: 30px;
}

/* Portlet */
.portlet {
  background: #fff;
  padding: 20px;
}

.portlet.portlet-gray {
  background: #f7f7f7;
}

.portlet.portlet-bordered {
  border: 1px solid #eee;
}

/* Portlet Title */
.portlet-title {
  padding: 0;
    min-height: 40px;
    border-bottom: 1px solid #eee;
    margin-bottom: 18px;
}

.caption {
  float: left;
  display: inline-block;
  font-size: 18px;
  line-height: 18px;
}

.caption.caption-green .caption-subject,
.caption.caption-green i {
  color: #4db3a2;
  font-weight: 200;
}

.caption.caption-red .caption-subject,
.caption.caption-red i {
  color: #e26a6a;
  font-weight: 200;
}

.caption.caption-purple .caption-subject,
.caption.caption-purple i {
  color: #8775a7;
  font-weight: 400;
}

.caption i {
  color: #777;
  font-size: 15px;
  font-weight: 300;
  margin-top: 3px;
}

.caption-subject {
  color: #666;
  font-size: 16px;
  font-weight: 600;
}

.caption-helper {
  padding: 0;
  margin: 0;
  line-height: 13px;
  color: #9eacb4;
  font-size: 13px;
  font-weight: 400;
}

/* Actions */
.actions {
  float: right;
    display: inline-block;
}

.actions a {
  margin-left: 3px;
}

.actions .btn {
  color: #666;
  padding: 3px 9px;
  font-size: 13px;
    line-height: 1.5;
    background-color: #fff;
    border-color: #ccc;
    border-radius: 50px;
}

.actions .btn i {
  font-size: 12px;
}

.actions .btn:hover {
  background: #f2f2f2;
}

/* Pagination */
.pagination {
  margin: -3px 0 0;
  border-radius: 50px;
}

.pagination > li > a,
.pagination > li > span {
  padding: 4px 10px;
  font-size: 12px;
  color: #8775a7;
  background: #f7f7f7;
}

.pagination > li:hover > a,
.pagination > li.active > a,
.pagination > li.active:hover > a {
  color: #fff;
  background: #8775a7;
  border-color: #8775a7;
}

/* Inputs */
.inputs {
  float: right;
  display: inline-block;
  padding: 4px 0;
  margin-top: -10px;
}

.input-inline {
  width: 240px;
  display: inline-block;
  vertical-align: middle;
}

/* Tab */
.portlet-title > .nav-tabs {
  background: none;
  margin: 0;
  float: right;
  display: inline-block;
  border: 0;
}

.portlet-title > .nav-tabs > li {
  background: none;
  margin: 0;
  border: 0;
}

.portlet-title > .nav-tabs > li > a {
  background: none;
  border: 0;
  padding: 2px 10px 13px;
  color: #444;
}

.portlet-title > .nav-tabs > li.active,
.portlet-title > .nav-tabs > li.active:hover {
    border-bottom: 4px solid #f3565d;
    position: relative;
  }

  .portlet-title > .nav-tabs > li:hover {
    border-bottom: 4px solid #f29b9f;
  }

.portlet-title > .nav-tabs > li.active > a,
.portlet-title > .nav-tabs > li:hover > a {
  color: #333;
  background: #fff;
  border: 0;
}

/* Btn Circle */
.actions .btn.btn-circle {
  width: 28px;
  height: 28px;
  padding: 3px 7px;
  text-align: center;
}

.actions .btn.btn-circle i {
  font-size: 11px;
}

/* Btn Grey Salsa */
.actions .btn.grey-salsa {
  border: none;
  margin-left: 3px;
  box-shadow: none;
  border-radius: 50px !important;
}

.actions .btn.grey-salsa.active {
  color: #fafcfb;
  background: #8e9bae;
}
  .actions .grey-salsa.btn:hover,
  .actions .grey-salsa.btn:focus,
  .actions .grey-salsa.btn:active,
  .actions .grey-salsa.btn.active {
  color: #fafcfb;
  background: #97a3b4;
}

/* Btn Red */
.actions .btn.btn-red.active,
.actions .btn.btn-red:hover {
  color: #fff;
  box-shadow: none;
  background: #e26a6a;
  border-color: #e26a6a;
}

/* Btn Red */
.actions .btn.btn-purple.active,
.actions .btn.btn-purple:hover {
  color: #fff;
  box-shadow: none;
  background: #8775a7;
  border-color: #8775a7;
}

  </style>
</head>
<body clas="">
<div id="wrapper">
<?php include('global_embeds/top-nav-white.php'); ?>

  <div class="main-container content">
    <div class="container">
      <div class="row">
        
        <section class="col-lg-12 page-content">
          <div class="inner-box category-content">
            
             <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption caption-red">
              <i class="glyphicon glyphicon-pushpin"></i>
              <span class="caption-subject bold font-yellow-crusta uppercase">
              Tabs </span>
              <span class="caption-helper">more samples...</span>
            </div>
            <ul class="nav nav-tabs">
              <li>
                <a href="#portlet_tab3" data-toggle="tab">
                Tab 3 </a>
              </li>
              <li>
                <a href="#portlet_tab2" data-toggle="tab">
                Tab 2 </a>
              </li>
              <li class="active">
                <a href="#portlet_tab1" data-toggle="tab">
                Tab 1 </a>
              </li>
            </ul>
          </div>
          <div class="portlet-body">
            <div class="tab-content">
              <div class="tab-pane active" id="portlet_tab1">
                <h4>Tab 1 Content</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
              </div>
              <div class="tab-pane" id="portlet_tab2">
                <h4>Tab 2 Content</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
              </div>
              <div class="tab-pane" id="portlet_tab3">
                <h4>Tab 3 Content</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
            </div>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
        
          </div><!--inner-box-->
        </section><!--/.page-content -->
      </div><!--/.row-->
    </div><!--/.container-->
  </div><!--/.main-container-->
 



<div class="content">
  <div class="container">     
    <div class="row">
      <div class="col-md-6 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <i class="glyphicon glyphicon-calendar"></i>
              <span class="caption-subject text-uppercase"> Portlet</span>
              <span class="caption-helper">weekly stats...</span>
            </div>
            <div class="actions">
              <a href="javascript:;" class="btn">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
              </a>
              <a href="javascript:;" class="btn">
                <i class="glyphicon glyphicon-paperclip"></i>
                Add
              </a>
              <a href="javascript:;" class="btn btn-circle">
                <i class="glyphicon glyphicon-resize-full"></i>
              </a>
            </div>
          </div>
          <div class="portlet-body">
            <h4>Heading Text</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>

      <div class="col-md-6 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption caption-green">
              <i class="glyphicon glyphicon-knight"></i>
              <span class="caption-subject text-uppercase"> Portlet</span>
              <span class="caption-helper">monthly stats...</span>
            </div>
            <div class="actions">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn grey-salsa active">
                <input type="radio" name="options" class="toggle" id="option1">Today</label>
                <label class="btn grey-salsa">
                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                <label class="btn grey-salsa">
                <input type="radio" name="options" class="toggle" id="option2">Month</label>
              </div>
            </div>
          </div>
          <div class="portlet-body">
            <h4>Heading Text</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet portlet-bordered">
          <div class="portlet-title">
            <div class="caption caption-red">
              <i class="glyphicon glyphicon-cog"></i>
              <span class="caption-subject text-uppercase"> Portlet</span>
              <span class="caption-helper">weekly stats...</span>
            </div>
            <div class="actions">
              <a href="javascript:;" class="btn btn-red btn-circle active">
                <i class="glyphicon glyphicon-paperclip"></i>
              </a>
              <a href="javascript:;" class="btn btn-red btn-circle">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a href="javascript:;" class="btn btn-red btn-circle">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
              <a href="javascript:;" class="btn btn-red btn-circle">
                <i class="glyphicon glyphicon-search"></i>
              </a>
            </div>
          </div>
          <div class="portlet-body">
            <h4>Heading Text</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>

      <div class="col-md-6 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet portlet-gray portlet-bordered">
          <div class="portlet-title">
            <div class="caption caption-purple">
              <i class="glyphicon glyphicon-cog"></i>
              <span class="caption-subject text-uppercase"> Pagination</span>
            </div>
            <div class="actions">
              <ul class="pagination">
                  <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                      </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                      </a>
                  </li>
                </ul>
            </div>
          </div>
          <div class="portlet-body">
            <h4>Heading Text</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <i class="glyphicon glyphicon-search"></i>
              <span class="caption-subject text-uppercase"> Form Input</span>
              <span class="caption-helper">more samples...</span>
            </div>
            <div class="inputs">
              <div class="portlet-input input-inline input-medium">
                <div class="input-group">
                  <input type="text" class="form-control input-circle-left" placeholder="search...">
                  <span class="input-group-btn">
                  <button class="btn btn-circle-right btn-default" type="submit">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="portlet-body">
            <h4>Heading Text</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>

      <div class="col-md-6">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption caption-red">
              <i class="glyphicon glyphicon-pushpin"></i>
              <span class="caption-subject bold font-yellow-crusta uppercase">
              Tabs </span>
              <span class="caption-helper">more samples...</span>
            </div>
            <ul class="nav nav-tabs">
              <li>
                <a href="#portlet_tab3" data-toggle="tab">
                Tab 3 </a>
              </li>
              <li>
                <a href="#portlet_tab2" data-toggle="tab">
                Tab 2 </a>
              </li>
              <li class="active">
                <a href="#portlet_tab1" data-toggle="tab">
                Tab 1 </a>
              </li>
            </ul>
          </div>
          <div class="portlet-body">
            <div class="tab-content">
              <div class="tab-pane active" id="portlet_tab1">
                <h4>Tab 1 Content</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
              </div>
              <div class="tab-pane" id="portlet_tab2">
                <h4>Tab 2 Content</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
              </div>
              <div class="tab-pane" id="portlet_tab3">
                <h4>Tab 3 Content</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
            </div>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>
    </div>
  </div>
</div>

<br>
<br>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>
<br>
<br>













<?php include('global_embeds/bottom-info.php'); ?>
<?php include('global_embeds/footer.php'); ?>
</div><!-- #wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/form-validation.js" type="text/javascript"></script>
<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/js/hideMaxListItem.js" type="text/javascript"></script>


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
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script type="text/javascript">
 $(window).load(function() {

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('.selectpicker').selectpicker('mobile');
  }

 
 });
</script>
<script type="text/javascript" src="assets/js/shCore.js"></script>
<script type="text/javascript" src="assets/js/shBrushXml.js"></script>
<script type="text/javascript" src="assets/js/shBrushJScript.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script src="plugins/js/bootstrap-select.min.js" type="text/javascript"></script>


<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
