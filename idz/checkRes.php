<?php 
$user=($_POST);
$user=implode(' ', $user);

fopen("DataToIn.txt",'r');
$file=file_get_contents('DataToIn.txt');

$choise=strcmp($user,$file);
if ($choise!=0)  {echo "Пароль неверный"; die();} 
else {include ("SignIn.php");}
?>