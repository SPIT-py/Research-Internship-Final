<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-top: 200px">
<style>
    *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;

}
body{
      background-color: greenyellow
    background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat;
    background-image: linear-gradient(to top, rgb(255, 255, 255) 10%, rgba(42, 133, 141, 0.4) 90%);

}
h1{
    margin-top: 50px ;
    margin-bottom: 50px;
    background-color: rgb(179, 176, 237);
    width: 100%;
    border-radius: 10px;
    margin-left: 50px;
    margin-right:auto;
    outline: none;
    font-size: 30px;
    padding: 7px;
    text-align: center;

}
</style>
<?php
   // echo $randomImg;
    $randomNo=rand(1,13);
    // echo $randomNo;
?>
<h1> Meme Based on Your Emotion!!</h1>
<?php
switch($randomNo):
case 1: ?>
   <img src="memes/1.jpg" alt="" length=600 width=500>
<?php break; ?>

<?php case 2: ?>
    <img src="memes/2.jpeg" alt="" length=600 width=500>
    <?php break; ?>

<?php case 3: ?>
    <img src="memes/3.jpg" alt="" length=600 width=500>
    <?php break; ?>

<?php case 4: ?>
    <img src="memes/4.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 5: ?>
    <img src="memes/5.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 6: ?>
    <img src="memes/6.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 7: ?>
    <img src="memes/7.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 8: ?>
    <img src="memes/8.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 9: ?>
    <img src="memes/9.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 10: ?>
    <img src="memes/10.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 11: ?>
    <img src="memes/11.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 12: ?>
    <img src="memes/12.jpg" alt="" length=600 width=500>
    <?php break; ?>
<?php case 13: ?>
    <img src="memes/13.jpg" alt="" length=600 width=500>
    <?php break; ?>


<?php endswitch; ?>


</body>
</html>
