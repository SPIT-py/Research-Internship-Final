<!doctype html>
<html class="no-js" lang="en">
<head>
<title>Research Internship</title>
<meta charset="utf-8">
<meta name="keywords" content="WebRTC getUserMedia MediaRecorder API">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <!-- Movie Popup scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
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
<script>
    $(document).ready(function() {
        var url = $("#Geeks3").attr('src');
        $("#Geeks2").on('hide.bs.modal', function() {
            $("#Geeks3").attr('src', '');
        });
        $("#Geeks2").on('show.bs.modal', function() {
            $("#Geeks3").attr('src', url);
        });
    });
</script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="script.js"></script>
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
      <li><a href="/speech">SPEECH</a></li>
      <li class="current-menu-item"><a href="/image">IMAGE</a></li>
      <li><a href="/video">VIDEO</a></li>
    </ul>
    <!-- ends nav -->
    <!-- comboNav -->
    <select id="comboNav">
      <option value="/" >HOME</option>
      <option value="/text" >TEXT</option>
      <option value="/speech">SPEECH</option>
      <option value="/image" selected="selected">IMAGE</option>
      <option value="/video">VIDEO</option>
    </select>
    <!-- comboNav -->
    <!-- slider holder -->
    <div class="clearfix"></div>
    <div id="slider-holder" class="clearfix">
      <!-- slider -->
      <div class="flexslider home-slider">
        <ul class="slides">
          {{-- <li> <img src="img/slides/01.png" alt=""> </li>
          <li> <img src="img/slides/02.png" alt=""> </li> --}}
          <li> <img src="img/slides/03.png" alt=""> </li>
        </ul>
      </div>
      <!-- ENDS slider -->
      <div class="home-slider-clearfix "></div>
      <!-- Headline -->
      <div id="headline">
        <h4>Why Image analysis?</h4>
        <p class="headline-text">Image analysis or imagery analysis is the extraction of meaningful information from images; mainly from digital images by means of digital image processing techniques.[1] Image analysis tasks can be as simple as reading bar coded tags or as sophisticated as identifying a person from their face.</p>
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
      <h1 class="home-headline">IMAGE ANALYSIS</h1>
      <!-- thumbs -->
      <div class="clearfix" >

        <div class="panel-body">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            <h2>Predicted emotion is: {{ Session::get('emotion') }}</h2>
            <!-- movie recommendation-->
            <div>
                <center>

                    <br>
                    <br>
                    <div>
                        <center>
                            </h1>
                            <h3 style="margin: 3px">
                                "Watch Suggested Movie Here"
                            </h3>
                            <div class="bs-example">
                                <a href="#Geeks2" class="btn btn-lg btn-primary" data-toggle="modal">Launch Movie</a>

                                <div id="Geeks2" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                            </div>

                                            <div class="modal-body">
                                                <iframe id="Geeks3" height="350" width="450" allowfullscreen="allowfullscreen" allow="autoplay" src="https://www.youtube.com/embed/{{Session::get('videoId')}}?muted=1&controls=1"></iframe>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h4 style="font-size: 35px, font-weight: 900">
                                    "See Suggested meme based on your Emotion"
                                </h4>

                            <form action="image_inp" method="POST" class="form" >
                                    @csrf

                                    <button type="submit" class="btn btn-lg btn-primary " name="submit" id="submit"> Meme</button>

                                </form>
                            </div>
                            <br>
                            <div>
                                <h4 style="font-size: 35px, font-weight: 900">
                                    "See Suggested joke based on your Emotion!"
                                </h4>
                                <form action="result" method="POST" class="form" >
                                    @csrf


                                    <button type="submit" class="btn btn-lg btn-primary " name="submit" id="submit"> Joke</button>

                                </form>
                            </div>
                            <br>

                </center>
            </div>

            <!-- movie recommendation-->
            <div style="text-align: center"><img class="image" src="images/{{ Session::get('image') }}"></div>

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

            <form class="main_form" action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data" style="width:100%;margin:-3px; inset">
                @csrf
                <div class="row" style="text-align: center">

                    <div class="col-sm-6 col-md-6 col-lg-6" style="margin:auto">
                        <input type="file" name="image" class="form-control" style="width:100%;margin:-3px;">
                    </div>

                    <div class="col-md-6" style="margin-top: 10px">
                        <button type="submit" class="link-button">Analyze Image</button>
                    </div>

                </div>
            </form>
        </div>
      </div>
    </div>
      <!-- ENDS thumbs -->
      <a href="/image" class="theme-link-button">Got to top</a> </div>
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

