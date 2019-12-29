<?php
$dir = "img/logoIcons/*.jpg";
$images = glob( $dir );
echo json_encode($images);
?>