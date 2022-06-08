<!doctype html>
<html class="no-js" lang="en">
<head>
<title>Simpler</title>
<meta charset="utf-8">
{{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <li><a href="/text">TEXT</a></li>
      <li class="current-menu-item"><a href="/speech">SPEECH</a></li>
      <li><a href="/image">IMAGE</a></li>
      <li><a href="/video">VIDEO</a></li>
    </ul>
    <!-- ends nav -->
    <!-- comboNav -->
    <select id="comboNav">
      <option value="/" >HOME</option>
      <option value="/text" >TEXT</option>
      <option value="/speech" selected="selected">SPEECH</option>
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
          {{-- <li> <img src="img/slides/01.png" alt=""> </li> --}}
          <li> <img src="img/slides/02.png" alt=""> </li>
          {{-- <li> <img src="img/slides/03.png" alt=""> </li> --}}
        </ul>
      </div>
      <!-- ENDS slider -->
      <div class="home-slider-clearfix "></div>
      <!-- Headline -->
      <div id="headline">
        <h4>Why Speech analysis?</h4>
        <p class="headline-text">Speech sentiment analysis is the process of identifying the positive, negative, and neutral sentiments of a recorded speech. Conducting this type of specific analysis requires the input and guidance of researchers educated in the field of speech sentiment. That is why many organizations have developed proprietary software, created with the input of skilled researchers, that can identify speakers' emotions in an audio file. </p>
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
      <h1 class="home-headline">SPEECH ANALYSIS</h1>
      <!-- thumbs -->
      <div class="clearfix" >

                  <form class="main_form " id="labnol" method="POST" action="SpeechOutput">
                    @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <input class="form-control" placeholder="Input will be appear here" type="text" name="Message" id="transcript" cols="120" style="max-width:95%;">
                        </div>
                        <div class="col-sm-12" style="margin-top: 20px">
                           <label class="button" onclick="startDictation()"><span>  </span><i class="fa fa-microphone" style="color: red"></i> Start </label>
                        </div>
                     </div>
                  </form>

            <br>

            <br>

                    <form class="main_form" action="UploadOutput" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-6 col-md-6 col-lg-6 " style="margin : auto; text-align:center">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 " style="margin-top: 20px">
                                <button class="upload_btn" type="submit" ><i class="fa fa-upload" style="font-size:24px"></i></button>
                            </div>

                        </div>
                    </form>

                    <br>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="text-center">
                            <h2>Output</h2>
                            <h3>{{ $message }}</h3>

                            <audio controls>
                                <source src="Audio_input/img.wav" type="audio/wav">
                            </audio>
                        </div>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

      </div>
      <!-- ENDS thumbs -->
      <a href="/speech" class="theme-link-button">Got to top</a> </div>
    <div id="fold"></div>
  </div>
</div>
<!-- ENDS MAIN -->
<footer>
  <div class="wrapper clearfix">
    <div class="footer-bottom">
      <div class="left">&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a></div>
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

<script>
    function startDictation() {
      if (window.hasOwnProperty('webkitSpeechRecognition')) {
        var recognition = new webkitSpeechRecognition();

        recognition.continuous = false;
        recognition.interimResults = false;

        recognition.lang = 'en-UK';
        recognition.start();

        recognition.onresult = function (e) {
          document.getElementById('transcript').value = e.results[0][0].transcript;
          recognition.stop();
          document.getElementById('labnol').submit();
        };

        recognition.onerror = function (e) {
          recognition.stop();
        };
      }
    }
  </script>

</body>
</html>
