<!doctype html>
<html class="no-js" lang="en">
<head>
<title>Research Internship</title>
<meta charset="utf-8">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link rel="stylesheet" media="all" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- JS -->
<script src="js/jquery-1.6.4.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/custom.js"></script>
<script src="js/tabs.js"></script>
<!-- Tweet -->
<link rel="stylesheet" href="css/jquery.tweet.css" media="all">
<!-- ENDS Tweet -->
<!-- superfish -->
<link rel="stylesheet" media="screen" href="css/superfish.css">
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<!-- prettyPhoto -->
<script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" media="screen">
<!-- ENDS prettyPhoto -->
<!-- poshytip -->
<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css">
<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css">
<script src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
<!-- ENDS poshytip -->
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
<!-- Flex Slider -->
<link rel="stylesheet" href="css/flexslider.css">
<script src="js/jquery.flexslider-min.js"></script>
<!-- ENDS Flex Slider -->
<!-- Masonry -->
<script src="js/masonry.min.js"></script>
<script src="js/imagesloaded.js"></script>
<!-- ENDS Masonry -->
<!-- Less framework -->
<link rel="stylesheet" media="all" href="css/lessframework.css">
<!-- modernizr -->
<script src="js/modernizr.js"></script>
<!-- SKIN -->
<link rel="stylesheet" media="all" href="css/skin.css">
</head>
<body>
<header>
  <div class="wrapper clearfix">
    {{-- <div id="logo"> <a href="index.html"><img src="img/logo.png" alt=""></a> </div> --}}
    <!-- nav -->
    <ul id="nav" class="sf-menu">
      <li class="current-menu-item"><a href="/">HOME</a></li>
      <li><a href="/text">TEXT</a></li>
      <li><a href="/speech">SPEECH</a></li>
      <li><a href="/image">IMAGE</a></li>
      <li><a href="/video">VIDEO</a></li>
    </ul>
    <!-- ends nav -->
    <!-- comboNav -->
    <select id="comboNav">
      <option value="/" selected="selected">HOME</option>
      <option value="/text">TEXT</option>
      <option value="/speech">SPEECH</option>
      <option value="/image">IMAGE</option>
      <option value="/video">VIDEO</option>
    </select>
    <!-- comboNav -->
    <!-- slider holder -->
    <div class="clearfix"></div>
    <div id="slider-holder" class="clearfix">
      <!-- slider -->
      <div class="flexslider home-slider">
        <ul class="slides">
          <li> <img src="img/slides/01.png" alt=""> </li>
          <li> <img src="img/slides/02.png" alt=""> </li>
          <li> <img src="img/slides/03.png" alt=""> </li>
        </ul>
      </div>
      <!-- ENDS slider -->
      <div class="home-slider-clearfix "></div>
      <!-- Headline -->
      <div id="headline">
        <h4>Deep Learning Applications</h4>
        <p class="headline-text">Deep learning is a subset of machine learning, which is essentially a neural network with three or more layers. These neural networks attempt to simulate the behavior of the human brain—albeit far from matching its ability—allowing it to “learn” from large amounts of data.</p>
        {{-- <p class="headline-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#" class="read-more">read more</a></p> --}}
      </div>
      <!-- ENDS headline -->
    </div>
    <!-- ENDS slider holder -->
  </div>
