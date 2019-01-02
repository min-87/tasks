<?php
$limit = 100;
$n = false;
for ($i=2; $i < $limit; $i++){
    for ($j=2; $j < $i; $j++) {
        if (($i % $j) == 0){
            $n = true;
        }
    }
    if ($n == false)
    {
        echo $i . ' ';
    } else {
        $n = false;
    }
}