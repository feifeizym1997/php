<?php
echo  __FILE__;
echo "<br />";
echo  __LINE__;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo PHP_OS;
echo "<br />";
?>

//2,4 是2条下划线   __FILE__ :php程序文件名 __LINE__ :PHP程序文件行数。



<?php 
$p="";
//定义圆周率的两种取值
define("PI1",3.14);
define("PI2",3.142);
//定义值的精度
$height = "中";
//根据精度返回常量名，将常量变成了一个可变的常量
if($height == "中"){
    $p = "PI1";
}else if($height == "低"){
	$p = "PI2";
}
$r=1;
$area = constant("$p")*$r*$r;
echo $area;
?>


//第二种是使用constant()函数。它和直接使用常量名输出的效果是一样的，但函数可以动态的输出不同的常量，在使用上要灵活、方便，其语法格式如下：
