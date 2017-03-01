<?php

$str= md5(microtime());

$str= substr($str,0,6);

$img= imagecreate(100,50);
imagecolorat($image,255, 255, 255);

$color= imagechar($image,0, 0, 0);

imagestring($image, 20, 5, 5, $string, $color);
      
 header ('content: image/jpeg');
 imagejpeg($image);
 
 ?>