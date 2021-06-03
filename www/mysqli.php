<?php
require 'inc/header.php';
//phpinfo();

@$con = mysqli_connect('127.0.0.1', 'root', '', 'finance');

if (mysqli_connect_errno()) {
    echo 'холбогдож чадсангүй.' . mysqli_connect_error();

} else {
    echo 'Амжилттай холбогдолоо';
}

$rs = mysqli_query($con, "select * from users");

echo '<br/> Нийт бичлэгийн тоо: ' . mysqli_num_rows($rs);
echo '<br/>';

if (mysqli_error($con)) {
    die('Команд ажиллахад алдаа гарлаа:' . mysqli_error($con));
}
// $row = mysqli_fetch_row($rs);
// arr($row);

// echo '<br/>';
// $row = mysqli_fetch_assoc($rs);
// arr($row);

// //$row = true;
// while ($row = mysqli_fetch_assoc($rs)) {
//     //echo $row['name'];
//     arr($row);
// }
$ins = mysqli_query($con, "insert into users values (,,'Даваа', '88185577')");

mysqli_close($con);
require 'inc/footer.php';