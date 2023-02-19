<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=db25";
$pdo=new PDO($dsn,'root','');

$sql="select * from `tickets`";

$rows=$pdo->query($sql)->fetchAll();

//print_r($rows);

/* foreach($rows as $row){
    echo $row['first_name']. "<br>";
} */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table{
            border-collapse:collapse;
        }

        table td{
            border:1px solid #999;
            text-align: center;
            padding:5px 10px;
        }

        table tr:nth-child(1){
            background:lightgreen;
        }

        table tr:nth-child(even){
            background:yellow;
        }
    </style>
</head>
<body>
    
<table>
    <tr>
        <td>first_name</td>
        <td>last_name</td>
        <td>phone</td>
        <td>password</td>
    </tr>
<?php
foreach($rows as $row){
?>
    <tr>
        <td><?=$row['first_name'];?></td>
        <td><?=$row['last_name'];?></td>
        <td><?=$row['phone'];?></td>
        <td><?=$row['password'];?></td>
    </tr>
<?php
}
?>
</table>
</body>
</html>