</header>
<!-- MAIN -->
<div id="main">
  <div class="wrapper clearfix">
    <!-- home-block -->
    <div class="home-block clearfix" >
      <h1 class="home-headline">SELECT FROM BELOW</h1>
      <!-- thumbs -->
      <div class="clearfix" >
        <figure> <a href="/text"  class="thumb"><img src="img/dummies/featured-1.png" alt=""></a>
          <figcaption> <strong>Text Analysis</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure>
        <figure> <a href="/speech"  class="thumb"><img src="img/dummies/featured-2.jpeg" alt=""></a>
          <figcaption> <strong>Speech Analysis</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure>
        <figure> <a href="/image"  class="thumb"><img src="img/dummies/featured-3.jpg" alt=""></a>
          <figcaption> <strong>Image Analysis</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure>
        <figure> <a href="/video"  class="thumb"><img src="img/dummies/featured-4.png" alt=""></a>
          <figcaption> <strong>Video Analysis</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure>
        {{-- <figure> <a href="single.html"  class="thumb"><img src="img/dummies/featured-3.jpg" alt=""></a>
          <figcaption> <strong>Pellentesque habitant morbi</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure>
        <figure> <a href="single.html"  class="thumb"><img src="img/dummies/featured-2.jpg" alt=""></a>
          <figcaption> <strong>Pellentesque habitant morbi</strong> <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span> </figcaption>
        </figure> --}}
      </div>
      <!-- ENDS thumbs -->
      <a href="#" class="theme-link-button">Got to top</a> </div>
    <!-- ENDS home-block -->
    <!-- additional blocks -->
    {{-- <div class="home-add clearfix">
      <!-- left -->
      <div class="left-home-block home-posts">
        <h4 class="heading">FROM THE BLOG</h4>
        <article class="format-standard">
          <div class="entry-date">
            <div class="number">23</div>
            <div class="month">JAN</div>
            <div class="year">2011</div>
            <em></em></div>
          <div  class="post-heading">
            <h4><a href="single.html">Lorem ipsum dolor </a></h4>
          </div>
          <div class="excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. </div>
        </article>
        <article class="format-standard">
          <div class="entry-date">
            <div class="number">23</div>
            <div class="month">JAN</div>
            <div class="year">2011</div>
            <em></em></div>
          <div  class="post-heading">
            <h4><a href="single.html">Lorem ipsum dolor </a></h4>
          </div>
          <div class="excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. </div>
        </article>
        <article class="format-standard">
          <div class="entry-date">
            <div class="number">23</div>
            <div class="month">JAN</div>
            <div class="year">2011</div>
            <em></em></div>
          <div  class="post-heading">
            <h4><a href="single.html">Lorem ipsum dolor </a></h4>
          </div>
          <div class="excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. </div>
        </article>
        <article class="format-standard">
          <div class="entry-date">
            <div class="number">23</div>
            <div class="month">JAN</div>
            <div class="year">2011</div>
            <em></em></div>
          <div  class="post-heading">
            <h4><a href="single.html">Lorem ipsum dolor </a></h4>
          </div>
          <div class="excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. </div>
        </article>
      </div>
      <!-- ENDS left -->
      <!-- right -->
      <div class="right-home-block">
        <h4 class="heading">CLIENTS</h4>
        <!-- logos -->
        <ul class="clients-logos clearfix">
          <li><a href="#"><img src="img/dummies/logo1.png" alt=""></a></li>
          <li><a href="#"><img src="img/dummies/logo2.png" alt=""></a></li>
          <li><a href="#"><img src="img/dummies/logo3.png" alt=""></a></li>
          <li><a href="#"><img src="img/dummies/logo4.png" alt=""></a></li>
          <li><a href="#"><img src="img/dummies/logo5.png" alt=""></a></li>
          <li><a href="#"><img src="img/dummies/logo6.png" alt=""></a></li>
        </ul>
        <!-- ENDS logos -->
        <h4 class="heading">TESTIMONIALS</h4>
        <!-- testimonial slider -->
        <div class="flexslider testimonial-slider">
          <ul class="slides">
            <li> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
              <div class="client-name">- Luis Zuno, Webdesigner</div>
            </li>
            <li> at vitae, ultricies eget, tempor sit amet, ante. Donec
              <div class="client-name">- Luis Zuno, Webdesigner</div>
            </li>
            <li> Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
              <div class="client-name">- Luis Zuno, Webdesigner</div>
            </li>
          </ul>
        </div>
        <!-- ENDS testimonial slider -->
      </div>
      <!-- ENDS right -->
    </div> --}}
    <!-- ENDS additional blocks -->
    <!-- Fold image -->
    <div id="fold"></div>
  </div>
</div>
<!-- ENDS MAIN -->
<footer>
  <div class="wrapper clearfix">
    <!-- widgets -->
    {{-- <ul  class="widget-cols clearfix">
      <li class="first-col">
        <div class="widget-block">
          <h4>RECENT POSTS</h4>
          <div class="recent-post clearfix"> <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span> </div>
          </div>
          <div class="recent-post clearfix"> <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span> </div>
          </div>
          <div class="recent-post clearfix"> <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span> </div>
          </div>
        </div>
      </li>
      <li class="second-col">
        <div class="widget-block">
          <h4>FREE TEMPLATES &amp; THEMES</h4>
          <p>Visit <a href="#">our site</a> and browse the selection of well-made FREE Templates and WordPress Themes.</p>
        </div>
      </li>
      <li class="third-col">
        <div class="widget-block">
          <div id="tweets" class="footer-col tweet">
            <h4>TWITTER WIDGET</h4>
            <ul class="tweet_list">
              <li class="tweet_first tweet_odd"><span class="tweet_time"><a href="#">about 11 hours ago</a></span> <span class="tweet_text">Pellentesque habitant morbi tristique <a href="#">domain.com</a></span></li>
              <li class="tweet_even"><span class="tweet_time"><a href="#">about 19 hours ago</a></span> <span class="tweet_text">Pellentesque habitant morbi tristique senectus et netus et malesuada - <a href="#">domain.com</a></span></li>
              <li class="tweet_odd"><span class="tweet_time"><a href="#">about 21 hours ago</a></span> <span class="tweet_text">Pellentesque habitant morbi tristique senectus <a href="#">domain.com</a></span></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="fourth-col">
        <div class="widget-block">
          <h4>FREE TEMPLATES &amp; THEMES</h4>
          <p>Visit <a href="#">our site</a> and browse the selection of well-made FREE Templates and WordPress Themes.</p>
        </div>
      </li>
    </ul> --}}
    <!-- ENDS widgets -->
    <!-- bottom -->
    <div class="footer-bottom">
      <div class="left">&copy; Copyright 2022 <a href="#">Research Internship SPIT</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a></div>
      <div class="right">
        <ul id="social-bar">
          <li><a href="#" title="Become a fan" class="poshytip"><img src="img/social/facebook.png" alt=""></a></li>
          <li><a href="#" title="Follow my tweets" class="poshytip"><img src="img/social/twitter.png" alt=""></a></li>
          <li><a href="#" title="Add to the circle" class="poshytip"><img src="img/social/plus.png" alt=""></a></li>
        </ul>
      </div>
    </div>
    <!-- ENDS bottom -->
  </div>
</footer>
</body>
</html>
