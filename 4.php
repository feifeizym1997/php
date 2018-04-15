<?php 
    $man="男";
	$flag=$man=="男";
	echo $flag ;
	echo "<br />" ;
	var_dump($flag);
?>
/*php中运算符有优先级，和平时做加减乘除的运算优先级类似，==的优先级高于=，
所以先计算$man == "男"，返回结果是TRUE或者FALSE,第二步拿上一步的计算结果给$flag赋值，
所以$flag=TRUE或者$flag=FALSE，$flag就是布尔型*/
