<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
setlocale(LC_TIME, "chs");
$weekday =strftime("%A");
$weekday =iconv("GB2312", "utf-8", $weekday);
switch ($weekday) {
   	case '星期一':
   		echo "今天是$weekday,新的一周开始了";
   		break;
   	case '星期二':
   		echo "今天是$weekday,时刻保持良好的工作状态";
   		break;
	case '星期三':
	echo "今天是$weekday,劳动者是最美的人，努力工作哟！";
		break;
	case '星期四':
	echo "今天是$weekday,勤奋才能创造绩效，加油！";
		break;
	case '星期五':
	echo "今天是$weekday,一定要出色的完成本周工作哟！";
		break;
	case '星期六':
	echo "今天是$weekday,可以睡到自然醒";
		break;
   	default:
   		echo "今天是$weekday,呵呵，轻松地玩上一天！";
   		break;
   }   
?>
</body>
</html>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	$name = array("1" => "品牌笔记本电脑", "2" => "高档男士衬衫", "3" => "品牌3G手机", "4" => "高档女士挎包");
	$price = array("1" => "4998元", "2" => "588元", "3" => "4666元", "4" => "698元");
	$counts = array("1" => 1, "2" => 1, "3" => 2, "4" => 1);
	echo '<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF0000">
	<tr>
		<td width="145" algin="center" bgcolor="#FFFFFF" class="STYLE1">商品价格</td>
		<td width="145" algin="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
		<td width="145" algin="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
		<td width="145" algin="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
	</tr>';
	foreach ($name as $key => $value) {
		echo '<tr>
			<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
			<td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$price[$key].'</td>
			<td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
			<td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key] * $price[$key].'</td>
			</tr>';
		}
		echo '</table>';
?>
</body>
</html>




<?php 
	for ($i = 1; $i <= 9; $i++) {
		echo "<table border=1 cellspacing=0 cellpadding=0 bordercolor=#cccccc>";
		echo "<tr>";
		for ($j = 1; $j <= $i; $j++) {
			echo "<td width=60 align=center>";
			echo "$j*$i=".$i * $j;
			echo "</td>";
		}
		echo "</tr>";
		echo "</table>"; 
	}
?>






<?php 
	$sum  = 0;
	for ($i = 1; $i <= 100; $i++) { 
		if ($i % 2 == 0) {
				continue;
		}
		$sum  = $sum + $i;
	}
	echo $sum;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	$year = 2012;
	if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
		echo "$year".'年'."是闰年";
	} else {
		echo "$year".'年'."是平年";
	}
?>
</body>
</html>
