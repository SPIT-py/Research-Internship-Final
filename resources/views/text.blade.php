<!DOCTYPE html>
<html>

<head>

    <!-- CSS only -->
    <link href='css/text.css' rel="stylesheet" type="text/css">

    <title>Sentiment analysis</title>
</head>


</head>

<body>


    <div class="main">
        <div class="container">

            <h2>Text Sentiment Analysis</h2>
            <hr id="hr">
            <form action="text_out" method="POST" class="form">
                @csrf
                <textarea class="form-control" name="inp" placeholder="Enter your text" rows="20"></textarea>
                <hr id="hr">
                <input type="submit" class="label " name="submit" id="submit">
                <hr id="hr">

            </form>
        </div>
    </div>
</body>

</html>
