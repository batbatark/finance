<?php
require 'inc/header.php';
$i = 1;
//while ($i <= 100) {
//    echo $i++ . ' ';
//}

do {
    echo $i . ' ';
    $i += 2;
} while ($i <= 100);

require 'inc/footer.php';