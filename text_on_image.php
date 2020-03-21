<?php
    error_reporting(0);
    //include this php file
    require('fpdf/fpdf.php');    
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
    //Create Object of FPDF File
    $pdf = new FPDF(); 
    //Add Page to PDF File
    $pdf->AddPage();
    //Provide Correct path and name of the  image 0,0 is a X & Y coordinate and 250 is the size of the image in pdf
    $pdf->Image('photos/'.$name.'.jpg',0,0,210);
    //Output will start downloading at clients Browser
    $pdf->Output();
?>