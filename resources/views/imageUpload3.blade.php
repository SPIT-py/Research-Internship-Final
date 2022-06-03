<!DOCTYPE html>
<html>
<head>
    <title>Image | Video Emotion Analysis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/img.css') }}" rel="stylesheet" type="text/css" >

</head>

<body class="body">
      <div class="panel-heading"><h1>Image & Video Emotion Analysis</h1></div>
<div class="container">

    <div class="panel panel-primary">


      <div class="panel-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <h2>Predicted emotion is: {{ Session::get('emotion') }}</h2>

        <div style="text-align: center"><img src="images/{{ Session::get('image') }}" ></div>

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
        </form>

      </div>
    </div>
</div>
</body>

</html>
