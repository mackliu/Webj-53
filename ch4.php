<?php
//陣列

$a=array(1,2,3); //陣列宣告並給值

$a=[1,2,3];  //陣列宣告並給值

$a=[];  //空陣列宣告

$a[]=3;  //動態給值
$a[]=2;
$a[]=1;

print_r($a);

echo "<hr>";

//關聯式陣列-將數字的索引改成字串,讓陣列的值具有可理解的欄位
$b['姓名']="劉勤永";
$b['生日']="1974/10/07";
$b['學校']="新北高工";

print_r($b);
echo "<hr>";

$c[]="劉勤永";
$c[]="1974/10/07";
$c[]="新北高工";
print_r($c);

$array=[];

//使用迴圈來建立陣列內容
for($i=0;$i<30;$i=$i+1){
    $array[]=rand(12,60);
}
//print_r($array);

//使用迴圈來產生網頁內容
foreach($array as $size){
    echo "<span style='font-size:";
    echo  $size;
    echo "px'>他是";
    echo  $size . "px大小的字";
    echo "</span><br>";
}
//print_r($array);

?>