<?php
header("content-type:text/html;charset=utf8");
	$index=$_POST['index'];
	$contents=$_POST['contents'];
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mymessage",$conn);
	mysql_query("set names utf8");
	$rs=mysql_query("update message set reply='$contents' where messageId='$index'");
	if($rs){
		echo '{"status":"10001","msg":"success"}';
	}else{
		echo '{"status":"20001","msg":"回复失败！"}';
	}
	mysql_close($conn);	
?>