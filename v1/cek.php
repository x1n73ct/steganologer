<?php

echo "<pre>";
$steganologer = exif_read_data("bunglon.jpg");
print_r($steganologer);
echo "<hr>";
//panggil loger
echo $steganologer['COMMENT'][0];