<h1>SID:C112181105<br>
    NAME:韓丞哲</h1>
<?php 
// 使用array()指定結合陣列的元素
$arr = array( "color"=>"黑色", "name"=> "韓丞哲", 
              "shape"=>"三角形", 100 ); 

foreach($arr as $key=>$value) echo "$key~$value~<br><hr>";
echo "<br/>";
$arr["color"] = "紅色"; 
$arr["name"] = "韓丞哲";
$arr["shape"] = "Circle";
unset($arr["type"]);

print_r($arr); echo "<br/>";