<?php

$name = $_POST['name'];
$msg = $_POST['message'];
$filename = 'files/data.txt';
$file = fopen ($filename, 'a+');
fwrite($file, 'Name: ' . $name . "\r\n" . 'Post message: ' . $msg . "\r\n");
fclose ($file);
header('Location: index.php');