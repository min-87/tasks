<?php

$arr = array(3,8,15,25,16,11,10,5,7,30);

echo 'Индексы: ';
foreach ($arr as $key=>$value){
    if ($arr[$key] % 5 == 0){
        echo $key . ' ';
    }
}