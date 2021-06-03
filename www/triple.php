<?php
require 'inc/header.php';
$shoo = 4;
//if ($shoo > 3) {
//    $urDun = "hojloo";
//} else {
//    $urDun = "hojigdloo";
//}

$urDun = $shoo > 3 ? "hojloo" : "hojigdloo";
echo $urDun;

require 'inc/footer.php';