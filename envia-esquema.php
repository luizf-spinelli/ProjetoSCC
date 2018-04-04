<?php
$i = random_int(1, 99);
$j = random_int(1, 99);
$k = random_int(1, 99);
$p = ($i + $j) * $k;
$n = $_POST["nome"];
$im = imagegrabscreen();
imagepng($im, "./uploads/".$n."_esquema_".$p.".png");
imagedestroy($im);
header('Location: esquema.php');