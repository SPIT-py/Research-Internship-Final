<!DOCTYPE html>
<html>

<head>
    <title>Image | Video Emotion Analysis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/img.css') }}" rel="stylesheet" type="text/css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;

        }

        body {
            background: linear-gradient(-45deg, #ffaa90, #ffa0ae, #5ad3ff, #74ffdf);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            background-position: 0% 50%;
            background-position: 100% 50%;
            background-position: 100% 50%;
        }


        .container {
            padding: 7px;
            font-size: 15px;
            background-color: rgb(250, 188, 247);
            background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat;
            background-image: linear-gradient(to top, rgb(255, 255, 255) 10%, rgba(93, 42, 141, 0.4) 90%);
            background-position-x: initial;
            background-position-y: initial;
            background-size: initial;
            background-repeat-x: no-repeat;
            background-repeat-y: no-repeat;
            background-attachment: initial;
            background-origin: initial;
            background-clip: initial;
            background-color: initial;
            ;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            margin-top: 100px;
            border-radius: 30px;
            height: 45cm;
            margin-left: 120px;
            margin-right: 100px;
            margin-bottom: 300px;
        }

        h1 {
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: rgb(231, 224, 142);
            width: 60%;
            border-radius: 20px;
            margin-left: 190px;
            outline: none;

            height: 3.4cm;
            padding: 30px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
        }

        .panel-body {
            margin-top: 20px;
            margin-left: 50px;
            margin-right: 50px;

        }

        .form-control {
            height: 3cm;
            padding: 40px;
            margin: 10px;
            background-color: #b5e3ff;
            border-radius: 30px;

        }

        .col-md-6 {
            margin-top: 100px;
            margin-left: 150px;
        }

        h2 {
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);

            background-color: #6ef5b2;
            background-image: linear-gradient(135deg, #439eff 0%, #c4e0e5 100%);
            border-radius: 10px;
            padding: 10px;
            border-color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            font-style: revert;
            font-size: 37px;
            margin-top: 5px;
        }

        h3 {
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);

            background-color: #a7ffd3;
            background-image: linear-gradient(135deg, #d28eff 0%, #c4e0e5 100%);
            border-radius: 10px;
            padding: 10px;
            border-color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            font-style: revert;
            font-size: 37px;
            margin-top: 60px;
        }

        .btn {
            font-size: 26px;
            border-color: black;
            border-radius: 10px;
        }
    </style>
</head>

<body class="body">
    <div class="panel-heading">
        <h1>Image & Video Emotion Analysis</h1>
    </div>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-body">

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <h2>Predicted emotion is: {{ Session::get('emotion') }}</h2>

                <div style="text-align: center"><img src="images/{{ Session::get('image') }}"></div>
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
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    <h2>Upload your Image for Emotion Analysis</h2>
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Analyze Image</button>
                        </div>

                    </div>
                </form>


                <hr>

                <form action="{{ route('video.upload.post') }}" method="POST" enctype="multipart/form-data">
                    <h3>Upload your Video for Emotion Analysis</h3>
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="video" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning">Analyze Video</button>
                        </div>

                    </div>

                    <hr>
                    <div id='gUMArea'>
                        <h3>Record your Video for analysis</h3>
                        <br>
                        <input type="radio" name="media" value="video" checked id='mediaVideo'>Video

                        <button class="btn btn-warning" id='gUMbtn'>Request Permission</button>
                    </div>

                    <hr>
                    <div id='btns'>
                        <button class="btn btn-success">Start Recording</button>
                        <hr>
                        <button class="btn btn-danger">Stop Recording</button>
                    </div>
                </form>
                <hr>
                <div>
                    <ul class="list-unstyled" id='ul'></ul>
                </div>

                <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script src="script.js"></script>
            </div>

        </div>
    </div>

</body>

</html>