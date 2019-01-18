<?php
$mas = scandir("img/small");
$index = 0;

foreach ($mas as $key => $value) {
    if ($key != 0 && $key != 1) {
        $num = (int)mb_substr($value, 4, -4);
        if ($num > $index) {
            $index = $num;
        }            
    }
}

$index++;

$str = (string)$index;

if (strlen($str) < 6) {
    $zeros = "";

    $len = 6 - strlen($str);

    for ($i=0; $i < $len; $i++) { 
        $zeros.="0";
    }

    $index = $zeros.=$str;
}

$fileName = "img_$index.jpg";
$path = "img/big/".$fileName;

$big = "big";
$small = "small";
$widthBig = 667;
$heightBig = 500;
$widthSmall = 301;
$heightSmall = 225;

move_uploaded_file($_FILES["photo"]["tmp_name"], $path);

function reduceImage ($path, $fileName, $size, $width, $height) {
    header('Content-Type: image/jpeg');

    list($width_orig, $height_orig) = getimagesize($path);

    $ratio_orig = $width_orig/$height_orig;

    if ($width/$height > $ratio_orig) { 
        $width = $height*$ratio_orig;
    } else {
        $height = $width/$ratio_orig;
    }

    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($path);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

    header("Location: index.php");

    imagejpeg($image_p,"img/$size/$fileName");
}

reduceImage ($path, $fileName, $big, $widthBig, $heightBig);
reduceImage ($path, $fileName, $small, $widthSmall, $heightSmall);




?>