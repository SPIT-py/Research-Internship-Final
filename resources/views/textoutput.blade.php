<!DOCTYPE html>
<html class="page">

<head>

    <!-- CSS only -->
    <link href='css/text.css' rel="stylesheet" type="text/css">

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

    <title>Sentiment analysis</title>
</head>

<body>
    <div class="main">
        <div class="cont">

            <h2>Output Text Emotion Analysis</h2>
            <div class="textop">
                <h3>The Analyzed Emotions of the text: </h3>
                <div>
                    @foreach ($result7 as $k => $value)
                    <div>{{$k}}=>{{$value}}%</div>
                    @endforeach
                </div>
            </div>
            <div>
                <h4 style="font-size: 35px, font-weight: 900">
                    "See Suggested meme based on your Emotion"
                </h4>
            <form action="image_inp" method="POST" class="form" >
                    @csrf

                    <button type="submit" class="label " name="submit" id="submit" style="font-size: 25px;margin-top: 10px; margin-bottom: 30px"> Meme<button>

                </form>
            </div>
            <div>
                <h4 style="font-size: 35px, font-weight: 900">
                    "See Suggested joke based on your Emotion!"
                </h4>
                <form action="result" method="POST" class="form" >
                    @csrf

                    <button type="submit" class="label " name="submit" id="submit" style="font-size: 25px;margin-top: 20px; margin-bottom: 30px">Joke<button>

                </form>
            </div>
            <div>
                <h4 style="font-size: 35px, font-weight: 900">
                    "Wanna Read a Comic..?"
                </h4>
                <form action="result1" method="POST" class="form" >
                    @csrf

                    <button type="submit" class="label " name="submit" id="submit" style="font-size: 25px;margin-top: 20px; margin-bottom: 30px">Comic<button>

                </form>
            </div>
            <div>
                <center>
                    </h1>
                    <h3 style="font-size: 25px, font-weight: 900">
                        "Watch Suggested Movie Here Based on Your Emotion!!"
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

    </div>

</body>

</html>
