<?php
$dir = "img/partenaires/*.jpg";
$images = glob( $dir );
echo json_encode($images);
?>