<!DOCTYPE html>
<html>

<head>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/sp_out.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Movie recommendation-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <style>
        .bs-example {
            margin: 20px;
        }

        .modal-content iframe {
            margin: 0 auto;
            display: block;
        }
    </style>
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

    <!-- Movie recommendation-->

    <title>Sentiment analysis</title>
</head>

<body>


    <div class="main">
        <div class="container">

            <h2>Output</h2>
            <hr id="hr">

            <div class='res1'>
                @if(strlen($result)>0)
                <h3>{{$result}}</h3>


                <h4>Songs picked based on your emotion:</h4>

                <div>

                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[0]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[1]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[2]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[3]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[4]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>


                </div>

                @endif
            </div>


            <div class="res2">
                <div class="output">
                @if(count($result7)>0)
                @foreach ($result7 as $k => $value)
                <div class="grid-item">{{$k}}=>{{$value}}%</div>
                @endforeach
            </div>
                <h2>Songs picked based on your emotion :</h2>

                <div class="song">

                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[0]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[1]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[2]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[3]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$links[4]}}?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <br>


                </div>

                @endif

                <div>
                    <center>
                        </h1>
                        <h3>
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
                                            <iframe id="Geeks3" height="350" width="450" allowfullscreen="allowfullscreen" allow="autoplay" src="https://www.youtube.com/embed/{{$videoId}}?muted=1&controls=1"></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>

            </div>


            {{-- @if($message = Session::get('message'))
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h3>Analyzed Emotion</h3>

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
        @endif --}}


    </div>

    </div>

</body>

</html>
