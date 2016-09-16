<?php 
	//获得最新的聊天内容
	@mysql_connect('192.168.1.107','root','0601') or die(mysql_error());
	mysql_select_db('data');

	//接收表单信息并且存储
	//print_r($_POST);
	$msg = $_POST['msg'];
	$color = $_POST['color'];
	$feeling = $_POST['feeling'];
	$receiver= $_POST['who'];

	$sql = "insert into message values(null,'$msg','admin','$receiver','$color','$feeling',now())";
	if(mysql_query($sql)){
		echo "send successfully";
	}
	else {
		echo "send fail";
	}

?>