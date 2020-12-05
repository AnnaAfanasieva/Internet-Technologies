<?php

$sum=file_get_contents("sum.txt");
$sum=0;
file_put_contents("sum.txt", $sum);

$contfile = file("Table.txt");
$contfile = "";
file_put_contents("Table.txt", $contfile);
include("index.php");

?>