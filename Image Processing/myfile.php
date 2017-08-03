<?php
//Let's target an image, copy it, rotate it, and save it
$img = magecreatefromjpeg("mypic.jpg");
$imgRotated = imagerotate($img, 45, -1);
imagejpeg($imgRotated, "myPicRotated.jpg", 100);
?>

<img src="mypic.jpg"/><img src="myPicRotated.jpg"/>