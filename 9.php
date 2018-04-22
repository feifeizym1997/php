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
