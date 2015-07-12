<?php
/**
 * PHP GD
 * create a simple image with GD library
 * 
 */
//setting the image header in order to proper display the image
header("Content-Type: image/jpeg");
//try to create an image
$im = @imagecreate(800, 600)
    or die("Cannot Initialize new GD image stream");
//set the background color of the image
$background_color = imagecolorallocate($im, 0xFF, 0xCC, 0xDD);
//set the color for the text
$text_color = imagecolorallocate($im, 133, 14, 91);
//adf the string to the image
//add line
$y1 = 0;$y2 = 600;
for($i = 40; $i < 800; $i+=40){
$x1 = $i;
$x2 = $i;
$color = imagecolorallocate($im, 51,0,0);
imageline($im , $x1 , $y1,$x2 ,$y2 ,$color);
}
$x1 = 0;
$x2 = 800;
for($i = 40; $i < 600; $i+=40){
  $y1 = $i;
  $y2= $i;
  $color = imagecolorallocate($im,51,0,0);
  imageline($im, $x1, $y1, $x2, $y2, $color);
}
imagestring($im, 5, 300, 300,  "I'm a pretty picture:))", $text_color);
//outputs the image as png
imagepng($im);
//frees any memory associated with the image 
imagedestroy($im);
?>