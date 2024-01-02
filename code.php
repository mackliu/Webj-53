<?php
//啟用session
session_start();

//先判斷是否有表單送過來,同時檢查驗證碼是否正確
if(isset($_GET['ans']) && $_GET['ans']==$_SESSION['ans']){
    //如果驗證碼正確,回傳1
    echo 1;
}else{
    //如果驗證碼錯誤,建立新的驗證碼
    $_SESSION['ans']=rand(1000,9999);

    //回傳新的驗證碼
    echo $_SESSION['ans'];
}