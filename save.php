<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=th53j_north";
$pdo=new PDO($dsn,'root','');

$sql="insert into `tickets` (`firstname`,`lastname`,`password`,`phone`) 
            values('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['password']}','{$_POST['phone']}')";
echo $sql;
$pdo->exec($sql);
header("location:home.html");
?>