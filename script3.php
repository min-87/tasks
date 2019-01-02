<?php

$number = $_POST['number'];
if (isset($number)){
    echo 'Вы ввели цифру - ' . $number . '<br>';
}
foo($number);
echo "<br><a href='index.php'> Вернуться назад </a>";
function foo($n){
    switch ($n) {
        case 2:
            echo "Число равно 2";
            break;
        case 3:
            echo "Число равно 3";
            break;
        default:
            echo "Число не равно 2 или 3";
    }
}