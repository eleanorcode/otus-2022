<?php
require_once 'resize.php';

function gallery()
{
    $dir = './public/img';
    $files = array_diff(scandir($dir), array('..', '.'));

    foreach ($files as $value) {
        $file = "./public/img/$value";
        $image = resizeImage($file, 100, 100);

        imagejpeg($image, "./public/mini/$value");

        echo '<a href="' . $file . '" target = "_blank"><img src="' . './mini/' . $value . '"></a>';

    }
}
