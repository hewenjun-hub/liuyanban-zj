<?php
session_start();
header("content-type:text/html;charset=utf8");
	$index=$_POST['index'];
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mymessage",$conn);
	mysql_query("set names utf8");
	$rs=mysql_query("delete from message where messageId='$index'");
	if($rs){
		echo '{"status":"10001","msg":"success"}';
	}else{
		echo '{"status":"20001","msg":"删除失败!"}';
	}
	mysql_close($conn);	
?>