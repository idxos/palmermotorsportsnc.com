<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" sizes="57x57" href="{site_url}assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{site_url}assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{site_url}assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{site_url}assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{site_url}assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{site_url}assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{site_url}assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{site_url}assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{site_url}assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{site_url}assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{site_url}assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{site_url}assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{site_url}assets/icons/favicon-16x16.png">
    <link rel="manifest" href="{site_url}assets/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{site_url}assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">

    <title>Palmer Motorsports - Contact Us</title>
    <meta name="description" content="">
    <meta author="Christopher J. Roberts">

    <script src="{site_url}assets/js/modernizr.js" type="text/javascript"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="{site_url}assets/css/palmer-sass-styles.css" rel="stylesheet">


  {exp:jquery:script_tag}
  <script src="http://malsup.github.com/jquery.form.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#loginForm').ajaxForm({
        dataType: 'json',
        success: function(data) {
          if (data.success) {
            alert('You are now logged in. You can add additional actions in the js script.');
          } else {
            alert('Failed with the following errors: '+data.errors.login);
          }
        }
      });
    });
  </script>

 <div id="wrapper">


    <?php include('global_embeds/top-nav-white.php'); ?>
 <div class="intro-inner">
    <div class="contact-intro">
        <div class="w100 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105399.40184459479!2d-81.00323260000022!3d35.51038601093829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4aeeb0d0ad8744a8!2sPalmer+Motorsports+LLC!5e1!3m2!1sen!2sus!4v1437634123465" width="100%" height="350" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-4">
                <div class="contact_info">
                    <h5 class="list-title gray"><strong>Contact Palmer Motorsports LLC</strong></h5>
                    <embed type="image/svg+xml" class="icon-color-3" src="http://palmermotorsportsnc.com/images/uploads/primary-icons/dirtbike.svg" />
                    <div class="contact-info ">
                        <div class="address">
                            <p class="p1">2569 North Highway 16</p>
                            <p class="p1">Denver, NC 28037 </p>
                            <p>Email: <a href="mailto:todd@palmermotorsportsnc.com">todd@palmermotorsportsnc.com</a></p>
                            <p>Toll Free: (704) 489-1125</p>
                            <p>&nbsp;</p>
                            <div>
                                <p><strong><a href="#">Get a Quote</a></strong></p>
                                <p><strong> <a href="" data-toggle="modal" data-target="#login-modal">Client Area Login</a></strong></p>
                                <p><strong> <a href="#skypeid" class="skype">Live Chat</a></strong></p>
                                <p> <strong> <a href="" data-toggle="modal" data-target="#login-modal">Knowledge Base</a></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="social-list"><a target="_blank" href="https://twitter.com/palmermotorsportsnc/"><i class="fa fa-twitter fa-lg "></i></a>
                        <a target="_blank" href="https://www.facebook.com/palmermotorsportsnc/"><i class="fa fa-facebook fa-lg "></i></a>
                        <a target="_blank" href="https://plus.google.com/palmermotorsportsnc/"><i class="fa fa-google-plus fa-lg "></i></a>
                        <a target="_blank" href="https://www.pinterest.com/palmermotorsportsnc/"><i class="fa fa-pinterest fa-lg "></i></a></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <h5 class="list-title gray"><strong>Contact us</strong></h5>
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="firstname" name="first_name" type="text" placeholder="First Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="lastname" name="last_name" type="text" placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="companyname" name="company_name" type="text" placeholder="Company Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>










    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Login to Your Account</h1><br>
          <form>
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>

          <div class="login-help text-center">
            <a href="#">Register</a> - <a href="#">Forgot Password</a>
          </div>
        </div>
      </div>
    </div>



    <?php include('global_embeds/bottom-info.php'); ?>
    <?php include('global_embeds/footer.php'); ?>


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

 
</div>