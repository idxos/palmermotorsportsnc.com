<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Owl Carousel - Owl 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700" rel="stylesheet" type="text/css">
    <link href="assets/owl-carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="assets/owl-carousel/assets/css/custom.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/owl-carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">



 </head>
  <body>

      <div id="top-nav" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="../index.html"><i class="icon-chevron-left"></i> Back to Frontpage</a></li>
              <li><a href="../owl.carousel.zip" class="download download-on" data-spy="affix" data-offset-top="450">Download</a></li>
            </ul>
            <ul class="nav pull-left">
              
            </ul>
            </div>
          </div>
        </div>
      </div>
   
    <div id="title">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1>Dynamic content via custom JSON</h1>
          </div>
        </div>
      </div>
    </div>

      <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
              </div>
            </div>
          </div>
        </div>

    </div>

    <div id="example-info">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1>Setup</h1>
            <p>This example uses custom structure of JSON file <a href="json/customData.json">customData.json</a>.
            </p>
            <ul class="nav nav-tabs" id="myTab">
              <li class="active"><a href="#javascript">Javascript</a></li>
              <li><a href="#HTML">HTML</a></li>
              <li><a href="#CSS">CSS</a></li>
              <li><a href="#JSON">JSON</a></li>
            </ul>
             
            <div class="tab-content">

              <div class="tab-pane active" id="javascript">
<pre class="pre-show prettyprint linenums">
$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    jsonPath : 'json/customData.json',
    jsonSuccess : customDataSuccess
  });

  function customDataSuccess(data){
    var content = "";
    for(var i in data["items"]){
       
       var img = data["items"][i].img;
       var alt = data["items"][i].alt;

       content += "&lt;img src=\"" +img+ "\" alt=\"" +alt+ "\"&gt"
    }
    $("#owl-demo").html(content);
  }

});
</pre>  

              </div>

              <div class="tab-pane" id="HTML">
<pre class="pre-show prettyprint linenums">
&lt;div id="owl-demo" class="owl-carousel"&gt;
&lt;/div&gt;
</pre>
              </div>

              <div class="tab-pane" id="CSS">
<pre class="pre-show prettyprint linenums">
#owl-demo .item{
  background: #a1def8;
  padding: 30px 0px;
  display: block;
  margin: 5px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

</pre>
              </div>
              <div class="tab-pane" id="JSON">
<pre class="pre-show prettyprint linenums">
{
  "items" : [
    {
      "img": "assets/owl1.jpg",
      "alt" : "Owl Image 1"
    },
    {
      "img": "assets/owl2.jpg",
      "alt" : "Owl Image 2"
    },
    {
      "img": "assets/owl3.jpg",
      "alt" : "Owl Image 1"
    },
    {
      "img": "assets/owl4.jpg",
      "alt" : "Owl Image 2"
    },
    {
      "img": "assets/owl5.jpg",
      "alt" : "Owl Image 1"
    },
    {
      "img": "assets/owl6.jpg",
      "alt" : "Owl Image 2"
    }
  ]
}
</pre>
</div>
            </div><!--End Tab Content-->

          </div>
        </div>
      </div>
    </div>

    <div id="more">
      <div class="container">

        <div class="row">
          <div class="span12">
            <h1>More Demos</h1>
          </div>
        </div>

        <div class="row demos-row">
          <div class="span3">
            <a href="images.html" class="demo-box">
              <div class="demo-wrapper demo-images clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>Images</h3>
            </a>
          </div>

          <div class="span3">
            <a href="custom.html" class="demo-box">
              <div class="demo-wrapper demo-custom clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>Custom</h3>
            </a>
          </div>

          <div class="span3">
            <a href="itemsCustom.html" class="demo-box">
              <div class="demo-wrapper demo-full clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>Custom 2</h3>
            </a>
          </div>

          <div class="span3">
            <a href="one.html" class="demo-box">
              <div class="demo-wrapper demo-one clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>One Slide</h3>
            </a>
          </div>

        </div>
        <div class="row demos-row">
          <div class="span3">
            <a href="json.html" class="demo-box">
              <div class="demo-wrapper demo-Json clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>JSON</h3>
            </a>
          </div>

          <div class="span3">
            <a href="customJson.html" class="demo-box">
              <div class="demo-wrapper demo-Json-custom clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>JSON Custom</h3>
            </a>
          </div>

          <div class="span3">
            <a href="lazyLoad.html" class="demo-box">
              <div class="demo-wrapper demo-lazy clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>Lazy Load</h3>
            </a>
          </div>

          <div class="span3">
            <a href="autoHeight.html" class="demo-box">
              <div class="demo-wrapper demo-height clearfix">
                <div class="demo-slide"><div class="bg"></div></div>
              </div>
              <h3>Auto Height</h3>
            </a>
          </div>

        </div>
      </div>
    </div>


 
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5>Bartosz Wojciechowski 2013 / @OwlFonk / 
            <a href="mailto:owl@owlgraphic.com?subject=Hey Owl!">email</a> / 
            <a href="../changelog.html">changelog</a> /
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EFSGXZS7V2U9N">donate</a> / 
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://owlgraphic.com/owlcarousel/" data-text="Awesome jQuery Owl Carousel Responsive Plugin" data-via="OwlFonk" data-count="none" data-hashtags="owlcarousel"></a>
            <script>
            var owldomain = window.location.hostname.indexOf("owlgraphic");
            if(owldomain !== -1){
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            }
            </script>
            </h5>
          </div>
        </div>
      </div>
    </div>


    <script src="assets/owl-carousel/assets/js/jquery-1.9.1.min.js"></script> 
    <script src="assets/owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
    #owl-demo img{
        display: block;
        width: 99%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        jsonPath : 'json/customData.json',
        jsonSuccess : customDataSuccess
      });

      function customDataSuccess(data){
        var content = "";
        for(var i in data["items"]){
           
           var img = data["items"][i].img;
           var alt = data["items"][i].alt;

           content += "<img src=\"" +img+ "\" alt=\"" +alt+ "\">"
        }
        $("#owl-demo").html(content);
      }

    });
    </script>


    <script src="assets/owl-carousel/assets/js/bootstrap-collapse.js"></script>
    <script src="assets/owl-carousel/assets/js/bootstrap-transition.js"></script>
    <script src="assets/owl-carousel/assets/js/bootstrap-tab.js"></script>

    <script src="assets/owl-carousel/assets/google-code-prettify/prettify.js"></script>
    <script src="assets/owl-carousel/assets/js/application.js"></script>

  </body>
</html>