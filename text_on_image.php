<?php
    error_reporting(0);
    // Output Image
    header('Content-type: image/jpeg');
    // Provide Image Path
    $img = imagecreatefromjpeg('image.jpg');
    // Text Color Of the Image
    $white = imagecolorallocate($img, 255, 255, 255);
    // Text On the image, This can be fetch from the database.
    $txt = "ABC-1234";
    // Google fonts can be include or system fonts can be taken by default
    $font = "C:\Windows\Fonts\arial.ttf"; 
    // Specify the coordinates on the image and size of the image
    imagettftext($img, 40, 0, 300, 300, $white, $font, $txt);
    //Image will display on the browser
    $name = rand();
    imagejpeg($img,"photos/".$name.".jpg");    
    imagedestroy($img);
?>