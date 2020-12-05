<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Калькулятор расхода пользователя</h1>
<?php 
$user=($_POST);
$user=implode(' ', $user);

fopen("DataToIn.txt",'w');
file_put_contents("DataToIn.txt", $user);
//file_put_contents("test.txt", "|");
?>
<h4>Регистрация прошла успешно!</h4>
<form action="index.php">
    <input type="submit" value="Sign in">
</form>
</body>
</html>