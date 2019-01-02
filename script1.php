<?php

$filename = $_FILES['uploadfile']['name'];
$filepath = 'uploads';
$tmp_name = $_FILES['uploadfile']['tmp_name'];
if (move_uploaded_file($tmp_name, "$filepath/$filename")){
    echo 'Загрузка успешна';
}else {
    echo 'Что-то пошло не так';
}