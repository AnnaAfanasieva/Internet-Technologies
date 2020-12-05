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

$newprod=($_POST);
$newprod=implode('=', $newprod);//Расделили название и цену
$arrprod=explode("=", $newprod);//Массив с продуктом и ценой

$contfile = file("Table.txt");//Записали в массив содержимое файла

$new_prod_num=0;

$sum=file_get_contents("sum.txt");
$sum=$sum+$arrprod[1];
file_put_contents("sum.txt", $sum);

$value=0;
foreach ($contfile as $newproduct) {//Определили ключ новой строки
    $new_prod_num=$new_prod_num+1;
}

$contfile[$new_prod_num] = $newprod; //Добавили в массив для файла
$contfile[$new_prod_num+1] = "<br>"; //Добавили в массив строку

file_put_contents("Table.txt", $contfile);

$contfile[$new_prod_num+2] = "Сумма=".$sum;

foreach ($contfile as $newprod_line => $newproduct) {
    echo $contfile[$newprod_line];
}

?>
<br> <br>
<form action="SignIn.php" name="goback">
    <input type="submit" value="Добавить еще">
</form>
<br> 
<form action="ResToNull.php" name="form">
    <input type="submit" value="Сбросить все и выйти">
</form>


</body>
</html>