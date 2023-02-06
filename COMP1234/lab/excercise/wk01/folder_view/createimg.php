<?php
if(!isset($_GET['time']))
 exit;
$im = imagecreate(200, 30);
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);
imagestring($im, 5, 0, 0, date('F j, Y, g:i a',$_GET['time']), $textcolor);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
exit;
