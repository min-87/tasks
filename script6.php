<?php
$find = array('fuck', 'idiot', 'bitch');
$replace = array('f**k', 'id**t', 'bi**h');
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find, $replace, $user_input);
    echo $user_input_new;
}