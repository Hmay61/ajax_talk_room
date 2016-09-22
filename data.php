<?php 
	
	@mysql_connect('192.168.1.107','root','0601') or die(mysql_error());
	mysql_select_db('data');

	$maxID = $_GET['maxID'];
	$sql = "select * from message where id>$maxID";
	$rs = mysql_query($sql);

	$info = array(); 
	while($rows = mysql_fetch_assoc($rs)){
		$info[] = $rows;
	}

	echo json_encode($info);
?>
