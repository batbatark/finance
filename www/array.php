<?php
require 'inc/header.php';

$students = array("Naraa", "Saraa", "Dorj", "Bold");
$months = ["Jan", "Feb", "Mar"];

//echo $months[0];

$phones = array("Naraa" => "99115522", "Saraa" => "88214577", "Dorj" => "99184512", "Bold");
//echo $phones[1];
$name = "Saran";

// echo $name[2];

//echo '<br>';

//arr($students);
//arr($months);
//echo '<br>';

$data = ["naraa" => 32, "saraa" => 21, "bold" => 19, "alimaa" => 25, "urnaa" => 38];

//var_dump(is_array($data));

$numbers = range(18, 221);
//arr($numbers);
//echo '<br>';
//echo sizeof($numbers);
//echo count($numbers);
//echo '<br>';
//echo "$name бол хүн, харин {$data['saraa']} хүн мөн үү?";

extract($data);

//echo $naraa;

//$str = "one two three four";
//$a1 = explode(" ", $str);
//arr($a1);
//$data["gerelee"] = 28;
arr($data);
$students[] = "Gerelee";
arr($students);
echo array_pop($data);
unset($students[2]);

require 'inc/footer.php';