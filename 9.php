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


<?php
//for语句写法
for($i=1,$sum=0;$i<=100;$i++){
    $sum = $sum + $i; //	累加求和
}
echo "for语句的运行结果：".$sum."<br />" ;

//while语句写法
$i =  1 ; // 从1开始累加
$sum = 0; //初始化和为0
while($i<=100){  //判断是否小于100
	$sum = $sum + $i; //	累加求和
	$i++; //递增1
}
echo "while语句的运行结果：".$sum."<br />" ;
?>

<?php
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名  
foreach($students as $v)
{ 
    echo $v;//输出（打印）姓名
	echo "<br />";
}
?>



<?php
 $students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);//10个学生的学号、姓名、分数，用数组存储
 
foreach($students as $key =>$val)
{ //使用循环结构遍历数组,获取学号 
     echo $key; //输出学号
	 echo ":";
	 //循环输出姓名和分数
	 foreach($val as $v)
	{
		echo $v; 
	 }
	 echo "<br />";
}
?>





//删除当前行 ctrl +d；
//上下换行 alt +shang;
//航注释 ctrl+/
//快注释 ctrl +shirft+/
//复制当前行ctrl + window + alt + 下箭头才对
//提示 alt+/
