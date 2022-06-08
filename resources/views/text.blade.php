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
      <li><a href="/">HOME</a></li>
      <li class="current-menu-item"><a href="/text">TEXT</a></li>
      <li><a href="/speech">SPEECH</a></li>
      <li><a href="/image">IMAGE</a></li>
      <li><a href="/video">VIDEO</a></li>
    </ul>
    <!-- ends nav -->
    <!-- comboNav -->
    <select id="comboNav">
      <option value="/" >HOME</option>
      <option value="/text" selected="selected">TEXT</option>
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
          {{-- <li> <img src="img/slides/02.png" alt=""> </li>
          <li> <img src="img/slides/03.png" alt=""> </li> --}}
        </ul>
      </div>
      <!-- ENDS slider -->
      <div class="home-slider-clearfix "></div>
      <!-- Headline -->
      <div id="headline">
        <h4>Why Text analysis?</h4>
        <p class="headline-text">Text analysis (TA) is a machine learning technique used to automatically extract valuable insights from unstructured text data. Companies use text analysis tools to quickly digest online data and documents, and transform them into actionable insights.</p>
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
      <h1 class="home-headline">TEXT ANALYSIS</h1>
      <!-- thumbs -->
      <div class="clearfix" >
      <form action="text_out" method="POST" class="form">
          @csrf
          <textarea class="form-control" name="inp" placeholder="Enter your text" cols="120" style="max-width:95%;" rows="20"></textarea>
          <hr id="hr">
          <div style="text-align:center">
            <input type="submit" class="link-button" name="submit" id="submit">
            </div>
          <hr id="hr">

      </form>
      </div>
      <!-- ENDS thumbs -->
      <a href="/text" class="theme-link-button">Got to top</a> </div>
    <div id="fold"></div>
  </div>
</div>
<!-- ENDS MAIN -->
<footer>
  <div class="wrapper clearfix">
    <div class="footer-bottom">

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
