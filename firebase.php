<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//use.typekit.net/aem3dbj.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="app/js/firebase/head.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="all">

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

  
  <meta property="st:title" content="Web Quickstart - Javascript">


    <meta name="description" content="">
    <meta author="Christopher J. Roberts">

  <link rel="stylesheet" href="app/css/firebase/head.css">

<link rel="stylesheet" href="app/css/firebase/fonts.css">

<link rel="stylesheet" href="app/css/firebase/swifttype.css">





<script type="text/javascript">
  (function(){
    var isiPad = navigator.userAgent.match(/iPad/i) != null;

    if(isiPad) {
      //CHANGE VIEWPORT BACK TO DEFAULT FOR IPAD
      var viewport = document.getElementById('viewport');
      viewport.setAttribute('content', 'width=980, user-scalable=yes, minimum-scale=.25, maximum-scale=1.6 ');
    }
  })();
</script>

</head>
<body data-page-id="" class="docs-wrapper">
    <div id="page-content">
        <header class="nav nav-top">
            <nav>
                <h1><a href="https://www.firebase.com/">Firebase</a></h1>
                <a href="https://www.firebase.com/docs/web/quickstart.html#" class="button-mobile-menu">Site Menu</a>
                <ul class="text-medium" id="main-nav">
                    <li><a href="https://www.firebase.com/signup/" id="nav-signup" class="signup button button-flat-primary button-rounded button-signup">Sign Up</a></li>
                    <li><a id="nav-login" href="https://www.firebase.com/login/" class="button button-flat-plain button-rounded button-login">Login</a></li>
                    <li><a href="https://www.firebase.com/docs/" class="selected button button-flat-plain button-rounded">Docs</a></li>
                    <li><a href="https://www.firebase.com/pricing.html" class=" button button-flat-plain button-rounded">Pricing</a></li>
                    <li><a href="https://www.firebase.com/features.html" class=" button button-flat-plain button-rounded">Features</a></li>
                    <li><a href="https://www.firebase.com/" class=" button button-flat-plain button-rounded">Overview</a></li>
                </ul>
            </nav>
        </header>
        <nav id="docs-nav" class="docs-sidebar docs-nav">
            <!-- SEARCH -->
            <header>
                <form>
                    <input type="search" id="st-search-input" placeholder="Search Docs..." autocomplete="off" autocorrect="off" autocapitalize="off" style="outline: none;">
                </form>
                <a href="https://www.firebase.com/docs/web/quickstart.html#" class="button-mobile-docs-menu">Docs Menu</a>
            </header>
            <div id="docs-dropdown" class="docs-dropdown">
                <!-- HOME -->
                <section>
                    <ul class="section primary-list">
                        <li><a href="https://www.firebase.com/docs"><i class="icon-home"></i>Docs Home</a></li>
                    </ul>
                </section>
                <!-- PLATFORMS -->
                <section>
                    <h3>platforms</h3>
                    <!-- WEB -->
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/web/" class="current">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-earth"></i>Web
                            </a>
                            <!-- NESTED LIST -->
                            <ul class="secondary-list">
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="./Web Quickstart - Firebase_files/Web Quickstart - Firebase.html" class="current">
        Quickstart
      </a>
                                </li>
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="https://www.firebase.com/docs/web/guide/" class="">
        Guide
      </a>
                                </li>
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="https://www.firebase.com/docs/web/api/" class="">
        API Reference
      </a>
                                </li>
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="https://www.firebase.com/docs/web/libraries/" class="">
        Libraries
      </a>
                                </li>
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="https://www.firebase.com/docs/web/examples.html" class="">
        Examples
      </a>
                                </li>
                                <!-- ASSIGN CURRENT CLASS -->
                                <li>
                                    <a href="https://www.firebase.com/docs/web/recipes.html" class="">
        Recipes
      </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- IOS -->
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/ios/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-apple"></i>iOS
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                    <!-- JAVA -->
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/android/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-android"></i>Android
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                    <!-- REST -->
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/rest/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-console"></i>REST
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                </section>
                <!-- SECURITY -->
                <section>
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/security/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-lock"></i>Security &amp; Rules
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                </section>
                <!-- HOSTING -->
                <section>
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/hosting/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-rocket"></i>Hosting
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                </section>
                <!-- PARTNERSHIPS -->
                <section>
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/partnerships/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-suitcase"></i>Partnerships
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                </section>
                <!-- OPEN DATA  -->
                <section>
                    <!-- ASSIGN CURRENT CLASS -->
                    <ul class="section primary-list">
                        <li>
                            <a href="https://www.firebase.com/docs/open-data/" class="">
                                <!-- ASSIGN LINK ICON -->
                                <i class="icon-database2"></i>Open Data Sets
                            </a>
                            <!-- NESTED LIST -->
                        </li>
                    </ul>
                </section>
                <!-- HELP & SUPPORT -->
                <section>
                    <ul class="section primary-list">
                        <li><a href="https://www.firebase.com/docs/help"><i class="icon-thumbs-up"></i>Help &amp; Support</a></li>
                    </ul>
                </section>
                <!-- HELP & SUPPORT
    <section class="meta-info">
      <h3>Help &amp; Support</h3>

      <ul>
        <li><a href="#">Support Center</a></li>
        <li><a href="/contact.html">Contact Us</a></li>
      </ul>
    </section>
    -->
            </div>
        </nav>
        <main class="docs-main-content">
            <header class="docs-hero">
                <div class="docs-hero-inner">
                    <!-- SUBTITLE  -->
                    <h3>5 minute quickstart</h3>
                    <!-- TITLE -->
                    <h2 class="light ">
        
        Web Quickstart
      </h2>
                    <!-- BUTTONS -->
                    <div class="hero-actions">
                        <a class="hero-action-primary button button-rounded button-flat-plain" href="https://www.firebase.com/signup/">
              Sign Up &amp; Start Hacking
            </a>
                    </div>
                </div>
                <!-- VIDEO -->
                <div class="docs-hero-video">
                    <a href="https://www.youtube.com/embed/gL-jNk8SzUo" class="video-link" data-type="video">
                        <i class="icon-play3"></i> Web Quickstart (2:47)
                    </a>
                </div>
            </header>
            <article class="grid-fluid">
                <!-- STEP 1 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number large"></i>
                    <div class="c11">
                        <h3>Create an account</h3>
                        <p>
                            The first thing you need to do to get started with Firebase is <a href="https://www.firebase.com/signup/">sign up for
      a free account</a>. A brand new Firebase app will automatically be created for you with its own unique database URL ending in <code>firebaseio.com</code>. We'll use this database URL to store and sync data.
                        </p>
                    </div>
                </div>
                <!-- STEP 2 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number2 large"></i>
                    <div class="c11">
                        <h3>Install Firebase</h3>
                        <p>
                            To include the Firebase client library in your website, add a script tag to the
                            <code>&lt;head&gt;</code> section of your HTML file. We recommend including the library directly from our CDN:
                        </p>
                        <pre class="prettyprint linenums  lang-html prettyprinted" data-lang="html" data-name="html" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://cdn.firebase.com/js/client/2.2.7/firebase.js"</span><span class="tag">&gt;&lt;/script&gt;</span></code></li></ol></pre>
                        <p class="alert alert-info full-width">
                            Firebase is also available as a Bower dependency via "bower install firebase".
                        </p>
                        <section class="docs-sub-section">
                            <h4>Node.js Setup</h4>
                            <p>
                                <strong>The Firebase JavaScript API and the Firebase Node.js API are exactly the
        same</strong>. Firebase clients run just as easily on your servers as they do on end-user devices. We offer a Node.js module which can be installed via npm from the command line:
                            </p>
                            <pre class="prettyprint linenums  lang-bash prettyprinted" data-lang="bash" data-name="bash" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">$ npm install firebase </span><span class="pun">--</span><span class="pln">save</span></code></li></ol></pre>
                            <p>
                                To use the Firebase Node.js module in your application, just <code>require</code> the Firebase client library.
                            </p>
                            <pre class="prettyprint linenums  lang- prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="kwd">var</span><span class="pln"> </span><span class="typ">Firebase</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"firebase"</span><span class="pun">);</span></code></li></ol></pre>
                        </section>
                    </div>
                </div>
                <!-- STEP 3 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number3 large"></i>
                    <div class="c11">
                        <h3>Read &amp; Write Data</h3>
                        <p>
                            To read and write data to and from a Firebase database, we need to first create a reference to it. We do this by passing the URL of our Firebase app into the <code>Firebase</code> constructor:
                        </p>
                        <pre class="prettyprint linenums  lang- prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="kwd">var</span><span class="pln"> myFirebaseRef </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Firebase</span><span class="pun">(</span><span class="str">"https://&lt;YOUR-FIREBASE-APP&gt;.firebaseio.com/"</span><span class="pun">);</span></code></li></ol></pre>
                        <p>
                            There are several other ways to create a reference to a location in our database. These are all explained in our <a href="https://www.firebase.com/docs/web/guide/understanding-data.html">understanding data
      section</a>.
                        </p>
                        <section class="docs-sub-section">
                            <h4>Writing Data</h4>
                            <div class="c6">
                                <p>
                                    Once we have a reference to our database, we can write any valid JSON object to it using <code>set()</code>. Our <a href="https://www.firebase.com/docs/web/guide/saving-data.html">guide on saving data</a> explains the different write methods the API offers and how to know when the data has been successfully written.
                                </p>
                            </div>
                            <div class="c6">
                                <pre class="prettyprint linenums  lang- prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">myFirebaseRef</span><span class="pun">.</span><span class="kwd">set</span><span class="pun">({</span></code></li><li class="L1"><code><span class="pln">  title</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Hello World!"</span><span class="pun">,</span></code></li><li class="L2"><code><span class="pln">  author</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Firebase"</span><span class="pun">,</span></code></li><li class="L3"><code><span class="pln">  location</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L4"><code><span class="pln">    city</span><span class="pun">:</span><span class="pln"> </span><span class="str">"San Francisco"</span><span class="pun">,</span></code></li><li class="L5"><code><span class="pln">    state</span><span class="pun">:</span><span class="pln"> </span><span class="str">"California"</span><span class="pun">,</span></code></li><li class="L6"><code><span class="pln">    zip</span><span class="pun">:</span><span class="pln"> </span><span class="lit">94103</span></code></li><li class="L7"><code><span class="pln">  </span><span class="pun">}</span></code></li><li class="L8"><code><span class="pun">});</span></code></li></ol></pre>
                            </div>
                            <div class="clear"></div>
                        </section>
                        <section class="docs-sub-section">
                            <h4>Reading Data</h4>
                            <p>
                                Reading data from our database is accomplished by attaching callbacks and handling the resulting events. Assuming we already wrote to <code>myFirebaseRef</code> above, we can retrieve the <code>city</code> value by using the <code>on()</code> method:
                            </p>
                            <pre class="prettyprint linenums  lang- prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">myFirebaseRef</span><span class="pun">.</span><span class="pln">child</span><span class="pun">(</span><span class="str">"location/city"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"value"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">snapshot</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L1"><code><span class="pln">  alert</span><span class="pun">(</span><span class="pln">snapshot</span><span class="pun">.</span><span class="pln">val</span><span class="pun">());</span><span class="pln">  </span><span class="com">// Alerts "San Francisco"</span></code></li><li class="L2"><code><span class="pun">});</span></code></li></ol></pre>
                            <div class="alert alert-info full-width">
                                Call <strong>val()</strong> on the <code>DataSnapshot</code> returned from the callback to access a JSON object.
                            </div>
                            <p>
                                In the example above, the <code>value</code> event will fire once for the initial state of the data, and then again every time the value of that data changes. You can learn more about the various event types and how to handle event data in our
                                <a href="https://www.firebase.com/docs/web/guide/retrieving-data.html">documentation on reading data</a>.
                            </p>
                        </section>
                    </div>
                </div>
                <!-- STEP 4 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number4 large"></i>
                    <div class="c11">
                        <h3>Deploy to Firebase Hosting</h3>
                        <p>
                            Firebase Hosting lets us deploy our application's static files (HTML, CSS, JavaScript, etc.) to the web with a single command. To get started, download <code>firebase-tools</code> via npm:
                        </p>
                        <pre class="prettyprint linenums  lang-bash prettyprinted" data-lang="bash" data-name="bash" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">$ npm install </span><span class="pun">-</span><span class="pln">g firebase</span><span class="pun">-</span><span class="pln">tools</span></code></li></ol></pre>
                        <p>
                            <a href="https://www.firebase.com/docs/hosting/quickstart.html">Read through our hosting quickstart</a> to get up and running in minutes. Firebase Hosting is a production-grade service, with security, reliability, and scalability baked-in. We host content on a global CDN and even provision an SSL certificate automatically for you so you can be up-and-running with only the following command:
                        </p>
                        <pre class="prettyprint linenums  lang-bash prettyprinted" data-lang="bash" data-name="bash" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">$ firebase deploy</span></code></li></ol></pre>
                        <div class="alert alert-info full-width">
                            Paid Firebase apps can serve their files from a custom domain name!
                        </div>
                    </div>
                </div>
                <!-- STEP 5 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number5 large"></i>
                    <div class="c11">
                        <h3>Authenticate Your Users</h3>
                        <p>
                            Firebase provides full support for authenticating users with Email &amp; Password, Facebook, Twitter, GitHub, Google, or your existing authentication system.</p>
                        <p>
                            To get started with Email &amp; Password auth, enable the <strong>Email &amp; Password</strong> provider in the App Dashboard:
                        </p>
                        <ol>
                            <li>Choose the <strong>Login &amp; Auth</strong> tab.</li>
                            <li>Select the <strong>Email &amp; Password</strong> tab and enable authentication.</li>
                        </ol>
                        <p>
                            Now that the authentication provider is enabled you can create a new user:
                        </p>
                        <pre class="prettyprint linenums  lang-prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pln">myFirebaseRef</span><span class="pun">.</span><span class="pln">createUser</span><span class="pun">({</span></code></li><li class="L1"><code><span class="pln">  email    </span><span class="pun">:</span><span class="pln"> </span><span class="str">"bobtony@firebase.com"</span><span class="pun">,</span></code></li><li class="L2"><code><span class="pln">  password </span><span class="pun">:</span><span class="pln"> </span><span class="str">"correcthorsebatterystaple"</span></code></li><li class="L3"><code><span class="pun">},</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">error</span><span class="pun">,</span><span class="pln"> userData</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L4"><code><span class="pln">  </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">error</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L5"><code><span class="pln">    console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Error creating user:"</span><span class="pun">,</span><span class="pln"> error</span><span class="pun">);</span></code></li><li class="L6"><code><span class="pln">  </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L7"><code><span class="pln">    console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Successfully created user account with uid:"</span><span class="pun">,</span><span class="pln"> userData</span><span class="pun">.</span><span class="pln">uid</span><span class="pun">);</span></code></li><li class="L8"><code><span class="pln">  </span><span class="pun">}</span></code></li><li class="L9"><code><span class="pun">});</span></code></li></ol></pre>
                        <p>
                            Once you've created your first user, you can log them in using the <code><a href="https://www.firebase.com/docs/web/guide/login/password.html#section-logging-in">authWithPassword</a></code> method.
                        </p>
                        <p>
                            Learn how to authenticate via Facebook, Twitter, Google or your own custom system in our <a href="https://www.firebase.com/docs/web/guide/user-auth.html">User Authentication</a> guide.
                        </p>
                    </div>
                </div>
                <!-- STEP 6 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number6 large"></i>
                    <div class="c11">
                        <h3>Secure Your Data</h3>
                        <p>
                            Powerful expression-based <a href="https://www.firebase.com/docs/web/guide/securing-data.html">Security and Firebase Rules</a> provide fine-grained control over who has access to our data and allow us to validate writes to our database data:
                        </p>
                        <pre class="prettyprint linenums  lang-prettyprinted" data-lang="" data-name="" data-highlight="" data-resize="false"><button class="btn-copy">Copy</button><ol class="linenums"><li class="L0"><code><span class="pun">{</span></code></li><li class="L1"><code><span class="pln">  </span><span class="str">"rules"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span></code></li><li class="L2"><code><span class="pln">    </span><span class="str">".read"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span></code></li><li class="L3"><code><span class="pln">    </span><span class="str">".write"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"auth.uid === 'facebook:5913942'"</span><span class="pun">,</span></code></li><li class="L4"><code><span class="pln">    </span><span class="str">".validate"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"newData.isString() &amp;&amp; newData.val().length &lt; 500"</span></code></li><li class="L5"><code><span class="pln">  </span><span class="pun">}</span></code></li><li class="L6"><code><span class="pun">}</span></code></li></ol></pre>
                        <p>
                            Our Security and Firebase Rules are enforced consistently whenever data is accessed. The rules language is designed to be both powerful and flexible, so that you can maintain fine-grained control over your application's data.
                        </p>
                    </div>
                </div>
                <!-- STEP 7 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number7 large"></i>
                    <div class="c11">
                        <h3>Explore Our Bindings</h3>
                        <p class="c5">
                            In addition to our core API, we have bindings for <a href="https://www.firebase.com/docs/web/libraries/angular/">AngularJS</a>,
                            <a href="https://www.firebase.com/docs/web/libraries/backbone/quickstart.html">Backbone</a>, <a href="https://www.firebase.com/docs/web/libraries/ember/">Ember</a>, and <a href="https://www.firebase.com/docs/web/libraries/react/">ReactJS</a> which make it even easier to use Firebase with those frameworks.
                        </p>
                        <div class="c7">
                            <img src="./Web Quickstart - Firebase_files/frameworks.png" alt="AngularJS, EmberJS, Backbone.js, Javascript, iOS7, OSX, Android">
                        </div>
                    </div>
                </div>
                <!-- STEP 8 ########################## -->
                <div class="content-block content-number clearfix">
                    <i class="number icon-number8 large"></i>
                    <div class="c11">
                        <h3>What's Next?</h3>
                        <ul>
                            <li>Read the <a href="https://www.firebase.com/docs/web/guide">Development Guide</a> </li>
                            <li>View the full <a href="https://www.firebase.com/docs/web/api">JavaScript API</a> </li>
                            <li>Explore our <a href="https://www.firebase.com/docs/web/examples.html">code examples</a> </li>
                        </ul>
                    </div>
                </div>
            </article>
        </main>
        <footer class="nav nav-footer">
            <h5><a href="https://www.firebase.com/">Firebase</a></h5>
            <ul>
                <li><a href="https://www.firebase.com/docs/help/">Help &amp; Support</a></li>
                <li><a href="https://www.firebase.com/contact.html">Contact Info</a></li>
            </ul>
            <ul>
                <li><a href="https://www.firebase.com/terms/privacy-policy.html">Privacy Policy</a></li>
                <li><a href="https://www.firebase.com/terms/terms-of-service.html">Terms of Service</a></li>
                <li><a href="https://www.firebase.com/terms/service-level-agreement.html">Service Level Agreement</a></li>
            </ul>
            <ul class="social">
                <li><a href="https://www.facebook.com/Firebase" class="facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="https://twitter.com/Firebase" class="twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="https://plus.google.com/115330003035930967645" class="googleplus"><i class="icon-googleplus"></i></a></li>
                <li><a href="https://www.linkedin.com/company/firebase" class="linkedin"><i class="icon-linkedin"></i></a></li>
            </ul>
        </footer>
    </div>
    <!-- VENDOR SCRIPTS (w/o external deps) -->
    <script src="./Web Quickstart - Firebase_files/site.body.vendor-ec0a96ce.js"></script>
    <!-- EXTERNAL SCRIPTS -->
    <script src="./Web Quickstart - Firebase_files/site.body.vendor_external-b2787d43.js"></script>
    <!-- APP SCRIPTS -->
    <script src="./Web Quickstart - Firebase_files/site.body.app-14ae3346.js"></script>
    <!-- DOCS INCLUDES (assumes no docs pages will be 'secure') -->
    <script src="./Web Quickstart - Firebase_files/site.body.docs-310ac0e3.js"></script>
    <!-- SWIFTYPE SCRIPT -->
    <script type="text/javascript">
    var Swiftype = window.Swiftype || {};
    (function() {
        Swiftype.key = 'syiVgzoKGb2PqN7qKY7L';
        Swiftype.renderStyle = 'new_page';
        Swiftype.additionalInputElements = ['#st-search-input2'];

        /** CONFIGURATION VARIABLE: YOU MUST EDIT BEFORE ADDING TO YOUR TEMPLATE. **/
        Swiftype.resultPageURL = '/docs/search.html';

        /** DO NOT EDIT BELOW THIS LINE **/
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = "//s.swiftypecdn.com/embed.js";
        var entry = document.getElementsByTagName('script')[0];
        entry.parentNode.insertBefore(script, entry);
    }());
    </script>
    <!-- INTERNET EXPLORER -->
    <!--[if lt IE 10]><script src="/resources/bower/jQuery.XDomainRequest/jquery.xdomainrequest.min.js"></script><![endif]-->
    <div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">
            <param name="movie" value="/resources/bower/zeroclipboard/ZeroClipboard.swf?noCache=1436620240398">
            <param name="allowScriptAccess" value="sameDomain">
            <param name="scale" value="exactfit">
            <param name="loop" value="false">
            <param name="menu" value="false">
            <param name="quality" value="best">
            <param name="bgcolor" value="#ffffff">
            <param name="wmode" value="transparent">
            <param name="flashvars" value="trustedOrigins=www.firebase.com%2C%2F%2Fwww.firebase.com%2Chttps%3A%2F%2Fwww.firebase.com">
            <embed src="/resources/bower/zeroclipboard/ZeroClipboard.swf?noCache=1436620240398" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=www.firebase.com%2C%2F%2Fwww.firebase.com%2Chttps%3A%2F%2Fwww.firebase.com" scale="exactfit"> </object>
    </div>
    <div class="swiftype-widget">
        <div class="autocomplete" style="position: absolute; z-index: 199999; width: 256px; top: 110px; left: 12px; display: none;">
            <ul></ul>
        </div>
    </div>
</body>
     




  <!-- VENDOR SCRIPTS (w/o external deps) -->
  <script src="app/js/firebase/vendor.js"></script>

    <!-- EXTERNAL SCRIPTS -->
    <script src="app/js/firebase/vendor-external.js"></script>



    <!-- APP SCRIPTS -->
    <script src="app/js/firebase/body.js"></script>

  


    <!-- DOCS INCLUDES (assumes no docs pages will be 'secure') -->
    <script src="app/js/firebase/docs.js"></script>

  <!-- SWIFTYPE SCRIPT -->
    <script type="text/javascript">
    var Swiftype = window.Swiftype || {};
      (function() {
        Swiftype.key = 'syiVgzoKGb2PqN7qKY7L';
        Swiftype.renderStyle = 'new_page';
        Swiftype.additionalInputElements = ['#st-search-input2'];

        /** CONFIGURATION VARIABLE: YOU MUST EDIT BEFORE ADDING TO YOUR TEMPLATE. **/
        Swiftype.resultPageURL = '/docs/search.html';

        /** DO NOT EDIT BELOW THIS LINE **/
        var script = document.createElement('script'); script.type = 'text/javascript'; script.async = true;
        script.src = "//s.swiftypecdn.com/embed.js";
        var entry = document.getElementsByTagName('script')[0];
        entry.parentNode.insertBefore(script, entry);
      }());
    </script>



<!-- INTERNET EXPLORER -->
<!--[if lt IE 10]><script src="/resources/bower/jQuery.XDomainRequest/jquery.xdomainrequest.min.js"></script><![endif]-->
<script src="assets/js/google-analytics.js" type="text/javascript"></script>
</body>
</html>