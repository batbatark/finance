<?php
require 'inc/header.php';

$name = "saraa";
$name .= "Naraa Boldoo";
//echo $name;

$a = 23;
$b = &$a;

$a = 28;

$b = 15;

echo "$a $b";

require 'inc/footer.php';