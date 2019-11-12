<?php
header("content-type:text/html;charset=utf8");
	$index=$_POST['index'];
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mymessage",$conn);
	mysql_query("set names utf8");
	$rs=mysql_query("select * from message where messageId='$index'");
	$info=mysql_fetch_array($rs);
	echo $info['author'];
	mysql_free_result($rs);
	mysql_close($conn);	
?>