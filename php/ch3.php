<?php

for($i=0;$i<10;$i=$i+1){
    echo "我是" . $i ."<br>";
}

echo "<hr>";

$i=0;
while($i<10){

    //可以在PHP的程式中放入HTML或CSS的標籤
    echo "<span style='font-size:";
    echo  $i*3+12;
    echo "px'>他是";
    echo  $i;
    echo "</span><br>";

    $i=$i+1;
}

$i=9;
while($i>=0){
    echo "<span style='font-size:";
    echo  $i*3+12;
    echo "px'>他是";
    echo  $i;
    echo "</span><br>";

    $i=$i-1;
}


//foreach

echo "<hr>";

//宣告陣列
$array=[36,10,25,17,28,43,14,12,36,10,25,17,28,43,14,12];

//foreach可以遍歷陣列的每一個元素
foreach($array as $size){
    echo "<span style='font-size:";
    echo  $size;
    echo "px'>他是";
    echo  $size . "px大小的字";
    echo "</span><br>";
}
/* foreach($array as $key => $value){
    echo $key . "=>" . $value . "<br>";
} */

?>
