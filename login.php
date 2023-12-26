<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
</head>
<body>
<form action="chk_login.php" method="post">
  <?php
  if(isset($_GET['error'])){
    echo "<span style='color:red'>";
    echo $_GET['error'];
    echo "</span>";
  }

  ?>
<table>
  <tr>
    <td>帳號:</td>
    <td><input type="text" name="acc" id=""></td>
  </tr>
  <tr>
    <td>密碼:</td>
    <td><input type="password" name="pw" id=""></td>
  </tr>
</table>

<div>
  <input type="submit" value="登入">
</div>


</form>  
</body>
</html>