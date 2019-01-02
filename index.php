<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interview page</title>
</head>
<body>

<pre>
    1. Пример формы для отправки файла:
</pre>
<form action='script1.php' method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile"> <br>
    <input type="submit" value="Загрузить">
</form>

<pre>
    2. Пусть имеем HTML-форму, которая содержит одно поле ввода text и одно
    поле ввода textarea. Требуется создать для данной HTML-формы скрипт-об-
    работчик script2.php, который заносит построчно в файл data.txt данные. В
    итоге структура получаемого файла data.txt должна быть следующая:
    text1
    text2
    text3
    text4
    где столбцы text1 и text3 относятся к полю text, а text2 и text4 к полю textarea.
    После того, как обработчик script2.php поместит данные в файл, он должен
    возвратить пользователя обратно в index.html.</pre>

<form action="script2.php" method="post">
    <p>Введите имя:</p>
    <p><input type="text" name="name"></p>
    <p>Введите Ваше сообщение:</p>
    <p><textarea rows="5" cols="45" name="message"></textarea></p>
    <input type="submit" value="Отправить">
</form>

<pre>
    3. Используя конструкцию switch, написать функцию foo, принимающую
    одно число в качестве аргумента. Если это число равно 2, функция должна
    вывести слово “Двойка”, если 3 – “Тройка”, в остальных случаях – “Не 2 и не 3”.</pre>
<form action="script3.php" method="post">
    <input type="text" name="number">
    <br>
    <input type="submit" name="btn_number">
</form>

<pre>
    4.Дан массив $arr = array(3,8,15,25,16,11,10,5,7,30).
    Вывести циклом индексы тех его элементов, которые делятся на 5.
</pre>
<?php require_once ('script4.php'); ?>

<pre>
    5. Написать программу, которая выводит простые числа, т.е.
    делящиеся только на себя и на 1.
</pre>
<?php require_once ('script5.php'); ?>

<pre>
    6. Напиши программу-цензор, которая бы заменяла вводимые
    пользователем в форму слова “fuck”, “idiot” и “bitch” на
    “f**k”, “id**t” и “bi**h”.
</pre>
<form method="post" action="script6.php">
    <textarea name="user_input" rows="6" cols="30"></textarea>
    <input type="submit" name="btn_checktext" value="Проверить текст">
</form>

</body>
</html>