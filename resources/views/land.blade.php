<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/land.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>
    <h2>Recommendation based on emotion</h2>
    <div class="container">
        <div class="button">
            <button class="btn" type="submit" onclick="location.href='{{ url('text') }}'">Text </button>
            <button class="btn" type="submit" onclick="location.href='{{ url('speech') }}'">speech</button>
            <button class="btn" type="submit" onclick="location.href='{{ url('image') }}'">image</button>
            <button class="btn" type="submit" onclick="location.href='{{ url('video') }}'">video</button>
        </div>
    </div>
</body>

</html>
