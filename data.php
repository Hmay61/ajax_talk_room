<?php 
	//获得最新的聊天内容
	@mysql_connect('192.168.1.107','root','0601') or die(mysql_error());
	mysql_select_db('data');

	$maxID = $_GET['maxID'];
	//每次都请求新的聊天内容(不要获得旧的信息)
	//本次请求的记录结果id需要大于上次“已经获得记录的最大id”
	$sql = "select * from message where id>$maxID";
	$rs = mysql_query($sql);

	$info = array(); //因为我们通过json格式提供数据到客户端，所以定义一个数组，rows是一维数组，info是二维数组
	while($rows = mysql_fetch_assoc($rs)){
		$info[] = $rows;
	}
	//通过json格式提供数据到客户端
	echo json_encode($info);
?>