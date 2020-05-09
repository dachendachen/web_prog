<?php
    
// GD's built-in fonts are numbered from 1 - 5
$font = 4;
// Calculate the appropriate image size
$image_height = 300;
$image_width = 300;
// Create the image
$image = imageCreate($image_width, $image_height);
// Create the colors to use in the image
$back_color = imageColorAllocate($image, 255,255,255);
$text_color = imageColorAllocate($image, 255,0,0);
// black border
$rect_color = imageColorAllocate($image, 255,   0,   0);
// Figure out where to draw the text
// Draw the text
imageString($image, $font, 100,150, "OUT OF STOCK", $text_color);
// Draw a black border
// Send the image to the browser
header('Content-Type: image/png');
imagePNG($image);
imageDestroy($image);
?>

