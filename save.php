<?php
//啟用session
session_start();

//連接資料庫
$dsn="mysql:host=localhost;charset=utf8;dbname=th53j_north";

//建立PDO物件
$pdo=new PDO($dsn,'root','');

//撰寫SQL語法，新增資料，將表單傳入的資料放在SQL語法中
$sql="insert into `tickets` (`firstname`,`lastname`,`password`,`phone`) 
            values('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['password']}','{$_POST['phone']}')";
//echo $sql;

//執行SQL語法，新增資料到資料庫
$pdo->exec($sql);

//回到首頁
header("location:home.html");
?>