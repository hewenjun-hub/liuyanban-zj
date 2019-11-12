<?php 
$page=$_POST['page'];
include 'conn.php';
$rs=mysql_query("select * from message");
$num=mysql_num_rows($rs);
if($page>=ceil($num/5)){
	$page=ceil($num/5);
	echo '{"status":"10001","msg":"success","data":"'.$page.'"}';
}else{
	echo '{"status":"20001","msg":"失败！aaaa","data":"'.$page.'"}';
}

mysql_free_result($rs);
mysql_close($conn);	
?>