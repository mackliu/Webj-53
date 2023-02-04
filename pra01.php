<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 練習</title>
    <style>
        /*使用css來規劃網頁元件的呈現方式 */
        .num{
            font-size:36px;
            border:1px solid #999;
            padding:12px;
            border-radius:50%;
            margin:5px;
            box-shadow:2px 2px 10px #ccc;
        }
    </style>
</head>
<body>
<h1>產生一組不重覆的六個數字的亂數組合</h1>    
<?php
/* 功能需要的分析及預計的執行流程
1.rand(1,38) 來產生範圍內的數值;
2.檢查有沒有重覆出現?
3.如果沒有重覆出現
4.丟到陣列中
5.如果有重覆出現
6.重新再rand(1,38);
7.當陣列中的個數到六個時就停止 
*/

$nums=[];

//使用函式count()來計算陣列中的個數
while(count($nums)<6){
    $num=rand(1,38);
    
    //使用in_array來檢查亂數產生的數字有沒有已經在陣列$nums中
    //使用!符號來反轉結果,true 變 false ,false 變 true
    if(!in_array($num,$nums)){

        //如果亂數產生的數字沒有在陣列中,
        //則將數字加入到陣列中
        $nums[]=$num;
    }
    //print_r($nums);
    //echo "<br>";
}

//使用迴圈將陣列$nums中的內容印出來呈現在網頁上
foreach($nums as $num){

    //在span標籤中加上 class num
    echo "<span class='num'>";

    //判斷數字是否小於10，如果小於10就加上0，
    //讓數字都是2位數呈現
    if($num<10){
        echo "0".$num;
    }else{
        echo $num;
        
    }
    echo "</span>";
}
?>
</body>
</html>