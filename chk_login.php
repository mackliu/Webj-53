<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=db01";
$pdo=new PDO($dsn,'root','');

$sql="select * from `users` where `acc`='{$_POST['acc']}' && `pw`='{$_POST['pw']}'";
//echo $sql;
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//print_r($user);

if(!empty($user) && $_POST['acc']==$user['acc'] && $_POST['pw']==$user['pw']){
  session_start();
  $_SESSION['login']=$user['acc'];
  header("location:index.php");
}else{
  header("location:login.php?error=帳號或密碼錯誤");
}
