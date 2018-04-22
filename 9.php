<?php
    date_default_timezone_set('Asia/ShangHai');
    $today = date('m-d',time());//获取当天日期
	$birthday = "02-14";//生日
	$money = 238;//消费金额
	$discount = 0.8;//八折优惠
	if($today==$birthday)
	{
	    $money =$money *$discount;
	}else{
	    $money=$money*1;
	}
		
	
		

	echo $money;
?>



<?php
    $totalMoney = 0;//总工资
    $basicMoney =  2000;//基本工资
	$sex = "男";
if($sex =="男")
	{
		$totalMoney = $basicMoney  + 0;// 男的没奖金
	}else if($sex =="女"){
		$totalMoney = $basicMoney  + 300;// 女的有奖金300元
}	
	echo $totalMoney;
?>



<?php
$num = rand(1,50);//获取1至50的随机数
$info = "";//提示信息
switch($num){
  case 1  :
		$info = "恭喜你！中了一等奖！";
		break;
case 2:	
		$info = "恭喜你！中了二等奖！";
		break;
 	case 3:
		$info = "恭喜你！中了三等奖！";
		break;
	default:
		$info = "很遗憾！你没有中奖！";
}
 echo $info; //输出是否中奖
?>



<?php
$i =  1 ; //从第1圈开始跑
do{  //跑10圈
    echo "在跑第".$i."圈。";
	$i++;
}while($i<=10);
?>


<?php
    //A例子
	$num = 2;
	$sum  = 10; 
	while($num>3){
		$sum = $sum  + 10;
	}
	echo "A例子的结果：".$sum."<br />";
	//B例子
	$num = 2;
	$sum  = 10;			
	do{
		$sum = $sum  + 10;
	}while($num>3);
	echo "B例子的结果：".$sum."<br />";
?>
//while 和do while的区别很好区分的 就是 前者是 先判断条件是否为真 再走循环体 后者是先执行一次循环体在做判断条件是否为真 




