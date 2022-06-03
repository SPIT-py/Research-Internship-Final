<!DOCTYPE html>
<html>

<head>
    <title>Image | Video Emotion Analysis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="WebRTC getUserMedia MediaRecorder API">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <link href="{{ URL::asset('css/img.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    <!-- Movie Popup scripts -->
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
    <!-- Movie Popup scripts -->

</head>

<body>
    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 style="font-size: 20px">Upload your Image/Video for Emotion Analysis</h1>
            </div>

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
                        </h1>
                        <h3>
                            "Watch Suggested Movie or trailer Here"
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
                    </center>
                </div>

                <!-- movie recommendation completed-->
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


                <hr>
                <hr>

                <form action="{{ route('video.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="video" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning">Analyze Video</button>
                        </div>

                    </div>
                </form>

                <hr>
                <hr>
                <div id='gUMArea'>

                    <h3 style="font-size: 20px">Record your Video for analysis</h3>
                    <input type="radio" name="media" value="video" checked id='mediaVideo'>Video

                    <button class="btn btn-warning" id='gUMbtn'>Request Permission</button>
                </div>
                <hr>
                <hr>
                <div id='btns'>
                    <button class="btn-start" id='start'>Start Recording</button>
                    <button class="btn-stop" id='stop'>Stop Recording</button>
                </div>
                <div>
                    <ul class="list-unstyled" id='ul' style="width: 200px"></ul>
                </div>

                <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script src="script.js"></script>

            </div>
        </div>
    </div>
</body>


</html>
