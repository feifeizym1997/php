<?php 
$english = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩
$sum =$english+$math+$biological+$physical;
$avg =$sum/4;
$x =$math -$english;
$x2 =$english * $english;

echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";



<?php 
    $a = "我在慕课网学习PHP！";
	$b =$a;
	$c =&$a;
	$a = "我天天在慕课网学习PHP！";
	
	echo $b."<br />";
	echo $c."<br />";
?>
//(1)“=”：把右边表达式的值赋给左边的运算数。它将右边表达式值复制一份，交给左边的运算数。换而言之，首先给左边的运算数申请了一块内存，然后把复制的值放到这个内存中。

(2)“&”：引用赋值，意味着两个变量都指向同一个数据。它将使两个变量共享一块内存，如果这个内存存储的数据变了，那么两个变量的值都会发生变化。



<?php  
    $a = 1;
	$b = "1";
	var_dump($a==$b);
	echo "<br />";
	var_dump($a===$b);
	echo "<br />";
	var_dump($a!=$b);
	echo "<br />";
	var_dump($a<>$b);
	echo "<br />";
	var_dump($a !== $b);
	echo "<br />";
	var_dump($a< $b);
	echo "<br />";

	$c = 5;
	var_dump($a <$c);
	echo "<br />";
	var_dump($a >$c);
	echo "<br />";
	var_dump($a<=$c);
	echo "<br />";
	var_dump($a >=$c);
	echo "<br />";
	var_dump($a>=$b);
	echo "<br />";
?>

