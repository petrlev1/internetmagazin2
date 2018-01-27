<?php


    $img = imagecreatefromjpeg($img_path);


if ($img) {

    $w = imagesx($img);
    $h = imagesy($img);
    $scale = $px/$w;

    if ($scale < 1) {
        $new_width = floor($scale*$w);
        $new_height = floor($scale*$h);

        $img2 = imagecreatetruecolor($new_width, $new_height);
        

		imagecopyresampled($img2, $img, 0, 0, 0, 0, 
	  			           $new_width, $new_height, $w, $h);

        imagedestroy($img);
        $img = $img2;        
    }    

}

header("Content-type: image/jpeg");
imagejpeg($img);

