<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!DOCTYPE html>
  <link rel="stylesheet" href="./bootstrap.css">
  <html lang="en">
  <title>Document</title>
    <meta charset="UTF-8">
<body>
</head>
session_start();
<?php
if(isset($_SESSION['login'])){
?>
歡迎 <?=$_SESSION['login'];?>&nbsp;&nbsp;
<a href="logout.php">登出</a>
<?php
}else{
?>
  <a href="login.php">登入</a>
<?php

}?>

<ol class="carousel-indicators">
<div id="slider" class="carousel slide" data-ride="carousel">
    
    <li data-target="#slider" data-slide-to="1"></li>

    <li data-target="#slider" data-slide-to="0" class="active"></li>    <li data-target="#slider" data-slide-to="2"></li>

    <li data-target="#slider" data-slide-to="3"></li>
    <li data-target="#slider" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" style="width:100%;height:30vh;">
    <div class="carousel-item active">
      <img src="./img/01.jpg" class="d-block w-100" style="height:30vh">
      <div class="carousel-caption d-none d-md-block">
        <h5>今日台灣海岸</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus explicabo ipsa harum doloribus architecto dignissimos quibusdam fugit, cum quod inventore non, provident maiores consequatur qui saepe distinctio dolorem veritatis rerum!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/02.jpg" class="d-block w-100" style="height:30vh">
      <div class="carousel-caption d-none d-md-block">
        <h5>今日台灣農村</h5>
        <p>ｆｅｓａｆｓｄｆｓａｆｄｓｆｓａｄｆ</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/03.jpg" class="d-block w-100" style="height:30vh">
      <div class="carousel-caption d-none d-md-block">
        <h5>今日台灣高山</h5>
        <p>ＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡＡ</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/04.jpg" class="d-block w-100" style="height:30vh">
      <div class="carousel-caption d-none d-md-block">
        <h5>今日台灣平原</h5>
        <p>BBBBBBBBBBBBB月</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/05.jpg" class="d-block w-100" style="height:30vh">
      <div class="carousel-caption d-none d-md-block">
        <h5>今日台灣學校</h5>
        <p>CCCCCCCCCCCCCCCCCCC金</p>
      </div>
    </div>        
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<table class='col-6 mx-auto my-3'>
<tr>
    
    <td class="border p-2 align-top" style='height:400px'>
    
    <div class="col">
    <h3>今天好冷</h3>
    Anim pariatur cliche reprehenderit,Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint eum, consectetur pariatur officia incidunt et neque tenetur distinctio cumque eos, amet quasi labore nisi soluta a earum, in ipsum. Obcaecati.
    <div class="collapse multi-collapse" id="post1">
      <div class="card card-body p-0 border-0">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, animi! Dolor quibusdam asperiores accusantium, quae error, aliquid tempora perspiciatis magni ad eaque provident, molestiae necessitatibus temporibus aliquam? Illo, eius accusamus. enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <a id='btn1' class="btn btn-primary" data-toggle="collapse" href="#post1" role="button" aria-expanded="false" aria-controls="post1">
    顯示
  </a>
    </td>
    <td class="border p-2 align-top">
    
    
  <div class="col">
    <h3>明天會下雨</h3>
    AAAAA Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto totam mollitia eligendi voluptates harum doloremque inventore, laborum dolores explicabo? Laborum enim perspiciatis in accusantium nemo voluptate necessitatibus ad nesciunt itaque.
    <div class="collapse multi-collapse" id="post2">
      <div class="card card-body p-0 border-0">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <button id='btn2' class="btn btn-primary" type="button" data-toggle="collapse" data-target="#post2" aria-expanded="false" aria-controls="post2">
    顯示
  </button>
    </td>
  </tr>
  <tr>

    <td class="border p-2 align-top" style='height:400px'>
    </td>


    <td class="border p-2 align-top">

    </td>


  </tr>

</table>

  
<script src="./jquery-3.7.1.min.js"></script>


<script src="./bootstrap.js"></script></body>

</html>
<script>
$("#post1").on("shown.bs.collapse",()=>{
  $("#btn1").text("隱藏")
})
$("#post2").on("shown.bs.collapse",()=>{
  $("#btn2").text("隱藏")
})
$("#post1").on("hidden.bs.collapse",()=>{
  $("#btn1").text("顯示")
})
$("#post2").on("hidden.bs.collapse",()=>{
  $("#btn2").text("顯示")

})
</script>
