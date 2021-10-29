<?php
header('content-type: image/jpeg');

$image = imagecreatefromjpeg('../images/logo.jpg');
$color = imagecolorallocate($image , 0 , 0, 0);
$font = 'STENCIL.ttf';
$text = 'Arslan';
imagettftext($image, 20 , 20 ,5 , 100,  $color, $font,$text);
imagejpeg($image, 'images/newtt.jpeg');
imagejpeg($image);
imagedestroy($image);