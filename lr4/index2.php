<?php 
$user=($_POST);
$user=implode(' ', $user);
//print_r($user);
fopen("test.txt",'r');
$file=file_get_contents('test.txt');
//print_r($file);
$choise=strcmp($user,$file);
if ($choise==0) echo "Пароль верный"; else echo "Пароль неверный";
