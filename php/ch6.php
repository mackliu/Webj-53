<?php
 session_start();
if(!empty($_POST)){

    if($_SESSION['veri']==$_POST['veri']){
        $dsn="mysql:host=localhost;charset=utf8;dbname=db25";
        $pdo=new PDO($dsn,'root','');
        $sql="INSERT INTO `tickets` (`first_name`,`last_name`,`phone`,`password`)
                   values('{$_POST['first_name']}',
                          '{$_POST['last_name']}',
                          '{$_POST['phone']}',
                          '{$_POST['password']}')";
        $pdo->exec($sql);
    
        header("location:index.php"); 
    }else{
?>
    <script>
        alert("驗證碼錯誤，請重新輸入")
    </script>

<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購票</title>
</head>
<body>
<form action="?" method="post">
  <table>
    <tr>
        <td>first_name：</td>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <td>last_name：</td>
        <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
        <td>Phone：</td>
        <td><input type="text" name="phone"></td>
    </tr>
    <tr>
        <td>password：</td>
        <td><input type="text" name="password"></td>
    </tr>
    <tr>
        <td>Verification：</td>
        <td>
            <?php 
                $_SESSION['veri']=rand(1000,9999);
                echo $_SESSION['veri'];
            ?>
        <input type="text" name="veri"></td>
    </tr>
    <tr>
        <td><input type="submit" value="送出"></td>
        <td></td>
    </tr>
  </table>  
    
    
    
    
    
    

</form>    

</body>
</html>