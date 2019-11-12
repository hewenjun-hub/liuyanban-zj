<?php
header("content-type:text/html;charset=utf8");
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mymessage",$conn);
	mysql_query("set names utf8");
	$rs=mysql_query("select * from message");
	$str='{"status":"10001","msg":"success","data":[';
	while($info=mysql_fetch_array($rs,MYSQLI_ASSOC)){
		$str.=json_encode($info).',';
	}
	$str=substr($str,0,strlen($str)-1).']}';
	echo $str;

	mysql_free_result($rs);
		mysql_close($conn);	
	?>