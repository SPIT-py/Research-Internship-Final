<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme</title>
</head>
<body style="margin-top: 200px">

<?php
   // echo $randomImg;
    $randomNo=rand(1,13);
    // echo $randomNo;
?>
<h1> Meme Based on Your Emotion!!</h1>
<?php
switch($randomNo):
case 1: ?>
   <img src="memes/1.jpg" alt=""  style="width: 100%;height: auto;">
<?php break; ?>

<?php case 2: ?>
    <img src="memes/2.jpeg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>

<?php case 3: ?>
    <img src="memes/3.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>

<?php case 4: ?>
    <img src="memes/4.jpg" alt=""  style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 5: ?>
    <img src="memes/5.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 6: ?>
    <img src="memes/6.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 7: ?>
    <img src="memes/7.jpg" alt=""  style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 8: ?>
    <img src="memes/8.jpg" alt=""  style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 9: ?>
    <img src="memes/9.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 10: ?>
    <img src="memes/10.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 11: ?>
    <img src="memes/11.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 12: ?>
    <img src="memes/12.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>
<?php case 13: ?>
    <img src="memes/13.jpg" alt="" style="width: 100%;height: auto;">
    <?php break; ?>


<?php endswitch; ?>


</body>
</html>
